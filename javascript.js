// WEB SITE fabricjs library http://fabricjs.com/fabric-intro-part-1_ru/ 
$(document).ready(function(){
    
    
$('#sl_ft img').click(function() {
    var canvas = document.getElementById("drawingCanvas");
    var context = canvas.getContext("2d");
    context.clearRect(0,0,297,370);
    
    var href = $(this).attr('data');
    var img = new Image();
    img.src = href;
    context.drawImage(img, 0, 0);
    $('.selected').removeClass('selected');
    $(this).addClass('selected');
});

    $('#upload-button').click(function(){
                $('#design-upload').click();
                return false;
     });
     

     var example = document.getElementById("drawingCanvas");
     var ctx = example.getContext('2d');
     ctx.clearRect(0, 0, example.width, example.height);
     document.getElementById('design-upload').onchange = function (e)
     {
         if(window.FileReader)
         {
             var reader = new FileReader();
             reader.readAsDataURL(e.target.files[0]); 
             reader.onload = function (e)
             {
                var image = new Image;
                image.src = e.target.result;
                image.onload = function() 
                {
                    //ctx.drawImage(image, 10, 10);
                var canvas = new fabric.Canvas('drawingCanvas');
                var imgInstance = new fabric.Image(image, {
                        left: 150,
                        top: 150,
                });
                canvas.setBackgroundImage($('.selected').attr('data'), canvas.renderAll.bind(canvas));
                canvas.add(imgInstance);              
                }
             }
         } else {
             alert('FileReader API is not supported in your browser, please use Firefox, Safari, Chrome or IE10!');
         }
     }


$('#saveimage').click(function() {
    window.open(document.getElementById("drawingCanvas").toDataURL("image/png"),"tfract_save");
    return false;
});

});
   


