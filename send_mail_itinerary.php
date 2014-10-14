<?php

session_start();
include("config.php");
include("class.phpmailer.php");
$root_path = getcwd();

if (isset($_POST['submit'])) {

    if (strtolower($_SESSION['sec_code']) == strtolower($_POST['val']) && $_POST['val'] != '') {
	
    } else {
	die();
    }

    $my_file = $_POST['itineraries_email_pdf'];
    $mail = new PHPMailer(); // defaults to using php "mail()"
    ob_end_clean();
    ob_start();
    include("enquiry_mail_itinerary.php");
    $body = ob_get_contents();
    ob_end_clean();
    $mail->AddReplyTo("privatetravel@abercrombiekent.co.in");
    $mail->SetFrom('privatetravel@abercrombiekent.co.in');
    $mail->AddReplyTo("privatetravel@abercrombiekent.co.in");
    $address = $toemail = $_POST['email_send_itinerary'];
    $addresscc = $_REQUEST['sender_email'];
    $mail->AddAddress($address, "Abercrombie");
    //$mail->AddAddress('pravesh@oliveinternet.com', "Abercrombie");
    $mail->AddCC($addresscc, "Abercrombie");
    $mail->AddBCC('powerfunction@gmail.com,ankenquiries@gmail.com', "Abercrombie");

    $mail->Subject = 'Email Itinerary - ' . $_REQUEST['itineraries_email'];
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $mail->MsgHTML($body);
    $mail->AddAttachment($root_path . "/pdf/" . $my_file);      // attachment
    $mail->Send();
    /* if(!$mail->Send()) {
      "Mailer Error: " . $mail->ErrorInfo;
      } else {

      header('location:'.APP_ROOT_URL.'destinations/'.$_REQUEST['itineraries_email_redirect'].'?m=1');
      "Message sent!";
      //exit;
      } */

    $mailadmin = new PHPMailer(); // defaults to using php "mail()"
    ob_end_clean();
    ob_start();
    //include("enquiry_mail_itinerary.php");
    //$body = ob_get_contents();
    $bodyadmin = "Dear Admin, <br/>" . $_REQUEST['sender_email'] . " send itinerary to " . $_REQUEST['email_send_itinerary'] . " You may contact these person's to offer more information.";
    //$bodyadmin . = '<br>';
    //ob_end_clean();
    $mailadmin->AddReplyTo("privatetravel@abercrombiekent.co.in", "Abercrombie");

    $mailadmin->SetFrom('privatetravel@abercrombiekent.co.in', 'Abercrombie');

    $mailadmin->AddReplyTo("privatetravel@abercrombiekent.co.in", "Abercrombie");

    $addressadmin = 'privatetravel@abercrombiekent.co.in';
    $addressadmin2 = 'IJubbal@abercrombiekent.co.in';
    $addressadmin3 = 'ptsales@abercrombiekent.co.in';


    //$addresscc = $_REQUEST['sender_email'];

    $mailadmin->AddAddress($addressadmin, "Abercrombie");
    $mailadmin->AddCC($addressadmin2, "Abercrombie");
    $mailadmin->AddCC($addressadmin3, "Abercrombie");
    $mailadmin->AddBCC('powerfunction@gmail.com,ankenquiries@gmail.com', "Abercrombie");

    //$mailadmin->AddCC($addresscc, "Abercrombie");

    $mailadmin->Subject = 'Email Itinerary - ' . $_REQUEST['itineraries_email'];

    $mailadmin->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

    $mailadmin->MsgHTML($bodyadmin);

    $mailadmin->AddAttachment($root_path . "/pdf/" . $my_file);      // attachment

    if (!$mailadmin->Send()) {
	"Mailer Error: " . $mailadmin->ErrorInfo;
    } else {

	//header("location:http://www.abercrombiekent.co.in/thanks_itinerary.html");
	echo "Itinerary Has Been Sent Successfully.";
	exit;
    }
}
?>
<!-- Google Code for contact Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 984307113;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "JPytCJfstQkQqaut1QM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/984307113/?label=JPytCJfstQkQqaut1QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>