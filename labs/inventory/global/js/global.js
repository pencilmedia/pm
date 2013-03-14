//  *   The following JavaScripts have been designed to seperate	*
//  *	behavior from content										*
//  *   Ralph Garcia 3/14/06                                        *
//  *****************************************************************

//  *****************************************************************
//  *   addLoadEvent                                                *
//  *****************************************************************
//  *   Version .01                                                 *
//  *****************************************************************
//  *   allows multiple ON LOAD functions to be called              *
//  *   DO NOT DELETE		                                        *
//  *****************************************************************
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
  	window.onload = func;
  } else {
  	window.onload = function () {
		oldonload();
		func();
	}
  }
}

function focusLabels() {
  if (!document.getElementsByTagName) return false;
  var labels = document.getElementsByTagName("label");
  for (var i=0; i<labels.length; i++) {
    if (!labels[i].getAttribute("for")) continue;
    labels[i].onclick = function() {
      var id = this.getAttribute("for");
      if (!document.getElementById(id)) return false;
      var element = document.getElementById(id);
      element.focus();
    }
  }
}

function resetFields(whichform) {
  for (var i=0; i<whichform.elements.length; i++) {
    var element = whichform.elements[i];
    if (element.type == "submit") continue; //skips the submit button
	if (element.type == "checkbox") continue; //skips any checkboxes i.e. type="checkbox"
	if (element.type == "radio") continue;//skips any radiobuttons
    if (!element.defaultValue) continue;
	
    element.onfocus = function() {
		if (this.value == this.defaultValue) {
			this.value = "";
		 }
    }
    element.onblur = function() {
      if (this.value == "") {
        this.value = this.defaultValue;
      }
    }
	
  }
}

function validateForm(whichform) {
  for (var i=0; i<whichform.elements.length; i++) {
    var element = whichform.elements[i];
    if (element.className.indexOf("required") != -1) {
      if (!isFilled(element)) {
        alert("Please fill in the "+element.name+" field.");
        return false;
      }
    }
    if (element.className.indexOf("email") != -1) {
      if (!isEmail(element)) {
        alert("The "+element.name+" field must be a valid email address.");
        return false;
      }
    }
  }
  return true;
}

function isFilled(field) {
  if (field.value.length < 1 || field.value == field.defaultValue) {
    return false;
  } else {
    return true;
  }
}

function isEmail(field) {
  if (field.value.indexOf("@") == -1 || field.value.indexOf(".") == -1) {
    return false;
  } else {
    return true;
  }
}

function prepareForms() {
  for (var i=0; i<document.forms.length; i++) {
    var thisform = document.forms[i];
    resetFields(thisform);
    thisform.onsubmit = function() {
      return validateForm(this);
    }
  }
}

addLoadEvent(focusLabels);
addLoadEvent(prepareForms);




/* showing and hiding DOM js*/
function toggle( targetId ){
  if (document.getElementById){
  		target = document.getElementById( targetId );
  			if (target.style.display == "none"){
  				target.style.display = "";
  			} else {
  				target.style.display = "none";
  			}
  	}
} 

addLoadEvent(prepareToggle);
	
function prepareToggle() {
if (!document.getElementsByTagName) return false;
	var links = document.getElementsByTagName("a");
	for (var i=0; i<links.length; i++) {
	if (links[i].className.match("toggler")) {
			links[i].onclick = function() {
			activateLink(this);
			return false;
			}
		}
	}
}

function activateLink(link) {
	var pagename = link.getAttribute("href").split("#")[1];
	showPage(pagename);
}

function showPage(pagename) {
	var divs = document.getElementsByTagName("div");
	for (var i=0; i<divs.length; i++ ) {
		if (divs[i].className == "toggle-card") {
			if (divs[i].getAttribute("id") != pagename) {	 
			divs[i].style.display = "none";
			} else {
				divs[i].style.display = "block";
			}
		}
	}
}
