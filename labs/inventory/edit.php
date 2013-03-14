<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>
<?php include("global/includes/dbconnect.inc.php"); ?>
<?php
	// Parse the form data and UPDATE inventory item
	if (isset($_POST['make'])){
		$pid = mysql_real_escape_string($_POST['thisID']);
		$price = mysql_real_escape_string($_POST['price']);
		$year = mysql_real_escape_string($_POST['year']);
		$make = mysql_real_escape_string($_POST['make']);
		$model = mysql_real_escape_string($_POST['model']);
		$trim = mysql_real_escape_string($_POST['trim']);
		$engine = mysql_real_escape_string($_POST['engine']);
		$transmission = mysql_real_escape_string($_POST['transmission']);
		$color = mysql_real_escape_string($_POST['color']);
		$mileage = mysql_real_escape_string($_POST['mileage']);
		$vin = mysql_real_escape_string($_POST['vin']);
		
		$cleanprice = preg_replace('/[\$,]/', '', $price); // This line strips any commas or dollar signs entered in the field
		$cleanmileage = preg_replace('/[\$,]/', '', $mileage); // This line strips any commas or dollar signs entered in the field

			
		// See if that car is an identical match to another car
		$sql = mysql_query("UPDATE inventory SET price='$cleanprice',year='$year',make='$make',model='$model',trim='$trim',engine='$engine',transmission='$transmission',engine='$engine',color='$color',mileage='$cleanmileage' WHERE id='$pid'");
		
		// UPLOADING PHOTOS
		
		// define a constant for the maximum upload size
		define ('MAX_FILE_SIZE', 512000); // KB to MB - MAX UPLOAD = 500 MB
		
		if (array_key_exists('upload', $_POST)) {
		  // define constant for upload folder
		  define('UPLOAD_DIR', '/home/content/r/a/l/ralphagarcia/html/labs/inventory/uploads/');
		  // convert the maximum size to KB
		  $max = number_format(MAX_FILE_SIZE/1024, 1).'KB';
		  // create an array of permitted MIME types
		  $permitted = array('image/gif', 'image/jpeg', 'image/jpg', 'image/pjpeg', 'image/png');
		  
		  foreach ($_FILES['image']['name'] as $number => $file) {
			// replace any spaces in the filename with underscores
			$file = str_replace(' ', '_', $file);
			// begin by assuming the file is unacceptable
			$sizeOK = false;
			$typeOK = false;
		  
			// check that file is within the permitted size
			if ($_FILES['image']['size'][$number] > 0 || $_FILES['image']['size'][$number] <= MAX_FILE_SIZE) {
			$sizeOK = true;
			}
		
			// check that file is of an permitted MIME type
			foreach ($permitted as $type) {
			  if ($type == $_FILES['image']['type'][$number]) {
				$typeOK = true;
				break;
				}
			  }
		  
			if ($sizeOK && $typeOK) {
		
			  $uploadedimg = $pid.$file; // $pid adds id number to the image
			  
			  switch($_FILES['image']['error'][$number]) {
				case 0:
				  // check if a file of the same name has been uploaded
				  if (!file_exists(UPLOAD_DIR.$file)) {
					// move the file to the upload folder and rename it
					$success = move_uploaded_file($_FILES['image']['tmp_name'][$number], UPLOAD_DIR.$uploadedimg);
					}
				  else {
					// get the date and time
					ini_set('date.timezone', 'Europe/London');
					$now = date('Y-m-d-His');
					$success = move_uploaded_file($_FILES['image']['tmp_name'][$number], UPLOAD_DIR.$now.$uploadedimg);
					}
				  if ($success) {
					$result[] = "$uploadedimg";
					}
				  else {
					$result[] = "Error uploading $file. Please try again.";
					}
				  break;
				case 3:
				  $result[] = "Error uploading $file. Please try again.";
				default:
				  $result[] = "System error uploading $file. Contact webmaster.";
				}
			  }
			elseif ($_FILES['image']['error'][$number] == 4) {
			  $result[] = 'No file selected';
			  }
			else {
			  $result[] = "$file cannot be uploaded. Maximum size: $max. Acceptable file types: gif, jpg, png.";
			  }
			}
		  }
				
		// UPLOAD  PHOTOS
		if ($_FILES['image']['size'][$number] > 0) {
			
			if (isset($result)) {// if the form has been submitted, display result
				$resultArray = implode(', ', $result); // Add a comma between each filename
				//$sql = mysql_query("UPDATE inventory SET Img1 = '$resultArray' WHERE id = $pid") or die(mysql_error());	// Add Each IMAGE into the DB now
				$sql = mysql_query("UPDATE inventory SET Img1 = CONCAT( Img1, ', ', '$resultArray') WHERE id = $pid") or die(mysql_error());	// Add Each IMAGE into the DB now
			}
			
		}
	 
	
		header("location: view.php?pid=$pid");
		exit();
		
	}
?>
<?php  // Edit inventory item : Gather this car's full info and populate the fields with their respective values
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
<script src="js/validation.js"></script>
</head>
<body id="auto_inventory" class="edit_details">

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
    <h3>Edit Details</h3>
	<h3 style='font-size: 24px;color: #900;margin: 1em 0 0 0;'><?php echo $year . ' ' . $make . ' ' . $model; ?></h3>
<form enctype="multipart/form-data" method="post" id="inventoryform" name="contactForm" action="edit.php">
<fieldset>
<legend>Add Inventory</legend>
<dl>
    <dt class="required"><label for="price">Price</label></dt>
    <dd><input type="text" name="price" id="price" value="<?php echo $price; ?>" /></dd>
    
    <dt class="required"><label for="stock">Stock No.</label></dt>
    <dd><input type="text" name="stock" id="stocknum" value="<?php echo $id; ?>" readonly="readonly" disabled /></dd>
    
    <dt class="required"><label for="vin">VIN</label></dt>
    <dd><input type="text" name="vin" value="<?php echo $vin; ?>" /></dd>
    
    <dt><label for="image">Upload a Photo</label></dt>
    <dd>
		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
        <input type="file" name="image[]" id="image1" multiple="multiple" />
    	<!--
        <input type="file" name="image[]" id="image2" />
        <input type="file" name="image[]" id="image3" />-->
        <span id="uploadInfo" style="display: block; color: #CD3D20; padding-top: 5px;">Only <strong>.jpg, .png, .gif, .pdf, and .doc</strong> allowed</span>
    </dd>
    
    <dt><label for="engine">Engine</label></dt>
    <dd>
        <select name="engine">
            <option value="<?php echo $engine; ?>" selected><?php echo $engine; ?></option>
            <option disabled="disabled">---------</option>
            <option value="4-Cylinder">4-Cylinder</option>
            <option value="6-Cylinder">6-Cylinder</option>
            <option value="8-Cylinder">8-Cylinder</option>
            <option value="Hybrid">Hybrid</option>
            <option value="Electric">Electric</option>
        </select>
    </dd>
    
    <dt><label for="transmission">Transmission</label></dt>
    <dd>
        <select name="transmission">
            <option value="<?php echo $transmission; ?>" selected><?php echo $transmission; ?></option>
            <option disabled="disabled">---------</option>
            <option value="Automatic">Automatic</option>
            <option value="5-Speed Manual">5-Speed Manual</option>
            <option value="6-Speed Manual">6-Speed Manual</option>            
        </select>
    </dd>
    
</dl>

<dl>
    <dt><label for="year">Year</label></dt>
    <dd>
        <select name="year">
            <option value="<?php echo $year; ?>" selected><?php echo $year; ?></option>
            <option disabled="disabled">---------</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
        </select>
    </dd>
    
    <dt class="required"><label for="make">Make</label></dt>
    <dd><input type="text" name="make" id="make" value="<?php echo $make; ?>" /><span id="makeInfo">&nbsp;</span></dd>
    
    <dt class="required"><label for="model">Model</label></dt>
    <dd><input type="text" name="model" id="model" value="<?php echo $model; ?>" /><span id="modelInfo">&nbsp;</span></dd>
    
    <dt><label for="trim">Trim</label></dt>
    <dd><input type="text" name="trim" value="<?php echo $trim; ?>" /></dd>
    
    <dt><label for="color">Color</label></dt>
    <dd><input type="text" name="color" value="<?php echo $color; ?>" /></dd>
    
    <dt><label for="mileage">Mileage</label></dt>
    <dd><input type="text" name="mileage" value="<?php echo $mileage; ?>" /></dd>
</dl>
</fieldset>
<p style="padding-left:2em;">
	<input name="thisID" type="hidden" value="<?php echo $targetID; ?>" />
    <button type="submit" name="upload" id="upload">Save</button>
    <button type="button" name="cancel" id="cancel" onclick="location.href='view.php?pid=<?php echo $id ?>'">Cancel</button> <!-- Takes you back to the view page you came from -->
</p>
</form>



        
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
