<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit Region 
                        </div>
			
			<br/>
                       <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
					
				<div class="users form">
				<table class='table table-striped table-bordered table-hover dataTable no-footer'>
				<?php
					
					echo $this->Form->create('TourItineraryMaster',array('action' => 'edit'));
					echo $this->Form->input('tour_itinerary_id',array('type'=>'hidden'));
					echo $this->Form->input('tour_id',array('type'=>'hidden'));
					echo $this->Form->input('updated_by',array('type'=>'hidden','value'=>$updated_by)); 
					?>
					<tr>
						<td>
							<label>Title:</label>
						</td>
						<td>
							<?php echo $this->Form->input('title', array('type' => 'text', 'label' => false)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Description:</label>
						</td>
						<td>
							<?php echo $this->Form->input('description', array('type' => 'textarea', 'label' => false,'legend'=>false,)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Is Food:</label>
						</td>
						<td>
							<?php
									$options = array(1 => 'YES',2 => 'NO');
									echo $this->Form->input('isfood',array('type'=>'checkbox','value'=>'1', 'options' => $options ,'label'=>false,'id'=>'isfood','onclick'=>'addfood()'));
						?>
						</td>
					</tr>
					<tr id="fooddetail" style="display:none">
						<td>
							<label>Food Status:</label>
						</td>
						<td>
							<?php echo $this->Form->input('foodtitle', array('type' => 'text', 'label' => false,'legend'=>false,)); ?>
						</td>
					</tr>
					<tr >
					<tr>
						<td>
							<label>add hotel?</label>
						</td>
						<td>
							<?php
									$options = array(1 => 'YES',2 => 'NO');
									echo $this->Form->input('ishotel',array('type'=>'checkbox','value'=>'1', 'options' => $options ,'label'=>false,'id'=>'ishotel','onclick'=>'addhotel()'));
						?>
						</td>
					</tr>
					<tr id="hoteldetail" style="display:none">
						<td>
							<label>Hotel:</label>
						</td>
						<td>
							<?php 
				
								echo $this->Form->input('hotel_id',array(
									'options'=>$hotel,
									'div'=>false,
									'label'=>false,
									'empty'=>'Select one'
								));	
							?>
						</td>
					</tr>
					<tr >
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
    </div></div>
</div>
  <script type="text/javascript">
  $(document).ready(function() 
	{
		addfood();
		addhotel()
	});
  function addfood()
	{
		if($('#isfood').prop('checked')==true)
		{
			$('#fooddetail').show();
		}
		else
		{
			$('#fooddetail').hide();
		}
	}

	 function addhotel()
	{
		if($('#ishotel').prop('checked')==true)
		{
			$('#hoteldetail').show();
		}
		else
		{
			$('#hoteldetail').hide();
		}
	}
</script>