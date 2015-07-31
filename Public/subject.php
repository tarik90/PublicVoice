<?php
  $title = $_GET["id"];

  switch ($title) {
    case 'techEngineering':
      $title = "TECH & ENGINEERING";
      break;
    case 'food':
      $title = "FOOD";
      break;  
    case 'politics':
      $title = "POLITICS";
      break;  
    case 'auto':
      $title = "AUTO";
      break;  
    case 'religion':
      $title = "RELIGION";
      break;  
    case 'social':
      $title = "SOCIAL";
      break;
    case 'musicEntertainment':
      $title = "MUSIC & ENTERTAINMENT";
      break;
    case 'environmentNature':
      $title = "ENVIRONMENT & NATURE";
      break;
    case 'sports':
      $title = "SPORTS";
      break;
    case 'personal':
      $title = "PERSONAL";
      break;
    case 'fashion':
      $title = "FASHION";
      break;
    case 'healthBeauty':
      $title = "HEALTH & BEAUTY";
      break;
    case 'weirdones':
      $title = "WEIRD ONE'S";
      break;
     case 'education':
      $title = "EDUCATION";
      break;
    case 'beauty':
      $title = "BEAUTY";
      break;
    default:
      # code...
      $title = "NO TITLE IS SET FOR THIS PAGE";
      break;
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <title>PV - <?php echo $title; ?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="index.css">
      <link rel="stylesheet" type="text/css" href="tech.css">
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
        screen_style.style.height = (screen.height - 121) + "px";
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
          mid_page.style.height = (screen.height - 310) + "px";
        </script>

        <div id="subjects">
          <script>
          var sub_jects = document.getElementById("subjects");
          sub_jects.style.width = (screen.width -1115) + "px";
          sub_jects.style.height = (screen.height - 350) + "px";
          sub_jects.style.transition = "all 1s";
        </script>

          <a href="subject.php?id=food">
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

          <a href="subject.php?id=politics">
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

          <a href="subject.php?id=religion">
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

          <a href="subject.php?id=auto">
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

          <a href="subject.php?id=education">
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

          <a href="subject.php?id=social">
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

          <a href="subject.php?id=healthBeauty">
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

          <a href="subject.php?id=musicEntertainment">
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

          <a href="subject.php?id=environmentNature">
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

          <a href="subject.php?id=techEngineering">
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

          <a href="subject.php?id=beauty">
          <div id="eleven">
            <script>
              var tw_o = document.getElementById("eleven");
              // tw_o.style.width = (screen.width -1200) + "px";
              tw_o.style.height = (screen.height - 740.2) + "px";
              tw_o.style.backgroundColor = "#202020";
              tw_o.style.lineHeight = tw_o.style.height;
              tw_o.style.transition = "all 1s";
            </script>
            BEAUTY
          </div>
          </a>

          <a href="subject.php?id=sports">
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

          <a href="subject.php?id=personal">
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

          <a href="subject.php?id=fashion">
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

          <a href="subject.php?id=weirdones">
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
        </script>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>
        <p>sdklfjlsdkjfkldsjlkfjklsdjfkljsldkjfkl</p>

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
-->
    </div>



     
      
  </body>
</html>