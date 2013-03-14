/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#customForm");
	var make = $("#make");
	var makeInfo = $("#makeInfo");
	var model = $("#model");
	var modelInfo = $("#modelInfo");
	var uploader = $("#upload");
	
	//On blur
	make.blur(validateMake);
	model.blur(validateModel);
	
	//On key press
	make.keyup(validateMake);
	model.keyup(validateModel);
	//message.keyup(validateModel);
	
	//On Submitting
	form.submit(function(){
		if(validateMake() & validateModel())
			return true;
		else
			return false;
	});
	
	//validation functions
	
	function validateMake(){
		//if it's NOT valid
		if(make.val().length < 3){
			make.addClass("error");
			makeInfo.text("Which Make?");
			makeInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			make.removeClass("error");
			makeInfo.text("Right on!");
			makeInfo.removeClass("error");
			return true;
		}
	}
	
	function validateModel(){
		//if it's NOT valid
		if(model.val().length < 3){
			model.addClass("error");
			modelInfo.text("Which Model?");
			modelInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			model.removeClass("error");
			modelInfo.text("Sweet!");
			modelInfo.removeClass("error");
			return true;
		}
	}
	
	function validateMessage(){
		//it's NOT valid
		if(message.val().length < 5){
			message.addClass("error");
			return false;
		}
		//it's valid
		else{			
			message.removeClass("error");
			return true;
		}
	}
	
	
});