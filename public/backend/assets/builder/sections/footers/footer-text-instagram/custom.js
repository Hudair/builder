//cookie-dependent-start
function startInstafeed() {
    var userFeed = new Instafeed({
    target: 'instafeed-target',
        get: 'user',
        userId: '7300019211',
        clientId: '79b307e8e71148a6902b1c4edc60f117',
        accessToken: '7300019211.79b307e.e0535982d5dc4160b020dd46d3195b1b',
        resolution: 'standard_resolution',
        template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
        sortBy: 'most-recent',
        limit: 6,
        links: false
    });
    userFeed.run();
}
//cookie-dependent-end

//windows-load-start
if (window.Instafeed) {
    startInstafeed();
}

document.addEventListener('cookie.accepted', function () {
    startInstafeed();
});
//windows-load-end