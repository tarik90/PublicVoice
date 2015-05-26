<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Public Voice</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="index.js"></script>


  </head>
  <body>
    <div id="box">
      <script>
        var screen_style = document.getElementById("box");
        screen_style.style.maxWidth = (screen.width -17) + "px";
        screen_style.style.height = (screen.height - 111) + "px";
        screen_style.style.backgroundColor = "gray";
        screen_style.style.overflowX = "auto";
        screen_style.style.overflowY = "auto"; 
      </script>

      <div id="head">
        <script>
          var head_style = document.getElementById("head");
          head_style.style.width = (screen.width -18) + "px";
          head_style.style.height = (screen.height - 600) + "px";
          head_style.style.backgroundColor = "#335C33";

        </script>

        <div id="navigation">
          <script>
            var naviga_tion = document.getElementById("navigation");
            naviga_tion.style.width = (screen.width -18) + "px";
          </script>
 <!--           

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

-->

          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#"><span id="public">Public</span>
                                                  <span id="voice">Voice</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="active"><a id="home" href="#">HOME</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 1-1</a></li>
                      <li><a href="#">Page 1-2</a></li>
                      <li><a href="#">Page 1-3</a></li>
                    </ul>
                  </li>
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


      </div>
    
      <div id="midpage">
        <script>
          var mid_page = document.getElementById("midpage");
          mid_page.style.width = (screen.width -18) + "px";
          mid_page.style.height = (screen.height - 350) + "px";
          mid_page.style.backgroundColor = "green";
        </script>

        <div id="subjects">
          <script>
          var sub_jects = document.getElementById("subjects");
          sub_jects.style.width = (screen.width -1060) + "px";
          sub_jects.style.height = (screen.height - 350) + "px";
          sub_jects.style.backgroundColor = "blue";
          sub_jects.style.transition = "all 1s";
        </script>

          <div id="one">
            <script >
              var on_e = document.getElementById("one");
              // on_e.style.width = (screen.width -1200) + "px";
              on_e.style.height = (screen.height - 740.3) + "px";
              on_e.style.backgroundColor = "#202020";
              on_e.style.lineHeight = on_e.style.height;
              on_e.style.transition = "all 1s";
            </script>
            FOOD
          </div>

          <div id="two">
            <script>
              var tw_o = document.getElementById("two");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.3) + "px";
              tw_o.style.backgroundColor = "#303030";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            POLITICS
          </div>

          <div id="three">
            <script>
              var thr_ee = document.getElementById("three");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.3) + "px";
              thr_ee.style.backgroundColor = "#202020";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            RELIGION
          </div>

          <div id="four">
            <script>
              var thr_ee = document.getElementById("four");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.3) + "px";
              thr_ee.style.backgroundColor = "#303030";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            AUTO
          </div>

          <div id="five">
            <script>
              var thr_ee = document.getElementById("five");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.3) + "px";
              thr_ee.style.backgroundColor = "#202020";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            EDUCATION
          </div>

          <div id="six">
            <script >
              var on_e = document.getElementById("six");
              // on_e.style.width = (screen.width -1200) + "px";
              on_e.style.height = (screen.height - 740.3) + "px";
              on_e.style.backgroundColor = "#303030";
              on_e.style.lineHeight = on_e.style.height;
              on_e.style.transition = "all 1s";
            </script>
            SOCIAL
          </div>

          <div id="seven">
            <script>
              var tw_o = document.getElementById("seven");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.3) + "px";
              tw_o.style.backgroundColor = "#202020";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            HEALTH & BEAUTY
          </div>

          <div id="eight">
            <script>
              var thr_ee = document.getElementById("eight");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.3) + "px";
              thr_ee.style.backgroundColor = "#303030";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            MUSIC & ENTERTAINMENT
          </div>

          <div id="nine">
            <script>
              var tw_o = document.getElementById("nine");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.3) + "px";
              tw_o.style.backgroundColor = "#202020";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            ENVIRONMENT & NATURE
          </div>

          <div id="ten">
            <script>
              var thr_ee = document.getElementById("ten");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.3) + "px";
              thr_ee.style.backgroundColor = "#303030";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            TECH & ENGINEERING
          </div>

          <div id="eleven">
            <script>
              var tw_o = document.getElementById("eleven");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.3) + "px";
              tw_o.style.backgroundColor = "#202020";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            BEAUTY
          </div>

          <div id="twelve">
            <script>
              var thr_ee = document.getElementById("twelve");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.3) + "px";
              thr_ee.style.backgroundColor = "#303030";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            SPORTS
          </div>

          <div id="thirteen">
            <script>
              var thr_ee = document.getElementById("thirteen");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.3) + "px";
              thr_ee.style.backgroundColor = "#202020";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            PERSONAL
          </div>

          <div id="fourteen">
            <script>
              var tw_o = document.getElementById("fourteen");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.3) + "px";
              tw_o.style.backgroundColor = "#303030";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            FASHION
          </div>

          <div id="fifteen">
            <script>
              var thr_ee = document.getElementById("fifteen");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.3) + "px";
              thr_ee.style.backgroundColor = "#202020";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            MORE+ 
          </div>



        </div>
  
        <div id="poll">
          <script>
          var poll_box = document.getElementById("poll");
          poll_box.style.width = (screen.width -660) + "px";
          poll_box.style.height = (screen.height - 350) + "px";
          poll_box.style.backgroundColor = "yellow";
          poll_box.style.transition = "all 1s";
        </script>
                  <p>sdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldfsdfsdlfsdflkjsdlfkjsldf</p>

        </div>

        <div id="news">
          <script>
            var news_box = document.getElementById("news");
            news_box.style.width = (screen.width -1090) + "px";
            news_box.style.height = (screen.height - 350) + "px";
            news_box.style.backgroundColor = "#303030";
          </script>

          <div id="newsHead">
            <script>
              var news_head = document.getElementById("newsHead");
              news_head.style.width = (screen.width -1090) + "px";
              news_head.style.height = (screen.height - 700) + "px";
              news_head.style.backgroundColor = "#335C33";
              news_head.style.lineHeight = news_head.style.height;
            </script>
            <p id="newsB">NEWS BOX<p/>
          </div>

          <div id="cnn">
            <script>
              var news_cnn = document.getElementById("cnn");
              news_cnn.style.width = (screen.width -1090) + "px";
              news_cnn.style.backgroundColor = "#202020";
              news_cnn.style.lineHeight = news_cnn.style.height;
            </script>
            CNN
          </div>

          <div id="bbc">
            <script>
              var news_bbc = document.getElementById("bbc");
              news_bbc.style.width = (screen.width -1090) + "px";
              news_bbc.style.backgroundColor = "#303030";
              news_bbc.style.lineHeight = news_bbc.style.height;
            </script>
            BBC
          </div>

          <div id="rt">
            <script>
              var news_rt = document.getElementById("rt");
              news_rt.style.width = (screen.width -1090) + "px";
              news_rt.style.backgroundColor = "#202020";
              news_rt.style.lineHeight = news_rt.style.height;
            </script>
            RT
          </div>

          <div id="forbes">
            <script>
              var news_forbes = document.getElementById("forbes");
              news_forbes.style.width = (screen.width -1090) + "px";
              news_forbes.style.backgroundColor = "#303030";
              news_forbes.style.lineHeight = news_forbes.style.height;
            </script>
            FORBES
          </div>

        </div>

-->
      </div>

    </div>



     
      
  </body>
</html>