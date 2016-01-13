<style type="text/css">
#dragandrophandler
{
border:2px dotted #0B85A1;
width:400px;
color:#92AAB0;
text-align:left;vertical-align:middle;
padding:10px 10px 10 10px;
margin-bottom:10px;
font-size:200%;
}
</style>
<hr class="hrstyle"/>
      <div class="col-md-12 form-group">

              <div class="col-md-12 form-group" style="">
                  <div class="col-md-2">
                    <label >Field:</label> 
                  </div>
                  <div class="col-md-6">
                     <input  type="text" name="casefield" class="form-control" placeholder="Field in which case was studied">
                  </div>   
                  <div class="col-md-4"> 
                 </div>  
              </div>
              <div class="col-md-12 form-group" style="">
                  <div class="col-md-2">
                    <label >File Upload:</label> 
                  </div>
                  <div class="col-md-6">
                      <div class="upload-wrapper">
                        <div id="error_output" style="display:none"></div>
                          <!-- file drop zone -->
                            <div id="dropzone1">
                              <i>Drop files here</i>
                                <!-- upload button -->
                                <span class="button btn-blue input-file">
                                    Browse Files <input id="casefileupload" type="file" name="casefileupload">
                                </span>
                            </div>
                            <!-- The container for the uploaded files -->
                            
                      </div>
                  </div>   
                  <div class="col-md-4">
                    <b>1.</b><span> A browse button can upload files from a single folder.</span></br>
                    <b>2.</b><span> A browse button can upload maxium of 4 files .</span></br>
                    <b>3.</b><span> A file cannot exceed size of 8MB .</span></br>
                    <b>4.</b><span> Supported file formats: doc/docx,ppt/pptx,txt,xsl/xsls,pages, numbers,odt,pdf.</span></br>
                    <b>5.</b><span> Each file can be prices separately.</span></br>           
                 </div>  
            </div>
        </div>
        <div class="col-md-12 form-group" style="">
         <div id="files1" class="files"></div>

        </div>
          <div class="col-md-12 form-group" style="">
            <span style="font-weight:bold; color:#000;margin-left:40%">Final price displayed on the portal: $ <span id="finalcaseprice"> 0.00 </span></span> + taxes

        </div>
        <div class="col-md-12" style="">

            <div class="col-md-11"> 
            <input type="hidden" name="finalcaseprice" id="finaltotalcaseprice" value="0.00">
            <input type="checkbox" name="agreement" id="agreement"> 
             I agree that the materials being uploaded are purely compiled or created by me and sources of original content have been mentioned in the form. I also agree that campustop.in will not be responsible for any future claims on this material by a third party including but not limited to copyright infringement.
            </div>
         
        </div>
       
        <?php echo $this->Form->hidden('created_dt', ['value'=>time()]); ?>
</div>
<script language="javascript">
$(function(){
  'use strict';
  var fi1 = $('#casefileupload'); //file input 
  var process_url = '<?php echo SITEURL.'note/uploadcase'; ?>';  //PHP script
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
         
      data.context = $('<div/>').addClass('file-wrapper').appendTo('#files1');
      var node = $('<div/>').addClass('file-row');

      var removeBtn  = $('<button/>').addClass('rmvbtn').append('<img src="<?php echo SITEURL."webroot/img/wrong-icon5.gif"; ?>"></button>');
       $('.remove').on('click', function(e, data){
      $(this).parent().parent().parent().remove();
      });
      var filevalue=$("#error_output").html();
      var file_txt = $('<div/>').addClass('file-row-text').append('<input type="hidden" name="case_file[]" value="'+filevalue+'"></br><span style="margin-left:17%"> Set price </span></br>');
     
      file_txt.append('<input type="text" class="" name="case_file_title[]" placeholder="File Title">');

      file_txt.append(removeBtn);

      file_txt.append(' ');

      file_txt.append('<input type="radio" name="choicecase'+(count)+'" onclick="showfreecase('+(count)+')" id="free'+(count)+'"> i would like to charge  <input type="radio" name="choicecase'+(count)+'" onclick="showcasecharge('+(count)+')" id="casecharge'+(count)+'" onload="showcasecharge('+(count)+')"> Nah! i would give it free ');

      file_txt.append('<input type="text" name="case_price[]" id="caseprice'+(count)+'" onkeyup="changecasetotal('+(count)+',this.value)" class="price priceset" placeholder="price">');
      file_txt.append('<span id="casecurrency'+(count)+'" class="price priceset">$</span><span id="casetotal'+(count)+'" class="price priceset"> 0.00</span><span id="casefreecharge'+(count)+'" class="price priceset" style="font:14px bold">free</span>');
      file_txt.append('<span id="casefreeforcollage'+(count)+'" class="price priceset"><input type="checkbox" name="case_free_for_collage[]" > Make it free for your collage folks? </span>');
     
      
      file_txt.prependTo(node);
      node.appendTo(data.context);
        });
  });
  //initialize blueimp fileupload plugin
  fi1.fileupload({
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
    dropZone: $('#dropzone1')
  });
  
  fi1.on('fileuploadadd', function (e, data) {
      
      data.context = $('<div/>').addClass('file-wrapper').appendTo('#files1');
      
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

  fi1.on('fileuploadprocessalways', function (e, data) {
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
  
  fi1.on('fileuploadprogress', function (e, data) {
    var progress = parseInt(data.loaded / data.total * 100, 10);
    if (data.context) {
      data.context.each(function () {
        $(this).find('.progress').attr('aria-valuenow', progress).children().first().css('width',progress + '%').text(progress + '%');
      });
    }
  });

 fi1.on('fileuploaddone', function (e, data) {
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
  
  fi1.on('fileuploadfail', function (e, data) {
     $('#error_output').html(data.jqXHR.responseText);
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

 function showfreecase(value)
  {
    alert(value);
    $("#caseprice"+value).removeClass('price');
    $("#caseprice"+value).addClass('changeprice');
    $("#casetotal"+value).removeClass('price');
    $("#casetotal"+value).addClass('changeprice');
    $("#casefreecharge"+value).removeClass('changeprice');
    $("#casefreecharge"+value).addClass('price');
    $("#casefreeforcollage"+value).removeClass('price');
    $("#casefreeforcollage"+value).addClass('changeprice');
    $("#casecurrency"+value).removeClass('price');
    $("#casecurrency"+value).addClass('changeprice');
    
  }
  function showcasecharge(value)
  {
    alert(value);
    $("#casefreecharge"+value).removeClass('price');
    $("#casefreecharge"+value).addClass('changeprice');
    $("#caseprice"+value).removeClass('changeprice');
    $("#caseprice"+value).addClass('price');
    $("#casefreeforcollage"+value).removeClass('changeprice');
    $("#casefreeforcollage"+value).addClass('price');
    $("#casecurrency"+value).removeClass('changeprice');
    $("#casecurrency"+value).addClass('price');
    $("#casetotal"+value).removeClass('changeprice');
    $("#casetotal"+value).addClass('price');
     

  }
 
  function changecasetotal(value)
  {
    var textInputElement = document.getElementById('caseprice'+value);

    var nameDivElement = document.getElementById('casetotal'+value);

      textInputElement.addEventListener('keyup', function(){
        var text = textInputElement.value;
        nameDivElement.innerHTML = text;
        calculatecaseSum();
      });
  }
   
</script>


<script type="text/javascript">
 
 
    function calculatecaseSum() 
    {
      var sum = 0;
        //iterate through each textboxes and add the values
        $(".priceset").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
 
        });
        $("#finalcaseprice").html(sum.toFixed(2));
        var sumvalue=sum.toFixed(2);
        document.getElementById('finaltotalcaseprice').value = sumvalue;
      // $("#finaltotalcaseprice").val()=sumvalue;
    }
</script>