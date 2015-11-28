 <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Itinerary
                        </div>
						<div class="panel-heading" style="align:right">
                            <a href="<?php echo $this->Html->Url(array('controller' => 'TourItineraryMasters', 'action' => 'add',$tour_id)); ?>" class="btn btn-default">Add Itinerary </a>
                        </div>
			 
							<?php  echo $this->Session->flash('bad'); ?>
							<?php  echo $this->Session->flash('good'); ?>
		                        <div class="panel-body">
									<div class="table-responsive">
										<div role="grid" class="dataTables_wrapper form-inline" id="dataTables-example_wrapper">
												<table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" aria-describedby="dataTables-example_info">
									  
					                						<thead>
														            <tr role="row">
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Day No</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Title</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Food Title</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Hotel</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Transport</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Best Part of the day</th>
																	
																	<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="Action">Action</th>
																	
																	</tr>
														   	</thead>
											             	<tbody>
										                             <?php if(count($itinerary)>0)
										   							  		{?>
													                            <?php foreach ($itinerary as $list): ?>
													                                    <tr class="gradeA odd">
																		
																		 					
													                                        <td class="sorting_1"><?php echo $list['TourItineraryMaster']['tour_itinerary_id']; ?></td>
													                                        <td class="sorting_1"><?php echo $list['TourItineraryMaster']['title']; ?></td>
													                                        <td class="sorting_1" align="center">  
													                                        	<?php if($list['TourItineraryMaster']['isfood'])
													                                        		{
													                                        			echo $list['TourItineraryMaster']['foodtitle']; 
													                                         	 	}
													                                          		else
													                                          		{
													                                          			echo "--";

													                                          		}?>
													                                         </td>
													                                         <td class="sorting_1" align="center">  
													                                        	<?php if($list['TourItineraryMaster']['ishotel'])
													                                        		{
													                                        			echo $list['HotelMaster']['hotel_name']; 
													                                         	 	}
													                                          		else
													                                          		{
													                                          			echo "--";

													                                          		}?>
													                                         </td>
													                                         <td class="sorting_1" align="center">  
													                                        	<?php if($list['TourItineraryMaster']['istransport']==1)
													                                        		{
													                                        			if($list['TourItineraryMaster']['trasporttype']==1)
													                                        			{
													                                        				echo "Bus" ;
													                                        			}
													                                        			elseif($list['TourItineraryMaster']['trasporttype']==2)
													                                        			{
													                                        				echo "Flight" ;
													                                        			}
													                                        			elseif($list['TourItineraryMaster']['trasporttype']==3)
													                                        			{
													                                        				echo "Train" ;
													                                        			} 
													                                         	 	}
													                                          		else
													                                          		{
													                                          			echo "--";

													                                          		}?>
													                                         </td>
													                                         <td class="sorting_1" align="center">  
													                                        	<?php if($list['TourItineraryMaster']['isbest']==1)
													                                        		{
													                                        			echo $list['TourItineraryMaster']['besttitle']; 
													                                         	 	}
													                                          		else
													                                          		{
													                                          			echo "--";

													                                          		}?>
													                                         </td>



													                                       <td class=" "> 
																		 						<a href="<?php echo $this->Html->Url(array('controller' => 'TourItineraryMasters', 'action' => 'edit',$list['TourItineraryMaster']['tour_itinerary_id'])); ?>">Edit
																		 						</a> | <a href="<?php echo $this->Html->Url(array('controller' => 'TourItineraryMasters', 'action' => 'delete',$list['TourItineraryMaster']['tour_itinerary_id'])); ?>">Delete
																		 						</a>
																		 					</td>
																	   
													                                        </tr>
																			<?php endforeach; ?>
																	<?php 	}
																			else
																			{?>
																				<tr >
																					<td colspan="4">There is no records in table</td>
																				</tr>
																				<?php 
																			}?>
															</tbody>
							        			</table>
		                            	</div> 
		                        </div>
		                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    </div>
        </div>
    	
  </div>
  <script type="text/javascript">

  	$(document).ready(function() 
  	{
  		$('#dataTables-example').dataTable({
      		"oSearch": {"sSearch":"" }
    });
});
  </script>