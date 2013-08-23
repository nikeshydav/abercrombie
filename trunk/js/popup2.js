$(document).ready(function(){
						   		   
	//When you click on a link with class of poplight and the href starts with a # 
	$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Pull Query & Variables from href URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value

		//Fade in the Popup and add close button
		$('#' + popID).fadeIn().css({ 'width': Number( 600 ) }).prepend('<a href="index.html" class="close1"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		
		
		
		//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Apply Margin to Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade in Background
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Close Popups and Fade Layer
	$('a.close1, #fade').live('click', function() { //When clicking on the close or fade layer...
	    $("#tab2").hide();
	  	$('#fade , .popup_block2').fadeOut(function() {
			$('#fade, a.close1').remove();  
			if($("div#tab1").attr("id")  != null){  $("#tab1").show();    }
			if($("div#tab5").attr("id")  != null){  $("#tab5").show();    }
			if($("div#tab9").attr("id")  != null){  $("#tab9").show();    }
			if($("div#tab13").attr("id") != null){  $("#tab13").show();   }
			if($("div#tab17").attr("id") != null){  $("#tab17").show();   }
			if($("div#tab21").attr("id") != null){  $("#tab21").show();   }
			if($("div#tab25").attr("id") != null){  $("#tab25").show();   }
			if($("div#tab29").attr("id") != null){  $("#tab29").show();   }
			
	}); //fade them both out
		
		return false;
	});

	
});