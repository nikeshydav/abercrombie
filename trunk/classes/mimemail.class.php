<?php

/*
************************************************************
Author		: Shailendra
Purpose		: To handle all mail operation
Organization: Olive E-Business Pvt. Ltd
Created On	: 19/Jul/2011
Modified By	: Shailendra
Modified On	: 19/Jul/2011

****************************************************************
*/ 

class mimemail {

	var $parts;
	var $to;
	var $from;
	var $headers;
	var $subject;
	var $body;
	var $bcc;
	
	 /*
	 *     void mime_mail()
	 *     class constructor
	 */
	
	function mime_mail() {
		$this->parts = array();
		$this->to =  "";
		$this->from =  "";
		$this->subject =  "";
		$this->body =  "";
		$this->headers =  "";
		$this->bcc = "";
		$this->cc = "";
	}
	/*
		set methods 
	*/
		function set_To($tmpTo)	{
			$this->to=$tmpTo;
		}
		
		function set_From($tmpFrom) 	{	
			$this->from=$tmpFrom;
		}
		
		function set_Cc($tmpCc) {
			$this->cc = $tmpCc;
		}
		
		function set_Bcc($tmpBcc) {
			$this->bcc = $tmpBcc;
		}
		
		function set_Subject($tmpSubject) {
			$this->subject=$tmpSubject;
		}
		
		function set_Body($tmpBody)	{
			$this->body=$tmpBody;
		}
		
		function set_Headers($tmpHeaders)	{
			$this->headers=$tmpHeaders;
		}
		
		function set_Parts($tmpParts) {
			$this->parts=$tmpParts;
		}

	
	function send() {

		$headers  = 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

	   // @define('ADMIN_BCC1','shailendra@oliveinternet.com');
		// Additional headers
		$headers .= 'From:'.$this->from."\n";
		//$headers .= 'Cc: ' .$this->cc. "\n";
		//$headers .= 'Bcc: ' .ADMIN_BCC1. "\n";
		$headers .= 'Bcc: '.$this->bcc."\n";

		// Mail it
		if(mail($this->to, $this->subject, $this->body, $headers))	{
			return true;
		} else {
			return false;
		}
	}
};

?>