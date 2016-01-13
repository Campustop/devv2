
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Mist — Multi-Purpose HTML Template" />
        <meta name="author" content="zozothemes.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Home \ Campustop</title>
        <!-- Favicon -->
       <!-- <link rel="shortcut icon" href="img/favicon.ico" />-->
        <link href="<?= SITEURL; ?>webroot/img/favicon.ico" type="text/css" rel="stylesheet">
        <!-- Font -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic' />
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
        <!-- Font Awesome Icons -->
     
         <link href="<?= SITEURL; ?>webroot/css/font-awesome.min.css" type="text/css" rel="stylesheet">

         <link href="<?= SITEURL; ?>webroot/css/bootstrap.min.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/hover-dropdown-menu.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/icons.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/revolution-slider.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/rs-plugin/css/settings.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/animate.min.css" type="text/css" rel="stylesheet">
       
       	<link href="<?= SITEURL; ?>webroot/css/owl/owl.carousel.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/owl/owl.theme.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/owl/owl.transitions.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/style.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/color.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/responsive.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/prettyPhoto.css" type="text/css" rel="stylesheet">
         <script src="<?= SITEURL; ?>webroot/js/jquery.min.js"></script> 

         
    

        
        <script src="<?= SITEURL; ?>webroot/js/bootstrap.min.js"></script>
         <script src="<?= SITEURL; ?>webroot/js/jquery.validate.js"></script>
           <script src="<?= SITEURL; ?>webroot/js/pwstrength.js"></script>
        
         
<script type="text/javascript">

$(document).ready( function() {
  
   $('#programsearch').on('change', function() {
    var value = this.value;
    //alert(value);  
    $("#programsearchtxt").val(value);

});

   });

function fillonkeypress() {

       var name1 = $('#searchtext').val();
       var progid1 = $("#programsearchtxt").val();
       //alert(name1);
        $.ajax({
        type: "POST",
        url:"<?php echo SITEURL.'search/index/'; ?>",
        data: { name : name1, progid : progid1},
        success: function(html){
            
        $("#displaysearch").html(html).show();
        }
        });


}
function fill(Value)
{
    $('#searchtext').val(Value);
    $('#displaysearch').hide();

    //fillonkeypress();
}
</script>
        
    	
    </head>
    <body>
    <div id="page">
    <!-- Page Loader -->
    <div id="pageloader">
      <div class="loader-item fa fa-spin text-color"></div>
    </div>
        <!-- Top Bar -->
        <div id="top-bar" class="top-bar-section top-bar-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                         <div class="top-contact link-hover-black">
                                   <select name="country" id="country" class="form-control" onchange="setcountry(this.value)" data-show-icon="true">
                                    <option>Select country</option>
                                     <?php 

                                     foreach ($country as $list):
                                      ?>
                                              <option data-icon="<i class='fa fa-flag-sa'></i>" value="<?php echo $list['country_id']?>" <?php if($list['country_id']==$this->request->session()->read('country')){ echo "selected";}?>>
                                                
                                                  <?php echo ucwords($list['country_name']);?>




                                              </option>

                                               

                                  <?php endforeach; ?>
                            </select>
                        </div>
                      
                        
                        <!-- Top Social Icon -->
                        <div class="top-social-icon icons-hover-black">
                       <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a> 
                        
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a> 
                        
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a></div>
                    </div>
                 
                </div>
            </div>
        </div>
        <!-- Top Bar -->
        <!-- Sticky Navbar -->
         
        
       
   
    <?= $this->element('header') ?>
       
      
    <?= $this->fetch('content'); ?>
    <?= $this->element('footer') ?>  
       
        
        <!-- request -->

        
   
   
    <!-- Scripts --></body>
</html>

<script type="text/javascript">
function setcountry(value)
{
 
  $.ajax({
               type:"POST",
               url:"<?php echo SITEURL.'home/setcountry';?>",
               data: {country:value},
               success: function(data)
               {
                  
                 
               }
              });
}
</script>


