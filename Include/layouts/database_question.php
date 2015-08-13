<?php
  session_start();
  include("../include/function.php");

  $post_id = $_GET["id"];
  $table_tag = $_GET["tag"];
  global $id;
  global $post_id;
  $pagetitle = setPageTitle($table_tag);

//create database connection_read
  $dbhost_read = "localhost";
  $dbuser_read = "pv_cms";
  $dbpass_read = "secret";
  $dbname_read = "public_voice";
  $connection_read = mysqli_connect($dbhost_read, $dbuser_read, $dbpass_read,
          $dbname_read);

  if(mysqli_connect_errno()){
    die("Database connection_read failed: " . 
      mysqli_connect_error() . " (" .
        mysqli_connect_errno() .")"
    );
  }

  $query_read_to_answer = "SELECT * ";
  $query_read_to_answer .= "FROM {$table_tag} ";
  $query_read_to_answer .= "WHERE id = {$post_id}";
  $result_read_to_answer = mysqli_query($connection_read,$query_read_to_answer);

  if(!$result_read_to_answer){
    die("Database query_read_to_answer failed" .  mysqli_error($connection_read));
  }

?>