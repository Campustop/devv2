<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Collage
                        </div>
						<div class="panel-heading" style="align:right">
                            <?php  echo $this->Html->link('Add Collage',['controller' => 'Collage', 'action' => 'add'],['class'=>"btn btn-default"]); ?>


      
                        </div>
			 
							<?php  echo $this->Flash->render('success'); ?>
							<?php // echo $this->Session->flash('good'); ?>
		                        <div class="panel-body">
									<div class="table-responsive">
										<div role="grid" class="dataTables_wrapper form-inline" id="dataTables-example_wrapper">
												<table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" aria-describedby="dataTables-example_info">
									  
					                						<thead>
														            <tr role="row">
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Collage Name">Collage Name</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Country Name</th>
																		<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">State Name</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Status">Status</th>
																	
																	
																	<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="Action">Action</th>
																	
																	</tr>
														   	</thead>
											             	<tbody>
										                             <?php if(count($collage)>0)
										   							  		{
										   							  			
										   							  			?>
													                            <?php foreach ($collage as $list): 

													                            	//pr($list);
													                            	//die;

													                            ?>

													                                    <tr class="gradeA odd">
																		
													                                        <td class="sorting_1"><?php echo $list['collage_name']; ?></td>
													                                       <td class="sorting_1"><?php echo $list['country']['country_name']; ?></td>
													                                        <td class="sorting_1"><?php echo $list['province']['province_name']; ?></td>
													                                       
													                                       <?php
													                                       if($list['status'] == 1)
													                                       {
													                                       	  $status = "Active";

													                                       }
													                                       else
													                                       {
																								$status = "Deactive";
													                                       }
													                                       ?>
													                                         <td class="sorting_1"><?php echo $status ;?></td>
													                                        
													                                         <td class=" "> 

													                                         <?=$this->Html->link( 'Edit', ['controller' => 'collage','action' => 'edit', $list['collage_id']] ); ?>  |  <?= $this->Form->postLink('Delete',['action' => 'delete', $list['collage_id']],['confirm' => 'Are you sure?'])?>


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