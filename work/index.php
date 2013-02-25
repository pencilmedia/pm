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
<div class="content">
  <h2><?php echo workHead ?></h2>
  <?php include("../assets/inc/nav/work.inc.php"); ?>
  <ul class="grid">
    <li><a href="work_archive.php#jnrds" data-anim="tada"><span><img src="p_logos/logo_jnrds.png" alt=""></span></a></li>
    <li><a href="work_archive.php#orcl" data-anim="tada"><span><img src="p_logos/logo_oracle.png" alt=""></span></a></li>
    <li><a href="work_archive.php#wyw" data-anim="tada"><span><img src="p_logos/logo_wyw.png" alt=""></span></a></li>
    <li><a href="work_archive.php#dm" data-anim="tada"><span><img src="p_logos/logo_dm.png" alt=""></span></a></li>
    <li><a href="work_archive.php#ts" data-anim="tada"><span><img src="p_logos/logo_ts.png" alt=""></span></a></li>
    <li><a href="work_archive.php#mcafee" data-anim="tada"><span><img src="p_logos/logo_mcafee.png" alt=""></span></a></li>
    <li><a href="work_archive.php#maxtor" data-anim="tada"><span><img src="p_logos/logo_maxtor.png" alt=""></span></a></li>
    <li><a href="work_archive.php#illustrations" data-anim="tada"><span><img src="portfolio/art/illustration/bg/budapest.gif" alt=""><blockquote style="border: none;text-align:center">Artwork</blockquote></span></a></li>
    <li><a href="work_archive.php#chriscoando" data-anim="tada"><span>More Work</span></a></li>
  </ul>
  <!-- End: Slate -->
</div>
<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
