 <form action="../include/processFiles/processVote.php?tag=<?php echo urlencode($table_tag); ?>&id=<?php echo $post_id; ?>" method="post">
            
          <h3 id="question"><?php echo $table_name["post_description"]."<br/>" ?></h3>
          <hr>
           <?php
              if(isset($_GET["emailsupport"]))
              {
                echo "<div id=\"emailBox\"><p style=\"font-size:15px\"># Please insert a valid email !</p>"."</div>"."<br>";
              }
            ?>