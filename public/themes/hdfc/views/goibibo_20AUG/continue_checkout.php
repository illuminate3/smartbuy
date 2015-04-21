<link href="themes/hdfc/assets/updates/update1/css/style01.css" rel="stylesheet" media="screen">
<script src="themes/hdfc/assets/js/goibibo/price_update.js"></script> 
	
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><?php echo HTML::link('flight_index', 'Flights'); ?></li>
					<li>/</li>
					<li><a href="javascript:;">Continue Checkout</a></li>
				</ul>				
			</div>
			<a class="backbtn right" href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	


	<!-- CONTENT -->
	<div class="container">

		
		<div class="container mt25 offset-0">
			
	<form method="post" action="<?php echo $url = URL::action('Checkout@checkout_process'); ?>" id="passenger_checkout" >
            
            
           
            <?php
            if(isset($fuldata) && $fuldata<>'')
            {
            ?>
             <input type="hidden" name="fuldata" value="<?php echo $fuldata;?>">
            <?php } ?>
            
            <?php
            if(isset($booking_data) && $booking_data<>'')
            {
            ?>
             <input type="hidden" name="booking_data" value="<?php echo $booking_data;?>">
            <?php } 
            if(isset($querydata) && $querydata<>'')
            {
            ?>
             <input type="hidden" name="querydata" value="<?php echo $querydata;?>">
             <input type="hidden" name="book_passenger" value="<?php echo urlencode(json_encode($book_passsenger));?>">
            <?php } 
            if(isset($searchkeyonward) && $searchkeyonward<>'')
            {
            ?>
             <input type="hidden" name="searchkeyonward" value="<?php echo $searchkeyonward;?>">
             <input type="hidden" name="fare" value="<?php echo $fare;?>">
             
            <?php } 
            if(isset($type) && $type<>'')
            {
            ?>
            <input type="hidden" name="type" value="R"/>
            <?php
            }
            if(isset($clear_select) && $clear_select<>'')
            {  
                $flight='clear trip Flights';
            ?>
            <input type="hidden" name="itinerary_id" value="<?php echo $itinerary_id;?>"/>
            <input type="hidden" name="ctype" value="clear trip Flights"/>
            <input type="hidden" name="clear_select" value="<?php echo urlencode(json_encode($clear_select));?>">
            <input type="hidden" name="book_passenger" value="<?php echo urlencode(json_encode($book_passsenger));?>">
            <?php
            }
            else
            {
                 $flight='goibibo';
                ?>
             <input type="hidden" name="ctype" value="Goibibo"/>   
             <?php
            }
            
            
            ?> 
            <?php
            if(isset($return_select) && $return_select<>'')
            {
            ?>
            <input type="hidden" name="return_select" value="<?php echo urlencode(json_encode($return_select));?>">
            <?php
            }
            ?>
           
            
        
			<!-- LEFT CONTENT -->
			<div class="col-md-8 pagecontainer2 offset-0">

				<div class="padding30 grey">
				
				
					<span class="size16px bold dark left">Who's traveling?
</span>
					<div class="roundstep  right">1</div>
					<div class="clearfix"></div>
					<div class="line4"></div>
					
					<!-- ROW -->
					<div class="row">
					<?php 
					$i=0;
					if(isset($adults) && $adults<>'')
					{
					$j=$adults+3;
					for($i=3;$i<$j;$i++)
					{
					 ?>
                                                <div class="col-md-3">
							<?php
                                                        if($_POST['title'.$i]=='Mr')
                                                        {
                                                            echo 'Mr. ';
                                                        }
                                                        else
                                                        {
                                                            echo 'Mrs. ';
                                                        }
                                                        echo $_POST['firstname'.$i].' '.$_POST['lastname'.$i];
                                                        ?>
                                                        
						</div>
                                            
						<div class="col-md-2">
							
							<?php  //echo $_POST['firstname'.$i] ; ?>
                                                    <?php echo $_POST['datepicker'.$i] ; ?>
							<input type="hidden" name="firstname<?php echo $i;?>" id="firstname<?php echo $i;?>" class="form-control " value="<?php echo $_POST['firstname'.$i] ; ?>" placeholder="">
						</div>
						<div class="col-md-3">
							
							<?php 
                                                        if($_POST['gender'.$i]==1)
                                                            {
                                                                echo "Male";
                                                            }
                                                            else
                                                            {
                                                                echo "Female";
                                                            }
                                                    //echo $_POST['lastname'.$i] ; ?>
							<input type="hidden" name="lastname<?php echo $i;?>" id="lastname<?php echo $i;?>" class="form-control " placeholder="" value="<?php echo $_POST['lastname'.$i] ; ?>">
						</div>
						<div class="col-md-3">
							<div class="w50percent">
                                                            
								<?php //echo $_POST['datepicker'.$i] ; 
                                                                
                                                                ?>
								<input type="hidden"name="datepicker<?php echo $i;?>" readonly="readonly" class="form-control mySelectCalendar" id="datepicker<?php echo $i;?>" value="<?php echo $_POST['datepicker'.$i] ; ?>" placeholder="mm-dd-yyyy"/>
							</div>
                                                    <script>
                                                    $(document).ready(function() {
                                                    $( "#datepicker<?php echo $i;?>" ).datepicker({
                                                    dateFormat: 'dd-mm-yy',	
                                                    changeMonth: true,
                                                    changeYear: true,
                                                    maxDate: '-18Y',
                                                    yearRange: "-75:+0"	

                                                    });


                                                    });
                                                    </script>
                                                 </div>   
                                                    
							<div class="col-md-1">
                                                            <?php
//                                                            if($_POST['gender'.$i]==1)
//                                                            {
//                                                                echo "Male";
//                                                            }
//                                                            else
//                                                            {
//                                                                echo "Female";
//                                                            }
                                                            ?>
                                                        </div>						
						
						
						<div class="clearfix"></div><br/>
						
						
                                        <?php } } ?>        
					
                                        </div>
					<div class="row">
					<?php 
					
					if(isset($children) && $children<>'')
					{
					$j=$j=$adults+$children+3;
					for($i=3+$adults;$i<$j;$i++)
					{
					 ?>
                                             <div class="col-md-3">
							<?php
                                                        if($_POST['title'.$i]=='Mr')
                                                        {
                                                            echo 'Mr. ';
                                                        }
                                                        else
                                                        {
                                                            echo 'Mrs.';
                                                        }
                                                        echo $_POST['firstname'.$i].' '.$_POST['lastname'.$i];
                                                        ?>
                                                        
						</div>
                                            
						<div class="col-md-2">
							
							<?php  //echo $_POST['firstname'.$i] ; ?>
                                                    <?php echo $_POST['datepicker'.$i] ; ?>
							<input type="hidden" name="firstname<?php echo $i;?>" id="firstname<?php echo $i;?>" class="form-control " value="<?php echo $_POST['firstname'.$i] ; ?>" placeholder="">
						</div>
						<div class="col-md-3">
							
							<?php 
                                                        if($_POST['gender'.$i]==1)
                                                            {
                                                                echo "Male";
                                                            }
                                                            else
                                                            {
                                                                echo "Female";
                                                            }
                                                    //echo $_POST['lastname'.$i] ; ?>
							<input type="hidden" name="lastname<?php echo $i;?>" id="lastname<?php echo $i;?>" class="form-control " placeholder="" value="<?php echo $_POST['lastname'.$i] ; ?>">
						</div>
						<div class="col-md-3">
							<div class="w50percent">
                                                            
								<?php //echo $_POST['datepicker'.$i] ; 
                                                                
                                                                ?>
								<input type="hidden"name="datepicker<?php echo $i;?>" readonly="readonly" class="form-control mySelectCalendar" id="datepicker<?php echo $i;?>" value="<?php echo $_POST['datepicker'.$i] ; ?>" placeholder="mm-dd-yyyy"/>
							</div>
                                                    <script>
                                                    $(document).ready(function() {
                                                    $( "#datepicker<?php echo $i;?>" ).datepicker({
                                                    dateFormat: 'dd-mm-yy',	
                                                    changeMonth: true,
                                                    changeYear: true,
                                                    maxDate: '-18Y',
                                                    yearRange: "-75:+0"	

                                                    });


                                                    });
                                                    </script>
                                                 </div>   
                                                    
							<div class="col-md-1">
                                                            <?php
//                                                            if($_POST['gender'.$i]==1)
//                                                            {
//                                                                echo "Male";
//                                                            }
//                                                            else
//                                                            {
//                                                                echo "Female";
//                                                            }
                                                            ?>
                                                        </div>						
						
						
						<div class="clearfix"></div><br/>
						
						
                                        <?php } } ?>        
					</div>
					
					<div class="row">
					<?php 
					
					if(isset($infants) && $infants<>'')
					{
					$j=$j=$infants+$adults+$children+3;
					for($i=3+$adults+$children;$i<$j;$i++)
					{
					 ?> <div class="col-md-3">
							<?php
                                                        if($_POST['title'.$i]=='Mr')
                                                        {
                                                            echo 'Mr. ';
                                                        }
                                                        else
                                                        {
                                                            echo 'Mrs. ';
                                                        }
                                                        echo $_POST['firstname'.$i].' '.$_POST['lastname'.$i];
                                                        ?>
                                                        
						</div>
                                            
						<div class="col-md-2">
							
							<?php  //echo $_POST['firstname'.$i] ; ?>
                                                    <?php echo $_POST['datepicker'.$i] ; ?>
							<input type="hidden" name="firstname<?php echo $i;?>" id="firstname<?php echo $i;?>" class="form-control " value="<?php echo $_POST['firstname'.$i] ; ?>" placeholder="">
						</div>
						<div class="col-md-3">
							
							<?php 
                                                        if($_POST['gender'.$i]==1)
                                                            {
                                                                echo "Male";
                                                            }
                                                            else
                                                            {
                                                                echo "Female";
                                                            }
                                                    //echo $_POST['lastname'.$i] ; ?>
							<input type="hidden" name="lastname<?php echo $i;?>" id="lastname<?php echo $i;?>" class="form-control " placeholder="" value="<?php echo $_POST['lastname'.$i] ; ?>">
						</div>
						<div class="col-md-3">
							<div class="w50percent">
                                                            
								<?php //echo $_POST['datepicker'.$i] ; 
                                                                
                                                                ?>
								<input type="hidden"name="datepicker<?php echo $i;?>" readonly="readonly" class="form-control mySelectCalendar" id="datepicker<?php echo $i;?>" value="<?php echo $_POST['datepicker'.$i] ; ?>" placeholder="mm-dd-yyyy"/>
							</div>
                                                    <script>
                                                    $(document).ready(function() {
                                                    $( "#datepicker<?php echo $i;?>" ).datepicker({
                                                    dateFormat: 'dd-mm-yy',	
                                                    changeMonth: true,
                                                    changeYear: true,
                                                    maxDate: '-18Y',
                                                    yearRange: "-75:+0"	

                                                    });


                                                    });
                                                    </script>
                                                 </div>   
                                                    
							<div class="col-md-1">
                                                            <?php
//                                                            if($_POST['gender'.$i]==1)
//                                                            {
//                                                                echo "Male";
//                                                            }
//                                                            else
//                                                            {
//                                                                echo "Female";
//                                                            }
                                                            ?>
                                                        </div>						
						
						
						<div class="clearfix"></div><br/>
						
						
                                        <?php } } ?>        
					</div>
					
					
					
					<!-- END OF ROW -->
					
					
					
					<div class="fdash"></div>
					
                                        <!-- ROW -->
					<br/>
					<br/>
					
					
				
					<span class="size16px bold dark left">Where can we reach you?</span>
					<div class="roundstep right">2</div>
					<div class="clearfix"></div>
					<div class="line4"></div>		
					<div class="col-md-4">
						<span class="dark">First Name:</span>
						&nbsp;&nbsp;<?php echo $_POST['first_name']; ?><input type="hidden" name="first_name" id="firstName"class="form-control " placeholder="" value="<?php echo $_POST['first_name']; ?>">
					</div>
					<div class="col-md-4 textleft">
					<span class="dark">Last Name:</span>
						&nbsp;&nbsp;<?php echo $_POST['last_name']; ?><input type="hidden" name="last_name" id="lastName" class="form-control " placeholder="" value="<?php echo $_POST['last_name']; ?>">
					</div>
					
					<div>
					
					
					
					<div class="col-md-8 textright">
						<div class="mt15"><span class="dark" style="float: left;">Email Address:</span><span style="float: left;"> &nbsp;&nbsp;<?php echo $_POST['s_email']; ?><span></div>
					</div>
					<div class="col-md-4">
						<input type="hidden" name="s_email" class="form-control margtop10" placeholder="" value="<?php echo $_POST['s_email']; ?>">
					</div>
<div class="col-md-10 textright"><br>
						<div class="mt15" style="float: left;"><span class="dark">Preferred Phone Number:</span>&nbsp;&nbsp;<span> <?php echo $_POST['mobile']; ?></span></div>
					</div>
					<div class="col-md-4">
						<input style="width:20%;position: absolute;" type="hidden" readonly value="91" class="form-control"/><input type="hidden" name = "mobile" class="form-control" placeholder="" value="<?php echo $_POST['mobile']; ?>" >
					</div></div>
					<div class="col-md-4 textleft">
					</div>
					<div class="clearfix"></div><br/><br/>
					( All Email notification will be sent to the above address).<br/> 
					
					<br/>
					
						<!-- End of collapse 3 -->
						<div class="clearfix"></div>				

						
					
					<div class="clearfix"></div>
                                        
					
					<div class="clearfix"></div>
					<div class="line4"></div>		
                  
					
                                        <input type="hidden" name="amount" value="<?php echo $amount;?>"/>
										
		
                    <?php		
					
					$check_data=array(
							   'amount'=>round($amount),
                                                           'book'=>'trip',	
							   'cash'=>0,
							   'ctype'=>'cleartrip_flights',
							   'emi_data'=>$emi_data,
							   'interest'=>$interest,
							   'form_option'=>0,
							   'msg'=>Lang::get('partners.cleartrip.checkout')
							   );
						
					$view = View::make('payment_form',$check_data);
					echo $view;
					?>	
                                        
 </form>	                   
                    
				</div>
		
			</div>
			<!-- END OF LEFT CONTENT -->			
			
			<!-- RIGHT CONTENT -->
			<div class="col-md-4" >
				
				<div class="pagecontainer2 paymentbox grey">
					<div class="padding20">
						<span class="opensans size18 dark bold">Trip Summary</span>
					</div>
					<div class="line3"></div>
					
					<div class="hpadding30 margtop30">
					
					
					<!-- GOING TO -->
					<div>
						<div class="wh33percent left size12 bold dark">
							<?php echo strtoupper($osourc);
                                                        if(isset($con_origin) && $con_origin<>'')
                                                        {
                                                        echo "&nbsp;&nbsp;&nbsp;";
                                                        echo strtoupper($odeat); 
                                                        }
                                                        ?>
						</div>
						<div class="wh33percent left center size12 bold dark">
							<?php 
                                                         if(isset($osourc_con) && $osourc_con<>'')
                                                         {
                                                             echo $osourc_con;
                                                         }
                                                        ?>
						</div>
                                                
						<div class="wh33percent right textright size12 bold dark">
							<?php
                                                        if(isset($con_origin) && $con_origin<>'')
                                                        {
                                                         
                                                         echo strtoupper($odeat); 
                                                          echo "&nbsp;&nbsp;&nbsp;";
                                                         echo strtoupper($con_destination);   
                                                        }
                                                        else
                                                        {
                                                        echo strtoupper($odeat); 
                                                        }
                                                        ?>
						</div>
						<div class="clearfix"></div>
						
						<div class="wh33percent left">
							<div class="fcircle">
								<span class="fdeparture"></span>
							</div>
						</div>
						<div class="wh33percent left">
							<div class="fcircle center">
								<span class="fstop"></span>
							</div>
						</div>
						<div class="wh33percent right">
							<div class="fcircle right">
								<span class="farrival"></span>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="fline2px"></div>
						
						<div class="wh33percent left size12">
                                                    <?php echo date('G:i',strtotime(str_replace("t"," ",$odept_tym))); ?>
                                                    <?php
                                                    if(isset($con_origin) && $con_origin<>'')
                                                        {
                                                    echo date('G:i',strtotime(str_replace("t"," ",$oarr_tym))); 
                                                        }
                                                    ?>
                                                  
						</div>
						<div class="wh33percent left center size12">
                                                    <?php
							//if(isset($con_origin) && $con_origin<>'')
                                                        //{
                                                          //echo $con_deptime;  
                                                        //}
                                                     ?>    
						</div>
						<div class="wh33percent right textright size12">
                                                    <?php
                                                    if(isset($con_origin) && $con_origin<>'')
                                                        {
                                                            echo date('G:i',strtotime(str_replace("t"," ",$con_deptime))); 
                                                             echo "&nbsp;&nbsp;&nbsp;";
                                                             echo date('G:i',strtotime(str_replace("t"," ",$con_arrtime))); 
                                                        
                                                        }
                                                        else
                                                        {
                                                           echo date('G:i',strtotime(str_replace("t"," ",$oarr_tym)));  
                                                        }
                                                    ?>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- END OF GOING TO -->
					
					<br/>
					<?php if(isset($rsourc)){ ?>
					<!-- RETURNING -->
					<div>
						<div class="wh33percent left size12 bold dark">
							<?php echo $rsourc; ?>
						</div>
						<div class="wh33percent left center size12 bold dark">
							<?php 
                                                         if(isset($rsourc_con) && $rsourc_con<>'')
                                                         {
                                                             echo $rsourc_con;
                                                         }
                                                        ?>
						</div>
						<div class="wh33percent right textright size12 bold dark">
							<?php echo $rdeat; ?>
						</div>
						<div class="clearfix"></div>
						
						<div class="wh33percent left">
							<div class="fcircle">
								<span class="fdeparture"></span>
							</div>
						</div>
						<div class="wh33percent left">
							<div class="fcircle center">
								<span class="fstop"></span>
							</div>
						</div>
						<div class="wh33percent right">
							<div class="fcircle right">
								<span class="farrival"></span>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="fline2px"></div>
						
						<div class="wh33percent left size12">
							<?php echo date('G:i',strtotime(str_replace("T"," ",$rarr_tym))); ?>
						</div>
						<div class="wh33percent left center size12">
							
						</div>
						<div class="wh33percent right textright size12">
							<?php echo date('G:i',strtotime(str_replace("T"," ",$rdept_tym))); ?>
						</div>
						<div class="clearfix"></div>
					</div>
<?php } ?>
					<!-- END OF RETURNING -->
					
					
					
					

    
					<!--<span class="dark"><?php echo $tickets;?>  Tickets</span>!-->
                                        
                                        <?php
                                        if(isset($adultbasefare) && $adultbasefare<>'')
                                        {
                                        ?>
					<div class="fdash mt10"></div><br/>
					<?php echo $adults;?> Adult <span class="right bold green">Rs <?php echo round($adult_final_price);?></span>
					<!-- Collapse 1 -->	
					<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse1"></button>
					<div id="collapse1" class="collapse in">
						<div class="left size14">
							Flight<br/>
							Taxes & Fees 
						</div>
						<div class="right size14">
							Rs <?php echo round($adultbasefare);?><br/>
							Rs <?php echo round($adulttax);?>
						</div><div class="clearfix"></div>	
					</div>
                                        <?php } ?>
					<!-- End of collapse 1 -->
					
					<?php
                                        if(isset($childrenbasefare) && $childrenbasefare<>'')
                                        {
                                        ?>
					<div class="fdash mt10"></div><br/>
					<?php echo $children;?> Children <span class="right bold green">Rs <?php echo round($children_final_price);?></span>
					<!-- Collapse 1 -->	
					<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse1"></button>
					<div id="collapse1" class="collapse in">
						<div class="left size14">
							Flight<br/>
							Taxes & Fees 
						</div>
						<div class="right size14">
							Rs <?php echo round($childrenbasefare);?><br/>
							Rs <?php echo round($childrentax);?>
						</div><div class="clearfix"></div>	
					</div>
                                        <?php } ?>
                                        
                                        <?php
                                        if(isset($infantsbasefare) && $infantsbasefare<>'')
                                        {
                                        ?>
					<div class="fdash mt10"></div><br/>
					<?php echo $infants;?> Infants <span class="right bold green">Rs <?php echo round($infants_final_price);?></span>
					<!-- Collapse 1 -->	
					<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse1"></button>
					<div id="collapse1" class="collapse in">
						<div class="left size14">
							Flight<br/>
							Taxes & Fees 
						</div>
						<div class="right size14">
							Rs <?php echo round($infantsbasefare);?><br/>
							Rs <?php echo round($infantstax);?>
						</div><div class="clearfix"></div>	
					</div>
                                        <?php } ?>
					
					

					<br/>
					<br/>

					
					
					</div>	
					<div class="line3"></div>
					<div class="padding30">					
						<span class="left size14 dark">Trip Total:</span>
                                                <span id="priceloader" style="margin-left:10px;" ></span>
						<span class="right lred2 bold size18"  >Rs 
                                                    
                                             <?php 
                                             
                                             echo round($amount); ?>
                                                
                                                </span>
                                                <input type="hidden" id="price_final" name="price_final">
                                               
						<div class="clearfix"></div>
					</div>


				</div><br/>
				
				<?php 
			$login=Session::get('customer_data'); if(!$login){
 echo Form::open(array("id"=>"form-login","role"=>"form",'method'=>'post','onsubmit' => 'return validateForm();', 'action'=>'Login@checkout_login')); ?>		
				<div class="pagecontainer2 loginbox">
					<div class="cpadding1">
					
						<span class="icon-lockk"></span>
						
						<h3 class="opensans">Log in</h3></br></br>
						<font color="red" style="margin-top: -28px;margin-left: 2px;position: absolute;"><?php echo $validation; ?> </font>
						<input type="text" class="form-control logpadding" name="email" placeholder="Username">
						<br/>
						<input type="password" class="form-control logpadding" name="password" placeholder="Password">
						<div class="margtop20">
							
							<div class="right">
								<button class="btn-search5" type="submit" onclick="errorMessage()">Login</button>	
							</div>
						</div>
						<div class="clearfix"></div><br/>
					</div>
				</div><br/>
			</form>
			<?php } ?>
				
				
			
			</div>
			<!-- END OF RIGHT CONTENT -->
			
			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->
	

<script type="text/javascript" >
$(document).ready(function() {
$('.emi_details').hide();
		$('.payment').change(function() {
			
			var paytype=$('input[name=ptype]:checked', '#passenger_checkout').val()
			console.log(paytype);
			if(paytype==3)
			{
				$('.emi_details').show();
				$('.emi_showup').hide();
				$('.emi').prop('checked', false);
			}
			else
			{
			  $('.emi_details').hide();
			}
		});

		$('.emi').change(function() {


				if($(".emi").is(':checked'))
				{
				$('.emi_showup').show();

				}
				else
				{
				$('.emi_showup').hide();
				}



		});

$("#passenger_checkout").validate({
rules: {
firstname3 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
lastname3 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
datepicker3 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},        

firstname4 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
lastname4 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
datepicker4 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},        
firstname5 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
lastname5 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
datepicker5 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},        


firstname6 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
lastname6 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
datepicker6 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},        
firstname7 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
lastname7 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
datepicker7 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},        
firstname8 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
lastname8 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
datepicker8 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},        
firstname9 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
lastname9 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
datepicker9 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},        
firstname10 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
lastname10 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
datepicker10 : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},        
name : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
countrycode : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
phonenumber : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},     
landline : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }
},      
state : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},       
city : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
country : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
countrycode : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},
pincode : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

}, 
email : {
required: {depends:function(){$(this).val($.trim($(this).val()));return true;} }

},         
        


},
messages: {
email: { 
required: "This field is required.",
email: "Please Enter a Valid Email-Address."
}
},
submitHandler: function(frm) {
//  var point=$("#myTextInput").val();
//   var cash=$("#customerpoints1").val();

if(point==0 && cash==0)
{
$("#perror").css('display','block');

return false;
}
else
{
frm.submit();
$("#submit").css('display','none');
return true;
}
}


});

});

</script>
	
<script src="<?php print_r(Config::get('app.url'));?>themes/hdfc/assets/assets/js/jquery.validate.js"></script>	


	
