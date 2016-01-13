<?php

?><div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User List
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
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Name">Name</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="User Name">Username</th>
																	<!--<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Country">role</th>-->
																	<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="Action">Action</th>
																	
																	</tr>
														   	</thead>
											             	<tbody>
										                             <?php 

										                            //pr($users);
										                           //  	die;
										                             if(count($users)>0)
										   							  		{?>
													                            <?php foreach ($users as $list):

													                           // pr($list);
													                           // die;
													                             ?>
													                                    <tr class="gradeA odd">
																							
													                                        <td class="sorting_1"><?php echo $list['fname']."&nbsp;".$list['mname']."&nbsp;".$list['lname']; ?></td>
													                                        <td class="sorting_1"><?php echo $list['username']; ?></td>
													                                        <!--<td class="sorting_1"><?php echo $list['user_role_name']; ?></td>-->
													                                        
																							<td class=" "> <?=$this->Html->link( 'View', ['controller' => 'Users',
																							'action' => 'viewadmin', $list['user_id']] ); ?>  |  <?= $this->Form->postLink('Delete',['	action' => 'delete', $list['user_id']],['confirm' => 'Are you sure?'])?>

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