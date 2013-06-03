function checkfield(loginform)
{
	ok=true
	var chek=document.getElementById("hiddenvalue").value;
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
	}
	else if(loginform.validation.value=="")
	{
		alert("Please Enter The Validation code.")
		loginform.validation.focus()
		ok=false
	}
	
	else if(loginform.validation.value!=chek)
	{
		alert("Please Enter Correct Validation code as Shown.")
		loginform.validation.focus()
		ok=false
	}
	
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
function get_random()
{

    var xx=null;
	var yy='xzc';
	
	xx=Math.floor(Math.random()*9);
	return xx;
	
}
function lockcode()
{
var zz=new Array();
			
			 zz[0]=get_random();
			 zz[1]=get_random();
			 zz[2]=get_random();
			 zz[3]=get_random();
			 zz[4]=get_random();
			 
			var xx=""+zz[0]+zz[1]+zz[2]+zz[3]+zz[4];
			
			document.write('<input type=hidden  name=hiddenvalue id=hiddenvalue value='+xx+' />');
			document.write('<img  src=gif/'+zz[0]+'.png /><img  src=gif/'+zz[1]+'.png /><img  src=gif/'+zz[2]+'.png /><img  src=gif/'+zz[3]+'.png /><img  src=gif/'+zz[4]');
}