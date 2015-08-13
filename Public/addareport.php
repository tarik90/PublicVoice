<?php
  
  include("../include/layouts/top_addareport.php");
  
?>

            <h4>Any Problem/Suggestion? Write us.</h4>
            <hr>
            
            <input id="reportBox" type="text" name="report" placeholder=" Write any issue you are having or any suggestion for us" required>
            <br>
            <br>
            <?php
                include("../include/layouts/middle_addareport.php");
            ?>
            
            <input id="reportEmailBox" type="email" name="email" placeholder=" Enter your email. REQUIRED" required>
            <br>
            <h3><input id="submitButton"type="submit" name="submit" value="submit"></h3>
<?php
  
  include("../include/layouts/bottom_addareport.php");
  
?>         