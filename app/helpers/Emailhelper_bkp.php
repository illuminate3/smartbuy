<?php 
   //Oxigen helper functions
class  Emailhelper {


	public static function header($code){
	
  	
	 $contents[$code['status']]['header'] = '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body style="background-color:#f7f7f7;">
<div style="float:left; background-color:#f7f7f7; width:745; font-family:Arial, Helvetica, sans-serif; font-size:12px; padding:20px 13px 20px 13px; margin:0px auto; color:#333333;">
    <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
         <tr>
           <td><a href="#" style="text-decoration:none;">
<img src="http://202.140.38.73/smartbuy/public/themes/hdfc/assets/images/smartbuy-email.jpg" /></a></td>
            <td align="right"><a href="#" style="text-decoration:none;"><img style="width:170px;" src="http://202.140.38.73/smartbuy/public/themes/hdfc/assets/images/hdfc-logo.jpg"  /></a></td>
        </tr>
        <tr><td colspan="2" style="height:30px;"></td></tr><tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333; width:674px; border:2px solid #f3f3f3; background-color:#ffffff; margin:0px 0px 0px 0px;">
            	<table cellpadding="0" cellspacing="0" border="0" align="center" style="width:634px;">
            		<tr><td colspan="2" style="border-bottom:1px dotted #333333; padding:20px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px; color:#333333;">Dear {{customer}} ,<br /><br />';
        
              	  $contents[$code['status']]['footer'] = '<tr><td colspan="2" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:20px 0px 15px 0px; margin:0px;">For any assistance please email <a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="mailto:{{support}}">{{support}}</a> or call <span style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;">1800-0000-000</span>.</td></tr>
                </table>
               <tr>
   <td  style="padding:15px 0 0;">
   <table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td style="color: #808080; font-size: 11px;">Copyright ©2014 Reward360. All rights reserved.</td>
    <td align="right"><img src="http://202.140.38.73/smartbuy/public/themes/hdfc/assets/images/s_rlogo.jpg" alt=""/></td>
  </tr>
</table></td>
        </tr>		
    </table>
</div>
</body>    
</html>';
			
				$contents['Successful']['message'] = 'Congratulations on the Successful {{type}} transaction against your {{project}}<br />Please find below your transaction details. </td>';
				
            	$contents['Failed']['message'] = 'Sorry! Your order has Failed <br />Please find below your transaction details. </td>';
            	$contents['Declined']['message'] = 'Sorry! Your order has Failed.The deducted amount will be refunded back to your account in the next 15 business days. <br />Please find below your transaction details. </td>';

	
	return $contents[$code['status']]; 
	
	}
	
     public static function hungama($code)
	{  
			
		       $content = '<tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:15px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td width="20%"></td>
                                    <td width="30%"></td>
                                    <td width="25%" style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">{{project}} Ref No : </td>
                                    <td width="25%" style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">'.$code['order_number'].'</td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Booked on : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">'.date('d-m-y').' </td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Status : </td>
                                	<td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;"> '.$code['status'].'</td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Order Details</td></tr>
                    <tr>';
                   $music_details = base64_decode($code['input']->Posted->music_details);
                    $music=explode('|',$music_details);
                    
                   $content .= '<td colspan="2" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="50%">
                            	<tr>
                                	<td style="color:#808080; width:20px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Song</td>
                                    <td style="color:#808080; width:20px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$music[2].'</td>
                                     </tr>
                                <tr>
                                    <td style="color:#808080; width:55px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Album</td>
                                      <td style="color:#808080; width:55px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$music[1].'</td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Payment Details</td></tr>
                    <tr>
                    	<td colspan="2" style="padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> Name</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Email ID</td>
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> {{customer}}</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="{{email}}">{{email}}</a></td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>';
           $subtotal = 0; 
	$deal_cash=0;
	$point_flag=0;
	foreach (Cart::content() as $cartkey=>$product):
  
		if($cartkey<>'') { 
		if(isset($product['options']['apiproduct']) && !empty($product['options']['apiproduct']))
		$quantitynew=$product['options']['quantity'];
		else{
		if(!(bool)$product['options']['fixed_quantity'])
		$quantitynew=$product['options']['quantity'];
		else
		$quantitynew=1;
		}
	$total_cash=$product['options']['custom_cash'];
		$content .=         '<tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:30px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Total Amount</td>
                                    <td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">10 </td>
                                </tr>
                                <tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Paid Cash</td>'; 
                                	 if(isset($code['status']) && $code['status'] =='Successful') { 
                                	
                              $content .= '<td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$product['options']['custom_cash'].'</td> '; } else {
                         
                                	$content .= '<td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Rs 0 </td>';
                                    
                                   } 
                              $content .= '  </tr>
                               
                                
                            </table>                       
                        </td>
                    </tr>';
 			} endforeach;
            
                    
			return $content;
	}

  public static function funcinemas($code)
	{ 
	
			$content = '';
			$content .= '<tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:15px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td width="20%"></td>
                                    <td width="30%"></td>
                                    <td width="25%" style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">{{project}} Ref No : </td>
                                    <td width="25%" style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$code['order_number'] .'</td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Booked on : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;"> '.date('d-m-y') .'</td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Status : </td>'.$code['status'].'</td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Order Details</td></tr>
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>';
                            	$details = $code['input']->Posted;  
                               $content .= '<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Movie</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$details->Movie .'</td>
                                </tr>
                                <tr>
                                	<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Center/Screen</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$details->Center.' / '.$details->Screen .'</td>
                                </tr>
                                 <tr>
                                	<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Class</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$details->Class .'</td>
                                </tr>
                                <tr>
                                	<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">ShowTime</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$details->ShowTime .'</td>
                                </tr>
                                <tr>
                                	<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">No of Tickets</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$details->QTY .'</td>
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Ticket Price</td>
                                   <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"></td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"> '.round($details->amount).'</td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Payment Details</td></tr>
                    <tr>
                    	<td colspan="2" style="padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Member Name</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Email ID</td>
                                    
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> {{customer}}</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="{{email}}"> {{email}}</a></td>
                                    
                                </tr>
                            </table>                       
                        </td>
                    </tr>';
                   
	$subtotal = 0; 
	$deal_cash=0;
	$deal_points=0;
	$point_flag=0;
	foreach (Cart::content() as $cartkey=>$product):
	
		if($cartkey<>'') { 
		if(isset($product['options']['apiproduct']) && !empty($product['options']['apiproduct']))
		$quantitynew=$product['options']['quantity'];
		else{
		if(!(bool)$product['options']['fixed_quantity'])
		$quantitynew=$product['options']['quantity'];
		else
		$quantitynew=1;
		}
		//$points=Rewards::point_to_case($product['points']*$quantitynew);
	//$total_cash+=$cash;
	//$total_points=$product['options']['custom_point'];
	$total_cash=$product['options']['custom_cash'];
                   $content .=  '<tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:30px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Total Amount</td>
                                    <td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.round($details->amount).' </td>
                                </tr>
                                <tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Paid by Cash</td>';
                                	
                                                        
                              $content .= '<td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">  '.$product['options']['custom_cash'] .'</td>';    
                               $content .=  '</tr>
                                <tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Paid by Points</td>';
                                 
                           
                             $content .= '  </tr>
                                
                            </table>                       
                        </td>
                    </tr>';
                    } endforeach; 
                    $content .= '<tr>
                    	<td colspan="2" style="padding:5px 0px 0px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                        	<table cellpadding="0" cellspacing="0" border="0" width="100%">    
                        	
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">Important Information</td></tr>
                                <tr><td valign="top" width="18" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="width:700px; color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;">Please quote your {{project}} reference number for all future communication with us on this booking.</td></tr>
                                <tr><td valign="top" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;">Your Points serves as a confirmation of your movie booking.</td></tr>
                			</table>
                   		</td>
                  	</tr><tr><td>
Attention! Please read important information!<td>
<tr><td>This movie is being booked though {{partner}}</td></tr>
<tr><td>For any query related to payment status and booking confirmation, please contact us at email address and call centre number</td></tr>
<tr><td>The movie ticket once booked cannot be modified or cancelled</td></tr>';
                  	return $content; 
	}
        public static function cinepolis($code)
	{ 

			$content = '';
			$content .= '<tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:15px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td width="20%"></td>
                                    <td width="30%"></td>
                                    <td width="25%" style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">{{project}} Ref No : </td>
                                    <td width="25%" style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$code['order_details']->order_number .'</td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Booked on : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;"> '.date('d-m-y') .'</td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Status : </td>'.$code['order_details']->status.'</td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Order Details</td></tr>
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>';
                            	$details = $code['input']->Posted;  
                               $content .= '<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Movie</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$code['input']->Posted->moviename .'</td>
                                </tr>
                                <tr>
                                	<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Center/Screen</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$code['input']->Center.'</td>
                                </tr>
                                 <tr>
                                	<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Class</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$code['input']->Class.'</td>
                                </tr>
                                <tr>
                                	<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">ShowTime</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$code['input']->showtime .' '.$code['input']->showdate.'</td>
                                </tr>
                                <tr>
                                	<td style="color:#808080; width:115px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">No of Tickets</td>
                                    <td style="color:#808080; width:110px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$code['input']->Posted->QTY .'</td>
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Ticket Price</td>
                                   <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"></td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"> '.round($code['input']->Posted->amount).'</td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Payment Details</td></tr>
                    <tr>
                    	<td colspan="2" style="padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Member Name</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Email ID</td>
                                    
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> {{customer}}</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="{{email}}"> {{email}}</a></td>
                                    
                                </tr>
                            </table>                       
                        </td>
                    </tr>';
                   
	$subtotal = 0; 
	$deal_cash=0;
	$deal_points=0;
	$point_flag=0;
	foreach (Cart::content() as $cartkey=>$product):
	
		if($cartkey<>'') { 
		if(isset($product['options']['apiproduct']) && !empty($product['options']['apiproduct']))
		$quantitynew=$product['options']['quantity'];
		else{
		if(!(bool)$product['options']['fixed_quantity'])
		$quantitynew=$product['options']['quantity'];
		else
		$quantitynew=1;
		}
		//$points=Rewards::point_to_case($product['points']*$quantitynew);
	//$total_cash+=$cash;
	//$total_points=$product['options']['custom_point'];
	$total_cash=$product['options']['custom_cash'];
                   $content .=  '<tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:30px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Total Amount</td>
                                    <td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.round($code['input']->Posted->amount).' </td>
                                </tr>
                                <tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Paid by Cash</td>';
                                	
                                                        
                              $content .= '<td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">  '.$product['options']['custom_cash'] .'</td>';    
                               $content .=  '</tr>
                                <tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Paid by Points</td>';
                                /* $content .= '<td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$product['options']['custom_point'] .'</td>';*/
                           
                             $content .= '  </tr>
                                
                            </table>                       
                        </td>
                    </tr>';
                    } endforeach; 
                    $content .= '<tr>
                    	<td colspan="2" style="padding:5px 0px 0px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                        	<table cellpadding="0" cellspacing="0" border="0" width="100%">    
                        	
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">Important Information</td></tr>
                                <tr><td valign="top" width="18" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="width:700px; color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;">Please quote your {{project}} reference number for all future communication with us on this booking.</td></tr>
                                <tr><td valign="top" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;">Your Points serves as a confirmation of your movie booking.</td></tr>
                			</table>
                   		</td>
                  	</tr><tr><td>
Attention! Please read important information!<td>
<tr><td>This movie hotel is being booked though {{partner}}</td></tr>
<tr><td>For any query related to payment status and booking confirmation, please contact us at email address and call centre number</td></tr>
<tr><td>The movie ticket once booked cannot be modified or cancelled</td></tr>';
                  	return $content; 
	}
	
      public static function recharge($code)
	{ 
	 $order_number = $code['order_number'];
	 $rm_details=$code['recharge_details']; 
	 $operator     = @$code['operator'];
	 $recharge_result =  explode('~',$rm_details[0]->Response);
	 $post_values=$code['post']; 
	 $content = '';
	 $order_status = '<td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Order Status</td>
                                </tr>
                               <br/> <br/>
                                <tr>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">{{customer}}
                                    </td><td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">'.$post_values['amount'].'</td>'; 
                                    
	 $content .= ' <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:15px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                                        <tr>
                                	 <td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Order Number: </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">'.$order_number.'</td>
                                </tr>';
                                
                                    if($post_values['ttype'] =='etop') { 
                               $content .= '<tr>    <td width="25%" style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Transaction Number : </td>
                                      <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">'.$recharge_result[1].'</td>  </tr>';
                                  } else{ 
                                    $content .= '<tr>    <td width="25%" style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Transaction Number : </td>
                                     <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">'.$recharge_result[9].'</td> </tr>';
                                    }
                                
                               $content .= ' <tr>
                               		 
                                	 <td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Recharged on : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">'.date('d-m-y').'</td>
                                </tr>
                                
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Order Details</td></tr>
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
		<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:300px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Customer Name</td>
                                   
                                    <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Amount</td>';
                                                            
                          if($post_values['payment'] =='postpaid' || $post_values['payment'] =='recharge') {
                          $content .= '<td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Operator</td>
                         <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Mobile Number</td>'.$order_status.'<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.@$operator.'</td>
                                     
                                      <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['mobile'].'</td> ';
                         
                         }  else if($post_values['payment'] =='electricity') {
                       $content .= ' <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Electricity Name</td>
                           <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Consumer Number</td> '.$order_status.'<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['biller_name'].'</td>
                                      <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['service_no'].'</td>';
                           
                           } else if($post_values['payment'] =='DTH') { 
                          $content .= ' <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Operator</td>
                              <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">DTH Number</td> '.$order_status.'<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['biller_name'].'</td>
                                     
                                      <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['subscriber_id'].'</td>';
                            } else if($post_values['payment'] =='insurance') { 
                           $content .= '  <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Insurance Name</td>
                              <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Policy Number</td>'.$order_status.'<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['biller_name'].'</td>
                                     
                                      <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['policy_no'].'</td>';
                           }  else if($post_values['payment'] =='gas') {
                           
                          $content .= '<td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">GAS Service Name</td>
                              <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Consumer Number</td>'.$order_status.'<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['biller_name'].'</td>
                                     
                                      <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['customer_id'].'</td> ';
                           
                           }  else if($post_values['payment'] =='charity') { 
                           
                          $content .=  '<td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Charity Name</td>
                              <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Contribution Scheme</td>'.$order_status.'<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['biller_name'].'</td>
                                     
                                      <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['contribution_scheme'].'</td> ';
                           
                           } else if($post_values['payment'] =='creditcard') {
                            $content .= '<td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Creditcard  Name</td>
                              <td style="color:#808080; width:290px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Creditcard Number</td>'.$order_status.' <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['biller_name'].'</td>
                                      <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$post_values['creditcard_number'].'</td>';
                          } 
                          $content .= '<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$code['status'].'</td> </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Payment Details</td></tr>
                    <tr>
                    	<td colspan="2" style="padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"><b>Member Name</b></td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"><b>Email ID<b/></td>
                                    
                                </tr> <br/><br/>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">{{customer}}</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="mailto:{{email}}">{{email}}</a></td>
                                </tr>
                                	 <td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Paid By Cash </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Rs.'.$post_values['amount'].'</td>
                                </tr>'; 
                          
             return $content;               
	}  
     
	 public static function hotels($code)
	{ 
		$rm_details=$code['rm_details']; 
		$details = $code['values'];
		$content = '<tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:15px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>';
							
							if(isset($rm_details['HotelRoomReservationResponse']['itineraryId'])) {  
                                
                            $content .=   '<td width="20%" style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">{{partner}} Ref No:</td>
                                    <td width="30%" style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$rm_details['HotelRoomReservationResponse']['itineraryId'].'</td>';
                                    } 
                                  $content .=  '<td width="25%" style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">{{project}} Ref No : </td>
                                    <td width="25%" style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$code['order_number'].'</td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Booked on : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;"> '.date('d-m-y').'</td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Status : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">'.$code['status'].'
                                    </td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Booking Details</td></tr>
                    <tr>
                    	<td valign="top" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333; width:380px;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td valign="top" style="color:#808080; width:130px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Hotel:</td>
                                    <td valign="top" style="color:#333333; width:250px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$details['name'].'</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Address:</td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$details['cityname'].',</br> ';
                                    if(isset($rm_details['HotelRoomReservationResponse']['hotelPostalCode'])){$content .= $rm_details['HotelRoomReservationResponse']['hotelPostalCode'].',</br> '.$rm_details['HotelRoomReservationResponse']['hotelCountryCode'];}
                                   $content .=  '</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"></td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"></td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"></td>
                                    <td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="mailto:test@cleartrip.com"></a><br /><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="mailto:test@smartbuy.com"></td>
                                </tr>
                            </table>                       
                        </td>
                        <td valign="top" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; width:245px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td valign="top" style="color:#808080; width:125px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Checkin Date: </td>
                                    <td valign="top" style="color:#333333; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$details['check_in'].'</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Checkout Date: </td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$details['check_out'].'</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">No. of Rooms: </td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$details['num_rooms'].'</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Room Type: </td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$details['rm_desc'].'</td>
                                </tr>';
                                
                                $count=1; for($i=1; $i<=$details['num_rooms']; $i++)
                                {
                             $content .=   '<tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">No. of Guests: Room  '.$count.'</td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$details['numberOfAdults'.$i].' Adult,  '.$details['numberOfChildren'.$i].' Child</td></tr>';
                                    $count=$count+1; }                
                           $content .= '</table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Room Details</td></tr>
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:17%; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Room #</td>
                                    <td style="color:#808080; width:25%; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Room Type</td>
                                    <td style="color:#808080; width:25%; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Reserved for</td>
                                    <td style="color:#808080; width:16%; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Confirmation #</td>
                                    <td style="color:#808080; width:17%; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Refundable</td>
                                </tr>';
                              $rooms=$details['rm_desc'];
                              
                                for($i=1;$i<=$rooms;$i++) { 
                               $content .= '<tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">';  $content .= $i.'</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> '.$details['rm_desc'].'</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"> '.$details['firstName'.$i].' '.$details['lastName'.$i].'</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> ';
                                    if(isset($rm_details['HotelRoomReservationResponse']['confirmationNumbers'][$i])) { $content .= $rm_details['HotelRoomReservationResponse']['confirmationNumbers'][$i]; }
                                    $content .= '</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">';
                                    if(isset($rm_details['HotelRoomReservationResponse'])){
                                     if($rm_details['HotelRoomReservationResponse']['nonRefundable']==1)
                                     {
                                     $content .= 'No';
                                     }
                                     else
                                     {
                                     $content .= 'Yes'; 
                                     }}
                                      $content .= '</td>
                                </tr>';
                                 } 
                            $content .= '</table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Tariff Details</td></tr>
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Base Fare</td>
                                    <td style="color:#808080; width:206px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Taxes & Other Charges</td>
                                    <td style="color:#808080; width:260px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Total</td>
                                </tr>';
                                
                                 $roombook=$details['num_rooms'];
                              $base= $details['average_rate']; 
                              //$base=$bas*$roombook;
                              if(isset($rm_details['HotelRoomReservationResponse']['RateInfos']['RateInfo']['ChargeableRateInfo']['Surcharges']['Surcharge']['@amount']))
                              {
                              $tax= $rm_details['HotelRoomReservationResponse']['RateInfos']['RateInfo']['ChargeableRateInfo']['Surcharges']['Surcharge']['@amount']; 
                              //$tax=$ta*$roombook;
                              }
                              else
                              {
                              $tax=0;
                              }
                             if(isset($rm_details['HotelRoomReservationResponse']['RateInfos']['RateInfo']['ChargeableRateInfo']['@surchargeTotal']))
                             {
                              $total=$rm_details['HotelRoomReservationResponse']['RateInfos']['RateInfo']['ChargeableRateInfo']['@total'];
                              }else
                              {
                               $total=$details['amount'];
                              }
                                // $tota=$tota*$roombook;
                                
                           $content .=    ' <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Rs.  '.$base.' </td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Rs.  '.$tax.'</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs.  '.$total.' </td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Payment Details</td></tr>
                    <tr>
                    	<td colspan="2" style="padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Member Name</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Email ID</td>
                                    
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">{{customer}}</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="{{email}}"> {{email}}</a></td>
                                    
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    
                    
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:30px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Total Amount</td>
                                    <td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Rs. '.round($total).'</td>
                                </tr>
<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Paid by Credit Card</td>
                                    <td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Rs. '.$code['values']['amount'].' </td>
                                </tr>
                              
                            </table>                       
                        </td>
                    </tr>
                   
                    <tr><td colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">Hotel Cancellation Policy</td></tr>
                    
                    <tr>
                    	<td colspan="2" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;">';
							if(isset($rm_details['HotelRoomReservationResponse']['cancellationPolicy'])) $content .= $rm_details['HotelRoomReservationResponse']['cancellationPolicy']; else $content .= 'No cancellation Policy'; 
                     $content .= '  </td>
                    </tr>';
                  	return $content;
	
    }

	public static function cleartrip_hotels($code)
	{ 
		$details=$code['details']; 
		$post=$code['values'];
		$hotel=json_decode(urldecode($code['values']['postvalue']));
		$content = '<tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:15px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>';
							
							if(isset($details['itinerary'])) { 
                                
                            $content .=   '<td width="20%" style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">{{partner}} Ref No:</td>
                                    <td width="30%" style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$details['itinerary']['trip-ref'].'</td>';
                                    } 
                                  $content .=  '<td width="25%" style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">{{project}} Ref No : </td>
                                    <td width="25%" style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '.$code['order_number'].'</td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Booked on : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;"> '.date('d-m-y').'</td>
                                </tr>
                                <tr>
                               		<td></td>
                                    <td></td>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Status : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">'.$code['status'].'
                                    </td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Booking Details</td></tr>
                    <tr>
                    	<td valign="top" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333; width:380px;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td valign="top" style="color:#808080; width:130px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Hotel:</td>
                                    <td valign="top" style="color:#333333; width:250px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$post['hotel_name'].'</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Address:</td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> ';
                                    if(isset($details['itinerary'])){ $content .= $details['itinerary']['hotel-detail']['address'].',</br>'.$details['itinerary']['hotel-detail']['city']; } else{
                                    $content .= $hotel->cityname; 
                                    }
                                   $content .= '</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"></td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"></td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"></td>
                                    <td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="mailto:test@cleartrip.com"></a><br /><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="mailto:test@smartbuy.com"></td>
                                </tr>
                            </table>                       
                        </td>
                        <td valign="top" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; width:245px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td valign="top" style="color:#808080; width:125px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Checkin Date: </td>
                                    <td valign="top" style="color:#333333; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$hotel->check_in.'</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Checkout Date: </td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$hotel->check_out.'</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">No. of Rooms: </td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.$hotel->num_rooms.'</td>
                                </tr>
                                <tr>
                                	<td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Room Type: </td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> '.@$details['itinerary']['rooms']['room']['type'].'</td>
                                </tr>  <tr>
                                    <td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">No. of Guests: </td>
                                    <td valign="top" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">'.@$details['itinerary']['rooms']['room']['guests'].'</td></tr>
                             </table>                       
                        </td>
                    </tr>
                    
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Tariff Details</td></tr>
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Base Fare</td>
                                    <td style="color:#808080; width:206px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Taxes & Other Charges</td>
                                    <td style="color:#808080; width:260px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Total</td>
                                </tr>';
 
 if(isset($details['itinerary'])){                             
                                 $roombook=$details['itinerary']['room-rates']['room-rate']['pricing-elements']['pricing-element'];
foreach($roombook as $rateroom){
if($rateroom['category']=='BF')
{
$base= $rateroom['amount']; 
}
if($rateroom['category']=='TAX')
{
$tax= $rateroom['amount']; 
}

}
   $total=$details['itinerary']['payment-detail']['amount']; 
   
   }   else{
   				$base = $post['amount'];
   				$tax = @$post['tax'];	
   				$total = $post['amount'];
   				
   				
   			}                  
                                
                             $content .= ' <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Rs. '.round($base).'</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Rs. '.round($tax).' </td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs. '.round($total).'</td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr><td colspan="2" style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;">Payment Details</td></tr>
                    <tr>
                    	<td colspan="2" style="padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Member Name</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Email ID</td>
                                    
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">{{customer}}</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="mailto:{{email}}">{{email}}</a></td>
                                    
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    
                    
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:30px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Total Amount</td>
                                    <td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Rs.'.round($total).'</td>
                                </tr>
<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Paid by Credit Card</td>
                                    <td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Rs. '.round($total).'</td>
                                </tr>
                             
                                
                            </table>                       
                        </td>
                    </tr>
                   
                    <tr><td colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">Hotel Cancellation Policy</td></tr>
                    
                    <tr>
                    	<td colspan="2" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;">';
							if(isset($rm_details['HotelRoomReservationResponse']['cancellationPolicy'])) $content .= $rm_details['HotelRoomReservationResponse']['cancellationPolicy']; else $content .= 'No cancellation Policy';
							
                   $content .= '</td>
                    </tr>';
                  	return $content;
	
    }


 public static function flights($code)
	{ 
             $details= $code['flights']['AirBookingStatusResponse']['Bookings']['Booking'];
             
             
             $count=count($details['PricedItinerary']['Flights']['Flight']);
             if($count<=2)
             {
                 $flight_details =$details['PricedItinerary']['Flights']['Flight']['0'];
             }
             else
             {
                 $flight_details =$details['PricedItinerary']['Flights']['Flight'];
             }
             $price_details = $flight_details['AirFareBreakup']['Passenger'];
             
            
          $content =   '<tr>
                    	<td style="border-bottom:1px dotted #333333; padding:15px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                    	
                    	<table cellpadding="0" cellspacing="0" border="0" width="320" align="right">
                                <tr>
							
							
                                    <td width="50%" class="td_no_border" style="color:#808080 importe; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">{{project}} Ref No : </td>
                                    <td  class="td_no_border" width="50%" style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">'.$details['BookingRequestId'].' </td>
                                </tr>
                            
                                   <tr>
                                  
                                    
                                    <td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Booking Ref Number: </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;"> '.$details['BookingId'] .' </td>
                                </tr> 
                                <tr>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Booked on : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;"> '.date('d-m-y') .' </td>
                                </tr>
                           <tr>
                               		
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Status : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">'.$details['status'].'</td>
                                </tr>
                                    </table>                   
                        </td>
                    </tr>
                    
                    
                    <tr><td style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:20px; color:#333333;"><h3><font color="black">Itinerary Details</font></h3></td></tr>
                    <tr>
                    	<td style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
						<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>	
							
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Flight: <span style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> '; 

			
	/*	if(isset($flight_details['Carrier']) ) 
		{  echo '<br/>'.$flight_details['Carrier'].' , '.$flight_details['Carrier_attr']['id'].' - '.$flight_details['FlightNumber'] ;


}

</span></td> <td></td>
                                
                                    <td style="color:#808080; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Status: <span style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">'.$code['status'].' </span></td>
                                </tr>';
			if(array_key_exists(0,$flight_details))
				
				{ 
			
			 foreach($flight_details as $flight) {
			
				if(isset($flight['Source']) && isset($flight['Source']))
				{
				
	$content  .=       '<tr>
                                	<td style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:20px 0px 0px 0px;  margin:0px;">Depart</td>
                                    <td colspan="2" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  padding:20px 0px 0px 0px; margin:0px;">Arrive</td>

                                     <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">PNR:</td>
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> '.$flight['Source'] .' <br />';
                               	$pieces = explode(" ", date('d-m-Y H:i',strtotime(str_replace("T"," ",$flight['DepartureTimeStamp'])))); $content .= $pieces[0].' '.$pieces[1]  .'  </td>
                                    <td colspan="2" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"> '.$flight['Destination'] .' <br />';
                                $pieces = explode(" ", date('d-m-Y H:i',strtotime(str_replace("T"," ",$flight['ArrivalTimeStamp'])))); $content .= $pieces[0].' '.$pieces[1] .' </td>
   <td colspan="2" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">We will get back to you with your Airline PNR in a short while.</td>
                                </tr>';
                                
                              } }     

  }
                                
				else {
				$content .= '<tr>
                                	<td style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:20px 0px 0px 0px;  margin:0px;">Depart</td>
                                    <td colspan="2" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  padding:20px 0px 0px 0px; margin:0px;">Arrive</td>
    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">PNR: </td>
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> '.$flight_details['Source'] .' <br />';

$pieces = explode(" ", date('d-m-Y H:i',strtotime(str_replace("T"," ",$flight_details['DepartureTimeStamp'])))); 

	$content .= $pieces[0].' '.$pieces[1]  .' </td>
                                    <td colspan="2" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"> '.$flight_details['Destination'] .' <br />';
                                    
$pieces = explode(" ", date('d-m-Y H:i',strtotime(str_replace("T"," ",$flight_details['ArrivalTimeStamp'])))); 
		$content .= $pieces[0].' '.$pieces[1].'</td>
           <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> We will get back to you with your Airline PNR in a short while.   </td>   
             </tr>';
				 }
                   $content .= ' </table>                 
                        </td>
                    </tr>
                    <tr><td style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;"><h3><font color="black">Passenger Details</font></h3></td></tr>
                    <tr>
                    	<td style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Name</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Type of Passenger</td>
                                    <td style="color:#808080; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Status</td>
                                </tr>
                              <tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"></td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Adult</td>
                                    <td style="color:#808080; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">'.$code['status'].' </td>
                                </tr>
                                  </table>                   
                        </td>
                    </tr>
                    <tr><td style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;"><h3><font color="black">Pricing Details</font></h3></td></tr>
                    <tr>
                    	<td style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Type of Passenger</td>
                                    <td style="color:#808080; width:156px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">No.</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Base Fare</td>
                                    <td style="color:#808080; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Taxes & Other Charges</td>
                                </tr>
                                <tr>';
                    
                                $base=$price_details['BaseFare']; 
              $total_tax= $price_details['AirportTax']+$price_details['ServiceTax']+ $price_details['GovtServTax']+$price_details['UDF']+$price_details['BookingSurcharge'];
                                $tax=$total_tax;   
                                $total=$price_details['TotalFare'];
                             
                             $content   .= '<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Adult</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">    </td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs.  '.$base .' </td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs.  '.round($tax) .' </td>
                                </tr>
                           
                          
                                    </table>                
                        </td>
                    </tr>

                    <tr><td style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;"><h3><font color="black">Payment Details</font></h3></td></tr>
                    <tr>
                    	<td style="padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Member Name</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Email ID</td>
                                    
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> {{customer}}</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="mailto:{{email}}"> {{email}}</a></td>
                                    
                                </tr>
                                   </table>    
                                     <tr> 
                           <td>
                 
                            </td>
                    </tr>                
                        </td>
                    </tr>
                    
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:30px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Total Amount</td>
                                    <td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> 
                                    Rs. '.round($total)  .' 
                                    
                                     </td>
                                </tr> 
                             
                                 </table>
                                
                                              
                        </td>
                    </tr>
                   
                 <tr>
                    	<td style="padding:5px 0px 0px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                        	<table cellpadding="0" cellspacing="0" border="0" width="100%">    
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;"><h3><font color="black">Important Information</font></h3></td></tr>
                                <tr><td valign="top" width="18" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="width:700px; color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;"><ul><li>Please quote your {{project}} Ref No for all future communications related to this booking</li></ul></td></tr>
                                <tr><td valign="top" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;"><ul><li>Please quote the Airline PNR for all future communications with the airline</li></ul></td></tr>
                                <tr><td valign="top" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;"><ul><li>Please carry a print of this itinerary receipt at the time of Check-in</li></ul></td></tr>
                                <tr><td valign="top" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; line-height:16px; margin:0px;"><ul><li>Please carry a valid photo identity card (Passport, Voter ID Card, PAN Card, Driving License) at the time of check-in, 	without which the airline may deny you a seat on the flight</li></ul></td></tr>
                                <tr><td valign="top" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;"><ul><li>Your travel on this itinerary is subject to Airline terms and conditions</li></ul></td></tr>
                			</table>
                   		</td>
                  	</tr>
                    <tr><td style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#808080;"><span style=" font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#1a1a1a;">Note:</span> You can redeem the remaining amount on the voucher on any other product of your choice. The voucher is valid for period of 1 month from the time it is generated. After a period of one month the unused balance will be credited back to your account between 15 working days. </td></tr>
                    <tr><td valign="top" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;"><br/><h3><font color="black">Cancellation and Modification Rules</font></h3></td></tr>
                    <tr>
                    	<td style="padding:0px 0px 0px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                        	<table cellpadding="0" cellspacing="0" border="0" width="100%">    
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;"><br/>Cancellation Charges</td></tr>
                                <tr><td valign="top" width="18" style="padding:5px 0px 0px 0px;"></td><td valign="top" style=" width:700px; color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;"><ul><li>Standard airline charges will be applicable for cancellations/ modifications on flight booking </li></ul></td></tr>
                                <tr><td valign="top" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 10px 0px; margin:0px;"><ul><li>In addition to the ariline charges , Smartbuy will levy Rs 150 per passenger per flight for each cancellation/ modification.</li></ul></td></tr>
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 10px 0px; margin:0px;"><h3><font color="black">Refund on cancellation</font></h3></td></tr>
                                <tr><td valign="top" width="18" style="padding:5px 0px 0px 0px;"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px 0px 5px 0px; margin:0px;">Please allow 15 working days for the refund amount to reflect in your account.</td></tr>
                			</table>
                   		</td>
                  	</tr> '; */
	}

     public static function cleartrip_flights($code)
	{    
				$book_passenger=json_decode(urldecode($code['post']['book_passenger']));
  	 $pass_cnt=$book_passenger->adults+$book_passenger->children+$book_passenger->infants+3;
		$clear_select=json_decode(urldecode($code['post']['clear_select']));
		$posted = $code['post']; 
		$onward = $clear_select[0]; 
		$ret = 0; 
		$return= array();
		$fares['onward'] = $onward->passenger_onward; 
		$onw_return = $onward->onwardfl; 
		if(isset($code['post']['return_select'])) {
		$return_select=json_decode(urldecode($code['post']['return_select']));
		$ret = 1; 
		$return = $return_select[0]; 
		$fares['return'] = $return->passenger_return; 
		$onw_return = array_merge($onward->onwardfl,$return->returnfl);	
		}
		
					$tax = array(); 
				foreach($fares as $type ){
					foreach($type as $key => $value){
					
				    $tax[$value->category][$value->pax_type][] = $value->amount; 
				    }
				}
			

$content = '<tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:15px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td width="50%" style="color:#808080 importe;font-size:12px;font-family:Arial,Helvetica,sans-serif;padding:0px;margin:0px">Smartbuy Ref No : </td>
                                    <td  class="td_no_border" width="50%" style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">'.$code['order_number'].'</td>
                                </tr>
                            
                                   <tr>
                                  
                                    
                                    <td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Booking Ref Number: </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">';
                                   if(isset($code['xml_array']['book-response']['trip-id']) && $code['xml_array']['book-response']['trip-id']<>'')
                                                       {
                                                     $content .=  $code['xml_array']['book-response']['trip-id'];    
                                                     }
                                    $content .= '</td>
                                </tr> 
                                <tr>
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Booked on : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">'.date('d-m-y').'</td>
                                </tr>
                           <tr>
                               		
                                	<td style="color:#808080; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;">Status : </td>
                                    <td style="color:#333333; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:15px 0px 0px 0px; margin:0px;"> '.$code['status'].' </td>
                                </tr>
                                    </table>                   
                        </td>
                    </tr>
                    <tr><td style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:20px; color:#333333;"><h3><font color="black">Itinerary Details</font></h3></td></tr>
                    <tr>
                    	<td style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
						<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>	
							
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Flight: <span style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;"> Flight Number
</span></td> <td></td>
                                
                                    <td style="color:#808080; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Status: <span style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">'.$code['status'].'</span></td>
                                </tr>';
			
			
			foreach($onw_return as $onwa){
				
				    $content .=      '<tr>
                                	<td style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:20px 0px 0px 0px;  margin:0px;">Depart</td>
                                    <td colspan="2" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  padding:20px 0px 0px 0px; margin:0px;">Arrive</td>

                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">'.$onwa->sour.'<br />'; $pieces = explode(" ", date('d-m-Y H:i',strtotime(str_replace("T"," ",$onwa->dst_tym)))); $content .=  $pieces[0].' '.$pieces[1] .' </td>
                                    <td colspan="2" style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">'.$onwa->desti.'<br />';
                                    $pieces = explode(" ", date('d-m-Y H:i',strtotime(str_replace("T"," ",$onwa->arr_tym))));  $content .= $pieces[0].' '.$pieces[1] .'</td>
                                </tr>'; 
			} 
			 
                         $content .= '</table>                 
                        </td>
                    </tr>
                    
                    <tr><td style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;"><h3><font color="black">Passenger Details</font></h3></td></tr>
                    <tr>
                    	<td style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Name</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Type of Passenger</td>
                                    <td style="color:#808080; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Status</td>
                                </tr>';
                                
                       $j =3; for($i=3;  $i<$pass_cnt; $i++){ 
                             		if($j < $book_passenger->adults + 3){ $type ='Adult'; }
                             		 else if ($j < $book_passenger->adults+$book_passenger->children+ 3){ $type ='Child'; }else{ $type = 'Infant'; }
                             		
                              $content .= '<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">'.$posted['firstname'.$i].' '.$posted['lastname'.$i].' </td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">'.$type.' </td>
                                    <td style="color:#808080; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">'.$code['status'].'</td>
                                </tr>';
							$j++;  } 
                                  
                                 $content .= '</table>                   
                        </td>
                    </tr>
                  
                    <tr><td style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;"><h3><font color="black">Pricing Details</font></h3></td></tr>
                    <tr>
                    	<td style="border-bottom:1px dotted #333333; padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Type of Passenger</td>
                                    <td style="color:#808080; width:156px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">No.</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Base Fare</td>
                                    <td style="color:#808080; width:120px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Taxes & Other Charges</td>
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Adult</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> '.$book_passenger->children.'</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs. '.round(array_sum($tax['BF']['ADT'])).'</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs. '.round(array_sum($tax['TAX']['ADT'])).'</td>
                                </tr>'; 
						if($book_passenger->children >0){
						
                           $content .=      ' <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Children</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">'.$book_passenger->children.'</td>
                                     <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs. '.round(array_sum($tax['BF']['CHD'])).'</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs. '.round(array_sum($tax['TAX']['CHD'])).'</td>
                                </tr>';
                                } 
                                  if($book_passenger->infants >0){
                                 $content .= '<tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;">Infants</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> '.$book_passenger->infants.' </td>
                                     <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs. '.round(array_sum($tax['BF']['INF'])).'</td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;">Rs. '.round(array_sum($tax['TAX']['INF'])).'</td>
                                </tr>';
                              } 
                           
                          
                                $content .= '</table>                
                        </td>
                    </tr>

                    <tr><td style="padding:10px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;"><h3><font color="black">Payment Details</font></h3></td></tr>
                    <tr>
                    	<td style="padding:0px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:315px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Member Name</td>
                                    <td style="color:#808080; width:190px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;">Email ID</td>
                                    
                                </tr>
                                <tr>
                                	<td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:0px; line-height:16px; margin:0px;"> '.$posted['name'].' </td>
                                    <td style="color:#333333; font-size:11px; font-family:Arial, Helvetica, sans-serif; line-height:16px; padding:0px; margin:0px;"><a style="text-decoration:none; color:#0058ff; font-family:Arial, Helvetica, sans-serif; font-size:11px;" href="mailto:amit.chawla@reward360.co"> '.$posted['s_email'].'</a></td>
                                    
                                </tr>
                                   </table>    
                                     <tr> 
                           <td>
                 
                            </td>
                    </tr>                
                        </td>
                    </tr>
                    
                    <tr>
                    	<td colspan="2" style="border-bottom:1px dotted #333333; padding:30px 0px 15px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
                            	<tr>
                                	<td style="color:#808080; width:160px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;">Total Amount</td>
                                    <td style="color:#333333; width:470px; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:5px 0px 5px 0px; margin:0px;"> 
                                    Rs. '.round($posted['amount']) .'
                                    
                                     </td>
                                </tr> 
                             
                                 </table>
                                
                                              
                        </td>
                    </tr>';
	
		return $content; 
	
	}
     
       public static function alert_information($partner)
	{   
			
			$information['music'] = '
<tr>
                    	<td colspan="2" style="padding:5px 0px 0px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                        	<table cellpadding="0" cellspacing="0" border="0" width="100%">    
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">Important Information</td></tr>
                                <tr><td valign="top" width="18" ></td><td valign="top" style="width:700px; color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>Please quote your {{project}} reference number for all future communication with us on this transaction.</li></ul></td></tr>
                                <tr><td valign="top" ></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  margin:0px;"><ul><li>To download your song please login to www.smartbuy.hdfcbank.com, go to My Redemption under My Account tab. After a successful purchase, you may download the same song any number of times. If you are a guest user, you may be requested for additional information to download/view booking order status and other details.</li></ul></td></tr>
                			</table>
                   		</td></tr>
                  	';

	
			$information['recharge'] = '<table>
<tr>
                    	<td colspan="2" style="padding:5px 0px 0px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                        	<table cellpadding="0" cellspacing="0" border="0" width="100%">    
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">Important Information</td></tr>
                                <tr><td valign="top" width="18" ></td><td valign="top" style="width:700px; color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>Please quote your {{partner}}/ {{project}} reference number for all future communication with us on this booking.</li></ul></td></tr>
                			</table>
                   		</td>
                  	</tr><tr><td style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">
Attention! Please read important hotel information!<td>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>Onus to provide correct payment information lies with the customer</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>{{project}} is not responsible for any cancellations that occur at the partner side.</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>Bills paid through the portal cannot be cancelled or modified.</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>For any query related to payment status, please contact us at {{support}} and  1800-0000-000</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>For any query and/or activity related to the service, payment status and certificates (if any), please contact {{partner}} at support@billdesk.com and 1800-0000-000.</li></ul></td></tr></table>';


			$information['movies'] = '<table>
<tr>
                    	<td colspan="2" style="padding:5px 0px 0px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                        	<table cellpadding="0" cellspacing="0" border="0" width="100%">    
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">Important Information</td></tr>
                                <tr><td valign="top" width="18" ></td><td valign="top" style="width:700px; color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>Please quote your {{partner}}/ {{project}} reference number for all future communication with us on this booking.</li></ul></td></tr>
                                <tr><td valign="top" ></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  margin:0px;"><ul><li>Your Partner Ref No. number serves as a confirmation of your movie ticket booking.</li></ul></td></tr>
                                <tr><td valign="top"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>Carry a print of this booking receipt to get a physical ticket or as a proof of your movie booking payment.</li></ul></td></tr>
                                <tr><td valign="top" ></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  line-height:16px; margin:0px;"><ul><li>Please check the censor warning/ age/ratings/entry restrictions with the movie hall that maybe applicable. You may be asked to show a photo identity card.</td></tr>
                           	</table>
                   		</td>
                  	</tr><tr><td style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">
Attention! Please read important hotel information!<td>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>This movie is being booked though {{partner}}.</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>{{project}} is not responsible for any cancellations that occur at the partner side.</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>For any query related to payment status and booking confirmation, please contact us at {{support}} and 1800-0000-000</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>The movie ticket once booked cannot be modified or cancelled</li></ul></td></tr>
</table>';

			$information['hotels'] = '<tr><td colspan="2"><table>
<tr>
                    	<td colspan="2" style="padding:5px 0px 0px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                        	<table cellpadding="0" cellspacing="0" border="0" width="100%">    
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">Important Information</td></tr>
                                <tr><td valign="top" width="18" ></td><td valign="top" style="width:700px; color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>{{project}} will not be responsible for the change in the cancellation/modification charges revised by respective hotels.</li></ul></td></tr>
                                <tr><td valign="top" ></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  margin:0px;"><ul><li>All cancellation and amendment charges, taxes and surcharges are subject to change without notice and must be borne by the customer.</li></ul></td></tr>
                                <tr><td valign="top"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>Please quote your {{project}}  reference number for all future communication with us on this booking.</li></ul></td></tr>
                                <tr><td valign="top" ></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  line-height:16px; margin:0px;"><ul><li>Your {{partner}} reference number serves as a confirmation of your hotel booking.</td></tr>
                                <tr><td valign="top"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  margin:0px;"> <ul><li>Carry a print out of this Hotel Receipt and present it at the hotel reception.</li></ul></td></tr>
                                <tr><td valign="top"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  margin:0px;"><ul><li>Kindly carry photo identification proof along with your Hotel Receipt.</li></ul></td></tr>
                			</table>
                   		</td>
                  	</tr><tr><td style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">
Attention! Please read important hotel information!<td>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>This hotel is booked though {{partner}}.</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>{{project}} is not responsible for any cancellations that occur at the partner side.</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>For any query related to payment status and booking confirmation, please contact us at test@smartbuy.com and 080-4123456</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>For any query and/or activity related to the service and/or modification and cancellation, please contact {{partner}} at test@{{partner}}.com and 080-4545454. Refund on hotel booking will be  as per the hotel rules.</li></ul></td></tr></table>';

$information['flights'] = '<table>
<tr>
                    	<td colspan="2" style="padding:5px 0px 0px 0px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;">
                        	<table cellpadding="0" cellspacing="0" border="0" width="100%">    
                                <tr><td valign="top" colspan="2" style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">Important Information</td></tr>
                                <tr><td valign="top" width="18" ></td><td valign="top" style="width:700px; color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>{{project}} will not be responsible for the change in the cancellation/modification charges and/ or other rules and conditions revised by respective airlines</li></ul></td></tr>
                                <tr><td valign="top" ></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  margin:0px;"><ul><li>All cancellation and amendment charges, taxes and surcharges are subject to change without notice and must be borne by the customer.</li></ul></td></tr>
                                <tr><td valign="top"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>Please quote your {{partner}}/ {{project}} reference number/ Airline PNR for all future communications related to this booking; and quote the Airline PNR for all future communications with the airline.</li></ul></td></tr>
                                <tr><td valign="top" ></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  line-height:16px; margin:0px;"><ul><li>Carry a print of this itinerary receipt at the time of Check-in.</td></tr>
                                <tr><td valign="top"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  margin:0px;"> <ul><li>Please carry a valid photo identity card (Passport, Voter ID Card, PAN Card, Driving License) at the time of check-in, without which the airline may deny you a seat on the flight.</li></ul></td></tr>
                                <tr><td valign="top"></td><td valign="top" style="color:#808080; font-size:11px; font-family:Arial, Helvetica, sans-serif;  margin:0px;"><ul><li>Your travel on this itinerary is subject to Airline terms and conditions.</li></ul></td></tr>
                			</table>
                   		</td>
                  	</tr><tr><td style="color:#1a1a1a; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px 20px 0px; margin:0px;">
Attention! Please read important hotel information!<td>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>This ticket is being booked though {{partner}}.</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>Smart buy is not responsible for any cancellations that occur at the partner side.</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>For any query related to payment status and booking confirmation, please contact us at test@smartbuy.com and 080-4123456</li></ul></td></tr>
<tr><td style="width:700px; color:#808080; font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin:0px;"><ul><li>For any query and/or activity related to the service and/or modification and cancellation, please contact {{partner}} at  support@cleartrip.com and 1800-0000-000. Refund on flight tickets will be as per the airline rules.</li></ul></td></tr></table>';

		return $information[$partner]; 
	}   
	
	
   
     
}
