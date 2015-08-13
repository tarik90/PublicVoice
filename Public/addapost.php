<?php
  
  include("../include/layouts/top_addapost.php");
  
?>
      
            <input id="questionBox" type="text" name="question" width="50" placeholder=" Please write your question. REQUIRED" required>
            <hr>
            
            <input id="optionBox" type="text" name="option1" placeholder=" Enter option. REQUIRED" required>
            <br>
            <br>
            <input id="optionBox" type="text" name="option2" placeholder=" Enter option. REQUIRED" required>
            <br>

            <?php
              include("../include/layouts/middle_addapost.php");
            ?>
            
            <input id="emailBox" type="email" name="email" placeholder=" Enter your email. REQUIRED" required>
            <br>
            <input id="optionBox" type="text" name="option3" placeholder=" Enter option">
            <br>
            <br>
            <input id="optionBox" type="text" name="option4" placeholder=" Enter option">
<?php
  
  include("../include/layouts/bottom_addapost.php");
  
?>