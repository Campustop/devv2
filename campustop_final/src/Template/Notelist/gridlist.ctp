<?php
//pr($note1);
//die;
?>
<!-- Mirrored from 64.110.130.68/~techaddict/campustop/NotesList.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Dec 2015 11:02:55 GMT -->
<head>
<script type="text/javascript">
$(document).ready( function() {
  // init Isotope
  var $grid = $('.masonry-grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows',
    getSortData: {
      name: '.nameitem',
       pricede: '#price parseInt',
      priceas: '#price parseInt',
      number: '.nameitem',
      category: '[data-category]',
      weight: function( itemElem ) {
        var weight = $( itemElem ).find('.weight').text();
        return parseFloat( weight.replace( /[\(\)]/g, '') );
      }
    }
  });


   $('select').on('change', function() {
    var value = this.value;
    //alert(value);  

   if(value == "number")
    {
      $grid.isotope({ sortBy: value , sortAscending : false });
    }
    else if(value == "name")
    {
      $grid.isotope({ sortBy: value , sortAscending : true });
    }
    else if(value == "pricede")
    {
      $grid.isotope({ sortBy: value , sortAscending : false });
    }
    else if(value == "priceas")
    {
      $grid.isotope({ sortBy: value , sortAscending : true });
    }

});

});

</script>

</head>
<body>
<div id="page"> 
  <!-- Top Bar -->
 
  <!-- Top Bar --> 
<section id="" class="page-section light-bg">
            <div class="image-bg content-in fixed">
                
            </div>
            
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12 col-md-offset-1 icons-circle icons-bg-color fa-1x">
                          <div class="col-md-2" style="width: 12.666667%;padding-right: 0px;">
                               <?php

                                    echo $this->Form->select('programsearch', $program , array('empty' => 'All Program','id'=>'programsearch','class' => 'form-control','style'=>'background: #E5E5E5;border-radius: 0px;'));


                                    ?>
                          </div>
                              
                           <form method="post" action="<?=SITEURL; ?>notelist/notfound">
                           <div class="col-md-6 paddingclass">
                                <input type="text"  name="searchtext" id="searchtext" autocomplete="off"
                                 class="form-control" onkeyup="fillonkeypress()" style="margin-bottom:0px;background: white;border-radius: 0px;"/>
                                 <div id="displaysearch"></div>
                           </div>
                                  <div class="col-md-2" style="padding-left:0px">
                                <input type="submit" name="submit" value="Search" class="myButton1 hvr-grow" />
                                <input type="hidden" name="programsearchtxt" value="" id="programsearchtxt">
                                </div>
                                </form>


                                 
                        </div>
                            <!-- Icon -->
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
            
        </section>
 
  
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
                  <select class="form-control" data-sort-value="original">
                   <option value="selectitem">plese select</option>


                    <option value="name" data-sort-value="name">Sortby Name Accending</option>
                    <option value="number" data-sort-value="number">Sortby Name Decending</option>
                     <option value="pricede" data-sort-value="pricede">Sortby Price Decending</option>
                      <option value="priceas" data-sort-value="priceas">Sortby Price Accending</option>
                    
                  </select>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-4">
              <a href="<?=SITEURL; ?>notelist/gridlist"><button class="btn btn-default active" type="button">All</button></a>
            </div>
            <div class="col-md-4">
              <a href="<?=SITEURL; ?>notelist/gridlistfree"><button class="btn btn-default" type="button" style="padding: 9px 14px;">Free</button></a>
            </div>
            <div class="col-md-4">
              <a href="<?=SITEURL; ?>notelist/gridlistpr"><button class="btn btn-default" type="button">Premium</button></a>
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
              <div class="grid-item all webb white-bg <?php echo $note->resource_id;?>" data-category="transition">
                <div class="img-wrapper  portfolio-grid ">
                  <div class="grids">
                    <div class="grid"> <img width="370" height="370" class="img-responsive" alt="" src="<?=SITEURL; ?>webroot/img/no-image.jpg">
                      <div class="figcaption">
                        <div class="caption-block">
                          <p><?php echo $note->name_of_resourse ?></p>
                        </div>
                        <!-- Image Popup--> 
                        <a data-rel="prettyPhoto[portfolio]" href="<?=SITEURL; ?>webroot/img/no-image.jpg"> <i class="icon-search text-white border-color"></i> </a> <a href="#view" class="js-open-modal-right"> <i class="icon-eye text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Views">3</i> </a> <a href="#"> <i class="icon-download text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Downloads">10</i> </a> <a href="#"> <i class="icon-comments text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Comments">20</i> </a> </div>
                    </div>
                  </div>
                </div>
                <div class="destination-box">
                    <div class="nameitem"><h5><?php echo $note->name_of_resourse ?></h5></div>
                    <?php $rating= round($note->rating , 1); ?>
                  <p class="pull-right"> <img src="<?= SITEURL; ?>webroot/img/rating/<?php echo $rating; ?>.png" alt=""  /></p>
                  <p><strong>Author - <span class="text-color"><?php echo $note->u['fname'].$note->u['mname'].$note->u['lname']; ?></span></strong></p>
                  <p><strong>Price - <span class="text-color" id="price"><?php echo $note->totalprice ?></span></strong></p>
                  <div class="row">
                    <div class="col-md-6"> <a href="<?php echo SITEURL?>notedetails/index/<?php echo $note->note_id;?>" class="btn btn-default">View Details</a> </div>
                    <div class="col-md-6"> <a style="margin-right: 5px; float: right" href="#view" class="js-open-modal-right" data-toggle="tooltip" data-placement="top" title="Add to Bag"><img width="35" height="35" src="<?=SITEURL; ?>webroot/img/no-image.jpg"></a> </div>
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
    //alert("hi");
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
