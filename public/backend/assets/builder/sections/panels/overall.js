//------------------------------------------------------------------------
//						TOOGLE BUTTON SCRIPT
//------------------------------------------------------------------------

$(document).on('click', ".toogle-btn:not(.close)", function (e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    var href = $(this).attr('href');
    $(href).toggleClass("show");
});

$(document).on('click', ".toogle-btn.close", function (e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    $(this).parent().removeClass("show");
    $(this).parent().trigger("close.panel");
});

$(document).on('click', '[data-toggle=panel]', function (e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    var href = $(this).attr('data-target');
    $(href).toggleClass("show");

    if(!$(href).hasClass("show")) $(href).trigger("close.alert");
    else $(href).trigger("open.alert");
});