<?php
  session_start();

  include("../include/function.php");


//create database connection -------------------------------------------------------
  $dbhost_report = "localhost";
  $dbuser_report = "pv_cms";
  $dbpass_report = "secret";
  $dbname_report = "public_voice_report";
  $connection_report = mysqli_connect($dbhost_report, $dbuser_report, $dbpass_report,
            $dbname_report);

    if(mysqli_connect_errno()){
      die("Database connection_report failed: " . 
        mysqli_connect_error() . " (" .
          mysqli_connect_errno() .")"
      );
    }

   //how many people have same peoblem
   if(isset($_POST["problem"]) && isset($_GET["id"])){

	  $problemVote = $_POST["problem"];
	  $id = $_GET["id"];


	  $query_read_report = "SELECT people ";
	  $query_read_report .= "FROM reports ";
	  $query_read_report .= "WHERE id = '{$id}'";
	  $result_read_report = mysqli_query($connection_report,$query_read_report);

	  if(!$result_read_report){
	    die("Database query read failed" . mysqli_error($connection_report));
  }

  //update the number of people have same problem
  $table_name = mysqli_fetch_assoc($result_read_report);

  	$problem = $table_name["people"];
    $problem = $problem + $problemVote;

    $query_vote_upload = "UPDATE reports ";
    $query_vote_upload .= "SET ";
    $query_vote_upload .= "people = '{$problem}' ";
    $query_vote_upload .= "WHERE id = '{$id}'";
    
    $result_vote_upload = mysqli_query($connection_report,$query_vote_upload);

    if($result_vote_upload){
      // echo "vote for problem Successfuly uploaded<br />";
      // header("Location: report.php");
      //die();
    }else{
      die("Database query_vote_upload failedddd" . mysqli_error($connection_report));
    }
}
  //get number of record exist in the table
  $query_total_postCount = "SELECT COUNT(*) as total FROM reports";
  $result_total_postCount = mysqli_query($connection_report,$query_total_postCount);
  
  if(!$result_total_postCount){
    die("Database query count failed" . mysqli_error($connection_report));
  }
  else{
    $data = mysqli_fetch_assoc($result_total_postCount);
    $id = 0;
    $id = $data["total"];
  }

?>