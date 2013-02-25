<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>
<?php $thisPage="page3"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo homeTitle ?></title>
<?php include("global/includes/head/head_autosuggest.inc"); ?>
</head>
<body>
<div class="ui-layout-north">
  <?php include("global/includes/nav/nav_teir1.inc"); ?>
</div>
<div class="ui-layout-center">
  <div id="content">
	<p id="logout"><a href="http://www.trigeminalsolutions.com/demo/index.php?logout=1" class="button"><span>Logout</span></a></p>
    <h2>Lunch</h2>
      <fieldset class="sectOne">
        <legend>Did you have lunch today? 
        <label for="eat_lunch_y"><input type="radio" id="eat_lunch_y" name="lunch_today" value="yes" checked="checked" onclick="javascript:$('#meals').show(); $('.first_field').focus();" />Yes</label>&nbsp;<label for="eat_lunch_n"><input type="radio" id="eat_lunch_n" name="lunch_today" value="no" onclick="javascript:$('#meals').hide();" />No</label>
        </legend>
          <div id="meals" class="sectTwo colonnade">
          <div class="lt_column">
            <h3>Past Meals</h3>
            <div id="previousMeals" class="box shuttle">
                <ul>
                	<li><a href="#">Turkey Sandwich</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Omlette</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Tuna Sandwich</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Pizza</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Soda</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Donuts</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Coffee</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Candy</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Nuts</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Sausage</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Hot Links</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Hot Dog</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Mints</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Cottage Cheese</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Sourdough Bread</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Eggs</a><em class="expand">More<span>&nbsp;</span></em></li>
                	<li><a href="#">Pancakes</a><em class="expand">More<span>&nbsp;</span></em></li>
                </ul>
             </div>
             <div class="shuttle_btns left">
             	<a href="#" id="all1" class="button"><span>Select All</span></a>
             	<a href="#" id="add" class="button"><span>Enter<em class="next">&nbsp;</em></span></a>
			</div>
          </div>
            <div class="mid_column">
                <h3>Enter Food Item</h3>
                <div class="entry">
                	<input id="searchField" class="first_field" name="searchField" type="text" autocomplete="off" onfocus="javascript:jQuery(this).select();" />
                	<a href="#" id="enter" class="button"><span>Enter<em class="next">&nbsp;</em></span></a>
                </div>
                <h3>Suggestions</h3>
                <div class="box" id="results">
                </div>
            </div>
            <div class="rt_column">
                <h3>Today's Meals</h3>
                <div id="todaysMeals" class="box shuttle">
                	<ul></ul>
                </div>
             <div class="shuttle_btns right">
             	<a href="#" id="remove" class="button"><span><em class="back">&nbsp;</em>Remove</span></a>
                <a href="#" id="all2" class="button"><span>Select All</span></a>
             </div>
            </div>
        </div>
      </fieldset>
  </div>
</div>
<div class="ui-layout-south">
  <?php include("global/includes/foot/foot.inc"); ?>
</div>
</body>
</html>
