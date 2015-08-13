<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Public Voice</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../stylesheets/index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="../scripts/index.js"></script>

<?php
  include("../include/layouts/top_index.php");
?>
        <div id="showBox">
          <script>
          var show_box = document.getElementById("showBox");
          show_box.style.width = (screen.width -690) + "px";
          show_box.style.height = (screen.height - 380) + "px";
        </script>
          <?php  include("../include/showPoll.php"); ?>
        </div>
            
        

<?php
  include("../include/layouts/bottom_index.php");
?>