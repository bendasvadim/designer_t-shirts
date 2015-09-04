// WEB SITE fabricjs library http://fabricjs.com/fabric-intro-part-1_ru/ 
$(document).ready(function(){
    var canvas = new fabric.Canvas('drawingCanvas', {
        width: '297',
        height: '370'
    });
    var context = canvas.getContext("2d");
    
 // FOR SELECT T-SHIRTS
  $('#sl_ft img').click(function () {
    var href = $(this).attr('data');
        canvas.setBackgroundImage(href, 
        canvas.renderAll.bind(canvas), 
        {   originX: 'left', originY: 'top' });  
  });
 // FOR SELECT T-SHIRTS
 //===========================================================
 // LOAD IMAGE
     $('#upload-button').click(function(){
                $('#design-upload').click();
                canvas.remove(canvas.item(0));
                return false;
     });
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
                    var imgInstance = new fabric.Image(image, {
                            left: 150,
                            top: 150
                    });
                    imgInstance.scaleToWidth(100);
                    canvas.add(imgInstance);
                    
                    $('#saveimage').click(function() {
                       canvas.deactivateAll().renderAll();
                       var strDataURI = canvas.toDataURL();
                       strDataURI = strDataURI.substr(22, strDataURI.length);
                       
                       $.ajax({
                           type: "POST",
                           url: "saver.php",
                           data: ({
                               image        : image.src,
                               generated    : document.getElementById("drawingCanvas").toDataURL("png")
                           }),
                           success: function(msg)
                           {
                                location.reload();
                           }
                       });
                       
                       //       OPEN IN WINDOW OF BROWSER
                       //window.open(image.src,"tfract_save2"); // FILE OF IMAGE 
                       //window.open(document.getElementById("drawingCanvas").toDataURL("image/png"),"tfract_save"); // GENERATED IMAGE
                       //       OPEN IN WINDOW OF BROWSER
                        return false;
                   });
                 }
             }
         } 
     }
});
   


