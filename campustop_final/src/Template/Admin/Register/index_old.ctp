<?php //pr($country);die;?>
<script type="text/javascript">

   $(document).ready(function() 
    {
        $("#register").validate({
              
                submitHandler: function(form) {
                    form.submit();
                }
            });
        $("#registerbtn").click(function(){

            $("#register").validate({
              
                submitHandler: function(form) {
                    form.submit();
                }
            });

        });
       });
    

</script>
<style type="text/css" >
input[type="text"].error, input[type="file"].error, input[type="password"].error,input[type="checkbox"].error textarea.error, select.error {
    border:1px solid #F00!important;
}
label.error {
    color:#ff0000!important;
    font-size:10px;
}
.hvr-grow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}
.hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

</style>
<!-- team -->
        <section id="" class="page-section light-bg">
            <div class="image-bg content-in fixed">
            </div>
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12 icons-circle icons-bg-color fa-1x">
                    
                            <h2 class="section-title white">Stay on top of all your campustop activities</h2>
                        </div>
                    </div>
                </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title text-center" style="color:#FF9900">Create Your Account now </h1>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="content col-sm-8 col-md-8">
                        <?= $this->Form->create($register,['name'=>'register','id'=>'register']) ?>
                            
                           
                            <?= $this->Flash->render('positive') ?>
                          

                        
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a  aria-controls="student" role="tab" data-toggle="tab" onclick="showdetails(1)">Student</a>
                                </li>
                                <li role="presentation">
                                    <a  aria-controls="professor" role="tab" data-toggle="tab" onclick="showdetails(2)">Professor</a>
                                </li>
                              
                            </ul>
                            <!-- Tab panes -->
                           
                                <div class="active" id="student" style="padding-top:20px">
                                
                                    <div class="row" role="form">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control required" id="firstname" name="reg_fname" placeholder="First Name *" />
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control required" id="middlename" name="reg_mname" placeholder="Middle Name *" />
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control required" id="lastname" name="reg_lname" placeholder="Last Name *" />
                                        </div>
                                    </div>
                                    <div class="row" role="form">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control required email" id="reg_email" name="username" placeholder="Email Id *" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control required email" id="reg_remail" name="reg_remail" equalTo='#reg_email' placeholder="Re-enter Email Id *" />
                                        </div>
                                    </div>
                                    <div class="row" role="form">
                                        <div class="col-md-6">
                                            <input type="password" class="form-control required demo-2" id="password" name="password" minlength="6" placeholder="Password*" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control required" id="cpwd" name="reg_cpwd" minlength="6" equalTo='#password' placeholder="Confirm Password *" />
                                        </div>
                                    </div>
                                    <div class="row" role="form">
                                        <div class="col-md-6">
                                       
                                        <?php echo $this->Form->select('country', $country, array('class'=>'form-control required','empty' => '(choose one)'));?>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" class="form-control" id="role" name="role" value="student"/>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div id="professor" style="display:none" >
                                
                                     <div class="row" role="form">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control required" id="firstname" name="reg_fname1" placeholder="First Name 1*" />
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control required" id="middlename" name="reg_mname1" placeholder="Middle Name 1*" />
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control required" id="lastname" name="reg_lname1" placeholder="Last Name *" />
                                        </div>
                                    </div>
                                    <div class="row" role="form">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control required email" id="reg_email1" name="username1" placeholder="Email Id *" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control required email" id="reg_remail" name="reg_remail1" equalTo='#reg_email1' placeholder="Re-enter Email Id *" />
                                        </div>
                                    </div>
                                    <div class="row" role="form">
                                        <div class="col-md-6">
                                            <input type="password" class="form-control required demo-2" id="password1" name="password1" minlength="6" placeholder="Password*" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control required" id="cpwd" name="reg_cpwd1" minlength="6" equalTo='#password1' placeholder="Confirm Password *" />
                                        </div>
                                    </div>
                                    <div class="row" role="form">
                                        <div class="col-md-6">

                                            <?php echo $this->Form->select('country1', $country, array('class'=>'form-control required','empty' => '(choose one)'));?>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" class="form-control" id="role" name="role1" value="professor"/>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row" role="form">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="optradio"  name="optradio" class="required" value="1" />
                                           I agree to all terms and conditions
                                        </div>
                                </div>
                                <div class="row" role="form">
                                  <div class="col-md-6">
                                            <input type="checkbox" id="news"  name="news" />
                                            Sign me Up for the newsletter 
                                        </div>
                                </div>
                                <div class="row" role="form">
                                    
                                         <?php echo $this->Form->button('Send Now', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'registerbtn'));?>
                                    
                                </div>
                            <?php echo $this->Form->end(); 
                        ?> 
                    </div>
                    <!-- .content -->
                     <!-- .content -->
                    <div class="col-sm-1 col-md-1 b1">
                        <img class="img-responsive " src="<?=SITEURL; ?>webroot/img/or-img.png" alt="">
                    </div>
                    <div class="col-sm-1 col-md-3">
                        <img class="" src="<?=SITEURL; ?>webroot/img/facebook.jpg" alt="" >
                        <img class="" src="<?=SITEURL; ?>webroot/img/google.jpg" alt="">
                        <img class="" src="<?=SITEURL; ?>webroot/img/linkedin.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
<script>
$(document).ready(function(){
    
   <script>

$(function(){

   $('#password').bootstrapStrength({slimBar:true});

});

</script>

  


</script>
<script type="text/javascript">
if($(window).width() < "1224")
{
   $(".img-responsive").remove();
   $("p").css("padding-top","10%");
   
}
function checkterms()
    {
        
        if(document.getElementById('optradio').checked!=false)
        {
            
            $("#confirmMessage").hide();
        }
        else
        {
            
            $("#confirmMessage").show();
        }
    }
    function showdetails(value)
    {
        
        if(value==1)
        {
            
            $("#student").show();
           
            //$("#student").fadeIn();
            $("#professor").hide();
            $('#professor input').val('');
            $('#professor').find('input[type=checkbox]:checked').remove();
        }
        else
        {
            $("#student").hide();
           // $("#professor").fadeIn();
           $("#professor").show();
            $("#professor").css({"padding-top": "20px"});
            $('#student input').val('');
            $('#student').find('input[type=checkbox]:checked').remove();
        }
    }
</script>