<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Public Voice</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="index.css">
      <link rel="stylesheet" type="text/css" href="subject.css">
      <link rel="stylesheet" type="text/css" href="aboutUs.css">
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
        screen_style.style.height = (screen.height - 125) + "px";
        screen_style.style.backgroundColor = "#222222";
        screen_style.style.overflowX = "auto";
        screen_style.style.overflowY = "auto"; 
      </script>

      <div id="head">
        <script>
          var head_style = document.getElementById("head");
          head_style.style.width = (screen.width -18) + "px";
          head_style.style.height = (screen.height - 560) + "px";
          //head_style.style.backgroundColor = "#335C33";
          head_style.style.backgroundColor = "#303030";

        </script>
        <div><img width="320" height="135" src="websiteLogo.jpg"></div>


      </div>
    
      <div id="midpage">
        <script>
          var mid_page = document.getElementById("midpage");
          mid_page.style.width = (screen.width -18) + "px";
          mid_page.style.height = (screen.height - 384) + "px";
        </script>
  
        <div id="poll">
          <script>
          var poll_box = document.getElementById("poll");
          poll_box.style.width = (screen.width -550) + "px";
          poll_box.style.height = (screen.height - 384) + "px";
          poll_box.style.backgroundColor = "#565656";
          poll_box.style.transition = "all 1s";
        </script>
        <div id="aboutUsContent">
       	<script>
          var aboutUsContent = document.getElementById("aboutUsContent");
          aboutUsContent.style.width = (screen.width -605) + "px";
          aboutUsContent.style.height = (screen.height - 420) + "px";
          aboutUsContent.style.backgroundColor = "#565656";
          aboutUsContent.style.transition = "all 1s";
        </script>
        	<p>Public Voice is a public voting machine to count peoples point of view in a matter. You can vote or raise queston 
        		on many different topics and know others viewpoint about that matter. So add/vote to raise your concern.
        	</p>

        	<h4><u>How to use</u></h4>
        	<p>1. Go to the topic page you want.</p>
        	<p>2. Click "Add a poll" to add a question.</p>
        	<p>3. Vote in the question.</p>
        	<p>4. It will show on the subject page of every topic.</p>
        	<p>5. Valid email address is required to add/vote in a question.</p>
        	<P></P>
          <br>
        	<h4><b>NOTE:</b> <i>YOU CAN <u>NOT</u> VOTE IN A SAME QUESTION TWICE.<br>YOUR EMAIL IS BEING <u>ENCRYPTED</u> BEFORE SAVING INTO DATABSE.
        	 AND WE DO NOT SHARE OR USE IT FOR LATER.</i><h4>
        </div>
        
        </div>

        <div id="news">
          <script>
            var news_box = document.getElementById("news");
            news_box.style.width = (screen.width -1090) + "px";
            news_box.style.height = (screen.height - 394) + "px";
          </script>

        <div id="navigationAbout">
          <script>
            var navigation_Side = document.getElementById("navigationSide");
            navigation_Side.style.width = (screen.width -1180) + "px";
            navigation_Side.style.height = (screen.height - 394) + "px";
          </script>

          <a href="index.php">
            <div id="home_sideAbout">
            <script>
              var home_aboutUs = document.getElementById("home_sideAbout");
              home_aboutUs.style.width = (screen.width -1000) + "px";
              home_aboutUs.style.height = (screen.height - 710) + "px";
              home_aboutUs.style.backgroundColor = "#335C33";
              home_aboutUs.style.lineHeight = home_aboutUs.style.height;
            </script>
            HOME
          </div>
          </a>
<!--
         <a href="">
          <div id="contactUsAbout">
            <script>
              var contactUs_about = document.getElementById("contactUsAbout");
              contactUs_about.style.width = (screen.width -1000) + "px";
              contactUs_about.style.height = (screen.height - 710) + "px";
              contactUs_about.style.backgroundColor = "#335C33";
              contactUs_about.style.lineHeight = contactUs_about.style.height;
            </script>
            CONTACT US
          </div>
		 </a>
    -->
          <a href="report.php">
           <div id="report">
            <script>
              var report = document.getElementById("report");
              report.style.width = (screen.width -1000) + "px";
              report.style.height = (screen.height -710) + "px";
              report.style.backgroundColor = "#335C33";
              report.style.lineHeight = report.style.height;
            </script>
            REPORT A PROBLEM
          </div>
     	 </a>
<!--	
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
-->
        </div>

        </div>

      </div>

      <div id="foot">
        <script>
          var footer = document.getElementById("foot");
          footer.style.width = (screen.width -18) + "px";
          footer.style.height = (screen.height - 717) + "px";
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