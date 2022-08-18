//magnific
//------------------------------------------------------------------------
//                    MAGNIFIC POPUP(LIGHTBOX) SETTINGS
//------------------------------------------------------------------------

$('.video-popup').magnificPopup({
    type: 'iframe',
    disableOn: function () {
        if (!pAgree || pAgree !== '1') {
            return false;
        }
        return true;
    }
});
//magnificend

//------------------------------------------------------------------------
//						OWL CAROUSEL OPTIONS
//------------------------------------------------------------------------

$('.carousel-single').owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoHeight: false,
    items: 1,
    dots: true,
    navText: ['',''],
    rewind: true
});
