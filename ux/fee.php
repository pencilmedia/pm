<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $subPage="fee";
?>
<!DOCTYPE html>
<html>
    <head>
    <title><?php echo uxTitle ?></title>
    <?php include("../assets/inc/head.inc.php"); ?>
    </head>
    <body id="labs">
<?php include("../assets/inc/nav/nav.inc.php"); ?>
<?php include("../assets/inc/socialbar.inc.php"); ?>
<div class="content">
    <h2><?php echo uxHead ?></h2>
    <?php include("../assets/inc/nav/ux.inc.php"); ?>
      <div class="colonnade">
    <div class="lt_column">
   	  <h3>What is a <?php echo fee ?></h3>
      <p>We live a world where almost anything you want to know is accessible in 15 seconds through the Internet. However, having access to information isn&rsquo;t the same as knowing how to apply it. There&rsquo;s a certain base knowledge that is expected for  front-end engineers to have to do the job effectively.</p>
      <p>Below is a list of the expected base knowledge of a front-end engineer (junior through senior).</p>
      <h4>Front-End Engineer Reference</h4>
      <dl class="reference">
        <dt><a href="http://en.wikipedia.org/wiki/Document_Object_Model" target="_blank">DOM structure</a></dt>
        <dd>How nodes are related to one another and How to traverse from one to the next.</dd>
        <dt><a href="http://www.webreference.com/js/column43/" target="_blank">DOM manipulation</a></dt>
        <dd>How to add, remove, move, copy, create, and find nodes.</dd>
        <dt><a href="http://en.wikipedia.org/wiki/DOM_events" target="_blank">Events</a></dt>
        <dd>How to use them and the major differences between IE and the DOM event models.</dd>
        <dt><a href="http://en.wikipedia.org/wiki/XMLHttpRequest" target="_blank">XMLHttpRequest</a></dt>
        <dd>What it is, how to perform a complete GET request, how to detect errors.</dd>
        <dt><a href="http://www.quirksmode.org/css/quirksmode.html" target="_blank">Strict vs. quirks modes</a></dt>
        <dd>How to trigger each and why this matters.</dd>
        <dt><a href="http://www.w3schools.com/css/css_boxmodel.asp" target="_blank">The box model</a></dt>
        <dd>How margin, padding, and border are related and how Internet Explorer &lt; 8 does things differently.</dd>
        <dt>Block vs. inline elements</dt>
        <dd>How to manipulate using CSS, how they effect things around them and your ability to style them.</dd>
        <dt>Floating elements</dt>
        <dd>How to use them, troubles with them, and how to work around the troubles.</dd>
        <dt>HTML vs. XHTML</dt>
        <dd>How they're different, why you might want to use one over the other.</dd>
        <dt><a href="http://www.json.org/js.html" target="_blank">JSON</a></dt>
        <dd>What it is, why you'd want to use it, how to actually use it, implementation details. <a href="http://www.json.org/example.html" target="_blank">JSON Example.</a></dd>
      </dl>  
    </div>
    <div class="rt_column">
          <h3>Job Interviewing Tips</h3>
          <dl>
                <dd><a href="http://www.nczonline.net/blog/2010/01/05/interviewing-the-front-end-engineer/" target="_blank">The basics of a front end engineer</a></dd>
                <dd><a href="http://www.nczonline.net/blog/2007/03/27/surviving-an-interview-with-me/" target="_blank">A good interview for a front end engineer</a></dd>
                <dd><a href="http://www.nczonline.net/blog/2007/08/15/what-makes-a-good-front-end-engineer/" target="_blank">What makes a good front end engineer</a></dd>
     	 </dl>
        </div>
  </div>
    </div>
<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
