
<?php
include("config.php");
include("classes/mimemail.class.php");
$content = '';
ini_set("display_errors",0);
error_reporting(0);

        if($_POST)
        {
		$fromEmail 		=$_REQUEST['email'];

		$to 			=  $email;
		$subject	 	= "Abercrombie - Request a Brochure";
		
		//ob_end_clean();
		ob_start();
		//$body = $content;
		include("bypost_email.php");
		include(APP_ROOT_PATH.'bypost_email.php');
		$body = ob_get_contents();
		$headers = '';
		ob_end_clean();
		
		// MAIL TO USER 
		$objMail = new Mimemail();
		$objMail->set_To('cati.latika@gmail.com');
		$objMail->set_Bcc('cati.latika@gmail.com');
		$objMail->set_Cc('cati.latika@gmail.com');
		$objMail->set_From($fromEmail);
		$objMail->set_Subject($subject); 
		$objMail->set_Body($body);
		$objMail->set_Headers($headers);
		if($objMail->send()){
			   if($_POST['downloadpdf']=='pdf')
			   {
					if($_POST['requestbrochure2']=='Concept Brochure')
					{
					   // header('location:'.APP_ROOT_URL.'pdf/AKConcept-Brochure.pdf');
						//exit;
	          ?>
							<script type="text/javascript">
							// PopupCenter('<?php echo APP_ROOT_URL?>pdf/AKConcept-Brochure.pdf',"pdf",600,900);
							window.location.href="<?php echo APP_ROOT_URL?>pdf/AKConcept-Brochure.pdf";
							//alert(app.Name);
							//window.open("<?php echo APP_ROOT_URL?>pdf/AKConcept-Brochure.pdf");
							</script>
				<?php
			
				
				}
				if($_POST['requestbrochure2']=='Worldwide Brochure')
				{
				  //header('location:'.APP_ROOT_URL.'pdf/AK-Worldwide-Brochure.pdf');
				  //exit;
				?>
						<script type="text/javascript">
					window.location.href="<?php echo APP_ROOT_URL?>pdf/AK-Worldwide-Brochure.pdf";
					 //return PopupCenter('<?php echo APP_ROOT_URL?>pdf/AK-Worldwide-Brochure.pdf',"pdf",600,900);
					 //window.open("<?php echo APP_ROOT_URL?>pdf/AK-Worldwide-Brochure.pdf");
					</script>
			<?php
			
			}
			}
			else
			{
			header("location:request-brochure.html?m=1");
			exit;
			}
			}
			unset($objMail); 
			
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
<meta name="description" content="Abercrombie &amp; Kent has been perfecting the art of tailor-made travel for nearly 50 years. Now in India. For the ultimate service and experience, travel with us on one of our inspiring journeys for a trip of a lifetime." />
<title>Luxury Travel - Abercrombie &amp; Kent India</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<!--Flag-->
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-topbar.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-sidebar.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js">

/***********************************************
* All Levels Navigational Menu- (c) Dynamic Drive DHTML code library (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<!--Flag-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script language="javascript">
function showMe(tab)
{		
	for(var i=1; i<=9; i++)
	{
		var name="tab"+i;
		var name2="divli"+i;
		if(tab==i)
		{
			document.getElementById("img"+i).style.display="";
			document.getElementById(name2).className="active";
			document.getElementById(name).style.display="";
		}
		
		else
		{
			document.getElementById("img"+i).style.display="none";
			document.getElementById(name2).className="";
			document.getElementById(name).style.display="none";
		}
	}
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
    fullURL = parent.document.URL;
	var obstring=fullURL.indexOf('?');
	//alert(obstring);
	if(obstring > 0)
    {
		objVar = fullURL.substring(fullURL.indexOf('?')+4, fullURL.length) ;
		showMe(objVar);
	}
	else
	{
		objVar='1';
		showMe(objVar);
	}
	
    });
	</script>
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
<!-- Google Code for A &amp; K Tour Conversion Page -->
<span style=" position:fixed; bottom:0px; right:0px; z-index:999999;">


<a  onclick="NewWindow(this.href,'name','255','440','yes');return false" 
href="yahoo.html">
                 
     <img src="images/livechaticon.png" alt="live chat" /></a>
     <SCRIPT language=JavaScript type=text/JavaScript>

    var win = null;

    function NewWindow(mypage, myname, w, h, scroll) {

        var winl = (screen.width - w) / 2;

        var wint = (screen.height - h) / 2;

        var settings = 'height=' + h + ',';

        settings += 'width=' + w + ',';

        settings += 'top=' + wint + ',';

        settings += 'left=' + winl + ',';

        settings += 'scrollbars=' + scroll + ',';

        settings += 'resizable=yes';

        win = window.open(mypage, myname, settings);

        if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }

    }

</SCRIPT></span>
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
    	  <option value="journeystyles/private-journeys.html">Private Journeys</option>
          <option value="journeystyles/extreme-adventures.html">Extreme Adventures</option>
          <option value="journeystyles/small-ship-cruising.html">Small Ship Cruising</option>
          <option value="journeystyles/Luxury-rail-journey.html">Luxury Rail Journeys</option>
          <option value="journeystyles/family-holiday.html">Family Holidays</option>
          <option value="journeystyles/rest-revive.html">Rest &amp; Revive</option>
          <option value="journeystyles/celebration.html">Celebrations</option>
             <option value="journeystyles/honeymoon.html">Honeymoon</option>
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
         <option value="destinations/central-america.html">Central America</option>
		<option value="destinations/beach-island-escapes.html">Beach &amp; Island Escapes</option>
		<option value="destinations/antartica.html">Antarctica</option>
        <option value="destinations/arctic.html">Arctic</option>
    </select>
</div>
<?php include('brochure_left.html'); ?>
</div>
<!-- Left Container Part End Here -->
<!-- Center Container Part Start Here -->
<div class="CenterContainerInner">
<h1> Noted With Thanks  </h1>
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

<div class="CenterContainerInner">
We will get back to you at the earliest possible.<br /><br />
 <strong> Have a Good Day!</strong>
 
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