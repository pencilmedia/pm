<?php
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="work";
    $subPage="logos"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo workTitle ?></title>
	<?php include("../assets/inc/head.inc.php"); ?>
</head>
<body id="work" class="logos">
	<?php include("../assets/inc/nav/nav.inc.php"); ?>
	<?php include("../assets/inc/socialbar.inc.php"); ?>
	<section class="content">
    <h2><?php echo workHead ?></h2>
    <?php include("../assets/inc/nav/work.inc.php"); ?>
    	  <div class="colonnade">
        	  <article class="lt_column">
                    <div class="slate" style="overflow: auto;">
                        <?php
                            function scandir_recursive($dir) {
                                $items = scandir($dir);
                             
                                foreach($items as $item) {
                                    if ($item == '.' || $item == '..') {
                                        continue;
                                    }
                             
                                    $file = $dir . '/' . $item;
                                    echo '<p><img src="' . $file . '"/></p>' . "\n"; 
                             
                                    if (is_dir($file)) {
                                        scandir_recursive($file);
                                    }
                                }
                            }
                             
                            scandir_recursive('portfolio/logos');
                        ?>
                         
            	</div>
            </article>
            <aside class="rt_column">
            	<h3>Logo Development</h3>
                <p>An example of a small selection of  icons I have created from concept to creation.</p>
            </aside>
        </div>
    </section>
	<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
