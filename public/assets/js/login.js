jQuery(function ($) {



	function validateInput() {
	  var success = true;	  	

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
	    var Password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%&])(.{8,20}$)/;

	    if (element.val() == null || element.val().trim() == "" || element.val().length < 8) {
	      element.addClass("required");
	      success = false;
	    } else {	      
	      element.removeClass("required");	  
	      element.attr("class","");    
	    }   

	  	return success;
	}



	$("#login").click(function() {


		if (validateInput()) {

		    var form = $('#loginForm');
		    var actionUrl = form.attr('action');
		    
		    $.ajax({
		        type: "POST",
		        url: actionUrl,
		        data: form.serialize(), // serializes the form's elements.
		        success: function(res)
		        {
		          if(res == "success") location.href = projects_url;
		          else alert(res);
		        }
		    });

	    }
	});






























});