jQuery(function($){ 
 	$(".get_recive").on('click',function(e){
 			e.preventDefault(); 
			var ulrs =$(this).attr('href');
			$(".overlaydiv").fadeIn(1000);
		$.ajax({
				type: "GET",
				url:$(this).attr('href'),
				success: function(response1){
					 
				if(response1 == 0){
					alert('Not Recive');
					 
					$(".overlaydiv").fadeOut(1000);
				}else{
					 location.reload();
					$(".overlaydiv").fadeOut(1000);
					 
				}
				 }
			});
			 
	});
			
			
 

 var dialogOptstempleteGeneralList6 = {
		title:'Re-Print',
		autoOpen: false,
		height: 600,
		width: 750,
		modal: true,
		draggable:true,
 	    ////close: CloseFunction,
	  dialogClass: 'objectdetailsdialog',
	};
	$("#invoice6").dialog(dialogOptstempleteGeneralList6);
	
	$(".printlink").on('click',function(e){
		 	e.preventDefault(); 
 			var ulrs =$(this).attr('href');
		 	$("#invoice6").load(ulrs, [], function(){
			$("#invoice6").dialog("open");
		});
			 
	});
	 
});