<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Country 
                        </div>
                       <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
				
				<div class="users form">
				<table class='table table-striped table-bordered table-hover dataTable no-footer'>
				<?php
					echo $this->Form->create();
					?>
					<tr>
						<td>
							<label>Country Name:</label>
						</td>
						<td>
							<?php echo $this->Form->input('country_name', array('type' => 'text', 'label' => false)); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Country Code:</label>
						</td>
						<td>
							<?php echo $this->Form->input('country_code', ['type' => 'text', 'label' => false,'legend'=>false]); ?>
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
  <script type="text/javascript">
  function addfood()
	{
		if(document.getElementById('isfood').checked)
		{
			
			$('#fooddetail').show();

			//document.getElementById("attribute").style.display="";
		}
		else
		{
			$('#fooddetail').hide();
			//document.getElementById("attribute").style.display="none";
		}
	}

	 function addhotel()
	{
		if(document.getElementById('ishotel').checked)
		{
			
			$('#hoteldetail').show();

			//document.getElementById("attribute").style.display="";
		}
		else
		{
			$('#hoteldetail').hide();
			//document.getElementById("attribute").style.display="none";
		}
	}
	function addtransport()
	{
		if(document.getElementById('istransport').checked)
		{
			$('#transporttype').show();
		}
		else
		{
			$('#transporttype').hide();
			//document.getElementById("attribute").style.display="none";
		}
	}
	function addbestpart()
	{
		if(document.getElementById('isbest').checked)
		{
			$('#besttitle').show();
			$('#bestdescription').show();
		}
		else
		{
			$('#besttitle').hide();
			$('#bestdescription').hide();
			//document.getElementById("attribute").style.display="none";
		}
	}
	
</script>