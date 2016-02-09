$(document).ready(function(){	
	var dropbox;  
	  
	dropbox = document.getElementById("dropbox");  
	dropbox.addEventListener("dragenter", dragenter, false);  
	dropbox.addEventListener("dragleave", dragleave, false);  
	dropbox.addEventListener("dragover", dragover, false);  
	dropbox.addEventListener("drop", drop, false);  
	
	function defaults(e){
       e.stopPropagation();  
       e.preventDefault();  
	}
    function dragenter(e) {  
	   $(this).addClass("active");
	   defaults(e);
	}  
      
    function dragover(e) { 
	   defaults(e);
    }  
    function dragleave(e) {  
	   $(this).removeClass("active");
	   defaults(e);
    }  

    function drop(e) {  
	   $(this).removeClass("active");
	   defaults(e);
      
	   // dataTransfer -> which holds information about the user interaction, including what files (if any) the user dropped on the element to which the event is bound.
	   //console.log(e);
       var dt = e.dataTransfer;  
       var files = dt.files;  
      
       handleFiles(files,e);  
    }  
   
	handleFiles = function (files,e){
		// alert(files);
		// Traverse throught all files and check if uploaded file type is image	
		var imageType = /image.*/;  
		var count = 1;
		var file = files[0];
		// check file type
		if (!file.type.match(imageType)) {  
		  alert("File \""+file.name+"\" is not a valid image file, Are you trying to screw me :( :( ");
		  return false;	
		} 
		// check file size
		if (parseInt(file.size / 1024) > 2050) {  
		  alert("File \""+file.name+"\" is too big. I am using shared server :P");
		  return false;	
		} 
		
		var info = '<div class="preview active-win"><div class="preview-image"><img ></div><div class="progress-holder"><span id="progress"></span></div><span class="percents"></span><div style="float:left;">Uploaded <span class="up-done"></span> KB of '+parseInt(file.size / 1024)+' KB</div>';
		var file_txt = $('<div/>').addClass('file-row-text').append('<input type="hidden" name="note_file[]" value="'+file.name + '"><span>File Name: '+file.name +'</span></br><span class="progress" id="progress"></span><span style="margin-left:17%"> Set price </span></br><input type="text" class="" name="file_title[]" placeholder="File Title">');
		var removeBtn  = $('<button/>').append('<img src="<?php echo SITEURL."webroot/img/wrong-icon5.gif"; ?>"></button>');
		  removeBtn.on('click', function(e, data){
			$(this).parent().parent().remove();
		  });
		  file_txt.append(removeBtn);
		file_txt.append('<input type="radio" name="choice" onclick="showfree('+(count)+')" id="free'+(count)+'"> i would like to charge  <input type="radio" name="choice" onclick="showcharge('+(count)+')" id="charge'+(count)+'" onload="showcharge('+(count)+')"> Nah! i would give it free ');

      file_txt.append('<input type="text" name="price[]" id="price'+(count)+'" onkeyup="changetotal('+(count)+',this.value)" class="price priceset" placeholder="price">');
      file_txt.append('<span id="currency'+(count)+'" class="price priceset">$</span><span id="total'+(count)+'" class="price priceset"> 0.00</span><span id="freecharge'+(count)+'" class="price priceset" style="font:14px bold">free</span>');
      file_txt.append('<span id="freeforcollage'+(count)+'" class="price priceset"><input type="checkbox" name="free_for_collage[]" > Make it free for your collage folks? </span>');
		$(".upload-progress").show("slow",function(){
			count=++count
			$(".upload-progress").html(info); 
			
			$(".upload-progress").html(file_txt);

			uploadFile(file);
		});
		
  }

  uploadFile = function(file){
	// check if browser supports file reader object 
	if (typeof FileReader !== "undefined"){
	//alert("uploading "+file.name);  
	reader = new FileReader();
	reader.onload = function(e){
		//alert(e.target.result);
		$('.preview img').attr('src',e.target.result).css("width","70px").css("height","70px");
	

	}
	reader.readAsDataURL(file);

	xhr = new XMLHttpRequest();
	xhr.open("post", "ajax_fileupload.php", true);

	xhr.upload.addEventListener("progress", function (event) {
		console.log(event);
		if (event.lengthComputable) {
			$("#progress").css("width",(event.loaded / event.total) * 100 + "%");
			$(".percents").html(" "+((event.loaded / event.total) * 100).toFixed() + "%");
			$(".up-done").html((parseInt(event.loaded / 1024)).toFixed(0));
		}
		else {
			alert("Failed to compute file upload length");
		}
	}, false);

	xhr.onreadystatechange = function (oEvent) {  
	  if (xhr.readyState === 4) {  
		if (xhr.status === 200) {  
		  $("#progress").css("width","100%");
		  $(".percents").html("100%");
		  $(".up-done").html((parseInt(file.size / 1024)).toFixed(0));
		} else {  
		  alert("Error"+ xhr.statusText);  
		}  
	  }  
	};  
	
	// Set headers
	xhr.setRequestHeader("Content-Type", "multipart/form-data");
	xhr.setRequestHeader("X-File-Name", file.fileName);
	xhr.setRequestHeader("X-File-Size", file.fileSize);
	xhr.setRequestHeader("X-File-Type", file.type);

	// Send the file (doh)
	xhr.send(file);

	}else{
		alert("Your browser doesnt support FileReader object");
	} 		
  }
});


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

  $("#noteuploadbtn").click(function(e){
          e.preventDefault();
          $.ajax({type: "POST",
                url: "<?php echo SITEURL.'note/upload'; ?>",
                data: { id: $("#Shareitem").val(), access_token: $("#access_token").val() },
                success:function(result){
          $("#sharelink").html(result);
        }});
      });

 
    function calculateSum() {
    //alert('123');
        var sum = 0;
        //iterate through each textboxes and add the values
        $(".priceset").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $("#finalprice").html(sum.toFixed(2));
        var sumvalue=sum.toFixed(2);
       sumvalue= $("#finalnoteprice").val();
    }
