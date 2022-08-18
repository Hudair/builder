//------------------------------------------------------------------------
//						OWL CAROUSEL OPTIONS
//------------------------------------------------------------------------

$('.carousel-5item-stpad').owlCarousel({
    loop: false,
    margin: 30,
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
            stagePadding: 30
        },
        700: {
            items: 3,
            stagePadding: 30
        },
        1200: {
            items: 4,
            stagePadding: 150
        },
        1600: {
            items: 5,
            stagePadding: 150
        }
    }

});
