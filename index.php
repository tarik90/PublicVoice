<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Public Voice</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="index.js"></script>


  </head>
  <body>
    <p>Demonstrate fadeToggle() with different speed parameters.</p>

<button>Click to fade in/out boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;background-color:red;"></div>
<br>
<div id="div2" style="width:80px;height:80px;background-color:green;"></div>
<br>
<div id="div3" style="width:80px;height:80px;background-color:blue;"></div>
    <div id="box">
      <script >
        var screen_style = document.getElementById("box");
        screen_style.style.maxWidth = (screen.width -17) + "px";
        screen_style.style.height = (screen.height - 111) + "px";
        screen_style.style.backgroundColor = "gray";
        screen_style.style.overflowX = "auto";
        screen_style.style.overflowY = "auto"; 
      </script>

      <div id="head">
        <script >
          var head_style = document.getElementById("head");
          head_style.style.maxWidth = (screen.width -18) + "px";
          head_style.style.height = (screen.height - 630) + "px";
          head_style.style.backgroundColor = "#335C33";

        </script>

        <div id="website_logo">
          <span>Public Voice</span>
        </div>

        <div id="navigation">
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#"> <span id="public">Public</span>
                                                  <span id="voice">Voice</span></a>
                                             

              </div>
              <div>
                <ul class="nav navbar-nav">
                  <li class="active"><a id="home" href="#">Home</a></li>
                  <li><a href="#">Page 1</a></li>
                  <li><a href="#">Page 2</a></li>
                  <li><a href="#">Page 3</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

        <p>sdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldf</p>
      </div>
    
      <div id="midpage">
        <script >
          var mid_page = document.getElementById("midpage");
          mid_page.style.width = (screen.width -18) + "px";
          mid_page.style.height = (screen.height - 400) + "px";
          mid_page.style.backgroundColor = "green";
        </script>
<!--
        <div id="subject">
          hgjghjghj
        </div>

        <div id="poll">
          hjkhjk
        </div>

        <div id="news">
          ghjghjghj
        </div>
-->
      </div>

    </div>



     
      
  </body>
</html>