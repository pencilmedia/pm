<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="global/css/default.css" />
    <link rel="stylesheet" type="text/css" href="create_new_activities.php.css" />
    <script type="text/javascript" src="global/js/jquery/jquery.js"></script>

    <script type="text/javascript" src="global/js/jquery/plugins/jquery.colors.js"></script>
    <script type="text/javascript" src="global/js/action_dialogs_common.js"></script>
    <script type="text/javascript" src="global/js/multi_counter_expander.js"></script>
	<title>Define Routing Specifications</title>
</head>
<body class="action_dialog">
	<div id="wrapper_action_dialog_header" class="header">
        <!--************************************
            HEADER
        *************************************-->	
        <div class="header_wrapper">
            <div class="column_one">
                <h2>Define Routing Specifications</h2>
                <p>CTO &bull; CTO00021</p>
            </div>		
        </div>
        <!--************************************
            MESSAGES
        *************************************-->
        <div id="page_message" class="message info">
            <p>Specify what content to send, in what format, and where to send it.</p>
        </div>
	</div>

	<div id="wrapper_action_dialog_content" class="content">
		<form id="form1" name="form1" action="#">
        <fieldset class="dynamic">
            <dl class="side_by_side_mixed with_bottom_margin">

                <!-- Required Select -->
                <dt class="required"><label for="req_sel_00">Type:</label></dt>
                <dd>
                    <select id="req_sel_00" class="long_width">
						<option>Development</option>
						<option>Production</option>
						<option>Training</option>
                    </select>
                    <span class="error_msg hidden">Error message...</span>
                </dd>
                

                <!-- MULTI SELECT LIST -->
                <dt class="required"><label for="msl_00">Filters:</label></dt>
                <dd>
                    <div class="list_control multi_list long_width">
                        <input type="text" id="msl_00" autocomplete="off" />
                        <div class="auto_complete_results"></div>
                        <div class="pill_container" tabindex="-1">
                            <ul id="pillbox_00"></ul>
                      	</div>
                    </div>
                    <a href="#" id="cmd_msl_00" class="button"><span><em class="view_details">&nbsp;</em>&nbsp;</span></a>
                </dd>                

                <!-- Select -->
                <dt><label for="req_sel_02">Output Format:</label></dt>
                <dd>
                    <select id="req_sel_02" class="medium_width">
						<option>aXML</option>
						<option>PDX</option>
                    </select>
                    <span class="error_msg hidden">Error message...</span>
                </dd>

                <!-- Select -->
                <dt><label for="req_sel_03">Site:</label></dt>
                <dd>
                    <select id="req_sel_03" class="medium_width">
						<option value="all" selected="selected">All</option>
						<option value="Austin">Austin</option>
						<option value="Boston">Boston</option>
						<option value="Milwaukee">Milwaukee</option>
						<option value="Minneapolis">Minneapolis</option>
						<option value="Nagoya">Nagoya</option>
						<option value="Sacramento">Sacramento</option>
						<option value="Saratoga">Saratoga</option>
						<option value="Stuttgart">Stuttgart</option>
						<option value="Taipei">Taipei</option>
						<option value="Xiamen">Xiamen</option>
                    </select>
                    <span class="error_msg hidden">Error message...</span>
                </dd>


                <!-- Select -->
                <dt><label for="req_sel_04">Language:</label></dt>
                <dd>
                    <select id="req_sel_04" class="medium_width">
						<option value="English" selected="selected">English</option>
						<option value="French">French</option>
						<option value="German">German</option>
						<option value="Japanese">Japanese</option>
						<option value="Simplified Chinese">Simplified Chinese</option>
						<option value="Traditional Chinese">Traditional Chinese</option>
                    </select>
                    <span class="error_msg hidden">Error message...</span>
                </dd>


            </dl>
        </fieldset>
		</form>
	</div>
<!--************************************
	FOOTER
*************************************-->    
<div id="wrapper_action_dialog_footer" class="footer">
    <div class="column_three">
        <a href="#" id="cmdSend" class="button"><span><em class="save_dialog">&nbsp;</em>Save</span></a> 
        <a href="#" id="cmdCancel" class="button"><span><em class="cancel">&nbsp;</em>Cancel</span></a>
    </div>
</div>
</body>
</html>
