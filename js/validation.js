var fld_arr2 = {
    'quote_name': 'Please enter Name.',
    'quote_email': 'Please enter Email.',
    //'quote_residence':'Please select country of residence.',
    'quote_phone': 'Please enter Telephone.',
    'quote_adult': 'Please enter number of adults.',
    'quote_no_children': 'Please enter number of children.',
    'quote_age_children': 'Please enter Ages of children.',
    'quote_date_travel': 'Please enter Date of travel.',
    'quote_requirements': 'Please enter Requirements.'
};
//For Honeymoon Request Form
var fld_arr22 = {
    'quote_name': 'Please enter Name.',
    'quote_email': 'Please enter Email.',
    //'quote_residence':'Please select country of residence.',
    'quote_phone': 'Please enter Telephone.',
    'quote_adult': 'Please enter number of adults.',
    //'quote_no_children':'Please enter number of children.',
    //'quote_age_children':'Please enter Ages of children.',
    'quote_date_travel': 'Please enter Date of travel.',
    'quote_requirements': 'Please enter Requirements.'
};



var fld_arr3 = {
    'email_send_itinerary': 'Please enter Email.',
    'sender_email': 'Please enter sender Email.',
    'subject_send_itinerary': 'Please enter Subject.',
    'msg_send_itinerary': 'Please enter Message.'
};

var d = '';
var d1 = '';
//var email_fid;
function validate_itinerary(frm_name, fld_arr, fid) {
    //console.log( $(frm_name).parent() );
    var arr_msg = Array();
    arr_msg = check_reg(frm_name, fld_arr);

    var count = arr_msg.length;

    if (frm_name.email_send_itinerary.value && isValidEmail(frm_name.email_send_itinerary.value) == false) {
	//getObject('email').innerHTML=arr_msg[count]="Please enter valid email.";
	arr_msg[count] = "Please enter valid email.";
	frm_name.email_send_itinerary.style.borderColor = 'red';
	count++;
    }
    if (frm_name.sender_email.value && isValidEmail(frm_name.sender_email.value) == false) {
	//getObject('email').innerHTML=arr_msg[count]="Please enter valid email.";
	arr_msg[count] = "Please enter valid sender email.";
	frm_name.email_send_itinerary.style.borderColor = 'red';
	count++;
    }
    if (document.getElementById("security_code_" + fid).value == '') {
	arr_msg[count] = "Please enter security code.";
	document.getElementById("security_code_" + fid).style.borderColor = 'red';
	count++;

    }

    if (document.getElementById("security_code_" + fid).value != '') {
	if (document.getElementById("s_code3_" + fid).value == 0) {
	    arr_msg[count] = "Security code does not match.";
	    document.getElementById("security_code_" + fid).style.borderColor = 'red';
	    count++;
	    eval("new_captcha_" + fid + "()");
	    document.getElementById("security_code_" + fid).value = '';
	}
    }


    if (arr_msg.length == 0) {
	var time = Math.random();
	var country = frm_name.country_email.value;
	var region = frm_name.region_email.value;
	var itineraries_email = frm_name.itineraries_email.value;
	var itineraries_email_pdf = frm_name.itineraries_email_pdf.value;
	var sender_email = frm_name.sender_email.value;
	//var dataString = 'email_send_itinerary='+frm_name.email_send_itinerary.value+"&subject_send_itinerary="+frm_name.subject_send_itinerary.value+"&msg_send_itinerary="+frm_name.msg_send_itinerary.value+"&country_send_itinerary="+ country +"&region_send_itinerary="+region.value+"&itineraries_send_itinerary="+itineraries_email+"&submit=1"+"&time="+time;

	var val = document.getElementById("security_code_" + fid).value;
	var dataString = 'email_send_itinerary=' + frm_name.email_send_itinerary.value + "&subject_send_itinerary=" + frm_name.subject_send_itinerary.value + "&msg_send_itinerary=" + frm_name.msg_send_itinerary.value + "&country_send_itinerary=" + country + "&region_send_itinerary=" + region.value + "&itineraries_send_itinerary=" + itineraries_email + "&submit=1&val=" + val + "&time=" + time;
	dataString += '&itineraries_email_pdf=' + itineraries_email_pdf + '&region_email=' + region + '&sender_email=' + sender_email;
	dataString += '&itineraries_email=' + itineraries_email + '&country_email=' + country;
	var doc = $.ajax({
	    type: "POST",
	    url: "../send_mail_itinerary.php",
	    data: dataString,
	    cache: false,
	    asynch: true,
	    success: function(value) {
		window['d1'] = value;
		frm_name.email_send_itinerary.value = '';
		frm_name.subject_send_itinerary.value = '';
		frm_name.msg_send_itinerary.value = '';
		frm_name.sender_email.value = '';

		if (value == 0) {
		    return false;
		} else {
		    eval("new_captcha_" + fid + "()");
		}
		var email_ite_msg = "<strong>A PDF version of this itinerary has been mailed to the Recipient's email Id.</strong> <br />";
		email_ite_msg += "For immediate assistance call our travel consultants <b>46001600/46001641</b><br /> <br /> <a class='closethis'>ok</a>";
		frm_name.innerHTML = email_ite_msg;
		//frm_name.style.display = 'none';

	    }
	});

	return false;
    } else {
	//var message=display_message(arr_msg);
	//alert(message)
	alert(arr_msg.join('\n'))
	return false;

    }

}

function validate_quote(frm_name, fld_arr) {
    //alert(fid);
    var arr_msg = Array();
    arr_msg = check_reg(frm_name, fld_arr);

    var count = arr_msg.length;

    if (frm_name.quote_name.value && isValidName(frm_name.quote_name.value) == false) {
	//  getObject('email').innerHTML=arr_msg[count]="Please enter valid email.";
	arr_msg[count] = "Please enter valid name (Alphabet only).";
	frm_name.quote_name.style.borderColor = 'red';
	count++;
    }
    if (frm_name.quote_email.value && isValidEmail(frm_name.quote_email.value) == false) {
	//  getObject('email').innerHTML=arr_msg[count]="Please enter valid email.";
	arr_msg[count] = "Please enter valid email.";
	frm_name.quote_email.style.borderColor = 'red';
	count++;
    }
    if (frm_name.quote_phone.value && isNumeric(frm_name.quote_phone.value) == true) {
	//  getObject('email').innerHTML=arr_msg[count]="Please enter valid email.";
	arr_msg[count] = "Please enter valid telephone (Numeric only).";
	frm_name.quote_phone.style.borderColor = 'red';
	count++;
    }
    /*if(frm_name.quote_phone.value && isNumeric(frm_name.quote_phone.value)==false && frm_name.quote_phone.value.length < 10){
     //  getObject('email').innerHTML=arr_msg[count]="Please enter valid email.";
     arr_msg[count]="Please enter minimum 10 digit telephone number.";
     frm_name.quote_phone.style.borderColor='red';
     count++;
     }	*/

    if (frm_name.quote_date_travel.value && checkdate(frm_name.quote_date_travel) == false) {
	//  getObject('email').innerHTML=arr_msg[count]="Please enter valid email.";
	arr_msg[count] = "Invalid Day, Month, or Year range detected. Please enter correct format(DD/MM/YYYY).";
	frm_name.quote_date_travel.style.borderColor = 'red';
	count++;
    }
    //alert(document.getElementById("security_codeq_"+fid).value);
    //if(document.getElementById("security_codeq_"+fid).value == ''){
//		    arr_msg[count]="Please enter security code.";
//			document.getElementById("security_codeq_"+fid).style.borderColor='red';
//			count++;
//   }
//	
//	if(document.getElementById("security_codeq_"+fid).value != ''){
//	    if(document.getElementById("s_code5_"+fid).value==0){
//	        arr_msg[count]="Security code does not match.";
//			document.getElementById("security_codeq_"+fid).style.borderColor='red';
//			count++;
//		} 
//    } 

    if (arr_msg.length == 0) {
	var time = Math.random();
	var val = document.getElementById("security_code_" + fid).value;
	var dataString = 'quote_name=' + frm_name.quote_name.value + "&quote_email=" + frm_name.quote_email.value + "&quote_residence=" + frm_name.quote_residence.value + "&quote_phone=" + frm_name.quote_phone.value + "&quote_adult=" + frm_name.quote_adult.value + "&quote_no_children=" + frm_name.quote_no_children.value + "&quote_age_children=" + frm_name.quote_age_children.value + "&quote_date_travel=" + frm_name.quote_date_travel.value + "&quote_requirements=" + frm_name.quote_requirements.value + "&country_quote=" + frm_name.country_quote.value + "&region_quote=" + frm_name.region_quote.value + "&itineraries_quote=" + frm_name.itineraries_quote.value + "&submit=1" + "&time=" + time;
	var doc = $.ajax({
	    type: "POST",
	    url: "../send_mail_quote.php",
	    data: dataString,
	    cache: false,
	    asynch: true,
	    success: function(value)
	    {
		window['d'] = value;
		frm_name.quote_name.value = '';
		frm_name.quote_email.value = '';
		frm_name.quote_phone.value = '';
		frm_name.quote_adult.value = '';
		frm_name.quote_no_children.value = '';
		frm_name.quote_age_children.value = '';
		frm_name.quote_date_travel.value = '';
		frm_name.quote_requirements.value = '';
		//alert("Thank you for Request a Quote" );
		if (value == 0) {

		    return false;
		}

	    }
	});


	return false;
    } else {
	//var message=display_message(arr_msg);
	//alert(message)
	alert(arr_msg.join('\n'))
	return false;

    }

}

//For Honemoon Request Quote
function validate_quote1(frm_name, fld_arr, fid) {
    //alert(fid);
    var arr_msg = Array();
    arr_msg = check_reg(frm_name, fld_arr);

    var count = arr_msg.length;

    if (frm_name.quote_name.value && isValidName(frm_name.quote_name.value) == false) {
	arr_msg[count] = "Please enter valid name (Alphabet only).";
	frm_name.quote_name.style.borderColor = 'red';
	count++;
    }
    if (frm_name.quote_email.value && isValidEmail(frm_name.quote_email.value) == false) {
	arr_msg[count] = "Please enter valid email.";
	frm_name.quote_email.style.borderColor = 'red';
	count++;
    }
    if (frm_name.quote_phone.value && isNumeric(frm_name.quote_phone.value) == true) {
	arr_msg[count] = "Please enter valid telephone (Numeric only).";
	frm_name.quote_phone.style.borderColor = 'red';
	count++;
    }

    if (frm_name.quote_date_travel.value && checkdate(frm_name.quote_date_travel) == false) {
	arr_msg[count] = "Invalid Day, Month, or Year range detected. Please enter correct format(DD/MM/YYYY).";
	frm_name.quote_date_travel.style.borderColor = 'red';
	count++;
    }

    if (document.getElementById("security_codeq_" + fid).value == '') {
	arr_msg[count] = "Please enter security code.";
	document.getElementById("security_codeq_" + fid).style.borderColor = 'red';
	count++;
    }

    if (document.getElementById("security_codeq_" + fid).value != '') {
	if (document.getElementById("s_code5_" + fid).value == 0) {
	    arr_msg[count] = "Security code does not match.";
	    document.getElementById("security_codeq_" + fid).style.borderColor = 'red';
	    count++;
	    eval("new_captcha6_" + fid + "()");
	    document.getElementById("security_codeq_" + fid).value = '';
	}
    }

    if (arr_msg.length == 0) {
	var time = Math.random();
	var val = document.getElementById("security_codeq_" + fid).value;
	var dataString = 'quote_name=' + frm_name.quote_name.value + "&quote_email=" + frm_name.quote_email.value + "&quote_residence=" + frm_name.quote_residence.value + "&quote_phone=" + frm_name.quote_phone.value + "&quote_adult=" + frm_name.quote_adult.value + "&quote_date_travel=" + frm_name.quote_date_travel.value + "&quote_requirements=" + frm_name.quote_requirements.value + "&country_quote=" + frm_name.country_quote.value + "&region_quote=" + frm_name.region_quote.value + "&itineraries_quote=" + frm_name.itineraries_quote.value + "&submit=1&val=" + val + "&time=" + time;
	var doc = $.ajax({
	    type: "POST",
	    url: "../send_mail_quote1.php",
	    data: dataString,
	    cache: false,
	    asynch: true,
	    success: function(value)
	    {
		window['d'] = value;
		frm_name.quote_name.value = '';
		frm_name.quote_email.value = '';
		frm_name.quote_phone.value = '';
		frm_name.quote_adult.value = '';
		frm_name.quote_date_travel.value = '';
		frm_name.quote_requirements.value = '';
		document.getElementById("security_codeq_" + fid).value = '';

		if (value == 0) {
		    return false;
		} else {
		    eval("new_captcha6_" + fid + "()");
		}

		var htm = "Thank You for showing interest in this itinerary, a quote for this itinerary will be shared with you soon. <br />";
		htm += "For immediate assistance call our travel consultants <b>46001600/46001641</b><br /> <br /> <a class='closethis'>ok</a>";
		frm_name.innerHTML = htm;


	    }
	});


	return false;
    } else {
	alert(arr_msg.join('\n'))
	return false;
    }

}
/////////////////////////////////////////////////////////////////////////
function changeBorder(val) {
    val.style.borderColor = '';
}

function check_reg(frm_name, fld_arr) {
    var msg = Array();
    var count = 0;
    for (var word in fld_arr) {
	if (frm_name[word].value == "") {
	    if (count == 0)
		frm_name[word].focus();
	    frm_name[word].style.borderColor = 'red';
	    msg[count] = fld_arr[word];
	    count++;
	} else {
	    frm_name[word].style.borderColor = '';
	}
    }
    return msg;
}


function showMe(tab) {
    for (var i = 1; i <= 20; i++) {
	var name = "tab" + i;
	var name2 = "divli" + i;
	if (tab == i) {
	    if (document.getElementById(name2) != null) {
		document.getElementById(name2).className = "active";
	    }
	    if (document.getElementById(name) != null) {
		document.getElementById(name).style.display = "";
	    }

	    switch (i) {
		case 2:
		    eval("new_captcha_1()");
		    break;
		case 6:
		    eval("new_captcha_2()");
		    break;
		case 10:
		    eval("new_captcha_3()");
		    break;
		case 14:
		    eval("new_captcha_4()");
		    break;

		case 3:
		    eval("new_captcha6_1()");
		    break;
		case 7:
		    eval("new_captcha6_2()");
		    break;
		case 11:
		    eval("new_captcha6_3()");
		    break;
		case 15:
		    eval("new_captcha6_4()");
		    break;

	    }

	    if (name == 'tab4') {
		$(document).ready(function() {
		    gmapInitialize();
		});
	    }
	    if (name == 'tab8') {
		$(document).ready(function() {
		    gmapInitialize1();
		});
	    }
	    if (name == 'tab12') {
		$(document).ready(function() {
		    gmapInitialize2();
		});
	    }
	    if (name == 'tab16') {
		$(document).ready(function() {
		    gmapInitialize3();
		});
	    }
	    if (name == 'tab20') {
		$(document).ready(function() {
		    gmapInitialize4();
		});
	    }

	} else {
	    if (document.getElementById(name2) != null)
	    {
		document.getElementById(name2).className = "";
	    }

	    if (document.getElementById(name) != null)
	    {
		document.getElementById(name).style.display = "none";
	    }
	}

	if (tab == 2) {
	    document.getElementById("divli3").className = "";
	    document.getElementById("tab3").style.display = "none";
	    document.getElementById("divli4").className = "";
	    document.getElementById("tab4").style.display = "none";
	}

	if (tab == 6) {
	    document.getElementById("divli7").className = "";
	    document.getElementById("tab7").style.display = "none";
	    document.getElementById("divli8").className = "";
	    document.getElementById("tab8").style.display = "none";
	}

	if (tab == 10) {
	    document.getElementById("divli11").className = "";
	    document.getElementById("tab11").style.display = "none";
	    document.getElementById("divli12").className = "";
	    document.getElementById("tab12").style.display = "none";
	}

	if (tab == 14) {
	    document.getElementById("divli15").className = "";
	    document.getElementById("tab15").style.display = "none";
	    document.getElementById("divli16").className = "";
	    document.getElementById("tab16").style.display = "none";
	}
    }
}


$(function() {

    $('#quote_name').click(function() {
	$id = $(this).parent('li').children('img').attr('id');
	//alert($id);
    });

    $('.closethis').live('click', function() {
	$('.popup_block, #fade').css({
	    'display': 'none'
	});
	$('.close1').remove();
	return false;
    });

});