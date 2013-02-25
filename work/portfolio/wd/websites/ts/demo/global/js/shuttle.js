jQuery(document).ready(function() {
								
// Disable Browser Default 'Shift, Ctrl, Alt' Keys 
	$('.shuttle a').click(function (e) {
		if (e.shiftKey==1 || e.ctrlKey==1 || e.altKey==1) {
			//alert(e.keyCode);
			//alert("The shift key was pressed!");
			e.preventDefault();
			return false;
		}
	});

	$('.sectTwo').css('display','block');
	shuttle.openMore(); // enable the open moreInfo button for all ways of entering a new item
	shuttle.initControls(); // enable all controls
});

var shuttle = {};

shuttle.initControls = function() {
// Load Up Shuttle Control
	shuttle.markIt();
	shuttle.moveIt();
	shuttle.moveBtns();
	shuttle.enterBtn();
	shuttle.enableBtns();
}

shuttle.markIt = function()
{
// Highlight: Mark Items to be moved
	$('#previousMeals li').live("click", function(){	
		if( $(this).is('.marked') ){ 
			return;
		} else {
			$(this).toggleClass('selected');
			return false;
		}
	});
	$('#todaysMeals li').live("click", function(){	
		if( $(this).is('.infoOpen') ){
			return;
		} else {
			$(this).toggleClass('selected');
			return false;
		}
	});
}

shuttle.moveIt = function()
{		
// Tranfer: Move Items By Double Clicking
    $("#previousMeals li").live("dblclick", function(){	
		// stop from cloning if already dblmarked else clone it
		if( $(this).is('.marked') ){ 
			return;
		} else {
			$(this).clone().prependTo('#todaysMeals ul').removeClass('selected');
			$(this).addClass('marked');
			$('#previousMeals .selected').removeClass('selected');
		}
    });
}


shuttle.moveBtns = function()
{
// Select / Deselect All Button (For All1 Button)
	var Toggled=false;// set variable
	$('#all1').click( function() {
		if(Toggled==false){ 
			$('#all1 span').html('Deselect All');
			if( $("#previousMeals .selected") ){ // Quickly remove selected class so it doesn't toggle incorrectly
				$("#previousMeals .selected").removeClass('selected');
			}
			$("#previousMeals li").addClass('selected');
			Toggled=true;
		} else { 
			$('#all1 span').html('Select All');
			if( $("#previousMeals .marked") ){ // check to see if it is already .marked, if so don't add select class to prevent from moving to todaysMeals box
				$("#previousMeals .marked").removeClass('selected');
			} 
			$("#previousMeals li").removeClass('selected');
			Toggled=false;
		}
		
	});
	
// Select / Deselect All Button (For All2 Button)
	var Toggled=false;// set variable
	$('#all2').click( function() {
		if(Toggled==false) { 
			$('#all2 span').html('Deselect All');
			// Quickly remove selected class so it doesn't toggle incorrectly
			if( $("#todaysMeals .selected") ){ 
				$("#todaysMeals .selected").removeClass('selected');
			}
			Toggled=true;
			$("#todaysMeals li").addClass('selected');
		} else { 
			$('#all2 span').html('Select All');
			$("#todaysMeals li").removeClass('selected');
			Toggled=false; 
		}
	});

// Move Items By Clicking The ADD Button
    $("#add").live("click", function(){
		// stop from cloning if already dblmarked else clone it
		if( $(this).is('.marked') ){ 
			return;
		} else {
			$('#previousMeals .selected').clone().prependTo('#todaysMeals ul').removeClass('selected');
			$('#previousMeals .selected').addClass('marked');
			$('#previousMeals .selected').removeClass('selected');
			$('#all1 span').html('Select All');Toggled=false; //Reset the select/deselect button to default state
		}
    });
	
// Remove Items By Clicking The REMOVE Button
    $("#remove").live("click", function(){
		$('#previousMeals').each(function(){ // Check to see if the values in todays meals are the same in past meals
			$('#todaysMeals').find('li.selected').each(function(){ // LOOP through prev meals li
				todayElem = $(this).text(); //get text value of each prev meals li
				$('#previousMeals').find('li.marked').each( //loop through todays meals li to find .selected
					function(){
						prevElem = $(this).text(); //if li.selected get it's text value
						if(prevElem == todayElem) { // if the text value of today's meal li matches previous meals li then remove class marked
							$(this).removeClass('marked');	
						}
				});
			});
			return false;
		});				
		$('#todaysMeals .selected').remove(); // REMOVE today's meal selected item		
		$('#all2 span').html('Select All');Toggled=false; // Reset the select/deselect button to default state
    });
}

// Move Items From The Entry Field
shuttle.EnterIt = function()
{
	var eValue = $("#searchField").val();
	var eItem = "<li><a href=\"#\" class=\"entryItem\">"+eValue+"</a><em class=\"expand\">More<span>&nbsp;</span></em></li>";
	
	if(eValue == "") {
		return false;//don't add an item
	} else {
		$('#todaysMeals ul').prepend(eItem);
		//shuttle.markIt();
		shuttle.moveIt();
	}
	
}

// Move Items By clicking Enter Button
shuttle.enterBtn = function()
{
    $('#enter').bind("click", function(){
		shuttle.EnterIt();
		acSearchField.val(""); //following 3 located in autosuggest.js
		clearAutoComplete();
		jQuery(".first_field").focus();
		return;
    });
}

// Disable Shuttle Control Button Actions
shuttle.disableBtns = function()
{	

	// Make Previous Meals Box Look Disabled
	$('#previousMeals li').addClass("disabled");
		
	// Disable Selecting Items
	$("#previousMeals li").die('click');
		
	// Disable Double Clicking Items
	$("#previousMeals li").die('dblclick');
	$("#todaysMeals li").die('dblclick');
		
	// Disable Entry Window
	$("#enter").addClass('disabled');
	$("#enter").unbind('click');
	$('#searchField').attr('disabled', 'disabled');
		
	// Disable Shuttle Control Buttons
	$(".shuttle_btns .button").addClass('disabled');
	$("#remove").die('click');
	$("#all2").unbind('click');
	$("#add").die('click');
	$("#all1").unbind('click');
}

shuttle.enableBtns = function()
{
	$('#previousMeals li').removeClass("disabled");
		
	// ReEnable Entry Window
	$("#enter").removeClass('disabled');
	$('#searchField').removeAttr('disabled');
		
	// ReEnable Shuttle Controls
	$(".shuttle_btns .button").removeClass('disabled');
	
}

// Setup the moreInfo toggler and change to collapse icon when marked
shuttle.openMore = function()
{
    $('#todaysMeals em.expand').live("click", function() {
													   
	var moreInfo = "<div class=\"moreInfo\"><h5>Quantity:</h5><p><input type=\"radio\" name=\"guage\" /><label for=\"guage3\">Less Than Normal</label></p><p><input type=\"radio\" name=\"guage\" checked=\"checked\" /><label for=\"gauge2\">Normal Amount</label></p><p><input type=\"radio\" name=\"guage\" /><label for=\"guage1\">More Than Normal</label></p>"
					+ "<p>&nbsp;</p>"
					+ "<h5>Ingredients:</h5><p>Ingredient 1</p><p>Ingredient 2</p><p>Ingredient 3</p>"
					+ "</div>";
					
		shuttle.disableBtns();
		$(this).removeClass('expand');
		$(this).html('Less<span>&nbsp;</span>');
		$(this).addClass('collapse');
		$(this).parent().addClass('infoOpen selected');
		$(this).after(moreInfo);
		shuttle.closeMore();
    });
}


// Setup the collapse moreInfo toggler and change to expand icon when marked
shuttle.closeMore = function()
{
    $("#todaysMeals em.collapse").live("click", function() {
		$(this).removeClass('collapse');
		$(this).html('More<span>&nbsp;</span>');
		$(this).addClass('expand');
		$(this).parent().removeClass('infoOpen');
		
		var next = $(this).next('.moreInfo');
		while (next.size() != 0) {
			next = $(this).next('.moreInfo');
			next.remove();
		}								 
		// Count the number of open .moreInfo divs
		elem = $("#todaysMeals ul li");
		elemCount = elem.children("div.moreInfo").length;
		if(elemCount < 1) { // no more .moreInfo divs so RE ENABLE BTNS
			shuttle.enableBtns();
		}
		shuttle.initControls();
    });
}
