
<style type="text/css">
.workdiv
{
    border:2px solid #d2d6de;
    padding-left:4%; 
    padding-top:2%;
    margin-top:4%
}
</style>
<section id="contact-us" class="page-section">
        <div class="container">
        	<div style="padding-top:2%; font-size: 14px; color:#555;">Well, we need your collage/university and course details to help you find study resource details to help you find study resources relavant to your course  and collage/university </div>
           <hr class="pad-10">
                <div class="row">
                    <div class="col-md-6" style="">
                        <p class="form-message" style="display: none;"></p>
                            <div class="contact-form" id="education1">
                                    <?= $this->Flash->render('positive') ?>
                                        <?= $this->Form->create('', ['id'=>'workform','controller' => 'profile','action' => 'work']); ?>
                                        <div id="workdetails">
                                			 <?php if(count($work)>0)
                                              {?>
                                                    <?php foreach ($work as $list): 
                                                    	//pr($list);
                                                    ?>
		                                            					<div id="workid1" class="workdiv col-md-12"  style="float:left;">
				                                             			<div style="padding-bottom:5%; padding-right:2%" class="form-group"> 
		                                                                           <select name="work_flag[] "  style="float:right" class="selectpicker">
		                                                                                 <option data-icon="glyphicon glyphicon-globe" value="1" <?php if($list['work_flag']==1){ echo 'selected="selected"' ;} ?>></option>
		                                                                                 <option data-icon="glyphicon glyphicon-user" value="0" <?php if($list['work_flag']==0){ echo 'selected="selected"' ;} ?>></option>     
		                                                                            </select>
			                                                            </div>
					                                            		<div class="col-md-12 form-group">
					                                                        <div class="col-md-4">
					                                                        	<span style="font-size: 14px; color:#555;">I have working in</span>
					                                                        </div>
					                                                        <div class="col-md-8">
					                                                           	<input type="text" name="company_name[]" class="form-control" placeholder="Company Name" value="<?php echo $list['worked_in'];?>">
					                                                        </div> 

					                                                    </div>
					                                                    <div class="col-md-12 form-group">

					                                                    	<div class="col-md-4">
					                                                        	<span style="font-size: 14px; color:#555; " class="work">This job was</span>
					                                                        </div>
					                                                        <div class="col-md-8">
					                                                       		<select name="job[]" required="required" style="float:centter;" class="input-email form-control">
					                                                                 	<option value="">Select job</option>
					                                                                 	<option value="parttime" <?php if($list['job_was']=="parttime"){ echo "selected";}?>>Parttime</option>
					                                                                 	<option value="fulltime" <?php if($list['job_was']=="fulltime"){ echo "selected";}?>>Fulltime</option>
					                                                                 	
					                                                            </select>
					                                                        </div>
					                                                    </div>
					                                                    <div class="col-md-12 form-group">

					                                                    	<div class="col-md-4">
					                                                        	<span style="font-size: 14px; color:#555; " class="work">This worked on</span>
					                                                        </div>
					                                                        <div class="col-md-8">
					                                                       		<textarea name="worked_on[]" class="input-email form-control"><?php  echo $list['worked_on']; ?></textarea>
					                                                        </div>
					                                                    </div>
					                                                    <div class="col-md-12 form-group">

					                                                    	<div class="col-md-4">
					                                                        	<span style="font-size: 14px; color:#555; " class="">I worked from</span>
					                                                        </div>
					                                                        <div class="col-md-8">
					                                                       	
					                                                              <select id="start_year" name="work_from[]" class="input-email form-control" style="width:33%">
                                                                                        <option>Start Year</option>
                                                                                              <script>
                                                                                              var myDate = new Date();
                                                                                              var year = myDate.getFullYear();
                                                                                              var val="<?php echo $list['work_from'] ?>";
                                                                                             // alert(val);
                                                                                              for(var i = 1975; i < year+10; i++)
                                                                                              {
                                                                                                if(val == i )
                                                                                                {
                                                                                                  document.write('<option value='+i+' selected>'+i+'</option>');
                                                                                                }
                                                                                                else
                                                                                                {
                                                                                                  document.write('<option value='+i+' >'+i+'</option>');
                                                                                                }
                                                                                              }
                                                                                              
                                                                                              </script>
                                                                                        </select>
                                                                               <span style="font-size: 14px; color:#555;padding-right:2%;padding-left:2% " class="">Till</span>
					                                                       		<select id="end_year" name="work_end[]" class="input-email form-control" style="width:33%">
					                                                                     <option value="">End Year</option>
                                                                                              <script>
                                                                                              var myDate = new Date();
                                                                                              var year = myDate.getFullYear();
                                                                                              var val="<?php echo $list['work_end'] ?>";
                                                                                             
                                                                                                  for(var i = 1975; i < year+10; i++)
                                                                                                  {
                                                                                                    if(val == i )
                                                                                                    {
                                                                                                      document.write('<option value='+i+' selected>'+i+'</option>');
                                                                                                    }
                                                                                                    else
                                                                                                    {
                                                                                                      document.write('<option value='+i+' >'+i+'</option>');
                                                                                                    }
                                                                                              }
                                                                                              </script>
                                                                                    </select>
					                                                        </div>
					                                                        
					                                                    </div>
					                                                    <div class="col-md-12 form-group">
					                                                    	<input type="checkbox" name="current_work_flag[]" style="margin-left:50%" <?php if($list['current_work_flag']=="Y"){ echo "checked"; } ?>>Currently working Here
					                                                    </div>
					                                                    <div class="col-md-12 form-group">

					                                                    	<div class="col-md-4">
					                                                        	<span style="font-size: 14px; color:#555;" class="work">The insights i gained from this work experience</span>
					                                                        </div>
					                                                        <div class="col-md-8">
					                                                       		<textarea name="work_experience[]" class="input-email form-control"  ><?php echo $list['work_experience']; ?></textarea>
					                                                        </div>
					                                                    </div> 
		                                                   <a href="" class="delete"></a>   
		                                            </div>

		                                    <?php endforeach; ?>
                                            <?php   }
                                              else  {?>
					                                      <div id="workid1" class="workdiv col-md-12"  style="float: left;">
					                                      	<div style="padding-bottom:5%; padding-right:2%" class="form-group"> 
                                                                   <select name="work_flag[]"  style="float:right" class="selectpicker">
                                                                         <option data-icon="glyphicon glyphicon-globe" value="1" <?php if($list['work_flag']==1){ echo "selected";}?>></option>
                                                                         <option data-icon="glyphicon glyphicon-user" value="0" <?php if($list['work_flag']==0){ echo "selected";}?>></option>     
                                                                    </select>
	                                                        </div>
		                                            		<div class="col-md-12 form-group">
		                                                        <div class="col-md-4">
		                                                        	<span style="font-size: 14px; color:#555;">I have working in</span>
		                                                        </div>
		                                                        <div class="col-md-8">
		                                                           	<input type="text" name="company_name[]" class="form-control" placeholder="Company Name" style=>
		                                                        </div> 

		                                                    </div>
		                                                    <div class="col-md-12 form-group">

		                                                    	<div class="col-md-4">
		                                                        	<span style="font-size: 14px; color:#555; " class="work">This job was</span>
		                                                        </div>
		                                                        <div class="col-md-8">
		                                                       		<select name="job[]" required="required" style="float:centter;" class="input-email form-control">
		                                                                 	<option value="">Select job</option>
		                                                                 	<option value="parttime">Parttime</option>
		                                                                 	<option value="fulltime">Fulltime</option>
		                                                                 	
		                                                            </select>
		                                                        </div>
		                                                    </div>
		                                                    <div class="col-md-12 form-group">

		                                                    	<div class="col-md-4">
		                                                        	<span style="font-size: 14px; color:#555; " class="work">This worked on</span>
		                                                        </div>
		                                                        <div class="col-md-8">
		                                                       		<textarea name="worked_on[]" class="input-email form-control" ></textarea>
		                                                        </div>
		                                                    </div>
		                                                    <div class="col-md-12 form-group">

		                                                    	<div class="col-md-4">
		                                                        	<span style="font-size: 14px; color:#555; " class="">I worked from</span>
		                                                        </div>
		                                                        <div class="col-md-8">
					                                                       	
					                                                              <select id="start_year" name="work_from[]" class="input-email form-control" style="width:33%">
                                                                                        <option>Start Year</option>
                                                                                              <script>
                                                                                              var myDate = new Date();
                                                                                              var year = myDate.getFullYear();
                                                                                             
                                                                                              for(var i = 1975; i < year+10; i++)
                                                                                              {
                                                                                               
                                                                                                  document.write('<option value='+i+' >'+i+'</option>');
                                                                                               
                                                                                              }
                                                                                              
                                                                                              </script>
                                                                                        </select>
                                                                               <span style="font-size: 14px; color:#555;padding-right:2%;padding-left:2% " class="">Till</span>
					                                                       		<select id="end_year" name="work_end[]" class="input-email form-control" style="width:33%">
					                                                                     <option value="">End Year</option>
                                                                                              <script>
                                                                                              var myDate = new Date();
                                                                                              var year = myDate.getFullYear();
                                                                                              for(var i = 1975; i < year+10; i++)
                                                                                              {
                                                                                               	document.write('<option value='+i+' >'+i+'</option>');
                                                                                                
                                                                                              }
                                                                                              </script>
                                                                                    </select>
					                                                        </div>
		                                                        
		                                                    </div>
		                                                    <div class="col-md-12 form-group">
		                                                    	<input type="checkbox" name="current_work_flag[]" style="margin-left:53%">Currently working Here
		                                                    </div>
		                                                    <div class="col-md-12 form-group">

		                                                    	<div class="col-md-4">
		                                                        	<span style="font-size: 14px; color:#555;" class="work">The insights i gained from this work experience</span>
		                                                        </div>
		                                                        <div class="col-md-8">
		                                                       		<textarea name="work_experience[]" class="input-email form-control" ></textarea>
		                                                        </div>
		                                                    </div>  
		                                                    <a href="" class="delete"></a> 
		                                            </div>  
		                                            
					                        <?php     } ?>
					                        </div>
					                                         <div style="margin-bottom:3%">
					                                                <input type="button" class="submit_btn" id="addwork"><span > Add Another Qualification</span>
					                                        </div>
					                                        <div >
					                                                   <input type="hidden" id="totalworkcount" name="totalworkcount" >
					                                                    <?php echo $this->Form->button('Save', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'profilebtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
					                                        </div>
                                   <?php echo $this->Form->end(); ?>
                                                <!-- Form Ends -->
                                    <div class="clearfix"></div>  
                    </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
      var count = 1;
      	 $('.workdiv  a:first').removeClass('delete');
	     $("#addwork").click(function () {
	        count=++count
	        document.getElementById("totalworkcount").value = count;
	        var x = $('#workdetails').clone();
	        x.find(":input").val(''); //id-selector to be used also clone it
	        x.removeAttr('id'); //since id of an element must be unique remove the id from clone
	        $("#workdetails").closest('#workdetails').append(x);
	    });
	   
	    $('.workdiv').on('click','.delete',function() {
    			$(this).parent().remove();
    			count=--count
    			 return false;
			});
	
});
   

</script>