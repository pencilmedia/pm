<?php
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="work";
    $subPage="html5"; 
?>
<!DOCTYPE html>
<html>
    <head>
    <title><?php echo workTitle ?></title>
    <?php include("../assets/inc/head.inc.php"); ?>
    <style>
			#cf {
				position:relative;
				height:281px;
				width:450px;
				margin:0 auto;
			}
			#cf img {
				position:absolute;
				left:0;
				-webkit-transition: opacity 1s ease-in-out;
				-moz-transition: opacity 1s ease-in-out;
				-o-transition: opacity 1s ease-in-out;
				transition: opacity 1s ease-in-out;
			}
			#cf img.top:hover {
				opacity:0;
			}
</style>
<script>
var tests = {};

tests = {
	eSupportsAttr :  function(element,attribute) {
				var test = document.createElement(element);
				if (attribute in test) {
					return true	
				} else {
					return false;	
				}
	},
	init : function() {
		if (!tests.eSupportsAttr('input','placeholder')) {
			alert('Some HTML5 Elements Not Supported');	
		} else {
			alert('HTML5 Element Supported');	
		}
	}
}
jQuery(document).ready(tests.init);

</script>
    </head>
    <body id="work">
<?php include("../assets/inc/nav/nav.inc.php"); ?>
<?php include("../assets/inc/socialbar.inc.php"); ?>
<div class="content">
    <h2><?php echo workHead ?></h2>
    <?php include("../assets/inc/nav/work.inc.php"); ?>
    <div class="colonnade">
    <div class="lt_column">
          <div class="slate" style="padding: 1em;">
        <h4>CSS3 Transition: Image Fade to Next</h4>
        <div id="cf"> <img class="bottom" src="../global/img/wyw_webshot_400px.png"  /> <img class="top" src="../global/img/wyw_webshot2_400px.png" /> </div>
      </div>
          <p>&nbsp;</p>
        </div>
    <div class="rt_column">
          <h3>HTML5 and CSS3 Examples</h3>
          <p>These are examples of HTML5 and CSS3. Not all browsers support all features yet. </p>
        </div>
  </div>
    </div>
<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
