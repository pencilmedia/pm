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
<style>
    #loading {
    	background-image: url("assets/img/load.gif") no-repeat left top;
    }
    #dynamic {
    	display:none;
    }   
</style>
</head>
<body id="work">
<?php include("../assets/inc/nav/nav.inc.php"); ?>
<?php include("../assets/inc/socialbar.inc.php"); ?>
    <section class="content">
        <h2><?php echo archiveHead ?></h2>
        <?php include("../assets/inc/nav/work.inc.php"); ?>
        <div class="colonnade">
            <article class="lt_column">
            <div id="loading"></div>
            <div id="dynamic">
            <!-- Ajax Content -->
            </div>
            </article>
            <aside class="rt_column">
            <h3>Clients</h3>
            <p>Below is a list of past work.</p>
            <dl>
                <dd><a href="#illustrations" rel="ajax">Illustration : Life Drawings</a></dd>
                <dd><a href="#orcl" rel="ajax">Oracle Corporation</a></dd>  
                <dd><a href="#jnrds" rel="ajax">JNR Design Solutions</a></dd>            
                <dd><a href="#wyw" rel="ajax">Write Your Way</a></dd>   
                <dd><a href="#dm" rel="ajax">Diamond-Motors Inc.</a></dd>           
                <dd><a href="#ts" rel="ajax">TriGeminal Solutions</a></dd>    
                <dd><a href="#mcafee" rel="ajax">McAfee</a></dd> 
                <dd><a href="#maxtor" rel="ajax">Maxtor</a></dd> 
                <dd><a href="#chriscoando" rel="ajax">Chris Coando</a></dd>
                <dd><a href="#skp" rel="ajax">S &amp; K Plating Company</a></dd> 
                <dd><a href="#baytsp" rel="ajax">BayTSP</a></dd>
                <dd><a href="#bds" rel="ajax">BDS Marketing</a></dd>
                <dd><a href="#cupertinobike" rel="ajax">Cupertino Bike Shop</a></dd>                    
                <dd><a href="#webgain" rel="ajax">WebGain</a></dd>   
                <dd><a href="#e411" rel="ajax">Event 411</a></dd>
            </dl>
            </aside>
        </div>
    </section>
<?php 
	include("../assets/inc/modal_overlay.inc.php");
	include("../assets/inc/foot.inc.php");
?>
<!--  AJAX PAGE LOADER-->
<script src="../assets/plugins/jq.history.js"></script>
<script src="../assets/plugins/jq.loadwork.js"></script>
</body>
</html>
