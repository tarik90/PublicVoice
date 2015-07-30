<!--
  <?php include("../layout/header.php"); ?>
-->
<?php include("../include/function.php"); ?>
<?php 

  //create database connection
// define("DB_SERVER", "localhost");
// define("DB_USER", "pv_cms");
// define("DB_PASS", "secret");
// define("DB_NAME", "public_voice")

  $dbhost = "localhost";
  $dbuser = "pv_cms";
  $dbpass = "secret";
  $dbname = "public_voice";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass,
          $dbname);

  if(mysqli_connect_errno()){
    die("Database connection failed: " . 
      mysqli_connect_error() . " (" .
        mysqli_connect_errno() .")"
    );
  }
  ?>
  <?php
  $query = "SELECT * ";
  $query .= "FROM subject ";
  $query .= "WHERE visible = 1 ";
  $query .= "ORDER BY position ASC";
  $result = mysqli_query($connection,$query);

  confirm_query($result); //inside function.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>MANAGE CONETNT-Public Voice</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1>Welcome to MANAGE CONTENT</h1>


    <h2>Manage Conetnt</h2>
<?php
    while($subjects = mysqli_fetch_assoc($result)){
?>
    <ul>
      <!--
        <li><?php  echo $subjects["id"] . "<br />";   ?></li>
      -->
        <li>
            <a href="managecontent.php?subject=<?php echo urlencode($subjects["id"]) ?>"><?php  echo $subjects["menu_name"] . "<br />";   ?></li></a>
          
      <!--
        <li><?php  echo $subjects["position"] . "<br />";   ?></li>
        <li><?php  echo $subjects["visible"] . "<br />"; echo "<hr />";  ?></li>
      -->
    </ul>

<?php
?>

  </body>
</html>
 <?php 

  //release return data
    mysqli_free_result($result);
  //closing conncetion
    if(isset($connection)){
      mysqli_close($connection);
    }
  ?>
