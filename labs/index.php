<?php 
    include("../assets/inc/config.inc");
    $ROOT = 'http://www.pencilmedia.com/'; // Set root for relative paths
    $subPage="labsHome"; 
    $subName="labsProj";
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
	    <h2><?php echo labsHead ?></h2>
	    <?php include("../assets/inc/nav/labs.inc.php"); ?>
	    <div class="colonnade">
	    <div class="lt_column">
       	<h3><?php echo labsHead ?></h3>
        <p>Pencil Media Labs is where we research and experiment with new technologies. We search for the latest best approaches to craft outstanding websites and web apps for our clients.</p>
	    <h4>Git Repositories</h4>
	    <section class="colonnade">
                <dl class="lt_column">
			    	<dt>Inventory Web App</dt>
			    	<dd><a href="https://github.com/pencilmedia/inventory">Git Repository: Product Inventory System</a></dd>
			    	<dd><a href="inventory/">Demo</a></dd>
			    </dl>
                <dl class="rt_column">
                    <dt>&nbsp;</dt>
                    <dd></dd>
                </dl>
            </section>
	    </div>
	    <div class="rt_column">
	    	<?php include("labsubnav.inc.php"); ?>
	    </div>
	  </div>
	    </div>
	<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>