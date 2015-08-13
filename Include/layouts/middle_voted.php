<?php

          if($vote == 0){
            echo "<div id=\"warningMessage\">You have already VOTED for this poll !!<br></div>";
          }
          if($vote == 1){
            echo "<div id=\"warningMessage\">Your VOTE was SUCCESFULLY Added !!<br></div>";
          }
              for($x=1; $x<5; $x++){

              $output = "<div id=\"percentageBox\">";

              $output .=  $table_name_question["option_$x"];
              $output .= "<br>";
              $output .= "<span id=\"imageBox\">";
              $output .= "<img id=\"imageBar\"";
              $output .= "width=";
              $output .= 5 * $table_name["op$x"];
              $output .= " src=\"..\images\image$x.jpg\">";
              $output .= "</span>";
              $output .= " " . $table_name["op$x"];
              $output .= "%";
            
              $output .= "</div>";

              echo  $output;
            }

?>