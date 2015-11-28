<?php echo $this->Html->script('ckeditor/ckeditor');?>
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Cms 
                        </div>
                       <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
				
				<div class="users form">
				<table class='table table-striped table-bordered table-hover dataTable no-footer'>
				<?= $this->Form->create($cms) ?>
					<tr>
						<td>
							<label>Cms Title:</label>
						</td>
						<td>
							<?php echo $this->Form->input('cms_title', array('type' => 'text', 'label' => false)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Cms Description:</label>
						</td>
						<td>
							<?php echo $this->Form->input('cms_desc', ['type' => 'textarea', 'label' => false,'class'=>'ckeditor']); ?>


						</td>
					</tr>
					<tr>
						<td>
							<?php
									echo $this->Form->hidden('created_dt', ['value'=>time()]);
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
