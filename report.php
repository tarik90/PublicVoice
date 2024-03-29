<?php
  include("include/layouts/database_report.php");
?>  

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>PV - REPORT</title>
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
  include("include/layouts/top_report.php"); 
?> 
  
<?php

  //printing all backward----------------------------------------new post on the top

  global $id;
  $counter = $id;
  while ($counter != 0){
?>

<?php
  include("include/layouts/middle_report.php");
?> 
  	<div id="eachSubject">  
      <h4><?php  echo $table_name["report"] . "<br />";  ?></a></h4>
      <h6>Problem tag: <?php echo " " . setPageTitle($table_name["problemIn"]); ?></h6>

      <div><?php if($table_name["people"] === "1"){ echo 1 . " person ";}else {echo $table_name["people"] . " people ";} ?> have this problem </div>
      <div><button id="problemButton" name="problem" type="submit" value="1">I have this problem too</button></div>
    <hr>
  </div>
  </form>

<?php
    $counter--;
  }
?>

<?php
  include("include/layouts/bottom_report.php");
?> 