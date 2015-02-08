<div class="flexigrid users index" style="width: 100%;">
    <div class="mDiv">
        <div class="ftitle">
            <p> <?php echo $this->Paginator->counter(array(	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')	));	?> </p>
        </div>
        <div id="searchlink"> &nbsp;</div>
    </div>
    
    <div class="tDiv">
      <div class="tDiv2">
       <?php echo $this->Form->create('User',array('action'=>'index' ));?>
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
         
          <?php echo $this->Form->button('Search',array( 'class'=>'submit', 'id'=>'btn_brand_search'));?>      <?php echo $this->Form->button('Reset',array('type'=>'reset','name'=>'reset','id'=>'Cancel', 'onClick'=>"parent.location='".$this->webroot."users/index/yes'"));?>     
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
          		           <th align="left" width="5%"><?php echo $this->Paginator->sort('id');?></th>
                           <th align="left" width="25%"><?php echo $this->Paginator->sort('firstname');?></th>
                 			<th align="left" width="25%"><?php echo $this->Paginator->sort('email_address');?></th>
                            <th align="left" width="10%"><?php echo $this->Paginator->sort('counter_name');?></th>
                            <th align="left" width="10%"><?php echo $this->Paginator->sort('active');?></th>
                            <th align="left" width="10%"><?php echo $this->Paginator->sort('active','Last Activity');?></th>
                           <?php //if($this->Session->read('username')=='Admin' || $this->Session->read('username')=='SuperAdmin'){?>
                            <th align="left" class="link_text"><?php echo 'Link';?></th>
                            <?php //} ?>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
 
        <table cellspacing="0" cellpadding="0" border="0" style="" class="flexme3">
            <tbody>
            <?php
             	$i = 0;
				 
             	foreach ($users as $key=>$user){
            		$class = null;
            		if ($i++ % 2 == 0) {
            			$class = ' class="altrow"';
            	    }
				//	pr($user);
					 
 					?>
                    <tr <?php echo $class;?>>
                     <td align='left' class='alistname' style="font-weight:bold;" colspan="8"><?php echo $groups[$key]; ?>&nbsp;</td>
                 </tr>
                    <?php	foreach($user['User'] as $use){?>
 	            <tr id="row_<?php echo $use['id'];?>"  <?php echo $class;?>>
                   	
                     <td align='left' class='alistname' width="5%"><?php echo h($use['id']); ?>&nbsp;</td>
					 <td align='left' class='alistname' width="25%"><?php  echo $use['firstname']." ".$use['lastname']; ?></td>
                     <td align='left' class='alistname' width="25%"><?php  echo h($use['email_address']); ?></td>
                     <td align='left' class='alistname' width="10%"><?php  echo h($use['counter_name']); ?></td>
                    
                    <td  align="left" class='alistname' width="10%"><?php  
					
					if($use['active'] == 1){echo "Active";}else{ echo "Inactive";} ?></div></td>
                       
                    <td align='left' class='alistname' width="10%"><?php echo h($use['modified']); ?>&nbsp;</div></td>
            		<td class="actions" class='alistname link_link' >			
                            <?php
							 if((in_array($generalpermit,$permissions) || in_array($this->params['controller'].":edit",$permissions) )&& $this->params['action']!='edit') {
							 echo $this->Html->link(__('View'), array('action' => 'view', $use['id']),array('class'=>'link_view action_link'));} ?>
			                <?php 
							 if((in_array($generalpermit,$permissions) || in_array($this->params['controller'].":view",$permissions) )&& $this->params['action']!='view') { 
							echo $this->Html->link(__('Edit'), array('action' => 'edit', $use['id']),array('class'=>'link_edit action_link')); }?>
			                <?php 
							 if((in_array($generalpermit,$permissions) || in_array($this->params['controller'].":delete",$permissions) )&& $this->params['action']!='delete') { 
							echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $use['id']), array('class'=>'link_delete action_link'), __(' Are you sure you want to delete this User?')); }?>
		                </div>
		            </td>
                </tr>
            <?php }
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


