
<style type="text/css">
.nav-tabs>li {

   border-left: 1px solid #ddd;
        font-size: 19px;
        
}  

  .nav-tabs {
    
    background-color: #F8F8F8;
}
.form-control {
    display: inline-table;
        width: 79%;

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
select#email_flag option[value="null"]   
{ 

    background-image:url("http://localhost/cakephp3/webroot/img/globe.jpg"); 
      background-repeat: no-repeat;
}

input[type="text"].error, input[type="file"].error, input[type="password"].error,input[type="checkbox"].error textarea.error, select.error {
 border:1px solid #F00!important;
}

label.error {
 color:#ff0000!important;
}
.educationdiv
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
                    <div class="col-md-5" style="">
                        <p class="form-message" style="display: none;"></p>
                            <div class="contact-form" id="education1">
                                    <?= $this->Flash->render('positive') ?>
                                        <?= $this->Form->create('User', ['id'=>'educationform','controller' => 'profile','action' => 'education']); ?>
                                        <div id="educationdetails">
                                        <?php if(count($education)>0)
                                              {?>
                                                    <?php foreach ($education as $list): ?>
                                                                <div id="test2" class="educationdiv">
                                                                        <div style="float: left;" class="form-group"> 
                                                                               <select name="education_flag[]"  style="float:right" class="selectpicker">
                                                                                     <option data-icon="glyphicon glyphicon-globe" value="1" <?php if($list['education_flag']==1){ echo 'selected="selected"' ;} ?>></option>
                                                                                     <option data-icon="glyphicon glyphicon-user" value="0" <?php if($list['education_flag']==0){ echo 'selected="selected"' ;} ?>></option>     
                                                                                </select>
                                                                            
                                                                        </div>
                                                                            <div class="form-group">
                                                                                <?php echo $this->Form->select('degree_id[]', $degree, array('class'=>'input-email form-control','empty' => 'Degree','value'=>$list['major_id']));?>
                                                                                 <input type="hidden" name="user_education_id[]" value="<?php echo $list['user_education_id']?>">
                                                                            </div>
                                                                           
                                                                            <div class="form-group">
                                                                               <?php echo $this->Form->select('program_id[]', $program, array('class'=>'input-email form-control','empty' => 'Program/Major','value'=>$list['program_id']));?>
                                                                            </div>
                                                                           
                                                                            <div class="form-group">
                                                                               <input type="text" id="singleFieldTags" name="course_name[]" class="singleFieldTags2 input-email form-control " placeholder="Course" style="" value="<?=$list['course_name']?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                               <?php echo $this->Form->select('university_id[]', $univercity, array('class'=>'input-email form-control','empty' => 'University','value'=>$list['university_id']));
                                                                               ?>
                                                                            </div>
                                                                            <div class="form-group">
                                                                               <?php echo $this->Form->select('collage_id[]', $collage, array('class'=>'input-email form-control','empty' => 'Collage','value'=>$list['collage_id']));
                                                                               ?>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div>
                                                                                 <span style="font-size:14px;padding-right:4%">Batch</span>
                                                                                        <select id="starting_year" name="starting_year[]" class="input-email form-control" style="width:33%">
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
                                                                                
                                                                                         <select id="ending_year" name="ending_year[]" class="input-email form-control" style="width:33%" >
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
                                                                            </div>
                                                                           
                                                            </div>
                                                    <?php endforeach; ?>
                                              <?php   }
                                              else  {?>
                                                        <div id="test1" class="educationdiv">
                                                                           <div  style="float: left;" class="form-group"> 
                                                                               <select name="education_flag"  required="required" style="float:right" class="selectpicker">
                                                                                     <option value="1">public</option>
                                                                                     <option value="0" >private</option>     
                                                                                </select>
                                                                            
                                                                        </div>
                                                                            <div class="form-group">
                                                                                <?php echo $this->Form->select('degree_id[]', $degree, array('class'=>'input-email form-control','empty' => 'Degree'));?>
                                                                                 <input type="hidden" name="user_education_id[]" value="">
                                                                            </div>
                                                                           
                                                                            <div class="form-group">
                                                                               <?php echo $this->Form->select('program_id[]', $program, array('class'=>'input-email form-control','empty' => 'Program/Major'));?>
                                                                            </div>
                                                                           
                                                                            <div class="form-group">
                                                                               <input type="text" id="singleFieldTags" name="course_name[]" class="input-email form-control " placeholder="Course" style="">
                                                                            </div>
                                                                            <div class="form-group">
                                                                               <?php echo $this->Form->select('university_id[]', $univercity, array('class'=>'input-email form-control','empty' => 'University'));
                                                                               ?>
                                                                            </div>
                                                                            <div class="form-group">
                                                                               <?php echo $this->Form->select('collage_id[]', $collage, array('class'=>'input-email form-control','empty' => 'Collage'));
                                                                               ?>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div>
                                                                                 <span style="font-size:14px;padding-right:4%">Batch</span>
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
                                    <div class="clearfix"></div>           <!-- Form Ends -->
                    </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
      var count = 1;


     $("#addquali").click(function () {

        count=++count
        document.getElementById("totalcount").value = count;
        var x = $('.educationdiv').clone(); //id-selector to be used also clone it
        x.removeAttr('id'); //since id of an element must be unique remove the id from clone
        x.find(":input").val('');
        $('#singleFieldTags2').attr('id', 'other_amount_'+count);
        $("#educationdetails").find("input:text").val('').end().append(x);
        //or x.appendTo('#parentCalculation');

        

    });

     $(function(){
            var sampleTags = ['c++'];
            
            $('.singleFieldTags2').tagit({
                      availableTags: sampleTags,
                      allowSpaces: true
            });

           
            
        });
});
   

</script>