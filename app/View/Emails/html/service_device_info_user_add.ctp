<div style="background-color:#3494C4; padding:22px;">
	<center>
    <?php  // pr($deviceRecive);
  $data_important = array(0=>'No',1=>'Yes');?>
    	<table cellspacing="0" cellpadding="0" style="width:700px;border:0px;margin:0px">
        	<tbody>
            	<tr>
                	<td>
                    	<center>
                        	<table>
                            	<tbody>
                                	<tr>
                                    	<td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                 </tbody>
                            </table>
                         </center>
                       </td>
                     </tr>
                     <tr>
                     	<td style="background-color:#ffffff; border-radius:10px; border:8px solid #fff;">
                        	<table cellspacing="0" cellpadding="0" style="width:700px;border:0px;margin:0px">
                            	<tbody>
                                	<tr>
                                    	<td style="width:25px;vertical-align:top">&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="width:25px;vertical-align:top">&nbsp;
                                        	
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td style="background-color:#ffffff;font-family:Verdana;font-size:10pt;color:#000000;padding:5px">
                                        <table style="width:680px;border:0px;margin:0px;text-align:left">
                                        	<tbody>
                                            	<tr>
                                                	<td align="center"> <img src="http://iripair.org/img/wpage/spr/logo.png" width="300" height="150"/> </td>
                                                </tr>
                                                <tr>
                                                	<td style="background-color:#ffffff;font-family:Verdana;text-align:left;padding:10px;font-size:10pt;color:#000000; padding-bottom:25px;">
                                                    <span style="text-align:center; display:block; margin-top:35px;">GRAZIE PER AVER SCELTO IRIPARO ROMA CINECITTA’.</span><br><br><br>
                                                    <div style="font-size:12pt;color:#000074">
                                                    	<b style="text-align:center; display:block;">DATI UTENTE:</b>
                                                    </div>
                                                    
                                                    <br /><span style="text-align:left; padding-left:17px;">NOME UTENTE:  <?php echo $deviceRecive['User']['firstname'] . ' ' . $deviceRecive['User']['lastname']?></span><br />
                                                     <span style="text-align:left; padding-left:17px;">PASSWORD RESET LINK: <a href="<?php echo $urllink;?>">SCEGLI IL TUO PASSWARD.</a>	</span>
                                                    </td>
                                                 </tr>
                                                   <tr>
                                                	<td style="background-color:#ffffff;font-family:Verdana;text-align:left;padding:10px;font-size:10pt;color:#000000; padding-bottom:17px;">
                                                    <div style="font-size:13px; font-weight:bold; padding-left:18px; margin:5px 0px;"> <a href="http://iripair.org/ServiceDeviceInfos/checkStatus">Verificare lo stato del dispositivo in nostro servizio on-line.</a>	</div>
                                                   <div class="sec_div_wrapper" style="border: 1px solid #ccc;margin: 0 auto;padding: 25px; width: 87%;">
         
        
        <div class="bg_div">
		<div class="print_left">
        <div style="margin:0px auto; font-size:13px; font-weight:bold;text-align:center;text-decoration:underline;">Ricevuta del dispositivo</div>
          <div class="bardoce_print"> 
		  <img src="http://iripair.org/<?php echo $deviceRecive['ServiceDeviceInfo']['barcode_file'];?>" width="187" height="64"/>
		  </div>
              <div><span style="font-weight:bold;font-size:11px; width:150px; display:inline-block;">Nome</span>&nbsp;:&nbsp;<?php echo $deviceRecive['User']['firstname'];?></div>
            <div> <span  style="font-weight:bold;font-size:11px; width:150px; display:inline-block;">Telefono</span>&nbsp;: &nbsp;<?php echo $deviceRecive['User']['phone']; ?></div>
            <div> <span  style="font-weight:bold;font-size:11px; width:150px; display:inline-block;">Email</span>&nbsp;:&nbsp;<span style="text-transform:lowercase"><?php echo $deviceRecive['User']['email_address']; ?></span></div>
            <div> <span  style="font-weight:bold;font-size:11px; width:150px; display:inline-block;">Marca/Modello</span>&nbsp;:&nbsp;<?php echo $deviceRecive['ServiceDevice']['PosBrand']['name'];?></div>
            <div><span  style="font-weight:bold;font-size:11px; width:150px; display:inline-block;">Product</span>&nbsp;:&nbsp;<?php echo $deviceRecive['ServiceDevice']['name'];?></div>
            <div><span  style="font-weight:bold;font-size:11px; width:150px; display:inline-block;">IMEI</span>&nbsp;:&nbsp;<?php echo $deviceRecive['ServiceDeviceInfo']['serial_no']; ?></div>
             <div style="clear:both;"></div>
            <div><span  style="font-weight:bold;font-size:11px; width:150px; display:inline-block;">Accessori</span>&nbsp;:&nbsp;<?php
                if(!empty($deviceRecive['ServiceDeviceAcessory'])){
                    foreach($deviceRecive['ServiceDeviceAcessory'] as $accesorylist){
                        echo  $accesorylist['ServiceAcessory']['name']  ." , ";
                        }
                    }else{
                        echo 'Acessory not mention!!!';
            	}?>
        </div>
            <div style="line-height: 13px;"><span  style="font-weight:bold;font-size:11px; width:150px; display:inline-block;">Difetto</span>&nbsp;:&nbsp;<?php
			if(!empty($deviceRecive['ServiceDeviceDefect'])){
					foreach($deviceRecive['ServiceDeviceDefect'] as $defectlist){
						echo  $defectlist['ServiceDefect']['name']  ." , ";
					}
				}else{
					echo 'Defect not mention!!!';
				}
			?>
       </div>
       
      <table width="80%" border="0" cellpadding="0" cellspacing="0" class="prevnto_grid" style="margin-top:15px;">
  <tr>
    <td style="font-weight:bold;font-size:10px; width:150px; border-bottom:1px solid #ccc;">PREVENTIVO</td>
    <td align="left" style="border-bottom:1px solid #ccc;">:&nbsp;<?php echo $data_important[$deviceRecive['ServiceDeviceInfo']['is_customer_confirmation']]; ?></td>
    <td style="font-weight:bold;font-size:10px; width:150px; border-bottom:1px solid #ccc;">STIMATO</td>
    <td align="left" style="border-bottom:1px solid #ccc;">:&nbsp;<?php echo $deviceRecive['ServiceDeviceInfo']['estimated_budget']; ?></td>
  </tr>
  <tr>
    <td style="font-weight:bold;font-size:10px; width:150px; border-bottom:1px solid #ccc;">RIENTRO</td>
    <td style="text-align:left; border-bottom:1px solid #ccc;">:&nbsp;<?php  if(empty($is_repet)){ echo 'No';}else{ echo 'Yes';} ?></td>
    <td style="font-weight:bold;font-size:10px; width:150px;border-bottom:1px solid #ccc;">PIN</td>
    <td style="border-bottom:1px solid #ccc;">:&nbsp;<?php	echo $deviceRecive['ServiceDeviceInfo']['is_phone_block'] . " / ". $deviceRecive['ServiceDeviceInfo']['is_sim_pc_Lock'] ; ?></td>
  </tr>
  <tr>
    <td style="font-weight:bold;font-size:10px; width:150px;">DATI IMPORTANTI</td>
    <td align="left">:&nbsp;<?php echo $data_important[$deviceRecive['ServiceDeviceInfo']['is_data_backup']]; ?></td>
    <td style="font-weight:bold;font-size:10px; width:150px;">URGENTE</td>
    <td>:&nbsp;<?php	 
		if($deviceRecive['ServiceDeviceInfo']['is_urgent'] == 121){
			echo 'Express Service';
		}else{
			echo $data_important[$deviceRecive['ServiceDeviceInfo']['is_urgent']];
		} ?></td>
  </tr>
</table>
 
     
    <div style="clear:both">&nbsp;</div>
        
    <div style="height: 40px; margin-left: 8px; margin-top: 1px; display: block; font-size: 10px;">NOTE :&nbsp;<?php	echo $deviceRecive['ServiceDeviceInfo']['description']; 
	//pr();
	
	?> </div>
    <div class="inovice_fotter">
     <span></span>
          </div>
       </div>   
          
   	 </div>
     </div>
  
         
                                                    </td>
                                                 </tr>
                                                 
                                                 <tr>
                                                 <td style=" font-family:Verdana;font-size:10pt;color:#000000;padding:5px;text-align:left">
                                                 <table style="table-layout:fixed;width:680px">
                                                 	<tbody>
                                                    	<tr>
                                                        <td style="padding-left:25px;text-align:left">I VANTAGGI DELLA REGISTRAZIONE: 
                                                         
                                                        <ul>
                                                            <li style="list-style:decimal; display:block;"><img src="http://iripair.org/img/leftarrow.png" width="10" />&nbsp;RIMANERE AGGIORNATI SULLO STATO DELLA VOSTRA RIPARAZIONE</li>
                                                            <li style="list-style:decimal; display:block;"><img src="http://iripair.org/img/leftarrow.png" width="10" />&nbsp;PRIORITA’ CON APPUNTAMENTO</li>
                                                            <li style="list-style:decimal; display:block;"><img src="http://iripair.org/img/leftarrow.png" width="10" />&nbsp;SCONTI RISERVATI</li>
                                                        </ul>

                                                        </td>
                                                       </tr>
                                                       <tr>
                                                       <td style="padding-left:18px; padding-top:25px;">
                                                 	<div dir="ltr">  <div style="padding:0px;margin:0.1em 0px;font-family:HelveticaNeue,&quot;Helvetica Neue&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif"><span style="font-size:small;color:rgb(68,0,98);font-weight:bold">IRIPARO ROMA CINECITTA<br></span></div><div style="padding:0px;margin:0.1em 0px;font-family:HelveticaNeue,&quot;Helvetica Neue&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif"><span style="font-size:small;font-style:italic;color:rgb(68,0,98);font-weight:bold">VIA CALPURNIO FIAMMA 67<br></span></div><div style="padding:0px;margin:0.1em 0px;font-family:HelveticaNeue,&quot;Helvetica Neue&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif"><span style="font-size:small;font-style:italic;color:rgb(68,0,98);font-weight:bold">00175 ROMA.ITALY<br>tel. 06764734<br></span></div><div style="padding:0px;margin:0.1em 0px;font-family:HelveticaNeue,&quot;Helvetica Neue&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif"><span style="font-size:small;font-style:italic;color:rgb(68,0,98);font-weight:bold">P.IVA: <a target="_blank" value="+12534471003" href="tel:12534471003">12534471003</a><br></span></div><div style="padding:0px;margin:0.1em 0px;font-family:HelveticaNeue,&quot;Helvetica Neue&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif"><span style="font-size:small;font-style:italic;color:rgb(68,0,98);font-weight:bold">e-mail_ <a target="_blank" href="mailto:solutionpointroma@yahoo.com"><span>romacinecitta@iriparo.com</span></a></span></div><div style="padding:0px;margin:0.1em 0px;font-family:HelveticaNeue,&quot;Helvetica Neue&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif"><span style="font-size:small;font-style:italic;color:rgb(68,0,98);font-weight:bold">skype_ iriparo_cinecitta</span></div><div style="padding:0px;margin:0.1em 0px;font-family:HelveticaNeue,&quot;Helvetica Neue&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif"><span style="font-size:small;font-style:italic;color:rgb(68,0,98);font-weight:bold"><a target="_blank" href="http://web_www.solutionpointroma.it">web: www.iriparoroma-cinecitta.com</a></span></div><br><font size="1" face="Comic Sans MS" style="background-color:rgb(255,255,255);color:rgb(68,68,68)"><span style="line-height:14px;font-size:7.5pt">******************************<wbr></wbr>******************************<wbr></wbr>******************************<wbr></wbr>*********</span></font><font size="1" face="Comic Sans MS" style="background-color:rgb(255,255,255);color:rgb(68,68,68)"><span style="line-height:14px;font-size:7.5pt"><br>Le
 informazioni trasmesse sono da intendere solo per la persona e/o 
società a cui sono indirizzate, possono contenere documenti 
confidenziali e/o materiale riservato. Qualsiasi modifica, inoltro, 
diffusione o altro utilizzo, relativo alle informazioni trasmesse, da 
parte di persone e/o società, diversi dai destinatari indicati, è 
proibito ai sensi della legge 196/2003. Se Lei ha ricevuto questa mail 
per errore, per favore contatti il mittente e cancelli queste 
informazioni da ogni computer.</span></font><font size="1" face="Comic Sans MS" style="background-color:rgb(255,255,255);color:rgb(68,68,68)"><span style="line-height:14px;font-size:7.5pt"><br>&nbsp;</span></font><font size="1" face="Comic Sans MS" style="background-color:rgb(255,255,255);color:rgb(68,68,68)"><span style="line-height:14px;font-size:7.5pt"><br>Privileged/Confidential
 Information may be contained in this message. If you
 are not the addressee indicated in this message (or responsible for 
delivery of the message to such person), you may not copy or deliver 
this message to anyone. In such case, you should destroy this message 
and kindly notify the sender by reply email. Please advise immediately 
if you or your employer does not consent to Internet email for message</span></font><br><br><span style="color:rgb(91,136,40)">'IRIPARO ROMA CINECITTA' strictly respect the environment</span><br><span style="color:rgb(91,136,40);font-weight:bold;font-style:italic">Please consider the environment and do not print this email unless absolutely necessary. </span><div class="yj6qo"></div><div class="adL"> <br></div></div>
                                                 </td>
                                                       
                                                       </tr>
                                                        
                                                     </tbody>
                                                   </table>
                                                  </td>
                                                 </tr>
                                                 
                                               </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                         
                                                 
                                                  
                                                                 
                                                  </tbody>
                                                </table>
                                              </td>
                                           </tr>
                                        </tbody>
                                      </table>
                                   </center>
                                 </div>