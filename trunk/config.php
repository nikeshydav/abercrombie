<?php
session_start();
//ini_set("display_errors",1);
//error_reporting(E_ALL);
//echo $app_rootpath = getcwd();
//exit;
$serAddress = array();
$serAddress[]	=	'localhost';	
if(in_array($_SERVER['HTTP_HOST'],$serAddress)):
define('APP_ROOT_URL', "http://".$_SERVER['HTTP_HOST']."/Abercrombie/");
else:
define('APP_ROOT_URL', "http://".$_SERVER['HTTP_HOST']."/");
define('APP_ROOT_PATH', "kunden/homepages/8/d378514179/htdocs/akindia/");
endif;



define('SITE_NAME',  "Abercrombie"); 
define('ADMIN_TO_EMAIL',  "privatetravel@abercrombiekent.co.in"); 
$month_array = array(1=>"Jan",2=>"Feb",3=>"Mar",
                     4=>"Apr",5=>"May",6=>"Jun",
					 7=>"Jul",8=>"Aug",9=>"Sep",
					 10=>"Oct",11=>"Nov",12=>"Dec");

$year_array = array(1=>"2011",2=>"2012",3=>"2013");

$country_list = '<option value="ANDORRA">ANDORRA</option>
				<option value="AUSTRALIA">AUSTRALIA</option>
				<option value="AUSTRIA">AUSTRIA</option>
	    	    <option value="BELARUS">BELARUS</option>
				<option value="BELGIUM">BELGIUM</option>
				<option value="BOSNIA AND HERZEGOVINA">BOSNIA AND HERZEGOVINA</option>
				<option value="BULGARIA">BULGARIA</option>
				<option value="CANADA">CANADA</option>
				<option value="CROATIA">CROATIA</option>
				<option value="CYPRUS">CYPRUS</option>
				<option value="CZECH REPUBLIC">CZECH REPUBLIC</option>
				<option value="DENMARK">DENMARK</option>
				<option value="FAROE ISLANDS">FAROE ISLANDS</option>
				<option value="FINLAND">FINLAND</option>
				<option value="FRANCE">FRANCE</option>
				<option value="GERMANY">GERMANY</option>
				<option value="GIBRALTAR">GIBRALTAR</option>
				<option value="GREECE">GREECE</option>
				<option value="GREENLAND">GREENLAND</option>
				<option value="GUERNSEY">GUERNSEY</option>
				<option value="HOLY SEE (VATICAN CITY STATE)">HOLY SEE (VATICAN CITY STATE)</option>
				<option value="HONG KONG">HONG KONG</option>
				<option value="HUNGARY">HUNGARY</option>
				<option value="ICELAND">ICELAND</option>
				<option value="INDIA" selected>INDIA</option>
				<option value="IRELAND">IRELAND</option>
				<option value="ISLE OF MAN">ISLE OF MAN</option>
				<option value="ISRAEL">ISRAEL</option>
				<option value="ITALY">ITALY</option>
				<option value="JERSEY">JERSEY</option>
				<option value="LATVIA">LATVIA</option>
				<option value="LEBANON">LEBANON</option>
				<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
				<option value="LITHUANIA">LITHUANIA</option>
				<option value="LUXEMBOURG">LUXEMBOURG</option>
				<option value="MACEDONIA, FRM YUGOSLAV REP OF">MACEDONIA, FRM YUGOSLAV REP OF</option>
				<option value="MALTA">MALTA</option>
				<option value="MEXICO">MEXICO</option>
				<option value="MONACO">MONACO</option>
				<option value="MONTENEGRO">MONTENEGRO</option>
				<option value="MONTSERRAT">MONTSERRAT</option>
				<option value="NETHERLANDS">NETHERLANDS</option>
				<option value="POLAND">POLAND</option>
				<option value="PORTUGAL">PORTUGAL</option>
				<option value="ROMANIA">ROMANIA</option>
				<option value="RUSSIA">RUSSIA</option>
				<option value="SAN MARINO">SAN MARINO</option>
				<option value="SERBIA">SERBIA</option>
				<option value="SINGAPORE">SINGAPORE</option>
				<option value="SOUTH AFRICA">SOUTH AFRICA</option>
				<option value="SPAIN">SPAIN</option>
				<option value="SWEDEN">SWEDEN</option>
				<option value="SWITZERLAND">SWITZERLAND</option>
				<option value="TURKEY">TURKEY</option>
				<option value="UNITED KINGDOM">UNITED KINGDOM</option>
				<option value="UNITED STATES">UNITED STATES</option>
				<option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>';
				
$yes_no_list = '<option value="Yes"> Yes </option>
				<option value="Yes"> No </option>';
				
$title_list = '<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Ms">Ms</option>
				<option value="Miss">Miss</option>
	
				<option value="Dr">Dr</option>
				<option value="Professor">Professor</option>
				<option value="Sir">Sir</option>
				<option value="Lord">Lord</option>
				<option value="Lady">Lady</option>
				<option value="Captain">Captain</option>';	
				
$how_hear_about_list = '<optgroup label="A&amp;K communications" style="font-style: normal;">
				<option value="A&amp;K Magazine">&nbsp;&nbsp; A&amp;K Magazine</option>
				
				<option value="E-news (Escapology)">&nbsp;&nbsp; E-news (Escapology)</option>
				<option value="E-mail">&nbsp;&nbsp; E-mail</option>
				<option value="Direct Mail">&nbsp;&nbsp; Direct Mail</option>
				</optgroup>
				<optgroup label="A&amp;K brand reputation" style="font-style: normal;">
				<option value="Recommendation">&nbsp;&nbsp; Recommendation</option>
				<option value="Word of Mouth">&nbsp;&nbsp; Word of Mouth</option>
				
				<option value="Reputation">&nbsp;&nbsp; Reputation</option>
				<option value="Online review forum">&nbsp;&nbsp; Online review forum</option>
				</optgroup>
				<optgroup label="Repeat Client" style="font-style: normal;">
				<option value="Repeat Client">&nbsp;&nbsp; Repeat Client</option>
				</optgroup>
				<optgroup label="Magazine (Lifestyle)" style="font-style: normal;">
				<option value="Tatler">&nbsp;&nbsp; Tatler</option>
				<option value="House &amp; Garden">&nbsp;&nbsp; House &amp; Garden</option>
				
				<option value="Country Living">&nbsp;&nbsp; Country Living</option>
				<option value="Harpers Bazaar">&nbsp;&nbsp; Harpers Bazaar</option>
				<option value="FT How to Spend It">&nbsp;&nbsp; FT How to Spend It</option>
				<option value="Vanity Fair">&nbsp;&nbsp; Vanity Fair</option>
				</optgroup>
				<optgroup label="Magazine (Travel)" style="font-style: normal;">
				<option value="Sunday Times Travel Magazine">&nbsp;&nbsp; Sunday Times Travel Magazine</option>
				
				<option value="Conde Nast Traveller">&nbsp;&nbsp; Conde Nast Traveller</option>
				<option value="Ultra Travel Magazine (Telegraph)">&nbsp;&nbsp; Ultra Travel Magazine (Telegraph)</option>
				<option value="Wanderlust">&nbsp;&nbsp; Wanderlust</option>
				</optgroup>
				<optgroup label="Magazine (Bridal)" style="font-style: normal;">
				<option value="Brides">&nbsp;&nbsp; Brides</option>
				<option value="You &amp; Your Wedding">&nbsp;&nbsp; You &amp; Your Wedding</option>
				
				</optgroup>
				<optgroup label="Magazine (Financial)" style="font-style: normal;">
				<option value="Brummell">&nbsp;&nbsp; Brummell</option>
				<option value="Square Mile">&nbsp;&nbsp; Square Mile</option>
				<option value="Hedge">&nbsp;&nbsp; Hedge</option>
				</optgroup>
				<optgroup label="Newspaper" style="font-style: normal;">
				<option value="Times">&nbsp;&nbsp; Times</option>
				<option value="Telegraph">&nbsp;&nbsp; Telegraph</option>
				
				<option value="Sunday Times">&nbsp;&nbsp; Sunday Times</option>
				<option value="Sunday Telegraph">&nbsp;&nbsp; Sunday Telegraph</option>
				<option value="The Week">&nbsp;&nbsp; The Week</option>
				<option value="Daily Mail">&nbsp;&nbsp; Daily Mail</option>
				<option value="Mail on Sunday">&nbsp;&nbsp; Mail on Sunday</option>
				<option value="Financial Times">&nbsp;&nbsp; Financial Times</option>
				
				</optgroup>
				<optgroup label="Event" style="font-style: normal;">
				<option value="Cricket Festival">&nbsp;&nbsp; Cricket Festival</option>
				<option value="A&amp;K Balloon">&nbsp;&nbsp; A&amp;K Balloon</option>
				<option value="Luxury Travel Fair">&nbsp;&nbsp; Luxury Travel Fair</option>
				<option value="Antarctica">&nbsp;&nbsp; Antarctica</option>
				<option value="Jane Goodall">&nbsp;&nbsp; Jane Goodall</option>
				
				</optgroup>
				<optgroup label="Online" style="font-style: normal;">
				<option value="Google">&nbsp;&nbsp; Google</option>
				<option value="Yahoo!">&nbsp;&nbsp; Yahoo!</option>
				<option value="Bing">&nbsp;&nbsp; Bing</option>
				<option value="CNTraveller.com">&nbsp;&nbsp; CNTraveller.com</option>
				<option value="Twitter">&nbsp;&nbsp; Twitter</option>
				
				<option value="Facebook">&nbsp;&nbsp; Facebook</option>
				</optgroup>';				
	?>