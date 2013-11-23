<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
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
            <ul class="services">
                <li>
                    <a <?php echo 'href="' . $ROOT . 'work/"' ?>>
                        <img src="assets/img/home_uxdesign.png" alt="Web Development" />
                        Web
                    </a>
                </li>
                <li>
                    <a <?php echo 'href="' . $ROOT . 'work/icons.php"' ?>>
                        <img src="assets/img/home_icondesign.png" alt="Visual Design" />
                        Visual
                    </a>
                </li>
                <li>
                    <a <?php echo 'href="' . $ROOT . 'work/mobile.php"' ?>>
                        <img src="assets/img/home_mobiledesign.png" alt="Mobile Development" />
                        Mobile
                    </a>
                </li>
            </ul>
        </article>
        <article class="content row-fluid marketing">
            <div class="span12">
                <h2>
                    <?php echo homeHead ?></h2>
                <p>
                    Pencil Media creates websites, user interfaces, branding and icons. I have twelve years of digital expertise on mediums, including web, desktop, and mobile. I offer web host setup, email setup, mockup creation, icon and graphic design, prototyping, web design, cross-browser testing, and search engine optimization (SEO) across multiple platforms.
                    <a href="/about/" title="Go to about Pencil Media">Learn more</a>.
                </p>
            </div>
        </article>
        <!-- /container -->
    </section>
    <?php include("assets/inc/foot.inc.php"); ?>
</body>
</html>
