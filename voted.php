<?php
  
  include("include/layouts/database_voted.php");
  
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>QUESTION FROM <?php echo $pagetitle; ?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="stylesheets/index.css">
      <link rel="stylesheet" type="text/css" href="stylesheets/subject.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="index.js"></script>
      <link rel="shortcut icon" type="image/x-icon" href="images/webIcon.ico">
  </head>
  
<?php
  include("include/layouts/top_voted.php");
?> 
        <div id="formBox">
          <script>
          var form_Box = document.getElementById("formBox");
          form_Box.style.verticalAlign = "middle"
          </script>
            
          <h3 id="question"><?php echo $table_name_question["post_description"]."<br/>" ?></h3>
          <hr>
<?php 
  include("include/layouts/middle_voted.php");
?> 
        </div>
        </div>
<?php
  include("include/layouts/bottom_voted.php");
?> 