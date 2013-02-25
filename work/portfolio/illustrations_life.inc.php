<h3>Illustration</h3>
<p>I used to work for Warner Bros. Feature Animation in Glendale, Ca. These are a collection of background layout drawings that have appeared in my portfolio. Some of these illustrations are actual drawing tests, given to me by major animation studios, after passing the first round of portfolio review.</p>
</div>
<div id="illustrations" class="colonnade">
  <style>
	#illustrations .lt_column img {
		width: 250px;
		cursor:pointer;
	}
	#illustrations .rt_column img {
		width: 150px;
		cursor:pointer;
	}
	hr {
		clear: both;
	}
</style>
	<div class="lt_column">
      <h4>Background Layout Drawings</h4>
      <h6 rel="http://www.screenchef.com">From WB Movie "Iron Giant" - Barn Interior</h6>
      <img src="/work/portfolio/art/illustration/bg/barn(interior).gif" alt="Scene from Warner Bros. Iron Giant" rel="#viewer" />
      <h6>Barn in Field</h6>
      <img src="/work/portfolio/art/illustration/bg/barnyard.gif" alt="Drawing of old barn" rel="#viewer" />
      <h6>Bridge to the City</h6>
      <img src="/work/portfolio/art/illustration/bg/bridge.gif" alt="illustration" rel="#viewer" />
      <h6>Budapest in the Summer</h6>
      <img src="/work/portfolio/art/illustration/bg/budapest.gif" alt="illustration" rel="#viewer" />
      <h6>Cave Destruction</h6>
      <img src="/work/portfolio/art/illustration/bg/cave.gif" alt="illustration" rel="#viewer" />
      <h6>Good Ol' Country Store</h6>
      <img src="/work/portfolio/art/illustration/bg/countrystore.gif" alt="illustration" rel="#viewer" />
      <h6>WB Desert Background</h6>
      <img src="/work/portfolio/art/illustration/bg/Desert.gif" alt="illustration" rel="#viewer" />
      <h6>WB Desert Mine Scene</h6>
      <img src="/work/portfolio/art/illustration/bg/desertmine.gif" alt="illustration" rel="#viewer" />
      <h6>Doorway to the Unknown</h6>
      <img src="/work/portfolio/art/illustration/bg/doorway.gif" alt="illustration" rel="#viewer" />
      <h6>Haunted</h6>
      <img src="/work/portfolio/art/illustration/bg/haunted.gif" alt="illustration" rel="#viewer" />
      <h6>Haunted Castle</h6>
      <img src="/work/portfolio/art/illustration/bg/hauntedcastle.gif" alt="illustration" rel="#viewer" />
      <h6>Disney's Jungle Book</h6>
      <img src="/work/portfolio/art/illustration/bg/jungle.gif" alt="illustration" rel="#viewer" />
      <h6>The Palace</h6>
      <img src="/work/portfolio/art/illustration/bg/mansion.gif" alt="illustration" rel="#viewer" />
      <h6>Atop the Pirate Ship</h6>
      <img src="/work/portfolio/art/illustration/bg/pirateship.gif" alt="illustration" rel="#viewer" />
      <h6>View of Pyramids</h6>
      <img src="/work/portfolio/art/illustration/bg/pyramids.gif" alt="illustration" rel="#viewer" />
      <h6>Evil Lurks</h6>
      <img src="/work/portfolio/art/illustration/bg/skull.gif" alt="illustration" rel="#viewer" />
      <h6>Atop the Tower</h6>
      <img src="/work/portfolio/art/illustration/bg/tower.gif" alt="illustration" rel="#viewer" />
      <h6>At the Train Station</h6>
      <img src="/work/portfolio/art/illustration/bg/trainstation.gif" alt="illustration" rel="#viewer" />
	</div>
	<div class="rt_column">
        <h4>Life Drawings</h4>
        <h6>Caesar Statue</h6>
        <img src="/work/portfolio/art/illustration/life/caesar.gif" alt="Life drawing of Julius Caesar" rel="#viewer" />
        <h6>Girl Laughing</h6>
        <img src="/work/portfolio/art/illustration/life/girlface.gif" alt="illustration" rel="#viewer" />
        <h6>Laetitia</h6>
        <img src="/work/portfolio/art/illustration/life/laetitia2.gif" alt="illustration" rel="#viewer" />
        <h6>Portrait</h6>
        <img src="/work/portfolio/art/illustration/life/Melissaportrait.gif" alt="illustration" rel="#viewer" />
        <h6>Life Drawing</h6>
        <img src="/work/portfolio/art/illustration/life/musclelady.gif" alt="illustration" rel="#viewer" />
        <h6>Life Drawing</h6>
        <img src="/work/portfolio/art/illustration/life/tanman.gif" alt="illustration" rel="#viewer" />
        <h6>Life Drawing</h6>
        <img src="/work/portfolio/art/illustration/life/nudesitting_100px.gif" alt="illustration" rel="#viewer" />
        <h6>Life Drawing</h6>
        <img src="/work/portfolio/art/illustration/life/nudelaydown.gif" alt="illustration" rel="#viewer" />
        <h6>Life Drawing</h6>
        <img src="/work/portfolio/art/illustration/life/nudeman.gif" alt="illustration" rel="#viewer" />
	</div>
</div>
<?php include("../global/includes/overlay_viewer.inc.php"); ?>
<script>
	$(function() {
		// if the function argument is given to overlay,
		// it is assumed to be the onBeforeLoad event listener
		$("#illustrations img").click(function() {
			imgHolder = $('#imgholder');
			replaceSrc = $(this).attr("src");
			imgHolder.attr("src", replaceSrc);
			//alert( $(this).attr("src") )
			var detailsTitle = $(this).prev().text();
			var detailsDesc = $(this).attr("alt");
			$('.details h3').text(detailsTitle);
			$('.details p').text(detailsDesc);
		});
				
		$("#illustrations img[rel]").overlay({
			top:80,
			onLoad: function() {
				var fullImg = $('.simple_overlay img');
				var fullImgHeight = fullImg.height();
				$('.details').height(fullImgHeight);
			}
		});
	});
</script>