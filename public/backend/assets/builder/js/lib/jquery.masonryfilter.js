/**
 * MasonryFilter
 * @version: v1.0.3
 * @author: Ivan Horbyk
 * @github: https://github.com/vanoZap/masonry-filter
 * @site: http://thinkanddo.com.ua
 *
 * Created by Ivan Horbyk on 2018-10-1. Please report any bug at vano.gorbik@gmail.com
 *
 * Copyright (c) 2018 Ivan Horbyk https://github.com/vanoZap/masonry-filter
 *
 * The MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

(function ($) {
    function MasonryFilter(context, options) {
        this.$context = $(context);

        this.init();
    }

    MasonryFilter.prototype = {
        $buffer: null
        , init: function () {
            var _this = this;
            this.setBuffer();
            this.$context.find('.controls button').each(function (indx, el) {
                $(el).on('click', $.proxy(_this.applyFilter, _this, el) );
            });

            $(window).on('resize', this.setBuffer.bind(this));
        }
        , refresh: function () {
            var _this = this;

            this.$context.find('.controls button').each(function (indx, el) {
                $(el).off('click', $.proxy(_this.applyFilter, _this, el) );
            });

            this.$context.data('masonry.builder').refresh();

            this.init();
        }
        , destroy: function () {
            var _this = this;

            this.getBuffer();

            this.$context.find('.controls button').each(function (indx, el) {
                $(el).off('click', $.proxy(_this.applyFilter, _this, el) );
            });

            this.$context.data('masonry.builder').destroy();
            this.$context.removeData('masonry.filter');
        }
        , clear: function () {
            this.getBuffer();
            this.$context.data('masonry.builder').clear();
        }
        , applyFilter: function (button) {
            if (this.$context.data('masonry.builder').resizing) return;

            if (
                button.classList.contains('spr-outline-control')
                || button.classList.contains('spr-oc-show')
            ) return;

            var filterValue = button.dataset.category;
            this.getBuffer(filterValue);

            this.$context.data('masonry.builder').appllyFilter();
        }
        , setBuffer: function () {
            this.$buffer = this.$context.find('.masonry-item');

            this.$buffer.each(function (indx, el) {
                $(el).removeClass('m-hide');
            });
        }
        , getBuffer: function (filterValue) {
            filterValue = filterValue || '';

            this.$buffer.each(function (indx, item) {
                if (! ($(item).attr('data-category') === filterValue || filterValue === 'all' || filterValue === '') )
                    $(item).addClass('m-hide');
                else
                    $(item).removeClass('m-hide');
            });
        }
    };

    MasonryFilter.prototype.constructor = MasonryFilter;

    function MasonrySimpleBuilderFlexCell(context, options) {
        this.item = options.item || '.masonry-item';
        this.delay = options.delay || 700;

        this.$context = $(context);
        this.$items = null;
        this.itemsB = [];
        this.containerItems = null;
        this.bCI = null;

        this.currentPosition = {
            top: 0
            , left: 0
        };
        this.nextTop = 0;

        this.resizing = false;

        this.init();
    }

    MasonrySimpleBuilderFlexCell.prototype = {
        init: function () {
            this.$items = this.$context.find(this.item);

            this.resize();

            $(window).on('resize', this.resize.bind(this));
        }
        , refresh: function () {
            this.$items = this.$context.find(this.item);

            this.resize();
        }
        , appllyFilter: function () {
            var _this = this;

            this.$items = this.$context.find(this.item);

            this.currentPosition = {
                top: 0
                , left: 0
            };

            this.nextTop = null;

            this.$items.each(function (indx, el) {
                if (!$(el).hasClass('m-hide')) {
                    var cP = _this._getCurrentPosition(el, _this.itemsB[indx]);
                    setTimeout(function() {
                        $(el).css({
                            'top': cP.top
                            , 'left': cP.left
                            , 'z-index': '100'
                        });
                    }, 300);
                } else {
                    setTimeout(function() {
                        $(el).css({
                            'top': 0
                            , 'left': 0
                            , 'z-index': '1'
                        });
                    }, 600);
                }
            });

            $(this.containerItems).css('height', this.nextTop);
        }
        , _getCurrentPosition: function (el, bEl) {

            var cP = {
                top: this.currentPosition.top
                , left: this.currentPosition.left
            };

            if (this.nextTop === null) this.nextTop = bEl.height;

            if (cP.left + bEl.width > this.bCI.width) {
                this.currentPosition.top = cP.top = this.nextTop;
                this.currentPosition.left = bEl.width;
                cP.left = 0;

                this.nextTop += bEl.height;
            } else {
                this.currentPosition.left += bEl.width;
            }

            return cP;
        }
        , resize: function () {
            if (this.resizing) return;

            this.resizing = true;

            var _this = this;
            var itemsStyle = [];

            this.clear();

            setTimeout(function () {
                _this.containerItems = _this.$items[0].parentElement;
                _this.bCI = _this.containerItems.getBoundingClientRect();

                var bParent = _this.containerItems.getBoundingClientRect();

                $(_this.containerItems).css({
                    'height': bParent.height
                    , 'position': 'relative'
                });

                _this.$items.each(function (indx, el) {
                    var bEl = el.getBoundingClientRect();

                    _this.itemsB.push(bEl);

                    itemsStyle.push({
                        'top': bEl.top - bParent.top
                        , 'left': bEl.left - bParent.left
                        , 'position': 'absolute'
                        , 'width': bEl.width
                    });
                });

                _this.$items.each(function (indx, el) {
                    $(el).css(itemsStyle[indx]);
                });

                _this.resizing = false;
            }, this.delay);
        }
        , clear: function () {
            this.containerItems = this.containerItems || this.$items[0].parentElement;

            this.itemsB = [];

            $(this.containerItems).removeAttr('style');

            this.$items.each(function (indx, el) {
                $(el).removeAttr('style');
            });
        }
        , destroy: function () {
            this.clear();
            this.$context.removeData('masonry.builder');
        }
    };

    MasonrySimpleBuilderFlexCell.prototype.constructor = MasonrySimpleBuilderFlexCell;

    function MasonryColumnBuilderFlexCell(context, options) {
        this.cols = options.cols = options.cols || 999;
        this.item = options.item = options.item || '.masonry-item';

        this.columnItems = [];

        MasonrySimpleBuilderFlexCell.apply(this, [context, options]);
    }

    MasonryColumnBuilderFlexCell.prototype = Object.assign(Object.create(MasonrySimpleBuilderFlexCell.prototype), {
        appllyFilter: function () {
            var _this = this;

            this.$items = this.$context.find(this.item);

            this.nextTop = null;

            for ( var i = 0; i < this.cols; i++) {
                _this.columnItems[i].top = 0;
            }

            this.$items.each(function (indx, el) {
                if (!$(el).hasClass('m-hide')) {
                    setTimeout(function() {
                        var CP = _this.findMinTop();
                        var bEl = _this.itemsB[indx];

                        $(el).css({
                            'top': CP.top
                            , 'left': CP.left
                            , 'z-index': '100'
                        });

                        _this.columnItems[CP.indx].top = _this.columnItems[CP.indx].top + bEl.height;
                    }, 300);
                } else {
                    setTimeout(function() {
                        $(el).css({
                            'top': 0
                            , 'left': 0
                            , 'z-index': '1'
                        });
                    }, 600);
                }
            });

            $(this.containerItems).css('height', this.nextTop);
        }
        , findMinTop: function () {
            return this.columnItems.reduceRight(function(a, b) {
                return a.top < b.top ? a : b;
            });
        }
        , resize: function () {
            if (this.resizing) return;

            this.resizing = true;

            var _this = this;

            this.clear();

            $(_this.containerItems).css({
                'display': 'block'
            });

            _this.$items.each(function (indx, el) {
                $(el).css({
                    'float': 'left'
                });
            });

            setTimeout(function () {
                _this.containerItems = _this.$items[0].parentElement;
                _this.bCI = _this.containerItems.getBoundingClientRect();

                // var bParent = _this.containerItems.getBoundingClientRect();
                //
                // $(_this.containerItems).css({
                //     'height': bParent.height
                //     , 'position': 'relative'
                // });

                var itemsContainerWidth = _this.$context.find('.masonry-items-container').width();
                var colNumber = 0;
                var lineEl = 0;

                var $cloneCI = $(_this.containerItems).clone().appendTo(_this.containerItems.parentElement);

                $cloneCI.removeAttr('style').css({
                    'display': 'block'
                });

                var $cloneItems = $cloneCI.find(_this.item);

                $cloneItems.each(function (indx, el) {
                    $(el).removeAttr('style').css({
                        'float': 'left'
                    });
                });

                var pbCI = _this.containerItems.parentElement.getBoundingClientRect();

                $cloneCI.css({
                    'position': 'absolute'
                    , 'top': _this.bCI.top - pbCI.top
                    , 'left': _this.bCI.left - pbCI.left
                    , 'width': _this.bCI.width
                    , 'visibility': 'hidden'
                });

                var bParent = $cloneCI[0].getBoundingClientRect();

                $(_this.containerItems).css({
                    'height': bParent.height
                    , 'position': 'relative'
                });

                $cloneItems.each(function (indx, el) {
                    var bEl = el.getBoundingClientRect();

                    _this.itemsB.push(bEl);

                    lineEl += bEl.width;

                    if (lineEl <= itemsContainerWidth) {
                        _this.columnItems[colNumber] = {
                            top: bEl.top - bParent.top
                            , left: bEl.left - bParent.left
                            , indx: colNumber

                        };

                        colNumber += 1;
                    }
                });

                $cloneCI.remove();

                _this.cols = _this.cols > colNumber ? colNumber : _this.cols;

                _this.$items.each(function (indx, el) {
                    var CP = _this.findMinTop();
                    var bEl = _this.itemsB[indx];

                    $(el).css({
                        'top': CP.top
                        , 'left': CP.left
                        , 'position': 'absolute'
                        , 'width': bEl.width
                        , 'float': 'left'
                    });

                    _this.columnItems[CP.indx].top = _this.columnItems[CP.indx].top + bEl.height;
                });

                _this.resizing = false;
            }, this.delay);
        }
        , clear: function () {
            this.containerItems = this.containerItems || this.$items[0].parentElement;

            this.itemsB = [];
            this.columnItems = [];
        }
    });

    MasonryColumnBuilderFlexCell.prototype.constructor = MasonryColumnBuilderFlexCell;

    $.fn.MasonryFilter = function (options) {
        return this.each(function () {
            options = options || {};
            var $this = $(this);
            var data = $this.data('masonry.filter');
            var dataMB = $this.data('masonry.builder');

            if (!data) {
                data = new MasonryFilter(this, options);
                $this.data('masonry.filter', data);
            }

            if (!dataMB) {
                switch (options.type) {
                    case "column-flex":
                        dataMB = new MasonryColumnBuilderFlexCell(this, options);
                        break;
                    case "simple":
                    default:
                        dataMB = new MasonrySimpleBuilderFlexCell(this, options);
                        break;
                }
                $this.data('masonry.builder', dataMB);
            }
        });
    };

    $.fn.MasonryFilter.Constructor = MasonryFilter;
})(jQuery);