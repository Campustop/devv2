<style type="text/css">
	#social img {
   margin-bottom:14px;
}
#password {
    padding: 10px;
   
    margin: 0 0 10px;
}
#password1 {
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
                    		<h2 class="section-title white">Stay on top of all your campustop activities</h2>
                    		 <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi facere earum quis ipsa vitae qui minima esse ducimus dolorum iste nisi laborum repella.</p>
                        </div>

                    </div>
                </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title text-center" style="color:#FF9900">Create your account now </h1>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="content col-sm-8 col-md-8">
                        <?= $this->Flash->render('positive') ?>
                          	<ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a  aria-controls="student" role="tab" data-toggle="tab" onclick="showdetails(1)">Student</a>
                                </li>
                                <li role="presentation">
                                    <a  aria-controls="professor" role="tab" data-toggle="tab" onclick="showdetails(2)">Professor</a>
                                </li>
                            </ul>
                            <div class="career-form">
                            	<div id="student" style="padding-top:20px" >
                            		<?= $this->Form->create($register,['name'=>'register','id'=>'register']) ?>
                          				   
												<p class="form-message" style="display: none;"></p>
												<div class="row" role="form">

													<div class="col-md-4 input-text form-group">
														<label class="sr-only">First Name</label> 
														<input class="input-name form-control" type="text" name="firstname" placeholder="First Name" /> 
													</div>
													<div class="col-md-4 input-text form-group">
														<label class="sr-only">Middle Name</label> 
														<input class="input-name form-control" type="text" name="middlename" placeholder="Middle Name" /> 
													</div>
													<div class="col-md-4 input-text form-group">
														<label class="sr-only">Last Name</label> 
														<input class="input-name form-control" type="text" name="lastname" placeholder="Last Name" />
													</div>
												</div>
												<div class="row" role="form">
													<div class="col-md-6 input-email form-group">
														<label class="sr-only">Email </label> 
														<input class="input-email form-control" type="email" id="username" name="username" onblur="checkmail()" placeholder="Email" />
														<span id="errormessage" style="display:none; color:#ff0000;"> This email already exists.</span> 
													</div>
													<div class="col-md-6 input-email form-group">
														<label class="sr-only">Re-enter Email Id</label> 
														<input class="input-email form-control" type="email" name="reg_remail" placeholder="Re-enter Email Id" />
													</div>
												</div>
												
												<div class="row" role="form">
													<div class="col-md-6 input-email form-group">
													<label class="sr-only">Password</label> 
													<input type="password" class="form-control" id="password" name="password" placeholder="Password" /></div>
													<div class="col-md-6 input-email form-group">
													<label class="sr-only">Confirm Password</label> 
													<input type="password" class="form-control" name="reg_cpwd" placeholder="Confirm Password " /></div>
												</div>
												<div class="row" role="form">
													<div class="col-md-6 input-email form-group">
														<label class="sr-only">Country</label> 
														<?php echo $this->Form->select('country', $country, array('class'=>'form-control','empty' => '(choose one)'));?>
													</div>
													<div class="col-md-6 input-email form-group">
													
														<input type="hidden" class="form-control" name="role" value="student" />
														<?php echo $this->Form->hidden('created_dt', ['value'=>time()]); ?>
													</div>
												</div>
												<div class="row" role="form">
				                                        <div class="col-md-6 input-checkbox form-group">
				                                            <input type="checkbox" id="optradio"  name="optradio" class="required" value="1" />
				                                           <span class="small-text">I agree to all terms and conditions</span>
				                                        </div>
					                                </div>
					                                <div class="row" role="form">
					                                  	<div class="col-md-6 input-checkbox form-group">
					                                            <input type="checkbox" id="news"  name="news" />
					                                            <span class="small-text">Sign me Up for the newsletter</span>
					                                    </div>
					                                </div>
												<div class="clearfix"></div>
												<div class="row" role="form">
										 			<?php echo $this->Form->button('Register Now', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'registerbtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
										 		</div>
									  			<?php echo $this->Form->end(); ?> 
																
										</div>
										 <div id="professor" style="display:none" >
                            				<?= $this->Form->create($register,['name'=>'registerstudent','id'=>'registerstudent']) ?>
                          				   
												<p class="form-message" style="display: none;"></p>
												<div class="row" role="form">

													<div class="col-md-4 input-text form-group">
														<label class="sr-only">First Name</label> 
														<input class="input-name form-control" type="text" name="firstname1" placeholder="First Name" /> 
													</div>
													<div class="col-md-4 input-text form-group">
														<label class="sr-only">Middle Name</label> 
														<input class="input-name form-control" type="text" name="middlename1" placeholder="Middle Name" /> 
													</div>
													<div class="col-md-4 input-text form-group">
														<label class="sr-only">Last Name</label> 
														<input class="input-name form-control" type="text" name="lastname1" placeholder="Last Name" />
													</div>
												</div>
												<div class="row" role="form">
													<div class="col-md-6 input-email form-group">
														<label class="sr-only">Email </label> 
														<input class="input-email form-control" type="email" name="username1" placeholder="Email" />
													</div>
													<div class="col-md-6 input-email form-group">
														<label class="sr-only">Re-enter Email Id</label> 
														<input class="input-email form-control" type="email" name="reg_remail1" placeholder="Re-enter Email Id" />
													</div>
												</div>
												
												<div class="row" role="form">
													<div class="col-md-6 input-email form-group">
													<label class="sr-only">Password</label> 
													<input type="password" class="form-control" id="password1" name="password1" placeholder="Password" /></div>
													<div class="col-md-6 input-email form-group">
													<label class="sr-only">Confirm Password</label> 
													<input type="password" class="form-control" name="reg_cpwd1" placeholder="Confirm Password " /></div>
												</div>
												<div class="row" role="form">
													<div class="col-md-6 input-email form-group">
														<label class="sr-only">Country</label> 
														<?php echo $this->Form->select('country1', $country, array('class'=>'form-control','empty' => '(choose one)'));?>
													</div>
													<div class="col-md-6 input-email form-group">
													
														<input type="hidden" class="form-control" name="role1" value="professor" />
														<?php echo $this->Form->hidden('created_dt', ['value'=>time()]); ?>
													</div>
												</div>
												<div class="row" role="form">
				                                        <div class="col-md-6 input-checkbox form-group">
				                                            <input type="checkbox" id="optradio"  name="optradio1" class="required" value="1" />
				                                           <span class="small-text">I agree to all terms and conditions</span>
				                                        </div>
					                                </div>
					                                <div class="row" role="form">
					                                  	<div class="col-md-6 input-checkbox form-group">
					                                            <input type="checkbox" id="news"  name="news" />
					                                           <span class="small-text"> Sign me Up for the newsletter </span>
					                                    </div>
					                                </div>
												<div class="clearfix"></div>
												<div class="row" role="form">
										 			<?php echo $this->Form->button('Register Now', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'registerbtn1','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
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
    function checkmail()
	{
		var flag=true;
		var form = $('#form1');
		var username=$('#username').val();
		alert
		if(username!='')
		{
			$.ajax({
					  type : "POST",
					  url:"<?php echo SITEURL.'register/checkmail'; ?>",
					  data : 'username='+username,
					  async:false,
					  success : function (data)
					  {
					  	alert(data);
						 if(data == 1)
						  {
							 $("#errormessage").show();
							
						
							 flag=false;	
						  }
						  else
						  {
						  		
							 $("#errormessage").hide();
							 flag=true;										  
						  }
					  }
							
				});
				
			  return flag;
		}
	
	}
</script>