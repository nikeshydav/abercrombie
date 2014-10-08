<?php
$url = $_SERVER['HTTP_REFERER'];
if($_SERVER['HTTP_REFERER'] != '')
{
$body="<table cellspacing='1' cellpadding='2' width='500' border='1' style='font-size:11px;font-family:tahoma,verdana,arial;border:2px dotted #333333;'> <tbody> <tr> <td bgcolor='#d1d1d1' colspan='3' height='25' align='center'><b>Enquiry Form Abercrombie &amp; Kent India</b></td> </tr> 

<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Name :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['title']."-".$_REQUEST['first_name']."-".$_REQUEST['sur_name']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Email :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['email']."</td></tr>"; 


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Confirm Email :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['cnf_email']."</td></tr>"; 


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Telephone :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['telephone']."</td></tr>"; 


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Address :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['address1'].",".$_REQUEST['address2'].",".$_REQUEST['address3']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Town/City :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['town_city']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Country :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['country']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Post Code :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['post_code']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Have U Travelled Before :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['have_travelled_before']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Others Information :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['help_information']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>What Type of Holidays Looking For :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['type_of_holiday']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Where U Like to Go :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['like_to_go']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>When Would U Like To Go :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['like_to_go_day']."/".$_REQUEST['like_to_go_month']."/".$_REQUEST['like_to_go_year']."</td></tr>";

if(isset($_REQUEST['mentioned_date'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Flexible to Date :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['mentioned_date']."</td></tr>";}


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>How Long Do U Want Ur Holiday :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['how_long_holiday']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Have U Travelled Country Before :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['travelled_country_before']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>No of People in Party(Adults) :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['adults']."</td></tr>";



$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b>No of People 12-18 Yrs :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['8_11_yrs']."</td></tr>";


$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b>No of People 2-12 Yrs :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['3_7_yrs']."</td></tr>";


$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b>No of People 0-2 Yrs :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['0_2_yrs']."</td></tr>";


$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Particular Place Add to Itinerary/Accommd :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['experience_details']."</td></tr>";

if(isset($_REQUEST['five_star'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Accommodation Type :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['five_star']."</td></tr>";}

if(isset($_REQUEST['beach_resort'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Accommodation Type :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['beach_resort']."</td></tr>";}

if(isset($_REQUEST['boutique_hotel'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Accommodation Type :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['boutique_hotel']."</td></tr>";}

if(isset($_REQUEST['heritage_hotel'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Accommodation Type :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['heritage_hotel']."</td></tr>";}

if(isset($_REQUEST['spa_hotel'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Accommodation Type :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['spa_hotel']."</td></tr>";}

if(isset($_REQUEST['eco_lodge'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Accommodation Type :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['eco_lodge']."</td></tr>";}

if(isset($_REQUEST['under_canvas'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Accommodation Type :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['under_canvas']."</td></tr>";}

if(isset($_REQUEST['other'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>Others :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['other']."</td></tr>";}

if(isset($_REQUEST['akcommunicat'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>How did You Hear About A&K :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['akcommunicat']."</td></tr>";}


if(isset($_REQUEST['emailcomm'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['emailcomm']."</td></tr>";}


if(isset($_REQUEST['otherscomm'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['otherscomm']."</td></tr>";}


if(isset($_REQUEST['othersname'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['othersname']."</td></tr>";}



if(isset($_REQUEST['repeat_client'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>How did You Hear About A&K :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['repeat_client']."</td></tr>";}


if(strlen(trim($_REQUEST['rpeatcli_name'])) > 0) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['rpeatcli_name']."</td></tr>";}


if(isset($_REQUEST['magazine'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>How did You Hear About A&K :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['magazine']."</td></tr>";}


if(isset($_REQUEST['Cond�_Nast_Traveller'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['Cond�_Nast_Traveller']."</td></tr>";}


if(isset($_REQUEST['Vogue'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['Vogue']."</td></tr>";}


if(isset($_REQUEST['Travel_Leisure'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['Travel_Leisure']."</td></tr>";}


if(isset($_REQUEST['othersmag'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['othersmag']."</td></tr>";}


if(strlen(trim($_REQUEST['namemag'])) > 0) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['namemag']."</td></tr>";}


if(isset($_REQUEST['events'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>How did You Hear About A&K :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['events']."</td></tr>";}


if(strlen(trim($_REQUEST['nameevents'])) > 0) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['nameevents']."</td></tr>";}


if(isset($_REQUEST['friend_family'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>How did You Hear About A&K :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['friend_family']."</td></tr>";}


if(strlen(trim($_REQUEST['friend_name'])) > 0) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['friend_name']."</td></tr>";}

if(strlen(trim($_REQUEST['friend_email'])) > 0) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['friend_email']."</td></tr>";}

if(isset($_REQUEST['online'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>How did You Hear About A&K :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['online']."</td></tr>";}

if(isset($_REQUEST['google'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['google']."</td></tr>";}

if(isset($_REQUEST['yahoo'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['yahoo']."</td></tr>";}

if(isset($_REQUEST['bing'])) {
$body .= "<tr><td nowrap height=15  style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['bing']."</td></tr>";}

if(isset($_REQUEST['twitter'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['twitter']."</td></tr>";}

if(isset($_REQUEST['facebook'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['facebook']."</td></tr>";}

if(isset($_REQUEST['online_others'])) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['online_others']."</td></tr>";}

if(strlen(trim($_REQUEST['online_name'])) > 0) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['online_name']."</td></tr>";
}
if(isset($_REQUEST['others'])) {
$body .= "<tr><td nowrap height=15 border:1px style='padding-left:2px;width:20%' align='left'><b>How did You Hear About A&K :</td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['others']."</td></tr>";}

if(strlen(trim($_REQUEST['other_name'])) > 0) {
$body .= "<tr><td nowrap height=15 style='padding-left:2px;width:20%' align='left'><b></td><td nowrap height=15  style='width:80%;' align='left'><b>".$_REQUEST['other_name']."</td></tr>";
}

$body .="</table>";


$to="privatetravel@abercrombiekent.co.in";
$cc="IJubbal@abercrombiekent.co.in";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
$headers .= 'To: '.$to."\r\n";
$headers .= 'From: '.$_POST['email']."\r\n";
$headers .= 'Cc: '.$cc."\r\n";


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

</head>

<body>
<div class="tickerHolder">
<a href="enquery-form.html"><img src="images/ticker-enquery.jpg" alt="Enquiry" /></a><br class="Clr" />
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