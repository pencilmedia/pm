<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>
<?php include("global/includes/dbconnect.inc.php"); ?>
<?php  // View inventory item : Gather this car's full info and populate the fields with their respective values
if (isset($_GET['pid'])) {
	$targetID = $_GET['pid'];
    $sql = mysql_query("SELECT * FROM inventory WHERE id='$targetID' LIMIT 1"); // Order results newest to oldest
    $productCount = mysql_num_rows($sql); // count the output amount
	
	if ($productCount > 0) {
	
		while($row = mysql_fetch_array($sql)){
			$date_added = strftime("%b %d %Y", strtotime($row["date_added"]));
			$id = $row["ID"];
			$price = $row["Price"];
			$year = $row["Year"];
			$make = $row["Make"];
			$model = $row["Model"];
			$trim = $row["Trim"];
			$engine = $row["Engine"];
			$transmission = $row["Transmission"];
			$color = $row["Color"];
			$mileage = $row["Mileage"];
			$vin = $row["VIN"];
			// Below is to pull the comma separated image filenames from the DB then strip the comma
			$img1 = $row["Img1"];
			$pieces = explode(" ", $img1); // Creates the Img1 filenames array 
			$imgfilename = str_replace(',', '', $pieces); // Strip the comma separated filenames from the DB
				
		} // end of if productCount > 0
		
	} else {
		// If the database is empty there is no inventory
		echo "<p>No inventory item.</p>";
		exit();
	}

}
?>
          
<!DOCTYPE html>
<html>
<head>
<title><?php echo inquiryTitle ?></title>
<?php include("global/includes/head.inc"); ?>
<style>
	@import url("global/js/pikachoose/styles/bottom.css");
</style>
<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
<script type="text/javascript" src="global/js/pikachoose/lib/jquery.pikachoose.js"></script>
<script language="javascript">
	$(document).ready(
		function (){
			$("#pikame").PikaChoose({thumbOpacity:0.6,showCaption:false,transition:[5],speed:3000,carousel:true,carouselOptions:{wrap:'circular'}});
		});
</script>  
</head>
<body id="auto_inventory" class="view_details">

<div id="mainContainer" class="clearfix">
  <!-- BEGIN: HEADER & NAVIGATION -->
  <?php include("global/includes/header.htm"); ?>
  <!-- END: HEADER & NAVIGATION -->
  <div id="mainContent" class="clearfix">
    <!-- BEGIN: LEFT FRAME -->
 	<?php include("global/includes/left_frame.htm"); ?>
    <!-- END: LEFT FRAME -->
    <div id="rightContent">
 	<?php include("toolbar.inc.php"); ?>
    <h2>SFPCU Pre-Owned Inventory</h2>
    <h3>View Details</h3>
    
<?php
	// Preview Results
	
	// let's print the international format for the en_US locale
	// setlocale(LC_MONETARY, 'en_US'); This line places USD in front
	// $priceusd = money_format('%i', $price) . "\n"; This line will format in the US currency format
	$priceusd =  number_format($price); // This line formats numbers in english format
	$mileageusd =  number_format($mileage); // This line formats numbers in english format
			
	// I have included the HTML code that calls PIKACHOOSER plugin for the photo album
	echo "<h3 style='font-size: 24px;color: #900;margin: 1em 0 0 0;'>$year $make $model - $$priceusd</h3>"; // Display Title and Price
	echo "<div class='photo_uploaded'><h3>Photos for $year $make $model</h3>";

	if (!empty($img1)) {
		echo "<ul id='pikame' class='jcarousel-skin-pika'>";
		foreach ($imgfilename as $eachimg) { // Create an img tag and the filename for each value in the DB
			echo "<li><a href='photos/$eachimg' target='_blank'><img src='http://www.pencilmedia.com/labs/inventory/uploads/$eachimg' /></a><span>$eachimg</span></li>";
			// BASIC Show each image name: echo "<span>$eachimg <br />";
			// BASIC Show each link to full size image: echo "<a href='photos/$item' target='_blank'>View</a></span>";
		}		
		echo "</ul>";
	
	} else {
		echo "<img src='http://www.personalautoshopper.org/global/media/img/no_photos.png' style='margin-left: 20%;' />";
	}
	
	echo "</div>";
	
	$forminfo = (
		"<div class='colonnade details'><h3>Details</h3>" .
		"<div class='lt_column'><dl class='side_by_side_text'>" .
		
		"<dt><label>Year</label></dt><dd>" . $year .  "</dd>" .
		"<dt><label>Make</label></dt><dd>" . $make .  "</dd>" .
		"<dt><label>Model</label></dt><dd>" . $model .  "</dd>" .
		"<dt><label>Trim</label></dt><dd>" . $trim .  "</dd>" .
		"<dt><label>Engine</label></dt><dd>" . $engine .  "</dd>" .
		"<dt><label>Transmission</label></dt><dd>" . $transmission .  "</dd>" .
		
		"</dl></div><div class='rt_column'><dl class='side_by_side_text'>" .
		
		"<dt><label>Price</label></dt><dd>$" . $priceusd .  "</dd>" .
		"<dt><label>Color</label></dt><dd>" . $color .  "</dd>" .
		"<dt><label>Mileage</label></dt><dd>" . $mileageusd .  "</dd>" . 
		"<dt><label>Vin No.</label></dt><dd>" . $vin .  "</dd>" .
		"<dt><label>Stock No.</label></dt><dd>" . $targetID .  "</dd>" .
		"<dt><label>Date Added</label></dt><dd>" . date("M-d-Y") .  "</dd>" .
		
		"</dl></div></div>" .
		"\n"
	);
	
	$display .= nl2br($status);
	$display .= nl2br($forminfo);
	echo $display; 
	echo "<span class='inventory_tools'><a href='edit.php?pid=$id' class='button'><span>Edit</span></a> <a href='index.php?deleteid=$id' class='button'><span>Delete</span></a></span>"
?>        
         <div style="width: 565px; padding-top: 20px; overflow:hidden;">
        <!-- BEGIN : Web Standards-Compliant Flash  --><!-- End : Web Standards-Compliant Flash  -->
        </div>
    </div>
    </div>
  <!-- BEGIN: FOOTER -->
  <?php include("global/includes/footer.htm"); ?>
  <!-- END: FOOTER -->
</div>

</body>
</html>
