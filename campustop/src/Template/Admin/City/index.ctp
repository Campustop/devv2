 <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            City
                        </div>
						<div class="panel-heading" style="align:right">
                            <?php  echo $this->Html->link('Add City',['controller' => 'City', 'action' => 'add'],['class'=>"btn btn-default"]); ?>


      
                        </div>
			 
							<?php  echo $this->Flash->render('success'); ?>
							<?php // echo $this->Session->flash('good'); ?>
		                        <div class="panel-body">
									<div class="table-responsive">
										<div role="grid" class="dataTables_wrapper form-inline" id="dataTables-example_wrapper">
												<table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" aria-describedby="dataTables-example_info">
									  
					                						<thead>
														            <tr role="row">
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">City Code</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">State</th>
																	
																	
																	<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="Action">Action</th>
																	
																	</tr>
														   	</thead>
											             	<tbody>
										                             <?php if(count($city)>0)
										   							  		{?>
													                            <?php foreach ($city as $list): ?>
													                                    <tr class="gradeA odd">
																		
													                                        <td class="sorting_1"><?php echo $list['city_name']; ?></td>
													                                         <td class="sorting_1"><?php echo $list['province']['province_name']; ?></td>
													                                        
													                                         
													                                         


													                                       <td class=" "> 

													      

													<?=$this->Html->link( 'Edit', ['controller' => 'city','action' => 'edit', $list['city_id']] ); ?>  |  <?= $this->Form->postLink('Delete',['action' => 'delete', $list['city_id']],['confirm' => 'Are you sure?'])?>


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