<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Univercity
                        </div>
						<div class="panel-heading" style="align:right">
                            <?php  echo $this->Html->link('Add Univercity',['controller' => 'Univercity', 'action' => 'add'],['class'=>"btn btn-default"]); ?>


      
                        </div>
			 
							 <?= $this->Flash->render('positive') ?>
							 <?= $this->Flash->render('negative') ?>
							 <?= $this->Flash->render('delete') ?>
							 <?= $this->Flash->render('update') ?>
		                        <div class="panel-body">
									<div class="table-responsive">
										<div role="grid" class="dataTables_wrapper form-inline" id="dataTables-example_wrapper">
												<table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" aria-describedby="dataTables-example_info">
									  
					                						<thead>
														            <tr role="row">
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Province Name">Univercity Name</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Country Name">Country</th>
																	
																	
																	<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="Action">Action</th>
																	
																	</tr>
														   	</thead>
											             	<tbody>
										                             <?php if(count($univercity)>0)
										   							  		{?>
													                            <?php foreach ($univercity as $list):

													                             ?>
													                                    <tr class="gradeA odd">
																		
													                                        <td class="sorting_1"><?php echo $list['univercity_name']; ?></td>
													                                        <td class="sorting_1"><?php echo $list['country']['country_name']; ?>
													                                        </td>
													                                       	<td class=" "> 
													                                       		<?=$this->Html->link( 'Edit', ['controller' => 'Univercity','action' => 'edit', $list['univercity_id']] ); ?>  |  <?= $this->Form->postLink('Delete',['action' => 'delete', $list['univercity_id']],['confirm' => 'Are you sure?'])?>
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