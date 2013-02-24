
/***************************/
//VALIDATION			
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#customForm");
	var name = $("#name");
	var nameInfo = $("#nameInfo");
	var email = $("#email");
	var emailInfo = $("#emailInfo");
	var uploader = $("#upload");
	var message = $("#message");
	var messageInfo = $("#messageInfo");
	
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	//On key press
	name.keyup(validateName);
	message.keyup(validateMessage);
	
	//validation functions
	function validateEmail(){
		//testing regular expression
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			emailInfo.text("");
			emailInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			email.addClass("error");
			emailInfo.text("Valid email address please.");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 2){
			name.addClass("error");
			nameInfo.text("We want names with more than 1 letter!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text("");
			nameInfo.removeClass("error");
			return true;
		}
	}
	function validateMessage(){
		//it's NOT valid
		if(message.val().length < 5){
			message.addClass("error");
			messageInfo.text("What is this regarding?");
			messageInfo.addClass("error");
			return false;
		}
		//it's valid
		else{			
			message.removeClass("error");
			messageInfo.text("");
			messageInfo.removeClass("error");
			return true;
		}
	}
	
	
});