<script type="text/javascript">

   $(document).ready(function() 
{
    //alert("dfdfdf");
            //form validation rules
            $("#contactbutton").click(function(){

            $("#contactform").validate({
                rules: {
                    contact_name: "required",
                    contact_email: {
                        required: true,
                        email: true
                    },
                     contact_collage: "required",
                      contact_phone: "required",
                       contact_message: "required"
                    
 
                },
                messages: {
                   // contact_name: "Please enter your name.",
                   // email: "Please enter a valid email address.",
                    //contact_collage: "Please enter your name.",
                    //contact_phone: "Please enter your phone.",
                   // contact_message: "Please enter message."
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

        });
       });
    

</script>

<!-- team -->
        <section id="" class="page-section light-bg">
            <div class="image-bg content-in fixed">
                
            </div>
            
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12 icons-circle icons-bg-color fa-1x">
                            <h2 class="section-title white">Contact Us</h2>
                            <!-- Icon -->
                            
                            
                        </div>
                    </div>
                </div>
            
        </section>
 <!-- page-header -->
            <section id="contact-us" class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 contact-info">
                            
                        </div>
                    </div>
                    <p class="contact-text" style="color:#707070">We value your feedbacks - Especially criticism</p>
                    <!--<hr class="pad-10"> -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="form-message" style="display: none;">
                                
                            </p>
                            <div class="contact-form">
                                <!-- Form Begins -->
                                <!--<form role="form" name="contactform" id="contactform" method="post" action="php/contact-form.php">-->
                                <?= $this->Form->create($contact,['name'=>'contactform','id'=>'contactform']) ?>
                                        <!-- Field 1 -->
                                        <div class="input-text form-group">
                                        <label for="name" class="col-sm-3 control-label">Name<sup>*</sup></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="contact_name" class="input-name form-control" placeholder="Full Name" />
                                            </div>
                                        </div>
                                        <!-- Field 2 -->
                                        <div class="input-email form-group">
                                        <label for="name" class="col-sm-3 control-label">Email<sup>*</sup></label>
                                         <div class="col-sm-9">
                                            <input type="email" name="contact_email" class="input-email form-control" placeholder="Email"/>
                                            </div>
                                        </div>
                                        <!-- Field 3 -->
                                        <div class="input-email form-group">
                                        <label for="name" class="col-sm-3 control-label">Collage<sup>*</sup></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="contact_collage" class="input-phone form-control" placeholder="Collage/Organization"/>
                                             </div>
                                        </div>
                                        <!-- Field 4 -->
                                        <div class="input-email form-group">
                                        <label for="name" class="col-sm-3 control-label">Contact No<sup>*</sup></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="contact_phone" class="input-phone form-control" placeholder="Contact No"/>
                                             </div>
                                        </div>
                                        <!-- Field 5 -->
                                        <div class="textarea-message form-group">
                                         <label for="name" class="col-sm-3 control-label">Name<sup>*</sup></label>
                                           <div class="col-sm-9">
                                            <textarea name="contact_message" class="textarea-message hight-82 form-control" placeholder="Message" rows="2" ></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                         <!--<button class="sample btn custom large b" type="submit">Send Now <i class="icon-paper-plane"></i></button>
                                </form>-->
                                <?php
                    echo $this->Form->button('Submit', array('type' => 'submit','class'=>'myButton hvr-grow','id'=>'contactbutton'));
                    echo $this->Form->end(); 
                    
                    ?>
                                <!-- Form Ends -->
                            </div>
                        </div>                      
                        <div class="col-md-6 ">
                           
                                <div class="contact-text"><h2 class="" style="font-family:'Lato';" >You can also give us a call</h2>
                            <div>&nbsp;&nbsp;<i class="fa fa-phone" style="color: #FF9900;"></i> Akash Agrawal: +91 9019207434</div>
                            <div>&nbsp;&nbsp;<i class="fa fa-phone" style="color: #FF9900;"></i> Dhananjay Dixit: +91 9535977989</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or email us on <a href="mailto:business@campustop.in" class="text-color">business@campustop.in</a></div>
                             <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;our team shall get back to you in a jiffy</div>
                            
                        </div><!-- map -->
                </div>
            </section><!-- page-section -->

