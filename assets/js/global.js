var pm = {};
pm = {
	init: function() {
		pm.socialbtns();
		pm.linkBehaviors();
	},
	socialbtns: function() {
		// Social Bar Hover Effect
		//////////////////////////
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
	},
	linkBehaviors: function() {
		// EXTERNAL LINK - Open external links in new window
		////////////////////////////////////////////////////
		$('a[href^=http]').click( function() {
			//Not this domain - open link in window
			if (this.href.indexOf('pencilmedia.com') < 0) {
				window.open(this.href);
				return false;
			}
		});
		// Override above behavior and open internal link in a new window - Add the class .pop to the link
		if ( $('a.pop') ) {
			$('a.pop').click( function() {
				window.open(this.href);
				return false;
			});
		}
	},
	overlay: function() {
		// Portfolio - Modal Overlay Viewer
		///////////////////////////////////
	    $(function() {
	        // if the function argument is given to overlay,
	        // it is assumed to be the onBeforeLoad event listener
	        $(".lt_column #dynamic img").click(function() {
	            imgHolder = $('#imgholder');
	            replaceSrc = $(this).attr("src");
	            imgHolder.attr("src", replaceSrc);
	            //alert( $(this).attr("src") )
	            var detailsTitle = $(this).prev().text();
	            var detailsDesc = $(this).attr("alt");
	            $('.details h3').text(detailsTitle);
	            $('.details p').text(detailsDesc);
	        });
	        $(".lt_column #dynamic img[rel]").overlay({
	            // top:80,
	            onLoad: function() {
	                var fullImg = $('.simple_overlay img');
	                var fullImgHeight = fullImg.height();
	                $('.details').height(fullImgHeight);
	            }
	        });
	    });
	}
}

$(document).ready(function() { pm.init(); });
