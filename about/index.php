<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="about"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo aboutTitle ?></title>
	<?php include("../assets/inc/head.inc.php"); ?>

</head>
<body id="about">
	<?php include("../assets/inc/nav/nav.inc.php"); ?>
	<?php include("../assets/inc/socialbar.inc.php"); ?>
    <section class="content">
    	<div class="colonnade">
        	<article class="lt_column">
                <h2><?php echo aboutHead ?></h2>
                <p>Pencil Media is the creative outlet of Ralph Garcia. I am passionate about design, typography, and the tools of the web. The design of a site plays a primary role in the interpretation of a message. It creates a critical, lasting impression and encourages curiousity. Accessible, understandable information and beauty of form can capture the attention of visitors.</p>
                <p>Story can be a <a href="http://adactio.com/journal/1499/">compelling design tool</a>. A good story captures your attention and leaves you wondering what will happen next. It guides  and manipulates your emotions leaving you with an intended mood. The design of a site is the narrator. It sets the mood of your topic.	A beautifully designed site will do the same for your audience.</p>
                <p>A poorly designed website will fail in many ways. With the amount of information on the web, we have become accustomed to badly designed information. While design must appeal to our sense of aesthetic, it must not stand in the way of delivery. Ideally, the design of sites should engage and simplify the observer's experience.</p>
                <h2>About This Site</h2>
                <p>This site is my story. It is a collection of creative thinking, design, and work that represents the problem solving, simple solutions, and cost-effective results I've produced and delivered for clients over the years. </p>
                <p>The site is created with PHP, HTML5, CSS and jQuery/JavaScript.</p>
                <section class="colonnade">
                    <dl class="lt_column">
                        <dt>Goodies</dt>
                        <dd><a href="http://www.wunderkit.com/#/web-development-and-ixd-space/" class="ico wunderkit">Wunderkit Workspace</a></dd>
                        <dd><a href="http://about.me/ralphgarcia" class="ico aboutme">About.me</a></dd>   
                    </dl>
                    <dl class="rt_column">
                        <dt>&nbsp;</dt>
                        <dd></dd>
                        <dd><a href="http://www.theleagueofmoveabletype.com/" class="ico leaguetype">The League of Moveable Type</a></dd>
                    </dl>
                </section>
        	</article>
            <aside class="rt_column">
                  <dl>
                    <dt><h3>PM Properties</h3></dt>
                    <dd><p>Other Pencil Media properties.</p></dd>
                    <dd><a href="https://github.com/pencilmedia">Github</a>: Pencil Media Repositories</dd>
                    <dd><a href="http://labs.pencilmedia.com">Pencil Media Labs</a>: Experiments</dd>
                    <dd><a href="http://www.screenchef.com">screenchef.com</a>: Personal Portfolio</dd>
                    <dd><a href="http://www.writeyourway.org">Write Your Way</a>: Graphologist</dd>
                    <dd><a href="http://www.proposedevents.com">Proposed Events</a>: Event Planning</dd>
                    <dt><h3>Inspiration</h3></dt>
                    <dd><p>Favorite websites and designers.</p></dd>
                    <!--dt><a href="#" class="sml_ico collapse" title="Show less list"><span>Expand / Collapse</span></a>Inspiring Designers</dt>-->
                    <dd><a href="http://www.simplebits.com">SimpleBits</a></dd>
                    <dd><a href="http://www.hicksdesign.co.uk/journal">Hicks Design</a></dd>
                    <dd><a href="http://snook.ca/jonathan">Snook.ca</a></dd>
                    <dd><a href="http://paulirish.com">Paul Irish</a></dd>
                    <dd><a href="http://www.jasonsantamaria.com">Jason Santa Maria</a></dd>
                    <!--
                    <dd><a href="http://adactio.com/journal"> Jeremy Keith</a></dd>
                    <dd><a href="http://veerle.duoh.com/index.php">Veerle's blog</a></dd>
                    <dd><a href="http://www.zeldman.com">Jeffrey Zeldman</a></dd>
                    
                    <dd><a href="http://www.dustindiaz.com">Shaun Inman</a></dd>
                    <dd><a href="http://www.cameronmoll.com">Cameron Moll</a></dd>
                    <dd><a href="http://www.stopdesign.com">Stopdesign</a></dd>
                    <dd><a href="http://www.andybudd.com">Andy Budd</a></dd>
                    <dd><a href="http://www.themaninblue.com">The Man in Blue</a></dd>
                    <dd><a href="http://www.danwebb.net">Dan Webb</a></dd>
                    <dd><a href="http://www.kottke.org">Jason Kottke</a></dd>
                    -->
                    <dt>Design</dt>
                    <dd><a href="http://kuler.adobe.com">Adobe Kuler Color System</a></dd>
                    <dd><a href="http://dailydropcap.com">Daily Drop Cap</a></dd>
                    <dd><a href="http://www.underconsideration.com/brandnew">Brand New</a></dd>
                    <dd><a href="http://www.veer.com">Veer</a></dd>
                    
                    <dt>IxD</dt>
                    <dd><a href="http://konigi.com">Home | Konigi</a></dd>
                    <dd><a href="http://www.lukew.com">Luke W : Interaction Design</a></dd>
                    <dd><a href="http://changeorder.typepad.com/weblog">ChangeOrder UX Design</a></dd>
                    
                    <dt>Web Development</dt>
                    <dd><a href="http://www.thinkvitamin.com">Vitamin</a></dd>
                    <dd><a href="http://www.alistapart.com">A List Apart</a></dd>
                    <dd><a href="http://www.crockford.com">Douglas Crockford</a></dd>                    
                </dl>
            </aside>
        </div>
    </section>
	<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>
