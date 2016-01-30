<hr class="hrstyle"/>
<div class="col-md-8 form-group">

                                  <div class="col-md-12 form-group" style="">
                                        <div class="col-md-4">
                                         <label >Field:</label> 
                                         </div>
                                          <div class="col-md-8">
                                          <input type="text" name="field" id="field" class="form-control"  placeholder="Field in which Case was studied" value="" />
                                          </div>  
                                  </div>
                                 <div class="col-md-12 form-group" style="" id="read1">
                                        <div class="col-md-4">
                                         <label >Read At:</label> 
                                         </div>
                                          <div class="col-md-8">
                                         <input type="text" name="read_at[]" class="input-name form-control" placeholder="Conferences/Seminars where paper was read"  value="" style="margin-bottom: 3%;" /><input type="button" class="submit_btn" id="read_at"><span > </span></div>  
                                  </div>
                                   <div class="col-md-12 form-group" style="">
                                        <div class="col-md-4">
                                         <label >Publish in:</label> 
                                         </div>
                                          <div class="col-md-8">
                                          <input type="text" name="publish_in" id="publish_in" class="form-control"  placeholder="Let the word know where it was publish" value="" />
                                          </div>  
                                  </div>

                                  <div class="col-md-12 form-group">
                                          <div>
                                           <div class="col-md-4">
                                           <label>Batch</label>
                                          </div>
                                          <select id="publish_on_month" name="publish_on_month[]" class="input-email form-control" style="width:24%;margin-left: 2%;" >
                                          <option>Month</option>
                                              <script>
                                              var myDate = new Date();
                                              var year = myDate.getFullYear();
                                              for(var i = 01; i < 13; i++){
                                              document.write('<option value="'+i+'" >'+i+'</option>');
                                              }
                                              </script>
                                          </select>
                                                                                
                                          <select id="publish_on_year" name="publish_on_year[]" class="input-email form-control" style="width:25%" >
                                          <option>Year</option>
                                          <script>
                                           var myDate = new Date();
                                           var year = myDate.getFullYear();
                                           for(var i = 1975; i < year+10; i++){
                                           document.write('<option value="'+i+'">'+i+'</option>');
                                           }
                                           </script>
                                           </select>
                                            </div>
                                    </div>
                                  <div class="col-md-12 form-group" style="" id="team1">
                                        <div class="col-md-4">
                                         <label >Team members:</label> 
                                         </div>
                                          <div class="col-md-8">
                                          <input type="text" name="team_member[]" id="team_member" class="form-control"  placeholder="Conferences/Seminars where paper was read" value="" style="margin-bottom: 3%;" /><input type="button" class="submit_btn" id="team"><span > </span>
                                          </div>  
                                  </div>

                                   <div class="col-md-12 form-group" style="" id="under1">
                                        <div class="col-md-4">
                                         <label >Under the guidance of:</label> 
                                         </div>
                                          <div class="col-md-8">
                                          <input type="text" name="under_gidance[]" id="under_gidance" class="form-control"  placeholder="Make your Guide/Mentor famous" value="" style="margin-bottom: 3%;" /><input type="button" class="submit_btn" id="under"><span > </span>
                                          </div>  
                                  </div>


                                 <div class="col-md-12 form-group" style="" >
                                      <div class="col-md-3" style="padding-left:4%!important;width:22%">
                                         <label>File Upload:</label>
                                      </div>
                                      <div class="col-md-6" style="padding-left:2%!important;">
                                        <div class="upload-wrapper" >
                                          <div id="error_output2" style="display:none"></div>
                                            <!-- file drop zone -->
                                              <div id="dropzone2">
                                                <i>Drop files here</i>
                                                <!-- upload button -->
                                                <span class="button btn-blue input-file">
                                                  Browse Files <input id="researchfileupload" type="file" name="researchfileupload">
                                                </span>
                                              </div>
                                                    <!-- The container for the uploaded files -->
                                        </div>
                                      </div>   
                                      <div class="col-md-3">
                                            
                                      </div>
                                      
                                </div>
                                <div class="col-md-12 form-group" style="">
                                     <div id="files2" class="files"></div>

                                </div>
                                <div class="col-md-12 form-group" style="">
                                  <span style="font-weight:bold; color:#000;margin-left:40%">Final price displayed on the portal: $ <span id="finalresearchprice"> 0.00 </span></span> + taxes
                                </div>
                                <div class="col-md-12" style="">
                                    <div class="col-md-11"> 
                                        <input type="hidden" name="finaltotalresearchprice" id="finaltotalresearchprice" value="0.00">
                                       
                                    </div>
                                </div>
                                <?php
                                 echo $this->Form->hidden('created_dt', ['value'=>time()]);
                                      ?>
                    
</div>                            

<script language="javascript">
$(function(){
  'use strict';
  var fi2 = $('#researchfileupload'); //file input 
  var process_url = '<?php echo SITEURL.'note/uploadresearch'; ?>';  //PHP script
  var progressBar = $('<div/>').addClass('progress').append($('<div/>').addClass('progress-bar')); //progress bar
  var uploadButton = $('<a/>').addClass('button btn-blue upload').text('Upload');  //upload button
  var count = 1;
    uploadButton.on('click', function () {

    
    var $this = $(this), data = $this.data();
    data.submit().always(function () {
        $this.parent().find('.progress').show();
        $this.parent().find('.remove').remove();
        $this.parent().find('.upload').remove();
        $this.remove();
        count=++count
         
      data.context = $('<div/>').addClass('file-wrapper').appendTo('#files2');
      var node = $('<div/>').addClass('file-row');

      var removeBtn  = $('<button/>').addClass('rmvbtn').append('<img src="<?php echo SITEURL."webroot/img/wrong-icon5.gif"; ?>"></button>');
       $('.remove').on('click', function(e, data){
      $(this).parent().parent().parent().remove();
      });
      var filevalue=$("#error_output2").html();
      var file_txt = $('<div/>').addClass('file-row-text').append('<input type="hidden" name="research_file[]" value="'+filevalue+'"></br><span style="margin-left:17%"> Set price </span></br>');
     
      file_txt.append('<input type="text" class="" name="research_file_title[]" placeholder="File Title">');

      file_txt.append(removeBtn);

      file_txt.append(' ');

      file_txt.append('<input type="radio" name="choiceresearch'+(count)+'" onclick="showresearchfree('+(count)+')" id="free'+(count)+'"> i would like to charge  <input type="radio" name="choiceresearch'+(count)+'" onclick="showresearchcharge('+(count)+')" id="researchcharge'+(count)+'" onload="showresearchcharge('+(count)+')"> Nah! i would give it free ');

      file_txt.append('<input type="text" name="research_price[]" id="researchprice'+(count)+'" onkeyup="changeresearchtotal('+(count)+',this.value)" class="price priceset" placeholder="price">');
      file_txt.append('<span id="researchcurrency'+(count)+'" class="price priceset">$</span><span id="researchtotal'+(count)+'" class="price priceset"> 0.00</span><span id="researchfreecharge'+(count)+'" class="price priceset" style="font:14px bold">free</span>');
      file_txt.append('<span id="researchfreeforcollage'+(count)+'" class="price priceset"><input type="checkbox" name="research_free_for_collage[]" > Make it free for your collage folks? </span>');
     
      
      file_txt.prependTo(node);
      node.appendTo(data.context);
        });
  });
  //initialize blueimp fileupload plugin
  fi2.fileupload({
    url: process_url,
    dataType: 'json',
    autoUpload: false,
     acceptFileTypes: /(\.|\/)(doc|docx|txt|pdf|odt|xsl|xslx|ppt|pptx)$/i,
    maxFileSize: 1048576, //1MB
    // Enable image resizing, except for Android and Opera,
    // which actually support image resizing, but fail to
    // send Blob objects via XHR requests:
    disableImageResize: /Android(?!.*Chrome)|Opera/ 
    .test(window.navigator.userAgent),
    previewMaxWidth: 50,
    previewMaxHeight: 50,
    previewCrop: true,
    dropZone: $('#dropzone2')
  });
  
  fi2.on('fileuploadadd', function (e, data) {
      
      data.context = $('<div/>').addClass('file-wrapper').appendTo('#files2');
      
      $.each(data.files, function (index, file){  
      console.log(file);
      var node = $('<div/>').addClass('file-row');
      
      var removeBtn  = $('<button/>').addClass('button btn-red remove').text('Remove');
      removeBtn.on('click', function(e, data){
        $(this).parent().parent().remove();
      });
      
      var file_txt = $('<div/>').addClass('file-row-text').append('<span>'+file.name + ' (' +format_size(file.size) + ')' + '</span>');
      
      file_txt.append(removeBtn);
      file_txt.prependTo(node).append(uploadButton.clone(true).data(data));
      progressBar.clone().appendTo(file_txt);
      if (!index){
        node.prepend(file.preview);
      }
      
      node.appendTo(data.context);
    });
  });

  fi2.on('fileuploadprocessalways', function (e, data) {
    var index = data.index,
      file = data.files[index],
      node = $(data.context.children()[index]);
      if (file.preview) {
        node .prepend(file.preview);
      }
      if (file.error) {
        node.append($('<span class="text-danger"/>').text(file.error));
      }
      if (index + 1 === data.files.length) {
        data.context.find('button.upload').prop('disabled', !!data.files.error);
      }
  });
  
  fi2.on('fileuploadprogress', function (e, data) {
    var progress = parseInt(data.loaded / data.total * 100, 10);
    if (data.context) {
      data.context.each(function () {
        $(this).find('.progress').attr('aria-valuenow', progress).children().first().css('width',progress + '%').text(progress + '%');
      });
    }
  });

 fi2.on('fileuploaddone', function (e, data) {
 // alert(data);
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>') .attr('target', '_blank') .prop('href', file.url);
        $(data.context.children()[index]).addClass('file-uploaded');
        $(data.context.children()[index]).find('canvas').wrap(link);
        $(data.context.children()[index]).find('.file-remove').hide(); 
        var done = $('<span class="text-success"/>').text('Uploaded!');
        $(data.context.children()[index]).append(done);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index]).append(error);
            }
        });
    });
  
  fi2.on('fileuploadfail', function (e, data) {
     $('#error_output2').html(data.jqXHR.responseText);
  });
  
  function format_size(bytes) {
            if (typeof bytes !== 'number') {
                return '';
            }
            if (bytes >= 1000000000) {
                return (bytes / 1000000000).toFixed(2) + ' GB';
            }
            if (bytes >= 1000000) {
                return (bytes / 1000000).toFixed(2) + ' MB';
            }
            return (bytes / 1000).toFixed(2) + ' KB';
        }
});
</script>

<script type="text/javascript">

 function showresearchfree(value)
  {
    
    $("#researchprice"+value).removeClass('price');
    $("#researchprice"+value).addClass('changeprice');
    $("#researchtotal"+value).removeClass('price');
    $("#researchtotal"+value).addClass('changeprice');
    $("#researchfreecharge"+value).removeClass('changeprice');
    $("#researchfreecharge"+value).addClass('price');
    $("#researchfreeforcollage"+value).removeClass('price');
    $("#casefreeforcollage"+value).addClass('changeprice');
    $("#researchcurrency"+value).removeClass('price');
    $("#researchcurrency"+value).addClass('changeprice');
    
  }
  function showresearchcharge(value)
  {
    $("#researchfreecharge"+value).removeClass('price');
    $("#researchfreecharge"+value).addClass('changeprice');
    $("#researchprice"+value).removeClass('changeprice');
    $("#researchprice"+value).addClass('price');
    $("#researchfreeforcollage"+value).removeClass('changeprice');
    $("#researchfreeforcollage"+value).addClass('price');
    $("#researchcurrency"+value).removeClass('changeprice');
    $("#researchcurrency"+value).addClass('price');
    $("#researchtotal"+value).removeClass('changeprice');
    $("#researchtotal"+value).addClass('price');
     

  }
 
  function changeresearchtotal(value)
  {
    var textInputElement = document.getElementById('researchprice'+value);

    var nameDivElement = document.getElementById('researchtotal'+value);

      textInputElement.addEventListener('keyup', function(){
        var text = textInputElement.value;
        nameDivElement.innerHTML = text;
        calculatecaseSum2();
      });
  }
   
</script>


<script type="text/javascript">
 
 
    function calculatecaseSum2() 
    {
      var sum = 0;
        //iterate through each textboxes and add the values
        $(".priceset").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
 
        });
        $("#finalresearchprice").html(sum.toFixed(2));
        var sumvalue=sum.toFixed(2);
        document.getElementById('finaltotalresearchprice').value = sumvalue;
      // $("#finaltotalcaseprice").val()=sumvalue;
    }
</script>