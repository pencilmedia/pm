<?php include("assets/inc/config.inc"); ?>
<?php $thisPage="hmpg"; ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo homeTitle ?></title>
	<?php include("assets/inc/head.inc.php"); ?>    
</head>
<body id="hmpg">
	<?php include("assets/inc/nav/nav.inc.php"); ?>
	<?php include("assets/inc/socialbar.inc.php"); ?>
    <div class="services">
        <div id="uxdesign" class="bucket d1"><a href="<? echo pathToWeb ?>"><img src="assets/img/home_uxdesign.png" alt="Web Development" />Web</a></div>
        <div id="icondesign" class="bucket d2"><a href="<? echo pathToIcons ?>"><img src="assets/img/home_icondesign.png" alt="Visual Design" />Visual</a></div>
        <div id="mobiledesign" class="bucket d3"><a href="<? echo pathToMobile ?>"><img src="assets/img/home_mobiledesign.png" alt="Mobile Development" />Mobile</a></div>
    </div>
    <div class="content">
        <h2><?php echo homeHead ?></h2>
        <p>Pencil Media creates websites, user interfaces, branding and icons. I have twelve years of digital expertise on mediums, including web, desktop, and mobile. I offer web host setup, email setup, mockup creation, icon and graphic design, prototyping, web design, cross-browser testing, and search engine optimization (SEO) across multiple platforms. <a href="/about/" title="Go to about Pencil Media">Learn more</a>.</p>

         <style>
            ol li {
                color: #c09;
            }
        </style>

        <h2>My To Do's</h2>
        <p>Moving website to GIT repository and using Bootstrap framework with SCSS.
        <a href="https://github.com/pencilmedia/pm">PM GitHub Repo</a>
        </p>
        <ol>
            <li>Currently, in the HEAD section, the PHP paths are set to http:pm. Change to relative paths.</li>
            <li>Nav should auto detect tier-1, tier-2, etc through PHP. Should not need two separate nav includes.</li>
            <li>Code CSS in SCSS format</li>
            <li>Use Skeleton, Bootstrap, or Foundation Front-End Framework</li>
            <li>Should I use Beanstalk to deploy automatically to FTP?</li>
            <li>&nbsp;</li>
            <li>Convert "less/theme" CSS into LESS format</li>
        </ol>
        <h4>Beanstalk Links</h4>
        <p><a href="http://css-tricks.com/video-screencasts/109-getting-off-ftp-and-onto-git-deployment-with-beanstalk/">Chris Coyier Beanstalk Tut</a></p>
        <p><a href="http://peteschuster.com/2012/12/up-and-running-with-beanstalk-app/">View Benefits of Beanstalk</a></p>
        <p><a href="http://beanstalkapp.com/pricing">View Beanstalk App</a></p>
        <p><a href="https://codeplane.com/">View Beanstalk Competitor</a></p>
    
    </div>
<?php include("assets/inc/foot.inc.php"); ?>
</body>
</html>
