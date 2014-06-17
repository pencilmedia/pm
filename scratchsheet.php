<?php 
    include("assets/inc/config.inc");
    $ROOT = ''; // Set root for relative paths
    $thisPage="hmpg"; 
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo homeTitle ?></title>
    <?php include("assets/inc/head.inc.php"); ?></head>
<body id="hmpg">

    <?php include("assets/inc/nav/nav.inc.php"); ?>
    <?php include("assets/inc/socialbar.inc.php"); ?>

    <section class="container">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <article class="jumbotron">
           <h1>Jumbotron Area</h1>
        </article>
        <article class="content row-fluid marketing">
            <div class="span12">
                <h2>Scratchsheet</h2>
                <p>what</p>
            </div>
        </article>
        <!-- /container -->
    </section>
    <?php include("assets/inc/foot.inc.php"); ?></body>
</html>
