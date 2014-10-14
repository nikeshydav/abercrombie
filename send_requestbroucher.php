<?php
include("config.php");
include("classes/mimemail.class.php");
$content = '';
ini_set("display_errors",0);
error_reporting(0);

        if($_POST)
        {
		$fromEmail 		=$_REQUEST['email'];

		$to 			=  $email;
		$subject	 	= 'Abercrombie - Request a Brochure - '.$_REQUEST['requestbrochure'];
		
		//ob_end_clean();
		ob_start();
		//$body = $content;
		include("bypost_email.php");
		include(APP_ROOT_PATH.'bypost_email.php');
		$body = ob_get_contents();
		$headers = '';
		ob_end_clean();
		
		// MAIL TO USER 
		$objMail = new Mimemail();
		$objMail->set_To('privatetravel@abercrombiekent.co.in');
		$objMail->set_Bcc('ptsales@abercrombiekent.co.in,ankenquiries@gmail.com,powerfunction@gmail.com');
		$objMail->set_Cc('IJubbal@abercrombiekent.co.in');
		$objMail->set_From($fromEmail);
		$objMail->set_Subject($subject); 
		$objMail->set_Body($body);
		$objMail->set_Headers($headers);
		if($objMail->send()){
			   if($_POST['downloadpdf']=='pdf')
			   {
					if($_POST['requestbrochure2']=='Concept Brochure')
					{
					   // header('location:'.APP_ROOT_URL.'pdf/AKConcept-Brochure.pdf');
						//exit;
	          ?>
							<script type="text/javascript">
							// PopupCenter('<?php echo APP_ROOT_URL?>pdf/AKConcept-Brochure.pdf',"pdf",600,900);
							window.location.href="<?php echo APP_ROOT_URL?>pdf/AKConcept-Brochure.pdf";
							//alert(app.Name);
							//window.open("<?php echo APP_ROOT_URL?>pdf/AKConcept-Brochure.pdf");
							</script>
				<?php
			
				
				}
				if($_POST['requestbrochure2']=='Worldwide Brochure')
				{
				  //header('location:'.APP_ROOT_URL.'pdf/AK-Worldwide-Brochure.pdf');
				  //exit;
				?>
						<script type="text/javascript">
					window.location.href="<?php echo APP_ROOT_URL?>pdf/AK-Worldwide-Brochure.pdf";
					 //return PopupCenter('<?php echo APP_ROOT_URL?>pdf/AK-Worldwide-Brochure.pdf',"pdf",600,900);
					 //window.open("<?php echo APP_ROOT_URL?>pdf/AK-Worldwide-Brochure.pdf");
					</script>
			<?php
			
			}
			}
			else
			{
			header("location:http://www.abercrombiekent.co.in/thanks_broucher.html");
			exit;
			}
			}
			unset($objMail); 
			
			}		
			
			?>