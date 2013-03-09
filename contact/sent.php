<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="contactResults"; 
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo contactTitle ?></title>
<?php include("../assets/inc/head.inc.php"); ?>
<!--<meta http-equiv="refresh" content="10;url=../index.php">-->
</head>
<body id="contact">
	<?php include("../assets/inc/nav/nav.inc.php"); ?>
	<?php include("../assets/inc/socialbar.inc.php"); ?>
        <div class="content">
        
        
		<?php  // check that file is within the permitted size
		
					// FORM FIELD DATA
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $awareness = $_POST['awareness'];
                    $message = $_POST['message'];
		
			if ( empty($name) ) {
				echo "<p>Sorry, you didn't fill out any fields. Please enter your information and a message.</p><p><a href='javascript:history.go(-1)'>Go back</a></p>";
			} else {
			
                    
                    $fp = fopen("contactFormBackup.txt", "a"); 
                    fwrite($fp, $name . "," . 
								$message . "," .
								$awareness . "," .
                                $email . "," . 
                                $phone . ". | " . 
                                date("M-d-Y") . "\n");
                    fclose($fp);
					
                    // send form results through email
                    $recipient = "ralph@pencilmedia.com"; 
                    $subject = "Pencil Media Web Work Inquiry";
                    $forminfo = 
                    (
                        //$dateHeader . "<p>" . date("M-d-Y") . "</p>" .
                        $header . "<div><h4>Inquiry Information from " . $name .  "</h4>" .
                        "<p><label>Date:  </label>" . date("M-d-Y") .  "</p>" .
						"<p><label>Name:  </label>" . $name .  "</p>" .
                        "<p><label>Phone:  </label>" . $phone .  "</p>" .
                        "<p><label>Email:  </label>" . $email .  "</p>" .
                        "<p><label>How did you hear about us?  </label>" . $awareness .  "</p>" .
                        "<p><label style=\"float: left; padding-bottom: 30%\">Message:  </label>" . $message .  "</p>" .
                        "</div>\n"
                    );
                    
                    $formsend = mail("$recipient", "$subject", "$forminfo", "From: $email\r\nReply-to:$email ; $strFrom\r\nContent-type: text/html; charset=us-ascii");
				    $display .= '<h2>Thank You</h2>';
					$display .= nl2br($status);
                    $display .= '<p>Thank you for your inquiry. Below is the information you supplied to us. We will be in contact with you shortly.</p>';
                    $display .= nl2br($forminfo);
					
					echo $display;
			}
                ?>
      
    </div>
	<?php include("../assets/inc/foot.inc.php"); ?>
</body>
</html>