function checkfield(loginform){
	if(loginform.first_name.value==""){
		alert("Please Enter Your Name.")
		loginform.first_name.focus();
		return false;
	}else if (loginform.email.value == ""){
		alert("Please Enter Email Field.");
		loginform.email.focus();
		return false;
	}else if (!isEmailAddr(loginform.email.value)){
		alert("Please Enter a Complete Email Address in the Form: yourname@yourdomain.com");
		loginform.email.focus();
		return false;
	}else if (loginform.telephone.value == ""){
		alert("Please Enter Contact Number.");
		loginform.telephone.focus();
		return false;
	}else if (loginform.address1.value == ""){
		alert("Please Enter Your Address.");
		loginform.address1.focus();
		return false;
	}else if($("#s_code").val() != '1' ){
		alert("Please Enter Your Security Code");
		loginform.security_code.focus();
		return false;
	}	
	
	
	$.ajax({
	    type: "POST",
	    url: "./sendenquiry.php",
	    cache: false,
	    asynch: true,
	    success: function(value){
		    var html ="Thank you for sending in a Query. Our team will respond to the same at the earliest possible.<br /><br />";
		    html +="For immediate assistance call our travel consultants <b>46001600/46001641</b>"
		    loginform.innerHTML = html;
		}
	    });
	       
	return false;
}

function isEmailAddr(email)
{
  var result = false
  var theStr = new String(email)
  var index = theStr.indexOf("@");
  if (index > 0)
  {
	var pindex = theStr.indexOf(".",index);
	if ((pindex > index+1) && (theStr.length > pindex+1))
	result = true;
  }
  return result;
}