<style type="text/css">
	.rate_widget {
    border:     1px solid #CCC;
    overflow:   visible;
    padding:    10px;
    position:   relative;
    width:      180px;
    height:     32px;
}
.ratings_stars {
    background: url('star_empty.png') no-repeat;
    float:      left;
    height:     28px;
    padding:    2px;
    width:      32px;
}
.ratings_vote {
    background: url('star_full.png') no-repeat;
}
.ratings_over {
    background: url('star_highlight.png') no-repeat;
}
</style>
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Testimonial 
                        </div>
                       <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
				
				<div class="users form">
				<table class='table table-striped table-bordered table-hover dataTable no-footer'>
				<?= $this->Form->create($testinomial,['enctype' => 'multipart/form-data','file' => true]) ?>
					<tr>
						<td>
							<label>Testimonial Name:</label>
						</td>
						<td>
							<?php echo $this->Form->input('t_name', array('type' => 'text', 'label' => false)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>College:</label>
						</td>
						<td>
							<?php echo $this->Form->input('t_college', array('type' => 'text', 'label' => false)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Designation:</label>
						</td>
						<td>
							<?php echo $this->Form->input('t_designation', array('type' => 'text', 'label' => false)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Testimonial Name:</label>
						</td>
						<td>
							<?php echo $this->Form->input('t_image', array('type' => 'file','label' => false)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Description</label>
						</td>
						<td>
							<?php echo $this->Form->input('t_description', ['type' => 'textarea', 'label' => false]); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Rating</label>
						</td>
						<td>
							<?php echo $this->Form->input('t_sortorder', array('type' => 'text', 'label' => false)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Sortorder</label>
						</td>
						<td>
							<?php echo $this->Form->input('t_sortorder', array('type' => 'text', 'label' => false)); ?>
							<?php echo $this->Form->hidden('created_dt', ['value'=>time()]); ?>
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
