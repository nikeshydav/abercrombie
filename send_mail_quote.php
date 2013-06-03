<?php
include("config.php");
include("classes/mimemail.class.php");
if(isset($_POST['submit']))
{

	$adminfromemail = $_REQUEST['quote_email'];
	$fromEmail 		= $adminfromemail;
	$to 			= "privatetravel@abercrombiekent.co.in";
	$cc 			= "GAjmani@abercrombiekent.co.in, ptsales@abercrombiekent.co.in";
	$subject	 	= 'Request A Quote - '.$_REQUEST['itineraries_quote'];
	//$bcc = "soni@oliveglobal.com";
	//exit;
	//ob_end_clean();
	//b_start();
	ob_end_clean();
	 ob_start();
	include("enquiry_mail_quote.php");
	$body = ob_get_contents();
	$headers = "";
	ob_end_clean();
	
	// MAIL TO USER 
	$objMail = new Mimemail();
	//print_r($objMail);
	//exit;
	$objMail->set_To($to);
	$objMail->set_Bcc($cc);
	//$objMail->set_Bcc($bcc);
	//print_r($objMail);
	//exit;
	$objMail->set_From($fromEmail);
	$objMail->set_Subject($subject); 
	$objMail->set_Body($body);
	$objMail->set_Headers($headers);
	echo 'Thanks For Quote';
	//print_r($objMail);
	//exit;exit;
	if($objMail->send())
	{
		header('location:'.APP_ROOT_URL.'destinations/'.$_REQUEST['itineraries_quote_redirect']);
		exit;
	}
	unset($objMail); 
}
?>