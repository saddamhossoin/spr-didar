// JavaScript Document
jQuery(function($){ 
//==================User Status Complete====================//

$(".statuslink").click(function(e){
	e.preventDefault();
 	var vars = $(this).attr('id');
	//alert('vars');
 	$.ajax({
			type: "GET",
			url: siteurl+'Users/user_status/'+vars,
			success: function(response){
				//alert(response);
		 	    window.location.reload(true);
			 	}
			 });
 
	});	

//==================User Status Complete====================//

	});
