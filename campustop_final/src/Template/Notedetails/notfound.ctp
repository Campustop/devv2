
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
  <section id="works" class="page-section light-bg">
    <div class="container hotel-tab" role="tabpanel">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="contact-form">
              <form action="#" method="post" id="contactform" name="contactform" role="form" novalidate class="bv-form">
                <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
             
             
              </form>
            </div>
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
              <div class="grid-sizer"></div><div style="margin-left: 42%;">
              <?php 
               $data = "";
                if(isset($searchtext))
                {
                    if($searchtext !="")
                    {
                      $data =  '"'.$searchtext.'"';
                    }
                else
                    {
                      $data =  "Record";
                    }
                }


                    ?>
                <?php echo $data;?> Note found.</div></div>
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