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
$cc="GAjmani@abercrombiekent.co.in";
$bcc="ptsales@abercrombiekent.co.in";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
$headers .= 'To: '.$to."\r\n";
$headers .= 'From: '.$_POST['email']."\r\n";
$headers .= 'Cc: '.$cc."\r\n";
$headers .= 'Bcc: '.$bcc."\r\n";


$to2="raj@internetmoguls.in";
$header1 .='MIME-Version: 1.0' . "\r\n";
$header1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header1 .= 'To: '.$to2."\r\n";
$header1 .= 'From: '.$_POST['email']."\r\n";
//$headers .= 'Cc: '.$cc."\r\n";
//$headers .= 'Bcc: '.$bcc."\r\n";
$subject = 'Enquiry from Abercrombie & Kent India';
//if( preg_match ( "/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/", $_POST['sender']))
//{
	mail($to, $subject, $body, $headers);
	//mail($to1, $subject, $body, $headers);
	mail($to2, $subject, $body, $header1);
//}
}
else
{
header("location:http://www.abercrombiekent.co.in"); 
}
?>
<?php
include("config.php");
include("classes/mimemail.class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="Abercrombie &amp; Kent - Safari - Luxury Rail Journeys - River Cruise - Villas - Private Travel - Beach Holidays - Island Getaways - Family Holidays - Special Interest Groups - Honeymoons - Celebrations - Antarctica - Tailor Made Travel - Luxury Travel"/>
<meta name="description" content="Thanks for giving valuable time and book online query. We will revert soon and call you." />
<title>Thanks For Query Luxury Travel - Abercrombie &amp; Kent India</title>
<!--Flag-->
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js">
</script>
<!--Flag-->
<link rel="stylesheet" href="css/style.css" type="text/css" />


<link rel="SHORTCUT ICON" href="favicon.ico" />
<!-- Google Analytics Start here -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5419456-35']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- Google Analytics End here -->
</head>

<body>
<!-- Google Code for A &amp; K Tour Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 970820685;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "lTh3CIu4ggQQzZj2zgM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/970820685/?value=0&amp;label=lTh3CIu4ggQQzZj2zgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<div class="tickerHolder">
<a href="enquiry-form.html"><img src="images/ticker-enquery.jpg" alt="Enquiry" /></a><br class="Clr" />
<br />
<a href="request-brochure.html"><img src="images/ticker-brochure.jpg" alt="Brochure" /></a></div>
<div id="Wrap">
  <!-- Header Part Start Here -->
   <?php include('header.html'); ?>
<!-- Header Part End Here -->

<!-- Banner Part Start Here -->
<div id="img1"><img src="images/news.jpg" alt="Abercrombie &amp; Kent" /></div>
<div id="img2" style="display:none;"><img src="images/middle-east.jpg" alt="Abercrombie &amp; Kent" /></div>
<div id="img3" style="display:none;"><img src="images/europe-banner.jpg" alt="Abercrombie &amp; Kent" /></div>
<div id="img4" style="display:none;"><img src="images/australia-newzealand.jpg" alt="Abercrombie &amp; Kent" /></div>
<div id="img5" style="display:none;"><img src="images/china-orient.jpg" alt="Abercrombie &amp; Kent" /></div>
<div id="img6" style="display:none;"><img src="images/south-america-banner2.jpg" alt="Abercrombie &amp; Kent" /></div>
<div id="img7" style="display:none;"><img src="images/north-america.jpg" alt="Abercrombie &amp; Kent" /></div>
<div id="img8" style="display:none;"><img src="images/beach-island-banner.jpg" alt="Abercrombie &amp; Kent" /></div>
<div id="img9" style="display:none;"><img src="images/antarctica-news.jpg" alt="Abercrombie &amp; Kent" /></div>

<!-- Banner Part End Here -->

<!-- Container Part Start Here -->
<div id="Container">
<!-- Left Container Part Start Here -->
<div class="LeftContaner">
<div class="Breadcrumb">
<ul>
<li>You are here</li>
<li><a href="index.html">Home</a></li>
<li>A&amp;K NEWS</li>
</ul>
</div>
<div class="LeftList">
 <h4>CHOOSE YOUR STYLE</h4>
    <select onChange="ChangeValue(this)">
	<option value="0" selected="selected">Choose Your Style</option>
    	    <option value="journeystyles/private-journeys.html">Private Luxury Journeys</option>
          <option value="journeystyles/extreme-adventures.html">Extreme Adventures</option>
          <option value="journeystyles/small-ship-cruiesing.html">Small Ship Cruising</option>
          <option value="journeystyles/Luxury-rail-journey.html">Luxury Rail Journeys</option>
          <option value="journeystyles/famity-holday.html">Family Holidays</option>
          <option value="journeystyles/rest-revive.html">Rest &amp; Revive</option>
          <option value="journeystyles/celebration.html">Celebrations</option>
          <option value="journeystyles/special-interst-groups.html">Special Interest Groups</option>
          <option value="journeystyles/private-mob-copm.html">Private Mobile Camping</option>
          <option value="journeystyles/ak-villas.html">A&amp;K Villas</option>
          <option value="journeystyles/sanctuary-retreats.html">Sanctuary Retreats</option>
    </select>

<h4>Travel Destinations</h4>
    <select onChange="ChangeValue(this)">
	<option value="0" selected="selected">Select Destination</option>
        <option value="destinations/africa.html">Africa</option>
		<option value="destinations/middle-east-north-africa.html">Middle East &amp; North Africa</option>
		<option value="destinations/europe.html">Europe</option>
		<option value="destinations/australasia.html">Australasia</option>
		<option value="destinations/theorient.html">The Orient</option>
		<option value="destinations/south-america.html">South America</option>
		<option value="destinations/north-america.html">North America</option>
		<option value="destinations/beach-island-escapes.html">Beach &amp; Island Escapes</option>
		<option value="destinations/antartica.html">Antarctica</option>
    </select>
</div>
<?php include('brochure_left.html'); ?>
</div>
<!-- Left Container Part End Here -->
<!-- Center Container Part Start Here -->
<div class="CenterContainerInner">
<h1>ThaNKS FOR ENQUiRY </h1>
<div class="Right">
<div class="RightIcons">
<?php include('share.html'); ?>
</div>
<div class="NewsletterBox">
 <?php include('newsletterform.html'); ?>
</div>
</div>
<div class="Clr"></div>
</div>

<div class="CenterContainerInner"> Thanks For Enquiry 
  <br />
  We Will Revert Soon
  
    <div class="Clr"></div>
</div>

<!-- Center Container Part End Here -->
<div class="Clr"></div>
</div>
<!-- Container Part End Here -->
</div>
<!-- Footer Part Start Here -->
<?php include('footer.html'); ?>
<!-- Footer Part End Here -->
<script language="javascript1.1" type="text/javascript">
function ChangeValue(val)
{ 
  if(val.value != "0")
  {
    window.open(val.value,"_self");
  }
}
</script></body>
</html>