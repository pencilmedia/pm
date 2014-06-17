<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("assets/inc/config.inc");
    $ROOT = ''; // Set root for relative paths
    $thisPage="hmpg"; 
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo browserTitle ?></title>
    <?php include("assets/inc/head.inc.php"); ?></head>
<body id="hmpg">
    <?php include("assets/inc/nav/nav.inc.php"); ?>
    <section class="container">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <article class="jumbotron">
            <p>&nbsp;</p>
        </article>
        <article class="content row-fluid marketing">
            <div class="span12">
                <h2>Under Construction</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse gravida ipsum vel felis facilisis fringilla. Sed vel sapien quis neque molestie pharetra. Nunc faucibus non lacus ut porttitor. Morbi ac ornare sem. Quisque in sapien elementum augue accumsan accumsan. In elementum dolor eget risus aliquet pulvinar. Quisque at tellus facilisis, consequat enim interdum, pharetra enim. Quisque tincidunt augue quis faucibus vestibulum. Nunc a sem velit. Nam adipiscing tempor justo at mollis.
                    <a href="/about/" title="Learn more about oh my pie!">Learn more</a>.
                </p>
            </div>
        </article>
        <!-- /container -->
    </section>
    <?php include("assets/inc/foot.inc.php"); ?></body>
</html>