<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          	<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Update Resource
                        </div>
                       <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
				
										<div class="users form">
										<table class='table table-striped table-bordered table-hover dataTable no-footer'>
										<?= $this->Form->create($resource) ?>
											<tr>
												<td>
													<label>Resource Title:</label>
												</td>
												<td>
													<?php echo $this->Form->input('resource_name', array('type' => 'text', 'label' => false)); ?>
													<?php echo $this->Form->hidden('modified_dt', ['value'=>time()]); ?>
												</td>
											</tr>
											
											<tr>
											<td colspan="2" align="center">
											<?php
											echo $this->Form->button('Update', array('type' => 'submit','class'=>'btn btn-default'));
											echo $this->Form->end(); 
											
											?>
											</td>
											</tr>
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
