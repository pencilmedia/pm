<?
	include_once($_SERVER['DOCUMENT_ROOT'] . "/prototype/html/beta/content/main/defs.php");
	include_once($_SERVER['DOCUMENT_ROOT'] . "/prototype/html/beta/content/main/strings.php"); 
	
	//Defines specific strings for use in page header and sub-header (if applicable).  
	//Text is defined in strings.php (defined above)
	$header_text_0 = $strings['str44'];
	$header_text_1 = $strings['str46'];
	$status_text = "There are <em>7 DOCUMENTS</em> with changes that require your approval.";
?>

<!-- BEGIN MAIN CONTENT here -->

<div id="docs" class="appr_chng" dojoType="LayoutContainer" layoutChildPriority='top-bottom' style="height: 100%; width: 100%">

	<div dojoType="ContentPane" sizeShare="0" layoutAlign="top" style="height: 2px;"></div>
	
	<div dojoType="ContentPane" sizeShare="0" layoutAlign="top" style="height: 65px;width: 100%;" class="header_wrap">
		<? include_once($GEN_PATH . "/mod_header.php"); ?>
	</div>
		
		<div dojoType="SplitContainer" orientation="vertical" sizerWidth="5" activeSizing="0" layoutAlign="client">
		
			<div dojoType="LayoutContainer" layoutChildPriority='top-bottom' sizeShare="5" sizeMin="85" layoutAlign="client" style="height: 85px; width: 100%;">
			
				<div dojoType="ContentPane" layoutAlign="top" sizeShare="0" style="height: 33px; width: 100%">
					<? include_once($GEN_PATH . "/mod_status_text.php"); ?>
				</div>
				
				<div dojoType="LayoutContainer" sizeShare="0" sizeMin="45" layoutAlign="top" style="height: 45px; width: 100%;">
					<? include_once($DOC_PATH . "/appr_chng/mod_doc_appr_chng_table_one_select.php"); ?>
				</div>
			
			</div>
		
			<div dojoType="ContentPane" sizeShare="100" sizeMin="350" style="height: 100%; width: 100%;">
				<? include_once($DOC_PATH . "/appr_chng/mod_doc_appr_chng_details_expanded.php"); ?>
			</div>
		
		</div>

	<div class="action btn_reg" dojoType="ContentPane" layoutAlign="bottom" style="height: 31px; width: 100%;">
	
		<p class="left"><a href="#" class="check" onclick="var docPane = dojo.widget.getWidgetById('main'); docPane.setUrl('./content/main/docs/appr_chng/screen_doc_appr_chng_06.php');"><em></em>View Document</a><a href="#" class="check" onclick=""><em></em>View Change</a></p>
	
		<p class="right"><a href="#" class="check" onclick="var docPane = dojo.widget.getWidgetById('main'); docPane.setUrl('./content/main/docs/appr_chng/screen_doc_appr_chng_04.php');"><em></em>Approve Revision</a><a href="#" class="remove" onclick=""><em></em>Reject Revision</a></p>
		
	</div>

</div>

<!-- END MAIN CONTENT here -->

<script type="text/javascript">
	attachRowEvents();
	attachTextEditEvents();
</script>
