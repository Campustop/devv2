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
                        <?= $this->Flash->render('negative') ?>
                         
                            <div class="career-form">
                            	<div id="student" style="padding-top:20px" >
                            		<?= $this->Form->create($user1,['name'=>'forgotpassword','id'=>'forgotpassword']) ?>
                          				   
												<p class="form-message" style="display: none;"></p>
												<div class="row" role="form">
													<div class="col-md-6 input-text form-group">
														<label class="sr-only">Enter Email Id</label> 
														<input class="input-email form-control"  type="email" id="forgot_email" name="forgot_email" placeholder="Enter Email Id" />
													</div>

													<div class="col-md-4 input-text form-group">
														<?php echo $this->Form->button('Submit', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'forgotpasswordbtn','style'=>'rgba(0, 0, 0, 0) url("../../select2.png") no-repeat scroll 0 1px'));?>
													</div>
												</div>
						  			<?php echo $this->Form->end(); ?>	
								</div>	
							</div> 	
						</div>
					

				</div>
        </div>
    	</section>
   
  


</script>
<!--<script type="text/javascript">
	$(document).ready(function () {
	     var options = {
	                onLoad: function () {
	                    $('#messages').text('Start typing password');
	                },
	                onKeyUp: function (evt) {
	                    $(evt.target).pwstrength("outputErrorList");
	                }
	            };
	            $('#newpassword').pwstrength(options);
	                var options = {
	                onLoad: function () {
	                    $('#messages').text('Start typing password');
	                },
	                onKeyUp: function (evt) {
	                    $(evt.target).pwstrength("outputErrorList");
	                }
	            };
	            $('#confirmpassword').pwstrength(options);
	});
</script>-->