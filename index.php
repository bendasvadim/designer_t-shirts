
<html>
    <head>
        <title>DESIGNER T-SHIRTS</title>
        <script src="jquery-2.1.3.min.js"></script>
        <script src="fabric.js"></script>
        <script src="javascript.js"></script>
        <link rel="stylesheet" href="css/jquery.Jcrop.min.css" type="text/css" />
        <style>
            #container
            {
                width: 900px;
                height: 500px;
                min-height: 200px;
                margin: 0 auto;
                border: 1px solid black;
                margin-top: 15px;
            }
            .hr
            {
                width: 50%;
                height: 100%;
                float: left;
            }
            .header_hr
            {
                width: 100%;
                text-align: center;
                border-bottom: 1px solid black;
                margin-bottom: 15px;
            }
            #sl_ft 
            {
                width: 100%;
                height: auto;
            }
            #sl_ft img 
            {
                margin-left: 15px;
                cursor: pointer;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                border:1px solid #555;
                border-radius:5px;
                padding: 5px;
            }
            #sl_ft img:hover 
            {
                box-shadow: 0 0 15px #00aaff;
                border: 1px solid #00aaff;
            }
            #body
            {
                width: 100%;
                height: auto;
                margin-top: 25px;
                padding: 15px;
                text-align: center;
            }
            #drawingCanvas
            {
                border: 1px solid black;
                border-radius: 6px;
                box-shadow: 0 0 15px #00aaff;
                border: 1px solid #00aaff;
                margin: 0 auto;
            }
            div.canvas-container
            {
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <div class="hr">
                <div class="header_hr">Select the basis</div>
                <div id="sl_ft">
                    <img data="img/ft1.png" src="img/t_ft1.png" />
                    <img data="img/ft2.png" src="img/t_ft2.png" />
                    <img data="img/ft3.png" src="img/t_ft3.png" />
                </div>
            </div>
            <div class="hr">
                <div class="header_hr">Constructor</div>
                <div id="body">
                    <canvas width="297px" height="370px" id="drawingCanvas">
                    </canvas>
                </div>
                <a href="#" id="upload-button" >Select the image</a>
                <input type="file" id="design-upload" style="display: none;" />
                <a href="" id="saveimage">Save image</a>
            </div>
        </div>
        
        
    </body>
</html>

