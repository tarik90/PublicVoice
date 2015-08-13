<?php
  include("../include/function.php");
  $table_tag = $_GET["tag"];
  $pagetitle = setPageTitle($table_tag);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>+? <?php echo $pagetitle; ?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../stylesheets/index.css">
      <link rel="stylesheet" type="text/css" href="../stylesheets/subject.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="index.js"></script>
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
        //screen_style.style.height = (screen.height - 121) + "px";
        //screen_style.style.height = "auto";
        screen_style.style.backgroundColor = "#222222";
        screen_style.style.overflowX = "auto";
        screen_style.style.overflowY = "auto"; 
      </script>

      <div id="head">
        <script>
          var head_style = document.getElementById("head");
          head_style.style.width = (screen.width -18) + "px";
          head_style.style.height = (screen.height - 670) + "px";
          //head_style.style.backgroundColor = "#335C33";
          head_style.style.backgroundColor = "#303030";
        </script>
      </div>
    
      <div id="midpage">
        <script>
          var mid_page = document.getElementById("midpage");
          mid_page.style.width = (screen.width -18) + "px";
          //mid_page.style.height = (screen.height - 310) + "px";
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
          poll_box.style.width = (screen.width -570) + "px";
          poll_box.style.height = (screen.height - 262) + "px";
          //poll_box.style.height = "auto";
          poll_box.style.backgroundColor = "#565656";
          poll_box.style.transition = "all 1s";
          poll_box.style.zIndex = "1";
          //poll_box.style.marginTop = 25 + "px";
        </script>

        <div id="formBox">
          <script>
          var form_Box = document.getElementById("formBox");
          form_Box.style.verticalAlign = "middle"
          </script>
          <form action="../include/processFiles/processQuestion.php?tag=<?php echo urlencode($table_tag); ?>" method="post">