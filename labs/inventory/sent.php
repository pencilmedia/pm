<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>
<?php include("global/includes/dbconnect.inc.php"); ?>
<?php 
//Error Reporting
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors','1');
?>     
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
<body id="auto_inventory" class="added_inventory">
<div id="mainContainer" class="clearfix">
  <!-- BEGIN: HEADER & NAVIGATION -->
  <?php include("global/includes/header.htm"); ?>
  <!-- END: HEADER & NAVIGATION -->
  <div id="mainContent" class="clearfix">
    <!-- BEGIN: LEFT FRAME -->
 	<?php include("global/includes/left_frame.htm"); ?>
    <!-- END: LEFT FRAME -->
    <div id="rightContent">
 	<?php 
		//Grab entire list for viewing
		$sql = mysql_query("SELECT * FROM inventory"); // Order results newest to oldest
		$productCount = mysql_num_rows($sql); // count the output amount
		include("toolbar.inc.php"); 
	?>
     <h2>SFPCU Pre-Owned Inventory</h2>
     <div style="border:1px solid #e9e9e9;background-color:#FFC;margin-top:1em;padding:1em;font-size:.8em;">This car has been added to your inventory</div>
<?php
	// Parse the form data and add inventory item to the system
	if (isset($_POST['make'])){
		$id = mysql_real_escape_string($_POST['stock']);
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
			
		// See if that car is an identical match to another car
		$sql = mysql_query("SELECT ID FROM inventory WHERE ID='$id' LIMIT 1");
		$productMatch = mysql_num_rows($sql); // count the output amount
		
		
		$cleanprice = preg_replace('/[\$,]/', '', $price); // This line strips any commas or dollar signs entered in the field
		$cleanmileage = preg_replace('/[\$,]/', '', $mileage); // This line strips any commas or dollar signs entered in the field
		
		//Check if the file with the same name is already exists on the server
		if ($productMatch > 0) {
			$status .= '<h4 style=\'margin-top: 20px\'><span style=\'color: #903\'>Attention:</span> Duplicate Stock Number</h4>';
			$status .= '<p>You entered a duplicate stock number. Click on the return to form link below and enter a new stock number. Thank you.</p>';
			$status .= '<p><a href=javascript:history.back()>Return to Form</a></p>';
		die($status);
		}
		
	// Add this product into the DB now
		$sql = mysql_query("INSERT INTO inventory (ID, Price, Year, Make, Model, Trim, Engine, Transmission, Color, Mileage, VIN, date_added) VALUES ('$id','$cleanprice','$year','$make','$model','$trim','$engine','$transmission','$color','$cleanmileage','$vin',now())") or die(mysql_error());
		$pid = mysql_insert_id();
		
	}
?>
<?php 
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
	
		  $uploadedimg = $id.$file; // $id adds id number to the image
		  
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
	  
	// Preview Results
	
	// let's print the international format for the en_US locale
	// setlocale(LC_MONETARY, 'en_US'); This line places USD in front
	// $priceusd = money_format('%i', $price) . "\n"; This line will format in the US currency format
	$priceusd =  number_format($cleanprice); // This line formats numbers in english format
			
	echo "<h3 style='font-size: 24px;color: #900;margin: 1em 0 0 0;'>$year $make $model - $$priceusd</h3>"; // Display Title and Price
	
	if ($_FILES['image']['size'][$number] > 0) {
		
		if (isset($result)) {// if the form has been submitted, display result
			$resultArray = implode(', ', $result); // Add a comma between each filename
			$sql = mysql_query("UPDATE inventory SET Img1 = '$resultArray' WHERE id = $id") or die(mysql_error());	// Add Each IMAGE into the DB now
	
	
			// Get the file size TRY:round( $_FILES['uploaded_file']["size"] / 1048576 * 100) / 100 . "MB"; 
			/*$imgsize = $_FILES['image']['size'];
			foreach ($imgsize as $filesize) {
				$photosize = $filesize;
			}*/
			
			echo "<div class='photo_uploaded'><h3>Photos for $year $make $model</h3><ul id='pikame' class='jcarousel-skin-pika'>";
			foreach ($result as $item) {
				echo "<li><a href='uploads/$item' target='_blank'><img src='http://www.pencilmedia.com/labs/inventory/uploads/$item' /></a><span>$item</span></li>";
			}
			echo "</ul></div>";
		}
	} else { 
		// Do nothing. No images uploaded.
		echo "<p>&nbsp;</p>";
	}
	
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
			"<dt><label>Mileage</label></dt><dd>" . $cleanmileage .  "</dd>" . 
			"<dt><label>Vin No.</label></dt><dd>" . $vin .  "</dd>" .
			"<dt><label>Stock No.</label></dt><dd>" . $id .  "</dd>" .
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
