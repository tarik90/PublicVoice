<?php
  include("../include/function.php");
  print_r($_POST);
  echo "<hr>";
  print_r($_GET);



//create database connection
  $dbhost_email_vote = "localhost";
  $dbuser_email_vote = "pv_cms";
  $dbpass_email_vote = "secret";
  $dbname_email_vote = "public_voice_email";
  $connection_email_vote = mysqli_connect($dbhost_email_vote, $dbuser_email_vote, $dbpass_email_vote,
          $dbname_email_vote);

  if(mysqli_connect_errno()){
    die("Database connection_read failed: " . 
      mysqli_connect_error() . " (" .
        mysqli_connect_errno() .")"
    );
  }

    $table_tag = mysqli_real_escape_string($connection_email_vote,$_GET["tag"]);
    $post_id = mysqli_real_escape_string($connection_email_vote,$_GET["id"]);
    $email_inserted = mysqli_real_escape_string($connection_email_vote,$_POST["email"]);
    $option_value = mysqli_real_escape_string($connection_email_vote,$_POST["option"]);

  $query_email_vote_check = "SELECT * ";
  $query_email_vote_check .= "FROM voted ";
  $query_email_vote_check .= "WHERE ";
  $query_email_vote_check .= "email_address = '{$email_inserted}' ";
  $query_email_vote_check .= "AND ";
  $query_email_vote_check .= "tag = '{$table_tag}' ";
  $query_email_vote_check .= "AND ";
  $query_email_vote_check .= "post_id = '{$post_id}'";

  $result_email_vote_check = mysqli_query($connection_email_vote,$query_email_vote_check);

  if(!$result_email_vote_check){
    die("Database_email_vote_check query failed" . mysqli_error($connection_email_vote));
    ;
  }

  if(mysqli_num_rows($result_email_vote_check)){
    echo "This email is already being used";
  }else{
    echo "new email found";

  //get number of record exist in the table
  // $query_total_postCount = "SELECT COUNT(*) as total FROM {$title}";
  // $result_total_postCount = mysqli_query($connection_read,$query_total_postCount);
  
  // if(!$result_total_postCount){
  //   die("Database query count failed" . mysqli_error($connection_read));
  }

  if(isset($result__email_vote_check)){
    mysqli_free_result($result__email_vote_check);
  }
  if(isset($connection_email_vote)){
  	mysqli_close($connection_email_vote);
  }



?>