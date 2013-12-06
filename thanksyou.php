<style>
.thank1 {
    font-family: 'FolksRegular';
    font-size: 17px;
    margin: 10px 0 0 14px;
    width: 184px;
}
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
	echo "<div class='thank1'><h1>Thank you for showing your interest. Our advisors will revert you shortly</h1></div>";
}else{
	echo "Mail Not Send";
}
