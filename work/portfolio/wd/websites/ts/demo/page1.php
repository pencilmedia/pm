<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>

<?php $thisPage="page1"; ?>

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
        	<h2>Page 1</h2>
            <!--
            <ul>
            	<li>Software-based service determines causal environmental factors and provides a management system for chronic diseases.</li>
                <li>
                	<ul>
                    	<li>Ex: Migraine and migraine triggers.</li>
                    </ul>
                </li>
                <li>Personalized therapies address unmet customer needs:</li>
                <li>
                	<ul>
                    	<li>Reduce patient suffering and the associated costs.</li>
                        <li>Improved physician efficiency and profitability.</li>
                    </ul>
                </li>
                <li>The basis of a highly-profitable, self-sustaining business.</li>
            </ul>
            -->
            <dl>
            	<dt>Software-based service determines causal environmental factors and provides a management system for chronic diseases.</dt>
                <dd>Ex: Migraine and migraine triggers.</dd>
            </dl>
            <dl>
            	<dt>Personalized therapies address unmet customer needs:</dt>
                <dd>Reduce patient suffering and the associated costs.</dd>
                <dd>Improved physician efficiency and profitability.</dd>
            </dl>
            <p>The basis of a highly-profitable, self-sustaining business.</p>
            <div class="photobox">
            	<img src="global/img/figure_page1.png" alt="Figure 1" />
            </div>
        </div>
    </div>
    <div class="ui-layout-south">
        <?php include("global/includes/foot/foot.inc"); ?>
    </div>
</body>
</html>
