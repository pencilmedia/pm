<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $subPage="uxd";
    $subName="labHome";
?>
<!DOCTYPE html>
<html>
    <head>
    <title><?php echo uxTitle ?></title>
    <?php include("../assets/inc/head.inc.php"); ?>
    </head>
    <body id="labs">
<?php include("../assets/inc/nav/nav.inc.php"); ?>
<?php include("../assets/inc/socialbar.inc.php"); ?>
<div class="content">
    <h2><?php echo uxHead ?></h2>
    <?php include("../assets/inc/nav/ux.inc.php"); ?>
    <div class="colonnade">
    <div class="lt_column">
            
       	<h3><?php echo uxdName ?></h3>
        <p>Pencil Media Labs is where we research and experiment with new technologies. We search for the latest best approaches to craft outstanding websites and web apps for our clients.</p>
       	
        <h4>User-Centered Design</h4>
        <p>Design for the human experience. Websites and applications should be based on real human tendencies and preferences as opposed to designing in a silo. This process is called <a href="http://en.wikipedia.org/wiki/User_centered_design" target="_blank">user-centered design</a>.</p>
        <p>The main difference from other product design philosophies is that user-centered design tries to optimize the product around how users can, want, or need to use the product, rather than forcing the users to change their behavior to accommodate the product.</p>
      	<p>This is the process:<br /> 
        <strong>Research</strong> &rarr; <strong>Analyze</strong> &rarr; <strong>Design</strong> &rarr; <strong>Prototype</strong> &rarr; <strong>Measure</strong></p>
        
        <h4>Web Development Reference</h4>
        <dl class="reference">
        	<dt><a href="http://www.html5rocks.com/en/">HTML5 Rocks</a></dt>
            <dd>A nice resource to learn and keep up with HTML5.</dd>
            <dt><a href="http://www.stuffandnonsense.co.uk/blog/about/universal_internet_explorer_6_css">Universal IE6 CSS</a></dt>
        	<dd>6 ways to deal with IE6 styling.</dd>
        </dl>
    </div>
    <div class="rt_column">
    	  <?php include("uxsubnav.inc.php"); ?>
        </div>
  </div>
    </div>
<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
