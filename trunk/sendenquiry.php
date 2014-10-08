<?php
$url = $_SERVER['HTTP_REFERER'];
if($_SERVER['HTTP_REFERER'] != '')
{
$body="<table cellspacing='1' cellpadding='2' width='500' border='1' style='font-size:11px;font-family:tahoma,verdana,arial;border:2px dotted #333333;'> <tbody> <tr> <td bgcolor='#d1d1d1' colspan='3' height='25' align='center'><b>Enquiry Form Abercrombie &amp; Kent India</b></td> </tr> 

<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Name :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['first_name']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Email :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['email']."</td></tr>"; 


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Telephone :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['telephone']."</td></tr>"; 


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Address :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['address1']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Travel Enquiry:</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['help_information']."</td></tr>";


$body .="</table>";


$to="privatetravel@abercrombiekent.co.in";
$cc="IJubbal@abercrombiekent.co.in";
$bcc="ptsales@abercrombiekent.co.in";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
$headers .= 'To: '.$to."\r\n";
$headers .= 'From: '.$_POST['email']."\r\n";
$headers .= 'Cc: '.$cc."\r\n";
$headers .= 'Bcc: '.$bcc."\r\n";



//$headers .= 'Cc: '.$cc."\r\n";
//$headers .= 'Bcc: '.$bcc."\r\n";
$subject = 'Enquiry From Abercrombie & Kent India';
//if( preg_match ( "/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/", $_POST['sender']))
//{
	mail($to, $subject, $body, $headers);
	//mail($to1, $subject, $body, $headers);
	//mail($to2, $subject, $body, $header1);
//}
#header("location:http://www.abercrombiekent.co.in/thanks.html"); 
}
else
{
header("location:http://www.abercrombiekent.co.in"); 
}
?>