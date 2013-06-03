<script type="text/javascript">
function checkcode2_<?php echo $id;?>(valuecode)
 {
  
	var  dataString = 'val='+valuecode;
	
	$.ajax({
		type: "GET",
		url: "<?php echo APP_ROOT_URL; ?>checkcode.php",
		data: dataString,
		cache: true,
		success: function(value)
			{  
				if(value==0){
					$("#s_code3_<?php echo $id;?>").val(value);	
					$("#security_code_<?php echo $id;?>").focus();
					return false;
				} else {
				    $("#s_code3_<?php echo $id;?>").val(value);
				    return false;
				}
				
			}
		});
 }
 
function new_captcha_<?php echo $id;?>()
{
var c_currentTime = new Date();
var c_miliseconds = c_currentTime.getTime();
document.getElementById('captcha_<?php echo $id;?>').src = '<?php echo APP_ROOT_URL; ?>image.php?x='+ c_miliseconds;
$("#s_code3_<?php echo $id;?>").val(0);
}
</script>

<ul class="jobmainsec">
          <li>
		  <dl>
            <dt><strong>*</strong> Recipient's email</dt>
            <dd>
             <input type="text" class="inptxt" name="email_send_itinerary" id="email_send_itinerary" onBlur="changeBorder(this);" maxlength="64"/>
               </dd>
          </dl>
		  <dl>
            <dt><strong>*</strong> Sender's email</dt>
            <dd>
             <input type="text" class="inptxt" name="sender_email" id="sender_email" onBlur="changeBorder(this);" maxlength="64"/>
               </dd>
          </dl>
          
		  <dl>
            <dt><strong>*</strong> Subject<br />
            </dt>
            <dd>
              <input type="text" class="inptxt" name="subject_send_itinerary" id="subject_send_itinerary" maxlength="32" onBlur="changeBorder(this);"/></dd>
          </dl>
		  <dl>
            <dt><strong>*</strong> Message<br />
            </dt>
            <dd>
              <textarea class="txtarea" rows="" cols="" name="msg_send_itinerary" id="msg_send_itinerary" onBlur="changeBorder(this);" maxlength="200"></textarea>
			  </dd>
          </dl>
		   <dl>
				<dt>Security Code</dt>
				<dd>
				<img border="0" class="Border" id="captcha_<?php echo $id;?>" src="<?php echo APP_ROOT_URL; ?>image.php" alt="" /> &nbsp;<a href="JavaScript: new_captcha_<?php echo $id;?>();" style="text-decoration:none"><img border="0" alt="" src="<?php echo APP_ROOT_URL; ?>refresh.png" align="bottom" /></a><br>
				<input type="text" name="security_code_<?php echo $id;?>" id="security_code_<?php echo $id;?>"   class="inptxtsml mleft10" onKeyUp="javascript:return checkcode2_<?php echo $id;?>(this.value);" />
				<input type="hidden" name="s_code3_<?php echo $id;?>" id="s_code3_<?php echo $id;?>" value="" />
				<span class="errormsg" id="err_security_code_<?php echo $id;?>"></span>
				<!--<img src="images/capcha.gif" alt="Capcha" class="Left" /><input type="text" class="inptxtsml mleft10" />-->
				</dd>
				</dl>
		  
		  <dl class="top20">
		  <dt>&nbsp;</dt>
		  <dd>
		<span class="Left">
		<input type="hidden" name="submit" value="1">
		<input type="image" src="../images/send-button.gif"   />
		</span></dd>
		</dl>
		  </li>           
      </ul>