// JavaScript Document

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