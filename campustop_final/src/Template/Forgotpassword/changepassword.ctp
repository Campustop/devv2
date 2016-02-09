 <style type="text/css">

#social img {
   margin-bottom:14px;
}
#newpassword {
    padding: 10px;
    margin: 0 0 10px;
}
#confirmpassword {
    padding: 10px;
    margin: 0 0 10px;
}

div.pass-container {
    height: 30px;
}

div.pass-bar {
    height: 11px;
    margin-top: 2px;
}
div.pass-hint {
    font-family: arial;
    font-size: 11px;
}

</style>
        <section id="" class="page-section light-bg">
            <div class="image-bg content-in fixed">
            </div>
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12 icons-circle icons-bg-color fa-1x">

                        </div>
                    </div>
                </div>
        </section>
        <section class="page-section">
            <div class="container">
                
                <div class="row">
                    <div class="content col-sm-8 col-md-8">
                        <?= $this->Flash->render('positive') ?>
                        <?= $this->Flash->render('negative') ?>
                        <?= $this->Flash->render('update') ?>
                            
                            <div class="career-form">
                                <div id="student" style="padding-top:20px" >
                                    
                                    <?= $this->Form->create($changepassword,['name'=>'changepassword','id'=>'changepassword']) ?>
                                                <div class="row" role="form">
                                                    <div class="col-md-6 input-email form-  group">
                                                    <label class="sr-only">Password</label> 
                                                    <input type="password" required class="form-control" id="password" name="password" placeholder="Password" /></div>
                                                    <div class="col-md-6 input-email form-group">
                                                    <label class="sr-only">Confirm Password</label> 
                                                    <input type="password" required class="form-control" id="reg_cpwd" name="reg_cpwd" placeholder="Confirm Password " /></div>
                                                </div>
                                                <div class="row" role="form">
                                                    <?php echo $this->Form->button('Change Password', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'changepasswordbtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px')); ?>
                                                </div>
                                    <?php echo $this->Form->end(); ?> 
                            </div>
                        </div>  
                    </div>
                    <div class="col-sm-1 col-md-1 b1">
                            <img class="img-responsive " src="<?=SITEURL; ?>webroot/img/or-img.png" alt="" style="margin-top:68%">
                    </div>
                    <div class="col-sm-1 col-md-3">
                        <div id="social" style="margin-top:114px">
                            <img class="" src="<?=SITEURL; ?>webroot/img/facebook.jpg" alt="" >
                            <img class="" src="<?=SITEURL; ?>webroot/img/google.jpg" alt="">
                            <img class="" src="<?=SITEURL; ?>webroot/img/linkedin.jpg" alt="">
                        </div>
                    </div>
            </div>
        </div>
        </section>
   		<!--<section id="" class="page-section light-bg">
            <div class="image-bg content-in fixed">
            </div>
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12 icons-circle icons-bg-color fa-1x">
                    		
                        </div>

                    </div>
                </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title text-left" style="color:#FF9900">Forgot Password</h1>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="content col-sm-8 col-md-8">
                        <?= $this->Flash->render('positive') ?>

                            <div class="career-form">
                            	<div id="student" style="padding-top:20px" >
                            		<?= $this->Form->create($changepassword,['name'=>'changepassword','id'=>'changepassword']) ?>
                          				   
												<p class="form-message" style="display: none;"></p>
												<div class="row" role="form">
													<div class="col-md-6 input-email form-group">
														<label class="sr-only">Enter New Password</label> 
														<input class="input-email form-control" type="password" name="newpassword" placeholder="Enter New Password" />
													</div>
                                                </div>
                                                <div class="row" role="form">
													<div class="col-md-6 input-email form-group">
														<label class="sr-only">Confirm New Password</label> 
														<input class="input-email form-control" type="password" name="confirmpassword" placeholder="Confirm New Password" />
													</div>
												</div>

                                                <div class="row" role="form">
                                                <div class="col-md-6 input-email form-group">
                                                    <?php echo $this->Form->button('Update Password', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'updatepasswordbtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px')); ?>
                                                </div>
										 		</div>
									  			<?php echo $this->Form->end(); ?> 
										</div>
						    </div>
					</div>
				</div>
        </div>
        </section>-->
   
  


</script>
<script type="text/javascript">
	$(document).ready(function () {
	     var options = {
	                onLoad: function () {
	                    $('#messages').text('Start typing password');
	                },
	                onKeyUp: function (evt) {
	                    $(evt.target).pwstrength("outputErrorList");
	                }
	            };
	            $('#password').pwstrength(options);
	       var options = {
	                onLoad: function () {
	                    $('#messages').text('Start typing password');
	                },
	                onKeyUp: function (evt) {
	                    $(evt.target).pwstrength("outputErrorList");
	                }
	            };
	            $('#password1').pwstrength(options);

	             
	});

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
          
   	 		$("#professor").find('*').removeClass('has-success has-error glyphicon-ok glyphicon-remove form-control-feedback fa fa-times');
   	 		$("#optradio").removeClass('has-success has-error glyphicon-ok glyphicon-remove');
            $("#professor").hide();
            $('#professor input').val('');
            $('#professor').find('input[type=checkbox]:checked').remove();
        }
        else
        {

            $("#student").hide();
           // $("#professor").fadeIn();
           $("#student").find('*').removeClass('has-success has-error glyphicon-ok glyphicon-remove form-control-feedback fa fa-times');
            $("#optradio").removeClass('has-success has-error glyphicon-ok glyphicon-remove');
           $("#professor").show();
            $("#professor").css({"padding-top": "20px"});
            $('#student input').val('');
            $('#student').find('input[type=checkbox]:checked').remove();
            
        }
    }
</script>