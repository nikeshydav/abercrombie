<?php 
session_start();

	if(strtolower($_SESSION['sec_code']) == strtolower($_GET['val']))
	{
		echo "1";
	}
	else
	{
		echo "0";
	}

?>