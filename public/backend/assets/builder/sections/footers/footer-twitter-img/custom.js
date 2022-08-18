//cookie-dependent-start
function strartTwitter() {
    var configProfile = {
        "profile": {
            "screenName": 'multifourdesign'
        },
    "domId": 'twitterfeed-target',
        "maxTweets": 1,
        "enableLinks": true,
        "showUser": false,
        "showTime": true,
        "showImages": false,
        "showRetweet": false,
        "showInteraction": false
    };
    twitterFetcher.fetch(configProfile);
}
//cookie-dependent-end

//windows-load-start
if (window.twitterFetcher) {
    strartTwitter();
}

document.addEventListener('cookie.accepted', function () {
    strartTwitter();
});
//windows-load-end
