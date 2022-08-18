//start spr-countdown
var $countDown = $('.countdown');
$countDown.countdown('2030/12/24 23:59:59', function (event) {
    $countDown.find('.days').html(event.strftime('%D'));
    $countDown.find('.hours').html(event.strftime('%H'));
    $countDown.find('.minutes').html(event.strftime('%M'));
    $countDown.find('.seconds').html(event.strftime('%S'));
}).on('finish.countdown', function () {

}//end finish.countdown
);//end spr-countdown