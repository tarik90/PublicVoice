<script>
         function randomPollLoad()
         {
         var xmlhttp;
         if (window.XMLHttpRequest)
           {// code for IE7+, Firefox, Chrome, Opera, Safari
             xmlhttp=new XMLHttpRequest();
           }
         else
           {// code for IE6, IE5
             xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
           }
         xmlhttp.onreadystatechange=function()
           {
           if (xmlhttp.readyState==4 && xmlhttp.status==200)
             {
               document.getElementById("showBox").innerHTML=xmlhttp.responseText; // div
             }
           }
         xmlhttp.open("GET","../include/showPoll.php",true); //php file
         xmlhttp.send();
         }
         window.setInterval(function(){
           randomPollLoad();
         }, 7000);

      </script>


  </head>
  <body>
    <!--
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
-->
    <div id="box">
      <script>
        var screen_style = document.getElementById("box");
        screen_style.style.maxWidth = (screen.width -17) + "px";
        screen_style.style.height = (screen.height - 111) + "px";
        screen_style.style.backgroundColor = "#222222";
        screen_style.style.overflowX = "auto";
        screen_style.style.overflowY = "auto"; 
      </script>

      <div id="head">
        <script>
          var head_style = document.getElementById("head");
          head_style.style.width = (screen.width -18) + "px";
          head_style.style.height = (screen.height - 580) + "px";
          //head_style.style.backgroundColor = "#335C33";
          head_style.style.backgroundColor = "#303030";

        </script>
        <div><img width="320" height="135" src="../images/websiteLogo.jpg"></div>
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
                  <li><a href="aboutUs.php">About us</a>
                    <!--
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 1-1</a></li>
                      <li><a href="#">Page 1-2</a></li>
                      <li><a href="#">Page 1-3</a></li>
                    </ul>
                  -->
                  </li>
                  <!--
                  <li><a href="contactUs.php">Contact us</a></li>

                  <li><a href="#">Report a problem</a></li>
                -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <!--
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                -->
                  <li><a href="report.php"><span class="glyphicon glyphicon-info-sign"></span> Report a problem</a></li>
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
        </script>

        <div id="subjects">
          <script>
          var sub_jects = document.getElementById("subjects");
          sub_jects.style.width = (screen.width -1115) + "px";
          sub_jects.style.height = (screen.height - 350) + "px";
          sub_jects.style.transition = "all 1s";
        </script>

          <a href="subject.php?tag=food">
          <div id="one">
            <script >
              var on_e = document.getElementById("one");
              // on_e.style.width = (screen.width -1200) + "px";
              on_e.style.height = (screen.height - 740.2) + "px";
              on_e.style.backgroundColor = "#202020";
              on_e.style.lineHeight = on_e.style.height;
              on_e.style.transition = "all 1s";
            </script>
            FOOD
          </div>
          </a>

          <a href="subject.php?tag=politics">
          <div id="two">
            <script>
              var tw_o = document.getElementById("two");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.2) + "px";
              tw_o.style.backgroundColor = "#303030";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            POLITICS
          </div>
          </a>

          <a href="subject.php?tag=religion">
          <div id="three">
            <script>
              var thr_ee = document.getElementById("three");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.2) + "px";
              thr_ee.style.backgroundColor = "#202020";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            RELIGION
          </div>
          </a>

          <a href="subject.php?tag=auto">
          <div id="four">
            <script>
              var thr_ee = document.getElementById("four");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.2) + "px";
              thr_ee.style.backgroundColor = "#303030";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            AUTO
          </div>
          </a>

          <a href="subject.php?tag=education">
          <div id="five">
            <script>
              var thr_ee = document.getElementById("five");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.2) + "px";
              thr_ee.style.backgroundColor = "#202020";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            EDUCATION
          </div>
          </a>

          <a href="subject.php?tag=social">
          <div id="six">
            <script >
              var on_e = document.getElementById("six");
              // on_e.style.width = (screen.width -1200) + "px";
              on_e.style.height = (screen.height - 740.2) + "px";
              on_e.style.backgroundColor = "#303030";
              on_e.style.lineHeight = on_e.style.height;
              on_e.style.transition = "all 1s";
            </script>
            SOCIAL
          </div>
          </a>

          <a href="subject.php?tag=healthBeauty">
          <div id="seven">
            <script>
              var tw_o = document.getElementById("seven");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.2) + "px";
              tw_o.style.backgroundColor = "#202020";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            HEALTH & BEAUTY
          </div>
          </a>

          <a href="subject.php?tag=musicEntertainment">
          <div id="eight">
            <script>
              var thr_ee = document.getElementById("eight");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.2) + "px";
              thr_ee.style.backgroundColor = "#303030";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            MUSIC & ENTERTAINMENT
          </div>
          </a>

          <a href="subject.php?tag=environmentNature">
          <div id="nine">
            <script>
              var tw_o = document.getElementById("nine");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.2) + "px";
              tw_o.style.backgroundColor = "#202020";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            ENVIRONMENT & NATURE
          </div>
          </a>

          <a href="subject.php?tag=techEngineering">
          <div id="ten">
            <script>
              var thr_ee = document.getElementById("ten");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.2) + "px";
              thr_ee.style.backgroundColor = "#303030";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            TECH & ENGINEERING
          </div>
          </a>

          <a href="subject.php?tag=world">
          <div id="eleven">
            <script>
              var tw_o = document.getElementById("eleven");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.2) + "px";
              tw_o.style.backgroundColor = "#202020";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            WORLD
          </div>
          </a>

          <a href="subject.php?tag=sports">
          <div id="twelve">
            <script>
              var thr_ee = document.getElementById("twelve");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.2) + "px";
              thr_ee.style.backgroundColor = "#303030";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            SPORTS
          </div>
          </a>

          <a href="subject.php?tag=personal">
          <div id="thirteen">
            <script>
              var thr_ee = document.getElementById("thirteen");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.2) + "px";
              thr_ee.style.backgroundColor = "#202020";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            PERSONAL
          </div>
          </a>

          <a href="subject.php?tag=fashion">
          <div id="fourteen">
            <script>
              var tw_o = document.getElementById("fourteen");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.2) + "px";
              tw_o.style.backgroundColor = "#303030";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            FASHION
          </div>
          </a>

          <a href="subject.php?tag=weirdones">
          <div id="fifteen">
            <script>
              var thr_ee = document.getElementById("fifteen");
              // thr_ee.style.width = (screen.width -1200) + "px";
              thr_ee.style.height = (screen.height - 740.2) + "px";
              thr_ee.style.backgroundColor = "#202020";
              thr_ee.style.lineHeight = thr_ee.style.height;
              thr_ee.style.transition = "all 1s";
            </script>
            WEIRD ONE'S
          </div>
          </a>


        </div>
  
        <div id="poll">
          <script>
          var poll_box = document.getElementById("poll");
          poll_box.style.width = (screen.width -660) + "px";
          poll_box.style.height = (screen.height - 350) + "px";
          poll_box.style.backgroundColor = "#565656";
          poll_box.style.transition = "all 1s";
        </script>