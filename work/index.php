<?php
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="work";
    $subPage="web"; 
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo workTitle ?></title>
<?php include("../assets/inc/head.inc.php"); ?>
</head>
<body id="work" class="portfolio">
<?php include("../assets/inc/nav/nav.inc.php"); ?>
<?php include("../assets/inc/socialbar.inc.php"); ?>
<section class="content">
  <h2><?php echo workHead ?></h2>
  <?php include("../assets/inc/nav/work.inc.php"); ?>
  <ul class="grid">
    <li><a href="work_view.php#jnrds" data-anim="tada"><span><img src="p_logos/logo_jnrds.png" alt=""></span></a></li>
    <li><a href="work_view.php#orcl" data-anim="tada"><span><img src="p_logos/logo_oracle.png" alt=""></span></a></li>
    <li><a href="work_view.php#wyw" data-anim="tada"><span><img src="p_logos/logo_wyw.png" alt=""></span></a></li>
    <li><a href="work_view.php#dm" data-anim="tada"><span><img src="p_logos/logo_dm.png" alt=""></span></a></li>
    <li><a href="work_view.php#ts" data-anim="tada"><span><img src="p_logos/logo_ts.png" alt=""></span></a></li>
    <li><a href="work_view.php#mcafee" data-anim="tada"><span><img src="p_logos/logo_mcafee.png" alt=""></span></a></li>
    <li><a href="work_view.php#maxtor" data-anim="tada"><span><img src="p_logos/logo_maxtor.png" alt=""></span></a></li>
    <li><a href="work_view.php#webgain" data-anim="tada"><span><img src="p_logos/logo_wg.png" alt=""></span></a></li>
    <li><a href="work_view.php#chriscoando" data-anim="tada"><span><img src="p_logos/logo_coando.png" alt=""></span></a></li>
    <li><a href="work_view.php#illustrations" data-anim="tada"><span><img src="portfolio/art/illustration/bg/budapest.gif" alt=""><p>Artwork</p></span></a></li>
    <li><a href="work_view.php#baytsp" data-anim="tada"><span>BayTSP&trade;</span></a></li>
    <li><a href="work_view.php#skp" data-anim="tada"><span>SK Plating</span></a></li>
    <li><a href="work_view.php#cupertinobike" data-anim="tada"><span>Cupertino Bike Shop</span></a></li>
    <li><a href="work_view.php#e411" data-anim="tada"><span>Event411</span></a></li>
    <li><a href="work_view.php#bds" data-anim="tada"><span>BDS Marketing</span></a></li>
  </ul>
  <!-- End: Slate -->
</section>
<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
