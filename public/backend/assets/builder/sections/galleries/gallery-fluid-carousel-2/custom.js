//------------------------------------------------------------------------
//						OWL CAROUSEL OPTIONS
//------------------------------------------------------------------------

$('.carousel-4item-nogutters').owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    navText: ['',''],
    dotsEach: true,
    autoplay: true,
    autoplayHoverPause: true,
    rewind: true,
    startPosition:1,
    responsive: {
        0: {
            items: 1
        },
        500: {
            items: 2
        },
        1200: {
            items: 4
        }
    }

});
