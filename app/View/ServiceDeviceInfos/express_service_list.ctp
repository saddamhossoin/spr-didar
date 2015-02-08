<?php $status=array(1=>"Receive",2=>"Assesment",3=>"Re-Assessment",4=>"Confirmation",5=>"Servicing",6=>"Complete Servicing",7=>"Testing",8=>"Awaiting for Delivery",9=>"Delivered",10=>"Check List",11=>"Check List Complete",12=>"CUSTOMER COMMUNICATION" , 13=>"AWAITING CONFIRMATION QUOTE" , 14=>"WAITING FOR PARTS"); ?>
<?php //pr($assessment_lists);?>
<?php echo $this->Html->css(array('common/grid'));?>

<div class="flexigrid" style="width: 100%;">
 <div class="mDiv">
  <div class="ftitle">
    <p> <?php echo $this->Paginator->counter(array(	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')	));	?> </p>
  </div>
  <div id="searchlink"> &nbsp;</div>
</div>

<div class="tDiv">
  <div class="tDiv2">
   <?php echo $this->Form->create('ServiceDeviceInfo',array('controller' => 'ServiceDeviceInfos','action'=>'express_service_list' ));?>
   
   <div id="WrapperTestName" class="microcontroll">
	<?php echo $this->Form->label('ServiceDevice.name', __('Device'.': <span class="star"></span>', true) ); ?>
    <?php echo $this->Form->input('ServiceDevice.name',array('type'=>'text','div'=>false,'label'=>false, 'size'=>25 ));?>
    
    <?php echo $this->Form->label('ServiceDeviceInfo.serial_no', __('Serial'.': <span class="star"></span>', true) ); ?>
    <?php echo $this->Form->input('ServiceDeviceInfo.serial_no',array('type'=>'text','div'=>false,'label'=>false, 'size'=>25 ));?>
   
    <?php echo $this->Form->label('PosCustomer.name', __('Customer'.': <span class="star"></span>', true) ); ?>
    <?php echo $this->Form->input('PosCustomer.name',array('type'=>'text','div'=>false,'label'=>false, 'size'=>25 ));?>
        
        <?php   echo $this->Form->label('ServiceDeviceInfo.name', __('Status'.': <span class="star"></span>', true),array('id'=>'filtermodifyedby')  );   	echo $this->Form->input('ServiceDeviceInfo.status',array('type'=>'select','options'=>$status,'div'=>false,'label'=>false,'class'=>'required select2as','empty'=>'-- Select Status --'));  
	  ?>
    </div>
   
   
   
   
   <?php echo $this->element('filter/commonfilter',array('cache' => array('time'=> '-7 days','key'=>'header')));?>
    <div class="button_area_filter">
      <?php echo $this->Form->button('Search',array( 'class'=>'submit', 'id'=>'btn_brand_search'));?>      
	  <?php echo $this->Form->button('Reset',array('type'=>'reset','name'=>'reset','id'=>'Cancel', 'onClick'=>"parent.location='".$this->webroot."ServiceDeviceInfos/express_service_list/yes'"));?>     
    </div>
    </form>
  </div>
  <div style="clear: both;"></div>
</div>

<div class="bDiv" style="height: auto;">
<div class="hDiv">
  <div class="hDivBox">
    <table cellspacing="0" cellpadding="0">
      <thead>
        <tr>
            <th align="left" width="10%"> <?php echo $this->Paginator->sort('recive_date','Schedule Date');?> </th>
            <th align="left" width="15%"><?php echo $this->Paginator->sort('User.email_address','Email');?> </th>
            <th align="left" width="15%"><?php echo $this->Paginator->sort('User.name','Customer Name');?></th>
            <th align="left" width="15%"><?php echo $this->Paginator->sort('User.phone','Customer Name');?></th>
            <th align="left" width="15%"><?php echo $this->Paginator->sort('service_device_id','Device Name');?></th>
            <th align="left" width="10%"><?php echo $this->Paginator->sort('serial_no');?></th>
            
 	          <?php if($this->Session->read('username')=='Admin' || $this->Session->read('username')=='SuperAdmin'){?> 
                <th align="right"> <?php echo $this->Paginator->sort('User','modifiedBy');?> </th>
           <?php } ?> 
              <th align="left" class="link_text" width="20%"> <?php echo 'Link';?> </th>
        </tr>
      </thead>
    </table>
  </div>
</div>
 
  <table cellspacing="0" cellpadding="0" border="0" style="" class="flexme3">
      <tbody>
<?php
    $purchaseDate = '';
	$i = 0;
	//pr($assessment_lists );
	foreach ($assessment_lists as $assessment_list):
	
 		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		
		$dataDate = date('d / m / Y',strtotime($assessment_list['ServiceDeviceInfo']['created']));
			if($purchaseDate == "" ||  $dataDate!= $purchaseDate){
				echo "<tr><td colspan = '10' class = 'listDateHeading'>".$dataDate."</td></tr>";
				$purchaseDate = $dataDate;
			}
	?>
	<tr id='<?php echo 'row_'.$assessment_list['ServiceDeviceInfo']['id'];?>'  <?php echo $class;?>>
 		<td align='left' class='alistname' width="10%"><?php echo $assessment_list['ServiceDeviceInfo']['recive_date']; ?>&nbsp;</td>
 		<td align='left' class='alistname' width="15%"> <?php echo $assessment_list['User']['email_address']; ?>&nbsp; </td>
        <td align='left' class='alistname' width="15%"> <?php echo $assessment_list['User']['name']; ?>&nbsp; </td>
        <td align='left' class='alistname' width="15%"> <?php echo $assessment_list['User']['phone']; ?>&nbsp; </td>
		<td align='left' class='alistname' width="15%"> <?php echo $assessment_list['ServiceDevice']['name']; ?>&nbsp; </td>
        <td align='left' class='alistname' width="10%"> <?php echo $assessment_list['ServiceDeviceInfo']['serial_no']; ?>&nbsp;</td>
        <td class="actions" width="20%" class='alistname link_link'> 
         <?php echo $this->Html->link(__('Print', true), array('action' => 'recieve', $assessment_list['ServiceDeviceInfo']['id']),array('class'=>'receive_invoice action_link printlink'));  

 echo $this->Html->link(__('Get Recive', true), array('controller'=>'ServiceDeviceInfos','action' => 'get_recive', $assessment_list['ServiceDeviceInfo']['id']),array('class'=>'action_link get_recive' ));

 echo $this->Html->link(__('Delete', true), array('controller'=>'ServiceDeviceInfos','action' => 'delete', $assessment_list['ServiceDeviceInfo']['id']),array('class'=>'action_link delete' ));
 
// CUSTOMER COMMUNICATION.- AWAITING CONFIRMATION QUOTE- WAITING FOR PARTS 
?>


        </td>
 
	</tr>
<?php endforeach; ?>
    </table>
    </div>
    
    <div class="pDiv">
    <div class="pGroup">
     	 <?php if($this->params['paging']['ServiceDeviceInfo']['prevPage']){?>
      <span class='paginate_link'><?php echo $paginator->first();?></span> <span class='paginate_link'><?php echo $this->Paginator->prev('< ' . __('Previous', true), array(), null, array('class'=>'disabled','id'=>'prev_id'));?></span>
      <?php }?>
      <?php echo $this->Paginator->numbers();?>
      <?php if($this->params['paging']['ServiceDeviceInfo']['nextPage']){?>
      <span class='paginate_link'> <?php echo $this->Paginator->next(__('Next', true) . ' >', array(), null, array('class' => 'disabled','id'=>'next_id', 'span'=>false));?> </span> <span class='paginate_link'><?php echo $this->Paginator->last();?></span>
      <?php }?>
    </div>
  </div>     
</div>