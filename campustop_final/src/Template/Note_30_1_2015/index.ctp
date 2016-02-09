<script src="<?= SITEURL; ?>webroot/js/vendor/jquery.ui.widget.js"></script>
<script src="<?= SITEURL; ?>webroot/js/load-image.all.min.js"></script> 
<script src="<?= SITEURL; ?>webroot/js/canvas-to-blob.min.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.iframe-transport.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-process.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-image.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-video.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-audio.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-validate.js"></script>
<link href="<?= SITEURL; ?>webroot/css/notestyle.css" type="text/css" rel="stylesheet">
<script>
$(document).ready(function() 
{
    var count =0;
    $("#addtag").click(function () 
    {
        if(count<4)
        {
          $("#test1").append(' <div class="col-md-3"></div><div class="col-md-9"><input type="text" name="tag[]" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" class="input-name form-control"  placeholder="tag"  value="" /></div>');
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
$("#resourse").change(function()
{

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
  var bannedWords = ["cat", "dog", "test","madhuri","nidhi"],
  regex = new RegExp('\\b' + bannedWords.join("\\b|\\b") + '\\b', 'i'); 
  $( "#noteform" ).submit(function( event ) 
  {
      var val = $('#description_resourse').val();
      var collageid = $('#collage_id').val();
      var programid = $('#programid').val();
      var countryid = $('#countryid').val();
      var degreeid = $('#degreeid').val();
      var resourse = $('#resourse').val();
      var flag=true;
      var flag=true;
      if(resourse==5)
      {

          var youtubelinks = $('#youtubelinks').val();
          if(!youtubelinks)
          {
            $("#youtubelinksmessageblank").show("slow");
            $('#youtubelinks').addClass('bordered'); 
            $("#youtubelinksmessagevalid .fa-times").css({ display: "none" });
            $("#youtubelinksmessagevalid .fa-check").css({ display: "block" });   
            flag = false;
          }
          
      }
if(resourse==3)
      {

        //var agreement = $('#agreement').val();
        
          if($("#agreement").is(':checked'))
          {
            //flag = true;
            $('#agreement').removeAttr('style');
            
          }
          else
          {
           // alert("cccc");
            $("#agreementeblank").show("slow");
            $('#agreement').css('outline-color', 'red');
            $('#agreement').css('outline-style', 'solid');
            $('#agreement').css('outline-width', 'thin');
            $("#agreementvalid .fa-times").css({ display: "none" });
            $("#agreementvalid .fa-check").css({ display: "block" });   
            flag = false;
          }

      }
       if(resourse==6)
      {

          var field = $('#field').val();
          if(!field)
          {
            $("#fieldmessageblank").show("slow");
            $('#field').addClass('bordered'); 
            $("#fieldmessagevalid .fa-times").css({ display: "none" });
            $("#fieldmessagevalid .fa-check").css({ display: "block" });   
            flag = false;
          }

          var readat = $('#read_at').val();
          if(!readat)
          {
            $("#readatmessageblank").show("slow");
            $('#read_at').addClass('bordered'); 
            $("#readatmessagevalid .fa-times").css({ display: "none" });
            $("#readatmessagevalid .fa-check").css({ display: "block" });   
            flag = false;
          }
          var publishin = $('#publishin').val();
          if(!publishin)
          {
            $("#publishinmessageblank").show("slow");
            $('#publishin').addClass('bordered'); 
            $("#publishinmessagevalid .fa-times").css({ display: "none" });
            $("#publishinmessagevalid .fa-check").css({ display: "block" });   
            flag = false;
          }
          var publishonyear = $('#publish_on_year').val();
          if(!publishonyear)
          {
            $("#publishonyearmessageblank").show("slow");
            $('#publish_on_year').addClass('bordered'); 
            $("#publishonyearmessagevalid .fa-times").css({ display: "none" });
            $("#publishonyearmessagevalid .fa-check").css({ display: "block" });   
            flag = false;
          }
          var publishonmonth = $('#publish_on_month').val();

          if(!publishonmonth)
          {
            $("#publishonmonthmessageblank").show("slow");
            $('#publish_on_month').addClass('bordered'); 
            $("#publishonmonthmessagevalid .fa-times").css({ display: "none" });
            $("#publishonmonthmessagevalid .fa-check").css({ display: "block" });   
            flag = false;
          }

          var teammember = $('#team_member').val();
          
          if(!teammember)
          {
            $("#teammembermessageblank").show("slow");
            $('#team_member').addClass('bordered'); 
            $("#teammembermessagevalid .fa-times").css({ display: "none" });
            $("#teammembermessagevalid .fa-check").css({ display: "block" });   
            flag = false;
          }

          var undergidance = $('#under_gidance').val();
          
          if(!undergidance)
          {
            $("#undergidancemessageblank").show("slow");
            $('#under_gidance').addClass('bordered'); 
            $("#undergidancemessagevalid .fa-times").css({ display: "none" });
            $("#undergidancemessagevalid .fa-check").css({ display: "block" });   
            flag = false;
          }
          
          
      }
      if(!val)
      {
          $("#messageblank").show("slow");
          $('#description_resourse').addClass('bordered');
          $("#messagevalid .fa-times").css({ display: "none" });
          $("#messagevalid .fa-check").css({ display: "block" });  
          flag= false;
      }
      if(!collageid)
      {
          
          $("#messageblank1").show("slow");
          $('#collage_id').addClass('bordered'); 
          $("#messagevalid1 .fa-times").css({ display: "none" });
          $("#messagevalid1 .fa-check").css({ display: "block" });   
          flag= false;
      }
      if(!countryid)
      {
          $("#countrymessageblank").show("slow");
          $('#countryid').addClass('bordered');  
          $("#countrymessagevalid .fa-times").css({ display: "none" });
          $("#countrymessagevalid .fa-check").css({ display: "block" });  
            flag= false;
      }
      var nameresourse = $('#nameresourse').val();
      if(!nameresourse)
      {
         $("#nameresoursemessageblank").show("slow");
         $('#nameresourse').addClass('bordered');
         $("#nameresoursemessagevalid .fa-times").css({ display: "none" });
          $("#nameresoursemessagevalid .fa-check").css({ display: "block" });  
         flag= false;
      }
      if(!programid)
      {
          $("#programmessageblank").show("slow");
          $('#programid').addClass('bordered');  
          $("#countrymessagevalid .fa-times").css({ display: "none" });
          $("#countrymessagevalid .fa-check").css({ display: "block" });
           flag= false;
      }
      if(!degreeid)
      {
          $("#degreemessageblank1").show("slow");
          $('#degreeid').addClass('bordered');  
          $("#countrymessagevalid .fa-times").css({ display: "none" });
          $("#countrymessagevalid .fa-check").css({ display: "block" });
           flag= false;
      }
      else if(!resourse)
      {
          $("#degreemessageblank1").show("slow");
          $('#resourse').addClass('bordered');  
          $("#countrymessagevalid .fa-times").css({ display: "none" });
          $("#countrymessagevalid .fa-check").css({ display: "block" });
           flag= false;
      }
      return flag;
      if(!regex.test(val))
      {
            $("#messagevalid").show();
            $('#description_resourse').addClass('borderdgreen');  
            $("#messagenotvalid").hide("slow");
            $("#messageblank").hide("slow");
             return false;
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
        }    
      var resourcename = $('#nameresourse').val();
      checktypeofresourse(resourcename);
      return true;
  
});

$( "#description_resourse" ).blur(function() {
  var val = $('#description_resourse ').val();
  if(!val)
  {
  
     $("#messageblank").show("slow");
     $('#description_resourse').addClass('bordered');  
     $("#countrymessagevalid .fa-times").css({ display: "none" });
      $("#countrymessagevalid .fa-check").css({ display: "block" });
     return false;
  }
    
if(!regex.test(val))
  {
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
});

$( "#nameresourse" ).blur(function() {
    var val = $('#collage_id').val();
    if(!val)
    {
       $("#messageblank1").show("slow");
       $('#nameresourse').addClass('bordered');
       $("#messagevalid .fa-times").css({ display: "none" });
        $("#messagevalid .fa-check").css({ display: "block" });  
       return false;
    }
  return true;
});
$( "#collage_id" ).blur(function() {
    var val = $('#collage_id').val();
    if(!val)
    {
       $("#messageblank1").show("slow");
       $('#collage_id').addClass('bordered');
       $("#messagevalid .fa-times").css({ display: "none" });
        $("#messagevalid .fa-check").css({ display: "block" });  
       return false;
    }
else
    {
      $('#collage_id').removeClass('bordered');
    }
  return true;
});
$( "#programid" ).blur(function() 
{
    var programid = $('#programid').val();
  
    if(!programid)
    {
        $("#programmessageblank").show("slow");
        $('#programid').addClass('bordered');
        $("#programmessagevalid .fa-times").css({ display: "none" });
        $("#programmessagevalid .fa-check").css({ display: "block" });  
        return false;
    }
else
    {
      $('#programid').removeClass('bordered');
    }


    return true;

});
$( "#countryid" ).blur(function() 
{
  
     var countryid = $('#countryid').val();
     
      if(!countryid)
      {
          $("#countrymessageblank").show("slow");
          $('#countryid').addClass('bordered'); 
          $("#countrymessagevalid .fa-times").css({ display: "none" });
          $("#countrymessagevalid .fa-check").css({ display: "block" }); 
          return false;
      }
	else
      {
        $('#countryid').removeClass('bordered');
      }
    return true;

});
$( "#degreeid" ).blur(function() 
{
    var degreeid = $('#degreeid').val();
    if(!degreeid)
    {
        $("#degreemessageblank1").show("slow");
        $('#degreeid').addClass('bordered'); 
        $("#degreemessagevalid .fa-times").css({ display: "none" });
        $("#degreemessagevalid .fa-check").css({ display: "block" }); 
        return false;
    }
	 else
    {
      $('#degreeid').removeClass('bordered');
    }
      
    return true;

});
$( "#resourse" ).blur(function() 
{
    var resourse = $('#resourse').val();
    if(!resourse)
    {
        $("#degreemessageblank1").show("slow");
        $('#resourse').addClass('bordered');
        $("#resoursemessagevalid .fa-times").css({ display: "none" });
        $("#resoursemessagevalid .fa-check").css({ display: "block" });  
        return false;
    }
    return true;

});

$( "#nameresourse" ).blur(function() 
{
    var resourse = $('#nameresourse').val();
    if(!resourse)
    {
       $("#nameresoursemessageblank").show("slow");
       $('#nameresourse').addClass('bordered');
       $("#nameresoursemessagevalid .fa-times").css({ display: "none" });
        $("#nameresoursemessagevalid .fa-check").css({ display: "block" });  
       return false;
    }
    return true;

});
    

}); //script         
</script>
<style type="text/css">


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
                         <?php 
                           //echo $this->request->session()->read('positive');
                        if($this->request->session()->read('notepositive')!="")
                            {?>

                              <script type="text/javascript">
                              $(document).ready(function () { 
                                  noty({
                                    layout: 'center',
                                    type: 'success',
                                    text: 'Note have been upload successfully',
                                    dismissQueue: true, 
                                    animation: {
                                      open: {height: 'toggle'},
                                      close: {height: 'toggle'},
                                      easing: 'swing',
                                      speed: 500 
                                      },
                                    timeout: 0
                                    });     
                             });
                              </script>
                      <?php }?>
                    
                          <?= $this->Flash->render('update') ?>
                           <?= $this->Flash->render('nagative') ?>
                            <p class="form-message" style="display: none;"></p>
                
                                <?php //$this->Form->create($note,['action' => 'add','id' => 'noteform']) ?>
                                  <form id="noteform" method="post" action="Note/addnotedetails">
                                                          <div class="col-md-6">
                                                                     <div class="col-md-12 input-text form-group">
                                                                         <div class="col-md-4">
                                                                            <label>Name of resourse:</label> 
                                                                          </div>
                                                                          <div class="col-md-8">
                                                                                <input type="text" name="name_of_resourse" class="input-name form-control" placeholder="Eg. Introduction" id="nameresourse" onblur="checktypeofresourse(this.value)"/>

                                                                                <div style="display:none;color: #a94442;" id="nameresoursemessagenotvalid">Note title is already exists<i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>

                                                                                <div style="display:none;" id="nameresoursemessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                <div style="display:none;color: 00a65a;" id="nameresoursemessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                          </div>
                                                                      </div>

                                                                       <div class="col-md-12 form-group">
                                                                                        <div class="col-md-4">
                                                                                        <label >Collage:</label> 
                                                                                        </div>
                                                                                         <div class="col-md-8">

                                                                                          <select name="collage_id" id="collage_id" 
                                                                                          class="input-email form-control"  data-show-icon="true">
                                                                                                  <option value="">Select Collage</option>
                                                                                                   <?php 
                                                                                                        foreach ($collage as $list):
                                                                                                    ?>
                                                                                                            <option value="<?php echo $list['collage_id']?>" >
                                                                                                                <?php echo ucwords($list['collage_name']);?>
                                                                                                            </option>
                                                                                                <?php endforeach; ?>
                                                                                          </select>
                                                                                            
                                                                                          <div style="display:none;" id="messageblank1"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>

                                                                                          <div style="display:none;color: 00a65a;" id="messagevalid1"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                                        </div>
                                                                        </div>
                                                                         <div class="col-md-12 form-group">
                                                                                  <div class="col-md-4">
                                                                                     <label >Country:</label> 
                                                                                  </div>
                                                                                  <div class="col-md-8">
                                                                                      <select name="country_id" id="countryid" class="form-control"  >
                                                                                              <option value="">Select country</option>
                                                                                               <?php foreach ($country as $list):
                                                                                                ?>
                                                                                                        <option value="<?php echo $list['country_id']?>">
                                                                                                        
                                                                                                          <?php echo ucwords($list['country_name']);?>
                                                                                                        </option>
                                                                                            <?php endforeach; ?>
                                                                                      </select>
                                                                                      <div style="display:none;" id="countrymessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                      <div style="display:none;color: 00a65a;" id="countrymessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                                  </div>
                                                                        </div>
                                                                        <div class="col-md-12 form-group">
                                                                                         <div class="col-md-4">
                                                                                        <label >Restrict resourse to collage?</label> 
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                           <input type="radio" name="collage_restricted" value="Y"  checked> Yes
                                                                                            <input type="radio" name="collage_restricted" value="N"> No
                                                                                        </div>

                                                                        </div>

                                                                        <div class="col-md-12 form-group">
                                                                              <div class="col-md-4">
                                                                                    <label >Program/Major</label> 
                                                                              </div>
                                                                              <div class="col-md-8">
                                                                                  <?php echo $this->Form->select('program_id', $program, array('class'=>'input-email form-control','empty' => 'Choose major','id'=>'programid'));?>
                                                                                    <div style="display:none;" id="programmessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                    <div style="display:none;color: 00a65a;" id="programmessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                              </div>  
                                                                        </div>
                                                                        <div class="col-md-12 form-group">
                                                                              <div class="col-md-4">
                                                                                  <label >Degree</label> 
                                                                              </div>
                                                                              <div class="col-md-8">
                                                                                   <select name="degree_id" id="degreeid" class="form-control"  data-show-icon="true">
                                                                                              <option value="">Choose Degree</option>
                                                                                               <?php foreach ($degree as $list):
                                                                                                ?>
                                                                                                        <option value="<?php echo $list['degree_id']?>">
                                                                                                        
                                                                                                          <?php echo ucwords($list['de_name']);?>
                                                                                                        </option>
                                                                                            <?php endforeach; ?>
                                                                                      </select>


                                                                                   <div style="display:none;" id="degreemessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                    <div style="display:none;color: 00a65a;" id="degreemessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                              </div>
                                                                        </div>

                                                                         <div class="col-md-12 input-text form-group" id="test1">
                                                                                         <div class="col-md-3">
                                                                                        <label >Tag</label> 
                                                                                        </div>
                                                                                         <div class="col-md-9">
                                                                                        

                                                                                            <input type="text" id="singleFieldTagsnote" name="tag" class="singleFieldTagsnote input-name form-control" placeholder="tag" value="" style="width: 69%;margin-left: 12%;margin-bottom: 3%;">
                                                                                            </div>


                                                                        </div>

                                                                        <div class="col-md-12 input-text form-group">
                                                                                         <div class="col-md-4">
                                                                                        <label >Description of the resourse:</label> 
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                            <textarea style="height: 120px; width: 248px;" name="description_resourse" id="description_resourse"></textarea>

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
                                                                                            <div style="display:none;" id="resoursemessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                            <div style="display:none;color: 00a65a;" id="resoursemessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
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

<script type="text/javascript">
  function checktypeofresourse(value)
  {
      if(value)
      {
             $.ajax({
                 type:"POST",
                 url:"<?php echo SITEURL.'note/checkname';?>",
                 data:{nameofresourse:value},
                 success: function(data)
                 {
                    if(data==1)
                      {
                          $('#nameresoursemessagenotvalid').show(); 
                          return false; 
                      }
                      if(data==0)
                      {
                      $('#nameresourse').removeClass('bordered');
                      $('#nameresourse').addClass('bordeblue');
                      $(".fa-times").css({ display: "none" });
                      $(".fa-check").css({ display: "block" });
                      
                      return true; 
                  }
                  
                 }
                });
    }
  }
</script> 
<script type="text/javascript">
 $(document).ready(function(){
 
    $('.noty_message').on('click', function() 
    {  
    
     $.ajax({
               type:"POST",
               url:"<?php echo SITEURL.'note/resetsession';?>",
               success: function(data)
               {
                  
                 
               }
              });
  });
});
</script>
