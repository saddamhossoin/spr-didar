<html>
<head>
<title>DDT</title>

<?php echo $this->Html->css(array('module/PosSales/ddt_report'));?>

</head>

<body>
   <?php echo $content_for_layout;?> 
 </body>
</html>

<script type="text/javascript" >
	$(function(){
	 $(".Print_Button").on('click',function(e){
		 $('.Print_Button').html('');
		 Popup($("#invoice").html());
		$('.Print_Button').html("<span class='print_img'>&nbsp;&nbsp;</span> &nbsp;Print");
	 });
    });
</script>