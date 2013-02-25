<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>

<?php $thisPage="page5"; ?>

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
        	<h2><?php echo page5Header ?></h2>
           	<p>Large barometric pressure changes during a short time interval (such as when a high or low pressure system moves through, when you travel in an airplane, or when you drive up or down a large mountain) may help trigger your migraines.  </p>
           	<p>Obviously, it is difficult to avoid weather changes.  However, many triggers work in conjunction with each other.  Thus, one trigger by itself may not be sufficient to start a migraine, but this trigger in combination with another trigger may help start a migraine.</p>
           	<p>In your case, barometric pressure change appears to work in conjunction with consumption of vinegar.  In particular, as shown in the figure, consuming vinegar up to three days after a large barometric pressure change can trigger a migraine.  Thus, you may wish to avoid vinegar at least during the three days after you are exposed to a large barometric pressure change.</p>
            <div class="photobox">
            	<img src="global/img/barometric_pressure.png" alt="Barometric Change" />
            </div>
        </div>
    </div>
    <div class="ui-layout-south">
        <?php include("global/includes/foot/foot.inc"); ?>
    </div>
</body>
</html>
