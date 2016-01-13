<script>
$(document).ready(function() 
{
$("#stateclass").change(function(){
	
	var country=$("#stateclass").val();
	
     $.ajax({
                    type:"POST",
                    url:"<?php echo SITEURL.'admin/collage/getprovince'; ?>",
                     data: {countryid:country},
                      dataType:"json",
                    success: function(data)
                    {
//alert(data);
//var obj = jQuery.parseJSON(data);
//alert(obj.province_id);

  var html = '<option value=""><?php echo "choose one"; ?></option>' ;
					      $.each(data, function (i, item) {

					        html += '<option value="'+item.province_id+'">'+item.province_name+'</option>';
					       });
      /*var trHTML = '';
        $.each(data, function (i, item) {
        	alert(item.province_name+"dd");
            trHTML += '<tr><td>' + item.province_id + '</td><td>' + item.province_name + '</td></tr>';
        });*/



                    	//alert(data);
                        //$("#bindcity").html(data);
                        $('#bindcity').html(html);
                    }
            });
    
    });
 });
</script>
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Collage 
                        </div>
                       <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
				
				<div class="users form">
				<table class='table table-striped table-bordered table-hover dataTable no-footer'>
				<?= $this->Form->create($collage) ?>
					<tr>
						<td>
							<label>Collage Name:</label>
						</td>
						<td>
							<?php echo $this->Form->input('collage_name', array('type' => 'text', 'label' => false)); ?>
						</td>
					</tr>
						<tr>
						<td>
							<label>Country name:</label>
						</td>
						<td>
						<?php echo $this->Form->select('country_id', $country,['id'=>'stateclass','empty' => '(choose one)']);?>
						</td>
					</tr>
					<tr>
					<td>
							<label>State name:</label>
						</td>
						<td>
						<select name="province_id" required="required" id="bindcity">
						<option value=""><?php echo "choose one"; ?></option>
					
						</select>
						</td>
						</tr>
						
					
					
					
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
