<?php echo $this->Html->css('common/grid'); 
 echo $this->Html->script(array('common/commonindex'));
?>
<div class="flexigrid users index" style="width: 100%;">
    <div class="mDiv">
        <div class="ftitle">
            <p> <?php echo $this->Paginator->counter(array(	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')	));	?> </p>
        </div>
        <div id="searchlink"> &nbsp;</div>
    </div>
    
    <div class="tDiv">
      <div class="tDiv2">
       <?php echo $this->Form->create('User',array('action'=>'customer_user' ));?>
       <div id="WrapperBrandName" class="microcontroll">
	 <?php echo $this->Form->label('Group.name', __('Group Name'.': <span class="star"></span>', true) ); ?>
	  <?php  
	   echo $this->Form->input('Group.id',array('type'=>'select','options'=>$groups,'div'=>false,'label'=>false,'class'=>' select2as','empty'=>'----Please select Groups----'));   
	  
	  ?>  
 		</div>
         <div id="WrapperTestName" class="microcontroll">
		<?php echo $this->Form->label('User.name', __('Name'.': <span class="star"></span>', true) ); ?>
        <?php echo $this->Form->input('User.name',array('type'=>'text','div'=>false,'label'=>false, 'size'=>25 ));?>
        <?php echo $this->Form->label('User.email_address', __('Email'.': <span class="star"></span>', true) ); ?>
        <?php echo $this->Form->input('User.email_address',array('type'=>'text','div'=>false,'label'=>false,'class'=>'','required'=>false ));?>
       
 		</div>
       <?php echo $this->element('filter/commonfilter',array('cache' => array('time'=> '-7 days','key'=>'header')));?>
        <div class="button_area_filter">
         
          <?php echo $this->Form->button('Search',array( 'class'=>'submit', 'id'=>'btn_brand_search'));?>      <?php echo $this->Form->button('Reset',array('type'=>'reset','name'=>'reset','id'=>'Cancel', 'onClick'=>"parent.location='".$this->webroot."users/customer_user/yes'"));?>     
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
          		           <th align="left" ><div style=" width: 100px;"><?php echo $this->Paginator->sort('id');?></div></th>
                           <th align="left" ><div style=" width: 200px;"><?php echo $this->Paginator->sort('firstname');?></div></th>
 
                			<th align="left" ><div style=" width: 200px;"><?php echo $this->Paginator->sort('email_address');?></div></th>
                            <th align="left" ><div style=" width: 60px;"><?php echo $this->Paginator->sort('active');?></div></th>
                            <th align="left" ><div style=" width: 100px;"><?php echo $this->Paginator->sort('active','Last Activity');?></div></th>
                           <?php //if($this->Session->read('username')=='Admin' || $this->Session->read('username')=='SuperAdmin'){?>
                            <th align="left" ><div style=" width: 180px;" class="link_text"><?php echo 'Link';?></div></th>
                            <?php //} ?>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
 
        <table cellspacing="0" cellpadding="0" border="0" style="" class="flexme3">
            <tbody>
             <tr>
                     <td align='left'><div style='width: 100%; font-weight:bold;' class='alistname'><?php echo 'Customer User'; ?>&nbsp;</div></td>
                 </tr>
            <?php
             	$i = 0;
				// pr($users );die();
             	foreach ($users as $key=>$use){
            		$class = null;
            		if ($i++ % 2 == 0) {
            			$class = ' class="altrow"';
            	    }
					 
				 	
 					?>
                 
 	            <tr id="row_<?php echo $use['User']['id'];?>"  <?php echo $class;?>>
                   	
                    <td align='left'><div style='width: 72px;' class='alistname'><?php echo h($use['User']['id']); ?>&nbsp;</div></td>
					 <td align='left'><div style='width: 200px;' class='alistname'><?php  echo $use['User']['firstname']." ".$use['User']['lastname']; ?></div>
 		           <td align='left'><div style='width: 200px;' class='alistname'><?php  echo h($use['User']['email_address']); ?></div>
			        </td>
                    
                    <td  align="left"><div style='width: 60px;' class='alistname'><?php  
					
					if($use['User']['active'] == 1){echo "Active";}else{ echo "Inactive";} ?></div></td>
                       
                    <td align='left'><div style='width: 100px;' class='alistname'><?php echo h($use['User']['modified']); ?>&nbsp;</div></td>
            		<td class="actions">
                        <div style='width: 180px;' class='alistname link_link'>			
                            <?php
							 if((in_array($generalpermit,$permissions) || in_array($this->params['controller'].":edit",$permissions) )&& $this->params['action']!='edit') {
							 echo $this->Html->link(__('View'), array('action' => 'view', $use['User']['id']),array('class'=>'link_view action_link'));} ?>
			                <?php 
							 if((in_array($generalpermit,$permissions) || in_array($this->params['controller'].":view",$permissions) )&& $this->params['action']!='view') { 
							echo $this->Html->link(__('Edit'), array('action' => 'edit', $use['User']['id']),array('class'=>'link_edit action_link')); }?>
			                <?php 
							 if((in_array($generalpermit,$permissions) || in_array($this->params['controller'].":delete",$permissions) )&& $this->params['action']!='delete') { 
							echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $use['User']['id']), array('class'=>'link_delete action_link'), __(' Are you sure you want to delete this User?')); }?>
		                </div>
		            </td>
                </tr>
            <?php  
			} ?>
            </tbody>
        </table>
    </div>
     <div class="pDiv">
        <div class="pGroup">
         	<?php 
			// pr($this->request->params);die();
			if($this->request->params['paging']['User']['prevPage']){?>
            <span class='paginate_link'><?php echo $this->Paginator->first();?></span> <span class='paginate_link'><?php echo $this->Paginator->prev('< ' . __('Previous'), array(), null, array('class'=>'disabled','id'=>'prev_id'));?></span>
            <?php }?>
            <?php echo $this->Paginator->numbers();?>
            <?php if($this->request->params['paging']['User']['nextPage']){?>
                <span class='paginate_link'> <?php echo $this->Paginator->next(__('Next') . ' >', array(), null, array('class' => 'disabled','id'=>'next_id', 'span'=>false));?> </span> <span class='paginate_link'><?php echo $this->Paginator->last();?></span>
            <?php }?>
        </div>
    </div>     
</div>
</div>