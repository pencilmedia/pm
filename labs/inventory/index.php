<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>
<?php include("global/includes/dbconnect.inc.php"); ?>
<?php 
	//Error Reporting
	error_reporting(E_ALL ^ E_NOTICE);
	ini_set('display_errors','1');
?>
<?php // Delete inventory item 
	if (isset($_GET['deleteid'])) {
		echo 'Do you really want to delete product ID '. $_GET['deleteid'] .'? <a href="index.php?yesdelete='. $_GET['deleteid'] .'">Yes</a> | <a href="index.php">No</a>';
		exit();
	}
	if (isset($_GET['yesdelete'])) {
		$id_to_delete = $_GET['yesdelete'];
		
		$sql = mysql_query("SELECT * FROM inventory WHERE id='$id_to_delete'"); // Uncomment when you want to see the filename instead of immediately delete
		$productCount = mysql_num_rows($sql); // count the output amount
		while($row = mysql_fetch_array($sql)){
			$delete_imgs = $row["Img1"];
			$delete_piece = explode(" ", $delete_imgs); // Creates the Img1 filenames array 
			$delete_filename = str_replace(',', '', $delete_piece); // Strip the comma separated filenames from the DB
		} // end of if productCount > 0
			
		
		foreach ($delete_filename as $file2delete) { // Create an img tag and the filename for each value in the DB
			$picstodelete = ("/home/content/r/a/l/ralphagarcia/html/labs/inventory/uploads/$file2delete"); // Delete imgs from DB
			//echo "<p>".$picstodelete."</p>"; Uncomment this line to see which images will be deleted in browser
			if (file_exists($picstodelete)) {
				unlink($picstodelete);
			}
		}
						
	// Delete DB row record
		$sql = mysql_query("DELETE FROM inventory WHERE id='$id_to_delete' ") or die(mysql_error()); // Delete item from DB
		
	}
?>
          
<!DOCTYPE html>
<html>
<head>
<title><?php echo inventoryTitle ?></title>
<?php include("global/includes/head.inc"); ?>
<style>
	@import url("global/css/scroller.css");
</style>
<!-- Smooth Scroll http://www.smoothdivscroll.com/ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
<script src="global/js/jquery/jquery.ui.widget.js"></script>
<script src="global/js/jquery/smoothDivScroll.js"></script>
<script>
       $(document).ready(
	   	function() {
			$(".smallScroller").hover(
			  function () {
				$(this).attr('id', 'scroll');
				startScroll();
			  }, 
			  function () {
				$(this).removeAttr('id','scroll');
			  }
			);	
		}
	   );
	   
function startScroll() {
		$("#scroll").smoothDivScroll({ 
			autoScroll: "onstart" , 
			autoScrollDirection: "endlessloopright",
			autoScrollInterval: 30,	
			//startAtElementId: "startAtMe", 
			visibleHotSpots: "always"
		});
	};
</script>
<style>
/* Override styles to create a small scroller */
.smallScroller {
	position: relative;
	width: 300px;
	height:200px;
}
.smallScroller img {
	height: 225px;
}
</style>
<!-- End Smooth Scroll -->
</head>
<body id="auto_inventory" class="inventory_listings">
<div id="mainContainer" class="clearfix">
  <!-- BEGIN: HEADER & NAVIGATION -->
  <?php include("global/includes/header.htm"); ?>
  <!-- END: HEADER & NAVIGATION -->
  <div id="mainContent" class="clearfix">
    <!-- BEGIN: LEFT FRAME -->
 	
    <!-- END: LEFT FRAME -->
    <div id="rightContent">
 		<?php 
            //Grab entire list for viewing
            $sql = mysql_query("SELECT * FROM inventory ORDER BY ID DESC"); // Order results newest to oldest
            $productCount = mysql_num_rows($sql); // count the output amount
			include("toolbar.inc.php"); 
		?>
        <h2>SFPCU Pre-Owned Inventory</h2>
    	<h3>Inventory Listings</h3>
        <div id="inventory_listings">
        <?php 
             
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
									
					// let's print the international format for the en_US locale
					// setlocale(LC_MONETARY, 'en_US'); This line places USD in front
					// $priceusd = money_format('%i', $price) . "\n"; This line will format in the US currency format
					$priceusd =  number_format($price); // This line formats numbers in english format
                    
					
                    echo "
                        <div class='item'>
                        <h3><a href='view.php?pid=$id'>$year $make $model $trim</a></h3>
                        <em class='itemimg' title='Click and Hold mouse down to speed up the scrolling.'>";
						
					if (!empty($img1)) {
						// photo thumbnail scroller
						echo "<div class='smallScroller'>
							<div class='scrollingHotSpotLeft'></div>
							<div class='scrollingHotSpotRight'></div>
							<div class='scrollWrapper'>
							<div class='scrollableArea' style='width: 1680px;'>";
							
						foreach ($imgfilename as $eachimg) { // Create an img tag and the filename for each value in the DB
							echo "<img src='http://www.pencilmedia.com/labs/inventory/uploads/$eachimg' />";
						}
						
						// end photo thumbnail scroller
						echo "</div></div></div>";
						// Give the number of photos
						$count = count($imgfilename); // count the number of imgs	
						echo "<em class='photo_count'>" . $count . " photo(s)</em>";
						
					} else {
						echo "<img src='http://www.pencilmedia.com/labs/inventory/global/media/img/no_photos.png' />";
					}
						
					
					echo "</em><span>
						<b>$$priceusd</b>
						$engine, $transmission, $color &dash; $mileage Miles<br />
						VIN: $vin &dash; Stock No. $id<br />
                        <em>Added $date_added</em><br />
                        <span class='inventory_tools'><a href='view.php?pid=$id'>View</a> &bull; <a href='edit.php?pid=$id'>Edit</a> &bull; <a href='index.php?deleteid=$id'>Delete</a></span>
                        </span></div>";

						
                        
                } // end of if productCount > 0
                
            } else {
                // If the database is empty there is no inventory
                echo "<p>There is currently no cars in the inventory.</p>";	
            }
        ?>
        </div>
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
