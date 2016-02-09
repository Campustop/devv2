 <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Testinomial
                        </div>
						<div class="panel-heading" style="align:right">
                            <?php  echo $this->Html->link('Add Testinomial',['controller' => 'Testinomials', 'action' => 'add'],['class'=>"btn btn-default"]); ?>


      
                        </div>
			 
							<?= $this->Flash->render('positive') ?>
              				<?= $this->Flash->render('delete') ?>
        					<?= $this->Flash->render('update') ?>
							<?php // echo $this->Session->flash('good'); ?>
		                        <div class="panel-body">
									<div class="table-responsive">
										<div role="grid" class="dataTables_wrapper form-inline" id="dataTables-example_wrapper">
												<table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" aria-describedby="dataTables-example_info">
									  
					                						<thead>
														            <tr role="row">
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Testinomial Id</th>
																	
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Testinomial Name</th>
																	<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 500px;" aria-sort="ascending" aria-label="Category Name">Testinomial Rating</th>
																	
																	
																	<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 200px;" aria-label="Action">Action</th>
																	
																	</tr>
														   	</thead>
											             	<tbody>
										                             <?php if(count($testinomial)>0)
										   							  		{?>
													                            <?php foreach ($testinomial as $list): 

													                            	//pr($list['t_rating']);die;
													                            ?>
													                                    <tr class="gradeA odd">
													                                        <td class="sorting_1"><?php echo $list['testimonial_id']; ?></td>
													                                        
													                                        <td class="sorting_1"><?php echo $list['t_name']; ?></td>
													                                        <td class="sorting_1"><?php echo $list['t_rating']; ?></td>
																							<td class=" ">
																								<?=$this->Html->link( 'Edit', ['controller' => 'Testinomials','action' => 'edit', $list['testimonial_id']] ); ?> | <?= $this->Form->postLink('Delete',['action' => 'delete', $list['testimonial_id']],['confirm' => 'Are you sure?'])?>


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