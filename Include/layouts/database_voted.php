<?php 
    session_start();
    include("../include/function.php");

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

    $table_tag = mysqli_real_escape_string($connection_vote,$_GET["tag"]);
    $pagetitle = setPageTitle($table_tag);
    $post_id = mysqli_real_escape_string($connection_vote,$_GET["id"]);
    $vote = mysqli_real_escape_string($connection_vote,$_GET["vote"]);
    global $vote;

    $query_read_vote_in_percentage = "SELECT * ";
    $query_read_vote_in_percentage .= "FROM vote_in_percentage ";
    $query_read_vote_in_percentage .= "WHERE ";
    $query_read_vote_in_percentage .= "post_id = {$post_id} ";
    $query_read_vote_in_percentage .= "AND ";
    $query_read_vote_in_percentage .= "tag = '{$table_tag}'";
    $result_read_vote_in_percentage = mysqli_query($connection_vote,$query_read_vote_in_percentage);

    if(!$result_read_vote_in_percentage){
      die("Database query_read_vote_in_percentage failed" . mysqli_error($connection_vote));
    }

    for ($j=1; $j<5 ; $j++) { .
    $op[$j] = 0;
    }
    
    $table_name = mysqli_fetch_assoc($result_read_vote_in_percentage);
    $optionNo = 1;
    while($optionNo <5){

      $op[$optionNo] = $table_name["op{$optionNo}"];

      if($op[$optionNo] == NULL || $op[$optionNo] == ""){
      }
      $optionNo++;
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

    $query_read_question = "SELECT * ";
    $query_read_question .= "FROM {$table_tag} ";
    $query_read_question .= "WHERE id = {$post_id}";
    $result_read_question = mysqli_query($connection_read,$query_read_question);

    if(!$result_read_question){
      die("Database query_read_question failed" . mysqli_error($connection_read));
    }

    $table_name_question = mysqli_fetch_assoc($result_read_question);
    for ($i=1; $i<5 ; $i++) { 
      $option_des[$i] = $table_name_question["option_{$i}"];
    }
  ?>
