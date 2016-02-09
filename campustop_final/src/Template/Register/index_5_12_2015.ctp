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
														<input class="input-email form-control" type="email" name="username" placeholder="Email" />
													</div>
													<div class="col-md-6 input-email form-group">
														<label class="sr-only">Re-enter Email Id</label> 
														<input class="input-email form-control" type="email" name="reg_remail" placeholder="Re-enter Email Id" />
													</div>
												</div>
												
												<div class="row" role="form">
													<div class="col-md-6 input-email form-group">
													<label class="sr-only">Password</label> 
													<input type="password" class="form-control" name="password" placeholder="Password" /></div>
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
													</div>
												</div>
												<div class="row" role="form">
				                                        <div class="col-md-6 input-checkbox form-group">
				                                            <input type="checkbox" id="optradio"  name="optradio" class="required" value="1" />
				                                           I agree to all terms and conditions
				                                        </div>
					                                </div>
					                                <div class="row" role="form">
					                                  	<div class="col-md-6 input-checkbox form-group">
					                                            <input type="checkbox" id="news"  name="news" />
					                                            Sign me Up for the newsletter 
					                                    </div>
					                                </div>
												<div class="clearfix"></div>
												<div class="row" role="form">
										 			<?php echo $this->Form->button('Send Now', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'registerbtn'));?>
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
													<input type="password" class="form-control" name="password1" placeholder="Password" /></div>
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
													</div>
												</div>
												<div class="row" role="form">
				                                        <div class="col-md-6 input-checkbox form-group">
				                                            <input type="checkbox" id="optradio"  name="optradio1" class="required" value="1" />
				                                           I agree to all terms and conditions
				                                        </div>
					                                </div>
					                                <div class="row" role="form">
					                                  	<div class="col-md-6 input-checkbox form-group">
					                                            <input type="checkbox" id="news"  name="news" />
					                                            Sign me Up for the newsletter 
					                                    </div>
					                                </div>
												<div class="clearfix"></div>
												<div class="row" role="form">
										 			<?php echo $this->Form->button('Send Now', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'registerbtn1'));?>
										 		</div>
									  			<?php echo $this->Form->end(); ?> 
																
										</div>
										
										
										
						</div> 	
					</div>
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
            		
				if ( $( "#register" ).length !== 0 ) {
				$('#register').bootstrapValidator({
						container: 'tooltip',
						feedbackIcons: {
							valid: 'fa fa-check',
							warning: 'fa fa-user',
							invalid: 'fa fa-times',
							validating: 'fa fa-refresh'
						},
						fields: {
		                    firstname: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
							middlename: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
		                    lastname: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
		                    username: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            },
		                            emailAddress: {
		                                message: ''
		                            }
		                        }
		                    },
							reg_remail: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            },
		                            emailAddress: {
		                                message: ''
		                            },
		                             identical: {
													field: 'username',
													message: ''
												}
		                        }
		                    },
							password: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
							reg_cpwd: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            },
									 identical: {
													field: 'password',
													message: 'The password and its confirm are not the same'
												}
		                        }
		                    },
		                     firstname1: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
							middlename1: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
		                    lastname1: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
		                    username1: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            },
		                            emailAddress: {
		                                message: ''
		                            }
		                        }
		                    },
							reg_remail1: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            },
		                            emailAddress: {
		                                message: ''
		                            },
		                             identical: {
													field: 'username1',
													message: ''
												}
		                        }
		                    },
							password1: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
							reg_cpwd1: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            },
									 identical: {
													field: 'password1',
													message: 'The password and its confirm are not the same'
												}
		                        }
		                    },
							country: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
							optradio: {
		                        validators: {
		                            notEmpty: {
		                                message: ''
		                            }
		                        }
		                    },
							
		                    
		                }
					})	
					
					
				function resetForm($form) {

		            $form.find(
		                    'input:text, input:password, input, input:file, select, textarea'
		                )
		                .val('');

		            $form.find('input:radio, input:checkbox')
		                .removeAttr('checked')
		                .removeAttr('selected');
					$form.find('button[type=submit]')
		                .attr("disabled", "disabled");
						

		        }
			}	
        }
    }
</script>