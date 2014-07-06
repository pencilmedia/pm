<div id="Header" class="header">
    <!--************************************
        HEADER
    *************************************-->
	<div class="header_wrapper">
		<div class="breadcrumb_wrapper">
	        <ul class="breadcrumbs">
	        	<li><a href="#">Breadcrumb</a> &raquo;</li>
		        <li>Breadcrumb</li>
	
			</ul>
		</div>
		<div class="column_one layout">
			<h2>Identifier</h2>
				<p><strong>Object Type</strong> &bull; Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse rutrum. Donec elit. Proin lorem elit, commodo sed.</p>
		</div>
	
		<div class="column_two">
			<h2>Status / Lifecycle</h2>
			<p>[varies by object]</p>
		</div>
	    	<div class="column_three">
				<ul class="rating">
	                <li class="traffic_red">Overall Status</li>
	                <li class="traffic_green">Schedule Status</li>
	                <li class="traffic_yellow">Cost Status</li>
	                <li class="traffic_red">Resources Status</li>
	                <li class="traffic_grey">Quality Status</li>
				</ul>
			</div>
		</div>
	
	    <!--************************************
	        OBJECT LEVEL CONTROLS
	    *************************************-->
		<div class="object_level_controls">
	        <form action="#">
	            <label>Label:</label>
	            <select name="">
	                <option value="">Values</option>
	                <option value="">selection</option>
	            </select>
	            <a href="#" class="button"><span><em class="summary">&nbsp;</em> Object Action</span></a>
	            <a href="#" class="button" onclick="getDialog('pages/_testing/new_pc_save_as.php',525,475);return false;"><span><em class="comment">&nbsp;</em> Action 2</span></a>
	            <a href="#" class="button"><span>Menu<em class="dropdown">&nbsp;</em>&nbsp;</span></a>
	        </form>
		</div>
	</div>

    <!--************************************
        TABS
    *************************************-->
    <div class="tabs_container skin_default">
        <ul class="tabs">
            <li class="first_tab"><a href="#"><span>General Info<em>&nbsp;</em></span></a></li>
            <li class="indicator_gray selected"><a href="#"><span>Another Tab<em>&nbsp;</em></span></a></li>
            <li class="indicator_gray"><a href="#"><span>Relationships<em>&nbsp;</em></span></a></li>
            <li class="indicator_gray"><a href="#" onclick="agile.ux.xhr.get('car_content','pages/sprint_06/form_attachments/attachments.php','loadAttachmentsMenu()');"><span>Attachments<em>&nbsp;</em></span></a></li>
            <li class="indicator_gray"><a href="#"><span>History</span></a></li>
        </ul>
    </div>
    <!--************************************
        MESSAGES
    *************************************-->
	<?php include("dms/dms.php"); ?>
</div>
<div id="PaneContent" class="frame_pinned">
	<div class="Object summary_object">
<!-- BEGIN: Object Content -->
        <div class="summary_container">
            <h3>Summary</h3>
            <div class="summary_list">
                    <dl class="side_by_side_lt_summary">
                        <dt>Status:</dt>
                            <dd>Open</dd>
                        <dt>Requote:</dt>
                            <dd>0</dd>
                        <dt>Total Lines:</dt>
                            <dd>101</dd>
                        <dt>Total Responses:</dt>
                            <dd>51</dd>
                    </dl>
                    <dl class="side_by_side_rt_summary">
                        <dt>Percent Responses:</dt>
                            <dd>50.5</dd>
                        <dt>Due Date:</dt>
                            <dd>11/29/2006 12:00:00 AM GMT</dd>
                        <dt>Date Sent:</dt>
                            <dd>11/11/2006 07:46:58 PM GMT</dd>
                    </dl>
           </div>
        </div>
<!-- END: Object Content -->
	</div>
<!--************************************
	RESIZE BAR
*************************************-->
<div class="prvMoveDiv" id="previewMoveDiv"></div>

<div class="Preview summary_table">
<!-- BEGIN: Preview Content -->
    <!--************************************
        VIEW CONTROLS
    *************************************-->
    <div class="view_controls">
        <h4>Table Title</h4>
        <p><label>View:</label>
            <select name="">
                <option value="">All Content</option>
                <option value="">selection</option>
    
                <option value="">selection</option>
            </select>
        </p>
    </div>
    <!--************************************
        TABLE ACTIONS
    *************************************-->
    <div class="table_actions">
        <div class="column_one no_width">
            <p>
                <a href="#" class="button"><span>Add</span></a>
                <a href="#" class="button"><span>Remove</span></a>
                <a href="#" class="button"><span>Multi-Level<em class="dropdown">&nbsp;</em></span></a>
                <a href="#" class="button"><span>Go-To</span></a>
            </p>
        </div>
        <div class="column_three">
            <p>
                <a href="#" class="button"><span>Save</span></a>
                <a href="#" class="button"><span>Cancel</span></a>
            </p>
        </div>
    </div>
    <!--************************************
        TABLE HANDLE PINNED
    *************************************-->
    <div class="scrollHeaderDiv">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th class="handle">&nbsp;</th>
                <th class="w15">&nbsp;</th>
                <th class="resize">&nbsp;</th>
                <th class="w15">&nbsp;</th>
                <th class="resize">&nbsp;</th>
                <th>Col 2</th>
    
                <th class="resize">&nbsp;</th>
                <th>Col 3</th>
                <th class="resize">&nbsp;</th>
                <th>Col 4</th>
                <th class="resize">&nbsp;</th>
                <th>Col 5</th>
                <th class="resize">&nbsp;</th>
    
                <th>Col 6</th>
                <th class="resize">&nbsp;</th>
            </tr>
        </table>
    </div>
    <div class="noScrollTableDiv">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td class="handle">&nbsp;</td>
    
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
    
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
            </tr>
    
            <tr>
                <td class="handle">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
    
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
    
                <td class="resize">&nbsp;</td>
            </tr>
            <tr>
                <td class="handle">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
    
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
    
                <td>Text</td>
                <td class="resize">&nbsp;</td>
            </tr>
            <tr>
                <td class="handle">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td class="w15">&nbsp;</td>
    
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
    
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
            </tr>
            <tr>
                <td class="handle">&nbsp;</td>
                <td class="w15">&nbsp;</td>
    
                <td class="resize">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
    
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
            </tr>
            <tr>
                <td class="handle">&nbsp;</td>
    
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
    
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
            </tr>
    
            <tr>
                <td class="handle">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td class="w15">&nbsp;</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
    
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
                <td>Text</td>
                <td class="resize">&nbsp;</td>
            </tr>
        </table>
    </div>
    <div class="bom_demo_table_filler" id="bomTableFiller"></div> 
<!-- END: Preview Content -->
</div>