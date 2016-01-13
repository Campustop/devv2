
<script>
$(document).ready(function() 
{
    $("#bindstate").change(function(){
    
    var city=$("#bindstate").val();
     $.ajax({
                type:"POST",
                    url:"<?php echo SITEURL.'profile/getcity'; ?>",
                     data: {cityid:city},
                      dataType:"json",
                    success: function(data)
                    {
                        var html = '<option value=""><?php echo "choose city"; ?></option>' ;
                          $.each(data, function (i, item) {

                            html += '<option value="'+item.city_id+'">'+item.city_name+'</option>';
                           });
      
                        $('#bindcity').html(html);
                    }
            });
    
    });
$("#stateclass").change(function(){
    
    var country=$("#stateclass").val();
    //alert(country);
     $.ajax({
                    type:"POST",
                    url:"<?php echo SITEURL.'profile/getprovince'; ?>",
                     data: {countryid:country},
                      dataType:"json",
                    success: function(data)
                    {
                        var html = '<option value=""><?php echo "choose province"; ?></option>' ;
                          $.each(data, function (i, item) {

                            html += '<option value="'+item.province_id+'">'+item.province_name+'</option>';
                           });
    
                        $('#bindstate').html(html);
                    }
            });
    
    });
    $('#edit').click(function() {

           $('#attach_box').show();
            $('#edit').hide();
           
          // return false;
       });

 });

 window.onload=function(){
      $('.selectpicker').selectpicker();
      $('.rm-public').click(function() {
        $('.remove-example').find('[value=Public]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.rm-private').click(function() {
        $('.remove-example').find('[value=Private]').remove();
        $('.remove-example').selectpicker('refresh');
      });      
      $('.ex-disable').click(function() {
          $('.disable-example').prop('disabled',true);
          $('.disable-example').selectpicker('refresh');
      });
      $('.ex-enable').click(function() {
          $('.disable-example').prop('disabled',false);
          $('.disable-example').selectpicker('refresh');
      });

      // scrollYou
      $('.scrollMe .dropdown-menu').scrollyou();

      prettyPrint();
      }; 

</script>
<style type="text/css">
.myButton {
    background: #ff9900 linear-gradient(to bottom, #ff9900 5%, #ff9900 100%) repeat scroll 0 0;
    border-radius: 5px;
    box-shadow: 2px 2px 0 0 #c0c0c0;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-family: Arial;
    font-size: 17px;
    margin-left: 2%;
    padding: 3px 18px;
    text-decoration: none;
    text-shadow: 0 1px 0 #e1e2ed;
}
.hvr-grow {
    backface-visibility: hidden;
    display: inline-block;
    transform: translateZ(0px);
    transition-duration: 0.3s;
    transition-property: transform;
    vertical-align: middle;
}
nav-tabs>li
{

   border-left: 1px solid #ddd;
        font-size: 19px;
        
}  

  .nav-tabs {
    
    background-color: #F8F8F8;
}
.form-control {
    display: inline-table;
        width: 79%;

}

select#email_flag option[value="null"]   
{ 

    background-image:url("http://localhost/cakephp3/webroot/img/globe.jpg"); 
      background-repeat: no-repeat;
}

input[type="text"].error, input[type="file"].error, input[type="password"].error,input[type="checkbox"].error textarea.error, select.error {
 border:1px solid #F00!important;
}

label.error {
 color:#ff0000!important;
}
.btn-primary {
    background-color: #CCCCCC;
    border-color: #ffffff;
}
.btn-primary:hover {
    / color: #fff; /
    background-color: #CCCCCC;
    border-color: #ffffff;
    }

</style>

<nav class="navbar navbar-static-top" role="navigation" style="min-height: 45px;background-color:#F1F1F1;border-bottom: 1px solid #D3D7DA;">
       <section id="tabs" class="page-section">
            <div class="" style="">
                    <div class="row">
                    <div class="col-md-12" >
                        <div role="tabpanel" style="background-color: #FFFFFF;">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home1" aria-controls="home" role="tab" data-toggle="tab">
                                    <i class="fa fa-home"></i> My Introduction</a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile1"  aria-controls="profile" role="tab" data-toggle="tab">
                                    <i class="fa fa-user"></i> Education</a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages1" aria-controls="messages" role="tab" data-toggle="tab">
                                    <i class="fa fa-comment"></i>Skills & Interests</a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings1" aria-controls="settings" role="tab" data-toggle="tab">
                                    <i class="fa fa-cogs"></i>Work Experiance</a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings1" aria-controls="settings" role="tab" data-toggle="tab">
                                    <i class="fa fa-cogs"></i>My Activity</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content" style="">
                                <div role="tabpanel" class="tab-pane active" id="home1" style="padding-left:1%;padding-right:1%;">

                                    <?php include 'basic.ctp';?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile1">
                                   
                                    <?php include 'education.ctp';?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages1">
                                    <?php include 'skill.ctp';?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings1">
                                    <?php include 'work.ctp';?>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </section>
            </nav>
        