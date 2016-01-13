 <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Country
                        </div>
						<div class="panel-heading" style="align:right">
                            <?php  echo $this->Html->link('Add Country',['controller' => 'Countrys', 'action' => 'add'],['class'=>"btn btn-default"]); ?>


      
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
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Country Id</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Country Code</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Country Code</th>
																	<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="Action">Action</th>
																	
																	</tr>
														   	</thead>
											             	<tbody>
										                             <?php if(count($countrys)>0)
										   							  		{?>
													                            <?php foreach ($countrys as $list): ?>
													                                    <tr class="gradeA odd">
																							<td class="sorting_1"><?php echo $list['country_id']; ?></td>
													                                        <td class="sorting_1"><?php echo $list['country_name']; ?></td>
													                                        <td class="sorting_1"><?php echo $list['country_code']; ?></td>
													                                      	<td class=" "> <?=$this->Html->link( 'Edit', ['controller' => 'Countrys','action' => 'edit', $list['country_id']] ); ?>  |  <?= $this->Form->postLink('Delete',['action' => 'delete', $list['country_id']],['confirm' => 'Are you sure?'])?>

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