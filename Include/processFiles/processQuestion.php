<?php 

  include("../function.php");

	$dbhost_post_upload = "localhost";
	$dbuser_post_upload = "pv_cms";
	$dbpass_post_upload = "secret";
	$dbname_post_upload = "public_voice";
	$connection_post_upload = mysqli_connect($dbhost_post_upload, $dbuser_post_upload, $dbpass_post_upload,
					$dbname_post_upload);

	if(mysqli_connect_errno()){
		die("Database connection_post_upload failed: " . 
			mysqli_connect_error() . " (" .
				mysqli_connect_errno() .")"
		);
	}

	$post_description = "";
	$email_inserted = mysqli_real_escape_string($connection_post_upload, htmlentities(strip_tags($_POST["email"])));
	$question = mysqli_real_escape_string($connection_post_upload,htmlentities(strip_tags($_POST["question"])));
	$table_tag = mysqli_real_escape_string($connection_post_upload,htmlentities(strip_tags($_GET["tag"])));
	
	if (checkEmailValidity($email_inserted) === false) {
      header("Location: ../../addapost.php?emailsupport=0&tag=". urlencode($table_tag));
  			die();
	}

	if($question === "" || $question === NULL)
	{
		header("Location: ../../addapost.php?question=0&tag=". urlencode($table_tag));
  			die();
	}
	else
	{
		$post_description = $question;
		for ($i=1; $i <5 ; $i++) 
		{ 
			$option[$i] = mysqli_real_escape_string($connection_post_upload,$_POST["option{$i}"]);
		}

		$query_post_upload = "INSERT INTO {$table_tag} (";
		$query_post_upload .= " post_description, option_1, option_2, option_3, option_4";
		$query_post_upload .= ") VALUES (";
		$query_post_upload .= " '{$post_description}', '{$option[1]}', '{$option[2]}', '{$option[3]}', '{$option[4]}' ";
		$query_post_upload .= ")";
		
		$success_post_upload = mysqli_query($connection_post_upload,$query_post_upload);
		if($success_post_upload){
			//echo "Success1 <br />";
			//header("Location: post.php");
		}else{
			header("Location: ../../subject.php?" . urlencode($table_tag));
			die("Database query_post_upload failedddd" . mysqli_error($connection_post_upload));
		}
	}
	$post_id = mysqli_insert_id($connection_post_upload);
?>

<?php
	$dbhost_vote_upload = "localhost";
	$dbuser_vote_upload = "pv_cms";
	$dbpass_vote_upload = "secret";
	$dbname_vote_upload = "public_voice_option";
	$connection_vote_upload = mysqli_connect($dbhost_vote_upload, $dbuser_vote_upload, $dbpass_vote_upload,
					$dbname_vote_upload);

	if(mysqli_connect_errno()){
		die("Database connection_vote_upload failed: " . 
			mysqli_connect_error() . " (" .
				mysqli_connect_errno() .")"
		);
	}
	for ($j=1; $j<5 ; $j++) { 
		$op_vote[$j] = 0;
	}

	$query_vote_upload = "INSERT INTO {$table_tag} (";
	$query_vote_upload .= " post_id, op1_vote, op2_vote, op3_vote, op4_vote";
	$query_vote_upload .= ") VALUES (";
	$query_vote_upload .= " '{$post_id}', '{$op_vote[1]}', '{$op_vote[2]}', '{$op_vote[3]}', '{$op_vote[4]}' ";
	$query_vote_upload .= ")";
		
	$success_vote_upload = mysqli_query($connection_vote_upload,$query_vote_upload);
	if($success_vote_upload){
		//echo "Success2 <br />";
		//header("Location: subject.php?tag=". urlencode($table_tag));
	}else{
		header("Location: topics.php");
		die("Database query_vote_upload  failedddd" . mysqli_error($connection_vote_upload));
	}

?>

<?php

  $dbhost_email_upload = "localhost";
  $dbuser_email_upload = "pv_cms";
  $dbpass_email_upload = "secret";
  $dbname_email_upload = "public_voice_email";
  $connection_email_upload = mysqli_connect($dbhost_email_upload, $dbuser_email_upload, $dbpass_email_upload,
          $dbname_email_upload);

  if(mysqli_connect_errno()){
    die("Database connection1 failed: " . 
      mysqli_connect_error() . " (" .
        mysqli_connect_errno() .")"
    );
  }
  for ($j=1; $j<5 ; $j++) { 
		# code...
		$op[$j] = 0;
	}

  	$query_vote_percentage_upload = "INSERT INTO vote_in_percentage (";
	$query_vote_percentage_upload .= " post_id, tag, op1, op2, op3, op4";
	$query_vote_percentage_upload .= ") VALUES (";
	$query_vote_percentage_upload .= " '{$post_id}', '{$table_tag}', '{$op[1]}', '{$op[2]}', '{$op[3]}', '{$op[4]}' ";
	$query_vote_percentage_upload .= ")";

	$success_vote_percentage_upload = mysqli_query($connection_email_upload,$query_vote_percentage_upload);
	if($success_vote_percentage_upload){
		//echo "Success2 <br />";
		//header("Location: subject.php?tag=". urlencode($table_tag));
	}else{
		die("Database query_vote_percentage_upload  failedddd" . mysqli_error($connection_email_upload));
		header("Location: topics.php");
	}

    global $email_inserted;
    global $post_id;
    global $table_tag;

    $encrypted_email = encryt_email($email_inserted);
    $query_email_upload = "INSERT INTO email (";
    $query_email_upload .= " email_address, tag, post_id ";
    $query_email_upload .= ") VALUES (";
    $query_email_upload .= " '{$encrypted_email}', '{$table_tag}', '{$post_id}' ";
    $query_email_upload .= ")";
    $result_email_upload = mysqli_query($connection_email_upload,$query_email_upload);

    if($result_email_upload){
      //echo "Success2 <br />";
      header("Location: ../../question.php?tag=" . urlencode($table_tag) . "&id=" . $post_id);
    }else{
      header("Location: topics.php");
      die("Database query_email_upload failedddd" . mysqli_error($connection_email_upload));
    }

    if(isset($connection_email)){
    	mysqli_close($connection_email);
    }
    
?>


