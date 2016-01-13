<style>
.grid-item
{
  width:100%;
}  
.paddingclass
{
  padding: 0px;
}
.myButton1 {
    background: #ff9900 linear-gradient(to bottom, #ff9900 5%, #ff9900 100%) repeat scroll 0 0;
    /* border: 1px solid #d6bcd6; */
    /* border-radius: 5px; */
    /* box-shadow: 2px 2px 0 0 #C0C0C0; */
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-family: Arial;
    font-size: 17px;
    /* margin-left: 27.5%; */
    padding: 3px 18px;
    text-decoration: none;
    text-shadow: 0 1px 0 #e1e2ed;
        padding-bottom: 4.5%;
}
</style>
<!-- Custom Js Code --> 

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
      number: '.number parseInt',
      category: '[data-category]',
      date: function (itemElem) {
            return Date.parse($( itemElem ).find('.date').text());
        },
      weight: function( itemElem ) {
        var weight = $( itemElem ).find('.weight').text();
        return parseFloat( weight.replace( /[\(\)]/g, '') );
      }
    }
  });

  // bind sort button click
  $('.sort-by-button-group').on( 'click', 'button', function() {
   // var sortValue = $(this).attr('data-sort-value');
    $grid.isotope({ sortBy: sortValue });
  });


   $('#sorting').on('change', function() {
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
    else if(value == "dateas")
    {
      $grid.isotope({ sortBy: 'date', sortAscending : true });
    }
    else if(value == "datedec")
    {
      $grid.isotope({ sortBy: 'date', sortAscending : false });
    }


});




  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });


  
});

</script>
<style>
.grid-item
{
  width:100%;
} 
.list-group-item:before {
    content: "";
}
</style>


<div id="page"> 
  <!-- Top Bar -->
 
  <!-- Top Bar --> 
  <!-- Sticky Navbar -->
 
  <!-- Sticky Navbar -->
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
                              
                           <form method="post" action="">
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
                           
                           

                           
                            
                            
                            
                        </div>
                    </div>
                </div>
            
        </section>
  <!-- page-header -->
  <section id="works" class="page-section light-bg">
    <div class="container hotel-tab" role="tabpanel">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="contact-form">
              <form action="#" method="post" id="contactform" name="contactform" role="form" novalidate class="bv-form">
                <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
             
                <select class="form-control" data-sort-value="original" id="sorting">
                   <option value="selectitem">plese select</option>


                    <option value="name" data-sort-value="name">Sortby Name Accending</option>
                    <option value="number" data-sort-value="number">Sortby Name Decending</option>
                     <option value="pricede" data-sort-value="pricede">Sortby Price Decending</option>
                      <option value="priceas" data-sort-value="priceas">Sortby Price Accending</option>
                      <option value="dateas" data-sort-value="dateas">Sortby Date Accending</option>
                       <option value="datedec" data-sort-value="datedec">Sortby Date Decending</option>
                      
       
                    
                    
                  </select>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-4">
              <a href="<?=SITEURL; ?>notelist"><button class="btn btn-default active" type="button">All</button></a>
            </div>
            <div class="col-md-4">
              <a href="<?=SITEURL; ?>notelist/notlistfree"><button class="btn btn-default" type="button" style="padding: 9px 14px;">Free</button></a>
            </div>
            <div class="col-md-4">
              <a href="<?=SITEURL; ?>notelist/notelistpr"><button class="btn btn-default" type="button">Premium</button></a>
            </div>
          </div>
          <div class="col-md-4">
            <ul role="tablist" class="nav nav-tabs">
              <li role="presentation" class="active"><a href="notelist" ><i class="icon-th-list2 fa-2x"></i></a></li>
              <li role="presentation"><a href="notelist/gridlist" ><i class="icon-th fa-2x"></i></a></li>
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
          <div role="tabpanel" class="tab-pane active" id="list" >
            <div class="filter-menu">
              <ul class="nav black works-filters text-center" id="filters">
                <li class="filter active" data-filter=".all">Show All</li>
                  <li class="filter" data-filter=".3">Notes</li>
                <li class="filter" data-filter=".5">Video</li>
                <li class="filter" data-filter=".6">Reserch Paper</li>
                <li class="filter" data-filter=".7">Case Study</li>

              </ul>
            </div>
            <div class="masonry-grid grid-col-12">
              <div class="grid-sizer"></div>
              <!-- Item 1 -->
              <?php if(count($note1)>0)

                              {
                                ?>
                <?php foreach ($note1 as $note)
                      {

                          //$avgrating=$this->requestAction('Notelist/ratingcal/'.$note->note_id);

                        //$avgrating = NotelistController::ratingcal($note->note_id);

                        $avgrating = 1.5;

                        
                 ?>

              <div class="grid-item all webb white-bg <?php echo $note->resource_id;?>" data-category="transition">
                <div class="row notelist <?php echo $note->resource_id;?>"  style="position: static; !important" data-category="<?php echo $note->resource_id;?>">

                 <div class="col-sm-4 col-md-4">
                    <div class="img-wrapper  portfolio-grid ">
                      <div class="grids">
                        <div class="grid"> <img width="100%" height="100%" src="<?=SITEURL; ?>webroot/img/no-image.jpg" alt="" class="img-responsive">
                          <div class="figcaption">
                            <div class="caption-block">
                              <p><?php echo $note->name_of_resourse ?></p>
                            </div>
                            <!-- Image Popup--> 
                            <a data-rel="prettyPhoto[portfolio]" href="<?=SITEURL; ?>webroot/img/no-image.jpg"> <i class="icon-search text-white border-color"></i> </a> <a href="#view" class="js-open-modal-right"> <i class="icon-eye text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Views">3</i> </a> <a href="#"> <i class="icon-download text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Downloads">10</i> </a> <a href="#"> <i class="icon-user text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Users">7</i> </a> <a href="#"> <i class="icon-comments text-white border-color" data-toggle="tooltip" data-placement="bottom" title="Comments">20</i> </a> </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-7 col-md-7">
                    <div class="nameitem"><h5><?php echo $note->name_of_resourse ?></h5></div>
                    <p class="pull-right"><img src="<?= SITEURL; ?>webroot/img/rating/<?php echo $avgrating;?>.png" alt=""  /> </p>
                    <p><strong>Author - <span class="text-color"><?php echo $note->user->fname.$note->user->mname.$note->user->lname; ?></span></strong></p>
                    <p><strong>Price - <span class="text-color" id="price"><?php echo $note->totalprice ?></span><span class="date"><?php $note->created_dt?></span></strong></p>
                    <p><strong>Description - </strong></p>
                    <p style="width:100%;"><?php echo $note->description_resourse ?></p>
                    <div class="row">
                      <div class="row">
                        <div class="col-md-3"> <a href="#" class="btn btn-default">View Details</a> </div>
                        <div class="col-md-9"> <a style="margin-right: 5px; float: left" href="#view" class="js-open-modal-right" data-toggle="tooltip" data-placement="top" title="Add to Bag"><img width="40" height="40" src="<?=SITEURL; ?>webroot/img/bag.png"></a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-1 col-md-1">
                    <div class="post-thumb"> <img width="84" height="84" title="" alt="" src="<?=SITEURL; ?>webroot/img/no-image.jpg" class="img-wrapper"></div>
                    <div data-animation="fadeInRight" class="animated fadeInRight visible" style="float:right;">
                      <div class="animated fadeInRight icon-3 color-icons visible top-pad-10" data-animation="fadeInRight">
                        <ul>
                          <li> <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/cakephp3/Notedetails/index/8" target="_blank"> <span class="pe-so-facebook"></span> </a></li>
                          <li><a href="https://twitter.com/intent/tweet?url=http://localhost/cakephp3/Notedetails/index/8&text=TEXT&via=YOURTWITTERACCOUNTNAME" target="_blank"> <span class="pe-so-twitter"></span> </a></li>
                          <li> <a href="https://plus.google.com/share?url={http://cs.spunktek.com/campustop/home}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"> <span class="pe-so-google-plus"></span> </a></li>
                          <li> <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://localhost/cakephp3/Notedetails/index/8" target="_blank"> <span class="pe-so-linkedin"></span> </a></li>
                        </ul>
                      </div>
                    </div>
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
            
         
              <!-- Item 4 -->
            
              <!-- Item 5 -->
          
           
             
            
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>

<!-- Mirrored from 64.110.130.68/~techaddict/campustop/NotesList.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Dec 2015 11:05:19 GMT -->

  
  
  <!-- footer -->

</div>
<a href="#0" class="cd-top"><i class="glyphicon glyphicon-arrow-up"></i></a> 

<script type="text/javascript" src="<?=SITEURL; ?>webroot/js/isotope.min.js"></script> 
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




/*var $divs = $("div.notelist");



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
});*/





  </script> 