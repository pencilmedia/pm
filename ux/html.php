<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $subPage="uxd";
    $subName="uxHtml5";
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
        <div class="slate">
        
            <h3><?php echo htmlName ?></h3>
            <p>HTML5 exploration and useful development resources.</p>
            
            <h4>GET vs. POST in Forms</h4>
            <h5>Submit with GET</h5>
            <p>When you submit a form, using GET, the content of your form will become url encoded into a query string. You will be able to see this in the address bar in your browser. The data will be appended after a <i>?</i> as name value pairs.</p>
            <pre>?name=steven&amp;age=43</pre>
            <h5>Submit with POST</h5>
            <p>POST is sent in the body of the request after the headers and is not visible as a query string. You use it to POST data to the server for processing.</p>
            <h5>Conclusion</h5>
            <p>When you are sending form data you should use POST. If you are just running search queries then GET is appropriate.</p>
            <p>Reference: <a href="http://stevenclark.com.au/2008/01/12/get-vs-post-for-the-beginner/">GET vs. POST for the beginner</a></p>
            <hr />
            
            <h4>Feature Detection vs. Browser Detection</h4>
            <p>Browser detection has become what not to do when dealing with cross-browser development, largely superceded by feature detection for reasons explained in this article.</p>
            <p>Reference: <a href="http://www.html5rocks.com/en/tutorials/detection/">HTML5 Rocks: Feature Detection</a></p>
            <hr />
            
            <h4>What is a Namespace?</h4>
            <p>Namespaces solve naming conflicts. In order to combine those two XML documents you need to define the two namespaces and indicate which &lt;table&gt; element belongs to which namespace.</p>
            <p>Reference: <a href="http://webdesign.about.com/od/xmlnamespaces/a/xml_namespaces.htm">Namespaces Explained</a></p>
            <hr />
            
            <h4>HTML Entities</h4>
            <p>A list of HTML entity codes for well-formed markup.</p>
            <p>Reference: <a href="http://techfoolery.com/tools/entities/">HTML Entities</a></p>
            <hr />
            
            
      </div>
    </div>
    <div class="rt_column">
    	  <?php include("uxsubnav.inc.php"); ?>
        </div>
  </div>
    </div>
<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
