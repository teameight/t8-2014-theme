/**
 * Functionality specific to Team Eight.
 *
 */

( function( $ ) {
	
	$('a.scroll').click(function() {
		console.log('anchor');
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
		    $('html,body').animate({
		      scrollTop: target.offset().top
		    }, 800);
		    return false;
		  }
		}
	});
} )( jQuery );