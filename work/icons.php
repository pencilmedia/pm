<?php
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="work";
    $subPage="icons"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo workTitle ?></title>
	<?php include("../assets/inc/head.inc.php"); ?>
</head>
<body id="work" class="icons">
	<?php include("../assets/inc/nav/nav.inc.php"); ?>
	<?php include("../assets/inc/socialbar.inc.php"); ?>
	<section class="content">
    <h2><?php echo workHead ?></h2>
    <?php include("../assets/inc/nav/work.inc.php"); ?>
    <div class="colonnade">
        <article class="lt_column">
            <div class="slate">
                <?php 
                    // open this directory 
                    $myDirectory = opendir("portfolio/icons/");

                    // get each entry
                    while($entryName = readdir($myDirectory)) {
                        $dirArray[] = $entryName;
                    }

                    // close directory
                    closedir($myDirectory);

                    //	count elements in array
                    $indexCount	= count($dirArray);
                    //Print ("$indexCount files<br>\n");

                    // sort 'em
                    sort($dirArray);

                    // loop through the array of files and print them all
                        for($index=0; $index < $indexCount; $index++) {
                            if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
                            // print 'em
                            print("<p><img src='portfolio/icons/$dirArray[$index]' /></p>");
                        }
                    }
                ?>
            </div>
        </article>
        <aside class="rt_column">
        <h3>Icon Development</h3>
        <p>An example of a small selection of  icons I have created from concept to creation.</p>
        </aside>
    </div>
    
        </div>
    </section>
	<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
