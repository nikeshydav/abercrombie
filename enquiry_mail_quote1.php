<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Green Decowood</title>
<style type="text/css">
body{padding:0px; font-family:verdana; font-size:11px; margin:0px; padding:0px;}
h3{padding:0px;margin:0px;font-size:14px; font-weight:normal;}
.page{border:solid 2px #009900; width:665px; margin:0 auto;}
.fl{ float:left;}
.date{float:right; margin:15px; color:#000;}
img{ border:none;}
</style>
<link rel="SHORTCUT ICON" href="../favicon.ico" />
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

<div class="page">
<table align="center" cellpadding="0" cellspacing="0" width="89%">
  <tr>
    <td width="100%" colspan="2" >
	<div class="fl">
	  <a href="<?php echo APP_ROOT_URL ?>"><img src="<?php echo APP_ROOT_URL ?>images/logo.gif"  /></a>
	</div>
	<div class="date">Date: <?php echo date("F j, Y");?></div>	</td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" bgcolor="#ffffff" style="padding:15px;">
	<div align="justify">
	  <!-- <h3 style="padding:0px;margin:0px;font-size:14px; font-weight:normal;line-height:"><b>Dear</b> <?php echo $_POST['name'];?>,</h3>-->
	</div>
	<br />
	<table width="89%" border="0" cellspacing="0" cellpadding="3" style="background:#dddddd;">
      <tr>
        <td  align="left" bgcolor="#ffffff" colspan="2">
		<div style="margin-left:5px;">
		 <strong>Request a quote:<?php echo $_POST['region_quote']; ?>-><?php echo $_POST['country_quote']; ?>-><?php echo $_POST['itineraries_quote']; ?></strong>  
		</div></td>
      </tr>
      <tr height="10">
	  	<td  align="left" bgcolor="#ffffff" colspan="2">
		<table cellpadding="2" cellspacing="2" border="0" width="100%">
		
          <tr>
		  <td width="23%"><strong>Name:</strong></td>
          <td width="77%"><?php echo $_POST['quote_name']; ?></td></tr>
		  <tr><td><strong>Email:</strong></td><td><?php echo $_POST['quote_email']; ?></td></tr>
		  <tr><td><strong>Country of residence:</strong></td><td><?php echo $_POST['quote_residence']; ?></td></tr>
		  <tr><td><strong>Telephone :</strong></td><td><?php echo $_POST['quote_phone']; ?></td></tr>
		  <tr><td><strong>Number of adults :</strong></td><td><?php echo $_POST['quote_adult']; ?></td></tr>
		  
		  
		   <tr><td><strong>Date of travel :</strong></td><td><?php echo $_POST['quote_date_travel']; ?></td></tr>
		   <tr><td><strong>Other requirements :</strong></td><td><?php echo $_POST['quote_requirements']; ?></td></tr>
		  </table>
		  </td>
      </tr>
	  <tr><td bgcolor="#ffffff" colspan="2">&nbsp;</td></tr>
	  <tr height="40">
	  	<td  align="left" valign="bottom" bgcolor="#ffffff" colspan="2"><b>Regards,</b><br>
	  	  <b><?php echo SITE_NAME;?></b><br />
	  	  <a style="text-decoration:none; color:#FF0000; font-weight:bold;" href="<?php echo APP_ROOT_URL ?>"><?php echo APP_ROOT_URL ?></a></td>
      </tr>
    </table></td>
  </tr>
  
</table>

</body>
</html>