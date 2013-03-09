<?php
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="work";
    $subPage="mobile"; 
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo workTitle ?></title>
  <?php include("../assets/inc/head.inc.php"); ?></head>
<body id="work" class="mobile_work">
  <?php include("../assets/inc/nav/nav.inc.php"); ?>
  <?php include("../assets/inc/socialbar.inc.php"); ?>
  <section class="content">
    <h2>
      <?php echo mobiWork ?></h2>
    <?php include("../assets/inc/nav/work.inc.php"); ?>
    <div class="colonnade">
      <article class="lt_column">

        <h3>iPhone App Design</h3>
        <h4 title="songo">Oracle Sales on the Go iPhone App</h4>
        <p>
          Sales application for fictional company "Lux Decor Furniture". This application assists their sales people in keeping track and taking orders for high end furniture. It keeps track of customer information including how much they have been spending and offers promotions and customer rewards accordingly.
        </p>
        <h5>Work Done:</h5>
        <p>Interaction Design, High Fidelity Mockups in Photoshop</p>
        <a href="portfolio/mobile/orcl_iphone_luxdecor1.png" target="_blank">
          <img src="portfolio/mobile/orcl_iphone_luxdecor1.png" />
        </a>
        <a href="portfolio/mobile/orcl_iphone_luxdecor2.png" target="_blank">
          <img src="portfolio/mobile/orcl_iphone_luxdecor2.png" />
        </a>

      </article>
      <aside class="rt_column">
        <h3>Mobile Development</h3>
        <p>Examples of iPhone and iPad mobile design work.</p>

        <dl id="menu">
          <dt>Mobile Apps</dt>
          <dd>
            <a href="#songo">Oracle Songo iPhone App</a>
          </dd>
        </dl>

      </aside>
    </div>
  </section>
  <?php include("../assets/inc/foot.inc.php"); ?></body>
</html>