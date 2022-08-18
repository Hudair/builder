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
