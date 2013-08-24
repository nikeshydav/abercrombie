function checkfield(loginform)
{
	ok=true
	if(loginform.first_name.value=="")
	{
		alert("Please Enter Your Name.")
		loginform.first_name.focus()
		ok=false
	}
	
	else if (loginform.email.value == "")
	{
		alert("Please Enter Email Field.");
		loginform.email.focus();
		ok=false
	}
	else if (!isEmailAddr(loginform.email.value))
	{
		alert("Please Enter a Complete Email Address in the Form: yourname@yourdomain.com");
		loginform.email.focus();
		ok=false
	}
	else if (loginform.telephone.value == "")
	{
		alert("Please Enter Contact Number.");
		loginform.telephone.focus();
		ok=false
	}
	else if (loginform.address1.value == "")
	{
		alert("Please Enter Your Address.");
		loginform.address1.focus();
		ok=false
	}else if($("#s_code").val() != '1' ){
		alert("Please Enter Your Security Code");
		loginform.security_code.focus();
		ok=false;
	}
<<<<<<< .mine
	else if (loginform.security_code.value == "")
	{
		alert("Please Enter Your Security Code");
		loginform.security_code.focus();
		ok=false
	}
	
	
=======
>>>>>>> .r119
	return ok
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
////////////////////////////////////////////////////////////////
