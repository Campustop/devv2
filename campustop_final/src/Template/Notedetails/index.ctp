

<link href="<?= SITEURL; ?>webroot/css/rateit/rateit.css" type="text/css" rel="stylesheet">
<script src="<?= SITEURL; ?>webroot/js/rateit/jquery.rateit.js"></script>

<link rel="stylesheet" href="<?= SITEURL; ?>webroot/js/popup/popupwindow.css">
<script src="<?= SITEURL; ?>webroot/js/popup/popupwindow.js"></script>
<script src="<?= SITEURL; ?>webroot/js/popup/demo.js"></script> 
        

<script type="text/javascript">

</script>

<style>
#pop-up {
  margin-top: 65px;
}
</style>
</head>
<body>
<div id="page"> 
  <!-- Top Bar -->

  <!-- Top Bar --> 
  <!-- Sticky Navbar -->
 
  <!-- Sticky Navbar -->
  <div class="page-header">
      <div class="image-bg content-in fixed">
                
      </div>
      <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-1 icons-circle icons-bg-color fa-1x">
                              <div class="col-md-2" style="width: 12.666667%;padding-right: 0px;">
                              <?php

                                 echo $this->Form->select('programsearch', $program , array('empty' => 'All Program','id'=>'programsearch','class' => 'form-control','style'=>'background: #E5E5E5;border-radius: 0px;'));
                              ?>
                              </div>
                              <form method="post" action="../notfound">
                                  <div class="col-md-6 paddingclass">
                                      <input type="text"  name="searchtext" id="searchtext" autocomplete="off" class="form-control" onkeyup="fillonkeypress()" style="margin-bottom:0px;background: white;border-radius: 0px;"/>
                                      <div id="displaysearch"></div>
                                  </div>
                                  <div class="col-md-2" style="padding-left:0px">
                                      <input type="submit" name="submit" value="Search" class="myButton1" />
                                      <input type="hidden" name="programsearchtxt" value="" id="programsearchtxt">
                                  </div>
                              </form>
                        </div>
                        <div class="col-md-12 col-md-offset-1 icons-circle icons-bg-color fa-1x">
                             <div class="col-md-3">
                             </div>
                             <div class="col-md-4">
                               <p style="color:#FFFFFF;">Have Something to upload?<a href="<?=SITEURL; ?>note" class="myButton" />upload</a></p>
                             </div>
                             <div class="col-md-2">
                             </div>
                        </div>     
                    </div>              
             </div>
  </div>
  <!-- page-header -->
   <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 sidebar">
          <div class="img-wrapper  portfolio-grid ">
            <div class="grids">
              <div class="grid"> <img src="img/sections/portfolio/b7.jpg" alt="" class="img-responsive" width="370" height="370">
                <div class="figcaption"> 
                  <!-- Image Popup--> 
                  <a data-rel="prettyPhoto[portfolio]" href="img/sections/portfolio/b7.jpg" > <i class="icon-search text-white border-color"></i> <i class="icon-eye text-white border-color" data-toggle="tooltip" title="Views">10</i> <i class="icon-download text-white border-color" data-toggle="tooltip" title="Downloads">10</i><i class="icon-comments text-white border-color" data-toggle="tooltip" title="Comments">10</i> </a> </div>
              </div>
            </div>
          </div>
          <div data-example-id="simple-table" class="bs-example">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Category:</th>
                  <td><?php echo ucwords($note->typesofresource->resource_name)?></td>
                </tr>
                <tr>
                  <th scope="row">Rating:</th>
                  <?php

                   $avgrating=ceil($noteratedetails['rating'] / 0.5) * 0.5;
                  // echo $avgrating;
                   ?>
                  <td class="star-rating"><img src="<?= SITEURL; ?>webroot/img/rating/<?php echo $avgrating;?>.png" alt=""  /></td>
                </tr>
                <tr>4
                  <th scope="row">Author:</th>
                  <td><a href="#"><?php echo ucwords($note->user->fname.' '.$note->user->lname)?></a>
                    <button type="button" class="btn btn-default btn-sm pull-right">Follow</button></td>
                </tr>
                <tr>
                  <th scope="row">Tags:</th>
                  <td><?php echo ucwords($note->tag)?></td>
                </tr>
                <tr>
                  <th scope="row">Subject:</th>
                  <td><?php echo ucwords($note->degree->de_name)?></td>
                </tr>
                <tr>
                  <th scope="row">College:</th>
                  <td><?php echo ucwords($note->collage->collage_name) ?></td>
                </tr>
                <tr>
                  <th scope="row">File Size:</th>
                  <td>-</td>
                </tr>
                <tr>
                  <th scope="row">Upload Date:</th>
                  <td><?php echo date('d-m-Y',strtotime($note->created_dt)) ?></td>
                </tr>
                <tr>
                  <th scope="row">Resource:</th>
                  <td><?php echo ucwords($note->typesofresource->resource_name)?></td>
                </tr>
              </tbody>
            </table>
            <button type="button" class="btn btn-default btn-lg btn-block">Add To Bag</button>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h3 class="title">Have you used this Course?</h3>
            </div>
            <ul class="latest-posts clearfix shop">
              <li>
                 <div class="panel-body">
                  <div id="messagerate" class='alert alert-success' style="display:none">
                    <label>Thank you for your feedback</label>
                  </div>
                  <div id="errorratemessage" class='alert alert-warning' style="display:none">
                    <label>You already rate this note.</label>
                  </div>
                  <form id="ratingform" name="ratingform" method="post">
                      <div class="post-thumb" style="float:right;">
                        <button type="button" class="btn btn-default btn-sm btn-block" name="ratesubmit" id="ratesubmit">Submit</button>
                      </div>
                      <div class="post-details">
                        <div class="price"> Rate it now</div>
                           <div class="rateit" style="margin-top:0px;" id="rateit" onclick="countval1()"></div>
                                          <span class="spnrate">
                                          <input type="text" class="ratevalidate" name="ratestore" id="ratestore" value="" style="width:0px; border:0px!important; background:none;"/>
                                          </span> 
                                          <input type="hidden" name="user_id" value="<?php echo $userData['user_id']; ?>">
                                          <input type="hidden" name="note_id" value="<?php echo $note['note_id']; ?>" >
                                          <input type="hidden" name="created_dt" value="<?php echo time(); ?>">
                      </div>
                  </form>
              </li>
            </ul>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h3 class="title">Your feedback is valuable to us</h3>
            </div>
            <ul class="latest-posts clearfix shop"  align="center">
              <li>
                <div class="post-thumb"> <a id="open-pop-up-1" class="btn btn-default" href="#pop-up-1">Write a feedback</a></div>
              </li>
            </ul>
          </div>
         
        </div>
        <div class="col-md-8">
          <div data-animation="fadeInRight icon-3 color-icons" class="section-title text-left animated fadeInRight visible">
            <h2 class="title"><?php echo ucwords($note->name_of_resourse)?>
              <?php $noteid=md5($note->note_id);?>
              <div class="pull-right">
                <a href="https://www.facebook.com/sharer.php?u=<?php echo SITEURL;?>Notedetails/index/<?php echo $note->note_id; ?>" target="_blank"><span class="pe-so-facebook"></span> </a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo SITEURL;?>Notedetails/index/<?php echo $note->note_id; ?>&text=TEXT&via=YOURTWITTERACCOUNTNAME" target="_blank"> <span class="pe-so-twitter"></span> </a>
                <a href="https://plus.google.com/share?url={<?php echo SITEURL;?>Notedetails/index/<?php echo $note->note_id; ?>}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"><span class="pe-so-google-plus"></span> </a>
                 <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo SITEURL;?>Notedetails/index/<?php echo $note->note_id; ?>" target="_blank"> <span class="pe-so-linkedin"></span> </a></div>
            </h2>
          </div>
          <!-- <div data-animation="fadeInRight" class="col-md-12 text-right animated fadeInRight icon-3 color-icons visible"> <a href="#"> <span class="pe-so-facebook"></span> </a> <a href="#"> <span class="pe-so-twitter"></span> </a> <a href="#"> <span class="pe-so-google-plus"></span> </a> <a href="#"> <span class="pe-so-linkedin"></span> </a> </div> -->
          <div class="col-md-12">
            <p><?php echo ucwords($note->description_resourse)?></p>
          </div>
          <div class="col-md-12">
            <div data-animation="fadeInRight" class="section-title text-left animated fadeInRight visible">
              <h2 class="title">Total Price: <?php echo $note->totalprice?> CAD</h2>
            </div>
            <div data-example-id="simple-table">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Lession Title</th>
                    <th>Price</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php if(count($notedetails)>0)
                      {
                        $i=0;
                        foreach ($notedetails as $list): 
                          $i++;
                          ?>
                              <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo ucwords($list['file_title']);?></td>
                                <td><?php if($list['file_price']!=""){echo $list['file_price'].' '."CAD"; } else{ echo "free";}?></td>
                                <td><a href="#"><img src="<?= SITEURL; ?>webroot/img/bag5.png" width="30" height="30"></a></td>
                              </tr>
                  <?php endforeach; 
                    }
                    else
                    {?>
                      <tr >
                        <td colspan="4">There is no records in table</td>
                      </tr>
                      <?php 
                    }?>
                </tbody>
              </table>
            </div>
            <p>
              <button aria-controls="collapseExample" aria-expanded="false" data-target="#collapseExample" data-toggle="collapse" type="button" class="btn btn-primary btn-lg btn-block"> What Our Downloaders Said? </button>
            </p>

            
            
             <?php if(count($feedback)>0)
                      {
                        $i=0;
                        foreach ($feedback as $list): 
                          $i++;
                          ?>
                          <div id="collapseExample" class="collapse">
                              <div class="col-md-12">
                                <div class="comment-item">
                                  <div class="pull-left author-img"><img width="80" height="80" title="" alt="" src="http://placehold.it/80x80" class="img-circle"></div>
                                  <p><?php echo ucwords($list['description']);?></p>
                                  <div class="post-meta"> 
                                    <!-- Author  --> 
                                    <span class="author"><i class="fa fa-user"></i> <?php echo ucwords($list['user']['fname'].' '.$list['user']['lname']);?></span> 
                                    <!-- Meta Date --> 
                                    <span class="time"><?php echo ucwords($list['user']['role']);?>, zozothemes</span> 
                                    <!-- Category --> 
                                    <span class="comments pull-right"><i class="fa fa-star text-color"></i> <i class="fa fa-star text-color"></i> <i class="fa fa-star text-color"></i> <i class="fa fa-star text-color"></i> <i class="fa fa-star-half-o text-color"></i></span> </div>
                                </div>
                              </div>
                              </div>
              <?php endforeach; 
                    }
                    else
                    {?>
                      <tr >
                        <td colspan="4">There is no records in table</td>
                      </tr>
                      <?php 
                    }?>
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="owl-carousel navigation-1" data-pagination="false" data-items="4" data-autoplay="true" data-navigation="true">
         <?php if(count($notelist)>0)
                      {
                        $i=0;
                        foreach ($notelist as $list): 
                          $i++;
                          ?>
                              <div class="col-sm-4  col-md-3 icons-hover-color bottom-xs-pad-20  portfolio-grid">
                                <div class="image">
                                  <div class="grids">
                                    <div class="grid"> 
                                      <!-- Image --> 
                                      <img src="img/sections/portfolio/b7.jpg" alt="" title="" width="300" height="300" />
                                      <div class="figcaption">
                                        <div class="caption-block">
                                          <h4><?php echo ucwords($list['name_of_resourse']);?></h4>
                                          <p>Lorem ipsum</p>
                                        </div>
                                        <!-- Image Popup-->
                                        
                                        <p class="top-pad-10"> <a data-rel="prettyPhoto[portfolio]" href="img/sections/portfolio/b7.jpg" > <i class="icon-search text-white border-color"></i> </a> </p>
                                        <p class="top-pad-10"> <a href="#" > <i class="icon-eye text-white border-color" data-toggle="tooltip" title="Views">10</i> <i class="icon-download text-white border-color" data-toggle="tooltip" title="Downloads">10</i><i class="icon-comments text-white border-color" data-toggle="tooltip" title="Comments">10</i></a> </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          <?php endforeach; 
                    }
                    else
                    {?>
                      <tr >
                        <td colspan="4">There is no records in table</td>
                      </tr>
                      <?php 
                    }?>
          <!-- .employee     -->
          <div class="col-sm-4  col-md-3 icons-hover-color bottom-xs-pad-20  portfolio-grid">
            <div class="image">
              <div class="grids">
                <div class="grid"> 
                  <!-- Image --> 
                  <img src="img/sections/portfolio/b7.jpg" alt="" title="" width="300" height="300" />
                  <div class="figcaption">
                    <div class="caption-block">
                      <h4>Title</h4>
                      <p>Lorem ipsum</p>
                    </div>
                    <!-- Image Popup-->
                    
                    <p class="top-pad-10"> <a data-rel="prettyPhoto[portfolio]" href="img/sections/portfolio/b7.jpg" > <i class="icon-search text-white border-color"></i> </a> </p>
                    <p class="top-pad-10"> <a href="#" > <i class="icon-eye text-white border-color" data-toggle="tooltip" title="Views">10</i> <i class="icon-download text-white border-color" data-toggle="tooltip" title="Downloads">10</i> <i class="icon-user text-white border-color" data-toggle="tooltip" title="Users">10</i> <i class="icon-comments text-white border-color" data-toggle="tooltip" title="Comments">10</i></a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .employee -->
          <div class="col-sm-4  col-md-3 icons-hover-color bottom-xs-pad-20  portfolio-grid">
            <div class="image">
              <div class="grids">
                <div class="grid"> 
                  <!-- Image --> 
                  <img src="img/sections/portfolio/b7.jpg" alt="" title="" width="300" height="300" />
                  <div class="figcaption">
                    <div class="caption-block">
                      <h4>Title</h4>
                      <p>Lorem ipsum</p>
                    </div>
                    <!-- Image Popup-->
                    
                    <p class="top-pad-10"> <a data-rel="prettyPhoto[portfolio]" href="img/sections/portfolio/b7.jpg" > <i class="icon-search text-white border-color"></i> </a> </p>
                    <p class="top-pad-10"> <a href="#" > <i class="icon-eye text-white border-color" data-toggle="tooltip" title="Views">10</i> <i class="icon-download text-white border-color" data-toggle="tooltip" title="Downloads">10</i> <i class="icon-user text-white border-color" data-toggle="tooltip" title="Users">10</i> <i class="icon-comments text-white border-color" data-toggle="tooltip" title="Comments">10</i></a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .employee -->
          <div class="col-sm-4  col-md-3 icons-hover-color bottom-xs-pad-20  portfolio-grid">
            <div class="image">
              <div class="grids">
                <div class="grid"> 
                  <!-- Image --> 
                  <img src="img/sections/portfolio/b7.jpg" alt="" title="" width="300" height="300" />
                  <div class="figcaption">
                    <div class="caption-block">
                      <h4>Title</h4>
                      <p>Lorem ipsum</p>
                    </div>
                    <!-- Image Popup-->
                    
                    <p class="top-pad-10"> <a data-rel="prettyPhoto[portfolio]" href="img/sections/portfolio/b7.jpg" > <i class="icon-search text-white border-color"></i> </a> </p>
                    <p class="top-pad-10"> <a href="#" > <i class="icon-eye text-white border-color" data-toggle="tooltip" title="Views">10</i> <i class="icon-download text-white border-color" data-toggle="tooltip" title="Downloads">10</i> <i class="icon-user text-white border-color" data-toggle="tooltip" title="Users">10</i> <i class="icon-comments text-white border-color" data-toggle="tooltip" title="Comments">10</i></a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4  col-md-3 icons-hover-color bottom-xs-pad-20  portfolio-grid">
            <div class="image">
              <div class="grids">
                <div class="grid"> 
                  <!-- Image --> 
                  <img src="img/sections/portfolio/b7.jpg" alt="" title="" width="300" height="300" />
                  <div class="figcaption">
                    <div class="caption-block">
                      <h4>Title</h4>
                      <p>Lorem ipsum</p>
                    </div>
                    <!-- Image Popup-->
                    
                    <p class="top-pad-10"> <a data-rel="prettyPhoto[portfolio]" href="img/sections/portfolio/b7.jpg" > <i class="icon-search text-white border-color"></i> </a> </p>
                    <p class="top-pad-10"> <a href="#" > <i class="icon-eye text-white border-color" data-toggle="tooltip" title="Views">10</i> <i class="icon-download text-white border-color" data-toggle="tooltip" title="Downloads">10</i> <i class="icon-user text-white border-color" data-toggle="tooltip" title="Users">10</i> <i class="icon-comments text-white border-color" data-toggle="tooltip" title="Comments">10</i></a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .employee     -->
          <div class="col-sm-4  col-md-3 icons-hover-color bottom-xs-pad-20  portfolio-grid">
            <div class="image">
              <div class="grids">
                <div class="grid"> 
                  <!-- Image --> 
                  <img src="img/sections/portfolio/b7.jpg" alt="" title="" width="300" height="300" />
                  <div class="figcaption">
                    <div class="caption-block">
                      <h4>Title</h4>
                      <p>Lorem ipsum</p>
                    </div>
                    <!-- Image Popup-->
                    
                    <p class="top-pad-10"> <a data-rel="prettyPhoto[portfolio]" href="img/sections/portfolio/b7.jpg" > <i class="icon-search text-white border-color"></i> </a> </p>
                    <p class="top-pad-10"> <a href="#" > <i class="icon-eye text-white border-color" data-toggle="tooltip" title="Views">10</i> <i class="icon-download text-white border-color" data-toggle="tooltip" title="Downloads">10</i> <i class="icon-user text-white border-color" data-toggle="tooltip" title="Users">10</i> <i class="icon-comments text-white border-color" data-toggle="tooltip" title="Comments">10</i></a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .employee --> 
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section class="page-section pop-up-display-content" id="pop-up-1" style="margin-top:-80px; margin-bottom:-108px;">
    <div class="container">
      <div class="section-title">
        <h4 class="title">Tell Us what you have to say</h4>
             
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-12 work-section">
          <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
            <div class="panel panel-default" style="padding:4px;">
              <div id="headingOne" role="tab" class="panel-heading">
                   

                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Write a Feedback for the Response  <strong style="color:#F00">Click Here.</strong>  </a> </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <div id="message" class='alert alert-success' style="display:none">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <label>Feedback has been submitted</label>
                  </div>
                 
                  <div id="errormessage" class='alert alert-warning' style="display:none">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <label>Feedback has been already submitted by you.</label>
                  </div>

                  <div class="formdiv">
                  <?php if($userData['user_id']!="")
                  {

                        if($userfeedback=="")
                        {?>
                          <form id="feedbackform" name="feedbackform" method="post" action="Notedetails/getfeedback">
                          
                            <div class="row">
                              <div class="form-group col-sm-12">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" id="feedbacktitle" name="title" placeholder="Title" class="form-control">
                                <input type="hidden" id="feedbackuserid" name="user_id" value="<?php echo $userData['user_id']; ?>" >
                                <input type="hidden" id="feedbacknoteid" name="note_id" value="<?php echo $note['note_id']; ?>" >
                                <input type="hidden" id="feedbackcreateddt" name="created_dt" value="<?php echo time(); ?>">
                                <input type="hidden" id="feedbackformtype" name="formtype" value="feedback">
                                

                              </div>
                              <div class="form-group col-sm-12">
                                <label>Do you need this for your Exam?</label>
                                <br>
                                <input type="radio" name="feedbackexam" id="inlineRadio1" value="0" checked>
                                Yes
                                <input type="radio" name="feedbackexam" id="inlineRadio2" value="1" >
                                No </div>
                              <div class="form-group col-sm-12">
                                <label>If yes rate 1 to 5, how helpful was the resource to you ?</label>
                                
                                   <div class="rateit" style="margin-top:0px;" id="rateit10b" onclick="countval()"></div>
                                    <span class="spnrate">
                                    <input type="text" class="ratevalidate" name="ratedata" id="ratedata" value="" style="width:0px; border:0px!important; background:none;"/>
                                    </span> 
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-sm-12">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea rows="3" class="form-control" name="description"></textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-sm-12">
                                <span class="confirmMessage" id="confirmMessage" style="display:none; color:#ff0000;">All fields are mandatory..</span> 
                           
                              <button class="btn btn-default" type="button" id="reviewsubmit" name="reviewsubmit">Submit</button>
                            </div>
                        </form>

                      <?php }
                            else
                              {?>
                                    <div  class='alert alert-warning'>
                                        <label>You already give feedback this note.</label>
                                    </div>
                               <?php }
                      }
                      else
                      { ?>
                         <div class="panel panel-default" style="padding:4px;">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a class="dropdown-toggle" href="<?php echo SITEURL?>register" data-toggle="dropdown" id="#loginmenu">Please login  or <strong style="color:#F00">create account </strong> to write a feedback. </a> 

                            </h4>
                          </div>
                        </div>
                <?php  } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="padding:4px;">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">  If you need held or have a question for Customer Services <strong style="color:#F00">Click Here.</strong> </a> </h4>
              </div>
                  <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                         <div id="customerreviewmessage" class='alert alert-success' style="display:none">
                                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                              <label>Feedback has been submitted</label>
                                          </div>
                                         
                                          <div id="customerreviewerrormessage" class='alert alert-warning' style="display:none">
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                              <label>Feedback has been already submitted by you.</label>
                                          </div>
                                      <div class="customformdiv">
                                      <?php if($userData['user_id']!="")
                                            { 
                                                  if($customerreviewfeedback=="")
                                                  { ?>
                                                            <form id="customerreviewform" name="customerreviewform" method="post" action="Notedetails/getfeedback">
                                                            
                                                              <div class="row">
                                                                <div class="form-group col-sm-12">
                                                                  <label for="exampleInputEmail1">Title</label>
                                                                  <input type="text" id="customerreviewtitle" name="customerreviewtitle" placeholder="Title" class="form-control">
                                                                  <input type="hidden" id="customerreviewuserid" name="customerreviewuserid" value="<?php echo $userData['user_id']; ?>" >
                                                                  <input type="hidden" id="customerreviewnoteid" name="customerreviewnoteid" value="<?php echo $note['note_id']; ?>" >
                                                                  <input type="hidden" id="customerreviewcreateddt" name="customerreviewcreateddt" value="<?php echo time(); ?>">
                                                                  <input type="hidden" id="customerreviewformtype" name="customerreviewformtype" value="customerreview">

                                                                </div>
                                                                <div class="form-group col-sm-12">
                                                                  <label>Do you need this for your Exam?</label>
                                                                  <br>
                                                                  <input type="radio" name="customerreviewexam" id="inlineRadio1" value="0" checked>
                                                                  Yes
                                                                  <input type="radio" name="customerreviewexam" id="inlineRadio2" value="1" >
                                                                  No </div>
                                                                <div class="form-group col-sm-12">
                                                                  <label>If yes rate 1 to 5, how helpful was the resource to you ?</label>
                                                                  
                                                                     <div class="rateit" style="margin-top:0px;" id="customerrateit" onclick="customerreviewcountval()"></div>
                                                                      <span class="spnrate">
                                                                      <input type="text" class="ratevalidate" name="customerreviewratedata" id="customerreviewratedata" value="" style="width:0px; border:0px!important; background:none;"/>
                                                                      </span> 
                                                                </div>
                                                              </div>
                                                              <div class="row">
                                                                <div class="form-group col-sm-12">
                                                                  <label for="exampleInputEmail1">Description</label>
                                                                  <textarea rows="3" class="form-control" name="customerreviewdescription"></textarea>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="form-group col-sm-12">
                                                                <span class="confirmMessage" id="customerreviewconfirmMessage" style="display:none; color:#ff0000;">All fields are mandatory..</span> 
                                                           
                                                                <button class="btn btn-default" type="button" id="customerreviewsubmit" name="customerreviewsubmit">Submit</button>
                                                              </div>
                                                            </form>
                                                      <?php
                                                    }
                                                    else
                                                      {?>
                                                           <div  class='alert alert-warning'>
                                                                  <label>You already give feedback this note.</label>
                                                              </div>
                                                   <?php   }
                                          }
                                          else
                                          { ?>
                                             <div class="panel panel-default" style="padding:4px;">
                                              <div class="panel-heading">
                                                <h4 class="panel-title"> <a class="dropdown-toggle" href="<?php echo SITEURL?>register" data-toggle="dropdown" id="#loginmenu">Please login  or <strong style="color:#F00">create account </strong> to write a feedback. </a>

                                                </h4>
                                              </div>
                                            </div>
                                    <?php  } ?>
                                      </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="padding:4px;">
              <div id="headingThree" role="tab" class="panel-heading">
                <h4 class="panel-title"> <a aria-controls="collapseThree" aria-expanded="false" href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="collapsed"> Would you like to report poor quality or formatting in this block <strong style="color:#F00">Click Here.</strong> </a> </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <div id="qualityreviewmessage" class='alert alert-success' style="display:none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <label>Feedback has been submitted</label>
                    </div>
                 
                    <div id="qualityreviewerrormessage" class='alert alert-warning' style="display:none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <label>Feedback has been already submitted by you.</label>
                    </div>
                  <div class="qualityformdiv">
                  <?php if($userData['user_id']!="")
                          { 
                            if($qualityrevieweedback=="")
                              { ?>
                                          <form id="qualityreviewform" name="qualityreviewform" method="post" action="Notedetails/getfeedback">
                                          
                                            <div class="row">
                                              <div class="form-group col-sm-12">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" name="qualitystitle" placeholder="Title" class="form-control">
                                                <input type="hidden" name="qualitysuser_id" value="<?php echo $userData['user_id']; ?>" >
                                                <input type="hidden" name="qualitysnote_id" value="<?php echo $note['note_id']; ?>" >
                                               
                                                 <input type="hidden" name="qualitysformtype" value="qualityreview">

                                              </div>
                                              <div class="form-group col-sm-12">
                                                <label>Do you need this for your Exam?</label>
                                                <br>
                                                <input type="radio" name="qualitysexam" id="inlineRadio1" value="0" checked>
                                                Yes
                                                <input type="radio" name="qualitysexam" id="inlineRadio2" value="1" >
                                                No </div>
                                              <div class="form-group col-sm-12">
                                                <label>If yes rate 1 to 5, how helpful was the resource to you ?</label>
                                                
                                                   <div class="rateit" style="margin-top:0px;" id="qualitysrateit10b" onclick="qualityreviewcountval()"></div>
                                                    <span class="spnrate">
                                                    <input type="text" class="ratevalidate" name="qualityreviewratedata" id="qualityreviewratedata" value="" style="width:0px; border:0px!important; background:none;"/>
                                                    </span> 
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="form-group col-sm-12">
                                                <label for="exampleInputEmail1">Description</label>
                                                <textarea rows="3" class="form-control" name="qualitysdescription" id="qualitysdescription"></textarea>
                                              </div>
                                           </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                  <span class="confirmMessage" id="qualityconfirmMessage" style="display:none; color:#ff0000;">All fields are mandatory..</span> 
                                             
                                              <button class="btn btn-default" type="button" id="qualitysubmit" name="qualitysubmit">Submit</button>
                                            </div>
                                            </div>
                                          </form>
                          <?php }
                              else
                              {?>
                                    <div  class='alert alert-warning'>
                                          <label>You already give feedback this note.</label>
                                    </div>
                        <?php  }
                      }
                      else
                      { ?>
                         <div class="panel panel-default" style="padding:4px;">
                          <div class="panel-heading">
                            <h4 class="panel-title"> <a class="dropdown-toggle" href="<?php echo SITEURL?>register" data-toggle="dropdown" id="#loginmenu">Please login  or <strong style="color:#F00">create account </strong> to write a feedback. </a>

                            </h4>
                          </div>
                        </div>
                <?php  } ?>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="panel panel-default" style="padding:4px;">
              <div id="headingFour" role="tab" class="panel-heading">
                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Report Copyright infrigment <strong style="color:#F00">Click Here.</strong> </a> </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                   <div id="copymessage" class='alert alert-success' style="display:none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <label>Feedback has been submitted</label>
                    </div>
                 
                    <div id="copyerrormessage" class='alert alert-warning' style="display:none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <label>Feedback has been already submitted by you.</label>
                    </div>
                    <div class="copyformdiv">
                               <?php 
                               if($userData['user_id']!="")
                                { 
                                    if($copyrightfeedback=="")
                                      {?>
                                                            <h4 class="panel-title"> To fill the notification, you must be either the copyright owner of the work or an individual authorized to act on behalf of the copyright owner</h4>  
                                                                <form id="copyform" name="copyform" method="post" action="Notedetails/getcopy">
                                                                    <div class="row">
                                                                      <div class="form-group col-sm-12">
                                                                        <label for="exampleInputEmail1">Name</label>
                                                                        <input type="text" placeholder="Your Name" name="copyrightname" class="form-control" value="<?php echo $userData['fname']." ".$userData['lname']; ?>" >
                                                                        <input type="hidden" name="copyrightsuser_id" value="<?php echo $userData['user_id']; ?>" >
                                                                        <input type="hidden" name="copyrightsnote_id" value="<?php echo $note['note_id']; ?>" >
                                                                      </div>
                                                                    </div>
                                                                    <div class="row">
                                                                      <div class="form-group col-sm-12">
                                                                        <label for="exampleInputEmail1">Email address</label>
                                                                        <input type="email" placeholder="Enter email" name="copyrightemail" id="exampleInputEmail1" class="form-control" value="<?php echo $userData['username']; ?>">
                                                                      </div>
                                                                    </div>
                                                                    <div class="row">
                                                                      <div class="form-group col-sm-12">
                                                                        <label for="exampleInputEmail1">College/Organization</label>
                                                                         <?php 
                                                                           echo $this->Form->select('copyrightcollage',$collage, array('id'=>'stateclass','class'=>'form-control','empty' => 'Choose Collage'));?>
                                                                      </div>
                                                                    </div>
                                                                    <div class="row">
                                                                      <div class="form-group col-sm-12">
                                                                        <label for="exampleInputEmail1">Contact</label>
                                                                        <input type="text" placeholder="Your Contact Number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="copyrightcontact" id="copyrightcontact" class="form-control">
                                                                      </div>
                                                                    </div>
                                                                    <div class="row">
                                                                      <div class="form-group col-sm-12">
                                                                        <label for="exampleInputEmail1">Source</label>
                                                                        <textarea rows="3" class="form-control" name="copyrightsource" id="copyrightsource"></textarea>
                                                                      </div>
                                                                    </div>
                                                                    <div class="row">
                                                                      <div class="form-group col-sm-12">
                                                                        <label for="exampleInputEmail1">Statement</label>
                                                                        <textarea rows="3" class="form-control" name="copyrightstatement" id="copyrightstatement"></textarea>
                                                                      </div>

                                                                 </div>
                                                                <div class="row">
                                                                    <div class="form-group col-sm-12">
                                                                      <span class="confirmMessage" id="copyrightconfirmMessage" style="display:none; color:#ff0000;">All fields are mandatory..</span> 

                                                                      <button class="btn btn-default" type="button" id="copyrightsubmit">Submit</button>
                                                                  </div>
                                                                  </div>
                                                                </form>
                                <?php }
                                      else
                                            {?>
                                                  <div  class='alert alert-warning'>
                                                        <label>You already give feedback this note.</label>
                                                  </div>
                                      <?php  }
                                    }
                                    else
                                    { ?>
                                       <div class="panel panel-default" style="padding:4px;">
                                        <div class="panel-heading">
                                          <h4 class="panel-title"> <a class="dropdown-toggle" href="<?php echo SITEURL?>register" data-toggle="dropdown" id="#loginmenu">Please login  or <strong style="color:#F00">create account </strong> to write a feedback. </a>

                                          </h4>
                                        </div>
                                      </div>
                              <?php  } ?>
                        </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div data-animation="fadeInRight" class="section-title text-left animated fadeInRight visible">
            <h2 class="title">Forum</h2>
          </div>
          <div class="row">
            <div class="col-md-4">
              <h5 class="title">Topic</h5>
              <hr>
            </div>
            <div class="col-md-8">
              <h5 class="title"> From this Discussion</h5>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"><a href="#"> 
              <!-- Title -->
              <h6 class="title"><span class="icon-hyperlink"></span> Lorem Ipsum</h6>
              <!-- Text --> 
              </a></div>
            <div class="col-md-8">
              <div class="comment-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                <a href="#" class="btn-link">Read More</a>
                <div class="post-meta"> 
                  <!-- Category --> 
                  <span class="comments pull-right"><i class="fa fa-comments"></i> <a href="#">reply</a></span> 
                  <!-- Meta Date --> 
                  <span class="time pull-right"><i class="fa fa-calendar"></i> 03.11.2014</span> 
                  <!-- Author  --> 
                  <span class="author pull-right"><i class="fa fa-user"></i> John Deo</span> </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"><a href="#"> 
              <!-- Title -->
              <h6 class="title"><span class="icon-hyperlink"></span> Lorem Ipsum</h6>
              <!-- Text --> 
              </a></div>
            <div class="col-md-8">
              <div class="comment-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                <a href="#" class="btn-link">Read More</a>
                <div class="post-meta"> 
                  <!-- Category --> 
                  <span class="comments pull-right"><i class="fa fa-comments"></i> <a href="#">reply</a></span> 
                  <!-- Meta Date --> 
                  <span class="time pull-right"><i class="fa fa-calendar"></i> 03.11.2014</span> 
                  <!-- Author  --> 
                  <span class="author pull-right"><i class="fa fa-user"></i> John Deo</span> </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"><a href="#"> 
              <!-- Title -->
              <h6 class="title"><span class="icon-hyperlink"></span> Lorem Ipsum</h6>
              <!-- Text --> 
              </a></div>
            <div class="col-md-8">
              <div class="comment-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                <a href="#" class="btn-link">Read More</a>
                <div class="post-meta"> 
                  <!-- Category --> 
                  <span class="comments pull-right"><i class="fa fa-comments"></i> <a href="#">reply</a></span> 
                  <!-- Meta Date --> 
                  <span class="time pull-right"><i class="fa fa-calendar"></i> 03.11.2014</span> 
                  <!-- Author  --> 
                  <span class="author pull-right"><i class="fa fa-user"></i> John Deo</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div data-animation="fadeInRight" class="section-title text-left animated fadeInRight visible">
                <h2 class="title">Start a new discussion</h2>
              </div>
            </div>
            <div class="col-md-8">
              <form role="form" name="contactform" id="contactform"  method="post">
                <!-- Field 1 -->
                <div class="col-md-12">
                  <div class="input-text form-group">
                    <input type="text" name="contact_name" class="input-name form-control" placeholder="Title" />
                  </div>
                  <!-- Field 4 -->
                  <div class="textarea-message form-group">
                    <textarea name="contact_message" class="textarea-message form-control" placeholder="Post" rows="4" ></textarea>
                  </div>
                  <!-- Button -->
                  <button class="btn btn-default" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- page-section -->
  

<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
    $('#reviewsubmit').on('click', function() 
    {  
          var title= $('#feedbacktitle').val();
            var ratedata= $('#ratedata').val();
            var description= $('#feedbackdescription').val();
           

            if(title!="")
            {
              if(ratedata!="")
              {
                 if(description!="")
                  {
                        $("#confirmMessage").hide();
                        var form = $('#feedbackform');
                        
                          $.ajax({
                           type:"POST",
                           url:"<?php echo SITEURL.'Notedetails/getfeedback';?>",
                           data:  form.serialize(),
                           success: function(data)
                           {
                            if(data=="yes")
                              {
                                
                                $('div#message').show();
                                $('.form-control').val('');
                                $('div#formdiv').hide();
                              }
                              else
                              {
                                 
                                $('div#errormessage').show();
                               $('.form-control').val('');
                                $('div#formdiv').hide();
                              }
                               
                             
                           }
                          });
                      }
                      else
                        {
                           $("#confirmMessage").show();
                        }
                    }
                     else
                        {
                           $("#confirmMessage").show();
                        }
                
            }
            else
            {
               $("#confirmMessage").show();
            }
        
          
    });
    $('#customerreviewsubmit').on('click', function() 
    {  


       var title= $('#customerreviewtitle').val();
            var ratedata= $('#customerreviewratedata').val();
            var description= $('#customerreviewdescription').val();
           

            if(title!="")
            {
              if(ratedata!="")
              {
                 if(description!="")
                  {
                        $("#customerreviewconfirmMessage").hide();
                        var form = $('#customerreviewform');
                          
                            $.ajax({
                             type:"POST",
                             url:"<?php echo SITEURL.'Notedetails/getreview';?>",
                             data:  form.serialize(),
                             success: function(data)
                             {
                            if(data=="yes")
                              {
                                $('div#customerreviewmessage').show();
                                $('.form-control').val('');
                                $('#formdiv').hide();
                              }
                              else
                              {
                                
                               $('div#customerreviewerrormessage').show();
                               $('.form-control').val('');
                               
                              }
                               
                             }
                            });
                      }
                      else
                        {
                           $("#customerreviewconfirmMessage").show();
                        }
                    }
                     else
                        {
                           $("#customerreviewconfirmMessage").show();
                        }
                
            }
            else
            {
               $("#customerreviewconfirmMessage").show();
            }
        
         
        
    });

    $('#qualitysubmit').on('click', function() 
    {  
          var title= $('#qualitytitle').val();
            var ratedata= $('#qualityreviewratedata').val();
            var description= $('#qualitysdescription').val();
          
            if(title!="")
            {
              if(ratedata!="")
              {
                 if(description!="")
                  {
                        $("#qualityconfirmMessage").hide();
                        var form = $('#qualityreviewform');
            
                            $.ajax({
                             type:"POST",
                             url:"<?php echo SITEURL.'Notedetails/getqualityreview';?>",
                             data:  form.serialize(),
                             success: function(data)
                             {
                              if(data=="yes")
                              {
                                $('div#qualityreviewmessage').show();
                                $('.form-control').val('');
                                $('#formdiv').hide();
                              }
                              else
                              {
                                
                                $('div#qualityreviewerrormessage').show();
                               $('.form-control').val('');
                               
                              }
                               
                             }
                            });
        
                      }
                      else
                        {
                           $("#qualityconfirmMessage").show();
                        }
                    }
                     else
                        {
                           $("#qualityconfirmMessage").show();
                        }
                
            }
            else
            {
               $("#qualityconfirmMessage").show();
            }
          
    });

    $('#copyrightsubmit').on('click', function() 
    {  
        var copyrightname= $('#copyrightname').val();
        var copyrightcontact= $('#copyrightcontact').val();
        var copyrightsource= $('#copyrightsource').val();
          
            if(copyrightname!="")
            {
              if(copyrightcontact!="")
              {
                 if(copyrightsource!="")
                  {
                        $("#copyrightconfirmMessage").hide();
                       var form = $('#copyform');
            
                                $.ajax({
                                 type:"POST",
                                 url:"<?php echo SITEURL.'Notedetails/getcopyrightreview';?>",
                                 data:  form.serialize(),
                                 success: function(data)
                                 {
                                 if(data=="yes")
                                  {
                                    
                                    $('div#copymessage').css('display','block');
                                    $('.form-control').val('');
                                    
                                  }
                                  else
                                  {
                                    
                                    $('div#copyerrormessage').show();
                                   $('.form-control').val('');
                                   
                                  }
                                   
                                 }
                                });
                      }
                      else
                        {
                           $("#copyrightconfirmMessage").show();
                        }
                    }
                     else
                        {
                           $("#copyrightconfirmMessage").show();
                        }
                
            }
            else
            {
               $("#copyrightconfirmMessage").show();
            }
          
        
    });

    
    $('#ratesubmit').on('click', function() 
    {  
        if ($('#ratingform').valid()) // check if form is valid
        {
              var form = $('#ratingform');
            
              $.ajax({
               type:"POST",
               url:"<?php echo SITEURL.'Notedetails/getrate';?>",
               data:  form.serialize(),
               success: function(data)
               {
                if(data=="yes")
                {
                  $('#messagerate').show();
                 
                  $('#formdiv').hide();
                }
                else
                {
                  
                  $('#errorratemessage').show();
                 
                 
                }
                 
               }
              });
        }
    });
});
function countval()
  {
    var rate=$('#rateit10b').rateit('value');
    $('#ratedata').val(rate);
    if(rate != "")
    {
      $(".spnrate label").css('color','#ffc400');
    }

}
function customerreviewcountval()
  {
    var rate=$('#customerrateit').rateit('value');
    $('#customerreviewratedata').val(rate);
    if(rate != "")
    {
      $(".spnrate label").css('color','#ffc400');
    }

}
function qualityreviewcountval()
  {
    var rate=$('#qualitysrateit10b').rateit('value');
    $('#qualityreviewratedata').val(rate);
    if(rate != "")
    {
      $(".spnrate label").css('color','#ffc400');
    }

}

function countval1()
  {
    var rate=$('#rateit').rateit('value');
    $('#ratestore').val(rate);
    if(rate != "")
    {
      $(".spnrate label").css('color','#ffc400');
    }
  }


</script> 
