
  $(document).ready(function() {

	$("a.overlay").overlay({
		onBeforeLoad: function() {
			var wrap = this.getOverlay().find(".contentWrap");
			wrap.load(this.getTrigger().attr("href"));
			$('#overlay-background').css('opacity', '0.5').fadeIn('fast');
		},
		onBeforeClose: function() {
			$('#overlay-background').fadeOut('fast');
		}
	});
	
	
	// Social Bar Hover Effect
	$('#social-bar a').hover(function() {
		$(this).stop().animate({'margin-left' : '0'}, 200);
	}, function(){
		$(this).stop().animate({'margin-left' : '-17px'}, 200);
	});

	// Social Bar Tooltips
	$("#social-bar a").hover(function(e) {
		var y = $(this).offset().top - $("#social-bar").offset().top;
		var content = $(this).attr('title');
		var id = $(this).attr('id');

		$(this).attr('title', '');

		$("#social-bar").append("<div id='tooltip'>" + content + "</div>");
		$("#social-bar #tooltip").css('top', y + 8).css("left", 50).data('trigger', id).fadeIn();
	},
		function() {
			var trigger = $("#social-bar #tooltip").data('trigger');
			var content = $("#social-bar #tooltip").html();
			$('#' + trigger).attr('title', content);
			$("#social-bar #tooltip").remove();
		}
	);
	
	//EXTERNAL LINK - Open link in window overrid
	
	// EXTERNAL LINK - Open external links in new window.
	$('a[href^=http]').click( function() {
		//Not this domain - open link in window
		if (this.href.indexOf('pencilmedia.com') < 0) {
			window.open(this.href);
			return false;
		}
	});
	// Open internal link in a new window
	if ( $('a.pop') ) {
		
		$('a.pop').click( function() {
			window.open(this.href);
			return false;
		});
	}

	// Portfolio Page add class to trigger animation
	$('a[data-anim]').hover(function() { 
		var anim = $(this).attr('data-anim');
		$(this).removeClass().addClass(anim);
	},
	function() {
		$(this).removeClass();
	});


});// End

