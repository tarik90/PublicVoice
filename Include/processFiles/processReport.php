<?php

 include("../../include/function.php");

//create database connection
  $dbhost_report = "localhost";
  $dbuser_report = "pv_cms";
  $dbpass_report = "secret";
  $dbname_report = "public_voice_report";
  $connection_report = mysqli_connect($dbhost_report, $dbuser_report, $dbpass_report,
          $dbname_report);

  if(mysqli_connect_errno()){
    die("Database connection_read failed: " . 
      mysqli_connect_error() . " (" .
        mysqli_connect_errno() .")"
    );
  }

  $report = mysqli_real_escape_string($connection_report,htmlentities(strip_tags($_POST["report"])));  
  $email_inserted = mysqli_real_escape_string($connection_report,htmlentities(strip_tags($_POST["email"])));
  $people = 1;

  if (checkEmailValidity($email_inserted) === false) {
        // 
      header("Location: ../../public/addareport.php?emailsupport=0");
      die();
  }

$encrypted_email_to_upload = encryt_email($email_inserted);
$query_report_upload = "INSERT INTO reports (";
$query_report_upload .= " email_address, report, people ";
$query_report_upload .= ") VALUES (";
$query_report_upload .= " '{$encrypted_email_to_upload}', '{$report}', '{$people}' ";
$query_report_upload .= ")";
      
    $result_report_upload = mysqli_query($connection_report,$query_report_upload);

    if($result_report_upload){
      echo "report from this email Successfuly uploaded<br />";
      header("Location: ../../../public/report.php");
    }else{
      die("Database query_report_upload failedddd" . mysqli_error($connection_report));
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

?>
