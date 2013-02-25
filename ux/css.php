<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $subPage="uxd";
    $subName="uxCss3";
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
        
            <h3><?php echo cssName ?></h3>
            <!-- Begin: Rounded Corners CSS3 and Old CSS Method -->
            
            <h4>Rounded Corners CSS3 and Old CSS Method</h4>
            <h5>CSS3 Method</h5>
            <p>Life got easier with border-radius in CSS3. No extra markup. Simply set the border-radius to 6px. Box can be changed to any color and sit on any BG color.</p>
            <style>
				.roundbox { border-radius:6px; -moz-border-radius:6px; -webkit-border-radius:6px; background-color:#CCC; width: 250px; height: 115px; border:1px solid #999; display:table-cell; vertical-align:middle; text-align:center; }
            	
            </style>
            <div class="roundbox">CSS3 Rounded Box</div>
            <h5>CSS2 Method</h5>
            <h6>Adjustable (width &amp; height) Rounded Corner Box</h6>
            <p>This method uses an image of a gray box. You can adjust the width of box to a certain point, then it breaks. The image would need to be enlarged accordingly. Also, to change the box color you would need to update the image. Fortunately, this version allows you to change the BG color the box sits on without having to update the image.</p>
            <style>
				.r1 { background: url(ux_img/sprite_round_corner2.png) no-repeat right top;  width: 250px; height: 115px; }
            	.r2 { background: url(ux_img/sprite_round_corner2.png) no-repeat left top; width: auto; height: 115px; }
            	.r3 { background: url(ux_img/sprite_round_corner2.png) no-repeat right bottom; width: auto; height: 115px; }
            	.r4 { background: url(ux_img/sprite_round_corner2.png) no-repeat left bottom; width: auto; height: 115px; }
           		.r4 p { padding-top:17%; text-align:center; }
		    </style>
            <div class="r1">
            	<div class="r2">
                	<div class="r3">
                    	<div class="r4"><p>CSS2 Rounded Box</p></div>
                    </div>
            	</div>
            </div>
            <h6>Fluid Rounded Corner Box</h6>
            <p>This method uses an image that is a transparent square with rounded corners on a white background. It is extremely difficult to create rounded corners on a transparent BG so you have the ability to change the background color. In this version, it is necessary to update the BG color the image to match the BG color the box sits on.</p>
            <style>
				.boxcontainer { width: 95%; height: 150px; padding:10px; background-color:#fff; border:1px solid #999; }
				.cbox {  position:relative; width:400px; height:100%; background-color:#ccc; margin:0 auto; }
				.boxcontent { text-align:center; width:100%; padding-top:17%; }
				.tl { background: url(ux_img/sprite_roundcorners.png) no-repeat 0 0; width: 25px; height: 25px; position:absolute; top:0; left:0  }
            	.tr { background: url(ux_img/sprite_roundcorners.png) no-repeat -5px 0; width: 25px; height: 25px; position:absolute; top:0; right:0 }
            	.bl { background: url(ux_img/sprite_roundcorners.png) no-repeat 0 -5px; width: 25px; height: 25px; position:absolute; bottom:0; left:0; }
            	.br { background: url(ux_img/sprite_roundcorners.png) no-repeat -5px -5px; width: 25px; height: 25px; position:absolute; bottom:0; right:0; }
            </style>
            <div class="boxcontainer">
            	<div class="cbox">
                    <div class="boxcontent">
                    	Fluid Rounded Corner Box
                        <div class="tl"></div>
                        <div class="tr"></div>
                        <div class="bl"></div>
                        <div class="br"></div>
                    </div>
                </div>
            </div>
            <hr />
            
            <h4>CSS3 Flex Box</h4>
            <h6>Reference: <a href="http://www.html5rocks.com/en/tutorials/flexbox/quick/">Flex-Box Explained</a></h6>
            <p>I'd bet that you've done your fair share of styling elements to be arranged horizontally or vertically on a page. As of yet, though, CSS has lacked a suitable mechanism for this task. Enter the CSS3 Flexible Box Module, or Flexbox for short.</p>
            <ul>
              <li>Floats? Where we're going, we don't need floats.</li>
              <li>Layouts that were challenging before are more sensible.</li>
              <li>We can create true flexible layouts, and the browser will do the calculations for us.</li>
            </ul>
            <style>
				.box { display: box; width: 100%; height: 100px; border: 1px solid #666;
				  /* flexbox setup */
				  display: -webkit-box;
				  -webkit-box-orient: horizontal;
				  display: -moz-box;
				  -moz-box-orient: horizontal;
				  box-orient: horizontal;
				}
				
				.box > div {
				  -webkit-box-flex: 1;
				  -moz-box-flex: 1;
				  box-flex: 1;
				
				  -moz-transition: width 0.7s ease-out;
				  -o-transition: width 0.7s ease-out;
				  -webkit-transition: width 0.7s ease-out;
				  transition: width 0.7s ease-out;
				}
				
				/* our colors */
				.box > div:nth-child(1){ background : #FCC; }
				.box > div:nth-child(2){ background : #CFC; }
				.box > div:nth-child(3){ background : #CCF; }
				
				.box > div:hover { 
				  width: 200px;
				}​
            </style>
<div class="box">
            	<div>Box One</div>
            	<div>Box Two</div>
    <div>Box Three</div>
            </div>
            <hr />
            
    <!-- Begin: Box Model -->
            <h4>CSS2 vs CSS3 Box Model</h4>
            <h6>Reference: <a href="http://en.wikipedia.org/wiki/Internet_Explorer_box_model_bug">Box Model Wiki</a></h6>
            <style>
				.boxmodel { margin: 10px; padding: 0 20px; background-color: #c9c9c9; width: 400px; height: 50px; border:1px solid #999; text-align: center; }
				.boxmodel p { margin: 15px auto; font-size: 80%; }
				.boxmodel.cbox { box-sizing: content-box; -moz-box-sizing:content-box; /* Firefox */ -webkit-box-sizing: content-box;  border: 1px solid red; padding: 0 20px; } 
				.boxmodel.cbox p { border: 1px solid green; }   
				.boxmodel.bbox { box-sizing: border-box; -moz-box-sizing: border-box; /* Firefox */ -webkit-box-sizing: border-box; /* Safari */ border: 1px solid red; padding: 0 20px; }   
				.boxmodel.bbox p { border: 1px solid green; }       
            </style>
            <div class="boxmodel"><p>Standard Box Model</p></div>
            <div class="boxmodel cbox"><p>box-sizing: content-box (Adds to set width)</p></div>
            <div class="boxmodel bbox"><p>box-sizing: border-box (Subtracts from set width)</p></div>
            <p>In Firefox and Webkit, this box will grow to include the border, margin and padding in addition to the set width of the box. Set to width 400px box, this box is now 462px wide. (400px + 20px + 20px + 10px + 10px 1px +1px)</p>
            <p>In older versions of IE, it does not count the margin and the content shrinks in width so the box remains 400px. In IE6+, it has been changed as in other browsers.</p>
            <p><a href="http://www.w3schools.com/cssref/css3_pr_box-sizing.asp">CSS3 Box-Sizing</a> <br /> (box-sizing:content-box) sets the behavior of width and height as specified by CSS2.1. The padding and border of the element are laid out and drawn outside the specified width and height.</p><p>(box-sizing:border-box) sets the content width and height are calculated by subtracting the border and padding widths of the respective sides from the specified 'width' and 'height' properties</p>
            <hr />
            
            <!-- Begin: IE Specific Styles -->
            <h4>IE Conditional Comments</h4>
            <h6>Reference: <a href="http://webdesignerwall.com/tutorials/css-specific-for-internet-explorer">CSS Specific for Internet Explorer</a></h6>
            <p>IE conditional comment is probably the most commonly used to fix the IE bugs for specific versions (IE6, IE7, IE8). Below are some sample code to target different versions of Internet Explorer:</p>
            <pre>
            	<code>
                    &lt;!--[if IE 8]&gt;
                    &lt;style type="text/css"&gt;
                        /* css for IE 8 */
                    &lt;/style&gt;
                    &lt;![endif]--&gt;
                    
                    &lt;!--[if lt IE 8]&gt;
                        &lt;link href="ie7.css" rel="stylesheet" type="text/css" /&gt;
                &lt;![endif]--&gt;
                </code>
            </pre>
            <hr />
            
            <!-- Begin: Equal Heights -->
            <h4>Equal Heights Pure CSS</h4>
            <h6><a href="css_columns.html" target="_blank">Equal Column Heights</a></h6>
            <p>This is an example of CSS equal height columns.</p>
            <hr />
            
            <!-- Begin: CSS Selectors Reference -->
            <h4>CSS Selectors List</h4>
            <h6>Reference: <a href="http://www.w3schools.com/cssref/css_selectors.asp">W3schools.com CSS Selectors List</a></h6>
            <p>In CSS, selectors are patterns used to select the element(s) you want to style such as P, STRONG, EM etc. Here is a list of CSS selectors.</p>
            <hr />
            
            <!-- Begin: Centered Link -->
            <h4>Link with text centered vertically and horizontally</h4>
            <style>        
                #testLink {
					background-color: #e9e9e9;
                    border: 1px solid black;
                    display: table-cell;
                    width: 200px;
                    height: 200px;
                    text-align: center;
                    vertical-align: middle;
					margin-left: 50%;
                    /* IE hacks */
                    *display: block;
                    *line-height: 200px;
                }   
                #testLink:hover {
					background-color: #ccc;
                    border: 1px solid #432;
                }
            </style>
            <a href="#" id="testLink">Faux Button Link</a>
            <hr />
            
            <!-- Begin: CSS Inheritance Overriding -->
            <h4>CSS Inheritance: Font Size</h4>
            <p>Font size is 2em not .5em. The class .robot is overridden because the id zombie specifically tells p tags to get 2em font size.</p>
            <style>	
            #zombie p { font-size:2em; }
            div p.robot { font-size:.5em; }
            </style>
            <div id="zombie">
            	<p class="robot">Font size is 2em not .5em</p>
            </div>
            <pre>
            	<code>
                    #zombie p {font-size:2em;}
                    div p.robot {font-size:.5em;}
                    
                    &lt;div id="zombie"&gt;
                        &lt;p class="robot"&gt;Font size is 2em not .5em&lt;/p&gt;
                    &lt;/div&gt;
                </code>
            </pre>
            
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
