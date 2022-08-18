//------------------------------------------------------------------------
//						OWL CAROUSEL OPTIONS
//------------------------------------------------------------------------

$('.carousel-3item-nogutters').owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    navText: ['',''],
    dotsEach: true,
    autoplay: true,
    autoplayHoverPause: true,
    rewind: true,
    responsive: {
        0: {
            items: 1
        },
        500: {
            items: 2
        },
        1000: {
            items: 3
        }
    }

});
