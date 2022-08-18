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