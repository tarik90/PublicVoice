<?php
  
  include("../include/function.php");
  $title = $_GET["tag"];

  $pagetitle = setPageTitle($title);

  session_start();

//create database connection
  $dbhost = "localhost";
  $dbuser = "pv_cms";
  $dbpass = "secret";
  $dbname = "public_voice";
  $connection1 = mysqli_connect($dbhost, $dbuser, $dbpass,
          $dbname);

  if(mysqli_connect_errno()){
    die("Database connection1 failed: " . 
      mysqli_connect_error() . " (" .
        mysqli_connect_errno() .")"
    );
  }

  //get number of record exist in the table
  $query1 = "SELECT COUNT(*) as total FROM {$title}";
  $result1 = mysqli_query($connection1,$query1);
  
  if(!$result1){
    die("Database query count failed" . mysqli_error($connection1));
  }
  else{
    $data = mysqli_fetch_assoc($result1);
    $id = 0;
    $id = $data["total"];
  }

  // global $connection1;
  // $id = mysqli_insert_id($connection1);
  // echo $id;
  //echo $id. "<br/>";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>PV - <?php echo $pagetitle; ?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="index.css">
      <link rel="stylesheet" type="text/css" href="subject.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="index.js"></script>


  </head>
  <body>
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

    <div id="box">
      <script>
        var screen_style = document.getElementById("box");
        screen_style.style.maxWidth = (screen.width -17) + "px";
        //screen_style.style.height = (screen.height - 121) + "px";
        screen_style.style.backgroundColor = "#222222";
        screen_style.style.overflowX = "auto";
        screen_style.style.overflowY = "auto"; 
      </script>

      <div id="head">
        <script>
          var head_style = document.getElementById("head");
          head_style.style.width = (screen.width -18) + "px";
          head_style.style.height = (screen.height - 650) + "px";
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
          poll_box.style.height = (screen.height - 100) + "px";
          poll_box.style.backgroundColor = "#565656";
          poll_box.style.transition = "all 1s";
          poll_box.style.zIndex = "1";
        </script>
      <?php

      //printing all backward----------------------------------------new post on the top

  global $id;
  $counter = $id;

  while ($counter != 0){
  
      //perform database query
  $query2 = "SELECT * ";
  $query2 .= "FROM {$title} ";
  $query2 .= "WHERE id = {$counter}";
  $result2 = mysqli_query($connection1,$query2);

  if(!$result2){
    die("Database query read failed" . mysqli_error($connection1));
  }

  //use returned data
        while($table_name = mysqli_fetch_assoc($result2)){
      ?>
  <ul id="eachSubject">  
      <li><a href="question.php?ques=<?php echo urlencode($table_name["post_description"]); ?>&tag=<?php echo urlencode($title); ?>&id=<?php echo urlencode($table_name["id"]); ?>">
          <?php  echo $table_name["post_description"] . "<br />";  ?></a></li>
      <li><?php  echo $table_name["option_1"] . "<br />";   ?></li>
      <li><?php  echo $table_name["option_2"] . "<br />";   ?></li>
      <li><?php  echo $table_name["option_3"] . "<br />";   ?></li>
      <li><?php  echo $table_name["option_4"] . "<br />";   ?></li>
      <hr width="95%">
  </ul>

  <?php
    }

    $counter--;

  }
  ?>
        </div>

        <div id="navigationSide">
          <script>
            var navigation_Side = document.getElementById("navigationSide");
            navigation_Side.style.width = (screen.width -1180) + "px";
            navigation_Side.style.height = (screen.height - 350) + "px";
          </script>

          <div id="addapost">
            <script>
              var add_a_post = document.getElementById("addapost");
              add_a_post.style.width = (screen.width -1180) + "px";
              add_a_post.style.height = (screen.height - 710) + "px";
              add_a_post.style.backgroundColor = "#335C33";
              add_a_post.style.lineHeight = add_a_post.style.height;
            </script>
            ADD NEW POLL
          </div>

          <a href="index.php">
            <div id="home_side">
            <script>
              var home = document.getElementById("home_side");
              home.style.width = (screen.width -1200) + "px";
              home.style.height = (screen.height - 710) + "px";
              home.style.backgroundColor = "#335C33";
              home.style.lineHeight = home.style.height;
            </script>
            HOME
          </div>
          </a>

          <div id="aboutUs">
            <script>
              var about_us = document.getElementById("aboutUs");
              about_us.style.width = (screen.width -1200) + "px";
              about_us.style.height = (screen.height -710) + "px";
              about_us.style.backgroundColor = "#335C33";
              about_us.style.lineHeight = about_us.style.height;
            </script>
            ABOUT US
          </div>

          <div id="donate">
            <script>
              var don_ate = document.getElementById("donate");
              don_ate.style.width = (screen.width -1200) + "px";
              don_ate.style.height = (screen.height - 710) + "px";
              don_ate.style.backgroundColor = "#335C33";
              don_ate.style.lineHeight = don_ate.style.height;
            </script>
            DONATE
          </div>

          <div id="peopleOnline">
            <script>
              var people_online = document.getElementById("peopleOnline");
              people_online.style.width = (screen.width -1180) + "px";
              people_online.style.height = (screen.height - 710) + "px";
              people_online.style.backgroundColor = "#335C33";
              people_online.style.lineHeight = people_online.style.height;
            </script>
           1M PEOPLE
          </div>

        </div>

      </div>
<!--
      <div id="foot">
        <script>
          var footer = document.getElementById("foot");
          footer.style.width = (screen.width -18) + "px";
          footer.style.height = (screen.height - 697) + "px";
          footer.style.backgroundColor = "#303030";
          footer.style.lineHeight = footer.style.height;
        </script>
        Copyrights <font id="copyrights">©</font>2015 Public Voice. All Rights Reserved 

        <div class="social">
          <span class="twitter">
            <a href="https://twitter.com/PublicVoice" class="twitter-follow-button" data-show-count="false">Follow @PublicVoice</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          </span>
          <span class="Facebook">
            <iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/TexasBSA?fref=ts&amp;show_faces=false&amp;layout=button_count" scrolling="no" frameborder="0" style="height: 21px; width: 100px" allowTransparency="true"></iframe>
          </span>
          <!--
          <span id="user_counter">
            <script language="JavaScript"> 
              var ref = (''+document.referrer+'');
              var w_h = window.screen.width + " x " + window.screen.height;
              document.write('<script src="http://s1.freehostedscripts.net/ocounter.php?site=ID4911716&e1=Online User&e2=Online Users&r=' + ref + '&m=0&wh=' + w_h + '"><\/script>'); 
            </script>
          </span> 
        -->
        </div>
       <!-- 
        <div id="facebook">
          <script type="text/javascript">
            var face_book = getElementById("facebook");
            face_book.style.lineHeight = face_book.style.height;
          </script>
        <div id="twitter">
          <a href="https://twitter.com/PublicVoice" class="twitter-follow-button" data-show-count="false">Follow @PublicVoice</a>
            <script>
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
              if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
              fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            </script>
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" 
            data-layout="button_count" data-action="like" data-show-faces="true" data-share="false">
          </div>
        </div>


      </div>
--
    </div>
-->


     
      
  </body>
<?php
      mysqli_free_result($result1);
    mysqli_free_result($result2);
  //closing conncetion
    mysqli_close($connection1);

?>
</html>