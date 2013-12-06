<style>
.thank1{width: 275px; margin: 34px 0px 0px 30px;  font-size:17px; font-family: 'FolksRegular';}
</style>
<?php
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $query=$_POST['query'];
$to =  'manish@dakshsoftwares.in';
$subject = 'Mail from Abercrombiekent';
$message = 'Name : '.$name.'
Email : '.$email.'
Phone : '.$phone.'
Query : '.$query.'
Thanks,
'.$name;
$headers = "From: $name";
$flgSend = @mail($to, $subject, $message, $headers);
if($flgSend){
	echo "<div class='thank1'><p>Thank you for showing your interest. Our advisors will revert you shortly</p></div>";
}else{
	echo "";
}
