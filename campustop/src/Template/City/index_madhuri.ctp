 <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Country
                        </div>
						<div class="panel-heading" style="align:right">
                            <a href="<?php echo $this->Url->build(["controller" => "Countrys","action" => "add"]); ?>" class="btn btn-default">Add Country </a>
                        </div>
			 
						<?= $this->Flash->render('bad') ?>
						<?= $this->Flash->render('good') ?>
                        <div class="panel-body">
						<div class="table-responsive">
							
							<div class="col-sm-6">
							</div>
			   			</div>
						<table cellpadding="0" width="100%" style="width:100%;" cellspacing="0" border="0" class='table table-striped table-bordered table-hover dataTable no-footer' id="hhhh">
											<thead>
												<tr>
													<!-- *************************************************** -->
													<!-- ************** Headers Of table at Top************* -->
													<!-- *************************************************** -->
													<th width="10$;">ID</th>

													<th width="80%;">Country Name</th>
													<th width="10%;" align="center">Action</th>
													
													
												</tr>
											</thead>
											<tbody>
											</tbody>
							</table>
						</div>                  
		</div>
			</div>
		</div>
		<div class="curveBottom">
			<img height="8" width="8" src="/assets/img/bl.jpg" alt="" class="curveCorner" />
		</div>
	</div>
</div>
<script type="text/javascript">
  	$(document).ready(function() 
  	{
  		alert("hi");
  		
  		$('#hhhh').dataTable({

        "iDisplayLength": 10,
        "bProcessing": true,
        "bServerSide": false,
      	"sAjaxSource": '<?php echo $this->Url->build(["controller" => "Countrys","action" => "index"]); ?>',
       
        "aoColumns": [
        {mData:"Countrys.country_id"},
      //  {mData:"RegionMaster.region_name", bSortable: false},
        {mData:"Countrys.country_name"},
        {mData:"Countrys.country_id","sClass": "center"},
      
       
    ],
    "fnCreatedRow": function(nRow, aaData, iDataIndex)
    {
       $('td:eq(2)', nRow).html('<a href="Countrys/edit/'+aaData.Countrys.country_id+'">'+"Edit"+'</a> | <a href="Countrys/delete/'+aaData.Countrys.country_id+'">'+"Delete"+'</a>');
    }
       
    });
} );
  </script>