<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>

<?php $thisPage="page4"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo homeTitle ?></title>
<?php include("global/includes/head/head_global.inc"); ?>
</head>
<body>
    <div class="ui-layout-north">
        <?php include("global/includes/nav/nav_teir1.inc"); ?>
    </div>
	<div class="ui-layout-center">
        <div id="content">
			<p id="logout"><a href="http://www.trigeminalsolutions.com/demo/index.php?logout=1" class="button"><span>Logout</span></a></p>
        	<h2><?php echo page4Header ?></h2>
            <p>The following items have been identified based on the data you provided.  They may be migraine triggers for you.  Consequently, you may wish to try avoiding them (where possible) to see if your headaches are improved.  Click on any of the items for more information.</p>
            <ul>
            	<li><a href="#">Tomato</a></li>
            	<li><a href="page5.php">Barometric pressure change</a></li>
            	<li><a href="#">Not falling to sleep at the usual time</a></li>
            	<li><a href="#">Let down of stress</a></li>
            	<li><a href="#">Apple</a></li>
            </ul>
        </div>
    </div>
    <div class="ui-layout-south">
        <?php include("global/includes/foot/foot.inc"); ?>
    </div>
</body>
</html>
