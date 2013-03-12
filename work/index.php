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
  <ul class="grid animated">
    <li><a href="work_view.php#jnrds" data-anim="animated tada"><span><img src="p_logos/logo_jnrds.png" alt=""></span></a></li>
    <li><a href="work_view.php#orcl" data-anim="animated tada"><span><img src="p_logos/logo_oracle.png" alt=""></span></a></li>
    <li><a href="work_view.php#wyw" data-anim="animated tada"><span><img src="p_logos/logo_wyw.png" alt=""></span></a></li>
    <li><a href="work_view.php#dm" data-anim="animated tada"><span><img src="p_logos/logo_dm.png" alt=""></span></a></li>
    <li><a href="work_view.php#ts" data-anim="animated tada"><span><img src="p_logos/logo_ts.png" alt=""></span></a></li>
    <li><a href="work_view.php#mcafee" data-anim="animated tada"><span><img src="p_logos/logo_mcafee.png" alt=""></span></a></li>
    <li><a href="work_view.php#maxtor" data-anim="animated tada"><span><img src="p_logos/logo_maxtor.png" alt=""></span></a></li>
    <li><a href="work_view.php#webgain" data-anim="animated tada"><span><img src="p_logos/logo_wg.png" alt=""></span></a></li>
    <li><a href="work_view.php#chriscoando" data-anim="animated tada"><span><img src="p_logos/logo_coando.png" alt=""></span></a></li>
    <li><a href="work_view.php#illustrations" data-anim="animated tada"><span><img src="portfolio/art/illustration/bg/budapest.gif" alt=""><p>Artwork</p></span></a></li>
    <li><a href="work_view.php#baytsp" data-anim="animated tada"><span>BayTSP&trade;</span></a></li>
    <li><a href="work_view.php#skp" data-anim="animated tada"><span>SK Plating</span></a></li>
    <li><a href="work_view.php#cupertinobike" data-anim="animated tada"><span>Cupertino Bike Shop</span></a></li>
    <li><a href="work_view.php#e411" data-anim="animated tada"><span>Event411</span></a></li>
    <li><a href="work_view.php#bds" data-anim="animated tada"><span>BDS Marketing</span></a></li>
  </ul>
  <!-- End: Slate -->
</section>
<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
