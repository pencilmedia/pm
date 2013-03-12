$(document).ready(function() {
	// ANIMATION - Portfolio FX
	// Portfolio Page add class to trigger animation
	$('a[data-anim]').hover(function() {
		var anim = $(this).attr('data-anim');
		$(this).removeClass().addClass(anim);
	},
	function() {
		$(this).removeClass();
	});
});// End

