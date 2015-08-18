<?php

  include("../function.php");

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

  $table_tag = mysqli_real_escape_string($connection_email_vote,htmlentities(strip_tags($_GET["tag"])));
  $post_id = mysqli_real_escape_string($connection_email_vote,htmlentities(strip_tags($_GET["id"])));
  
  $email_inserted = mysqli_real_escape_string($connection_email_vote,htmlentities(strip_tags($_POST["email"])));
  if (checkEmailValidity($email_inserted) === false) {
      header("Location: ../../wanquestion.php?emailsupport=0&ques=&tag=".urlencode($table_tag)."&id=".$post_id);
      die();
  }

  $option_value = mysqli_real_escape_string($connection_email_vote,htmlentities(strip_tags($_POST["option"])));
  $query_email_vote_check = "SELECT email_address ";
  $query_email_vote_check .= "FROM voted ";
  $query_email_vote_check .= "WHERE ";
  $query_email_vote_check .= "tag = '{$table_tag}' ";
  $query_email_vote_check .= "AND ";
  $query_email_vote_check .= "post_id = '{$post_id}'";

  $result_email_vote_check = mysqli_query($connection_email_vote,$query_email_vote_check);
  if(!$result_email_vote_check){
    header("Location: ../../wanquestion.php?ques=&tag=".urlencode($table_tag)."&id=".$post_id);
    die("Database_email_vote_check query failed" . mysqli_error($connection_email_vote));
    ;
  }

  $row = mysqli_fetch_array($result_email_vote_check, MYSQLI_NUM);
    $email_address_output = array();
    while($row = mysqli_fetch_assoc($result_email_vote_check)){
        $email_address_output[] = $row;
    }
    foreach ($email_address_output as $row){
            foreach ($row as $existing_email){
                echo $existing_email."<br>";
                $encrypted_email = crypt($email_inserted, $existing_email);
                if($encrypted_email === $existing_email){
                   header("Location: ../../wanvoted.php?vote=0&tag=". urlencode($table_tag) . "&id=" . $post_id);
                   die ();
                }
            }
        }

    $encrypted_email_to_upload = encryt_email($email_inserted);
    $query_email_vote_upload = "INSERT INTO voted (";
    $query_email_vote_upload .= " email_address, tag, post_id, voted_option ";
    $query_email_vote_upload .= ") VALUES (";
    $query_email_vote_upload .= " '{$encrypted_email_to_upload}', '{$table_tag}', '{$post_id}', '{$option_value}' ";
    $query_email_vote_upload .= ")";
      
    $result_email_vote_upload = mysqli_query($connection_email_vote,$query_email_vote_upload);
    if($result_email_vote_upload){
      echo "Vote from this email Successfuly uploaded<br />";
      //header("Location: question.php?voted=1&tag=". urlencode($table_tag) . "&postid=" . $post_id);
    }else{
      header("Location: topics.php");
      die("Database query_email_vote_upload failedddd" . mysqli_error($connection_email_vote));
    }

    $dbhost_vote = "localhost";
    $dbuser_vote = "pv_cms";
    $dbpass_vote = "secret";
    $dbname_vote = "public_voice_option";
    $connection_vote = mysqli_connect($dbhost_vote, $dbuser_vote, $dbpass_vote,
            $dbname_vote);

    if(mysqli_connect_errno()){
      die("Database connection_vote failed: " . 
        mysqli_connect_error() . " (" .
          mysqli_connect_errno() .")"
      );
    }

    global $table_tag;
    $query_read_vote = "SELECT * ";
    $query_read_vote .= "FROM {$table_tag} ";
    $query_read_vote .= "WHERE id = {$post_id}";
    $result_read_vote = mysqli_query($connection_vote,$query_read_vote);

    if(!$result_read_vote){
      header("Location: topics.php");
      die("Database query read failed" . mysqli_error($connection_vote));
    }

    for ($j=1; $j<5 ; $j++) { 
      $op_vote[$j] = 0;
    }
    // echo $table_tag."<br>";
    // echo $post_id."<br>";
    // echo $email_inserted."<br>";
    // echo $option_value."<br>";
        
    $table_name = mysqli_fetch_assoc($result_read_vote);
    $optionNo = 1;
    while($optionNo <5){
      $op_vote[$optionNo] = $table_name["op{$optionNo}_vote"];

       if($op_vote[$optionNo] == NULL || $op_vote[$optionNo] == "" ){
        echo "op_vote is null" . "<br>";
       }
      $optionNo++;
    }

    switch ($option_value) {
      case 1:
        $op_vote[1] = $op_vote[1] + 1;
        echo $op_vote[1]."<br>";
        $query_vote_upload = "UPDATE {$table_tag} ";
        $query_vote_upload .= "SET ";
        $query_vote_upload .= "op1_vote = '{$op_vote[1]}' "; 
        $query_vote_upload .= "WHERE post_id = '{$post_id}'";
        break;
      case 2:
        $op_vote[2] = $op_vote[2] + 1;
        echo $op_vote[2]."<br>";
        $query_vote_upload = "UPDATE {$table_tag} ";
        $query_vote_upload .= "SET ";
        $query_vote_upload .= "op2_vote = '{$op_vote[2]}' ";
        $query_vote_upload .= "WHERE post_id = '{$post_id}'";
            break;
      case 3:
        $op_vote[3] = $op_vote[3] + 1;
        echo $op_vote[3]."<br>";
        $query_vote_upload = "UPDATE {$table_tag} ";
        $query_vote_upload .= "SET ";
        $query_vote_upload .= "op3_vote = '{$op_vote[3]}' ";
        $query_vote_upload .= "WHERE post_id = '{$post_id}'";
        break;
      case 4:
        $op_vote[4] = $op_vote[4] + 1;
        echo $op_vote[4]."<br>";
        $query_vote_upload = "UPDATE {$table_tag} ";
        $query_vote_upload .= "SET ";
        $query_vote_upload .= "op4_vote = '{$op_vote[4]}' ";
        $query_vote_upload .= "WHERE post_id = '{$post_id}'";
        break;
      default:
        # code...
        echo "Code Error. Check vote values";
        break;
    }

    $success_vote_upload = mysqli_query($connection_vote,$query_vote_upload);
    if($success_vote_upload){
      //echo "Success2 <br />";
      //header("Location: subject.php?tag=". urlencode($table_tag));
    }else{
      header("Location: topics.php");
      die("Database query_vote_upload  failedddd" . mysqli_error($connection_vote));
    }

    $op1 = voteInPercentage($op_vote[1], $op_vote[1], $op_vote[2], $op_vote[3], $op_vote[4]);
    $op2 = voteInPercentage($op_vote[2], $op_vote[1], $op_vote[2], $op_vote[3], $op_vote[4]);
    $op3 = voteInPercentage($op_vote[3], $op_vote[1], $op_vote[2], $op_vote[3], $op_vote[4]);
    $op4 = voteInPercentage($op_vote[4], $op_vote[1], $op_vote[2], $op_vote[3], $op_vote[4]);
    // echo "<br>".$op1."<br>";
    // echo $op2."<br>";
    // echo $op3."<br>";
    // echo $op4."<br>";
    // echo $table_tag."<br>";
    // echo $post_id."<br>";
    $query_vote_percentage_upload = "UPDATE vote_in_percentage ";
    $query_vote_percentage_upload .= "SET ";
    $query_vote_percentage_upload .= "op1 = '{$op1}', ";
    $query_vote_percentage_upload .= "op2 = '{$op2}', ";
    $query_vote_percentage_upload .= "op3 = '{$op3}', ";
    $query_vote_percentage_upload .= "op4 = '{$op4}' "; 
    $query_vote_percentage_upload .= "WHERE post_id = '{$post_id}' ";
    $query_vote_percentage_upload .= "AND ";
    $query_vote_percentage_upload .= "tag = '{$table_tag}'";

    $success_vote_percentage_upload = mysqli_query($connection_email_vote,$query_vote_percentage_upload);
    if($success_vote_upload){
      header("Location: ../../voted.php?vote=1&tag=". urlencode($table_tag) . "&id=" . $post_id);
    }else{
      header("Location: topics.php");
      die("Database query_vote_percentage upload  failedddd" . mysqli_error($connection_email_vote));
    }

  if(isset($result_read_vote)){
    mysqli_free_result($result_read_vote);
  }
  if(isset($result_email_vote_check)){
    mysqli_free_result($result_email_vote_check);
  }
  if(isset($connection_email_vote)){
  	mysqli_close($connection_email_vote);
  }
  if(isset($connection_vote)){
    mysqli_close($connection_vote);
  }

?>