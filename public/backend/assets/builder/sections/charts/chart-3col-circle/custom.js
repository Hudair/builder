//------------------------------------------------------------------------------------
//								COUNT UP SCRIPT
//------------------------------------------------------------------------------------

var variableCountUp = $('.counter-up').waypoint({
	handler: function(direction) {
		$(this.element).find('.count-up-data').each(function(i, el){
			var endVal = el && Number.isInteger(el.textContent * 1) ? el.textContent * 1 : 100 ;
			$(el ).countup({endVal: endVal, options: { separator : ''}});
		});
        variableCountUp[0].disable();
	},
	offset: '70%'
});

//------------------------------------------------------------------------------------
//								CHART PLAY SCRIPT
//------------------------------------------------------------------------------------

$('.circular-chart').each(function (indx, el) {
    // if (!/circular-play/i.test( $(el).attr('class') ) ) {
    //     $(el).attr('class', $(el).attr('class').replace(/\scircular-play/g, ''));
    // }
    var variableChart = $(el).waypoint({
        handler: function(direction) {
            if (!/circular-play/i.test( $(this.element).attr('class') ) ) {
                $(this.element).attr('class', $(this.element).attr('class') + ' circular-play');
            }
            variableChart[0].disable();
        },
        offset: '70%'
    });
});