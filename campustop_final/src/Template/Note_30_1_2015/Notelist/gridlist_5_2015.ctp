<style>
.grid-item
{
  width:100%;
}  
</style>


<?php
//pr($note1);
//die;
?>
<!-- Mirrored from 64.110.130.68/~techaddict/campustop/NotesList.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Dec 2015 11:02:55 GMT -->
<head>
<!-- Font -->


<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
<div id="page"> 
  <!-- Top Bar -->
 
  <!-- Top Bar --> 
  <!-- Sticky Navbar -->
 
  <!-- Sticky Navbar -->
  <div class="page-header">
    <div class="container">
      <h1 class="title">Portfolio</h1>
    </div>
    <div class="breadcrumb-box">
      <div class="container">
        <ul class="breadcrumb">
          <li> <a href="index.html">Home</a> </li>
          <li> <a href="#">Pages</a> </li>
          <li class="active">Portfolio</li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- page-header -->
 <!-- page-header -->
  <section id="works" class="page-section light-bg">
    <div class="container hotel-tab" role="tabpanel">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="contact-form">
              <form action="#" method="post" id="contactform" name="contactform" role="form" novalidate class="bv-form">
                <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                <div class="input-select form-group">
                  <select class="input-name form-control">
                    <option>Sort By Title</option>
                    <option>Sort By Title</option>
                    <option>Sort By Title</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-4">
              <button class="btn btn-default active" type="button">All</button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default" type="button" style="padding: 9px 14px;"><a href="<?=SITEURL; ?>notelist/notlistfree">Free</a></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default" type="button"><a href="<?=SITEURL; ?>notelist/notelistpr">Premium</a></button>
            </div>
          </div>
          <div class="col-md-4">
            <ul role="tablist" class="nav nav-tabs">
              <li role="presentation"><a href="<?=SITEURL; ?>notelist" ><i class="icon-th-list2 fa-2x"></i></a></li>
              <li role="presentation" class="active"><a href="<?=SITEURL; ?>notelist/gridlist"><i class="icon-th fa-2x"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="mixed-grid pad"> 
        <!--<div class="filter-menu">
                        <ul class="nav black works-filters text-center" id="filters">
                            <li class="filter active" data-filter=".all">Show All</li>
                            <li class="filter" data-filter=".web">web design</li>
                            <li class="filter" data-filter=".html">landing pages</li>
                            <li class="filter" data-filter=".wp">personal blog</li>
                        </ul>
                    </div>-->
        
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="grid" >
            <div class="filter-menu">
              <ul class="nav black works-filters text-center" id="filters">
                <li class="filter active" data-filter=".all">Show All</li>
                  <li class="filter" data-filter=".3">Notes</li>
                <li class="filter" data-filter=".5">Video</li>
                <li class="filter" data-filter=".6">Reserch Paper</li>
                <li class="filter" data-filter=".7">Case Study</li>

              </ul>
            </div>
            <div class="masonry-grid grid-col-4">
              <div class="grid-sizer"></div>
              <!-- Item 1 -->

               <?php if(count($note1)>0)

                              {
                                ?>
                <?php foreach ($note1 as $note)
                      {


                 ?>
              <div class="grid-item all <?php echo $note->resource_id;?>">
                <div class="img-wrapper  portfolio-grid ">
                  <div class="grids">
                    <div class="grid"> <img width="370" height="370" class="img-responsive" alt="" src="img/sections/portfolio/b7.jpg">
                      <div class="figcaption">
                        <div class="caption-block">
                          <p><?php echo $note->name_of_resourse ?></p>
                        </div>
                        <!-- Image Popup--> 
                        <a data-rel="prettyPhoto[portfolio]" href="img/sections/portfolio/b7.jpg"> <i class="icon-search text-white border-color"></i> </a> <a href="#view" class="js-open-modal-right"> <i class="icon-eye text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Views">3</i> </a> <a href="#"> <i class="icon-download text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Downloads">10</i> </a> <a href="#"> <i class="icon-user text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Users">7</i> </a> <a href="#"> <i class="icon-comments text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Comments">20</i> </a> </div>
                    </div>
                  </div>
                </div>
                <div class="destination-box">
                  <h5><?php echo $note->name_of_resourse ?></h5>
                  <p class="pull-right"> <i class="fa fa-star text-color"></i> <i class="fa fa-star text-color"></i> <i class="fa fa-star text-color"></i> <i class="fa fa-star text-color"></i> <i class="fa fa-star-half-o text-color"></i> </p>
                  <p><strong>Author - <span class="text-color"><?php echo $note->user->fname.$note->user->mname.$note->user->lname; ?></span></strong></p>
                  <p><strong>Price - <span class="text-color"><?php echo $note->totalprice ?></span></strong></p>
                  <div class="row">
                    <div class="col-md-6"> <a href="#" class="btn btn-default">View Details</a> </div>
                    <div class="col-md-6"> <a style="margin-right: 5px; float: right" href="#view" class="js-open-modal-right" data-toggle="tooltip" data-placement="top" title="Add to Bag"><img width="35" height="35" src="img/bag.png"></a> </div>
                  </div>
                </div>
              </div>
              <!-- Item 1 Ends--> 

               <?php 

                      }
                  }
                                      else
                                      {?>
                                        <div>
                                          There is no records in table
                                        </div>
                                        <?php 
                                      }?>
       
         
      
              <!-- Item 8 Ends--> 
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>

  
  <!-- works --> 
  
  
  <!-- footer -->
  <div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content"> 
        <!--<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>-->
      
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<a href="#0" class="cd-top"><i class="glyphicon glyphicon-arrow-up"></i></a> 



<!-- Isoptope --> 

<script type="text/javascript" src="<?=SITEURL; ?>webroot/js/isotope.min.js"></script> 
<!-- Custom Js Code --> 


<script type="text/javascript">
    $('.js-open-modal-right').click(function() {
      $('#ajaxModal').bootstrapExtraModal({
        position: 'right'
      }).show();
    });
  
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

$(document).ready(function(){
  // Hide div 2 by default
  
  $('a#list1').click(function(){
    /*$('div.grid1').hide(); */
    alert("hi");
      $('div.list1').show();
    
    $(".grid1").css("background-color", "yellow");    
    
  });
  
  $('a#grid1').click(function(){ 
      $('div.list1').hide();
      $('div.grid1').show();    
    
  });
  
});


var $divs = $("div.notelist");



$('#alphBnt').on('change', function () {
 
  if(this.value==1)
  {

    alert(this.value);
    var alphabeticallyOrderedDivs = $divs.sort(function (a, b) {
        return $(a).find("h5").text() > $(b).find("h5").text();
    });


    //alert(alphabeticallyOrderedDivs);
    $("#masonry-grid").html(alphabeticallyOrderedDivs);
  }
});





  </script> 
<!-- Scripts -->
</body>

<!-- Mirrored from 64.110.130.68/~techaddict/campustop/NotesList.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Dec 2015 11:05:19 GMT -->