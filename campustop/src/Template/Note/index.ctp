<script src="<?= SITEURL; ?>webroot/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?= SITEURL; ?>webroot/js/load-image.all.min.js"></script> 
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?= SITEURL; ?>webroot/js/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?= SITEURL; ?>webroot/js/jquery.iframe-transport.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-image.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-video.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-audio.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-validate.js"></script>
<style type="text/css">
  <style type="text/css">
  html,body{
  margin: 0px;
  padding: 0px;
  font-family: Georgia, "Times New Roman", Times, serif;
}
h2{
  text-align: center;
  margin: 50px 0 0;
  color: #848484;
  padding: 0;
  font: 1.5em "Trebuchet MS", Arial, Helvetica, sans-serif;
}
.upload-wrapper {
    max-width: 500px;
    background-color: #E4E4E4;
   
    border: 1px solid #ff9900 ;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.14);
    -webkit-box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.14);
  -moz-box-box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.14);
}
.priceset 
{
     
      margin-left: 2%;
}
 .bar { 
            position: absolute;
            height: 18px; 
            background: blue; 
            width: 0%;
            top: 50%;
        }
        .box {
            position: relative;
            background: palegreen;
            width: 200px;
            min-height: 200px;
            margin: 40px;
        }
        .boxhover {
            background: lawngreen;
        }

.price
{
  display: none!important;
  width:5%;
}
.changeprice
{
  margin-right:2%;
  width:5%;
}
#dropzone{
    border: 1px solid #C7C7C7;
    padding: 20px;
    text-align: center;
    box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
    -webkit-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
    -moz-box-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
    border-radius: 3px;
}
#dropzone i{
    display: block;
    font-size: small;
    margin-bottom: 5px;
    color: #CACACA;
    text-shadow: 1px 1px 1px #fff;
}
#dropzone1{
    border: 1px solid #C7C7C7;
    padding: 20px;
    text-align: center;
    box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
    -webkit-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
    -moz-box-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
    border-radius: 3px;
}
#dropzone1 i{
    display: block;
    font-size: small;
    margin-bottom: 5px;
    color: #CACACA;
    text-shadow: 1px 1px 1px #fff;
}
#dropzone2{
    border: 1px solid #C7C7C7;
    padding: 20px;
    text-align: center;
    box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
    -webkit-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
    -moz-box-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
    border-radius: 3px;
}
#dropzone2 i{
    display: block;
    font-size: small;
    margin-bottom: 5px;
    color: #CACACA;
    text-shadow: 1px 1px 1px #fff;
}
.input-file {
    position: relative;
    overflow: hidden;
}
.input-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
  -ms-filter: 'alpha(opacity=0)';
    opacity: 0;
    outline: none;
    background: white;
    cursor: pointer;
    display: block;
}
.button{
    position: relative;
    overflow: hidden;
    font-family: inherit;
    padding: .5em 1em;
    color: #444;
    color: rgba(0,0,0,.8);
    border: 1px solid #999;
    border: 0 rgba(0,0,0,0);
    text-decoration: none;
    border-radius: 2px;
    display: inline-block;
    color: #fff;
    font-size: 0.8em;    
  margin-left: 2px;
}
.button:hover{
   box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.4);
    -moz-box-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.4);
}
.button:disabled{
    background-color: #D4D4D4;
    color: #B1B1B1;
    text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.52);
  box-shadow:none;
  -moz-box-box-shadow:none;
  -webkit-box-shadow:none;
}
.btn-blue{
    background-color: #ff9900;
}
.btn-red{
  background-color: #EA6363;
  margin-left: 6%;
}
.file-row {
    padding: 3px;
    background-color: #DCDCDC;
    margin-top: 0px;
    box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.04);
    -webkit-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.04);
    -moz-box-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.04);
    
  min-height:50px;
}
.file-row video{
    width:100%;
}
.file-row audio{
    width:100%;
}

.file-row .file-remove{
    float: right;
    margin-top: 2%;
    text-decoration: none;
    color:#848484;
}
.file-uploaded{
    background-color: #D2D6E0;
}
.file-row canvas{
    float: left;
    margin-right: 10px;
}
.file-row span {
    font-size: small;
    color: #848484;
    margin-bottom: 4px;
    max-width: 300px;
    overflow: hidden;
    max-height: 16px;
}
.progress{
    background-color: #FFF;
    height: 10px;
    overflow: hidden;
    display: block;
    border: 1px solid rgba(0, 0, 0, 0.3);
    padding: 1px;
    width: 100px;
    border-radius: 6px;    
 
}
.progress .progress-bar {
    background-color: rgba(67, 196, 218, 0.99);
    width: 0;
    height: 10px;
    float: left;
    text-align: center;
    border-radius: 10px;
    font-size: 9px;
    box-shadow: inset 0px 0px 9px rgba(49, 74, 56, 0.42);
    -webkit-box-shadow: inset 0px 0px 9px rgba(49, 74, 56, 0.42);
    -moz-box-box-shadow: inset 0px 0px 9px rgba(49, 74, 56, 0.42);
}
#error_output{
  color: red;
}
.text-danger, .text-success{
    float: left;
    margin-top: -10px;
    font-style: italic;
}
.text-danger {
    color: #F00!important;
}
.text-success{
    color: #0CAF00!important;
}

</style>
<script>
$(document).ready(function() 
{

var count =0;

$("#addtag").click(function () {

    //alert(count);
 //Append a new row of code to the "#items" div
 if(count<4)
 {
     $("#test1").append(' <div class="col-md-3"></div><div class="col-md-9"><input type="text" name="tag" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" class="input-name form-control"  placeholder="tag"  value="" /></div>');
}
else
{
 
 alert("More than five tags are not allowed.");

}

count++;
});

$("#read_at").click(function () {


     $("#read1").append(' <div class="col-md-3"></div><div class="col-md-9"><input type="text" name="read_at[]" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" class="input-name form-control"  placeholder="Conferences/Seminars where paper was read"  value="" /></div>');

});

$("#team").click(function () {


     $("#team1").append(' <div class="col-md-3"></div><div class="col-md-9"><input type="text" name="team_member[]" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" class="input-name form-control"  placeholder="Conferences/Seminars where paper was read"  value="" /></div>');

});

$("#under").click(function () {


     $("#under1").append(' <div class="col-md-3"></div><div class="col-md-9"><input type="text" name="under_gidance[]" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" class="input-name form-control"  placeholder="Make your Guide/Mentor famous"  value="" /></div>');

});
$("#resourse").change(function(){

        var value = $( "#resourse" ).val();

        if(value == 5)
        {
         $("#video").show("slow");
         $("#notes").hide("slow");
         $("#research").hide("slow");
         $("#casestudy").hide("slow");
        
        }
        else if(value == 6)
        {
            $("#notes").hide("slow");
            $("#research").show("slow");
            $("#video").hide("slow");
             $("#casestudy").hide("slow");
        }
        else if(value == 3)
        {
            $("#notes").show("slow");
            $("#research").hide("slow");
            $("#video").hide("slow");
             $("#casestudy").hide("slow");
        }
         else if(value == 7)
        {
            $("#casestudy").show("slow");
            $("#notes").hide("slow");
            $("#research").hide("slow");
            $("#video").hide("slow");
        }
        else
        { 
          $("#notes").hide("slow");
          $("#research").hide("slow");
          $("#video").hide("slow");
          $("#casestudy").hide("slow");
        } 
});

$(function(){
            var sampleTags = ['c++'];
            
            $('.singleFieldTagsnote').tagit({
                      availableTags: sampleTags,
                      allowSpaces: true
            });

           
            
        });

});

</script>

 <script type="text/javascript">
$(document).ready(function() 
{
 
  /* dropdown and filter select */
  var bannedWords = ["cat", "dog", "test","madhuri","nidhi"],
  regex = new RegExp('\\b' + bannedWords.join("\\b|\\b") + '\\b', 'i');

//console.log(regex); 
//console.log(regex.test(this.value));  

$( "#noteform" ).submit(function( event ) {
//  $( "#noteform" ).focus(function() {

  //alert("hello");
 
 var val = $('#description_resourse').val();

  
  //alert(val);
    
    if(!val)
  {
    
       $("#messageblank").show("slow");
       $('#description_resourse').addClass('bordered');  
       return false;
  }
    //alert(regex);
if(!regex.test(val))
  {
    //alert("valid");
    $("#messagevalid").show();
    $('#description_resourse').addClass('borderdgreen');  
    
    $("#messagenotvalid").hide("slow");
      $("#messageblank").hide("slow");
  
    return true;
  }
  else if(regex.test(val))
  {
      data = val+ " is not a proper word.";
      $("#messagenotvalid").show("slow");
     $("#messagevalid").hide("slow");
       $("#messageblank").hide("slow");
       $('#description_resourse').addClass('bordered');  
       $('#description_resourse').removeClass('borderdgreen'); 
       $('#messagenotvalid').html(data); 
    return false;

  }
    
  return true;
  
});

$( "#description_resourse" ).blur(function() {
  
  //alert("hello");
 
 var val = $('#description_resourse').val();

  
  //alert(val);
    
    if(!val)
  {
    
       $("#messageblank").show("slow");
       $('#description_resourse').addClass('bordered');  
       return false;
  }
    //alert(regex);
if(!regex.test(val))
  {
    //alert("valid");
    $("#messagevalid").show();
    $('#description_resourse').addClass('borderdgreen');  
    
    $("#messagenotvalid").hide("slow");
      $("#messageblank").hide("slow");
  
    return true;
  }
  else if(regex.test(val))
  {
      data = val+ " is not a proper word.";
      $("#messagenotvalid").show("slow");
     $("#messagevalid").hide("slow");
       $("#messageblank").hide("slow");
       $('#description_resourse').addClass('bordered');  
       $('#description_resourse').removeClass('borderdgreen'); 
       $('#messagenotvalid').html(data); 
    return false;

  }
    
  return true;

});




//return true;
  
  /* Select2 plugin as tagpicker */
 

}); //script         
     
      </script>
<style type="text/css">
.nav-tabs>li {

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

.submit_btn {
   background:url("http://localhost/cakephp3/webroot/img/plus.jpg") no-repeat;
  border: medium none !important;
  width: 10%;
  height: 8%;
    /*margin-left: 55.5%;*/
  color: transparent;
  float: right;
    
}
.hrstyle
{
  background-color: #ff9900;
    border: medium none;
    box-shadow: 0 2px 2px #c0c0c0;
    display: block;
    height: 1px;
    margin-bottom: 3%;
}

.bordered {
    border: 1px solid #f00;
}
.borderdgreen{

  border: 1px solid #00a65a;
  
}
ul.tagit {
  padding: 0;
  border-radius: unset;
  margin-left: 11% !important;
  }
.ui-widget {
    width: 70%;
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
                                    <i class="fa fa-home"></i> Notes Upload</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content" style="">
                                <div role="tabpanel" class="tab-pane active" id="home1" style="padding-left:1%;padding-right:1%;">
            <section id="contact-us" class="page-section">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 contact-info">
                            
                        </div>
                    </div>
                    <hr class="pad-10">
                      <div class="row">
                         <?= $this->Flash->render('positive') ?>
                          <?= $this->Flash->render('update') ?>
                           <?= $this->Flash->render('nagative') ?>
                            <p class="form-message" style="display: none;"></p>
                
                                <?php //$this->Form->create($note,['action' => 'add','id' => 'noteform']) ?>
                                  <form id="noteform" method="post" action="Note/add">
                                                          <div class="col-md-6">
                                                                     <div class="col-md-12 input-text form-group">
                                                                         <div class="col-md-4">
                                                                            <label>Name of resourse:</label> 
                                                                                        </div>

                                                                                <div class="col-md-8">
                                                                                     <input type="text" name="name_of_resourse" class="input-name form-control" placeholder="Eg. Introduction" value="" />

                                                                                     
                                                                                </div>
                                                                      </div>

                                                                       <div class="col-md-12 form-group">
                                                                                        <div class="col-md-4">
                                                                                        <label >Collage:</label> 
                                                                                        </div>
                                                                                         <div class="col-md-8">
                                                                                             <?php echo $this->Form->select('collage_id', $collage, array('class'=>'input-email form-control','empty' => 'Collage'));?>
                                                                                             </div>
                                                                        </div>
                                                                         <div class="col-md-12 form-group">
                                                                                        <div class="col-md-4">
                                                                                        <label >Collage:</label> 
                                                                                        </div>
                                                                                         <div class="col-md-8">
                                                                                             <?php echo $this->Form->select('country_id', $country_name, array('class'=>'input-email form-control','empty' => 'Country'));?>
                                                                                             </div>
                                                                        </div>
                                                                         <div class="col-md-12 form-group">
                                                                                         <div class="col-md-4">
                                                                                        <label >Restrict resourse to collage?</label> 
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                           <input type="radio" name="collage_restricted" value="Y"  > Yes
                                                                                            <input type="radio" name="collage_restricted" value="N"> No
                                                                                            </div>
                                                                         </div>

                                                                         <div class="col-md-12 form-group">
                                                                                        <div class="col-md-4">
                                                                                         <label >Program/Major</label> 
                                                                                         </div>
                                                                                          <div class="col-md-8">
                                                                                            <?php echo $this->Form->select('program_id', $program, array('class'=>'input-email form-control','empty' => 'Choose major'));?>
                                                                                            </div>  
                                                                                        </div>
                                                                         <div class="col-md-12 form-group">
                                                                                        <div class="col-md-4">
                                                                                         <label >Degree</label> 
                                                                                         </div>
                                                                                          <div class="col-md-8">
                                                                                            <?php echo $this->Form->select('degree_id', $degree, array('class'=>'input-email form-control','empty' => 'Choose Degree'));?>
                                                                                            </div>
                                                                                        </div>

                                                                         <div class="col-md-12 input-text form-group" id="test1">
                                                                                         <div class="col-md-3">
                                                                                        <label >Tag</label> 
                                                                                        </div>
                                                                                         <div class="col-md-9">
                                                                                           <!-- <input type="text" name="tag[]" class="input-name form-control" placeholder="tag"  value="" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" /><input type="button" class="submit_btn" id="addtag"><span > </span>-->

                                                                                            <input type="text" id="singleFieldTagsnote" name="tag[]" class="singleFieldTagsnote input-name form-control" placeholder="tag" value="" style="width: 69%;margin-left: 12%;margin-bottom: 3%;">
                                                                                            </div>


                                                                        </div>

                                                                        <div class="col-md-12 input-text form-group">
                                                                                         <div class="col-md-4">
                                                                                        <label >Description of the resourse:</label> 
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                            <textarea style="height: 120px; width: 248px;"name="description_resourse" id="description_resourse"></textarea>

                                                                                        <div style="display:none;" id="messageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>

                                                                                            <div style="display:none;color: #a94442;" id="messagenotvalid">Words are proper words<i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>

                                                                                            <div style="display:none;color: 00a65a;" id="messagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                                            </div>
                                                                        </div>

                                                                         <div class="col-md-12 form-group">
                                                                                        <div class="col-md-4">
                                                                                         <label >Type of Resourse:</label> 
                                                                                         </div>
                                                                                         <div class="col-md-8">
                                                                                            <?php echo $this->Form->select('resource_id', $resource_name, array('class'=>'input-email form-control','empty' => 'Choose resourse', 'id'=>'resourse'));?>
                                                                                            <?php echo $this->Form->hidden('created_dt', ['value'=>time()]);
                                                                                            ?>

                                                                                            </div>
                                                                        </div>
                                                                </div>
                                                              <div class="row">
                                                                      <div class="col-md-12" id="video" style="display:none;">
                                                                          <?php  include('video.ctp');?>
                                                                      </div>
                                                                      <div class="col-md-12" id="notes" style="display:none;">
                                                                          <h3>Notes</h3>
                                                                          <?php include 'notes.ctp';?>

                                                                      </div>
                                                                      <div class="col-md-12" id="casestudy" style="display:none;">
                                                                           <h3>Case Study</h3>
                                                                          <?php include 'casestudy.ctp';?>

                                                                      </div>

                                                                        <div class="col-md-12" id="research" style="display:none;">

                                                                      <?php  include('research.ctp');?>

                                                                       </div>
                                                                      </div>
                                                    

                                                            <div>
                                                                <?php //echo $this->Form->input('Save', ['type' => 'submit','class'=>'myButton hvr-grow']);?>

                                                                <input type="submit" value="Save" class="myButton hvr-grow">
                                                            </div>
                                          <?php //echo $this->Form->end(); ?>
                               </form>
                  </div>
      </div>
  </section><!-- page-section -->
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile1">
                                   
                                    <?php //include 'education.ctp';?>
                                </div>
                               
                        </div>
                    </div>
                </div>

            </div>
            </section>
            </nav>