jQuery(function ($) {





	 function validateInput() {
	  var success = true;

	  	var element = $("[name='lastname']");
	  
	    if (element.val() == null || element.val().trim() == "") {
	      element.addClass("required");
	      success = false;
	    } else {	      
	        element.removeClass("required");
			element.attr("class","");	      
	    }     
	  	
	  	var element = $("[name='firstname']");
	  
	    if (element.val() == null || element.val().trim() == "") {
	      element.addClass("required");
	      success = false;
	    } else {	      
	        element.removeClass("required");
			element.attr("class","");	      
	    }     


	  //   var element = $("[name='lastname_kana']");
	  
	  //   if (element.val() == null || element.val().trim() == "") {
	  //     element.addClass("required");
	  //     success = false;
	  //   } else {	      
	  //       element.removeClass("required");
			// element.attr("class","");	      
	  //   }     


	  //   var element = $("[name='firstname_kana']");
	  
	  //   if (element.val() == null || element.val().trim() == "") {
	  //     element.addClass("required");
	  //     success = false;
	  //   } else {	      
	  //    	element.removeClass("required");
			// element.attr("class","");	      
	  //   }     

	    var element = $("[name='email']");
	  	var Email = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

	    if (element.val() == null || element.val().trim() == "" || !Email.test(element.val())) {
	      element.addClass("required");
	      success = false;
	    } else {	      
	      element.removeClass("required");
		  element.attr("class","");	      
	    }     

	    var element = $("[name='password']");
	  
	    if (element.val() == null || element.val().trim() == "" || element.val().length < 8) {
	      element.addClass("required");
	      success = false;
	    } else {	      
	      element.removeClass("required");
		  element.attr("class","");	      
	    }   

	  	return success;
	  }



	  $("#register").click(function() {

	    if (validateInput()) {
	         
	         	var form = $('#registrationForm');
			    var actionUrl = form.attr('action');
			    
			    $.ajax({
			        type: "POST",
			        url: actionUrl,
			        data: form.serialize(), // serializes the form's elements.
			        success: function(res)
			        {
			          alert(res);
			        }
			    });
	    }
	  });






























});