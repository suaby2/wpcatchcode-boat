// generate jquery ready function below.
// eslint-disable-next-line no-undef
jQuery( document ).ready( function( $ ) {
	// generate document click on element and toggle class open
	$( document ).on( 'click', '.faq-item__icon', function() {
		$( this ).closest('.faq-item').toggleClass( 'open' );
	} );
} );
