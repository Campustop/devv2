<style type="text/css">
/* Reset body padding and margins */
body { margin:0; padding:0; }
 
/* Make Header Sticky */
#header_container { background:#eee; border:1px solid #666; height:60px; left:0; position:fixed; width:100%; top:0; }
#header{ line-height:60px; margin:0 auto; width:940px; text-align:center; }
 
/* CSS for the content of page. I am giving top and bottom padding of 80px to make sure the header and footer do not overlap the content.*/
#container { margin:0 auto; overflow:auto; padding:80px 0; width:940px; }
#content{}
 
/* Make Footer Sticky */
#footer_container { background:#eee; border:1px solid #666; bottom:0; height:60px; left:0; position:fixed; width:100%; }
#footer { line-height:60px; margin:0 auto; width:940px; text-align:center; }
</style>
<div class="kd-content">
<section class="kd-pagesection" style=" padding: 0px 0px 0px 0px; background: #ffffff; ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
        	<div class="container section" style="padding: 0px">
         		<figure class="detail-thumb-details">
         				<a href="#"><?php    echo $this->Html->image('uploads/travelgallery/'.$this->requestAction('TravelimageMasters/getimage/'.$package['Tourdetailmaster']['tour_id']),array('alt'=>'')); ?>
                        </a>
                </figure>
         	</div>
    		<div  id="top_section" class="container section" style="padding: 0px"> 
                <div class="tags">
					<?php if($package['Tourdetailmaster']['hotdeal']!=0)
							{?>

							  <span class="hot-price thbg1-color" style="width:20%;z-index:1;position: relative;top: 7px;">Save up to $<?php echo $package['Tourdetailmaster']['hotprice'];?>  <i>pp</i></span>
					 <?php }?>
					 <?php if($package['Tourdetailmaster']['newtour'])
					 		{?>
							 <span class="hot-price thbg-color" style="width:20%;z-index:1;position: relative;top: 7px;">New Tour  </span>
					<?php }?>
                   	<div class="text-description" style="padding-bottom:20px">
	               	<h1 id="tourPackageTitle" style="font-style:Times New Roman"><?php echo $package['Tourdetailmaster']['name']?></h1>
	                   <div class="details">
	                     From<span class="big">$<?php echo $package['Tourdetailmaster']['package_price'];?>*</span>pp | 
	                      		<?php   $end_date=strtotime($package['Tourdetailmaster']['end_date']);
                                        $start_date=strtotime($package['Tourdetailmaster']['start_date']) ;
                                        $date=floor(($end_date-$start_date)/(60*60*24));
                                        echo $date;
                                ?> Days <span class="small">*Rate is per person, land only, double occupancy. </span></span>
	                   </div>
	                   <div class="btn_container">
	                    <a id="tour-hero-book-now" class="action-button arrow button-big overlay-trigger ga-book-now" href="" target="_blank">
	                    Book Now</a>
	                    <button class="quote-button button button-secondary" data-toggle="modal" data-target="#myModal">Request a Quote</button>
	                          <div id="myModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                        <div class="modal-content">
                                                                <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">Request Quote</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                        <div>
                                                                                <div class="alert alert-success " id="subscribesucc" style="display:none">Thanks for inquiry. we will get back to you soon</div>
                                                                                 <table align="center" style="border:0px none">
                                                                                <?php echo $this->Html->image('resetaurants.jpg',array('alt'=>"",));?>
                                                                                <?php echo $this->Form->create('PackageGride',array('action' => 'addqoute','id'=>"quoteform")); ?>
                                                                               
                                                                                <tr style="border:0px none">
                                                                                <td align="center" >
                                                                                     <?php echo $this->Form->input('name', array('label'=>false,'div'=>false,'placeholder'=>"Name"));?>
                                                                                      <?php echo $this->Form->input('tour_id', array('label'=>false,'div'=>false,'value'=>$package['Tourdetailmaster']['tour_id']));
                                                                                      ?>
                                                                                </td>
                                                                                </tr>
                                                                                <tr style="border:0px none">
                                                                                <td align="center">
                                                                                     <?php echo $this->Form->input('phone', array('type'=>'text','label'=>false,'div'=>false,'placeholder'=>"Phone"));?>
                                                                                </td>
                                                                                </tr>
                                                                                <tr>
                                                                                <td align="center"> 

                                                                                     <?php echo $this->Form->input('email', array('type'=>'text','label'=>false,'div'=>false,'placeholder'=>"Email"));?>
                                                                                </td>
                                                                                </tr>
                                                                                <tr>
                                                                                <td align="center">
                                                                                          <input type="button" class="action-button" style:"width:40%" value="Send" onclick="ajaxcall()"/>
                                                                                </td>
                                                                                </tr>
                                                                               
                                                                              <?php echo $this->Form->end(); ?>
                                                                              </table>   
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
	                  </div>
	            </div>
          	 </div>	
         </div>
        <div id="slider_section" class="container section clearfix" style="background-color: #ececec; padding-left: 0px">
			
				 <div class="col-md-6 col-xs-6" style=" background-color: #ececec; ">
				 	<h2 id="tourPageSubTitle"></h2>
					<p class="tourdescription"><?php echo $package['Tourdetailmaster']['description'];?></p>
				</div>
				 <div class="col-md-6" >
					<div id="this-carousel-id" class="listbox">
  						<ul class="bxslider">
	    				<?php 
	    					$counter=0;
	    				  	foreach ($images as $list)
							{
								$counter++;
	    					?>
	    						<li>
								  <?php   echo $this->Html->image('uploads/travelgallery/'.$list['TravelimageMaster']['image'],array('alt'=>'')); ?>
								  </li>

					        <?php 
					        }?>	
				        </ul>
				     
					  </div>
				</div>	
       </div>
       <div class="sub_sections">	
       			<div id="route_section" class="section clearfix" > 
					<header class="section-header desktop container" style="background-color: #858577;">
					<h2 id="yourRouteTitle" class="h3">Your tour – at a glance</h2>
					</header>
       				<div id="yourRoute" class="clearfix container" style="background-color: #ececec;">
						<div class="col-md-6 col-xs-6 padded_content">
								<?php echo $package['Tourdetailmaster']['tour_route_details'];?>
						</div>
						
						<div class="col-md-6 col-xs-6">
							<div class="right_col" >
								<?php echo $this->Html->image('map.png',array('alt'=>"",'height'=>"396px", "width"=>"574px","style"=>"max-width: 206%"));?>
							</div>
						</div>
					
					</div>
					</div>
       	
       </div>
       <div class="sub_sections">	
       			<div id="route_section" class="section clearfix" > 
					<header class="section-header desktop container" style="background-color: #858577;">
					<h2 id="yourRouteTitle" class="h3">$ Available Offers</h2>
					</header>
       				<div id="yourRoute" class="clearfix container" style="background-color: #ececec;">
						<div class="offer-description" style="padding-bottom:20px">
						 	<div class="col-md-8 col-xs-8">
				               <h3  style="font-style:Times New Roman">Book Early & Save!</h3>
				              
				                 <p class="big-p">  Act now and save on your next travel experience. Space is limited and only available on select departures.

									To learn more about specific savings, simply click below on the tour date you are interested in. Or call us today!
								</p>
								<button class="thbg-color" style="color:white;width:100px" data-toggle="modal" data-target="#myModal" >
									<div class="button-text">Offer Details</div><div class="button-icon fa fa-arrow-right"></div>
								</button>
                                        
							</div>
							<a data-toggle="modal" data-target="#myModal" >
							<div class="col-md-4 col-xs-4" >
									 <article>
					                        <figure>
					                              </a>
					                                 <figcaption>
					                                 <span class="hot-price thbg-color">11 Days Left</span>
					                                    <div class="offer-title">
															<div class="offer-save">
															save
															<span class="offer-up-to">up to</span>
															</div>
															<div class="offer-amount">
															<span class="currency">$</span>
															<span id="earlyBookingUpTo">200</span>
															</div>
															<div class="offer-per">
															per person
															<sup>*</sup>
															</div>
															<div class="offer-detail">When you book by 09/29/2015</div>
															</div>
															
															<div class="offer-code">
																<div>Use Offer Code</div>
																<div class="code">SAVETODAY</div>
															</div>
															
					                                 </figcaption>
					                       </figure>
					                </article>
				             </div>
				             </a>
		            	</div>
					</div>
					<div class="tags">
			                
					 		<footer class="section-footer desktop container" style="background-color: #ececec; border-top:1px solid #858577 ">
					 			<div class="offer-deal thbg1-color" style="width:13%;z-index:1;position:relative;">
			                    	Hot Deal
			                 	</div>
					  	 		<p style="height:20px"></p>
								<p class="big-p">  Look for tours with our special Hot Deals badge. Often with departures that are closer in, these dates offer a great way to save if you are ready to get up and go!</p>
							</footer>
					</div>
				</div>
       </div>

       <?php $itinerary= $this->requestAction('Packagedetails/getitinerary/'.$list['Tourdetailmaster']['tour_id']);
       //pr($itinerary);die;
		
		if(!empty($itinerary))
			{?>
							
				       <div class="sub_sections">	
				       			<div id="itinerary_section" class="section clearfix" > 
									<header class="section-header desktop container" style="background-color:#858577;">
										<h2 id="yourRouteTitle" class="h3">Your Itinerary</h2>
									</header>

									<div class="container clearfix " style="background-color: #ececec;" align="center">
										<div id="yourItinerary" class="col-md-12 col-xs-12">
											<div id="itineraryDefaultView" class="itinerary_block_container clearfix">
												<div style="padding-top:10px">
												<?php 
													$count=0;
														foreach ($itinerary as $list1)
          												{
          													$count++;?>
          													<div class="col-md-3">
																<a id="#day<?php echo $count;?>" class="itinerary_block" href="#day<?php echo $count;?>" id="one">
																	<span class="title">Day <?php echo $count;?></span>
																	<span class="description"><?php echo $list1['TourItineraryMaster']['title']; ?></span>
																</a>
															</div>
												<?php   }?>
													
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-xs-12">
											<div class="expanded" style="display: block; border:1px gray">
													<div id="itineraryExpandedView" class="itinerary_table">
														<?php	$count=0;
																foreach ($itinerary as $list2)
		          												{	
		          													$count++;
		          										?>
		          										<div class="col-md-12 col-xs-12">
															<div class="itinerary_row">
																<div class="itinerary_row">
																	<div class="row_wrapper clearfix">
																			<div class="column col1">
																				<div class="day">
																					<a id="day<?php echo $count;?>" name="day<?php echo $count;?>">Day<span><?php echo $count;?></span></a>
																				</div>
																			</div>
																			<div class="column col2">
																				<div class="title"><?php echo $list2['TourItineraryMaster']['title']; ?></div>
																					<?php echo $list2['TourItineraryMaster']['description']; ?>
																					<div class="expanded_itinerary_details clearfix">
																						<p></p>
																						<ul class="itinerary_details_list">
																							<li class="itineraryFood" >
																								
																								<span class="food"><?php echo $list2['TourItineraryMaster']['foodtitle']; ?></span>
																							</li>
																							
																							<li class="itineraryUmbrella">
																								
																								<span class="umbrella">0"</span>
																							</li>
																							<li class="itinerarySupplier" >
																								
																								<span class="supplier"><?php echo $list2['HotelMaster']['hotel_name']; ?></span>
																							</li>
																						</ul>
																					</div>
																			</div>
																		</div>
																
																</div>
																</div>
																</div>
																<?php }?>
													</div>
											</div>
										</div>
								</div>
							</div>
			<?php }?>
			  <div class="sub_sections">	
       			<div id="route_section" class="section clearfix" > 
					<header class="section-header desktop container" style="background-color: #858577;">
					<h2 id="yourRouteTitle" class="h3">Other tours you may enjoy</h2>
					</header>
       				 <div class="row">
	            		<div class="container clearfix " style="background-color: #ececec;" >
								<div id="yourItinerary" class="col-md-12 col-xs-12">
									<div id="itineraryDefaultView" class="itinerary_block_container clearfix">
										<div style="padding-top:15px">
										<?php 
											$count=0;
												foreach ($tours as $list)
													{
														?>
														<div class="col-md-4">
														 <div class="tour-details-upper">

					                                          <?php     
	                                           						$image= $this->requestAction('Travels/getimage/'.$list['Tourdetailmaster']['tour_id']);
	                                                     			echo $this->Html->image('uploads/travelgallery/'.$image, array('alt'=>'','height'=>'180px',"width"=>'250px',
	                                                     				'align'=>'center'));
	                                                     		?>
	                                                     		<h2 class="tour-title" style="font-size: 16px;font-weight: bold; font-family:Times serif;"> 
					                                          		<a><?php echo $list['Tourdetailmaster']['name']?></a>
					                                          	</h2>
					                                          	 <div class="tour-days-meals">
                                                                    <span style="font-size: 15px;font-weight: bold; font-family:Times serif;">
                                                                      <?php 
                                                                                $end_date=strtotime($list['Tourdetailmaster']['end_date']);
                                                                                $start_date=strtotime($list['Tourdetailmaster']['start_date']) ;
                                                                                $date=floor(($end_date-$start_date)/(60*60*24));
                                                                                echo $date;
                                                                      ?> Days</span>
                                                                 </div>
                                                               </br>         
                                                                <div class="tour-description" style="align:justify;">
                                                                    <?php echo $list['Tourdetailmaster']['short_description']?>
                                                                    
                                                                </div>
					                                      </div>
													</div>
											<?php   }?>
											
										</div>
									</div>
								</div>
						</div>
					</div>
       			</div>
		</div>
 <div id="myModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                        <div class="modal-content">
                                                                <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">Early Booking Bonus Disclaimer</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                        <div>
                                                                               <p> Offer valid on new bookings only made between 09/14/2015 – 09/29/2015. Offer valid on new bookings only and can expire earlier due to space or inventory availability. Savings amount will vary by tour and departure date, and is only available on select departures. Space is on a first come, first served basis. Offers are not valid on group, existing bookings or combinable with any other offer. Other restrictions may apply. Promotional pricing may remain in effect after the expiration date.</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>       	
</div>
     
  </div>
 </div>
</section>
</div>


<script type="text/javascript">
$(document).ready(function(){
     $(".Carousel").carousel({
            interval: 3000
          });
});
  function ajaxcall()
            {                
                $.ajax({
                    type:'POST',
                    async: true,
                    cache: false,
                    url: '<?php echo Router::Url(array('controller' => 'PackageGride', 'action' => 'addqoute')) ?>',
                    data:$('#quoteform').serialize(),
                    success: function(response) 
                    {
                       $('#subscribesucc').show();
                       $("input[type='text']").val('');
                       $("textarea").val('');
                    },
                     error: function (tab)
                      {
                    alert('error');
                      }
                    
                });
                return false;
            };
</script>