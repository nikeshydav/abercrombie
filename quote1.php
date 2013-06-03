<script type="text/javascript">
function checkcode3_<?php echo $id;?>(valuecode)
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
					$("#s_code5_<?php echo $id;?>").val(value);	
					$("#security_codeq_<?php echo $id;?>").focus();
					return false;
				} else {
				    $("#s_code5_<?php echo $id;?>").val(value);
				    return false;
				}
				
			}
		});
 }
 
function new_captcha6_<?php echo $id;?>()
{
var c_currentTime = new Date();
var c_miliseconds = c_currentTime.getTime();

document.getElementById('captcha6_<?php echo $id;?>').src = '<?php echo APP_ROOT_URL; ?>image.php?x='+ c_miliseconds;
$("#s_code5_<?php echo $id;?>").val(0);
}
</script>
<ul class="jobmainsec">

<li>

<h2>About you</h2>
</li>
          <li>
		  <dl>
            <dt>Name</dt>
            <dd>
             <input type="text" class="inptxt" name="quote_name" id="quote_name" onBlur="changeBorder(this);" maxlength="32"/>
			
               </dd>
          </dl>
          <dl>
            <dt>Email id</dt>
            <dd>
              <input type="text" class="inptxt" name="quote_email" id="quote_email" onBlur="changeBorder(this);" maxlength="62"/></dd>
          </dl>
		  <dl>
            <dt>Country of residence</dt>
            <dd>
              <select class="selectmenu-b" name="quote_residence" id="quote_residence" onChange="changeBorder(this);">
				 <option value="">Select country</option>
				<?php echo $country_list;?>
              </select>
              </select></dd>
          </dl>
		  <dl>
            <dt>Telephone</dt>
            <dd>
              <input type="text" class="inptxt" name="quote_phone" id="quote_phone" onBlur="changeBorder(this);" maxlength="15" />
			  </dd>
          </dl>
		  
			<br />
		   		<h2>About your request</h2> 
		  <dl>
            <dt>Number of adults</dt>
            <dd>
              <input type="text" class="inptxt" name="quote_adult" id="quote_adult" onBlur="changeBorder(this);" maxlength="3"/></dd>
          </dl>
		  
		  
		  <dl>
            <dt>Date of travel</dt>
            <dd>
              <input type="text" class="inptxt"  name="quote_date_travel" id="quote_date_travel" onBlur="changeBorder(this);" maxlength="32"/><br />Valid Date format (dd/mm/yyyy)</dd>
          </dl>
		  <dl>
            <dt>Other requirements</dt>
            <dd>
              <textarea class="txtarea" rows="" cols=""  name="quote_requirements" id="quote_requirements" maxlength="100" onBlur="changeBorder(this);"></textarea></dd>
          </dl>
		  
		  
		  <dl class="top20">
		  <dt>&nbsp;</dt>
		  <dd>
		 
		<span class="Left">
		<input type="hidden" name="submit" value="1">
		<input type="image" src="../images/submit-button.gif" onclick="_gaq.push(['_trackEvent', 'honemoon_quote', 'request_h', 'abercrombiekent_hquote']);"/>
		</span></dd>
		</dl>
		  </li>           
      </ul>
	
