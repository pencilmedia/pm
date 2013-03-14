
jQuery( function() {
 jQuery.highlight = document.body.createTextRange ? 

/*
Version for IE using TextRanges.
*/
  function(node, te) {
   var r = document.body.createTextRange();
   r.moveToElementText(node);
   for (var i = 0; r.findText(te); i++) {
   // r.pasteHTML('<a href="#" class="jTip">' +  r.text + '<\/span>');
    r.collapse(false);
   }
  }

 :

/*
 (Complicated) version for Mozilla and Opera using span tags.
*/
  function(node, te) {
   var pos, skip, anchornode, client, middlebit, endbit, middleclone;
   skip = 0;
   if (node.nodeType == 3) { //if nodeType = text node
    pos = node.data.toUpperCase().indexOf(te);
    if (pos >= 0) {
     anchornode = document.createElement('a');
	 client = jQuery("a.jTip");
	 anchornode.className = 'jTip';
	 
	 //new
	 client.attr("id", jQuery.generateId);
	 client.attr("name","Testimonial");
	// client.attr("href","../learn/jtip_testimonials/client_1.html?width=275");
	 //end new
	 
     middlebit = node.splitText(pos);
     endbit = middlebit.splitText(te.length);
     middleclone = middlebit.cloneNode(true);
     anchornode.appendChild(middleclone);
     middlebit.parentNode.replaceChild(anchornode, middlebit);
	 
     skip = 1;
    }
   }
   else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
    for (var i = 0; i < node.childNodes.length; ++i) {
     i += jQuery.highlight(node.childNodes[i], te);
    }
   }
   return skip;
  }

 ;
});

jQuery.fn.removeHighlight = function() {
 return this.find("a.jTip").each(function() {
  this.parentNode.replaceChild(this.firstChild, this).normalize();
 });
};


/***************************
SEARCH FOR THE WORD "CLIENTS" AND ADD JTIP FOR TESTIMONIAL
***************************/
var markClient = {};
markClient.init = function () 
{
	jQuery('div').each( function() { jQuery.highlight(this, 'CLIENTS'); } );
}

//jQuery(document).ready(markClient.init);

