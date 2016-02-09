<?php //pr($newletters);die;?>

 <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            News Letter Subscriber
                        </div>
						<!--<div class="panel-heading" style="align:right">
                            <?php // echo $this->Html->link('Export To Excel',['controller' => 'Newsletter', 'action' => 'exporttoexcel'],['class'=>"btn btn-default"]); ?>


      
                        </div>-->
			 
							<?php  echo $this->Flash->render('success'); ?>
							<?php // echo $this->Session->flash('good'); ?>
		                        <div class="panel-body">
									<div class="table-responsive">
										<div role="grid" class="dataTables_wrapper form-inline" id="dataTables-example_wrapper">
												<table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" aria-describedby="dataTables-example_info">
									  
					                						<thead>
														            <tr role="row">
																		<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 80%;" aria-sort="ascending" aria-label="Category Name" >Subscriber Email</th>
																		<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 20%;" aria-sort="ascending" aria-label="Category Name" >Subscriber Status</th>
																	</tr>
														   	</thead>
											             	<tbody>
											             	 <?php if(count($newletters)>0)
										   							  		{?>
													                            <?php foreach ($newletters as $list):

													                             ?>
													                                    <tr class="gradeA odd">
															                          		<td class="sorting_1"><?php echo $list['newslatter_email']; ?></td>
																		                    <td class="sorting_1"><?php if($list['newslatter_status']=="S")
																		                    							{?>
																		                    								<a href='#' onclick='confirm_inactive("<?php echo $list['newslatter_id']; ?>")'><img src='<?= SITEURL; ?>webroot/img/status.gif'/></a>
																		                    					<?php	}
																		                    							else
																		                    							{?>
																		                    									<a href='#' onclick='confirm_active("<?php echo $list['newslatter_id']; ?>")'><img src='<?= SITEURL; ?>webroot/img/unstatus.gif'/></a>
																		                    					<?php	} ?></td>
																		                </tr>
																		<?php endforeach; ?>
																	<?php 	} ?>
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

  <script type="text/javascript">

  	$(document).ready(function() 
  	{
  		$('#dataTables-example').dataTable({
      		"oSearch": {"sSearch":"" }
    });
});
	function confirm_active(id) 
	{

	//alert(id);
	  var value= confirm('Are you sure you want to subscribe this record?');

	  if(value)
		  {
		    window.location = '<?php echo SITEURL.'admin/Newsletter/subscribe'; ?>'+"/"+id;
		  }
	}

	function confirm_inactive(id) 
	{
		
	  //alert(id);
	  var value= confirm('Are you sure you want to unsubscribe this record?');

	  if(value)
		  {
		    window.location = '<?php echo SITEURL.'admin/Newsletter/unsubscribe'; ?>'+"/"+id;
		  }
	}



  	

	
	
  </script>