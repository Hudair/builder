//------------------------------------------------------------------------
//                    MAGNIFIC POPUP(LIGHTBOX) SETTINGS
//------------------------------------------------------------------------

$('.gallery').each(function () { // the containers for all your galleries
    var $this = $(this);
    $this.magnificPopup({
        delegate: '.video-popup, .image-popup', // the selector for gallery item
        type: 'image',
        gallery: {
            enabled: true
        },
        image: {
            titleSrc: function (item) {
                return item.el.find('img').attr('alt');
            }
        },
        callbacks: {
            open: function() {
                $this.trigger('stop.owl.autoplay');
            },
            close: function() {
                $this.trigger('play.owl.autoplay');
            }
        },
        disableOn: function () {
            if (!pAgree || pAgree !== '1') {
                return false;
            }
            return true;
        }
    });
});

$('.masonry-filter').MasonryFilter({
    type: 'column-flex'
});