/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

var customFileField = function( e )
{
	var $input	 = jQuery( this ),
	    $label	 = $input.prev( 'label' ),
	    labelVal = $label.html();

	var fileName = '';

	if( this.files && this.files.length > 1 )
		fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
	else if( e.target.value )
		fileName = e.target.value.split( '\\' ).pop();

	if( fileName )
		$label.find( 'span' ).html( fileName );
	else
		$label.html( labelVal );

	// Firefox bug fix
	//$input
	//	.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
	//	.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
};