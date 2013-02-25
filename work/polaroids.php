<?php include("../global/includes/config.inc"); ?>
<?php $thisPage="work"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title><?php echo workTitle ?></title>
	<?php include("../global/includes/head/head_global.inc.php"); ?>
    <style>
    
.portfolio a img {
	border: none;
	display: block;
}

a.polaroid { 
	display: block;
	color: #666;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.7em;
	text-align: center;
	text-decoration: none;
	padding: 5px;
	width: 150px;
	border: 1px solid #BFBFBF;
	background-color: #fff;
	z-index: 2;
	-webkit-box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
	-moz-box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
	box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
	-webkit-transition: all 0.5s ease-in;
}
a.polaroid:hover,
a.polaroid:focus,
a.polaroid:active {
	z-index: 999;
	border-color: #6A6A6A;
	-webkit-box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);
	-moz-box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);
	box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);
	-webkit-transform: rotate(0deg) scale(1.05);
	-moz-transform: rotate(0deg) scale(1.05);
	transform: rotate(0deg) scale(1.05);
}
.polaroid img {
	margin: 0 0 5px 0;
	width: 150px;
	height: 150px;
}

.portfolio {
	position: relative;
	width: 80%;
	margin: 0 auto;
	max-width: 70em;
	height: 450px;
	margin-top: 10%;
	min-width: 800px;
	max-width: 900px;
}
.portfolio .polaroid {
	position: absolute;
}
.portfolio .small {
	width: 75px;
	padding: 6px;
	font-size: 0.6em;
}
.portfolio .small img {
	width: 75px;
	height: 75px;
}
.portfolio .medium {
	width: 200px;
	padding: 13px;
	font-size: 0.8em;
}
.portfolio .medium img {
	width: 200px;
	height: 200px;
}
.portfolio .large {
	width: 300px;
	padding: 20px;
	font-size: 1em;
}
.portfolio .large img {
	width: 300px;
	height: 300px;
}
.portfolio .img1 {
	bottom: 10px;
	right: 365px;
	-webkit-transform: rotate(10deg);
	-moz-transform: rotate(10deg);
	transform: rotate(10deg);
}
.portfolio .img2 {
	top: 50px;
	right: 20px;
	-webkit-transform: rotate(-4deg);
	-moz-transform: rotate(-4deg);
	transform: rotate(-4deg);
}
.portfolio .img3 {
	left: 400px;
	top: 0;
	-webkit-transform: rotate(-5deg);
	-moz-transform: rotate(-5deg);
	transform: rotate(-5deg);
}
.portfolio .img4 {
	top: 10px;
	left: 495px;
	-webkit-transform: rotate(-20deg);
	-moz-transform: rotate(-20deg);
	transform: rotate(-20deg);
}
.portfolio .img5 {
	bottom: 0;
	right: 0;
	-webkit-transform: rotate(1deg);
	-moz-transform: rotate(1deg);
	transform: rotate(1deg);
}
.portfolio .img6 {
	bottom: 10px;
	right: 156px;
	-webkit-transform: rotate(6deg);
	-moz-transform: rotate(6deg);
	transform: rotate(6deg);
}
.portfolio .img7 {
	bottom:0;
	left:400px;
	-webkit-transform: rotate(-10deg);
	-moz-transform: rotate(-10deg);
	transform: rotate(-10deg);
}
.portfolio .img8 {
	bottom: -20px;
	left: 700px;
	-webkit-transform: rotate(-8deg);
	-moz-transform: rotate(-8deg);
	transform: rotate(-8deg);
}
.portfolio .img9 {
	bottom: 0;
	left: 0;
	-webkit-transform: rotate(-8deg);
	-moz-transform: rotate(-8deg);
	transform: rotate(-8deg);
}
.portfolio .img10 {
	top: 0;
	left: 20px;
	-webkit-transform: rotate(8deg);
	-moz-transform: rotate(8deg);
	transform: rotate(8deg);
}
.portfolio .img11 {
	top: 0;
	right: 0;
	-webkit-transform: rotate(-8deg);
	-moz-transform: rotate(-8deg);
	transform: rotate(-8deg);
}
.portfolio .img12 {
	top: 0;
	left: 680px;
	-webkit-transform: rotate(18deg);
	-moz-transform: rotate(18deg);
	transform: rotate(18deg);
}
.portfolio .img13 {
	bottom: -20px;
	right: 630px;
	-webkit-transform: rotate(4deg);
	-moz-transform: rotate(4deg);
	transform: rotate(4deg);
}
.portfolio .img14 {
	top: 90px;
	left: 430px;
	-webkit-transform: rotate(15deg);
	-moz-transform: rotate(15deg);
	transform: rotate(15deg);
}
.portfolio .img15 {
	left:176px;
	top:20px;
	-webkit-transform: rotate(-8deg);
	-moz-transform: rotate(-8deg);
	transform: rotate(-8deg);
}
.portfolio a:hover,
.portfolio a:focus {
	z-index: 5;
}

    </style>
</head>
<body id="work">
	<?php include("../global/includes/nav/nav.inc.php"); ?>
	<div class="portfolio">
        <a href="#" class="large polaroid img1"><img src="../global/img/dm_webshot_400px.png" alt="" />Diamond-Motors, Inc.</a>
        <a href="#" class="polaroid img2"><img src="../global/img/ts_webshot_400px.png" alt="" />TriGeminal Solutions</a>
        <a href="#" class="small polaroid img3"><img src="../global/img/skp_webshot_400px.png" alt="" />S &amp; K Plating</a>
        <a href="#" class="medium polaroid img4"><img src="../global/img/wyw_webshot_400px.png" alt="" />Write Your Way</a>
        <a href="#" class="polaroid img5"><img src="../global/img/ts_webshot_400px.png" alt="" />TriGeminal Solutions</a>
        <a href="#" class="polaroid img6"><img src="../global/img/dm_webshot_400px.png" alt="" />Diamond-Motors, Inc.</a>
    
        <a href="#" class="polaroid img7"><img src="../global/img/dm_webshot_400px.png" alt="" />Diamond-Motors, Inc.</a>
        <a href="#" class="small polaroid img8"><img src="../global/img/wyw_webshot2_400px.png" alt="" />Write Your Way</a>
        <a href="#" class="medium polaroid img9"><img src="../global/img/ts_webshot_400px.png" alt="" />TriGeminal Solutions</a>
        <a href="#" class="polaroid img10"><img src="../global/img/skp_webshot_400px.png" alt="" />S &amp; K Plating</a>
    
        <a href="#" class="small polaroid img11"><img src="../global/img/dm_webshot_400px.pngg" alt="" />Diamond-Motors, Inc.</a>
        <a href="#" class="small polaroid img12"><img src="../global/img/ts_webshot_400px.png" alt="" />TriGeminal Solutions</a>
        <a href="#" class="small polaroid img13"><img src="../global/img/skp_webshot_400px.png" alt="" />S &amp; K Plating</a>
        <a href="#" class="small polaroid img14"><img src="../global/img/ts_webshot_400px.png" alt="" />TriGeminal Solutions</a>
        <a href="#" class="polaroid img15"><img src="../global/img/wyw_webshot2_400px.png" alt="" />Write Your Way</a>
    </div>
	<?php include("../global/includes/foot/foot_global.inc.php"); ?>
</body>
</html>
