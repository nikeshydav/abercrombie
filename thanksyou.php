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
$to = 'privatetravel@abercrombiekent.co.in,GAjmani@abercrombiekent.co.in';
$subject = "Mail from Abercrombiekent's Home Page Enquiry Form ";
$message = 'Name : '.$name.'
Email : '.$email.'
Phone : '.$phone.'
Query : '.$query.'
Thanks,
'.$name;
$headers = "From: ".$name;
$flgSend = @mail($to, $subject, $message, $headers);
if($flgSend){
	echo "<div class='thank1'><h1 style='text-transform:none'> Thank you for showing interest in our Travel Services. Our destination experts will contact you at the earliest possible.<br> For any urgent travel query call 91 011 46001647 ! </h1></div>";
}else{
	echo "Mail Not Send";
}
