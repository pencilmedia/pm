$(document).ready(function () {
	//Check if url hash value exists (for bookmark)
	$.history.init(pageload);	
	    
	// Highlight the selected sidebar nav link
	$('a[href=' + document.location.hash + ']').addClass('selected');
	
	//Search for link with REL set to ajax
	$('a[rel=ajax]').click(function () {
		
		//grab the full url
		var hash = this.href;
		
		//remove the # value
		hash = hash.replace(/^.*#/, '');

		//for back button
	 	$.history.load(hash);
	 	
	 	//clear the selected class and add the class class to the selected link
	 	$('a[rel=ajax]').removeClass('selected');
	 	$(this).addClass('selected');
	 	
	 	//hide the content and show the progress bar
	 	$('#dynamic').hide();
	 	$('#loading').show();
	 	
	 	//run the ajax
		getPage();
	
		//cancel the anchor tag behaviour
		return false;
	});
});
	

function pageload(hash) {
	//if hash value exists, run the ajax
	if (hash) getPage();
	
	// Open external links automatically in a now window except if it's a blog site
	$('a[href^=http]').click( function() {
		if (this.href.indexOf('pencilmedia.com') < 0) {
			alert('sxs');
			window.open(this.href);
			return false;
		}
	})
	
}
		
function getPage() {
	
	//generate the parameter for the php script
	var data = 'page=' + encodeURIComponent(document.location.hash);
	$.ajax({
		url: "load_pages.php",
		type: "GET",
		data: data,
		cache: false,
		success: function (html) {
		
			//hide the progress bar
			$('#loading').hide();
			
			//add the content retrieved from ajax and put it in the #content div
			$('#dynamic').html(html);
			
			//display the body with fadeIn transition
			$('#dynamic').fadeIn('slow');
		}
	});
}