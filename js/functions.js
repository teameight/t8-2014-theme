/**
 * Functionality specific to Team Eight.
 *
 */

( function( $ ) {
	
	$('a.scroll').click(function() {
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

	$('.team-about .text > h4, .team-about .tcrd img').click(function() {
		var $thisparent = $(this).closest('.team-about');
		$thisparent.toggleClass('open');
	});


} )( jQuery );