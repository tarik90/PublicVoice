<?php
  
  session_start();
  $email_inserted = $_POST["email"];
  $pieces = preg_split('/@/', $email_inserted);
  $database_table_name = $pieces[0];

 

//create database connection
  $dbhost_email = "localhost";
  $dbuser_email = "pv_cms";
  $dbpass_email = "secret";
  $dbname_email = "public_voice_email";
  $connection_email = mysqli_connect($dbhost_email, $dbuser_email, $dbpass_email,
          $dbname_email);

  if(mysqli_connect_errno()){
    die("Database connection1 failed: " . 
      mysqli_connect_error() . " (" .
        mysqli_connect_errno() .")"
    );
  }

  $query_email_check = "SELECT * ";
  $query_email_check .= "FROM email ";
  $query_email_check .= "WHERE email_address = '{$email_inserted}'";
  $result_email_check = mysqli_query($connection_email,$query_email_check);

  if(!$result_email_check){
    die("Database_email_check query failed" . mysqli_error($connection_email));
    ;
  }

  if(mysqli_num_rows($result_email_check)){
    echo "This email is already being used";
  }else{
    //echo "new email found";

    global $email_inserted;
    $query_email_insert = "INSERT INTO email (";
    $query_email_insert .= " email_address ";
    $query_email_insert .= ") VALUES (";
    $query_email_insert .= " '{$email_inserted}' ";
    $query_email_insert .= ")";
      
    $result_email_insert = mysqli_query($connection_email,$query_email_insert);

    if($result_email_insert){
      //echo "Success2 <br />";
      header("Location: confirm.php");
    }else{
      die("Database_Email_insert query failedddd" . mysqli_error($connection_email));
    }

  }
      

  // $tech = mysqli_fetch_assoc($result1)









     //release return data
    mysqli_free_result( $result_email_check);
  //closing conncetion
    mysqli_close($connection_email);
?>