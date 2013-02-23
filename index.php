<?php include("global/includes/config.inc"); ?>
<?php $thisPage="hmpg"; ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo homeTitle ?></title>
	<?php include("global/includes/head/head_global.inc.php"); ?>    
</head>
<body id="hmpg">
	<?php include("global/includes/nav/nav.inc.php"); ?>
	<?php include("global/includes/socialbar.inc.php"); ?>
    <div class="services">
        <div id="uxdesign" class="bucket d1"><a href="<? echo pathToWeb ?>"><img src="global/img/home_uxdesign.png" alt="Web Development" />Web</a></div>
        <div id="icondesign" class="bucket d2"><a href="<? echo pathToIcons ?>"><img src="global/img/home_icondesign.png" alt="Visual Design" />Visual</a></div>
        <div id="mobiledesign" class="bucket d3"><a href="<? echo pathToMobile ?>"><img src="global/img/home_mobiledesign.png" alt="Mobile Development" />Mobile</a></div>
    </div>
    <div class="content">
        <h2><?php echo homeHead ?></h2>
        <p>Pencil Media creates websites, user interfaces, branding and icons. I have twelve years of digital expertise on mediums, including web, desktop, and mobile. I offer web host setup, email setup, mockup creation, icon and graphic design, prototyping, web design, cross-browser testing, and search engine optimization (SEO) across multiple platforms. <a href="/about/" title="Go to about Pencil Media">Learn more</a>.</p>
    </div>
<?php include("global/includes/foot/foot_global.inc.php"); ?>
</body>
</html>
