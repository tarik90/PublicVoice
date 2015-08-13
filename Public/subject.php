<?php
  include("../include/layouts/database_subject.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>PV - <?php echo $pagetitle; ?></title>
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
  
  include("../include/layouts/top_subject.php");
  
?>

<?php
      //printing all backward----------------------------------------new post on the top
  global $id;
  $counter = $id;

  while ($counter != 0){
  ?>

<?php
  include("../include/layouts/middle_subject.php"); 
?>
      

    
    <hr width="95%">
  </div>

  <?php
    $counter--;
  }
  ?>
        </div>

<?php
  include("../include/layouts/bottom_subject.php");
?>