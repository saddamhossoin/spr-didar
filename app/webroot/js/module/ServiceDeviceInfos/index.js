jQuery(function($){ 
	
	 var dialogOptstempleteGeneralList = {
		title:'Receive Invoice ',
		autoOpen: false,
		height: 610,
		width: 835,
		modal: true,
		draggable:true,
 	    //close: CloseFunction,
	  dialogClass: 'objectdetailsdialog',
	};
	$("#invoice").dialog(dialogOptstempleteGeneralList);
	
	$(".receive_invoice").on('click',function(e){
		e.preventDefault();
 		var ulrs =$(this).attr('href');
			$("#invoice").load(ulrs, [], function(){
			$("#invoice").dialog("open");
		});
			 
	});
	
	
	
	
});


