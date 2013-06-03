<?php
$file1 = 'pdf/booking-form-AK.pdf';

if (file_exists($file1)) {
   	$file='booking-form-AK.pdf';
			$filename = $_SERVER['DOCUMENT_ROOT'] . "/pdf/$file";
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header('Content-disposition: attachment; filename='.basename($filename));
			header("Content-Type: application/pdf");
			header("Content-Transfer-Encoding: binary");
			header('Content-Length: '. filesize($filename));
			readfile($filename);
			exit;
}
?>
