<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add City 
                        </div>
                       <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
				
				<div class="users form">
				<table class='table table-striped table-bordered table-hover dataTable no-footer'>
				<?= $this->Form->create($city) ?>
					<tr>
						<td>
							<label>City Name:</label>
						</td>
						<td>
							<?php echo $this->Form->input('city_name', array('type' => 'text', 'label' => false)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Province name:</label>
						</td>
						<td>
							<?php echo $this->Form->select('province_id', $province,['empty' => '(choose one)']); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Status</label>
						</td>
						<td>
							<?php
									$options = array(1 => 'YES',2 => 'NO');
									echo $this->Form->input('status',['type'=>'checkbox','value'=>'1', 'options' => $options ,'label'=>false]);
						?>
						</td>
					</tr>
					<tr>
					<td colspan="2" align="center">
					<?php
					echo $this->Form->button('Add', array('type' => 'submit','class'=>'btn btn-default'));
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
