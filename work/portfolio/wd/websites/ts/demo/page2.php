<?php include("protect.php"); ?>
<?php include("global/includes/config.inc"); ?>

<?php $thisPage="page2"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo homeTitle ?></title>
<?php include("global/includes/head/head_global.inc"); ?>
</head>
<body>
    <div class="ui-layout-north">
        <?php include("global/includes/nav/nav_teir1.inc"); ?>
    </div>
	<div class="ui-layout-center">
        <div id="content">
			<p id="logout"><a href="http://www.trigeminalsolutions.com/demo/index.php?logout=1" class="button"><span>Logout</span></a></p>
        	<h2>Motion</h2>
            <form action="#" method="post" name="survey">
                <div class="sectOne">
            		 <dl>
                        <dt>Did you experience motion today? </dt>
                        <dd>
                            <label for="exp_motion_y"><input type="radio" id="exp_motion_y" name="motion_today" value="yes" onClick="javascript:$('#exp_motion,#exp_sickness').show();" />Yes</label>&nbsp;<label for="exp_motion_n"><input type="radio" id="exp_motion_n" name="motion_today" value="no" checked="checked" checked="checked" onclick="javascript:$('#exp_motion,#exp_sickness').hide();" />No</label>
                        </dd>
                     </dl>
                    <div id="exp_motion" class="sectTwo">
                        <dl>
                            <dt>What type of motion <span>(check all that apply)</span>?</dt>
                            <dd>&nbsp;</dd>
                            <dt>Vehicle:</dt>
                            <dd><label for="type_vehicle_y"><input type="radio" id="type_vehicle_y" name="type_vehicle1" value="yes" onClick="javascript:$('#type_vehicle1').show(200);" />Yes</label>&nbsp;<label for="type_vehicle_n"><input type="radio" id="type_vehicle_n" name="type_vehicle1" value="no" checked="checked" onClick="javascript:$('#type_vehicle1').hide(200);" />No</label></dd>
                        </dl>
                        <div id="type_vehicle1" class="sectThree">
                            <dl>
                                <dt>When?</dt>
                                <dd>
                                    <label for="vehicle_am"><input type="checkbox" id="vehicle_am" name="vehicle_am" value="morning" />Morning</label>
                                    <label for="vehicle_noon"><input type="checkbox" id="vehicle_noon" nvalue="vehicle_noon" />Afternoon</label>
                                    <label for="vehicle_eve"><input type="checkbox" id="vehicle_eve" name="vehicle_eve" value="morning" />Evening</label>
                                    <label for="vehicle_pm"><input type="checkbox" id="vehicle_pm" name="vehicle_pm" value="morning" />Night</label>
                                </dd>
                            </dl>
                        </div>
                        <dl>
                            <dt>Train:</dt>
                            <dd><label for="type_train_y"><input type="radio" id="type_train_y" name="type_train1" value="yes" onClick="javascript:$('#type_train1').show(200);" />Yes</label>&nbsp;<label for="type_train_n"><input type="radio" id="type_train_n" name="type_train1" value="no" checked="checked" onClick="javascript:$('#type_train1').hide(200);" />No</label></dd>
                        </dl>
                        <div id="type_train1" class="sectThree">
                            <dl>
                                <dt>When?</dt>
                                <dd>
                                    <label for="train_am"><input type="checkbox" id="train_am" name="train_am" value="morning" />Morning</label>
                                    <label for="train_noon"><input type="checkbox" id="train_noon" nvalue="train_noon" />Afternoon</label>
                                    <label for="train_eve"><input type="checkbox" id="train_eve" name="train_eve" value="morning" />Evening</label>
                                    <label for="train_pm"><input type="checkbox" id="train_pm" name="train_pm" value="morning" />Night</label>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div id="exp_sickness" class="sectTwo">
                        <dl>
                            <dt>Did you experience motion sickness today?</dt>
                            <dd><label for="exp_sickness_y"><input type="radio" id="exp_sickness_y" name="sickness_today" value="yes" onClick="javascript:$('#exp_motion_sickness').show(200);" />Yes</label>&nbsp;<label for="exp_sickness_n"><input type="radio" id="exp_sickness_n" name="sickness_today" value="no" checked="checked" onClick="javascript:$('#exp_motion_sickness').hide(200);" />No</label></dd>
                        </dl>
                        <div id="exp_motion_sickness" class="sectThree">
                            <dl>
                                <dt>When?</dt>
                                <dd>
                                        <label for="motionsick_am"><input type="checkbox" id="motionsick_am" name="motionsick_am" value="morning" />Morning</label>
                                        <label for="motionsick_noon"><input type="checkbox" id="motionsick_noon" nvalue="motionsick_noon" />Afternoon</label>
                                        <label for="motionsick_eve"><input type="checkbox" id="motionsick_eve" name="motionsick_eve" value="morning" />Evening</label>
                                        <label for="motionsick_pm"><input type="checkbox" id="motionsick_pm" name="motionsick_pm" value="morning" />Night</label>
                                </dd>
                            </dl>
                            <dl>
                                <dt>Did you throw up?</dt>
                                <dd>
                                	<label for="vomit_y"><input type="radio" id="vomit_y" name="vomit_today" value="yes" />Yes</label>&nbsp;<label for="vomit_n"><input type="radio" id="vomit_n" name="vomit_today" value="no" checked="checked" />No</label>
                                </dd>
                            </dl>
                        </div>
                    </div>                 
                </div>
                <div class="sectOne">
                    <dl>
                        <dt>Did you experience a significant change in altitude today? </dt>
                        <dd>
                            <label for="exp_change_y"><input type="radio" id="exp_change_y" name="change_today" value="yes" onClick="javascript:$('#exp_altitude').show();" />Yes</label>&nbsp;<label for="exp_change_n"><input type="radio" id="exp_change_n" name="change_today" value="no" checked="checked" onClick="javascript:$('#exp_altitude').hide();" />No</label>
                        </dd>
                    </dl>
                    <div id="exp_altitude" class="sectTwo">
                        <dl>
                            <dt>When?</dt>
                            <dd>
                                <label for="altitude_am"><input type="checkbox" id="altitude_am" name="altitude_am" value="morning" />Morning</label>
                                <label for="altitude_noon"><input type="checkbox" id="altitude_noon" nvalue="altitude_noon" />Afternoon</label>
                                <label for="altitude_eve"><input type="checkbox" id="altitude_eve" name="altitude_eve" value="morning" />Evening</label>
                                <label for="altitude_pm"><input type="checkbox" id="altitude_pm" name="altitude_pm" value="morning" />Night</label>
                            </dd>
                        </dl>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="ui-layout-south">
        <?php include("global/includes/foot/foot.inc"); ?>
    </div>
</body>
</html>
