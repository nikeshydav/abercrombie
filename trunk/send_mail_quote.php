<?php

include("config.php");
include("classes/mimemail.class.php");
if (isset($_POST['submit'])) {

    if (strtolower($_SESSION['sec_code']) == strtolower($_POST['val']) && $_POST['val'] != '') {
	
    } else {
	die();
    }

    $adminfromemail = $_REQUEST['quote_email'];
    $fromEmail = $adminfromemail;
    $to = "privatetravel@abercrombiekent.co.in";
    $cc = "GAjmani@abercrombiekent.co.in, ptsales@abercrombiekent.co.in";
    $bcc = "ankenquiries@gmail.com,powerfunction@gmail.com";
    $subject = 'Request A Quote - ' . $_REQUEST['itineraries_quote'];
    //$bcc = "soni@oliveglobal.com";
    //exit;
    //ob_end_clean();
    //b_start();
    ob_end_clean();
    ob_start();
    include("enquiry_mail_quote1.php");
    $body = ob_get_contents();
    $headers = "";
    ob_end_clean();

    // MAIL TO USER 
    $objMail = new Mimemail();
    //print_r($objMail);
    //exit;
    $objMail->set_To($to);
    $objMail->set_Bcc($cc);
  
    $objMail->set_Bcc($bcc);
    //print_r($objMail);
    //exit;
    $objMail->set_From($fromEmail);
    $objMail->set_Subject($subject);
    $objMail->set_Body($body);
    $objMail->set_Headers($headers);
    echo 'Thanks For Quote';
    //print_r($objMail);
    //exit;exit;
    if ($objMail->send()) {
	header('location:' . APP_ROOT_URL . 'destinations/' . $_REQUEST['itineraries_quote_redirect']);
	exit;
    }
    unset($objMail);
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