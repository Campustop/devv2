       <section id="contact-us" class="page-section">
                                        <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 contact-info">
                                            
                                        </div>
                                    </div>
                                    <hr class="pad-10">
                                    <div class="row">
                                        <div class="col-md-5" style="">
                                            <p class="form-message" style="display: none;"></p>
                                                <div class="contact-form">
                                                    <?= $this->Flash->render('positive') ?>
                                                    <?php  //$this->Form->create($profile,array('controller' => 'Profile','action' => 'addhardskill')) ?>
                                                     <form id="hardskillform" method="post" action="Profile/addhardskill">
                                                        <div>
                                                            <div style="padding-bottom:2%"> 
                                                                     <span style="font-size: 16px; color:#555; font-weight: bold">Hard Skills</span>
                                                               
                                                                    <select name="hard_skill_flag" required="required" style="float:right">
                                                                         <option value="1" ata-icon="glyphicon glyphicon-globe" <?php if($skill['hard_skill_flag']==1){ echo "selected";}?>>public</option>
                                                                         <option value="0" data-icon="glyphicon glyphicon-user" <?php if($skill['hard_skill_flag']==0){ echo "selected";}?>>private</option>     
                                                                    </select>
                                                                
                                                            </div>
                                                            <div style="padding-bottom:2%">
                                                                <span style="font-size: 14px; color:#555">Add hard Skill</span>
                                                                <?php echo $this->Form->hidden('created_dt', ['value'=>time()]); ?>
                                                            </div>
                                                            <div class="input-text form-group">

                                                                <input type="text"  class="input-text form-control" name="hskill" id="hskill" value="<?php $skill['hard_skill']?>">
                                                                 <?php echo $this->Form->button('Add', array('type' => 'button','class'=>'myButton hvr-grow','id'=>'btn1','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
                                                            </div>
                                                        </div>
                                                        <div>
                                                                <div class="input-text form-group">
                                                                    <input type="text" id="singleFieldTags3" name="hardskill" value="<?php echo $skill['hard_skill']?>" class="input-text form-control" readonly>
                                                                </div>
                                                                <div class="input-text form-group">
                                                                    <?php echo $this->Form->button('Save', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'profilebtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
                                                                </div>
                                                        </div>
                                                    <?php echo $this->Form->end(); ?>
                                                </div>
                                                <div class="contact-form"  style="padding-top:2%">
                                                    <?= $this->Flash->render('positive') ?>
                                                       <?php //$this->Form->create($skill,array('controller' => 'Profile','action' => 'addinterest')) ?>
                                                        <!-- Field 1 -->
                                                        <form id="interestform" method="post" action="Profile/addinterest">
                                                        <div>
                                                              <div style="padding-bottom:2%"> 
                                                                <span style="font-size: 16px; color:#555; font-weight: bold">Interests</span>
                                                                <select name="interest_flag" required="required" style="float:right">
                                                                          <option value="1" <?php if($skill['interest_flag']==1){ echo "selected";}?>>public</option>
                                                                         <option value="0" <?php if($skill['interest_flag']==0){ echo "selected";}?>>private</option>   
                                                                    </select>
                                                            </div>
                                                            <div style="padding-bottom:2%">
                                                                <span style="font-size: 14px; color:#555">Add interest</span>
                                                            </div>
                                                            <div class="input-text form-group">

                                                                <input type="text"  class="input-text form-control" name="ainterest" id="ainterest" >
                                                                 <?php echo $this->Form->button('Add', array('type' => 'button','class'=>'myButton hvr-grow','id'=>'btn3','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
                                                            </div>
                                                        </div>
                                                        <div>
                                                                  <input type="text" id="singleFieldTags5" name="interest" class="input-email form-control" value="<?php echo $skill['interest']?>" readonly >
                                                                <div class="input-text form-group">
                                                                    <?php echo $this->Form->button('Save', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'profilebtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
                                                                </div>
                                                        </div>
                                                    <?php echo $this->Form->end(); ?>
                                                 
                                                </div>
                                        </div> 
                                         <div class="col-md-1">
                                         </div>                     
                                        <div class="col-md-5">
                                            <div class="contact-form">
                                                <?= $this->Flash->render('positive') ?>
                                                         <?php // $this->Form->create('soft',['controller' => 'Profile','action' => 'addsoftskill']) ?>
                                                       <form id="softskillform" method="post" action="Profile/addsoftskill">
                                                            <div>
                                                                 <div style="padding-bottom:2%"> 
                                                                <span style="font-size: 16px; color:#555; font-weight: bold">Soft Skills</span>
                                                                <select name="soft_skill_flag" required="required" style="float:right">
                                                                    <?php echo $skill['soft_skill'];?>
                                                                         <option value="1" <?php if($skill['soft_skill_flag']==1){ echo "selected";}?>>public</option>
                                                                         <option value="0" <?php if($skill['soft_skill_flag']==0){ echo "selected";}?>>private</option>     
                                                                </select>
                                                            </div>
                                                            <div style="padding-bottom:2%">
                                                                <span style="font-size: 14px; color:#555">Add soft Skill</span>
                                                            </div>
                                                            <div class="input-text form-group">

                                                                <input type="text"  class="input-text form-control" name="sskill" id="sskill" >
                                                                     <?php echo $this->Form->button('Add', array('type' =>'button','class'=>'myButton hvr-grow','id'=>'btn2','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                    <div class="input-text form-group">
                                                                        <input type="text" id="singleFieldTags4" value="<?php echo $skill['soft_skill']?>" name="softskill" class="input-email form-control" readonly>
                                                                    </div>
                                                                    <div class="input-text form-group">
                                                                        <?php echo $this->Form->button('Save', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'profilebtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
                                                                    </div>
                                                            </div>
                                                        <?php echo $this->Form->end(); ?>
                                            </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>    
                                </section>
<script type="text/javascript">
  $(document).ready(function() {   
     $(function(){
            var tag = [];
             $('#singleFieldTags3').tagit({
                 availableTags: tag,
             });
              
               
         });  
            $("#btn1").click(function(){
                var sampleTags = [];
                var tagStrArr = $('#hskill').val();
                sampleTags.push(tagStrArr);
               $.each( sampleTags, function( key, single_tag ) {
                   $('#singleFieldTags3').tagit('createTag', single_tag);
               });
            });



      $(function(){
            var sampleTags = ['c++'];
            
            $('#singleFieldTags4').tagit({
               allowSpaces: true
            });
         });
        $("#btn2").click(function(){
                var sampleTags = [];
                var tagStrArr = $('#sskill').val();
                sampleTags.push(tagStrArr);
               
               $.each( sampleTags, function( key, single_tag ) {
                   $('#singleFieldTags4').tagit('createTag', single_tag);
               });
            });

      $(function(){
            var sampleTags = ['c++'];
            
            $('#singleFieldTags5').tagit({
               allowSpaces: true
            });
         });
        $("#btn3").click(function(){
                var sampleTags = [];
                var tagStrArr = $('#ainterest').val();
                sampleTags.push(tagStrArr);
               
               $.each( sampleTags, function( key, single_tag ) {
                   $('#singleFieldTags5').tagit('createTag', single_tag);
               });
            });

 });
</script>