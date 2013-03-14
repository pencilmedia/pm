<?php include("protect.php"); ?>
<?php include("../global/includes/config.inc"); ?>
<?php 
include("../global/includes/dbconnect.inc.php");
?>
<?php 
//Error Reporting
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors','1');
?>
<?php
// Parse the form data and add inventory item to the system
if (isset($_POST['make'])){
		$id = mysql_real_escape_string($_POST['stock']);
		$year = mysql_real_escape_string($_POST['year']);
		$make = mysql_real_escape_string($_POST['make']);
		$model = mysql_real_escape_string($_POST['model']);
		$trim = mysql_real_escape_string($_POST['trim']);
		$engine = mysql_real_escape_string($_POST['engine']);
		$transmission = mysql_real_escape_string($_POST['transmission']);
		$color = mysql_real_escape_string($_POST['color']);
		$mileage = mysql_real_escape_string($_POST['mileage']);
		$vin = mysql_real_escape_string($_POST['vin']);
		
	// See if that car is an identical match to another car
	$sql = mysql_query("SELECT ID FROM inventory WHERE ID='$id' LIMIT 1");
	$productMatch = mysql_num_rows($sql); // count the output amount
	if ($productMatch > 0) {
		echo 'You entered a duplicate stock number';
		exit();	
	}
	
	// Add this product into the DB now
	$sql = mysql_query("INSERT INTO inventory (ID, Year, Make, Model, Trim, Engine, Transmission, Color, Mileage, VIN, date_added) VALUES('$id','$year','$make','$model','$trim','$engine','$transmission','$color','$mileage','$vin',now())") or die(mysql_error());
	$pid = mysql_insert_id();
	// Place image in folder
	$newname = "$pid.jpg";
	move_uploaded_file($_FILES['upload_photo']['tmp_name'], "photos/$newname");
	
}
?>
<?php
//Grab entire list for viewing
$product_list = "";
$sql = mysql_query("SELECT * FROM inventory ORDER BY date_added DESC"); // Order results newest to oldest
$productCount = mysql_num_rows($sql); // count the output amount
 

if ($productCount > 0) {

	while($row = mysql_fetch_array($sql)){
		$date_added = strftime("%b %d %Y", strtotime($row["date_added"]));
		$id = $row["ID"];
		$year = $row["Year"];
		$make = $row["Make"];
		$model = $row["Model"];
		$trim = $row["Trim"];
		$engine = $row["Engine"];
		$transmission = $row["Transmission"];
		$color = $row["Color"];
		$mileage = $row["Mileage"];
		$vin = $row["VIN"];
		$product_list .= "
		
		<p>
		<h3><a href='#'>$year $make $model $trim</a></h3>
		$engine $transmission $color<br />
		Mileage: $mileage<br />
		Stock No. $id <em>Added $date_added</em> &dash; VIN: $vin<br />
		<span class='inventory_tools'><a href='#'>Edit</a> &bull; <a href='#'>Delete</a></span>
		</p>
		
		";
	}
	
} else {
	$product_list = "No Inventory Available";	
}
	
	?>
          
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo inquiryTitle ?></title>
<?php include("../global/includes/head/head.inc"); ?>

<style>

form {
	margin-top: 3em;
}

</style>

</head>
<body id="hmpg">

<div id="mainContainer" class="clearfix">
  <!-- BEGIN: HEADER & NAVIGATION -->
  <?php include("../global/includes/header_data/header.htm"); ?>
  <!-- END: HEADER & NAVIGATION -->
  <div id="mainContent" class="clearfix">
    <!-- BEGIN: LEFT FRAME -->
 	<?php include("../global/includes/left_frame_data/left_frame.htm"); ?>
    <!-- END: LEFT FRAME -->
    <div id="rightContent">
     <h2>SFPCU Pre Owned Inventory</h2>
	 <p style="float: right;">Quantity in Inventory: <em><?php echo $productCount; ?></em></p>
    
    <div id="inventory_listings">
		<?php echo $product_list; ?>
    </div>
   


<form action="index.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
<fieldset>
<legend>Add Inventory</legend>
<dl>
    <dt class="required"><label for="stock">Stock No.</label></dt>
    <dd><input type="text" name="stock" /></dd>
    
    <dt class="required"><label for="vin">VIN</label></dt>
    <dd><input type="text" name="vin" /></dd>
    
    <dt><label for="upload_photo">Upload a Photo</label></dt>
    <dd><input type="file" name="upload_photo" /></dd>
    
    <dt><label for="engine">Engine</label></dt>
    <dd>
        <select name="engine">
            <option>V8</option>
            <option selected="selected">V6</option>
            <option>V4</option>
            <option>Hybrid</option>
            <option>Electric</option>
        </select>
    </dd>
    
    <dt><label for="transmission">Transmission</label></dt>
    <dd>
        <select name="transmission">
            <option selected="selected">Automatic</option>
            <option>6-Speed Manual</option>
            <option>4-Speed Manual</option>
            <option>Electric</option>
        </select>
    </dd>
    
</dl>

<dl>
    <dt><label for="year">Year</label></dt>
    <dd>
        <select name="year">
            <option value="2012" selected="selected">2012</option>
            <option value="2011" >2011</option>
            <option value="2010" >2010</option>
            <option value="2009" >2009</option>
            <option value="2008" >2008</option>
        </select>
    </dd>
    
    <dt class="required"><label for="make">Make</label></dt>
    <dd><input type="text" name="make" /></dd>
    
    <dt class="required"><label for="model">Model</label></dt>
    <dd><input type="text" name="model" /></dd>
    
    <dt><label for="trim">Trim</label></dt>
    <dd><input type="text" name="trim" /></dd>
    
    <dt><label for="color">Color</label></dt>
    <dd><input type="text" name="color" /></dd>
    
    <dt><label for="mileage">Mileage</label></dt>
    <dd><input type="text" name="mileage" /></dd>
</dl>
</fieldset>
<p>
    <button type="submit">Add to Inventory</button>
</p>
</form>




        
         <div style="width: 565px; padding-top: 20px; overflow:hidden;">
        <!-- BEGIN : Web Standards-Compliant Flash  --><!-- End : Web Standards-Compliant Flash  -->
        </div>
    </div>
    </div>
  <!-- BEGIN: FOOTER -->
  <?php include("../global/includes/footer_data/footer.htm"); ?>
  <!-- END: FOOTER -->
</div>

</body>
</html>
