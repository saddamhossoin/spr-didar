<?php  //pr($posSale);?>
<html>
<head>
<title>Report For SPR</title>
<style type="text/css">
 
.print_img{
	padding-right:10px;
}
.Print_Button{
   font-weight:bold;
}
 
 
</style>
</head>

<body>
<?php  //var_dump($deviceRecive);
  $data_important = array(0=>'No',1=>'Yes');?>
	<div class="full_div_report_wrapper">
    <span class='Print_Button'>
    <span class='print_img'>&nbsp;&nbsp;</span> &nbsp;Print</span>
		<div class="sec_div_wrapper">
			
          <div class="print_left">
          <div class="bardoce_print"> <?php  echo $this->Html->image("../".$deviceRecive['ServiceDeviceInfo']['barcode_file'], array("class"=>"barcode","alt" => $deviceRecive['ServiceDeviceInfo']['barcode_file'] ));?> </div>
              <div><span class="title_s">Nome </span>&nbsp;<?php echo $deviceRecive['User']['firstname'];?></div>
            <div> <span class="title_s">Telefono </span>&nbsp;<?php echo $deviceRecive['User']['phone']; ?></div>
            <div> <span class="title_s">Email </span>&nbsp;<?php echo $deviceRecive['User']['email_address']; ?></div>
            <div> <span class="title_s">Marca/Modello </span>&nbsp; <?php echo $deviceRecive['ServiceDevice']['PosBrand']['name'];?></div>
            <div><span class="title_s">Product </span> &nbsp; <?php echo $deviceRecive['ServiceDevice']['name'];?></div>
            <div><span class="title_s">IMEI </span> &nbsp; <?php	echo $deviceRecive['ServiceDeviceInfo']['serial_no']; ?></div>
             <div style="clear:both;"></div>
            <div style="width:267px;"><span class="title_s">Accessori </span> &nbsp;<?php
                if(!empty($deviceRecive['ServiceDeviceAcessory'])){
                    foreach($deviceRecive['ServiceDeviceAcessory'] as $accesorylist){
                        echo  $accesorylist['ServiceAcessory']['name']  ." , ";
                        }
                    }else{
                        echo 'Acessory not mention!!!';
            	}?>
        </div>
            <div style="line-height: 13px;"><span class="title_s">Difetto </span> &nbsp;
			<?php
				if(!empty($deviceRecive['ServiceDeviceDefect'])){
					foreach($deviceRecive['ServiceDeviceDefect'] as $defectlist){
						echo  $defectlist['ServiceDefect']['name']  ." , ";
					}
				}else{
					echo 'Defect not mention!!!';
				}
			?>
       </div>
       
      <table width="200" border="0" cellpadding="0" cellspacing="0" class="prevnto_grid">
  <tr>
    <td>PREVENTIVO:</td>
    <td align="center"><?php echo $data_important[$deviceRecive['ServiceDeviceInfo']['is_customer_confirmation']]; ?></td>
    <td>STIMATO:</td>
    <td ><?php echo $deviceRecive['ServiceDeviceInfo']['estimated_budget']; ?></td>
  </tr>
  <tr>
    <td>RIENTRO:</td>
    <td align="center"><?php  if(empty($is_repet)){ echo 'No';}else{ echo 'Yes';} ?></td>
    <td>PIN:</td>
    <td> <?php	echo $deviceRecive['ServiceDeviceInfo']['is_phone_block'] . " / ". $deviceRecive['ServiceDeviceInfo']['is_sim_pc_Lock'] ; ?></td>
  </tr>
  <tr>
    <td>DATI IMPORTANTI:</td>
    <td align="center"><?php echo $data_important[$deviceRecive['ServiceDeviceInfo']['is_data_backup']]; ?></td>
    <td>URGENTE:</td>
    <td><?php	 
		if($deviceRecive['ServiceDeviceInfo']['is_urgent'] == 121){
			echo 'Express Service';
		}else{
			echo $data_important[$deviceRecive['ServiceDeviceInfo']['is_urgent']];
		} ?></td>
  </tr>
</table>
 
     
    <div style="clear:both">&nbsp;</div>
        
    <div style="height: 100px; margin-left: 28px; margin-top: 1px; display: block; font-size: 10px;">NOTE :&nbsp;  <?php	echo $deviceRecive['ServiceDeviceInfo']['description']; 
	//pr();
	
	?> </div>
    <div class="inovice_fotter">
    <span><?php echo $deviceRecive['User']['counter_name'];?> &nbsp; &nbsp;<?php echo date('d/m/y');?></span>
    <span></span>
          </div>
       </div>   
          <div class="print_right">
          <div class="bardoce_print"> <?php  echo $this->Html->image("../".$deviceRecive['ServiceDeviceInfo']['barcode_file'], array("class"=>"barcode","alt" => $deviceRecive['ServiceDeviceInfo']['barcode_file'] ));?> </div>
              <div><span class="title_s">Nome </span>&nbsp;<?php echo $deviceRecive['User']['firstname'];?></div>
            <div> <span class="title_s">Telefono </span>&nbsp;<?php echo $deviceRecive['User']['phone']; ?></div>
            <div> <span class="title_s">Email </span>&nbsp;<?php echo $deviceRecive['User']['email_address']; ?></div>
            <div> <span class="title_s">Marca/Modello </span>&nbsp; <?php echo $deviceRecive['ServiceDevice']['PosBrand']['name'];?></div>
            <div><span class="title_s">Product </span> &nbsp; <?php echo $deviceRecive['ServiceDevice']['name'];?></div>
            <div><span class="title_s">IMEI </span> &nbsp; <?php	echo $deviceRecive['ServiceDeviceInfo']['serial_no']; ?></div>
             <div style="clear:both;"></div>
            <div style="width:267px;"><span class="title_s">Accessori </span> &nbsp;<?php
                if(!empty($deviceRecive['ServiceDeviceAcessory'])){
                    foreach($deviceRecive['ServiceDeviceAcessory'] as $accesorylist){
                        echo  $accesorylist['ServiceAcessory']['name']  ." , ";
                        }
                    }else{
                        echo 'Acessory not mention!!!';
            	}?>
        </div>
            <div style="line-height: 13px;"><span class="title_s">Difetto </span> &nbsp;
			<?php
				if(!empty($deviceRecive['ServiceDeviceDefect'])){
					foreach($deviceRecive['ServiceDeviceDefect'] as $defectlist){
						echo  $defectlist['ServiceDefect']['name']  ." , ";
					}
				}else{
					echo 'Defect not mention!!!';
				}
			?>
       </div>
       
      <table width="200" border="0" cellpadding="0" cellspacing="0" class="prevnto_grid">
  <tr>
    <td>PREVENTIVO:</td>
    <td align="center"><?php echo $data_important[$deviceRecive['ServiceDeviceInfo']['is_customer_confirmation']]; ?></td>
    <td>STIMATO:</td>
    <td ><?php echo $deviceRecive['ServiceDeviceInfo']['estimated_budget']; ?></td>
  </tr>
  <tr>
    <td>RIENTRO:</td>
    <td align="center"><?php  if(empty($is_repet)){ echo 'No';}else{ echo 'Yes';} ?></td>
    <td>PIN:</td>
    <td> <?php	echo $deviceRecive['ServiceDeviceInfo']['is_phone_block'] . " / ". $deviceRecive['ServiceDeviceInfo']['is_sim_pc_Lock'] ; ?></td>
  </tr>
  <tr>
    <td>DATI IMPORTANTI:</td>
    <td align="center"><?php echo $data_important[$deviceRecive['ServiceDeviceInfo']['is_data_backup']]; ?></td>
    <td>URGENTE:</td>
    <td><?php	 
		if($deviceRecive['ServiceDeviceInfo']['is_urgent'] == 121){
			echo 'Express Service';
		}else{
			echo $data_important[$deviceRecive['ServiceDeviceInfo']['is_urgent']];
		} ?></td>
  </tr>
</table>
 
     
    <div style="clear:both">&nbsp;</div>
        
    <div style="height: 100px; margin-left: 28px; margin-top: 1px; display: block; font-size: 10px;">NOTE :&nbsp;  <?php	echo $deviceRecive['ServiceDeviceInfo']['description']; 
	//pr();
	
	?> </div>
    <div class="inovice_fotter">
    <span><?php echo $deviceRecive['User']['counter_name'];?> &nbsp; &nbsp;<?php echo date('d/m/y');?></span>
    <span></span>
          </div>  
        	
    </div>
       <style type="text/css">
	   .prevnto_grid{
		   	border: 0 none;
    		font-size: 10px;
		    margin: 10px 15px 0 29px;
    		text-transform: uppercase;
    		width: 92%;
	   }
	   	   .prevnto_grid tr td{
			   border-bottom:1px solid;
			   width:25%;
		   }
		.inovice_fotter{
 			bottom: 0;
			height: 14px;
			margin-top: -11px;
			padding-left: 47px;
			position: unset;
			width: 309px;
			text-transform: none !important;
			
		}
		.inovice_fotter span{
			float:left;
			display:inline-block;
			width:49%;
			text-align:center;
		}
	 
		.sec_div_wrapper {
			border: 1px solid;
			font-size: 8px;
			height: 553px;
			width: 795px;
			background:url("../../app/webroot/img/iripair_invoice.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
		}
		.sec_div_wrapper div{
			font-size:11px !important;
			margin-left:30px;
		   text-transform: uppercase;
		}
		 
		.title_s{
			width:100px;
			display:inline-block;
			text-transform:uppercase;
			height:18px;
		}
		.barcode{
			    height: 65px;
    margin-bottom: 134px;
    margin-left: -3px;
    width: 152px;
	margin-top:14px;
		}
		.print_left{
		    float: left;
    margin: 0 !important;
	width:49%;
		}
		.print_right{
		    float: left;
    margin: 0 !important;
	width:49%;
		}
		.print_right   div{
			margin-left:25px !important;
		}
		.print_right .prevnto_grid{
			margin-left:26px !important;
		}

		</style>
        </div>
        
        
	</div>
<script type="text/javascript">
jQuery(function($){ 
 $(".ui-dialog-titlebar-close").on('click',function(){
		 		window.location.reload();
				 $('#Cancel').click();
			 	 $("#PosSaleAddForm").trigger('reset');
				 $("#PosSaleAmountAddForm").trigger('reset');
 	  });
	  });
	  </script>




</div>
</div>
</body>
</html>



<div style="background:#fff; clear:both;color:#000000; margin-top:25px;" >
  <?php //echo $this->element('sql_dump'); ?>
</div>
<script type="text/javascript" >
	$(function(){
	 $(".Print_Button").on('click',function(e){
		 $('.Print_Button').html('');
		 Popup($(".sec_div_wrapper").html());
		$('.Print_Button').html("<span class='print_img'>&nbsp;&nbsp;</span> &nbsp;Print");
	 });
    });
</script>

