<?php echo $this->Html->script(array('common/form','common/jquery.validate','jquery.form'));?>
<div class="users form">
	<?php echo $this->Form->create('User',array('controller'=>'users','action'=>'reset'));?>
  
	 
      <div class="row-fluid">
      <div class="dialog">
    <div class="block">
    <div class="title_text">COMPLETA TUO REGISTRAZIONE</div>
    <br /><br />
            
            <div class="block-body">
            <div id="WrapperUserPassword" class="span12">
				 
                <?php echo $this->Form->label('User.password', __('ACCETTO TERMINI E CONDIZIONI'.'<span class="star">&nbsp;</span>', true) ); ?>:
                <?php echo $this->Form->input('User.checkbox',array('type'=>'checkbox','div'=>false,'label'=>false, 'size'=>35 ,'class'=>'required'));?>
                <div class="clr"></div>
                
            </div>
            <div class="clr"></div>
            <div id="WrapperUserPassword" class="span12">
				<?php echo $this->Form->input('User.id',array('type'=>'hidden'));?>
                <?php echo $this->Form->label('User.password', __('Reset Password'.'<span class="star">&nbsp;</span>', true) ); ?>:
                <?php echo $this->Form->input('User.email_address',array('type'=>'hidden','div'=>false,'label'=>false, 'size'=>35 ,'class'=>'required'));?>
                <?php echo $this->Form->input('User.password',array('value'=>'','type'=>'password','div'=>false,'label'=>false, 'size'=>35 ,'class'=>'required' , 'id'=>'UserPassword1'));?>
                <div class="clr"></div>
                
            </div>
            <div class="clr"></div>
            <div id="WrapperConfirmUserPassword" class="span12">
			<?php echo $this->Form->label('User.confirmpassword', __('Reset Confirm Password'.'<span class="star">&nbsp;</span>', true) ); ?>:
 			<?php echo $this->Form->input('User.confirmpassword',array('onpaste'=>'return false', 'oncopy'=>'return false', 'title'=>'Enter same value as password field', 'type'=>'password','div'=>false,'label'=>false, 'size'=>35 , 'class'=>'required'));?>
 	 	</div>
         <div class="clr"></div>
         <div class="button_area">
		<?php echo $this->Form->button('Reset!',array( 'class'=>'btn btn', 'id'=>'btn_reset_pwd'));?>
		<?php echo $this->Form->button('Cancel',array('type'=>'reset','name'=>'reset','class'=>'btn btn','id'=>'Cancel'));?>
</div>
        
          <div class="clearfix"></div>
            </div>
        </div>
        
    </div>
</div>
     <?php echo $this->Form->end();?>
     
 </div>
<script type="text/javascript">
jQuery(function($){ 
 jQuery("#UserResetForm").validate({
		rules: {
  		"data[User][confirmpassword]": {
      		equalTo: "#UserPassword1"
		},
		"data[User][password]": {
     		required: true,
			minlength: 8}
		}
	});
	
	
	$('#btn_reset_pwd').click(function(e){
		e.preventDefault();
 		//========================== Validation Check ========
  		if( $('#UserResetForm').valid()) 
 		{
			$('#UserResetForm').submit()
		}
		  	return false; 
		}) ;
});

</script>
 <style>
 .block-body label{
 	width:225px;
	display:inline-block;
	margin-bottom:10px;
 }
 .row-fluid{
 	margin:0px auto;
	width:450px;
 }
 .button_area{
 	padding-left:233px;
 }
 #leftPan{display:none !important; height:300px;}
 #rightPan{
 	width:100%;
 }
 .title_text{
 	font-weight:bold;
	text-align:center;
	padding-top:25px;
 }
 label.error{
 	font-size:9px;
	color:#FF0000;
	
 }
 </style>