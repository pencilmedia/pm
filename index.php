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
            <ul class="services">
                <li>
                    <a href="<? echo pathToWeb ?>">
                        <img src="assets/img/home_uxdesign.png" alt="Web Development" />
                        Web
                    </a>
                </li>
                <li>
                    <a href="<? echo pathToIcons ?>">
                        <img src="assets/img/home_icondesign.png" alt="Visual Design" />
                        Visual
                    </a>
                </li>
                <li>
                    <a href="<? echo pathToMobile ?>">
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
 
                <h2>My To Do's</h2>
                <p>
                    Moving website to GIT repository and using Bootstrap framework with SCSS.
                    <a href="https://github.com/pencilmedia/pm">PM GitHub Repo</a>
                </p>
                <ol style="color: darkred">
                    <li>
                        Work Photo Overlay Viewer - Currently, only working in illustrations
                    </li>
                    <li>Convert "less/theme" CSS into LESS format</li>
                    <li>
                        Need to work on Responsive Design (Nav, Footer, Homepage, etc)
                    </li>
                    <li>Add web font icons where necessary</li>
                    <li>Clean up JavaScripts</li>
                    <li>&nbsp;</li>
                    <li>Should I use Beanstalk to deploy automatically to FTP?</li>
                </ol>
                <h4>Beanstalk Links</h4>
                <p>
                    <a href="http://css-tricks.com/video-screencasts/109-getting-off-ftp-and-onto-git-deployment-with-beanstalk/">Chris Coyier Beanstalk Tut</a>
                </p>
                <p>
                    <a href="http://peteschuster.com/2012/12/up-and-running-with-beanstalk-app/">View Benefits of Beanstalk</a>
                </p>
                <p>
                    <a href="http://beanstalkapp.com/pricing">View Beanstalk App</a>
                </p>
                <p>
                    <a href="https://codeplane.com/">View Beanstalk Competitor</a>
                </p>
            </div>
        </article>
        <!-- /container -->
    </section>
    <?php include("assets/inc/foot.inc.php"); ?></body>
</html>
