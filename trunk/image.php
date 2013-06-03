<?php
session_start(); // captcha class uses session to hold captcha security code 
include "captcha.php"; 

$cap = new Captcha(); // instantiate Captcha class

/* then, customize captcha image if required */
$cap->setBGColor(232,232,232);  // sets background color of image
$cap->setTextColor(1,63,114); // sets the text color
$cap->setSize(100,29); // sets the image size. 
/* all the above methods are optional */

$cap->showImage(); // outputs captcha image.


?>