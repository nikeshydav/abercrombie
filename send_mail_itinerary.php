<?php
include("config.php");
include("class.phpmailer.php");
$root_path = getcwd();

if(isset($_POST['submit']))
{
			
			$my_file = $_REQUEST['itineraries_email_pdf'];
	        $toemail  = $_REQUEST['email_send_itinerary'];
			$mail              = new PHPMailer(); // defaults to using php "mail()"
			ob_end_clean();
	        ob_start();
			include("enquiry_mail_itinerary.php");
			$body = ob_get_contents();
			ob_end_clean();
			$mail->AddReplyTo("privatetravel@abercrombiekent.co.in");
			
			$mail->SetFrom('privatetravel@abercrombiekent.co.in');
			
			$mail->AddReplyTo("privatetravel@abercrombiekent.co.in");
			
			$address = $toemail;
			
			$addresscc = $_REQUEST['sender_email'];
			//exit;
			
			$mail->AddAddress($address, "Abercrombie");
			//$mail->AddAddress('pravesh@oliveinternet.com', "Abercrombie");
			$mail->AddCC($addresscc , "Abercrombie");
			
			$mail->Subject    = 'Email Itinerary - '.$_REQUEST['itineraries_email'];
			
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			
			$mail->MsgHTML($body);
			
			$mail->AddAttachment( $root_path."/pdf/". $my_file);      // attachment
			$mail->Send();
			/*if(!$mail->Send()) {
			"Mailer Error: " . $mail->ErrorInfo;
			} else {
			
			 header('location:'.APP_ROOT_URL.'destinations/'.$_REQUEST['itineraries_email_redirect'].'?m=1');
			"Message sent!";
			//exit;
			}*/
			
			$mailadmin              = new PHPMailer(); // defaults to using php "mail()"
			ob_end_clean();
	        ob_start();
			//include("enquiry_mail_itinerary.php");
			//$body = ob_get_contents();
			$bodyadmin = "Dear Admin, <br/>" .$_REQUEST['sender_email']." send itinerary to ".$_REQUEST['email_send_itinerary']." You may contact these person's to offer more information.";
			//$bodyadmin . = '<br>';
			//ob_end_clean();
			$mailadmin->AddReplyTo("privatetravel@abercrombiekent.co.in","Abercrombie");
			
			$mailadmin->SetFrom('privatetravel@abercrombiekent.co.in', 'Abercrombie');
			
			$mailadmin->AddReplyTo("privatetravel@abercrombiekent.co.in","Abercrombie");
			
			$addressadmin = 'privatetravel@abercrombiekent.co.in';
			$addressadmin2 = 'GAjmani@abercrombiekent.co.in';
			$addressadmin3 = 'ptsales@abercrombiekent.co.in';
			
			
			//$addresscc = $_REQUEST['sender_email'];
			
			$mailadmin->AddAddress($addressadmin, "Abercrombie");
			$mailadmin->AddCC($addressadmin2, "Abercrombie");
			$mailadmin->AddCC($addressadmin3, "Abercrombie");
			
			//$mailadmin->AddCC($addresscc, "Abercrombie");
			
			$mailadmin->Subject    = 'Email Itinerary - '.$_REQUEST['itineraries_email'];
			
			$mailadmin->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			
			$mailadmin->MsgHTML($bodyadmin);
			
			$mailadmin->AddAttachment( $root_path."/pdf/". $my_file);      // attachment
			
			if(!$mailadmin->Send()) {
			"Mailer Error: " . $mailadmin->ErrorInfo;
			} else {
			
			//header("location:http://www.abercrombiekent.co.in/thanks_itinerary.html");
			echo "Itinerary Has Been Sent Successfully.";
			exit;
			}
	
}
?>