<?php
  
  include("../include/layouts/database_question.php");
  
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>QUESTION FROM <?php echo $pagetitle; ?></title>
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

<?php
  
  include("../include/layouts/top_question.php");
  
?> 
        <div id="formBox">
          <script>
          var form_Box = document.getElementById("formBox");
          form_Box.style.verticalAlign = "middle"
          </script>
<?php

    if(!mysqli_num_rows($result_read_to_answer)){
      echo "Invalid Request !!<br> Requested poll doesn't exist.";
    }
    $option_count = 1;
    while($table_name = mysqli_fetch_assoc($result_read_to_answer)){

      // if($table_name["answered"] == 1){
      //  header("Location: table_named.php?tag=$tag&id=$id&answered=1");
      //  break;
      // }

?>
          
           <?php

              include("../include/layouts/middle_question.php");

            ?>
          <input id="emailBox" type="email" name="email" placeholder=" Enter your email. REQUIRED" required> 
          <input id="optionB" type="radio" name="option" value="1"><?php echo str_repeat('&nbsp;', 5) . $table_name["option_1"] ."<br />"; ?>
          <br>
          <input id="optionB" type="radio" name="option" value="2"><?php echo str_repeat('&nbsp;', 5) . $table_name["option_2"] ."<br />"; ?>
          <br>
          <?php
            if($table_name["option_3"] != "" || $table_name["option_3"] != NULL){
              echo "<input id=\"optionB\" type=\"radio\" name=\"option\" value=\"3\">".str_repeat('&nbsp;', 5).$table_name["option_3"]."<br><br>";
            }

            if($table_name["option_4"] != "" || $table_name["option_4"] != NULL){
              echo "<input id=\"optionB\" type=\"radio\" name=\"option\" value=\"4\">".str_repeat('&nbsp;', 5).$table_name["option_4"]."<br>";
            }

          ?>
            
            <h3><input id="submitButton"type="submit" name="submit" value="submit"></h3>

          </form>
<?php
    
  }

?>

<?php
  
  include("../include/layouts/bottom_question.php");
  
?> 