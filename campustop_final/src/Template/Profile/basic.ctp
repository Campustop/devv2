

<?php


if(!isset($profile->email_flag))
{
    $profile->email_flag = "";
}
if(!isset($profile->gender))
{
    $profile->gender = "";
}
if(!isset($profile->gender))
{
    $profile->gender = "";
}
if(!isset($profile->contact_number))
{
    $profile->contact_number = "";
}
if(!isset($profile->zipcode_flag))
{
    $profile->zipcode_flag = "";
}
if(!isset($profile->zipcode))
{
   $profile->zipcode = "";
}
if(!isset($profile->profile_pic))
{
   $profile->profile_pic = "";
}
if(!isset($profile->gender_flag))
{
   $profile->gender_flag = "";
}
if(!isset($profile->contact_flag))
{
   $profile->contact_flag = "";
}
if(!isset($profile->country_flag))
{
   $profile->country_flag = "";
}
if(!isset($profile->province_flag))
{
   $profile->province_flag = "";
}
if(!isset($profile->city_flag))
{
   $profile->city_flag = "";
}
if(!isset($profile->timezone_flag))
{
   $profile->timezone_flag = "";
}
if(!isset($profile->timezone))
{
   $profile->timezone= "";
}
?>
      <section id="contact-us" class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 contact-info">
                            
                        </div>
                    </div>
                    <hr class="pad-10">
                    <div class="row">
                        <div class="col-md-5" style="">
                         <?= $this->Flash->render('positive') ?>
                          <?= $this->Flash->render('update') ?>
                            <p class="form-message" style="display: none;"></p>
                            <div class="contact-form">
                                <!-- Form Begins -->

                                <?= $this->Form->create($profile,['action' => 'add','id' => 'profilebasic']) ?>
                                <?php
                              // print_r($user['country_id']);
                              //// echo "dfdfdfdf";
                                //die;
                                ?>
                                        <!-- Field 1 -->
                                        <div class="input-text form-group">
                                            <input type="text" name="fname" class="input-name form-control"  placeholder="first Name" value="<?php if(($user->fname)!="") { echo $user->fname;} else { echo ""; } ?>" />
                                        </div>
                                        <!-- Field 2 -->
                                       <div class="input-text form-group">
                                            <input type="text" name="mname" class="input-name form-control" placeholder="Middle Name" value="<?php if(($user->mname)!="") { echo $user->mname;} else { echo ""; } ?>" />
                                        </div>
                                        <!-- Field 3 -->
                                        <div class="input-email form-group">
                                            <input type="text" name="lname" class="input-phone form-control" placeholder="Last Phone" value="<?php if(($user->lname)!="") { echo $user->lname;} else { echo ""; } ?>"/>
                                        </div>
                                         <div class="input-text form-group">
                                            <input type="email" name="username" class="input-email form-control" placeholder="Email" value="<?php if(($user->username)!="") { echo $user->username;} else { echo ""; } ?>"/>&nbsp; <select class="selectpicker" data-style="btn-primary" style="margin-left: 0%;
    margin-top: 1%;"  name="email_flag">              
                                            <option data-icon="glyphicon glyphicon-globe" value="1" <?php if(($profile->email_flag) == 1) { echo 'selected="selected"' ;} ?>></option>
                                            <option data-icon="glyphicon glyphicon-user" value="0"<?php if(($profile->email_flag) == 0) { echo 'selected="selected"' ;} ?>></option>
                                                </select>

                                       
                                        </div>

                                         <div class="input-text form-group">
                                         Gender
                                           <input type="radio" name="gender" value="M"  <?php if($profile->gender!="") 
                                           {

                                            if(($profile->gender) == 'M') { echo 'checked="checked"' ;} 

                                            }?>> Male
                                            <input type="radio" name="gender" value="F" <?php if($profile->gender!="") 
                                           { if(($profile->gender) == 'F') { echo 'checked="checked"' ;}  }?>> Female
                                            &nbsp;<select class="selectpicker" data-style="btn-primary"  name="gender_flag">              
                                            <option data-icon="glyphicon glyphicon-globe" value="1" <?php if(($profile->gender_flag) == 1) { echo 'selected="selected"' ;} ?>></option>
                                            <option data-icon="glyphicon glyphicon-user" value="0" <?php if(($profile->gender_flag) == 0) { echo 'selected="selected"' ;} ?>></option>
                                                </select>

                                        <!--<select name="gender_flag" required="required" >
                                        <option value="1" <?php if(($profile->gender_flag) == 1) { echo 'selected="selected"' ;} ?>>public</option>
                                         <option value="0" <?php if(($profile->gender_flag) == 0) { echo 'selected="selected"' ;} ?>>private</option>
                                         </select>-->
                                        </div>
                                        <!-- Field 4 -->
                                        <!--<div class="textarea-message form-group">
                                            <textarea name="contact_number" class="textarea-message hight-82 form-control" placeholder="Contact No. Eg. +19876543210" rows="2" ></textarea>
                                        </div>-->
                                         <div class="input-text form-group">
                                            <input type="text" required="required" name="contact_number" class="input-phone form-control" placeholder="Contact No. Eg. +19876543210" value="<?php if(($profile->contact_number)!="") { echo $profile->contact_number;} else { echo ""; } ?>" />&nbsp;<select class="selectpicker" data-style="btn-primary"name="contact_flag">              
                                            <option data-icon="glyphicon glyphicon-globe" value="1" <?php if(($profile->contact_flag) == 1) { echo 'selected="selected"' ;} ?>></option>
                                            <option data-icon="glyphicon glyphicon-user" value="0"<?php if(($profile->contact_flag) == 0) { echo 'selected="selected"' ;} ?>></option>
                                                </select>
                                                <!--<select name="contact_flag" >
                                         <option value="" style="background-image:url('http://localhost/cakephp3/webroot/img/globe.jpg'); " ></option>
                                         <option value="1" <?php if(($profile->contact_flag) == 1) { echo 'selected="selected"' ;} ?>>public</option>
                                         <option value="0" <?php if(($profile->contact_flag) == 0) { echo 'selected="selected"' ;} ?>>private</option>
                                         
                                        </select>-->
                                        </div>

                                        <div class="input-email form-group">
                                            <?php 
                                            //pr($user);
                                            //echo "dfdff";
                                           // die;
                                            echo $this->Form->select('country_id',$country, array('id'=>'stateclass','class'=>'form-control','empty' => 'choose country','required' =>'required'));?>
                                            &nbsp;<select class="selectpicker" data-style="btn-primary"name="country_flag">              
                                            <option data-icon="glyphicon glyphicon-globe" value="1" <?php if(($profile->country_flag) == 1) { echo 'selected="selected"' ;} ?>></option>
                                            <option data-icon="glyphicon glyphicon-user" value="0"<?php if(($profile->country_flag) == 0) { echo 'selected="selected"' ;} ?>></option>
                                                </select>
                                                <!--<select name="country_flag"  >
                                         <option value="" style="background-image:url('http://localhost/cakephp3/webroot/img/globe.jpg'); " ></option>
                                         <option value="1" <?php if(($profile->country_flag) == 1) { echo 'selected="selected"' ;} ?>>public</option>
                                         <option value="0" <?php if(($profile->country_flag) == 0) { echo 'selected="selected"' ;} ?>>private</option>
                                         
                                        </select>-->

                                                    </div>

                                        <div class="input-email form-group">
                                        <!--<select name="province_id" required="required" id="bindstate" class="form-control">
                                         <option value=""><?php echo "choose province"; ?></option>
                                        </select>-->
                                        <?php echo $this->Form->select('province_id', $province, array('id'=>'bindstate','class'=>'form-control','empty' => 'choose province','required' =>'required'));?>&nbsp;<select class="selectpicker" data-style="btn-primary"name="province_flag">              
                                            <option data-icon="glyphicon glyphicon-globe" value="1" <?php if(($profile->province_flag) == 1) { echo 'selected="selected"' ;} ?>></option>
                                            <option data-icon="glyphicon glyphicon-user" value="0"<?php if(($profile->province_flag) == 0) { echo 'selected="selected"' ;} ?>></option>
                                                </select>
                                                <!--<select name="province_flag" required="required" >
                                         <option value="" style="background-image:url('http://localhost/cakephp3/webroot/img/globe.jpg'); " ></option>
                                         <option value="1" <?php if(($profile->province_flag) == 1) { echo 'selected="selected"' ;} ?>>public</option>
                                         <option value="0" <?php if(($profile->province_flag) == 0) { echo 'selected="selected"' ;} ?>>private</option>
                                         
                                        </select>-->
                                         </div>

                                         <div class="input-email form-group">
                                        <!--<select name="city_id" required="required" id="bindcity" class="form-control">
                                         <option value=""><?php echo "choose city"; ?></option>
                                        </select>-->
                                        <?php echo $this->Form->select('city_id', $city, array('id'=>'bindcity','class'=>'form-control','empty' => 'choose city','required' =>'required'));?>
                                        &nbsp;<select class="selectpicker" data-style="btn-primary"name="city_flag">              
                                            <option data-icon="glyphicon glyphicon-globe" value="1" <?php if(($profile->city_flag) == 1) { echo 'selected="selected"' ;} ?>></option>
                                            <option data-icon="glyphicon glyphicon-user" value="0"<?php if(($profile->city_flag) == 0) { echo 'selected="selected"' ;} ?>></option>
                                                </select>
                                                <!--<select name="city_flag">
                                         <option value="" style="background-image:url('http://localhost/cakephp3/webroot/img/globe.jpg'); " ></option>
                                         <option value="1" <?php if(($profile->city_flag) == 1) { echo 'selected="selected"' ;} ?>>public</option>
                                         <option value="0" <?php if(($profile->city_flag) == 0) { echo 'selected="selected"' ;} ?>>private</option>
                                         
                                        </select>-->
                                         </div>

                                         <div class="input-email form-group">
                                        <select name="timezone" required="required"  class="form-control">
                                         <option value=""><?php echo "choose timezone"; ?></option>
                                         <option value="UTC+05:30 (IST)" <?php if(($profile->timezone) == "UTC+05:30 (IST)") { echo 'selected="selected"' ;} ?>>UTC+05:30 (IST)</option>
                                         <option value="UTC−08:00 (PST)" <?php if(($profile->timezone) == "UTC−08:00 (PST)") { echo 'selected="selected"' ;} ?>>UTC−08:00 (PST)</option>
                                         <option value="UTC−07:00 (MST)" <?php if(($profile->timezone) == "UTC−07:00 (MST)") { echo 'selected="selected"' ;} ?>>UTC−07:00 (MST)</option>
                                         <option value="UTC−06:00 (CST)"  <?php if(($profile->timezone) == "UTC−06:00 (CST)") { echo 'selected="selected"' ;} ?>>UTC−06:00 (CST)</option>
                              
                                        </select>&nbsp;<select class="selectpicker" data-style="btn-primary"name="timezone_flag">              
                                            <option data-icon="glyphicon glyphicon-globe" value="1" <?php if(($profile->timezone_flag) == 1) { echo 'selected="selected"' ;} ?>></option>
                                            <option data-icon="glyphicon glyphicon-user" value="0"<?php if(($profile->timezone_flag) == 0) { echo 'selected="selected"' ;} ?>></option>
                                                </select>
                                                <!--<select name="timezone_flag"  >
                                         <option value="" style="background-image:url('http://localhost/cakephp3/webroot/img/globe.jpg'); " ></option>
                                         <option value="1" <?php if(($profile->timezone_flag) == 1) { echo 'selected="selected"' ;} ?>>public</option>
                                         <option value="0" <?php if(($profile->timezone_flag) == 0) { echo 'selected="selected"' ;} ?>>private</option>
                                         
                                        </select>-->
                                         </div>

                                            

                                        <div class="input-text form-group">
                                            <input type="text" name="zipcode" required="required" class="input-zipcode form-control" placeholder="Zipcode" value="<?php if(($profile->zipcode)!="") { echo $profile->zipcode;} else { echo ""; } ?>" />&nbsp;<select class="selectpicker" data-style="btn-primary"name="zipcode_flag">              
                                            <option data-icon="glyphicon glyphicon-globe" value="1" <?php if(($profile->zipcode_flag) == 1) { echo 'selected="selected"' ;} ?>></option>
                                            <option data-icon="glyphicon glyphicon-user" value="0"<?php if(($profile->zipcode_flag) == 0) { echo 'selected="selected"' ;} ?>></option>
                                                </select>
                                                <!--<select name="zipcode_flag" required="required" >
                                         <option value="" style="background-image:url('http://localhost/cakephp3/webroot/img/globe.jpg'); " ></option>
                                         <option value="1" <?php if(($profile->zipcode_flag) == 1) { echo 'selected="selected"' ;} ?>>public</option>
                                         <option value="0" <?php if(($profile->zipcode_flag) == 0) { echo 'selected="selected"' ;} ?>>private</option>
                                         
                                        </select>-->
                                        </div>
                                        <!-- Button -->
                                       

                                        <div>
                                                    <?php echo $this->Form->button('Save', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'profilebtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
                                                </div>
                               <?php echo $this->Form->end(); ?>
                                <!-- Form Ends -->
                            </div>
                        </div>                      
                        <div class="col-md-7">
                     <?= $this->Form->create($profile,['action'=>'profilepic','enctype' => 'multipart/form-data','file' => true]) ?>
                            <div class="col-md-6 col-md-offset-3">
                           
                            
                            <h2 class="" style="font-family:'Lato';" >Your Photo</h2>
                             <div class="input-text form-group">

                             <?php 
				if($profile->profile_pic !="")
                             {

				?>
                            <img src="<?=SITEURL; ?>webroot/img/uploads/profilepic/<?=$profile->profile_pic ?>" width="100%" height="41%">
                            <?php
				}
                            else
                                {
				?>
                            <img src="<?=SITEURL; ?>webroot/img/profile_image.jpg" width="100%" height="41%">

                            <?php
                                 }
                            ?>
                            </div>
                            <div id="attach_box" style="display:none;margin-left: 25%;">
                            <div class="input-text form-group">
                            <?php echo $this->Form->input('profile_pic', array('type' => 'file','label' => false,'required' => 'required')); ?>
                            </div>
                             <div >
                                <?php echo $this->Form->button('Upload Image', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'profilepicbtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
                                                </div>
                                                </div>
                                <div id="edit" class="myButton hvr-grow" style="margin-left:46%;font-size:16px;"><b>EDIT</b>
                                                </div>
                            </div>
                            <?php echo $this->Form->end(); ?>
                        </div><!-- map -->
                </div>
            </section><!-- page-section -->
