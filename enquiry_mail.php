<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Abercrombie & Kent</title>
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
		<div style="margin-left:10px;">
		 <strong>Enquiry Detail:</strong>  
		</div></td>
      </tr>
      <tr height="10">
	  	<td  align="left" bgcolor="#ffffff" colspan="2">
		<table cellpadding="2" cellspacing="2" border="0" width="100%">
          <tr><td width="23%"><strong>Name:</strong></td>
          <td width="77%"><?php echo $_POST['title']." ".$_POST['fname']." ".$_POST['sname']; ?></td></tr>
		  <tr><td><strong>Email:</strong></td><td><?php echo $_POST['email']; ?></td></tr>
		  <tr><td><strong>Telephone :</strong></td><td><?php echo $_POST['mobile']; ?></td></tr>
		  <tr><td><strong>Agency Name :</strong></td><td><?php echo $_POST['agency_name']; ?></td></tr>
		  <tr><td><strong>Address :</strong></td><td><?php echo $_POST['address']; ?></td></tr>
		  <tr><td><strong>City :</strong></td><td><?php echo $_POST['city']; ?></td></tr>
		  <tr><td><strong>Country :</strong></td><td><?php echo $_POST['country']; ?></td></tr>
		   <tr><td><strong>Pincode :</strong></td><td><?php echo $_POST['pin']; ?></td></tr>
		  </table>
		  </td>
      </tr>
	  <tr><td bgcolor="#ffffff" colspan="2">&nbsp;</td></tr>
	  
    </table></td>
  </tr>
  
</table>

</body>
</html>