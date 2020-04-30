$(document).ready(function(){

    var _URL = window.URL || window.webkitURL;
   
    $('#exfaceimg').change(function () {
     var file = $(this)[0].files[0];
   
     img = new Image();
     var imgwidth = 0;
     var imgheight = 0;
     var maxwidth = 640;
     var maxheight = 640;
     var t = 0;
   
     img.src = _URL.createObjectURL(file);
     img.onload = function() {
      imgwidth = this.width;
      imgheight = this.height;
    //   t = this.weight;
    //   $("#width").text(imgwidth);
    //   $("#height").text(imgheight);
      if(imgwidth <= maxwidth && imgheight <= maxheight){
    
    //    var formData = new FormData();
    //    formData.append('fileToUpload', $('#file')[0].files[0]);
   
    //    $.ajax({
    //      url: 'upload_image.php',
    //      type: 'POST',
    //      data: formData,
    //      processData: false,
    //      contentType: false,
    //      dataType: 'json',
    //      success: function (response) {
    //        if(response.status == 1){
    //          $("#prev_img").attr("src","upload/"+response.returnText);
    //          $("#prev_img").show();
    //          $("#response").text("Upload successfully");
    //        }else{
    //          $("#response").text(response.returnText);
    //        } 
    //      }
    //   });
     }else{
    //   $("#response").text("Image size must be "+maxwidth+"X"+maxheight);
        // $("#out_put").text("fichier non pris encharge: " + file.type);
        $("#out_put").text("ce fichier est trop grand"+maxwidth+"X"+maxheight);
     }
    };
    img.onerror = function() {
    
        $("#out_put").text("not a valid file: " + file.type);

    }
   
    });
   });