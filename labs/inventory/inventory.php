<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>
          
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo inquiryTitle ?></title>
<?php include("global/includes/head.inc"); ?>
<script src="js/validation.js"></script>
<style>



</style>

</head>
<body id="auto_inventory">

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
    

<form enctype="multipart/form-data" method="post" id="inventoryform" name="contactForm" action="sent.php">
<fieldset>
<legend>Add Inventory</legend>
<dl>
    <dt class="required"><label for="price">Price</label></dt>
    <dd><input type="text" name="price" id="price" /><span id="priceInfo">&nbsp;</span></dd>
    
    <dt class="required"><label for="stock">Stock No.</label></dt>
    <dd><input type="text" name="stock" id="stocknum" /><span id="stockInfo">&nbsp;</span></dd>
    
    <dt class="required"><label for="vin">VIN</label></dt>
    <dd><input type="text" name="vin" /></dd>
    
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
            <option value="4-Cylinder" selected="selected">4-Cylinder</option>
            <option value="6-Cylinder">6-Cylinder</option>
            <option value="8-Cylinder">8-Cylinder</option>
            <option value="Hybrid">Hybrid</option>
            <option value="Electric">Electric</option>
        </select>
    </dd>
    
    <dt><label for="transmission">Transmission</label></dt>
    <dd>
        <select name="transmission">
            <option value="Automatic" selected="selected">Automatic</option>
            <option value="5-Speed Manual">5-Speed Manual</option>
            <option value="6-Speed Manual">6-Speed Manual</option>
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
    <dd><input type="text" name="make" id="make" /><span id="makeInfo">&nbsp;</span></dd>
    
    <dt class="required"><label for="model">Model</label></dt>
    <dd><input type="text" name="model" id="model" /><span id="modelInfo">&nbsp;</span></dd>
    
    <dt><label for="trim">Trim</label></dt>
    <dd><input type="text" name="trim" /></dd>
    
    <dt><label for="color">Color</label></dt>
    <dd><input type="text" name="color" /></dd>
    
    <dt><label for="mileage">Mileage</label></dt>
    <dd><input type="text" name="mileage" /></dd>
</dl>
</fieldset>
<p style="padding-left:2em;">
    <button type="submit" name="upload" id="upload">Add to Inventory</button>
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
