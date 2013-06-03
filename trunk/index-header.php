<?php
include("header.html")
include("config.php");
include("classes/mimemail.class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Luxury Travels | Luxury Holidays | Tailor Made Holidays – Abercrombie & Kent India</title>
<meta name="description" content="We are pioneers in experiential luxury holidays since 1962 with a network of 60 offices in 32 countries. Our expertise extends to every aspect of a journey not only in luxury but also in culture, wildlife and history." />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="Luxury Travel, Luxury Tours, Luxury Holidays Packages, Luxury Vacation Packages, Luxury Tours and Travel Company, Luxury Honeymoon Packages, Luxury Safari, Adventure Tours"/>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<!--Flag-->
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js">
</script>
<!--Flag-->
<!--header-->
<link rel="stylesheet" type="text/css" href="fade-example_data/fade-plugin.css">
<script type="text/javascript" src="fade-example_data/jquery.js"></script>
<script type="text/javascript" src="fade-example_data/fade-plugin.js"></script>
<script type="text/javascript">
      (function($) {
        function init() {

          $("#example1 .effectContainer").fadeTransition({pauseTime: 2000,
                                                 transitionTime: 2000,
                                                 ignore: "#introslide",
                                                 delayStart: 2000,
                                                 pauseOnMouseOver: true,
                                                 createNavButtons: true});
                                                 
          $("#example2 .effectContainer").fadeTransition({pauseTime: 2000,
                                                  transitionTime: 2000,
                                                  delayStart: 2000,
                                                  pauseOnMouseOver: true,
                                                  createNavButtons: true});
                                                 
          $("#example3 .effectContainer").fadeTransition({pauseTime: 2000,
                                                  transitionTime: 2000,
                                                  manualNavigation: true});
                                                  
          var example3 = $("#example3 .effectContainer").fadeTransition().fader();          
          $("#back").click(function(e) { example3.prev(); e.preventDefault(); });
          $("#next").click(function(e) { example3.next(); e.preventDefault(); });
        }
        
        
        $(document).ready(init);
      })(jQuery);
 </script>
    <!--header-->
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
<?php echo "php working";?>
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
<div style="width:100%; float:left;">
<div class="tickerHolder"> <a href="enquery-form.html"><img src="images/ticker-enquery.jpg" alt="Enquiry" /></a><br class="Clr" />
  <br />
  <a href="request-brochure.html"><img src="images/ticker-brochure.jpg" alt="Brochure" /></a></div>


<div id="Wrap">
  <!-- Header Part Start Here -->
   <?php include('header.html'); ?>
  <!-- Header Part End Here -->
  <!-- Banner Part Start Here -->
     <div id="Banner">

        <div id="example1">
      <div style="position: relative;" class="effectContainer">
        
        <div style="left: 0px; top: 0px; position: absolute; opacity: 1; display: none;" class="slide r2">
          <img src="images/home-banner1.jpg" alt="Eclipse">
        </div>
        <div style="left: 0px; top: 0px; position: absolute; opacity: 1; display: none;" class="slide r2">
          <img src="images/home-banner4.jpg" alt="Australia">
        </div>
        <div style="left: 0px; top: 0px; position: absolute; opacity: 1; display: none;" class="slide r2">
          <img src="images/home-banner2.jpg" alt="Eclipse">
        </div>
        
        <div style="left: 0px; top: 0px; position: absolute; opacity: 1; display: none;" class="slide r2">
          <img src="images/home-banner5.jpg" alt="Namibia">
        </div>
        <div style="left: 0px; top: 0px; position: absolute; display: block; opacity: 1;" class="slide r1">
          <img src="images/home-banner3.jpg" alt="Banner">
        </div>
        
        
     <div style="left: 0px; top: 0px; position: absolute; opacity: 1; display: none;" class="slide r2">
          <img src="images/home-banner6.jpg" alt="Australia">
        </div>
        
        
         <div style="left: 0px; top: 0px; position: absolute; opacity: 1; display: none;" class="slide r2">
          <img src="images/home-banner7.jpg" alt="nepal">
        </div>
        
        
        
        
      </div>
    </div>

  </div>
  <!-- Banner Part End Here -->
  <!-- Container Part Start Here -->
  <div id="Container">
    <!-- Left Container Part Start Here -->
    <div class="LeftContaner">
      <div class="LeftList">
        <h4><a href="destinations/destinations.html">TRAVEL Destinations</a></h4>
        <ul>
          <li><a href="destinations/africa.html" title="Africa">Africa</a></li>
          <li><a href="destinations/middle-east-north-africa.html" title="Middle East &amp; North Africa">Middle East &amp; North Africa</a></li>
          <li><a href="destinations/europe.html" title="Europe" >Europe</a></li>
		  <li><a href="destinations/australasia.html" title="Australasia" >Australasia</a></li>
          <li><a href="destinations/theorient.html" title="The Orient" >The Orient</a></li>
          <li><a href="destinations/south-america.html" title="South America" >South America</a></li>
          <li><a href="destinations/north-america.html" title="North America">North America</a></li>
          <li><a href="destinations/central-america.html"  title="Central America">Central America</a></li>
          <li><a href="destinations/beach-island-escapes.html" title="Beach &amp; Island Escapes" >Beach &amp; Island Escapes</a></li>
		  <li><a href="destinations/antartica.html" title="Antarctica">Antarctica</a></li>
          <li><a href="#" title="Arctic" class="cursorauto">Arctic</a></li>
        </ul>
        <h4>CHOOSE YOUR STYLE</h4>
        <ul>
          <li><a href="journeystyles/private-journeys.html" title="Private Journeys">Private Journeys</a></li>
          <li><a href="journeystyles/extreme-adventures.html" title="Extreme Adventures">Extreme Adventures</a></li>
          <li><a href="journeystyles/small-ship-cruiesing.html" title="Small Ship Cruising">Small Ship Cruising</a></li>
          <li><a href="journeystyles/Luxury-rail-journey.html" title="Luxury Rail Journeys">Luxury Rail Journeys</a></li>
          <li><a href="journeystyles/famity-holday.html" title="Family Holidays">Family Holidays</a></li>
          <li><a href="journeystyles/rest-revive.html" title="Rest &amp; Revive">Rest &amp; Revive</a></li>
          <li><a href="journeystyles/celebration.html" title="Celebrations">Celebrations</a></li>
          <li><a href="journeystyles/special-interst-groups.html" title="Special Interest Groups">Special Interest Groups</a></li>
          <li><a href="journeystyles/private-mob-copm.html" title="Private Mobile Camping">Private Mobile Camping</a></li>
          <li><a href="journeystyles/ak-villas.html" title="A&amp;K Villas">A&amp;K Villas</a></li>
          <li><a href="journeystyles/sanctuary-retreats.html" title="Sanctuary Retreats">Sanctuary Retreats</a></li>
        </ul>
      </div>
      <div class="SpecialOffer">
        <h4>A&K's iPad Travel App</h4>
        <div><img src="images/ipad-homepage.jpg" alt="Kenya Special Offer" /></div>
        <div class="Txt">
        <p><strong>The World of A&K for iPad®</strong></p>
          <ul>
          <li><img src="images/bullet.gif" alt="bullet" />  Explore 26 A&K destinations through &nbsp;&nbsp;&nbsp;photos and video</li>
          <li><img src="images/bullet.gif" alt="bullet" />  Share through Facebook and Twitter </li>
          <li><img src="images/bullet.gif" alt="bullet" />  Send beautiful electronic postcards </li>
          <li><img src="images/bullet.gif" alt="bullet" />  Create your own customized travel &nbsp;&nbsp;&nbsp;map </li>
          <li><img src="images/bullet.gif" alt="bullet" />  Available FREE from the App Store <sup>SM</sup> </li>
          </ul>
          <div class="More2">
            <a href="http://www.abercrombiekent.com/ipad-travel-apps/" target="_blank"><img src="images/learn-more.jpg" alt="learn more"/> Learn more</a>
          <a href="http://itunes.apple.com/us/app/world-of-a-k/id449045086?mt=8" target="_blank"> <img src="images/download.jpg" alt="download" />Download</a>
        
          </div>
        </div>
      </div>
      <div style="margin:25px 0 15px 0;"><a href="http://www.facebook.com/AbercrombieKent?ref=hl" target="_blank"><img src="images/follow-us-facebook.gif" alt="facebook" width="102" height="31" border="0" /></a> <a href="https://twitter.com/AKTravel_IN" target="_blank"><img src="images/follow-us-twitter.gif" alt="twitter" width="102" height="31" border="0"/></a></div>
      
      <?php include('brochure_left.html'); ?>
    </div>
    <!-- Left Container Part End Here -->
    <!-- Center Container Part Start Here -->
    <div class="CenterContaner">
      <h1>Luxury Holidays by Abercrombie &amp; Kent</h1>
      <p>Experience a unique, personalized service from the world's leading authority on luxury and experiential travel. Abercrombie &amp; Kent has been perfecting the art of tailor-made travel for nearly 50 years.<br /><br />
        Travel the World with Abercrombie &amp; Kent on one of our inspiring journeys, customized to your individual interests and needs.<br /><br />
        We are pioneers in experiential luxury holidays since 1962 with a network of 60 offices in 32 countries. Our expertise extends to every aspect of a journey not only in luxury but also in culture, wildlife and history, whatever your passion Abercrombie &amp; Kent guarantees a trip of a lifetime.</p>
      <div class="More"><a href="luxury-holidays.html">Read more ...</a></div>
      <div class="NewsBox">
        <ul>
          <li>
            <h2>A&amp;K NEWS</h2>
			<h2>KENYA</h2>
            <h3>A&amp;K wins more awards</h3>
            <div class="NewsImg"><img src="images/news-img.jpg" alt="News" /></div>
            <div class="NewsContent">We are proud and honoured that Abercrombie &amp; Kent has been recognised as "Best Tour Operator - Africa" by the readers of Recommend.... for the 12th consecutive year!!  Travel professionals have once again recognised the strong teamwork that sets A&K apart.
              <div class="More"><a href="destinations/africa-news.html?id=1">Read more...</a></div>
            </div>
            <div class="Clr"></div>
          </li>
          <li>
            <h2>BOTSWANA</h2>
            <h3>Special ideas in Seven Countries</h3>
            <div class="NewsImg"><img src="images/news-img1.jpg" alt="News" /></div>
            <div class="NewsContent">Summer is a special time in Africa. It is the time when there is a kaleidoscope of colour with rich landscapes, an explosion of new life with many species giving birth to their young and a myriad bird species to be seen.
            <div class="More"><a href="destinations/africa-news.html?id=9">Read more...</a></div>
            </div>
            <div class="Clr"></div>
          </li>
          <li>
            <h2>SOUTH AFRICA</h2>
            <h3>Johannesburg home converted into a Museum Guesthouse</h3>
            <div class="NewsImg"><img src="images/news-img3.jpg" alt="News" /></div>
            <div class="NewsContent">Mahatma Gandhi's historic Johannesburg home has been transformed into a museum guesthouse by French company, Voyageurs du Monde, who bought the property two years ago as an investment in 'liberation tourism'.
              <div class="More"><a href="destinations/africa-news.html?id=6">Read more...</a></div>
            </div>
            <div class="Clr"></div>
          </li>
          <li>
            <h2>TANZANIA</h2>
            <h3>Movenpick Royal Palm Hotel now under Serena group</h3>
            <div class="NewsImg"><img src="images/movenpick-pic.jpg" alt="News" /></div>
            <div class="NewsContent">
            The Serena chain will soon be increasing its presence in Tanzania with the acquisition of the Movenpick Royal Palm Hotel in Dar es Salaam. The 230-room facility will soon be operating under the brand name Dar es Salaam Serena Hotel. 
             <div class="More"><a href="destinations/africa-news.html?id=2">Read more...</a></div>
            </div>
            <div class="Clr"></div>
          </li>
          <li>
            <h2> Zambia </h2>
            <h3>New look for Chongwe River Camp</h3>
            <div class="NewsImg"><img src="images/news-img5.jpg" alt="News" width="130" /></div>
            <div class="NewsContent">
           Set beneath a canopy of winterthorns at the confluence of the Zambezi and Chongwe rivers, this award-winning camp combines the best of everything, from first-class service and luxurious accommodation to exceptional game viewing and enlightening cultural experiences.
             <div class="More"><a href="destinations/africa-news.html?id=8">Read more...</a></div>
            </div>
            <div class="Clr"></div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Center Container Part End Here -->
    <!-- Right Container Part Start Here -->
    <div class="RightContaner">
      <div class="RightIcons">
	  <?php include('share.html'); ?>
	  
	  </div>
      <div class="NewsletterBox">
         <?php include('newsletterform.html'); ?>
      </div>
      <div align="center" style="margin:15px 0; "><img src="newsletter/world-travel.jpg" alt="Go Now" /></div>
      
      
      <h2>SPECIAL OFFERS</h2>
      <div class="SpecialOffer">
        <h4>Kenya</h4>
        <div><img src="images/kenya-special-offers.jpg" alt="Kenya Special Offer" /></div>
        <div class="Txt">
          <h3>Get one night absolutely free at Ol Donyo Lodge</h3>
          <p>Pay for two nights and get the third ABSOLUTELY FREE at the Ol Donyo Lodge.  The offer is full-board  activities including viewing the wildlife, game walks, star beds, horse riding and mountain biking.</p>
          <div class="More"><a href="destinations/africa-kenya-special-offers.html">Read more</a></div>
        </div>
      </div>
      <div class="SpecialOffer">
        <h4>Tanzania</h4>
        <div><img src="images/tanzania-special-offers.jpg" alt="Tanzania Special Offer" /></div>
        <div class="Txt">
          <h3>Enjoy One Night Free at Sanctuary Kusini for 2012!</h3>
          <p>Save up to US$1000 on this wonderful Northern Tanzania package offer.<br />
            On day one - Arrival at the Kilimanjaro International Airport and transfer to Arusha, overnight at Arusha Coffee Lodge.</p>
          <div class="More"><a href="destinations/africa-tanzania-special-offers.html">Read more</a></div>
        </div>
      </div>
      <div class="SpecialOffer">
        <h4>Rest of Europe</h4>
        <div><img src="images/europe-special-offers.jpg" alt="Rest of Europe Special Offer" /></div>
        <div class="Txt">
          <h3>Complimentary Nights at the Starwood Hotels in Greece</h3>
          <p>If you are anything like me, you will be unable to resist dreaming of warmer and sunnier climates during the dark nights and the cold temperatures of January.</p>
          <div class="More"><a href="destinations/rest-europe-offers.html">Read more</a></div>
        </div>
      </div>
      <a href="destinations/special-offers.html" class="LinkTab">See All</a> </div>
    <!-- Right Container Part End Here -->
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
</script>
</div>
</body>
</html>