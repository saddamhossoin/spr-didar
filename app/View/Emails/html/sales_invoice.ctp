<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <!-- Facebook sharing information tags -->
        <meta property="og:title" content="*|MC:SUBJECT|*" />
        
        <title>*|MC:SUBJECT|*</title>
		
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="background:#CCCCCC;">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable" style="background:#F2f2f2; border:1px solid #CCCCCC;">
            	<tr>
                	<td align="center" valign="top" style="padding-top:20px;">
                    	<table border="0" cellpadding="0" cellspacing="0" width="800" id="templateContainer" style="background:#ffffff;">
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Header \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                                        <tr>
										
									     	<td class="headerContent1">
                                            
                                            <div class="full_div_report_wrapper">

<div class="sec_div_wrapper">

<div class="company_title_div">

        <div class="logo_div">
       			
                 <span class='Print_Button'><span class='print_img'>&nbsp;&nbsp;</span> &nbsp;Print</span>
        </div>
        
        <div class="company_title">
        
          
            <div class="title_div_logo"><h2 style="font-weight:bold; font-size:25px; text-decoration:underline">FATTURA</h2></div>
             <div class="title_logo_right"><?php  echo $this->Html->image('wpage/spr/logo.png', array("alt" => "No Image","width"=>"230" ,"height"=>"80","border"=>"0",'url' => array('controller' => '#', 'action' =>'#')));?></div>
        
        </div>
        
        
</div>
<div class="customer_info_div">
  <div class="customer_left_div">
    <h2 class="customer_heading">Customer Info</h2>
    <div class="customer_info_p">
      <p><span style="font-weight:bold">Nome</span> : <?php echo $posSale['PosCustomer']['name'];?></p>
      <p><span style="font-weight:bold">Cognome :</span><?php echo $posSale['PosCustomer']['contactname'];?></p>
      <p><span style="font-weight:bold">Azienda :</span><?php echo $posSale['PosCustomer']['companyname'];?></p>
	   <p><span style="font-weight:bold">CF/P.IVA : </span><?php echo $posSale['PosCustomer']['iva'];?></p>
	   <p><span style="font-weight:bold">indirizzo :</span><?php echo $posSale['PosCustomer']['address'];?></p>
	     <p><span style="font-weight:bold">E-mail : </span><?php echo $posSale['PosCustomer']['email'];?></p>
      <p><span style="font-weight:bold">Telefono : </span><?php echo $posSale['PosCustomer']['tnt'];?></p>
     
    </div>
  </div>
  <div class="customer_right_div">
     <h1 class="top_title">iRiparo .</h1>
      <p class="address">  Via Calpurnia Fiamma, 67</br>
       00175 - Roma<br />
       Tel   :06764734<br />
       P.IVA :12534471003<br />
       www.iriparoroma-cinecitta.it<br />
       skype_iriparo_cenecitta<br />
       Email :irparo.cenecitta@gmail.com<br />
       </p>
  </div>
</div>
<div class="product_table_div">
    <table width="480" border="0"   class="product_table" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td height="20" class="captionLeft" >&nbsp;Data</td>
        <td height="20" class="captionLeft" >&nbsp;Metodo di pagamento</td>
        <td height="20" class="captionLeft" >&nbsp;Stato pagamento</td>
        <td height="20" class="captionLeft" >&nbsp;Stato preparazione</td>
       
      </tr>
      <tr>
        <td height="20" class="captionLeft" >&nbsp;<span><?php echo date("j-n-Y H:i",strtotime($posSale['PosSale']['created']));?></span></td>
        <td height="20" class="captionLeft" >&nbsp;<span><?php echo $posSale['PosSale']['id'];?></span></td>
        <td height="20" class="captionLeft" >&nbsp;<span><?php if($posSale['PosCustomerLedger'][0]['account_head_id'] !=3){ echo 'Bank';}else{echo $accountsheads[$posSale['PosCustomerLedger'][0]['account_head_id']];}?></span></td>
        <td height="20" class="captionLeft" >&nbsp;<span> <?php echo $this->Session->read('Auth.User.firstname');?> <?php echo $this->Session->read('Auth.User.lastname');?></span></td>
       
      </tr>
    </tbody>
  </table>
</div>
<div class="full_data_div">
  <section id="no-more-tables">
    <?php /*?> <h3 class="invoice_h">Invoice no. <?php echo $posSale['PosSale']['id'];?></h3><?php */?>
    <table class="table-bordered table-striped table-condensed cf">
      <thead class="cf">
        <tr>
        
      <th class="numeric" width="40">N&deg;</th>
        <th class="numeric">Descrizione</th>
        <th class="numeric" width="50">Quantita</th>
        <th class="numeric" width="50">Prezzo</th>
        <th class="numeric"  width="60">Totale</th>
      </tr>
      </thead>
      
      <tbody>
        <?php 
			$slno = 1;
 		foreach($posSale['PosSaleDetail'] as $saledetail){?>
        <tr>
          <td><?php echo $slno;?></td>
          <td><?php echo $saledetail['PosProduct']['name'];
			if(!empty($saledetail['PosBarcode'])){
				echo "<div class='barcodesDiv'>Barcode: ";
				foreach($saledetail['PosBarcode'] as $barcode)
				{   
					echo "<span class='barcodes'>".$barcode['barcode']."</span> , ";
				}
			}?></td>
          <td><?php echo $saledetail['quantity'];?></td>
          <td><?php echo $saledetail['price'];?></td>
          <td><?php echo $saledetail['totalprice'];;?></td>
        </tr>
        <?php $slno ++;}?>
      </tbody>
      <thead class="cf">
        <tr>
          <th class="total_price"  width="60" colspan="4">SUBTOTAL =</th>
          <th class="numeric"  width="60"><?php  	$amount=$posSale['PosSale']['totalprice'];
	    echo $amount;
	   ?>
          </th>
        </tr>
        <tr>
          <th class="total_price"  width="60" colspan="4">TAX (<?php echo $tax; ?>% )=</th>
          <th class="numeric"  width="60"> <?php $peramount = $posSale['PosSale']['tax'];
			  echo $peramount;
		  ?></th>
        </tr>
        <tr>
          <th class="total_price"  width="60" colspan="4">Total =</th>
          <th class="numeric"  width="60"> <?php $taxamount=$peramount+$amount;
			echo $taxamount;
		?>
          </th>
        </tr>
        <tr>
          <th class="total_price"  width="60" colspan="4">Discount =</th>
          <th class="numeric"  width="60"> <?php $payable_amount=$taxamount-$posSale['PosSale']['discount'];
			echo  $posSale['PosSale']['discount'];
		?></th>
        </tr>
        <tr>
          <th class="total_price"  width="60" colspan="4">Paid =</th>
          <th class="numeric"  width="60"> <?php echo $posSale['PosSale']['payamount'];?></th>
        </tr>
        <tr>
          <th class="total_price"  width="60" colspan="4">Due =</th>
          <th class="numeric"  width="60"> <?php $due=$payable_amount-$posSale['PosSale']['payamount'];
		 	  echo $due;
			//  die();
	 	?>
          </th>
        </tr>
      </thead>
    </table>
  </section>
</div>
 



</div>
</div>


                                            
                                     
<p><strong>Thanks again for your support! </strong></p>
<p><em> iripair </em><br />
  <br />
</p>
                                                          </div>
														</td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="center" valign="top" style="padding-top:0;">
                                                        	<table border="0" cellpadding="15" cellspacing="0" class="templateButton">
                                                            	<tr>
                                                                	<td valign="middle" class="templateButtonContent" style=" background:#4A7296; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px;">
                                                                    	<div mc:edit="std_content01">
                                                                        	<a href="http://www.iripair.org/" target="_blank" style="color:#ffffff; font-weight:bold;"> Iripair.org </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Content \\ -->
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Footer \\ -->
                                	<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                                    	<tr>
                                        	<td valign="top" class="footerContent">
                                            
                                                <!-- // Begin Module: Transactional Footer \\ -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top">
                                                            <div mc:edit="std_footer">
																<em>Copyright &copy; PreCall LLC, All rights reserved.</em>
																<br />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Transactional Footer \\ -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </table>
                        <br />
                    </td>
                </tr>
            </table>
        </center>
    </body>
	<style type="text/css">
			/* Client-specific Styles */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
			body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

			/* Reset Styles */
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
			#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

			/* Template Styles */

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Page
			* @section background color
			* @tip Set the background color for your email. You may want to choose one that matches your company's branding.
			* @theme page
			*/
			body, #backgroundTable{
	/*@editable*/ background-color:#eeebe3;				
			}

			/**
			* @tab Page
			* @section email border
			* @tip Set the border for your email.
			*/
			#templateContainer{
				/*@editable*/ border: 1px solid #DDDDDD;
			}

			/**
			* @tab Page
			* @section heading 1
			* @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
			* @style heading 1
			*/
			h1, .h1{
	/*@editable*/ color:#666;
	display:block;
	/*@editable*/ font-family:Georgia, "Times New Roman", Times, serif;
	/*@editable*/ font-size:34px;
	/*@editable*/ font-weight:normal;
	/*@editable*/ line-height:100%;
	margin-top:0;
	margin-right:0;
	margin-bottom:10px;
	margin-left:0;
	/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 2
			* @tip Set the styling for all second-level headings in your emails.
			* @style heading 2
			*/
			h2, .h2{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Georgia, "Times New Roman", Times, serif;
				/*@editable*/ font-size:30px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 3
			* @tip Set the styling for all third-level headings in your emails.
			* @style heading 3
			*/
			h3, .h3{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Georgia, "Times New Roman", Times, serif;
				/*@editable*/ font-size:26px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 4
			* @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
			* @style heading 4
			*/
			h4, .h4{

	/*@editable*/ color: #7b9fc1;
	display: block;
	/*@editable*/ font-family: Georgia, "Times New Roman", Times, serif;
	/*@editable*/ font-size: 22px;
	/*@editable*/ font-weight: normal;
	/*@editable*/ line-height: 100%;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 10px;
	margin-left: 0;
	/*@editable*/ text-align: left;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Header
			* @section header style
			* @tip Set the background color and border for your email's header area.
			* @theme header
			*/
			#templateHeader{
	/*@editable*/ background-color: #FFFFFF;
	/*@editable*/ border-bottom: 3px solid #372b1b;
			}

			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
			*/
			.headerContent{
	/*@editable*/ color: #202020;
	/*@editable*/ font-family: Arial;
	/*@editable*/ font-size: 34px;
	/*@editable*/ font-weight: bold;
	/*@editable*/ line-height: 100%;
	/*@editable*/ padding: 10px;
	/*@editable*/ vertical-align: middle;
			}

			/**
			* @tab Header
			* @section header link
			* @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
			*/
			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			#headerImage{
				height:auto;
				max-width:600px !important;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Body
			* @section body style
			* @tip Set the background color for your email's body area.
			*/
			#templateContainer, .bodyContent{
				/*@editable*/ background-color:#FFFFFF;
			}

			/**
			* @tab Body
			* @section body text
			* @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
			* @theme main
			*/
			.bodyContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Georgia, "Times New Roman", Times, serif;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Body
			* @section body link
			* @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
			*/
			.bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			/**
			* @tab Body
			* @section button style
			* @tip Set the styling for your email's button. Choose a style that draws attention.
			*/
			.templateButton{
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				/*@editable*/ background-color:#abd3f6;
				/*@editable*/ border:0;
				border-collapse:separate !important;
				border-radius:3px;
			}

			/**
			* @tab Body
			* @section button style
			* @tip Set the styling for your email's button. Choose a style that draws attention.
			*/
			.templateButton, .templateButton a:link, .templateButton a:visited, /* Yahoo! Mail Override */ .templateButton a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#4a7295;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:15px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ letter-spacing:-.5px;
				/*@editable*/ line-height:100%;
				text-align:center;
				text-decoration:none;
			}

			.bodyContent img{
				display:inline;
				height:auto;
			}
			@charset "utf-8";
/* CSS Document */

h2.customer_heading{
	font-weight:bold;
	font-size:20px;
	}
h2.company_heading_right{
	width:228px;
	float:right;
	font-weight:bold;
	font-size:19px;
	}
.customer_left_div{
	float:left;
 	padding:12px;
	width:280px !important;
	}
.title_div_logo{
    float: left;
    width: 334px;
	}
.title_logo_right{
    float: inherit;
    margin-left: 138px;
    width: 225px;
	}
.print_img{
	   padding-right:10px;
  }
.Print_Button{
   font-weight:bold;
  }
.full_div_report_wrapper {
	height: 800px;
	width: 740px;
}
.sec_div_wrapper {
	height: 470px;
	margin: auto;
	width: 730px;
}
.logo_div {
	float: right;
	height: 60px;
	width: 80px;
}
.company_title_div {
	height: 150px;
	width: 707px;
}
.company_title {
	_height: 50px;
	_width: 230px;
	_float:right;
    float: left;
    height: 83px;
}
.company_title p {
	font-size: 15px;
	text-align:center;
}
.company_title h1 {
	height:18px;
	text-align:center;
	font-family:LilyUPC;
	font-size:35px;
	
}
.customer_info_div {
	_float: left;
	height: 224px;
	width: 728px;
}
.customer_info_div div {
	_float: left;
	height: auto;
	width:395px;
	margin-left:2px;
}
.customer_left_div p {
	background-color: #FFFFFF;
	color: #000000;
	font-family: Arial;
	text-align: left;
	font-size:9pt;
	line-height:16px;
}
.customer_info_p {
	height: 73px;
	width: 265px !important;
	margin-top:18px;
}
.customer_info_p p {
	padding: 0 0 1px 6px;
	line-height:20px;
}
.customer_right_div {
	background-color: #FFFFFF;
	color: #000000;
	font-family: Arial;
	text-align: left;
	font-size:8pt;
	float:left;
}
.customer_right_div p {
	padding: 0 0 1px 6px;
	background-color: #FFFFFF;
	color: #000000;
	font-family: Arial;
	text-align: left;
	font-size:10pt;
	line-height:20px;
	font-weight:bold;
}
.customer_info_right {
	width:233px !important;
	float:right !important;
}
.customer_info_table {
	float: right !important;
	width: 300px !important;
}
th.captionMiddleLeft {
	background-color: #DDDDDD;
	color: #000000;
	font-family: Arial;
	font-size: 8pt;
	text-align: left;
	vertical-align: middle;
	border:1px solid black;
	text-align:center;
}

td.captionMiddleLeft {
	border:1px solid black;
	text-align:center;
}
td.captionLeft {
 	padding:4px;
	border:1px solid black;
}
td.captionBorder {
	border:1px solid black;
	background-color: #DDDDDD;
}

.product_table_div {
	width:730px;
	height:75px;
	float:left;
}
.full_data_div {
	width:700px;
	height:auto;
	float:left;
}

.shippling_info_div{
	width:700px;
	height:auto;
	float:left;
	margin-top:20px;
	}
.table-bordered {
	border: 1px solid #DDDDDD;
	border-collapse: separate;
	margin-top:12px;
	width:100%;
}
.table-bordered th + th, .table-bordered td + td, .table-bordered th + td, .table-bordered td + th {
	border-left:1px solid #DDDDDD;
}
.table-bordered thead:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child td {
	border-top:0 none;
}
.table-striped tbody tr:nth-child(2n+1) td, .table-striped tbody tr:nth-child(2n+1) th {
	border:1px solid #ddd;
}
.table-condensed th, .table-condensed td {
	padding: 4px 5px;
	text-align:center;
}
td, th {
	text-align: left;
	white-space: nowrap;
}
h3.invoice_h {
	font-size: 18px;
	line-height: 27px;
}
th.numeric {
	font-weight:bold;
	text-align:center;
}
th.total_price {
	font-weight:bold;
	text-align:right;
}
.reviewer_div {
	width:730px;
	height:100px;
	float:left;
	margin-top:25px;
	font-family:"Times New Roman", Times, serif;
	font-size:20px;
}
p.review_p {
	padding: 0 0 0 11px;
	color: #000000;
	font-family: Arial;
	text-align: left;
	font-size:8pt;
}
td.captionBorderBelow {
	border:1px solid black;
	background-color: #DDDDDD;
	padding:6px;
}
td.captionShipping {
	border:1px solid black;
	background-color: #DDDDDD;
	padding:6px;
	text-align:center;
}



			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Footer
			* @section footer style
			* @tip Set the background color and top border for your email's footer area.
			* @theme footer
			*/

			#templateFooter{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border-top:0;
			}

			/**
			* @tab Footer
			* @section footer text
			* @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
			* @theme footer
			*/
			.footerContent div{
				/*@editable*/ color:#707070;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:12px;
				/*@editable*/ line-height:125%;
				/*@editable*/ text-align:center;
			}

			/**
			* @tab Footer
			* @section footer link
			* @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
			*/
			.footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.footerContent img{
				display:inline;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email's footer utility bar.
			* @theme footer
			*/
			#utility{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border:0;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email's footer utility bar.
			*/
			#utility div{
				/*@editable*/ text-align:center;
			}

			#monkeyRewards img{
				max-width:190px;
			}
		</style>
</html>