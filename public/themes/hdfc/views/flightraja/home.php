<script src="themes/hdfc/assets/js/jquery.validate.min.js"></script>
<script src="themes/hdfc/assets/jsfillter/jquery-ui-1.10.3.custom.js"></script>
<script src="themes/hdfc/assets/jsfillter/jquery.lazyload.js"></script> 
<script src="themes/hdfc/assets/assets/js/jquery-1.11.1.min.js"></script>
<style> .error{ color:red; }</style>

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
				
				
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						
						<img src="images/slider/paris.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">France</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Paris</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>	
					
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						<img src="images/slider/rome.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo">
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">Italy</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Rome</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>	
				
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						<img src="images/slider/santorini.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo">
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">Greece</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Santorini</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>


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
		

		



	<!-- WRAP -->
	<div class="wrap cstyle03">
		<form name="complaintdetails" method="post" id="complaintregisterpage">
<input type="hidden" name="leavingfrom"  id="leavingfrom1" onClick="Clear();"  value="<?php if(isset($_POST['leavingfrom'])) echo $_POST['leavingfrom'] ; ?>"  />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="goingto"  id="goingto1" onClick="Clear();"   value="<?php if(isset($_POST['goingto'])) echo $_POST['goingto'];?>" />
 <input type="hidden" name="city_type"  value="cities_suggestions" />
      
      <input type="hidden" name="plantype" value="DomFlight"  />
      <input type="hidden" name="flig" value="DomFlight"  />
		<div class="container mt-130 z-index100">		
		  <div class="row">
			<div class="col-md-12">
				<div class="bs-example bs-example-tabs cstyle04">
				
					<ul class="nav nav-tabs" id="myTab">
						<li onclick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#hotel2"><span class="hotel"></span><span class="hidetext">Air</span>&nbsp;</a></li>
						
					</ul>
					
					<div class="tab-content2" id="myTabContent">
							<div class="tab-pane fade active in">
<div class="col-md-12">
<input type="radio" name="type"   <?php if(isset($_POST['type']) && $_POST['type']=='O') echo 'checked'; else echo 'checked'; ?>  value="O"  onclick="changetype()"/><span>One-way</span>
                            <input type="radio" name="type" <?php if(isset($_POST['type']) && $_POST['type']=='R') echo 'checked';  ?>  value="R" onclick="changetype()"  /> <span> Round trip</span></div>
 
      
							<div class="col-md-4">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Flying from</b></span>
										<input type="text"   class="form-control" name="leavingfrom1"  id="leavingfrom"  value="<?php if(isset($_POST['leavingfrom1'])) echo $_POST['leavingfrom1'] ; ?>"/>
									</div>
								</div>

								<div class="w50percentlast">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>To</b></span>
					

<input type="text"  class="form-control" name="goingto1"  id="goingto"  value="<?php if(isset($_POST['goingto1'])) echo $_POST['goingto1'] ; ?>"/>
									</div>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Departing</b></span>
<?php $tomorrow = date('d-m-Y',mktime(0, 0, 0, date("m"), date("d")+1, date("y"))); ?>

							
  <input name="departure" id="datepicker" class="form-control mySelectCalendar" type="text" autocomplete="off" readonly="readonly" value="<?php  echo $tomorrow;?>"   />
		
								</div>
								</div>

								<div class="w50percentlast pad1">
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Returning</b></span>
<?php $dtomorrow = date('d-m-Y',mktime(0, 0, 0, date("m"), date("d")+2, date("y"))); ?>
  <input name="return" id="datepicker2" class="form-control mySelectCalendar" type="text" autocomplete="off" readonly="readonly" value="<?php  echo $dtomorrow;?>"   />
										

									</div>
								</div>
							</div>
							
							<div class="col-md-2">
								<div class="room1" >
									<div class="w50percent">
										<div class="wh90percent textleft">
											<span class="opensans size13"><b>Adult</b></span>
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

									<div class="w50percentlast">	
										<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Child</b></span>
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
							</div>
						
						
<div class="col-md-1">
								
							
										<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Infants</b></span>
											<select name="infants" id="infants" class="form-control" >
<option value="0" selected="selected">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>                               
										</div>
</div>
<div class="col-md-1">
<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Class</b></span>
											<select id="cabinClass" class ="form-control" name="class">
		    <option value="A" <?php if($class=='A') echo 'selected'; ?>>All </option>
		    <option value="E" <?php if($class=='E') echo 'selected'; ?> >Economy</option>
	           <option value="B" <?php if($class=='B') echo 'selected'; ?>>Business </option>	
					</select>
										</div>
Fare<input type="checkbox" name="discouted" >
									</div>
								</div>
							
						
						
						<!--End of 1st tab -->
						
						
						<!--End of 2nd tab -->
						
						
						<!-- End of Flight + Hotel -->

												
						<!--End of Flight + Hotel + Car -->
					</div>
					
					<div class="searchbg2">
						<div class="left ca01"><a href="#">Advanced +</a></div>
						
							<button type="submit" onclick="return date_validation();" class="btn-search right mr30">Search</button>
						
					</div>
						
				</div>
			</div>
			
		  </div>
		</div>
</form>
<div class="lastminute2 lcfix">
			<div class="container lmc">	
				<img src="images/rating-4.png" alt=""/><br/>
				LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
				<form action="list4.html">
					<button class="btn iosbtn" type="submit">Read more</button>
				</form>
			</div>
		</div>
<script>
	$(function() {
	
		 $( "#departure" ).datepicker({
		
			dateFormat : 'dd-mm-yy',
			changeMonth : true,
			changeYear : true, 
			minDate: '+1d',
			numberOfMonths: 2, 
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
		numberOfMonths: 2, 
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
(function($){
 $("img").lazyload({
     effect       : "fadeIn"
 });
})(jQuery);
</script>


<script>
	
	$(document).ready(function(){
	
	$('#complaintregisterpage').validate({
	                focusInvalid: false,
	                ignore: "",
	                rules: {
	                       leavingfrom1: {
	                        required: true
	                    },
	                    goingto1: {
	                        required: true
	                    },
	                    form1CardNumber: {
	                        required: true,
	                        creditcard: true
	                    }
	                },
	
	                invalidHandler: function (event, validator) {
	                                        //display error alert on form submit   
	                },
	
	                errorPlacement: function (label, element) { // render error placement for each input type   
	                                        $('<span class="error"></span>').insertAfter(element).append(label)
	                    var parent = $(element).parent('.input-with-icon');
	                    parent.removeClass('success-control').addClass('error-control'); 
	                },
	
	                highlight: function (element) { // hightlight error inputs
	                                        var parent = $(element).parent();
	                    parent.removeClass('success-control').addClass('error-control');
	                },
	
	                unhighlight: function (element) { // revert the change done by hightlight
	                   
	                },
	
	                success: function (label, element) {
	                                        var parent = $(element).parent('.input-with-icon');
	                                        parent.removeClass('error-control').addClass('success-control');
	                },
	
	                submitHandler: function (form) {
	                submit();
	                }
	            });
	       
	       
	        });
	</script>




<script type="text/javascript">
var fly='cities_suggestions';

$(document).ready(function() {
$(function() {
  $('#datepicker').datepicker({ minDate: new Date() });
$('#datepicker2').datepicker({ minDate: new Date() });
});


$(function() {	
		$("#leavingfrom").autocomplete({
		
			  source: "flightcityautocomplete",
                    minLength: 1,                    
                    select: function( event, ui ) {
                        $('#leavingfrom1').val(ui.item.id);
                      
                    }
		});
		
		//Going to suggesstion
		
		$("#goingto").autocomplete({
				  source: "flightcityautocomplete",
                    minLength: 1,                    
                    select: function( event, ui ) {
                        $('#goingto1').val(ui.item.id);
                      
                    }
		});
		

	});

});

function date_validation(){
	
	 var dep_date = $("#datepicker").val();
	  var ret_date = $("#datepicker2").val();
	 
	if(dep_date > ret_date){
	alert('please select Returning date must greater than Departing date.');
	return false;
	}
	
	
	}
	
function submitform()
{
  
$('#complaintregisterpage').submit();
}
</script>
<script>
function showImg()
 {
       
 if(document.getElementById) { 
 $("#closeit").hide(); 
$("#showit").show();
 return document.getElementById("flight-im").style.visibility = "hidden";
 }
 document.onstop = function() {
 (document.getElementById("progress_img")).style.visibility = "hidden";
}
}
</script>


