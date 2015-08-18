<div id="navigationSide">
          <script>
            var navigation_Side = document.getElementById("navigationSide");
            navigation_Side.style.width = (screen.width -1180) + "px";
            navigation_Side.style.height = (screen.height - 350) + "px";
          </script>
<!--
          <a href="index.php">
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
          </a>
-->
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

          <a href="aboutUs.php">
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
          </a>

          <a href="report.php"> 
          <div id="report_a_problem">
            <script>
              var report_a_problem = document.getElementById("report_a_problem");
              report_a_problem.style.width = (screen.width -1200) + "px";
              //report_a_problem.style.height = (screen.height - 600) + "px";
              report_a_problem.style.backgroundColor = "#335C33";
              report_a_problem.style.lineHeight = report_a_problem.style.height;
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
           Re
          </div>
-->
        </div>

      </div>


      <div id="comment">
        <script>
          var commentBox = document.getElementById("comment");
          commentBox.style.width = (screen.width -400) + "px";
          //commentBox.style.height = (screen.height - 717) + "px";
          commentBox.style.backgroundColor = "#303030";
          commentBox.style.lineHeight = commentBox.style.height;
        </script>
        <form action="voted.php?tag=<?php echo urlencode($table_tag)?>&id=<?php  echo urlencode($post_id) ?>">
            <input id="commentBox" type="text" name="comment" placeholder=" Write a comment" required>
            <input id="commentEmailBox" type="email" name="email" placeholder=" Enter your email. REQUIRED" required>
            <h3><input id="commentSubmitButton"type="submit" name="submit" value="Comment"></h3>
          </form>
          <hr>
      </div>

      <div id="foot">
        <script>
          var footer = document.getElementById("foot");
          footer.style.width = (screen.width -18) + "px";
          footer.style.height = (screen.height - 717) + "px";
          footer.style.backgroundColor = "#303030";
          footer.style.lineHeight = footer.style.height;
        </script>
        <font id="copyrights">©</font>2015 Public Voice. All Rights Reserved 
<!--
        <div class="social">
          <span class="twitter">
            <a href="https://twitter.com/PublicVoice" class="twitter-follow-button" data-show-count="false">Follow @PublicVoice</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          </span>
          <span class="Facebook">
            <iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/TexasBSA?fref=ts&amp;show_faces=false&amp;layout=button_count" scrolling="no" frameborder="0" style="height: 21px; width: 100px" allowTransparency="true"></iframe>
          </span>
        
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

    <?php
      if(isset($result_read_question)){
        mysqli_free_result($result_read_question);
      }
      if(isset($result_read_vote_in_percentage)){
        mysqli_free_result($result_read_vote_in_percentage);
      }
      if(isset($result_read_to_answer)){
        mysqli_free_result($result_read_to_answer);
      }
      if(isset($connection_vote)){
        mysqli_close($connection_vote);
      }
      if(isset($connection_read)){
        mysqli_close($connection_read);
      }
    ?>

  </body>
</html>