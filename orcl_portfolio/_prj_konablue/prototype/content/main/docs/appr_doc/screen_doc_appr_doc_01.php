<?
	include_once($_SERVER['DOCUMENT_ROOT'] . "/prototype/html/beta/content/main/defs.php");
	include_once($_SERVER['DOCUMENT_ROOT'] . "/prototype/html/beta/content/main/strings.php"); 
	
	//Defines specific strings for use in page header and sub-header (if applicable).  
	//Text is defined in strings.php (defined above)
	$header_text_0 = $strings['str24'];
	$header_text_1 = $strings['str32'];
	$status_text = "&nbsp;";
?>


<!-- BEGIN MAIN CONTENT here -->

<div id="docs" class="appr_doc" dojoType="LayoutContainer" layoutChildPriority='top-bottom' style="width: 100%; height: 100%;">

	<div dojoType="ContentPane" sizeShare="0" layoutAlign="top" style="height: 2px;"></div>
	
	<div dojoType="ContentPane" sizeShare="0" layoutAlign="top" style="height: 65px;width: 100%;" class="header_wrap">
		<? include_once($GEN_PATH . "/mod_header.php"); ?>
	</div>
	
	<div dojoType="SplitContainer" orientation="vertical" sizerWidth="5" activeSizing="0" layoutAlign="client">
	
		<div dojoType="LayoutContainer" layoutChildPriority='top-bottom' sizeShare="40" sizeMin="200" layoutAlign="client">
			
			<div dojoType="LayoutContainer" sizeShare="100" sizeMin="175" layoutAlign="client">
				<? include_once($DOC_PATH . "/appr_doc/mod_doc_appr_doc_table_list_select.php"); ?>
			</div>
			
		</div>
		
		<div dojoType="ContentPane" sizeShare="60" sizeMin="200" style="overflow: auto;">
			<? include_once($DOC_PATH . "/appr_doc/mod_doc_appr_doc_details.php"); ?>
		</div>
		
	</div>
	
	<div class="action btn_reg" dojoType="ContentPane" layoutAlign="bottom" style="height: 31px; width: 100%;">
	
		<p class="left"><a href="#" class="check" onclick="var docPane = dojo.widget.getWidgetById('main'); docPane.setUrl('./content/main/docs/appr_doc/screen_doc_appr_doc_06.php');"><em></em>View Document</a><a href="#" class="check" onclick="var docPane = dojo.widget.getWidgetById('main'); docPane.setUrl('./content/main/docs/appr_doc/screen_doc_appr_doc_08.php');"><em></em>View Change</a></p>
	
		<p class="right"><a href="#" class="check" onclick="var docPane = dojo.widget.getWidgetById('main'); docPane.setUrl('./content/main/docs/appr_doc/screen_doc_appr_doc_04.php');"><em></em>Approve Revision</a><a href="#" class="remove" onclick=""><em></em>Reject Revision</a></p>
		
	</div>

</div>

<!-- END MAIN CONTENT here -->

<script type="text/javascript">
	attachRowEvents();
	attachTextEditEvents();
</script>