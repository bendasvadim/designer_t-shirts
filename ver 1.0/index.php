
<html>
    <head>
        <title>DESIGNER T-SHIRTS</title>
        <script src="jquery-2.1.3.min.js"></script>
        <script src="fabric.js"></script>
        <script src="javascript.js"></script>
        <link rel="stylesheet" href="css/jquery.Jcrop.min.css" type="text/css" />
        <style>
            body
            {
                background-image: url('img/background.jpg');
                background-size: cover;
            }
            h4
            {
                text-align: center;
                border-bottom: 1px solid black;
                padding: 5px;
                margin-top: -5px;
            }
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
                background-color: rgba(89,230,255, 0.5);
            }
            .header_hr
            {
                width: 100%;
                text-align: center;
                border-bottom: 1px solid black;
                margin-bottom: 15px;
                background-color: rgba(0,59,179, 0.5);
                color: white;
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
                box-shadow: 0 0 15px #1E6BBF;
                border: 1px solid #1E6BBF;
                margin: 0 auto;
            }
            div.canvas-container
            {
                margin: 0 auto;
            }
            #cont_result
            {
                width: 900px;
                height: auto;
                min-height: 200px;
                margin: 0 auto;
                border: 1px solid black;
                margin-top: 15px; 
                padding: 20px;
            }
            .result
            {
                width: 900px;
                margin: 0 auto;
                padding: 10px;
                height: auto;
                min-height: 50px;
                border: 1px solid #00aaff;
                margin-top: 20px;
                background-color: rgba(255,255,255, 0.2);
                border-radius: 6px;
            }
            .image img
            {
                width: 550px;
            }
            #container a 
            {
                display: inline-block;
                border: 1px solid white;
                border-radius: 6px;
                text-decoration: none;
                background-color: rgba(255,255,255, 0.2);
                padding: 10px;
                margin-left: 18px;
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
                <div style="width: 100%; text-align: center;">
                <a href="#" id="upload-button" >Select the image</a>
                <input type="file" id="design-upload" style="display: none;" />
                <a href="" id="saveimage">Save image</a>
                </div>
            </div>
        </div>
        <div class="result">
            <table width="100%">
                <tbody>
                    <tr>
                        <td class="image">
                            <img src="result/image.jpg" />
                        </td>
                        <td>
                            <img src="result/generated.jpg" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>

