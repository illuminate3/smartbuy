<script src="themes/hdfc/assets/js/jquery.validate.min.js"></script>
<script src="http://localhost/laravel/public/themes/hdfc/assets/js/jquery-ui-1.10.3.custom.js"></script>
<script src="http://localhost/laravel/public/themes/hdfc/assets/js/jquery.lazyload.js"></script> 
<script src="themes/hdfc/assets/assets/js/jquery.v2.0.3.js"></script>


<!-- /Top wrapper -->


	<!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
	<div id="dajy" class="fullscreen-container mtslide sliderbg fixed">
			<div class="fullscreenbanner">
				<ul>
      
      <!-- papercut fade turnoff flyin slideright slideleft slideup slidedown--> 
      
     			<!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
				        <?php foreach($banners as $banner){ 
                
                 
                 $prim = $banner->primary_image;
                 $images = json_decode($banner->images);
                 $image = $images; 
               
                 if($prim <> ''){
                   $image  = $images->$prim; 
                 }
                 else{
                 foreach($images as $key => $image){
                 $prim = $key; 
                 break; 
                 }
                 $image =  $images->$prim; 
                 }
                
                
                  ?>
				
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						
						<img src="<?php echo '/smartbuy_admin/public/uploads/banners/'.$image->filename; ?>" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								
							 </div>
						</div>	
					</li>	
					
					<?php } ?> 
                                </ul>
				<div class="tp-bannertimer none"></div>
			</div>
		</div>

		<!--
		##############################
		 - ACTIVATE THE BANNER HERE -
		##############################
		-->
		<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();

			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

				tpj('.fullscreenbanner').revolution(
					{
						delay:9000,
						startwidth:1170,
						startheight:600,

						onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

						thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
						thumbHeight:50,
						thumbAmount:3,

						hideThumbs:0,
						navigationType:"bullet",				// bullet, thumb, none
						navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

						navigationStyle:false,				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


						navigationHAlign:"left",				// Vertical Align top,center,bottom
						navigationVAlign:"bottom",					// Horizontal Align left,center,right
						navigationHOffset:30,
						navigationVOffset:30,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						touchenabled:"on",						// Enable Swipe Function : on/off


						stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
						stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

						hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
						hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
						hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


						fullWidth:"on",							// Same time only Enable FullScreen of FullWidth !!
						fullScreen:"off",						// Same time only Enable FullScreen of FullWidth !!


						shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

					});


		});
		</script>
		

		
<style>
.nav-tabs  li  a:hover {
/* border: 0px solid transparent; */
background: none !important; 

box-shadow: none !important;
}
</style>


	<!-- WRAP -->
	<div class="wrap cstyle03">
		<form name="complaintdetails" method="post" id="complaintregisterpage" accept-charset="UTF-8" class="form-horizontal" action="" >
 <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">   
  <input type="hidden" name="international" id="international" value="international">           
 <input type="hidden" name="leavingfrom"  id="leavingfrom1" onClick="Clear();"  value="<?php if(isset($_POST['leavingfrom'])) echo $_POST['leavingfrom'] ; ?>"  />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="goingto"  id="goingto1" onClick="Clear();"   value="<?php if(isset($_POST['goingto'])) echo $_POST['goingto'];?>" />
    
      <input type="hidden" name="city_type"  value="icities_suggestions" />
      
      <input type="hidden" name="plantype" value="intFlight"  />
		<div class="container mt-130 z-index100">		
		  <div class="row">
			<div class="col-md-12">
				<div class="bs-example bs-example-tabs cstyle04">
				
					<ul class="nav nav-tabs" id="myTab" style="background: none !important;margin-top: -96px;">
						<li onclick="mySelectUpdate()" class="col-xs-6 col-md-3 col-lg-3 inactive"><?php echo HTML::link('flight_index', 'Domestic Flight'); ?></li>
						<li onclick="mySelectUpdate()" class="col-xs-6 col-md-3 col-lg-3" style="background: #fff !important;"><a style="color: #004387 !important;">International Flight</a></li>
						
					</ul>
					
	<div class="tab-content3 clearfix" id="myTabContent">
		<div class="tab-pane fade active in">
              <div class="nopad pbottom15 col-sm-12 col-md-12 col-lg12 clearfix">
              		<div class="col-sm-12 col-md-2 col-lg-2">
            		   <label > <input type="radio" name="type"   <?php if(isset($_POST['type']) && $_POST['type']=='O') echo 'checked'; else echo 'checked'; ?>  value="O"  onclick="changetype()"/>
              		  <span style="margin-left:6px" class="opensans size13">One-way</span> </label>
             		 </div>
              		<div class="col-sm-12 col-md-2 col-lg-2">
            	  		<label>  <input type="radio" name="type" <?php if(isset($_POST['type']) && $_POST['type']=='R') echo 'checked';  ?>  value="R" onclick="changetype()"  />
                		<span style="margin-left:6px" class="opensans size13"> Round trip</span> </label>
                	</div>
             </div> 
 						<div class="clearfix"></div>
					<div class="pbottom15 col-sm-12 col-md-6 col-lg-6">
             			 <div>
                 			 <div class="textleft">
                 				  <span class="opensans size13"><b>Flying From</b></span>
									 <input type="text"   class="form-control" name="leavingfrom1"  id="leavingfrom"  value="<?php if(isset($_POST['leavingfrom1'])) echo $_POST['leavingfrom1'] ; ?>"/>
							</div>
						</div>
					</div>

					<div class="pbottom15 col-sm-12 col-md-6 col-lg-6">
               			 <div>
                 			<div class="textleft">
                  				 <span class="opensans size13"><b>Flying To</b></span>
<input type="text"  class="form-control" name="goingto1"  id="goingto"  value="<?php if(isset($_POST['goingto1'])) echo $_POST['goingto1'] ; ?>"/>
							</div>
						</div>
					</div>
							
				<div class="pbottom15 col-sm-12 col-md-6 col-lg-6">
               		 <div>
                 		 <div class="textleft"> <span class="opensans size13"><b>Departing</b></span>
<?php $tomorrow = mktime(0, 0, 0, date("m"), date("d")+1, date("y")); ?>
<input type="text" class="form-control mySelectCalendar" name="departure" value="<?php if(isset($_POST['departure'])) echo $_POST['departure'] ; else if(isset($departure)) echo $departure; else echo date('d-m-Y',$tomorrow); ?>" readonly autocomplete="off" style="background-color: #ffffff;" id="departure"  />
						</div>
					</div>
				</div>
				<div class="pbottom15 col-sm-12 col-md-6 col-lg-6 pad1">
                	<div>
                 		 <div class="textleft"> <span class="opensans size13"><b>Returning</b></span>
<?php $dtomorrow = mktime(0, 0, 0, date("m"), date("d")+2, date("y")); ?>
									
<input type="text" class="form-control mySelectCalendar" name="return" style="background-color: #ffffff;" value="<?php if(isset($_POST['return'])) echo $_POST['return'] ; else if(isset($_POST['departure'])) echo $_POST['departure']; else if(isset($return)) echo $return; else echo date('d-m-Y',$dtomorrow); ?>"  readonly autocomplete="off" id="return"   />
							</div>
					</div>
				</div>
							
		  <div class="col-sm-12 col-md-12 col-lg-12 clearfix nopad">
              <div class="pbottom15 col-sm-12 col-md-3 col-lg-3">
                <div>
                  <div class="textleft"> <span class="opensans size13"><b>Adult</b></span>
                    <select name="adults" id="adults" class="form-control" >
                      <option value="1" selected="selected">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                    </select>
                  </div>
                </div>
              </div>
       		<div class="pbottom15 col-sm-12 col-md-3 col-lg-3">
              <div>
               	 <div class="textleft "> <span class="opensans size13"><b>Child</b></span>
                    <select name="children" id="children" class="form-control" >
                      <option value="0" selected="selected">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select>
                  </div>
                </div>
              </div>
          	 <div class="pbottom15 col-sm-12 col-md-3 col-lg-3">
                <div class="textleft "> <span class="opensans size13"><b>Infants</b></span>
					<span id="hide_infants_data">
					<select name="infants" id="infants" class="form-control" >
					<option value="0">0</option>
					<option value="1">1</option>
					</select>
					</span>
					<span id="infants_data">
					</span>
                </div>
                <!--Fare<input type="checkbox" name="discouted" >!--> 
              </div>
              <div class="pbottom15 col-sm-12 col-md-3 col-lg-3">
                <div>
                  <div class="textleft "> <span class="opensans size13"><b>Class</b></span>
                    <select id="cabinClass" class ="form-control" name="class">
                      <option value="A" <?php if($class=='A') echo 'selected'; ?>>All </option>
                      <option value="E" <?php if($class=='E') echo 'selected'; ?> >Economy</option>
                      <option value="B" <?php if($class=='B') echo 'selected'; ?>>Business </option>
                    </select>
                  </div>
                  <!--Fare<input type="checkbox" name="discouted" >!--> 
                </div>
              </div>
            </div>
          </div>
							
						
						
						<!--End of 1st tab -->
						
						
						<!--End of 2nd tab -->
						
						
						<!-- End of Flight + Hotel -->

												
						<!--End of Flight + Hotel + Car -->
					</div>
					
			<div class="searchbg4">
					<div class="col-xs-4 pull-right pbottom15" style = "top:auto">
							<button type="submit" onclick="return compare();" class="btn-search mt10">Search</button>
					</div>	
					</div>
						
				</div>
			</div>
			
		  </div>
	
</form>
<!--<div class="lastminute2 lcfix">
			<div class="container lmc">	
				<img src="images/rating-4.png" alt=""/><br/>
				LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
				<form action="list4.html">
					<button class="btn iosbtn" type="submit">Read more</button>
				</form>
			</div>
		</div>-->
<script>
function yousendit(){
    if(document.getElementById('flight').checked){
        window.location='airline_index';
        return false;
    }
    return true;

}
</script>    
<script>
	$(function() {
	
		 $( "#departure" ).datepicker({
		
			dateFormat : 'dd-mm-yy',
			changeMonth : true,
			changeYear : true, 
			minDate: '+1d',
			
			showButtonPanel: true,
			onSelect: function( selectedDate ) {
				var minDate = $(this).datepicker('getDate');
				if (minDate) {
				minDate.setDate(minDate.getDate() );
				}
				$( "#return" ).datepicker( "option",{ minDate:minDate}, selectedDate );

			}

		});
		
		$( "#return" ).datepicker({
		dateFormat : 'dd-mm-yy',
		changeMonth : true,
		changeYear : true, 
		minDate: '+1d',
		
		showButtonPanel: true,
		onSelect: function( selectedDate ) { //alert($('#startPicker').val());
			var minDate = $(this).datepicker('getDate');
			if (minDate) {
			minDate.setDate(minDate.getDate());
			}
			$( "#departure" ).datepicker( "option",{ maxDate:minDate}, selectedDate );
		}
		});
	 var v=$('[name="type"]:checked').val();
	
	 if(v=='R')
	 $("#return").removeAttr('disabled');
	 else
	   $("#return").attr('disabled','true');
	   
	   if(v=='R'){
	 $("#rbox").show();
	  $(".pad1").show();
	  }
	 else{
	   $("#rbox").hide();
	   $(".pad1").hide();
	   }
	   
	});
	
	function changetype()
	{
	 
	 var v=$('[name="type"]:checked').val();
	 if(v=='R'){
	 $("#return").removeAttr('disabled');
	  $("#rbox").show();
	   $("#discount").removeAttr('disabled');
	   $("#dbox").show();
	   $(".pad1").show();
	 }
	 else{
	   $("#return").attr('disabled','true');
	    $("#rbox").hide();
	       $("#discount").attr('disabled','true');
	          $("#dbox").hide();
	          $(".pad1").hide();
	   }
	   
	}
</script>








<script type="text/javascript">
var fly='icities_suggestions';

$(document).ready(function() {
$("#adults").on('change',function()
{
  $.ajax({
  	 type:"POST",
  	 url:"<?=URL::to('load_infants')?>",
  	 data:
		{
		"adults_count":$('#adults option:selected').html()
		},            
  	 success:function(options){
  	 	$("#hide_infants_data").hide();
  	 	$("#infants_data").html(options);
  	 }
  })
}); 

$(function() {	
		$("#leavingfrom").autocomplete({
		
			  source: "flightcityauto_cleartrip",
                    minLength: 1,                    
                    select: function( event, ui ) {
                        $('#leavingfrom1').val(ui.item.id);
                      
                    },
                    change:function (event, ui) {
                     
                    if (ui.item === null) {
                       $('#leavingfrom1').val('');
                    }
                    }
		});
		
		//Going to suggesstion
		
		$("#goingto").autocomplete({
				  source: "flightcityauto_cleartrip",
                    minLength: 1,                    
                    select: function( event, ui ) {
                        $('#goingto1').val(ui.item.id);
                      
                    },
                    change:function (event, ui) {
                     
                    if (ui.item === null) {
                       $('#goingto1').val('');
                    }
                    }
		});
		

	});

});


function submitform()
{
$('#complaintregisterpage').submit();
}
</script>
<script>
function showImg()
 {
        var leave =document.getElementById("leavingfrom1").value;
        var go =document.getElementById("goingto1").value;
 if(leave != "" && leave !=null && go != "" && go !=null)
 {
 if
 (document.getElementById) { $("#closeit").hide(); 
$("#showit").show(); 
 return document.getElementById("flight-im").style.visibility = "hidden";
 }}
 document.onstop = function() {
 (document.getElementById("progress_img")).style.visibility = "hidden";
}
  
   var source1=$('#leavingfrom1').val();
   
if(source1==null || source1=="")
  {
  alert("No City Specified, Please Select City from dropdown to Proceed.");
  return false;
  }
   var destination=$('#goingto1').val();
if(destination==null || destination=="")
  {
  alert("No City Specified, Please Select City from dropdown to Proceed.");
  return false;
  }
  if(source1 == destination)
  
  {
  alert("Please change Source/Destination, as they cannot be the same.");
  return false;
  
  }
}
function compare()
    {
      var leavingfrom=$('#leavingfrom').val();  
      
      var goingto=$('#goingto').val();
                        
      if(leavingfrom == null || leavingfrom=='')
          {
            alert("No City Specified, Please Select City from dropdown to Proceed.");
            return false;
          }
          
     if(goingto==null || goingto=='')     
         {
           alert("No City Specified, Please Select City from dropdown to Proceed.");
            return false;  
         }
         
        if(leavingfrom == goingto)
        {

        alert("Please change Source/Destination, as they cannot be the same.");
        return false;

        } 
        
        if($('#leavingfrom1').val() =='')
            {
              alert("Please select Source/Destination from the dropdown");
              return false;  
            }
        if($('#goingto1').val() =='')
            {
              alert("Please select Source/Destination from the dropdown");
              return false;  
            }    
    }
</script> 
<style>
.error {
	color: red;
        font-size: 13px;
}
</style>

