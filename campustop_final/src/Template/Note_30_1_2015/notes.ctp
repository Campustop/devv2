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
<script type="text/javascript">
   $(document).ready(function(){
 
        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        
            
             $("#price2").keyup(function() {
                alert( "Handler for .keyup() called." );
           
        });
 
    });
</script>
<hr class="hrstyle"/>
<div class="col-md-12 form-group">

        
        <div class="col-md-12 form-group" style="">
            <div class="col-md-2">
              <label >File Upload:</label> 
            </div>
            <div class="col-md-6">
              <div class="upload-wrapper">
                  <div id="error_output" style="display:none"></div>
                    <!-- file drop zone -->
                      <div id="dropzone">
                        <i>Drop files here</i>
                          <!-- upload button -->
                          <span class="button btn-blue input-file">
                              Browse Files <input id="fileupload" type="file" name="fileupload" multiple>
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

        <div class="col-md-12 form-group" style="">
         <div id="files" class="files"></div>

        </div>
          <div class="col-md-12 form-group" style="">
            <span style="font-weight:bold; color:#000;margin-left:40%">Final price displayed on the portal: $ <span id="finalprice"> 0.00 </span></span> + taxes

        </div>
        <div class="col-md-12" style="">
        
            <div class="col-md-11">
             <input type="hidden" name="finalnoteprice" id="finalnoteprice" value="0.00">
            <input type="checkbox" name="agreement" id="agreement"> 
             I agree that the materials being uploaded are purely compiled or created by me and sources of original content have been mentioned in the form. I also agree that campustop.in will not be responsible for any future claims on this material by a third party including but not limited to copyright infringement.
 <div style="display:none;" id="agreementeblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
              <div style="display:none;color: 00a65a;" id="agreementvalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i>
              </div>
            </div>
         
        </div>
       
        <?php echo $this->Form->hidden('created_dt', ['value'=>time()]); ?>
</div>
<script language="javascript">
$(function(){
  'use strict';
  var fi = $('#fileupload'); //file input 
  var process_url = '<?php echo SITEURL.'note/upload'; ?>';  //PHP script
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
         
      data.context = $('<div/>').addClass('file-wrapper').appendTo('#files');
      var node = $('<div/>').addClass('file-row');

      var removeBtn  = $('<button/>').addClass('rmvbtn').append('<img src="<?php echo SITEURL."webroot/img/wrong-icon5.gif"; ?>"></button>');
       $('.remove').on('click', function(e, data){
      $(this).parent().parent().parent().remove();
      });
      var filevalue=$("#error_output").html();
      var file_txt = $('<div/>').addClass('file-row-text').append('<input type="hidden" name="note_file[]" value="'+filevalue+'"></br><span style="margin-left:17%"> Set price </span></br>');
     
      file_txt.append('<input type="text" class="" name="file_title[]" placeholder="File Title">');

      file_txt.append(removeBtn);

      file_txt.append(' ');

      file_txt.append('<input type="radio" name="choice'+(count)+'" onclick="showfree('+(count)+')" id="free'+(count)+'"> i would like to charge  <input type="radio" name="choice'+(count)+'" onclick="showcharge('+(count)+')" id="charge'+(count)+'" onload="showcharge('+(count)+')"> Nah! i would give it free ');

      file_txt.append('<input type="text" name="price[]" id="price'+(count)+'" onkeyup="changetotal('+(count)+',this.value)" class="price priceset" placeholder="price">');
      file_txt.append('<span id="currency'+(count)+'" class="price priceset">$</span><span id="total'+(count)+'" class="price priceset"> 0.00</span><span id="freecharge'+(count)+'" class="price priceset" style="font:14px bold">free</span>');
      file_txt.append('<span id="freeforcollage'+(count)+'" class="price priceset"><input type="checkbox" name="free_for_collage[]" > Make it free for your collage folks? </span>');
     
      
      file_txt.prependTo(node);
      node.appendTo(data.context);
        });
  });
  //initialize blueimp fileupload plugin
  fi.fileupload({
    url: process_url,
    dataType: 'json',
    autoUpload: false,
    maxNumberOfFiles:4,
   acceptFileTypes: /(\.|\/)(doc|docx|txt|pdf|odt|xsl|xlsx|ppt|pptx|)$/i,
    maxFileSize: 8048576, //1MB
    // Enable image resizing, except for Android and Opera,
    // which actually support image resizing, but fail to
    // send Blob objects via XHR requests:
    disableImageResize: /Android(?!.*Chrome)|Opera/ 
    .test(window.navigator.userAgent),
    previewMaxWidth: 50,
    previewMaxHeight: 50,
    previewCrop: true,
    dropZone: $('#dropzone')
  });
  
  fi.on('fileuploadadd', function (e, data) {
      
      data.context = $('<div/>').addClass('file-wrapper').appendTo('#files');
      
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

  fi.on('fileuploadprocessalways', function (e, data) {
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
  
  fi.on('fileuploadprogress', function (e, data) {
    var progress = parseInt(data.loaded / data.total * 100, 10);
    if (data.context) {
      data.context.each(function () {
        $(this).find('.progress').attr('aria-valuenow', progress).children().first().css('width',progress + '%').text(progress + '%');
      });
    }
  });

 fi.on('fileuploaddone', function (e, data) {
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
  
  fi.on('fileuploadfail', function (e, data) {
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

 function showfree(value)
  {
    $("#price"+value).removeClass('price');
    $("#price"+value).addClass('changeprice');
    $("#total"+value).removeClass('price');
    $("#total"+value).addClass('changeprice');
    $("#freecharge"+value).removeClass('changeprice');
    $("#freecharge"+value).addClass('price');
    $("#freeforcollage"+value).removeClass('price');
    $("#freeforcollage"+value).addClass('changeprice');
    $("#currency"+value).removeClass('price');
    $("#currency"+value).addClass('changeprice');
    
  }
  function showcharge(value)
  {
    $("#freecharge"+value).removeClass('price');
    $("#freecharge"+value).addClass('changeprice');
    $("#price"+value).removeClass('changeprice');
    $("#price"+value).addClass('price');
    $("#freeforcollage"+value).removeClass('changeprice');
    $("#freeforcollage"+value).addClass('price');
    $("#currency"+value).removeClass('changeprice');
    $("#currency"+value).addClass('price');
    $("#total"+value).removeClass('changeprice');
    $("#total"+value).addClass('price');
     

  }
 
  function changetotal(value)
  {
    var textInputElement = document.getElementById('price'+value);

    var nameDivElement = document.getElementById('total'+value);

      textInputElement.addEventListener('keyup', function(){
        var text = textInputElement.value;
        nameDivElement.innerHTML = text;
        calculateSum();
      });
  }
   
</script>


<script type="text/javascript">
 
 
    function calculateSum() 
    {
      var sum = 0;
        //iterate through each textboxes and add the values
        $(".priceset").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
 
        });
        $("#finalprice").html(sum.toFixed(2));
        var sumvalue1=sum.toFixed(2);
        document.getElementById('finalnoteprice').value = sumvalue1;
       //$("#finalnoteprice").val()=sumvalue1;
    }
</script>
