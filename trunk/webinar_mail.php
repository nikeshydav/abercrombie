<?php
include("config.php");
include("classes/mimemail.class.php");
if(isset($_POST['submit_x']))
{

	$adminfromemail = "privatetravel@abercrombiekent.co.in";
	$fromEmail 		= $adminfromemail;
	$to 			= "privatetravel@abercrombiekent.co.in";
	$subject	 	= "Webinar Registration";
	//$bcc = "soni@oliveglobal.com";
	//exit;
	//ob_end_clean();
	ob_start();
	include("enquiry_mail.php");
	$body = ob_get_contents();
	$headers = "";
	ob_end_clean();
	
	// MAIL TO USER 
	$objMail = new Mimemail();
	//print_r($objMail);
	//exit;
	$objMail->set_To($to);
	//$objMail->set_Bcc($bcc);
	//print_r($objMail);
	//exit;
	$objMail->set_From($fromEmail);
	$objMail->set_Subject($subject); 
	$objMail->set_Body($body);
	$objMail->set_Headers($headers);
	//print_r($objMail);
	//exit;exit;
	if($objMail->send())
	{
		header("Location:http://www.abercrombiekent.co.in/thanks-webinar.html");
	}
	unset($objMail); 
}
?>