<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Province
                        </div>
						<div class="panel-heading" style="align:right">
                            <?php  echo $this->Html->link('Add Province',['controller' => 'Province', 'action' => 'add'],['class'=>"btn btn-default"]); ?>


      
                        </div>
			 
							<?php  echo $this->Flash->render('success'); ?>
							<?php // echo $this->Session->flash('good'); ?>
		                        <div class="panel-body">
									<div class="table-responsive">
										<div role="grid" class="dataTables_wrapper form-inline" id="dataTables-example_wrapper">
												<table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" aria-describedby="dataTables-example_info">
									  
					                						<thead>
														            <tr role="row">
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Province Name">Province Name</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Country Name">Country select</th>
																	
																	
																	<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="Action">Action</th>
																	
																	</tr>
														   	</thead>
											             	<tbody>
										                             <?php if(count($province)>0)
										   							  		{?>
													                            <?php foreach ($province as $list):

													                            	//pr($list);
													                            	//die;
													                             ?>
													                                    <tr class="gradeA odd">
																		
													                                        <td class="sorting_1"><?php echo $list['province_name']; ?></td>
													                                        <td class="sorting_1"><?php echo $list['country']['country_name']; ?></td>
													                                         <td class="sorting_1"><?php echo $list['status']; ?></td>
													                                         
													                                         


													                                       <td class=" "> 

													      

													<?=$this->Html->link( 'Edit', ['controller' => 'Province','action' => 'edit', $list['province_id']] ); ?>  |  <?= $this->Form->postLink('Delete',['action' => 'delete', $list['province_id']],['confirm' => 'Are you sure?'])?>


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