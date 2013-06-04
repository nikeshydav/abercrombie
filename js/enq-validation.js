function isValidURL(url_name){    	// URL Validation
	var url_format=/[A-Za-z0-9\.-]{3,}\.[A-Za-z]{3}/;
	return url_format.test(url_name);
}
	
// Alpha Numeric Validation
function isAlphaNumeric(str){	// Returns true if string only contains characters A-Z, a-z or 0-9
  var re = /[^a-zA-Z0-9]/g
  return (re.test(str));
}

function isNumeric(str){ //Numeric Validation
  var re = /[\D]/g
  return (re.test(str));
}

function isWhiteSpaceOnly(str){	// Cannot check a password type input for whitespace
  var re = /[\S]/g
  return (re.test(str))
}

//illegal characters
function isIllegalChars(strng){
	var illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/;
	return (strng.match(illegalChars));
}

//Phone Validation
function isValidPhoneNo(strng){
//strip out acceptable non-numeric characters
	var stripped = strng.replace(/[\(\)\.\+\-\ ]/g, '');
	return !isNaN(stripped);
}

function isValidName(Name){
	var pattern = /[^a-zA-Z'\s.]+/;
	if(pattern.test(Name)){
		return false;
	}else{
		return true;
	}
}
 function check_enq_frm(){ 
 
	var message                  = "Required field";
	var type_of_holiday          = $("#type_of_holiday").val();  
	var like_to_go               = $("#like_to_go").val(); 
	var like_to_go_day           = $("#like_to_go_day").val(); 
	var like_to_go_month         = $("#like_to_go_month").val(); 
	var like_to_go_year          = $("#like_to_go_year").val(); 
	var how_long_holiday         = $("#how_long_holiday").val(); 
	var travelled_country_before = $("#travelled_country_before").val();
	 var title                    = $("#title").val();
	 var first_name               = $("#first_name").val();
	 var sur_name                 = $("#sur_name").val();
	 var email                    = $("#email").val();
	 var cnf_email                = $("#cnf_email").val();
	 var telephone                = $("#telephone").val();
	 var address1                 = $("#address1").val();
	 var town_city                = $("#town_city").val();
	 var country                  = $("#country").val();
	 var post_code                = $("#post_code").val();
	 var have_travelled_before    = $("#have_travelled_before").val();
	 var how_hear_about           = $("#how_hear_about").val();
	 var regEmail = new RegExp(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/);
	 
	 
	 if($.trim(type_of_holiday) == ''){
	      $("#span_type_of_holiday").html(message);
		  $("#type_of_holiday").focus();
		     return false;
	 } else { $("#span_type_of_holiday").html(''); }
	 if($.trim(type_of_holiday) != '')
	 {
			if(!isValidName(type_of_holiday)){
			$("#span_type_of_holiday").html('Please Enter Only Alphabet only');
			$("#type_of_holiday").focus();
			  return false;
			}
			else { $("#span_type_of_holiday").html(''); }
	 } 
	
	 if($.trim(like_to_go) == ''){
	      $("#span_like_to_go").html(message);
		  $("#like_to_go").focus();
		  return false;
	 } else { $("#span_like_to_go").html('');}
	 if($.trim(like_to_go) != '')
	 {
			if(!isValidName(like_to_go)){
			$("#span_like_to_go").html('Please Enter Only Alphabet only');
			$("#like_to_go").focus();
			  return false;
			}
			else { $("#span_like_to_go").html(''); }
	 } 
	 if($.trim(like_to_go_day) == ''){
	      $("#span_to_go_date").html('Please enter valid date');
		  $("#like_to_go_day").focus();
		  return false;
	 } else { $("#span_to_go_date").html('');}
	 
	if($.trim(like_to_go_month) == ''){
	      $("#span_to_go_date").html('Please enter valid date');
		  $("#like_to_go_month").focus();
		  return false;
	 } else { $("#span_to_go_date").html('');}
	 
	 if($.trim(like_to_go_year) == ''){
	      $("#span_to_go_date").html('Please enter valid date');
		  $("#like_to_go_year").focus();
		  return false;
	 } else { $("#span_to_go_date").html('');}
	 
	  if($.trim(how_long_holiday) == ''){
	      $("#span_how_long_holiday").html(message);
		  $("#how_long_holiday").focus();
		  return false;
	 } else { $("#span_how_long_holiday").html('');}
	/* if($.trim(how_long_holiday) != '')
	 {
			if(!isAlphaNumeric(how_long_holiday)){
			$("#span_how_long_holiday").html('Please Enter Only Alphanumeric value');
			$("#how_long_holiday").focus();
			  return false;
			}
			else { $("#span_how_long_holiday").html(''); }
	 } */
	 if($.trim(travelled_country_before) == ''){
	      $("#span_travelled_country_before").html(message);
		  $("#travelled_country_before").focus();
		  return false;
	 } else { $("#span_travelled_country_before").html('');}
	 
	 if($.trim(title) == ''){
	      $("#span_title").html(message);
		  $("#title").focus();
		  return false;
	 } else { $("#span_title").html('');}
	 
	 if($.trim(first_name) == ''){
	      $("#span_first_name").html('Please Enter first name');
		  $("#first_name").focus();
		  return false;
	 } else { $("#span_first_name").html('');}
	if($.trim(first_name) != '')
	{
		if(!isValidName(first_name)){
		$("#span_first_name").html('Please Enter Only Alphabet only');
		$("#span_first_name").focus();
		  return false;
		}
		else { $("#span_first_name").html(''); }
	} 
	 if($.trim(sur_name) == ''){
	      $("#span_sur_name").html('Please Enter sur name');
		  $("#sur_name").focus();
		  return false;
	 } else { $("#span_sur_name").html('');}
	 if($.trim(sur_name) != '')
	 {
		if(!isValidName(sur_name)){
		$("#span_sur_name").html('Please Enter Only Alphabet only');
		$("#sur_name").focus();
		  return false;
		}
		else { $("#span_sur_name").html(''); }
	 } 
	 if($.trim(email) == ''){
	      $("#span_email").html(message);
		  $("#email").focus();
		  return false;
	 } else { $("#span_email").html('');}
	 
	 if($.trim(email)!=''){
		 if(!regEmail.test(email)){
			$("#span_email").html("Please enter a valid email.");
			$("#email").focus();
			return false;
		 } 	
	 }  else { $("#span_email").html('');}	
		
	 if($.trim(cnf_email) == ''){
	      $("#span_cnf_email").html(message);
		  $("#cnf_email").focus();
		  return false;
	 } else { $("#span_cnf_email").html('');}
	 
	 if($.trim(cnf_email)!=''){
		 if(!regEmail.test(cnf_email)){
			$("#span_cnf_email").html("Please enter a valid email.");
			$("#cnf_email").focus();
			return false;
		 } 	
	 }  else { $("#span_cnf_email").html('');}	
	 
	 if($.trim(cnf_email) != $.trim(email)){
	      $("#span_cnf_email").html("Please check confirm email");
		  $("#cnf_email").focus();
		  return false;
	 } else { $("#span_cnf_email").html('');}
	 
	 if($.trim(telephone) == ''){
	      $("#span_telephone").html(message);
		  $("#telephone").focus();
		  return false;
	 } else { $("#span_telephone").html('');}
	 if($.trim(telephone) != '')
	 {
			if(!isValidPhoneNo(telephone)){
			$("#span_telephone").html('Please Enter Only Number');
			$("#telephone").focus();
			  return false;
			}
			else { $("#span_telephone").html(''); }
	 } 
	 if($.trim(address1) == ''){
	      $("#span_address1").html(message);
		  $("#address1").focus();
		  return false;
	 } else { $("#span_address1").html('');}
	 
	 if($.trim(town_city) == ''){
	      $("#span_town_city").html(message);
		  $("#town_city").focus();
		  return false;
	 } else { $("#span_town_city").html('');}
	 
	 if($.trim(town_city) != '')
	 {
			if(!isValidName(town_city)){
			$("#span_town_city").html('Please Enter Only Alphabet');
			$("#town_city").focus();
			  return false;
			}
			else { $("#span_town_city").html(''); }
	 } 

	if($.trim(country) == ''){
	      $("#span_country").html(message);
		  $("#country").focus();
		  return false;
	 } else { $("#span_country").html('');}
	
	 if($.trim(post_code) == ''){
	      $("#span_post_code").html(message);
		  $("#post_code").focus();
		  return false;
	 } else { $("#span_post_code").html('');}
	 
	 if($.trim(have_travelled_before) == ''){
	      $("#span_have_travelled_before").html(message);
		  $("#have_travelled_before").focus();
		  return false;
	 } else { $("#span_have_travelled_before").html('');}
	 
	 if($.trim(how_hear_about) == ''){
	      $("#span_how_hear_about").html(message);
		  $("#how_hear_about").focus();
		  return false;
	 } else { $("#span_how_hear_about").html('');}
  }