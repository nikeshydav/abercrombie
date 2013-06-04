function getObject(objectId){
	if(document.all && !document.getElementById){
		return document.all(objectId);
	}else{
		return document.getElementById(objectId);
	}
}

function cnf(msg){
	return confirm(msg);
}

function toggle(showId){
	getObject(showId).style.display = (getObject(showId).style.display=='none' ? 'block' : 'none');
}

function clear_field(fld_id){
	try{
		getObject(fld_id).innerHTML="";
		return true;
	}catch(ex){}
}

function isEmpty(strObj){
	if(strObj ? (strObj.type=='text' || strObj.type=='password') : false){
		str=strObj.value;
		var whtSpEnds = new RegExp("^\\s*|\\s*$", "g");
		var whtSpMult = new RegExp("\\s\\s+", "g");

		str = str.replace(whtSpMult, " ");  // Collapse any multiple whites space.
		str = str.replace(whtSpEnds, "");   // Remove leading or trailing white space.

		strObj.value=str;
		return(str.length);
	}
}

function checkAll(frm,checked){
	if((frm['items'])){
		var e = frm.items;
		if(e.type="checkbox")
			e.checked = checked;
		for(var i=0;i<frm['items'].length;i++){
			var e = frm.items[i];
			if(e.type == "checkbox")
				e.checked = checked;
		}
	}
}

function SetAction(action,frm){
	var i=0;
	var check=false;
	if(frm['items']){
		if(frm['items'].length){
			for(i=0;i<frm['items'].length;i++){
				if(frm.items[i].checked==true){
					check=true;
					break;
				}
			}
		}
		else{
			if(frm.items.checked==true)
				check=true;
		}
	if(check==false)
		alert("Error : Please check any checkbox before continue!\n\n");
	else{
		frm.Action.value=action;
		var actName=action;
		actName=action.toLowerCase();
		var conf=confirm('Are you sure to '+actName+' selected?');
		if(conf)
			frm.submit();
		}
	}
}


function isValidEmail(emailid){	// Email Validation
	var email=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	return email.test(emailid);
}
function checkdate(input){
	//var validformat=/^\d{2}\/\d{2}\/\d{4}$/ //Basic check for format validity
	var validformat=/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/ //Basic check for format validity
	var returnval=false
	if (!validformat.test(input.value))
	returnval=false
	else{ //Detailed check for valid date ranges
	var monthfield=input.value.split("/")[1]
	var dayfield=input.value.split("/")[0]
	var yearfield=input.value.split("/")[2]
	var dayobj = new Date(yearfield, monthfield-1, dayfield)
	if ((dayobj.getDate()!=dayfield)|| (dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield))
	returnval=false
	else
	returnval=true
	}
	//if (returnval==false) input.select()
	return returnval
}
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

//Open popUpWindow
var pop='';
function openwin(nm,width,height,w_per,h_per){
	var name=nm;
	var screen_h=window.screen.height;
	var screen_w=window.screen.width;
	var x_cor=parseInt((w_per/100)*screen_w);
	var y_cor=parseInt((h_per/100)*screen_h);
	if (pop && !pop.closed)
			pop.close();
	pop=eval("window.open('"+name+"','NewWIN','chrome[4],toolbar=no,left=5,top=5,width="+width+",height="+height+",directories=no,menubar=no,SCROLLBARS=yes,left='+x_cor+',top='+y_cor+'')");
	pop.moveTo(x_cor,y_cor);
	if (!pop.opener)
		popUpWin.opener = self;
	if(window.focus)
		pop.focus();
}

/*************Validate the forms--------------------------------------*/
function check(frm, fld_arr){
	var msg=Array();
	var count=0;
	var whtSpMult = new RegExp("\\s\\s+", "g");
	var str;
	for(var word in fld_arr){
		str=frm[word].value;
		//		str = str.replace(whtSpMult, " ");  // Collapse any multiple whites space.
		frm[word].value=trim(str);
		if(frm[word].value==""){
			if(count==0) 
				frm[word].focus();
			//	frm[word].className='borderRed';
			msg[count] = fld_arr[word];		
			count++;
		}/*else{
		frm[word].className='textBox';
		}*/
	} 
	return msg;
}
//-----------------------------------trim functio added bi shri-----------------------------------------------//

function trim(str, chars){
	return ltrim(rtrim(str, chars), chars);
}

function ltrim(str, chars){
    chars = chars || "\\s";
    return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
}

function rtrim(str, chars){
    chars = chars || "\\s";
    return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
}
//---------------------------trim functio added bi shri-------------------------------------------------------//

function display_message(arr_msg){	
	var msg='Please review the following error message before continue:\n';
	for (var word in arr_msg){
		msg+="*\t"+arr_msg[word]+'\n';
	}
	msg+="\n";
	return msg;
}

function ShowSubMenu(v,img){
	var div=getObject(v);
	var img=getObject(img);
	var aDiv=document.getElementsByTagName("img");
	for(var i=0;i<aDiv.length;i++){
		if(aDiv[i].id.indexOf('img')>=0){
			if(aDiv[i].id==img.id){
				aDiv[i].src="";
			}else{
				aDiv[i].src="";
			}
		}
	}
	if(div!=null){
		if(div.style.display=="none"){
			div.style.display="";
			img.src="";
		}else{
			div.style.display="none";
			img.src="";
		}
	}
	var aDiv=document.getElementsByTagName("tr");
	for(var i=0;i<aDiv.length;i++){
		if(aDiv[i].id!=v && aDiv[i].id.indexOf('menu')>=0){
			aDiv[i].style.display="none";
		}
	}
}
function get_ver(){
	if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
		var ieversion=new Number(RegExp.$1) // capture x.x portion and store as a number
		/* if (ieversion>=8)
		alert("You're using IE8 or above")
		else if (ieversion>=7)
		alert("You're using IE7.x")
		else if (ieversion>=6)
		alert("You're using IE6.x")
		else if (ieversion>=5)
		alert("You're using IE5.x")
		}*/
		if(ieversion>4 || ieversion<9)
			return true;
		else
			return false;
	}
}
//-----------------funtion to open URL--------------------------------------
var please_wait = null;
function open_url(url, target){
	if(please_wait != null){
		getObject(target).innerHTML = please_wait;
	}
	if(window.ActiveXObject){
		link = new ActiveXObject("Microsoft.XMLHTTP");
	}else if(window.XMLHttpRequest){
		link = new XMLHttpRequest();
	}
	if(link == undefined){
		return false;
	}
	link.onreadystatechange = function() { response(url, target); }
	link.open("GET", url, true);
	link.send(null);
}

function response(url, target){
	if(link.readyState == 4){
		getObject(target).innerHTML = (link.status == 200) ? link.responseText : "Ooops!! A broken link!" + link.status;
	}
}
/*------------------------------------------------------------------------------------*/
function extractPageName(hrefString)
{
	var arr = hrefString.split('/');
	arr = arr.reverse();
	return arr[0].toLowerCase();
}

function setActiveMenu(arr, crtPage)
{
	for(var i=0; i < arr.length; i++)
		if(extractPageName(arr[i].href) == crtPage)
		{
			arr[i].className = "main";			
		}else{
			arr[i].className = "";				
		}
}

function setPage()
{
	if(document.location.href) 
		hrefString = document.location.href;
	else
		hrefString = document.location;

	if (document.getElementById("t_nav")!=null) 
		setActiveMenu(document.getElementById("t_nav").getElementsByTagName("a"), extractPageName(hrefString));
}

// JavaScript Document
//window.onload = prepareAutoClearFields;
function prepareAutoClearFields(val){
	if(val && document.getElementById(val)!='null'){
		document.getElementById(val).value = "";
	}
}
function findtext(val, text){
	if(document.getElementById(val).value == ""){
		document.getElementById(val).value = text;
	}else{
		document.getElementById(val).value = document.getElementById(val).value;
	}
}

function clearField(obj){
	document.getElementById(obj).innerHTML = "";
}


function main_user_login_popup(){
	
		var frm        = document.frm_name_popup;
		var user_login = frm.user_login;
		var user_pass  = frm.user_pass;
		
	

    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
   if(user_login.value == ''){
		document.getElementById('error_user_login_popup').innerHTML = "Please enter username.";
		if(!alreadyFocussed){
			user_login.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(user_pass.value == ''){
		document.getElementById('error_user_pass_popup').innerHTML = "Please enter password.";
		if(!alreadyFocussed){
			user_pass.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
			
	if(count == 0){
		return true;
	}else{
		return false;
	}
}

function main_user_login(){
	
		var frm        = document.frm_name;
		var user_login = frm.user_login;
		var user_pass  = frm.user_pass;
		
	

    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
   if(user_login.value == ''){
		document.getElementById('error_user_login').innerHTML = "Please enter username.";
		if(!alreadyFocussed){
			user_login.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(user_pass.value == ''){
		document.getElementById('error_user_pass').innerHTML = "Please enter password.";
		if(!alreadyFocussed){
			user_pass.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
			
	if(count == 0){
		return true;
	}else{
		return false;
	}
}




function Dash_UpdatePassword(){
	
	var frm                = document.frm_name_2;
	var old_pwd         = frm.old_pwd;
	var new_pwd          = frm.new_pwd;
	var cfm_new_pwd      = frm.cfm_new_pwd;
	
    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	 
			
	if(old_pwd.value == ''){
		document.getElementById('error_old_pwd').innerHTML = "Please enter Old Password.";
		if(!alreadyFocussed){
			old_pwd.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(new_pwd.value == ''){
		document.getElementById('error_new_pwd').innerHTML = "Please enter New Password.";
		if(!alreadyFocussed){
			new_pwd.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	
		if(new_pwd.value != ""){
		if((new_pwd.value.length < 6) || (new_pwd.value.length > 100)){
			document.getElementById('error_new_pwd').innerHTML = "New Password must be between 6 and 100 characters.";
			if(!alreadyFocussed){
				new_pwd.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	if(cfm_new_pwd.value == ''){
		document.getElementById('error_cfm_new_pwd').innerHTML = "Please enter Confirm Password.";
		if(!alreadyFocussed){
			cfm_new_pwd.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
	if(new_pwd.value != cfm_new_pwd.value){
		document.getElementById('error_cfm_new_pwd').innerHTML = "Please enter confirm password and new password must be same.";
		if(!alreadyFocussed){
			cfm_new_pwd.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
		
	if(count == 0){
		return true;
	}else{
		return false;
	}
}




 function loss_password(){
	
	var frm                = document.frm_name;
	var user_login         = frm.user_login;
	var security_code      = frm.security_code;

    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
	
	if(user_login.value == ''){
		document.getElementById('error_user_login').innerHTML = "Please enter Email(Username).";
		if(!alreadyFocussed){
			user_login.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(user_login.value != ''){
		if(isValidEmail(user_login.value) == false){
			document.getElementById('error_user_login').innerHTML = "Please enter a valid Email address.";
			if(!alreadyFocussed){
				user_login.focus();	
				alreadyFocussed = true;	
			}
			count++;
		}
	}
	
	
	if(user_login.value != ""){
		if(user_login.value.length > 100){
			document.getElementById('error_user_login').innerHTML = "Email must be less than 100 characters.";
			if(!alreadyFocussed){
				user_login.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	

	if(security_code.value == ''){
		document.getElementById('error_security_code').innerHTML = "Please enter your Authentication Code.";
		if(!alreadyFocussed){
			security_code.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(count == 0){
		return true;
	}else{
		return false;
	}
}



function UserRegistration(){
	
	var frm           = document.frm_name;
	var user_login         = frm.user_login;
	var user_pass      = frm.user_pass;
	var confpass      = frm.confpass;
    var mobile        = frm.mobile;
	var user_type        = frm.user_type;
	var authentication= frm.authentication;

    
	var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
		
	if(user_login.value == ''){
		document.getElementById('error_user_login').innerHTML = "Please enter Email.";
		if(!alreadyFocussed){
			user_login.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(user_login.value != ''){
		if(isValidEmail(user_login.value) == false){
			document.getElementById('error_user_login').innerHTML = "Please enter a valid Email address.";
			if(!alreadyFocussed){
				user_login.focus();	
				alreadyFocussed = true;	
			}
			count++;
		}
	}
	
	
	if(user_login.value != ""){
		if(user_login.value.length > 100){
			document.getElementById('error_user_login').innerHTML = "Email must be less than 100 characters.";
			if(!alreadyFocussed){
				user_login.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
		
			
	if(user_pass.value == ''){
		document.getElementById('error_user_pass').innerHTML = "Please enter Password.";
		if(!alreadyFocussed){
			user_pass.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
		if(user_pass.value != ""){
		if((user_pass.value.length < 6) || (user_pass.value.length > 100)){
			document.getElementById('error_user_pass').innerHTML = "Password must be between 6 and 100 characters.";
			if(!alreadyFocussed){
				user_pass.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	
	if(confpass.value == ''){
		document.getElementById('error_confpass').innerHTML = "Please enter Confirm Password.";
		if(!alreadyFocussed){
			confpass.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
	if(user_pass.value != confpass.value){
		document.getElementById('error_confpass').innerHTML = "Please enter confirm password and password must be same.";
		if(!alreadyFocussed){
			confpass.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
	
	if(mobile.value == ''){
		document.getElementById('error_mobile').innerHTML = "Please enter your mobile number.";
		if(!alreadyFocussed){
			mobile.focus();	
			alreadyFocussed = true;
		}
		count++;
	}

	if(mobile.value != ""){
		if(isNaN(mobile.value)){
			document.getElementById('error_mobile').innerHTML = "Please enter valid mobile number.";
			if(!alreadyFocussed){
				mobile.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	if(user_type.value == ''){
		document.getElementById('error_user_type').innerHTML = "Please select user type.";
		if(!alreadyFocussed){
			user_type.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
		
	if(authentication.value == ''){
		document.getElementById('error_authentication').innerHTML = "Please enter your Authentication Code.";
		if(!alreadyFocussed){
			authentication.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(count == 0){
		return true;
	}else{
		return false;
	}
}




function seller_registration(){
	
	var frm                = document.frm_name;
	var name         = frm.name;
	var email         = frm.email;
	var confirm_email = frm.confirm_email;
	var password          = frm.password;
	var confpass      = frm.confpass;
    var mobile        = frm.mobile;
	var age        = frm.age;
	
	
	
	var authentication     = frm.authentication;

    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
	
		
   if(name.value == ''){
		document.getElementById('error_name').innerHTML = "Please enter Name.";
		if(!alreadyFocussed){
			name.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
		if(name.value.length > 100){
			document.getElementById('error_name').innerHTML = "First Name must be less than 100 characters.";
			if(!alreadyFocussed){
				name.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
		
		
		if(!isValidName(name.value)){
			document.getElementById('error_name').innerHTML = "Please enter valid First name (use only Alphabatic character) ";
			if(!alreadyFocussed){
				name.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	
	
	
	
	if(email.value == ''){
		document.getElementById('error_email').innerHTML = "Please enter Email.";
		if(!alreadyFocussed){
			email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(email.value != ''){
		if(isValidEmail(email.value) == false){
			document.getElementById('error_email').innerHTML = "Please enter a valid Email address.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;	
			}
			count++;
		}
	}
	
	
	if(email.value != ""){
		if(email.value.length > 100){
			document.getElementById('error_email').innerHTML = "Email must be less than 100 characters.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	if(confirm_email.value == ''){
		document.getElementById('error_confirm_email').innerHTML = "Please enter Confirm Email.";
		if(!alreadyFocussed){
			confirm_email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(email.value != confirm_email.value){
		document.getElementById('error_confirm_email').innerHTML = "Please enter confirm email and email must be same.";
		if(!alreadyFocussed){
			confirm_email.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
	
		
			
	if(password.value == ''){
		document.getElementById('error_password').innerHTML = "Please enter Password.";
		if(!alreadyFocussed){
			password.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
		if(password.value != ""){
		if((password.value.length < 6) || (password.value.length > 100)){
			document.getElementById('error_password').innerHTML = "Password must be between 6 and 100 characters.";
			if(!alreadyFocussed){
				password.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	
	if(confpass.value == ''){
		document.getElementById('error_confpass').innerHTML = "Please enter Confirm Password.";
		if(!alreadyFocussed){
			confpass.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
	if(password.value != confpass.value){
		document.getElementById('error_confpass').innerHTML = "Please enter confirm password and password must be same.";
		if(!alreadyFocussed){
			confpass.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
	
	if(mobile.value == ''){
		document.getElementById('error_mobile').innerHTML = "Please enter your mobile number.";
		if(!alreadyFocussed){
			mobile.focus();	
			alreadyFocussed = true;
		}
		count++;
	}

	if(mobile.value != ""){
		if(isNaN(mobile.value)){
			document.getElementById('error_mobile').innerHTML = "Please enter valid mobile number.";
			if(!alreadyFocussed){
				mobile.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	if(age.value != ""){
		if(isNaN(age.value)){
			document.getElementById('error_age').innerHTML = "Please enter valid age.";
			if(!alreadyFocussed){
				age.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}	
	
	
		
	
			
	if(authentication.value == ''){
		document.getElementById('error_authentication').innerHTML = "Please enter your Authentication Code.";
		if(!alreadyFocussed){
			authentication.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(count == 0){
		return true;
	}else{
		return false;
	}
}


function seller_profile(){
	
	var frm                = document.frm_name;
	var name         = frm.name;
	var mobile         = frm.mobile;
    var age        = frm.age;
	var experience    = frm.experience;
	var info1    = frm.info1;
	/*var info2    = frm.info2;
    var info3    = frm.info3;*/


    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
	
		
   if(name.value == ''){
		document.getElementById('error_name').innerHTML = "Please enter Name.";
		if(!alreadyFocussed){
			name.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
		if(name.value.length > 100){
			document.getElementById('error_name').innerHTML = "First Name must be less than 100 characters.";
			if(!alreadyFocussed){
				name.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
		
		
			
		
		if(!isValidName(name.value)){
			document.getElementById('error_name').innerHTML = "Please enter valid First name (use only Alphabatic character) ";
			if(!alreadyFocussed){
				name.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
		
		
	if(mobile.value == ''){
		document.getElementById('error_mobile').innerHTML = "Please enter your mobile number.";
		if(!alreadyFocussed){
			mobile.focus();	
			alreadyFocussed = true;
		}
		count++;
	}

	if(mobile.value != ""){
		if(isNaN(mobile.value)){
			document.getElementById('error_mobile').innerHTML = "Please enter valid mobile number.";
			if(!alreadyFocussed){
				mobile.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}	
	
		
	if(age.value != ""){
		if(isNaN(age.value)){
			document.getElementById('error_age').innerHTML = "Please enter valid age.";
			if(!alreadyFocussed){
				age.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}	
	
	if(experience.value != ""){
		if(isNaN(experience.value)){
			document.getElementById('error_experience').innerHTML = "Please enter valid experience. (Use Only Numeric value)";
			if(!alreadyFocussed){
				experience.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	if(info1.value.length > 100){
			document.getElementById('error_info1').innerHTML = "Infomation must be less than 100 characters.";
			if(!alreadyFocussed){
				info1.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
		
	/*if(info2.value.length > 100){
			document.getElementById('error_info2').innerHTML = "Infomation must be less than 100 characters.";
			if(!alreadyFocussed){
				info2.focus();	
				alreadyFocussed = true;
			}
			count++;
		}	
		
		if(info3.value.length > 100){
			document.getElementById('error_info3').innerHTML = "Infomation must be less than 100 characters.";
			if(!alreadyFocussed){
				info3.focus();	
				alreadyFocussed = true;
			}
			count++;
		}*/
	

	if(count == 0){
		return true;
	}else{
		return false;
	}
}






function buyer_registration(){
	
	var frm           = document.frm_name;
	var name          = frm.name;
	var email         = frm.email;
	var confirm_email = frm.confirm_email;
	var password      = frm.password;
	var confpass      = frm.confpass;
    var mobile        = frm.mobile;
	var age           = frm.age;
	
	
	
	
	var authentication  = frm.authentication;

    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
	
		
   if(name.value == ''){
		document.getElementById('error_name').innerHTML = "Please enter Name.";
		if(!alreadyFocussed){
			name.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
		if(name.value.length > 100){
			document.getElementById('error_name').innerHTML = "First Name must be less than 100 characters.";
			if(!alreadyFocussed){
				name.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
		
		
		if(!isValidName(name.value)){
			document.getElementById('error_name').innerHTML = "Please enter valid First name (use only Alphabatic character) ";
			if(!alreadyFocussed){
				name.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	
	
	
	
	if(email.value == ''){
		document.getElementById('error_email').innerHTML = "Please enter Email.";
		if(!alreadyFocussed){
			email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(email.value != ''){
		if(isValidEmail(email.value) == false){
			document.getElementById('error_email').innerHTML = "Please enter a valid Email address.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;	
			}
			count++;
		}
	}
	
	
	if(email.value != ""){
		if(email.value.length > 100){
			document.getElementById('error_email').innerHTML = "Email must be less than 100 characters.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	if(confirm_email.value == ''){
		document.getElementById('error_confirm_email').innerHTML = "Please enter Confirm Email.";
		if(!alreadyFocussed){
			confirm_email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(email.value != confirm_email.value){
		document.getElementById('error_confirm_email').innerHTML = "Please enter confirm email and email must be same.";
		if(!alreadyFocussed){
			confirm_email.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
	
		
			
	if(password.value == ''){
		document.getElementById('error_password').innerHTML = "Please enter Password.";
		if(!alreadyFocussed){
			password.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
		if(password.value != ""){
		if((password.value.length < 6) || (password.value.length > 100)){
			document.getElementById('error_password').innerHTML = "Password must be between 6 and 100 characters.";
			if(!alreadyFocussed){
				password.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	
	if(confpass.value == ''){
		document.getElementById('error_confpass').innerHTML = "Please enter Confirm Password.";
		if(!alreadyFocussed){
			confpass.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
	if(password.value != confpass.value){
		document.getElementById('error_confpass').innerHTML = "Please enter confirm password and password must be same.";
		if(!alreadyFocussed){
			confpass.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
	
	if(mobile.value == ''){
		document.getElementById('error_mobile').innerHTML = "Please enter your mobile number.";
		if(!alreadyFocussed){
			mobile.focus();	
			alreadyFocussed = true;
		}
		count++;
	}

	if(mobile.value != ""){
		if(isNaN(mobile.value)){
			document.getElementById('error_mobile').innerHTML = "Please enter valid mobile number.";
			if(!alreadyFocussed){
				mobile.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	if(age.value != ""){
		if(isNaN(age.value)){
			document.getElementById('error_age').innerHTML = "Please enter valid age.";
			if(!alreadyFocussed){
				age.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
		
			
	if(authentication.value == ''){
		document.getElementById('error_authentication').innerHTML = "Please enter your Authentication Code.";
		if(!alreadyFocussed){
			authentication.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(count == 0){
		return true;
	}else{
		return false;
	}
}



function buyer_profile(){
	
	var frm           = document.frm_name;
	var name          = frm.name;
	var mobile          = frm.mobile;
	var age           = frm.age;
	var experience    = frm.experience;
	var info1    = frm.info1;
	/*var info2    = frm.info2;
    var info3    = frm.info3;*/

    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
	
		
   if(name.value == ''){
		document.getElementById('error_name').innerHTML = "Please enter Name.";
		if(!alreadyFocussed){
			name.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
		if(name.value.length > 100){
			document.getElementById('error_name').innerHTML = "First Name must be less than 100 characters.";
			if(!alreadyFocussed){
				name.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
		
		
		if(!isValidName(name.value)){
			document.getElementById('error_name').innerHTML = "Please enter valid First name (use only Alphabatic character) ";
			if(!alreadyFocussed){
				name.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
		
		
	
	if(mobile.value == ''){
		document.getElementById('error_mobile').innerHTML = "Please enter your mobile number.";
		if(!alreadyFocussed){
			mobile.focus();	
			alreadyFocussed = true;
		}
		count++;
	}

	if(mobile.value != ""){
		if(isNaN(mobile.value)){
			document.getElementById('error_mobile').innerHTML = "Please enter valid mobile number.";
			if(!alreadyFocussed){
				mobile.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
		
		
	
	
	if(age.value != ""){
		if(isNaN(age.value)){
			document.getElementById('error_age').innerHTML = "Please enter valid age. (Use Only Numeric value)";
			if(!alreadyFocussed){
				age.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	if(experience.value != ""){
		if(isNaN(experience.value)){
			document.getElementById('error_experience').innerHTML = "Please enter valid experience. (Use Only Numeric value)";
			if(!alreadyFocussed){
				experience.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	if(info1.value.length > 100){
			document.getElementById('error_info1').innerHTML = "Infomation must be less than 100 characters.";
			if(!alreadyFocussed){
				info1.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
		
	/*if(info2.value.length > 100){
			document.getElementById('error_info2').innerHTML = "Infomation must be less than 100 characters.";
			if(!alreadyFocussed){
				info2.focus();	
				alreadyFocussed = true;
			}
			count++;
		}	
		
		if(info3.value.length > 100){
			document.getElementById('error_info3').innerHTML = "Infomation must be less than 100 characters.";
			if(!alreadyFocussed){
				info3.focus();	
				alreadyFocussed = true;
			}
			count++;
		}*/
	

	if(count == 0){
		return true;
	}else{
		return false;
	}
}







function seller_post_registration(){
	
	var frm           = document.frm_name;
	var business_category = frm.business_category;
	var summary         = frm.summary;
	/*var idea = frm.idea;*/
	/*var nationality = frm.nationality;*/

    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
	
		
   if(business_category.value == ''){
		document.getElementById('error_business_category').innerHTML = "Please select Industry.";
		if(!alreadyFocussed){
			business_category.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(summary.value == ''){
		document.getElementById('error_summary').innerHTML = "Please enter summary.";
		if(!alreadyFocussed){
			summary.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	/*if(idea.value == ''){
		document.getElementById('error_idea').innerHTML = "Please select idea.";
		if(!alreadyFocussed){
			idea.focus();	
			alreadyFocussed = true;
		}
		count++;
	}*/
	
	/*if(nationality.value == ''){
		document.getElementById('error_nationality').innerHTML = "Please enter nationality.";
		if(!alreadyFocussed){
			nationality.focus();	
			alreadyFocussed = true;
		}
		count++;
	}*/
	
	
	if(count == 0){
		return true;
	}else{
		return false;
	}
}


function buyer_tender(){
	
	var frm           = document.frm_name;
	var tender_title = frm.tender_title;
	var business_category = frm.business_category;
	/*var return_seeking = frm.return_seeking;
	var investment = frm.investment;*/
	
    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;

	
   if(tender_title.value == ''){
		document.getElementById('error_tender_title').innerHTML = "Please enter tender title.";
		if(!alreadyFocussed){
			tender_title.focus();	
			alreadyFocussed = true;
		}
		count++;
	}	
	
   if(business_category.value == ''){
		document.getElementById('error_business_category').innerHTML = "Please select Industry.";
		if(!alreadyFocussed){
			business_category.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	/*if(return_seeking.value == ''){
		document.getElementById('error_return_seeking').innerHTML = "Please select seeking.";
		if(!alreadyFocussed){
			return_seeking.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(investment.value == ''){
		document.getElementById('error_investment').innerHTML = "Please select investment.";
		if(!alreadyFocussed){
			investment.focus();	
			alreadyFocussed = true;
		}
		count++;
	}*/
	
		
	if(count == 0){
		return true;
	}else{
		return false;
	}
}


function enquiry_form(){
	
	var frm           = document.frm_name;
	var enquiry = frm.enquiry;
	
    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;

		
   if(enquiry.value == ''){
		document.getElementById('error_enquiry').innerHTML = "Please enter enquiry.";
		if(!alreadyFocussed){
			enquiry.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
		
	if(count == 0){
		return true;
	}else{
		return false;
	}
}


function changepassword(){
	
	var frm           = document.frm_name;
	var user_pass     = frm.user_pass;
	var user_newpass  = frm.user_newpass;
	var user_cpass    = frm.user_cpass;
	
    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
		
			
	if(user_pass.value == ''){
		document.getElementById('error_user_pass').innerHTML = "Please enter Password.";
		if(!alreadyFocussed){
			user_pass.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(user_newpass.value == ''){
		document.getElementById('error_user_newpass').innerHTML = "Please enter New Password.";
		if(!alreadyFocussed){
			user_newpass.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	
		if(user_newpass.value != ""){
		if((user_newpass.value.length < 6) || (user_newpass.value.length > 100)){
			document.getElementById('error_user_newpass').innerHTML = "Password must be between 6 and 100 characters.";
			if(!alreadyFocussed){
				user_newpass.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	
	if(user_cpass.value == ''){
		document.getElementById('error_user_cpass').innerHTML = "Please enter Confirm Password.";
		if(!alreadyFocussed){
			user_cpass.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
	if(user_newpass.value != user_cpass.value){
		document.getElementById('error_user_cpass').innerHTML = "Please enter confirm password and password must be same.";
		if(!alreadyFocussed){
			user_cpass.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
	
	
	if(count == 0){
		return true;
	}else{
		return false;
	}
}


function buyer_search(){
	
	var frm               = document.frm_name;
	var business_category = frm.business_category;
	
	
	
    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
		
			
	if(business_category.value == ''){
		document.getElementById('error_business_category').innerHTML = "Please select Industry.";
		if(!alreadyFocussed){
			business_category.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
			
	if(count == 0){
		return true;
	}else{
		return false;
	}
}


function seller_search(){
	
	var frm               = document.frm_name;
	var business_category = frm.business_category;
	
	
    var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
			
	if(business_category.value == ''){
		document.getElementById('error_business_category').innerHTML = "Please select Industry.";
		if(!alreadyFocussed){
			business_category.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
		
	if(count == 0){
		return true;
	}else{
		return false;
	}
}




function brochure(type){
var frm            = document.frm_name;
var requestbrochure = frm.requestbrochure;
var title          = frm.title;
var fname          = frm.fname;
var lname          = frm.lname;
var telephone      = frm.telephone;
var email          = frm.email;
var confirm_email  = frm.confirm_email;
var address1       = frm.address1;
var country        = frm.country;
var city           = frm.city;
var postcode       = frm.postcode;
var security_code  = frm.security_code;
var s_code  = frm.s_code;
	
	
	var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	if(requestbrochure.value == ''){
		document.getElementById('error_requestbrochure').innerHTML = "Please select brochure.";
		if(!alreadyFocussed){
			requestbrochure.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
   if(title.value == ''){
		document.getElementById('error_title').innerHTML = "Please select title.";
		if(!alreadyFocussed){
			title.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(fname.value == ''){
		document.getElementById('error_fname').innerHTML = "Please Enter first name.";
		if(!alreadyFocussed){
			fname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
		
	if(!isValidName(fname.value)){
		document.getElementById('error_fname').innerHTML = "Please enter valid First name (use only Alphabatic character) ";
		if(!alreadyFocussed){
			fname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(lname.value == ''){
		document.getElementById('error_lname').innerHTML = "Please Enter Surname.";
		if(!alreadyFocussed){
			lname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
		
	if(!isValidName(lname.value)){
		document.getElementById('error_lname').innerHTML = "Please enter valid Surname (use only Alphabatic character) ";
		if(!alreadyFocussed){
			lname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	
	
	if(email.value == ''){
		document.getElementById('error_email').innerHTML = "Please enter Email.";
		if(!alreadyFocussed){
			email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(email.value != ''){
		if(isValidEmail(email.value) == false){
			document.getElementById('error_email').innerHTML = "Please enter a valid Email address.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;	
			}
			count++;
		}
	}
	
	
	if(email.value != ""){
		if(email.value.length > 100){
			document.getElementById('error_email').innerHTML = "Email must be less than 100 characters.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	if(confirm_email.value == ''){
		document.getElementById('error_confirm_email').innerHTML = "Please enter Confirm Email.";
		if(!alreadyFocussed){
			confirm_email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(email.value != confirm_email.value){
		document.getElementById('error_confirm_email').innerHTML = "Please enter confirm email and email must be same.";
		if(!alreadyFocussed){
			confirm_email.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
		
	
	if(telephone.value == ''){
		document.getElementById('error_telephone').innerHTML = "Please enter your telephone number.";
		if(!alreadyFocussed){
			telephone.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(telephone.value != ""){
		if(isNaN(telephone.value)){
			document.getElementById('error_telephone').innerHTML = "Please enter valid telephone number.";
			if(!alreadyFocussed){
				telephone.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	if(address1.value == ''){
		document.getElementById('error_address1').innerHTML = "Please enter your address.";
		if(!alreadyFocussed){
			address1.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(city.value == ''){
		document.getElementById('error_city').innerHTML = "Please enter your city/town.";
		if(!alreadyFocussed){
			city.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(!isValidName(city.value)){
		document.getElementById('error_city').innerHTML = "Please enter valid city (use only Alphabatic character) ";
		if(!alreadyFocussed){
			city.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(country.value == ''){
		document.getElementById('error_country').innerHTML = "Please select your country.";
		if(!alreadyFocussed){
			country.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(postcode.value == ''){
		document.getElementById('error_postcode').innerHTML = "Please enter your postcode.";
		if(!alreadyFocussed){
			postcode.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	if(security_code.value == ''){
			document.getElementById('err_security_code').innerHTML = "Please enter security code.";
	       // $("#err_security_code").innerHTML("Please enter security code.");
			if(!alreadyFocussed){
			security_code.focus();	
			alreadyFocussed = true;
		}
		count++;
    }
	
	if(security_code.value != ''){
	    if(s_code.value==0)
		{
				document.getElementById('err_security_code').innerHTML = "Security code does not match.";
				if(!alreadyFocussed){
				security_code.focus();	
				alreadyFocussed = true;
			  }
			  count++;
		} 
		else 
		{
		   document.getElementById('err_security_code').innerHTML = "";
		}
		
    } 
	
	if(count == 0){
		return true;
	}else{
		return false;
	}
}
function brochure2(type){
	
	
var frm            = document.frm_name2;
var requestbrochure2 = frm.requestbrochure2;
var title          = frm.title;
var fname          = frm.fname;
var lname          = frm.lname;
var telephone      = frm.telephone;
var email          = frm.email;
var confirm_email  = frm.confirm_email;
var address1       = frm.address1;
var country        = frm.country;
var city        = frm.city;
var postcode        = frm.postcode;
var security_code2  = frm.security_code2;
var s_code2  = frm.s_code2;
	
	
	var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	if(requestbrochure2.value == ''){
		document.getElementById('error2_requestbrochure').innerHTML = "Please select brochure.";
		if(!alreadyFocussed){
			requestbrochure2.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
   if(title.value == ''){
		document.getElementById('error2_title').innerHTML = "Please select title.";
		if(!alreadyFocussed){
			title.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(fname.value == ''){
		document.getElementById('error2_fname').innerHTML = "Please enter first name.";
		if(!alreadyFocussed){
			fname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	else 
	{
		   document.getElementById('error2_fname').innerHTML = "";
	}
		
		
	if(!isValidName(fname.value)){
		document.getElementById('error2_fname').innerHTML = "Please enter valid First name (use only Alphabatic character) ";
		if(!alreadyFocussed){
			fname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(lname.value == ''){
		document.getElementById('error2_lname').innerHTML = "Please enter Surname.";
		if(!alreadyFocussed){
			lname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	else 
	{
		   document.getElementById('error2_lname').innerHTML = "";
	}
		
		
	if(!isValidName(lname.value)){
		document.getElementById('error2_lname').innerHTML = "Please enter valid Surname (use only Alphabatic character) ";
		if(!alreadyFocussed){
			lname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	
	
	if(email.value == ''){
		document.getElementById('error2_email').innerHTML = "Please enter Email.";
		if(!alreadyFocussed){
			email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	else 
	{
		   document.getElementById('error2_email').innerHTML = "";
	}
	
	
	if(email.value != ''){
		if(isValidEmail(email.value) == false){
			document.getElementById('error2_email').innerHTML = "Please enter a valid Email address.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;	
			}
			count++;
		}
	}
	
	
	if(email.value != ""){
		if(email.value.length > 100){
			document.getElementById('error2_email').innerHTML = "Email must be less than 100 characters.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	if(confirm_email.value == ''){
		document.getElementById('error2_confirm_email').innerHTML = "Please enter Confirm Email.";
		if(!alreadyFocussed){
			confirm_email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	else 
	{
		   document.getElementById('error2_confirm_email').innerHTML = "";
	}
	
	
	if(email.value != confirm_email.value){
		document.getElementById('error2_confirm_email').innerHTML = "Please enter confirm email and email must be same.";
		if(!alreadyFocussed){
			confirm_email.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
		
	

	if(telephone.value != ""){
		if(isNaN(telephone.value)){
			document.getElementById('error2_telephone').innerHTML = "Please enter valid telephone number.";
			if(!alreadyFocussed){
				telephone.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	

	
	if(city.value == ''){
		document.getElementById('error2_city').innerHTML = "Please enter your city/town.";
		if(!alreadyFocussed){
			city.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	else 
	{
		   document.getElementById('error2_city').innerHTML = "";
	}
	
	
	if(!isValidName(city.value)){
		document.getElementById('error2_city').innerHTML = "Please enter valid city (use only Alphabatic character) ";
		if(!alreadyFocussed){
			city.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	
	if(security_code2.value == ''){
			document.getElementById('err2_security_code').innerHTML = "Please enter security code.";
	       // $("#err_security_code").innerHTML("Please enter security code.");
			if(!alreadyFocussed){
			security_code2.focus();	
			alreadyFocussed = true;
		}
		count++;
    }
	
	if(security_code2.value != ''){
	    if(s_code2.value==0)
		{
				document.getElementById('err2_security_code').innerHTML = "Security code does not match.";
				if(!alreadyFocussed){
				security_code2.focus();	
				alreadyFocussed = true;
			  }
			  count++;
		} 
		else 
		{
		   document.getElementById('err2_security_code').innerHTML = "";
		}
		
    } 

	
	if(count == 0){
		document.frm_name2.submit();
		document.frm_name2.reset();
		document.getElementById('errorbr2').style.display='';
		return false;
	}else{
		return false;
	}
}
function brochure3(type){
	
	
var frm            = document.frm_name3;
var title          = frm.title;
var fname          = frm.fname;
var lname          = frm.lname;
var telephone      = frm.telephone;
var email          = frm.email;
var confirm_email  = frm.confirm_email;
var address1       = frm.address1;
var country        = frm.country;
var city        = frm.city;
var postcode        = frm.postcode;
	
	
	var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
		
   if(title.value == ''){
		document.getElementById('error3_title').innerHTML = "Please select title.";
		if(!alreadyFocussed){
			title.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(fname.value == ''){
		document.getElementById('error3_fname').innerHTML = "Please select first name.";
		if(!alreadyFocussed){
			fname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
		
	if(!isValidName(fname.value)){
		document.getElementById('error3_fname').innerHTML = "Please enter valid First name (use only Alphabatic character) ";
		if(!alreadyFocussed){
			fname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	if(lname.value == ''){
		document.getElementById('error3_lname').innerHTML = "Please select Surname.";
		if(!alreadyFocussed){
			lname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
		
		
	if(!isValidName(lname.value)){
		document.getElementById('error3_lname').innerHTML = "Please enter valid Surname (use only Alphabatic character) ";
		if(!alreadyFocussed){
			lname.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	
	
	if(email.value == ''){
		document.getElementById('error3_email').innerHTML = "Please enter Email.";
		if(!alreadyFocussed){
			email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(email.value != ''){
		if(isValidEmail(email.value) == false){
			document.getElementById('error3_email').innerHTML = "Please enter a valid Email address.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;	
			}
			count++;
		}
	}
	
	
	if(email.value != ""){
		if(email.value.length > 100){
			document.getElementById('error3_email').innerHTML = "Email must be less than 100 characters.";
			if(!alreadyFocussed){
				email.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	if(confirm_email.value == ''){
		document.getElementById('error3_confirm_email').innerHTML = "Please enter Confirm Email.";
		if(!alreadyFocussed){
			confirm_email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(email.value != confirm_email.value){
		document.getElementById('error3_confirm_email').innerHTML = "Please enter confirm email and email must be same.";
		if(!alreadyFocussed){
			confirm_email.focus();
			alreadyFocussed = true;
		}
		count++
	}
	
		
	
	
	
	if(telephone.value != ""){
		if(isNaN(telephone.value)){
			document.getElementById('error3_telephone').innerHTML = "Please enter valid telephone number.";
			if(!alreadyFocussed){
				telephone.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	
	
	if(city.value == ''){
		document.getElementById('error3_city').innerHTML = "Please enter your city/town.";
		if(!alreadyFocussed){
			city.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	
	if(count == 0){
		return true;
	}else{
		return false;
	}
}

function newsletterform(){
	
var frm              = document.frm_name_newsletter;
var newsletter_email          = frm.newsletter_email;
	
	var arr_msg         = Array();
	var count           = arr_msg.length;
	var alreadyFocussed = false;
	
	
		
	
	if(newsletter_email.value == ''){
		document.getElementById('error_newsletter_email').innerHTML = "Please enter Email.";
		if(!alreadyFocussed){
			newsletter_email.focus();	
			alreadyFocussed = true;
		}
		count++;
	}
	
	
	if(newsletter_email.value != ''){
		if(isValidEmail(newsletter_email.value) == false){
			document.getElementById('error_newsletter_email').innerHTML = "Please enter a valid Email address.";
			if(!alreadyFocussed){
				newsletter_email.focus();	
				alreadyFocussed = true;	
			}
			count++;
		}
	}
	
	
	if(newsletter_email.value != ""){
		if(newsletter_email.value.length > 100){
			document.getElementById('error_newsletter_email').innerHTML = "Email must be less than 100 characters.";
			if(!alreadyFocussed){
				newsletter_email.focus();	
				alreadyFocussed = true;
			}
			count++;
		}
	}
	
	

	
	if(count == 0){
		return true;
	}else{
		return false;
	}
}