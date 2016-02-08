<style type="text/css">
.educationdiv
{
    border:2px solid #d2d6de;
    padding-left:4%; 
    padding-top:2%;
    margin-top:4%
}
.submit_btn {
   background:url("http://localhost/cakephp3/webroot/img/plus.png") no-repeat;
  border: medium none !important;
  width: 10%;
  height: 10%;
  margin-left: 55.5%;
  color: transparent;
  padding-top: -3%;
  padding-bottom: 3%
}
</style>
<section id="contact-us" class="page-section">
    <div class="container">
          <div style="padding-top:2%; font-size: 14px; color:#555;">Well, we need your collage/university and course details to help you find study resource details to help you find study resources relavant to your course  and collage/university </div>
           <hr class="pad-10">
                <div class="row">
                    <div class="col-md-6" style="">
                        <p class="form-message" style="display: none;"></p>                                    <?= $this->Flash->render('positive') ?>
                                        <?= $this->Form->create('User', ['id'=>'educationform','controller' => 'profile','action' => 'education']); ?>
                                        <div id="educationdetails">
                                        <?php if(count($education)>0)
                                              {?>
                                                    <?php foreach ($education as $list): ?>
                                                            <div class="educationdiv col-md-12"  style="float: left;">
                                                                <div class="form-group"> 
                                                                            
                                                                                <select name="education_flag[] "  style="float:right" class="selectpicker">
                                                                                     <option data-icon="glyphicon glyphicon-globe" value="1" <?php if($list['education_flag']==1){ echo 'selected="selected"' ;} ?>></option>
                                                                                     <option data-icon="glyphicon glyphicon-user" value="0" <?php if($list['education_flag']==0){ echo 'selected="selected"' ;} ?>></option>     
                                                                                </select>
                                                                            
                                                                </div>
                                                                    <div class="col-md-12 form-group">
                                                                            <div class="col-md-3">
                                                                              <span style="font-size: 14px; color:#555;">Degree :<sup>*</sup></span>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                              <?php echo $this->Form->select('degree_id[]', $degree, array('class'=>'input-email form-control','empty' => 'Degree','value'=>$list['degree_id']));?>
                                                                                           
                                                                            </div> 

                                                                    </div>
                                                                    <div class="col-md-12 form-group">

                                                                      <div class="col-md-3">
                                                                          <span style="font-size: 14px; color:#555; " class="work">Program :<sup>*</sup></span>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                           <?php echo $this->Form->select('program_id[]', $program, array('class'=>'input-email form-control','empty' => 'Program/Major','value'=>$list['program_id']));?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 form-group">

                                                                      <div class="col-md-3">
                                                                          <span style="font-size: 14px; color:#555; " class="work"> Course :<sup>*</sup></span>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                         <?php echo $this->Form->input('', array('type' => 'text', 'name'=>'course_name[]' ,'class' => 'singleFieldTags input-email form-control', 'value'=>$list['course_name'])); ?>
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-12 form-group">

                                                                      <div class="col-md-3">
                                                                          <span style="font-size: 14px; color:#555; " class="work">Univercity :<sup>*</sup></span>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                           <?php echo $this->Form->select('university_id[]', $univercity, array('class'=>'input-email form-control','empty' => 'University','value'=>$list['university_id']));
                                                                               ?>
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-12 form-group">

                                                                      <div class="col-md-3">
                                                                          <span style="font-size: 14px; color:#555; " class="work">Collage :<sup>*</sup></span>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                           <?php echo $this->Form->select('collage_id[]', $collage, array('class'=>'input-email form-control','empty' => 'Collage','value'=>$list['collage_id']));
                                                                               ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 form-group">

                                                                        <div class="col-md-3">
                                                                          <span style="font-size: 14px; color:#555; " class="">Batch :<sup>*</sup></span>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                                  <select id="start_year" name="starting_year[]" class="input-email form-control" style="width:33%">
                                                                                        <option>Starting Year</option>
                                                                                              <script>
                                                                                              var myDate = new Date();
                                                                                              var year = myDate.getFullYear();
                                                                                               var val="<?php echo $list['starting_year'] ?>";
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
                                                                                      <select id="end_year" name="ending_year[]" class="input-email form-control" style="width:33%">
                                                                                         <option>Ending Year</option>
                                                                                              <script>
                                                                                              var myDate = new Date();
                                                                                              var year = myDate.getFullYear();
                                                                                              var val="<?php echo $list['ending_year'] ?>";
                                                                                             
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
                                                                      <a href="" class="delete"></a>   
                                                                    </div>
                                                             
                                                          </div>
                                                    <?php endforeach; ?>
                                              <?php   }
                                              else  {?>
                                                      <div class="educationdiv col-md-12 blanck"  style="float: left;">
                                                                <div class="form-group"> 
                                                                            
                                                                                <select name="education_flag[] "  style="float:right" class="selectpicker">
                                                                                       <option data-icon="glyphicon glyphicon-globe" value="1" ></option>
                                                                                       <option data-icon="glyphicon glyphicon-user" value="0" ></option>     
                                                                                </select>
                                                                            
                                                                </div>
                                                                    <div class="col-md-12 form-group">
                                                                            <div class="col-md-4">
                                                                              <span style="font-size: 14px; color:#555;">Degree</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                              <?php echo $this->Form->select('degree_id[]', $degree, array('class'=>'input-email form-control','empty' => 'Degree'));?>
                                                                                           
                                                                            </div> 

                                                                    </div>
                                                                    <div class="col-md-12 form-group">

                                                                      <div class="col-md-4">
                                                                          <span style="font-size: 14px; color:#555; " class="work">Program</span>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                           <?php echo $this->Form->select('program_id[]', $program, array('class'=>'input-email form-control','empty' => 'Program/Major'));?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 form-group">

                                                                      <div class="col-md-4">
                                                                          <span style="font-size: 14px; color:#555; " class="work"> Course </span>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                          <input type="text" id="singleFieldTags" name="course_name[]" class="singleFieldTags input-email form-control " placeholder="Course" style="">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-12 form-group">

                                                                      <div class="col-md-4">
                                                                          <span style="font-size: 14px; color:#555; " class="work">Univercity</span>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                           <?php echo $this->Form->select('university_id[]', $univercity, array('class'=>'input-email form-control','empty' => 'University'));
                                                                               ?>
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-12 form-group">

                                                                      <div class="col-md-4">
                                                                          <span style="font-size: 14px; color:#555; " class="work">Collage</span>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                           <?php echo $this->Form->select('collage_id[]', $collage, array('class'=>'input-email form-control','empty' => 'Collage'));
                                                                               ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 form-group">

                                                                        <div class="col-md-4">
                                                                          <span style="font-size: 14px; color:#555; " class="">Batch</span>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                                  <select id="start_year" name="starting_year[]" class="input-email form-control" style="width:33%">
                                                                                        <option>Starting Year</option>
                                                                                              <script>
                                                                                              var myDate = new Date();
                                                                                              var year = myDate.getFullYear();
                                                                                              for(var i = 1975; i < year+10; i++){
                                                                                                  document.write('<option value="'+i+'">'+i+'</option>');
                                                                                              }
                                                                                              </script>
                                                                                        </select>
                                                                                     <span style="font-size: 14px; color:#555;padding-right:2%;padding-left:2% " class="">Till</span>
                                                                                      <select id="end_year" name="ending_year[]" class="input-email form-control" style="width:33%">
                                                                                         <option>Ending Year</option>
                                                                                              <script>
                                                                                              var myDate = new Date();
                                                                                              var year = myDate.getFullYear();
                                                                                              for(var i = 1975; i < year+10; i++){
                                                                                                  document.write('<option value="'+i+'">'+i+'</option>');
                                                                                              }
                                                                                              </script>
                                                                                      </select>
                                                                        </div>
                                                                      <a href="" class="delete"></a>   
                                                                    </div>
                                                             
                                                      </div>
                                          <?php     } ?>
                                     </div>
                                        <div style="margin-bottom:3%">
                                                <input type="button" class="submit_btn" id="addquali"><span > Add Another Qualification</span>
                                        </div>
                                        <div >
                                                   <input type="hidden" id="totalcount" name="totalcount" >
                                                    <?php echo $this->Form->button('Save', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'profilebtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
                                        </div>
                                   <?php echo $this->Form->end(); ?>
                                   <div class="clearfix"></div>  
                    
            </div>
        </div>
    
</section>
<script type="text/javascript">
    $(document).ready(function(){
      var count = 1;
    $('.educationdiv  a:first').removeClass('delete');

      $('.educationdiv').on('click','.delete',function() {
          $(this).parent().parent().remove();
          count=--count
           return false;
      });
     $("#addquali").click(function () {
        
        count=++count
        document.getElementById("totalcount").value = count;

        var x = $('.educationdiv').first().clone(); //id-selector to be used also clone it
        x.removeAttr('id'); //since id of an element must be unique remove the id from clone
        x.find(":input").val('');
        $('#singleFieldTags2').attr('id', 'other_amount_'+count);
       
        $(x).insertAfter($('#educationdetails').last());

    });

     $(function(){
            var sampleTags = ['c++'];
            
            $('.singleFieldTags').tagit({
                      availableTags: sampleTags,
                      allowSpaces: true
            });

           
            
        });
});
   

</script>