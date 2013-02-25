// ***********************************************
//  ONLOAD FORM FIELD FOCUS
// ***********************************************
//  focuses first form element
// ***********************************************
jQuery(document).ready(function() {
	if (!jQuery(".first_field")) return false;
	jQuery(".first_field").focus();
	jQuery(".first_field").addClass('focus_field');
	
	jQuery('input,select,textarea').bind('focus', function() { jQuery(this).addClass('focus_field'); });
	jQuery('input,select,textarea').bind('blur', function() { jQuery(this).removeClass('focus_field'); });
});
