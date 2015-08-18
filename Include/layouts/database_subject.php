<?php

  if(!isset($_GET["tag"])){
    header("Location: topics.php");
    die();
  }

  include("include/function.php");

  $dbhost_vote = "localhost";
  $dbuser_vote = "pv_cms";
  $dbpass_vote = "secret";
  $dbname_vote = "public_voice_email";
  $connection_vote = mysqli_connect($dbhost_vote, $dbuser_vote, $dbpass_vote,
            $dbname_vote);

    if(mysqli_connect_errno()){
      die("Database connection_vote failed: " . 
        mysqli_connect_error() . " (" .
          mysqli_connect_errno() .")"
      );
    }

  $dbhost_read_post = "localhost";
  $dbuser_read_post = "pv_cms";
  $dbpass_read_post = "secret";
  $dbname_read_post = "public_voice";
  $connection_read = mysqli_connect($dbhost_read_post, $dbuser_read_post, $dbpass_read_post,
          $dbname_read_post);

  if(mysqli_connect_errno()){
    die("Database connection_read failed: " . 
      mysqli_connect_error() . " (" .
        mysqli_connect_errno() .")"
    );
  }

  $table_tag = mysqli_real_escape_string($connection_vote,$_GET["tag"]);
  $pagetitle = setPageTitle($table_tag);

  //get number of record exist in the table
  $query_total_postCount = "SELECT COUNT(*) as total FROM {$table_tag}";
  $result_total_postCount = mysqli_query($connection_read,$query_total_postCount);
  
  if(!$result_total_postCount){
    die("Database query count failed" . mysqli_error($connection_read));
  }
  else{
    $data = mysqli_fetch_assoc($result_total_postCount);
    $id = 0;
    $id = $data["total"];
  }
?>