//------------------------------------------------------------------------
//						OWL CAROUSEL OPTIONS
//------------------------------------------------------------------------

$('.carousel-5item-padx2').owlCarousel({
    loop: false,
    margin: 60,
    nav: true,
    navText: ['',''],
    dotsEach: true,
    autoplay: true,
    autoplayHoverPause: true,
    rewind: true,
    startPosition:1,
    responsive: {
        0: {
            items: 1,
            stagePadding: 30
        },
        400: {
            items: 2,
            stagePadding: 60
        },
        700: {
            items: 3,
            stagePadding: 60
        },
        1200: {
            items: 4,
            stagePadding: 60
        },
        1600: {
            items: 5,
            stagePadding: 60
        }
    }

});
