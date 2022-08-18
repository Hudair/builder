//------------------------------------------------------------------------
//						TOOGLE BUTTON SCRIPT
//------------------------------------------------------------------------

$(document).on('click', ".toogle-btn:not(.close)", function (e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    var href = $(this).attr('href');
    $(href).toggleClass("show");
    $(this).parent().trigger("close.alert");
});

$(document).on('click', ".toogle-btn.close", function (e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    $(this).parent().removeClass("show");
    $(this).parent().trigger("close.alert");
});

$(document).on('click', '[data-toggle=alert]', function (e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    var href = $(this).attr('data-target');
    $(href).toggleClass("show");

    if(!$(href).hasClass("show")) $(href).trigger("close.alert");
    else $(href).trigger("open.alert");
});

$(document).on('click', '.cookie-alert .accept', function (e) {
    if (document.querySelector('.blr-active-page')) return;
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    setCookie('policy_agree', '1');
    accept();
    $(this).closest('.cookie-alert').removeClass("show");
    $(this).closest('.cookie-alert').trigger("close.alert");

    var evetnCookieAccepted = new CustomEvent(
        'cookie.accepted'
        , {}
    );

    setTimeout(function () {
        document.dispatchEvent(evetnCookieAccepted);
        pAgree = '1';
    }, 2000);
});

//cookie-dependent-start
var pAgree = getCookie('policy_agree');
if (!pAgree || pAgree !== '1') {
    $('.cookie-alert').addClass("show");
} else {
    $('.cookie-alert').removeClass("show");
    accept();
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

function setCookie(name, val) {
    var domain = document.domain === 'localhost'
    || document.domain === 'file'
    || document.domain === '' ? 'multifour.com' : document.domain;
    document.cookie = name + '=' + val + '; expires=Tue, 19 Jan 2038 03:14:07 GMT; path=/; domain=.'
        + domain + ';';
}

function accept () {
    var scripts = document.querySelectorAll('[data-cookiescript=accepted]');
    [].forEach.call(scripts, function (el) {
        if (el.tagName === 'SCRIPT') {
            el.setAttribute('type', 'text/javascript');
            var elClone = el.cloneNode(true);
            el.parentElement.insertBefore(elClone, el);
            el.parentElement.removeChild(el);
        } else if (el.tagName === 'IFRAME') {
            el.setAttribute('src', el.dataset.src);
        }
    });
}
//cookie-dependent-end