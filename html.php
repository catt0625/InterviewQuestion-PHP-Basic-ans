<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
        .flip-box {
            background-color: #FFFFFF;
            width: 300px;
            height: 200px;
            border: 2px solid #010000;
        }
        .text {
            font-size: 18;
            padding: 10px; /* Responsive font size */
            margin: 10px ; /* Center the text container */
            margin-bottom: -10%;
            width: 50%;          
        }
        input[type=text] {
            width: 150px;
            height: 10px;
            padding: 15px;
            margin: -110px 100px;           
            display: inline-block;
            border: 2px solid #010000;
        }
        button {
            background-color: #74DD4B;
            color: white;
            padding: 15px 9px;
            margin: 20px 160px;
            border: none;
            cursor: pointer;
            width: 120px;
            opacity: 0.9;
        }
    </style>
  </head>

  <body>
    <div class="flip-box">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <div class="text">User Name:</div>
          <input type="text" name="username" id="emptytext"required>
          <button type="submit" class="submitbtn" id = "button" onclick="errorMessage()">Submit</button>
          <label id = "label" style = "color:green" >Key in username and click submit</label>
          <span id="error"></span>
        </div>
      </div>
    </div>
  </body>
</html>

