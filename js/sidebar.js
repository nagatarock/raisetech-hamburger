jQuery( function( $ ) {
	$( ".p-sidebar_button" ).on( "click", function() {
		$( this ).toggleClass( "is-open" );
		$( ".l-sidebar" ).toggleClass( "is-open" );
		$( ".menu-bg" ).toggleClass( "is-open" );
		$( "body" ).toggleClass( "is-open" );
	} );
} );