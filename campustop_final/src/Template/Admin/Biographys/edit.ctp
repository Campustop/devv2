<script type="text/javascript">
function showdetails(value)
{
	if(value==1)
	{
		
		$('.detailstitle').hide();
		 $('.detailsurl').show();
		 $('.detailstitle input[type="text"]').val('');
		 $("#b-description").val('');
		 //$('.detailsurl').text('');
	}
	else
	{
		
		$('.detailstitle').show();
		$('.detailsurl').hide();
		$('.detailsurl input[type="text"]').val('');

	}
	
}
</script>
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add biography 
                        </div>
                       <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
				
				<div class="users form">
				<table class='table table-striped table-bordered table-hover dataTable no-footer'>
				<?= $this->Form->create($biography) ?>
					<tr >
						<td>
							<label></label>
						</td>
						<td>
							<input id="details" type="radio" value="1" name="details" onclick="showdetails(this.value)" checked>Url</br>
							<input id="details1" type="radio" value="2" name="details" onclick="showdetails(this.value)">Details
						</td>
					</tr>



					<tr class="detailstitle" style="display:none">
						<td>
							<label>Title</label>
						</td>
						<td>
							<?php echo $this->Form->input('b_title', ['type' => 'text', 'label' => false]); ?>
						</td>
					</tr>
					<tr class="detailstitle" style="display:none">
						<td>
							<label>Description:</label>
						</td>
						<td>
							<?php echo $this->Form->input('b_description', ['type' => 'textarea', 'label' => false]); ?>
							<?php echo $this->Form->hidden('modified_dt', ['value'=>time()]); ?>
						</td>
					</tr>
					<tr id="detailsurl" class="detailsurl">
						<td>
							<label>Video URL:</label>
						</td>
						<td>
							<?php echo $this->Form->input('b_video_url', ['type' => 'text', 'label' => false]); ?>
						</td>
					</tr>
					<tr>
					<td colspan="2" align="center">
					<?php
					echo $this->Form->button('Update', ['type' => 'submit','class'=>'btn btn-default']);
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
