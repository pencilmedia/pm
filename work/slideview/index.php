<?php
    include("../../assets/inc/config.inc");
    $ROOT = '../../'; // Set root for relative paths
    $thisPage="work";
    $subPage="web"; 
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo workTitle ?></title>
<?php include("../../assets/inc/head.inc.php"); ?>
</head>
<body id="work" class="portfolio">
<?php include("../../assets/inc/nav/nav.inc.php"); ?>
<?php include("../../assets/inc/socialbar.inc.php"); ?>
<div class="content">
  <h2><?php echo workHead ?></h2>
  <?php include("../../assets/inc/nav/work.inc.php"); ?>
  <p>Use the <strong>&larr; leftward, &uarr; upward, &rarr; rightward, &darr; downward arrow keys</strong> on your keyboard to navigate.</p>
  <p style="margin-bottom: 0;"><a href="archive.php#jnrds" class="button"><span>View past work</span></a></p>
  <div class="colonnade portfolio">
    <div class="lt_column">
      <div class="slate">
         <div class="scrollUp">&nbsp;</div>
        <div id="scrollPane" class="scroll-pane">
              <ul id="main_navi">
                <li class="active"><img src="../portfolio/wd/websites/jnrds/jnrds_thumb.png" alt="JNR Designs" /></li>
                <li><img src="../portfolio/wd/websites/sc/sc_thumb.png" alt="html5 css3 website" /></li>
                <li><img src="../portfolio/wd/websites/chriscoando/coando_thumb.png" alt="Chris Coando Musician" /></li>
                <li><img src="../portfolio/wd/websites/wyw/wyw_thumb.png" alt="Write Your Way"></li>
                <li><img src="../portfolio/wd/websites/ts/ts_thumb.png" alt="TriGeminal Solutions"></li>
                <li><a href="/orcl_portfolio/_prj_blueone/prototype/sandbox/car.php" target="_blank"><img src="../portfolio/wd/websites/orcl/orcl_thumb.png" alt="Oracle PLM Prototype" /></a></li>
                <li><img src="../portfolio/wd/websites/diamondmotors/dm_thumb.png" alt="Diamond-Motors"></li>
              </ul>
        </div><!-- End: ScrollPane -->
         <div class="scrollDown">&nbsp;</div>
      </div><!-- End: Slate -->
    </div>
    <div class="rt_column">
      <div class="slate"> 
        
        <!-- root element for the main scrollable -->
        <div id="main"> 
          
          <!-- root element for pages -->
          <div id="pages">
            
            <!-- page #1 -->
            <div class="page"> 
              
              <!-- sub navigator #1 -->
              <div class="navi"><a href="#0" class="active"></a><a href="#1"></a><a href="#2"></a></div>
                  <a href="archive.php#jnrds" class="proj_link">View Project</a>
              <!-- inner scrollable #1 -->
              <div class="scrollable">
                <!-- root element for scrollable items -->
                <div class="items" style="left: -550px;">
                  <div class="item"><img src="../portfolio/wd/websites/jnrds/jnrds_hmpg1.png" height="390px" /></div>
                  <div class="item"><img src="../portfolio/wd/websites/jnrds/jnrds_galleries.png" height="390px" /></div>
                  <div class="item"><img src="../portfolio/wd/websites/jnrds/jnrds_contact.png" height="390px" /></div>
                  <div class="item cloned"><img src="../portfolio/wd/websites/jnrds/jnrds_hmpg1.png" height="390px" /></div>
                </div>
              </div>
            </div> 
            
            
            <!-- page #2 -->
            <div class="page"> 
              
              <!-- sub navigator -->
              <div class="navi"><a href="#0" class="active"></a><a href="#1"></a><a href="#2"></a><a href="#3"></a></div>
                  <a href="http://www.screenchef.com" class="proj_link" target="_blank">View HTML5 CSS3 Experimental Website</a>
              
              <!-- inner scrollable -->
              <div class="scrollable"> 
                
                <!-- root element for scrollable items -->
                <div class="items" style="left: -550px;">
                  <div class="item"> <img src="../portfolio/wd/websites/sc/sc_webshot.png" alt="html5 css3 website"> </div>
                  
                  <!-- items on the second page -->
                  <div class="item"> <img src="../portfolio/wd/websites/sc/sc_webshot.png" alt="html5 css3 website"> </div>
                  <div class="item"> <img src="../portfolio/wd/websites/sc/sc_webshot.png" alt="html5 css3 website"> </div>
                </div>
              </div>
            </div>
            
            <!-- page #3 -->
            <div class="page"> 
              
              <!-- sub navigator -->
              <div class="navi"><a href="#0" class="active"></a><a href="#1"></a></div>
                  <a href="archive.php#chriscoando" class="proj_link">View Project</a>
              
              <!-- inner scrollable -->
              <div class="scrollable"> 
                
                <!-- root element for scrollable items -->
                <div class="items" style="left: -550px;">
                  <div class="item"><img src="../portfolio/wd/websites/chriscoando/coando_mockup_r1_v1.png" /></div>
                  
                  <!-- items on the second page -->
                  <div class="item"><img src="../portfolio/wd/websites/chriscoando/coando_mockup_r1_v2.png" /></div>
                  <div class="item cloned"><img src="../portfolio/wd/websites/chriscoando/coando_mockup_r1_v1.png" /></div>
                </div>
              </div>
            </div> 
            
            <!-- page #4 -->
            <div class="page"> 
              
              <!-- sub navigator -->
              <div class="navi"><a href="#0" class="active"></a><a href="#1"></a><a href="#2"></a><a href="#3"></a></div>
                  <a href="archive.php#wyw" class="proj_link">View Project</a>
              
              <!-- inner scrollable -->
              <div class="scrollable"> 
                
                <!-- root element for scrollable items -->
                <div class="items" style="left: -550px;">
                  <div class="item"> <img src="../portfolio/wd/websites/wyw/wyw_webshot1.png"> </div>
                  
                  <!-- items on the second page -->
                  <div class="item"> <img src="../portfolio/wd/websites/wyw/wyw_webshot2.png"></div>
                  <div class="item"> <img src="../portfolio/wd/websites/wyw/wyw_webshot3.png"></div>
                  <div class="item"> <img src="../portfolio/wd/websites/wyw/wyw_webshot4.png"></div>
                  <div class="item cloned"> <img src="../portfolio/wd/websites/wyw/wyw_webshot1.png"> </div>
                </div>
              </div>
            </div>
            
            <!-- page #5 -->
            <div class="page">
              <div class="navi"><a href="#0" class="active"></a><a href="#1"></a><a href="#2"></a></div>
                  <a href="archive.php#ts" class="proj_link">View Project</a>
              
              <!-- inner scrollable -->
              <div class="scrollable"> 
                
                <!-- root element for scrollable items -->
                <div class="items" style="left: -550px;">
                  <div class="item"> <img src="../portfolio/wd/websites/ts/ts_webshot1.png"> </div>
                  
                  <!-- items on the first page -->
                  <div class="item"> <img src="../portfolio/wd/websites/ts/ts_webshot2.png"> </div>
                  <div class="item"> <img src="../portfolio/wd/websites/ts/ts_webshot3.png"> </div>
                  <div class="item cloned"> <img src="../portfolio/wd/websites/ts/ts_webshot2.png"> </div>
                </div>
              </div>
            </div>
            
            <!-- page #6-->
            <div class="page">
              <div class="navi"><a href="#0" class="active"></a><a href="#1"></a><a href="#2"></a></div>
                  <a href="archive.php#orcl" class="proj_link">View Project</a>
              
              <!-- inner scrollable -->
              <div class="scrollable"> 
                
                <!-- root element for scrollable items -->
                <div class="items" style="left: -550px;">
                  <div class="item cloned"> <img src="../global/img/work/orcl_webshot1.png"> </div>
                  
                  <!-- items  -->
                  <div class="item"> <img src="../portfolio/wd/websites/orcl/orcl_webshot.png"> </div>
                  <div class="item"> <img src="../portfolio/wd/websites/orcl/orcl_webshot.png"> </div>
                  <div class="item"> <img src="../portfolio/wd/websites/orcl/orcl_webshot.png"> </div>
                  <div class="item cloned"> <img src="../portfolio/wd/websites/orcl/orcl_webshot.png"> </div>
                </div>
              </div>
            </div>
            
            <!-- page #7 -->
            <div class="page">
              <div class="navi"><a href="#0" class="active"></a><a href="#1"></a><a href="#2"></a></div>
                  <a href="archive.php#dm" class="proj_link">View Project</a>
              
              <!-- inner scrollable -->
              <div class="scrollable"> 
                
                <!-- root element for scrollable items -->
                <div class="items" style="left: -550px;">
                  <div class="item"> <img src="../portfolio/wd/websites/diamondmotors/dm_webshot1.png"> </div>
                  
                  <!-- items on the second page -->
                  <div class="item"> <img src="../portfolio/wd/websites/diamondmotors/dm_webshot2.png"> </div>
                  <div class="item"> <img src="../portfolio/wd/websites/diamondmotors/dm_webshot3.png"> </div>
                  <div class="item cloned"> <img src="../portfolio/wd/websites/diamondmotors/dm_webshot1.png"> </div>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End: Slate -->
</div>
<script src="cursordivscroll.js"></script>
<script src="jquery.mousewheel.js"></script>
<script>
  <!--  JQUERY TOOL - IMAGE SLIDE NAVIGATOR -->     
  $(document).ready(function() {
    alert('dd');
  // main vertical scroll
  $("#main").scrollable({
  
    // basic settings
    vertical: true,
  
    // up/down keys will always control this scrollable
    keyboard: 'static',
  
    // assign left/right keys to the actively viewed scrollable
    onSeek: function(event, i) {
      horizontal.eq(i).data("scrollable").focus();
    }
  
  // main navigator (thumbnail images)
  }).navigator("#main_navi");
  
  // horizontal scrollables. each one is circular and has its own navigator instance
  var horizontal = $(".scrollable").scrollable({ circular: true }).navigator(".navi");
  
  
  // when page loads setup keyboard focus on the first horzontal scrollable
  horizontal.eq(0).data("scrollable").focus();
  
  });

</script>
  <!--JS for Featured Work left pane div scroll -->
  <script type='text/javascript'>
    new CursorDivScroll('scrollPane',500);
  </script>
  <?php include("../../assets/inc/foot.inc.php"); ?>
</body>
</html>
