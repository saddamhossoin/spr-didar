<?php $status=array(1=>"Receive",2=>"Assesment",3=>"Re-Assessment",4=>"Confirmation",5=>"Servicing",6=>"Complete Servicing",7=>"Testing",8=>"Awaiting for Delivery",9=>"Delivered",10=>"Check List",11=>"Check List Complete",12=>"CUSTOMER COMMUNICATION" , 13=>"AWAITING CONFIRMATION QUOTE" , 14=>"WAITING FOR PARTS");  

$action_css = 'module/' . Inflector::camelize($this->request->params['controller']) . '/' . Inflector::singularize($this->request->params['action']);
	// pr($serviceDeviceInfo);
    if( file_exists(CSS . $action_css . '.css') ) {
        echo $this->Html->css( $action_css );
    }?>
    <br /><br /><br />
<h2 class="messageDialog">Check your Device Status!</h2>
<?php echo $this->Form->create('ServiceDeviceInfo',array('action'=>'checkStatus'));?>
<div id="WrapperSerialNo" class="microcontroll">
 		<?php echo $this->Form->label('ServiceDeviceInfo.serial_no', __('IMEI Or Barcode:'.': <span class="star"></span>', true) ); ?>
		<?php echo $this->Form->input('ServiceDeviceInfo.serial_no',array('type'=>'text','div'=>false,'label'=>false, 'size'=>35, 'class'=>'email '  ));?>
		
   </div>
   <div class="button_area">
		<?php echo $this->Form->button('Track your device',array( 'class'=>'submit', 'id'=>'btn_track_device_add'));?>
 
		<?php echo $this->Form->button('Cancel',array('type'=>'reset','name'=>'reset','id'=>'Cancel'));?>
		<?php echo $this->Form->end();?>
</div>

<?php
	  if(!empty($serviceDeviceInfo)){
			echo "<h1> Hi , ".$serviceDeviceInfo['User']['firstname']." ".$serviceDeviceInfo['User']['lastname']." </h1>";
			echo "<p> Your service status ...........</p>";
	?>
     <div class="serviceDeviceInfos view">
		<table cellpadding="0" cellspacing="0" class="view_table"><?php $i = 0; $class ='class="altrow"';?>
            <tr <?php if ($i % 2 == 0) echo $class;?>>
            <td width="110">Status</td>
            <td>:</td>
            <td style="color:#006600; font-weight:bold; text-transform:uppercase;">
                <?php echo $status[$serviceDeviceInfo['ServiceDeviceInfo']['status']]; ?>&nbsp;
            </td>
            </tr>
            <?php $i++;?>
            <tr <?php if ($i % 2 == 0) echo $class;?>>
            <td>User</td>
            <td>:</td>
            <td><?php echo $this->Html->link($serviceDeviceInfo['User']['email_address'], array('controller' => 'users', 'action' => 'view', $serviceDeviceInfo['User']['id'])); ?>&nbsp;</td>
            </tr>
            <?php $i++;?>
            <tr <?php if ($i % 2 == 0) echo $class;?>>
            <td>Service Device</td>
            <td>:</td>
            <td><?php echo $this->Html->link($serviceDeviceInfo['ServiceDevice']['name'], array('controller' => 'service_devices', 'action' => 'view', $serviceDeviceInfo['ServiceDevice']['id'])); ?>&nbsp;</td>
            </tr>
            <?php $i++;?>
            <tr <?php if ($i % 2 == 0) echo $class;?>>
            <td>Serial No</td>
            <td>:</td>
            <td><?php echo $serviceDeviceInfo['ServiceDeviceInfo']['serial_no']; ?>&nbsp;</td>
            </tr>
            <?php $i++;?>
            <tr <?php if ($i % 2 == 0) echo $class;?>>
            <td>Description</td>
            <td>:</td>
            <td><?php echo $serviceDeviceInfo['ServiceDeviceInfo']['description']; ?>&nbsp;</td>
            </tr>
            <?php $i++;?>
            <tr <?php if ($i % 2 == 0) echo $class;?>>
            <td>Defect State</td>
            <td>:</td>
            <td><?php  if(!empty($serviceDeviceInfo['ServiceDeviceDefect'])){
					foreach($serviceDeviceInfo['ServiceDeviceDefect'] as $defectlist){
						echo  $defectlist['ServiceDefect']['name']  ." , ";
					}
				}else{
					echo 'Defect not mention!!!';
				}
				?>&nbsp;</td>
            </tr>
            <?php $i++;?>
            <tr <?php if ($i % 2 == 0) echo $class;?>>
            <td>Acessories</td>
            <td>:</td>
            <td><?php 
             if(!empty($serviceDeviceInfo['ServiceDeviceAcessory'])){
                        foreach($serviceDeviceInfo['ServiceDeviceAcessory'] as $accesorylist){
                            echo  $accesorylist['ServiceAcessory']['name']  ." , ";
                            }
                        }else{
                            echo 'Acessory not mention!!!';
                    }
                    
             ?>&nbsp;</td>
            </tr>
            <?php $i++;?>
            <tr <?php if ($i % 2 == 0) echo $class;?>>
            <td>Recive Date</td>
            <td>:</td>
            <td><?php echo $serviceDeviceInfo['ServiceDeviceInfo']['recive_date']; ?>&nbsp;</td>
            </tr>
            <?php $i++;?>
            <tr <?php if ($i % 2 == 0) echo $class;?>>
            <td>Estimated Date</td>
            <td>:</td>
            <td><?php echo $serviceDeviceInfo['ServiceDeviceInfo']['estimated_date']; ?>&nbsp;</td>
            </tr>
            <?php $i++;?>
            
            
<?php $i++;?>	</table>
</div>
<?php }else{
	if($this->request->data)
	{
		echo "<h1 class='error_message'>Invalid Serial or Barcode!!!</h1>";
	}
}?>
<style>
 #leftPan{display:none !important; height:300px;}
 #rightPan{
 	width:100%;
 }
</style>
<br /><br /><br />