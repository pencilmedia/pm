/**  Local Storage - Save theme **/

var getBody = document.getElementsByTagName('body');

var bgDefault =  'beige' ;
var bgSilver =  'silver' ;
var bgOrange =  'orange' ;
var bgLavendar =  'lavendar' ;
var bgPostIt=  'yellow' ;
var bgSky =  'blue' ;
var bgPink =  'pink' ;
var bgRed =  'red' ;
var bgBrightGreen =  'brightgreen' ;
var bgGreen =  'green' ;

var theme = {};
theme.changeColor = function(bgColor) {
	
		var theColor;
		switch(bgColor)
		{
		case "silver":
		theColor = bgSilver;
		  break;
		case "orange":
		theColor = bgOrange;
		  break;
		case "lavendar":
		theColor = bgLavendar;
		  break;
		case "yellow":
		theColor = bgPostIt;
		  break;
		case "blue":
		theColor = bgSky;
		  break;
		case "pink":
		theColor = bgPink;
		  break;
		case "red":
		theColor = bgRed;
		  break;
		case "brightgreen":
		theColor = bgBrightGreen;
		  break;
		case "green":
		theColor = bgGreen;
		  break;
		default:
		theColor = bgDefault;
		}
		theme.saveIt(theColor);
},
//SAVE THEME
theme.saveIt = function(theColor) {
	// FIRST erase previous theme if it exists
	theTheme = localStorage.getItem('theme');
	localStorage.removeItem('theme');
	$(document.body).removeClass(); // Remove any class whether it is the localStorage class or the bgArray class set
	
	localStorage.setItem('theme', theColor);
	$(document.body).addClass( theColor );
	if ($('.clearedMsg')) { // FIRST remove any exisisting message box
		$('.clearedMsg').remove();
	}
	var themeMsg = $('#styleSwitcher').before('<div class=\'clearedMsg\'>'+ theColor +' theme saved</div>');
	$('.clearedMsg').show('slow').delay(2000).hide('fast'); // show dynamic message 
	
},
 //ERASE THEME
theme.eraseIt = function(theColor) {
	if ( localStorage.theme == null ) {
		$('.clearedMsg').remove(); 
		var clearMsg2 = $('#styleSwitcher').before('<div class=\'clearedMsg\'>No theme to clear</div>');
		$('.clearedMsg').show('slow').delay(2000).hide('fast'); // show dynamic message 
	} else {
		$('.clearedMsg').remove(); // first clear any previous dynamic message box
		theTheme = localStorage.getItem('theme');
		localStorage.removeItem("theme");
		$(document.body).removeClass(  ); // remove any previous theme
		var clearMsg2 = $('#styleSwitcher').before('<div class=\'clearedMsg\'>'+ theTheme +' theme cleared</div>');
		$('.clearedMsg').show('slow').delay(2000).hide('fast'); // show dynamic message 
	}
}

$(document).ready(function() {
	
	/*************************************************************/
	/*** THEME PICKER  ***/
	// Set user selected theme
	/*************************************************************/
	$(document.body).addClass( localStorage.theme );
		// Setting theme
		themebox = document.getElementById('styleSwitcher');
		links = themebox.getElementsByTagName('div');
		for( var i=0, ii = links.length; i<ii; i++ ){
			links[i].onclick = function() { 
				bgColor = this.getAttribute('title'); // get what color to switch too
				theme.changeColor(bgColor); // pass color switch value to function 
			};
		// Clearing theme
		clearTheme = document.getElementById('clearTheme');
		clearTheme.onclick = function() {
			theme.eraseIt( localStorage.theme )
		};
	}
	/*************************************************************/
	/*** RANDOM COLOR THEMING - if no theme was selected/saved ***/
	// Auto-select random theme on window loading or refresh
	/*************************************************************/
	if ( localStorage.theme == null ) {
	
	   var bgClass = document.getElementsByTagName('body');
	   var bgArray = new Array("beige", "silver", "orange", "lavendar", "yellow", "blue", "pink", "red", "brightgreen", "green");
	   var spot = Math.floor(Math.random()* bgArray.length); 
	   $(bgClass).addClass(bgArray[spot]) 
	   
	}
	
});

