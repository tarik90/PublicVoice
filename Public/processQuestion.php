<?php 
session_start();

//create database connection
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

//Databse CRUD-inserting values
	$post_description = "";
	$question = mysqli_real_escape_string($connection_post_upload,$_POST["question"]);
	$table_tag = mysqli_real_escape_string($connection_post_upload,$_GET["tag"]);

	if($question === "" || $question === NULL)
	{
		die("Please enter a question");
	}
	else
	{
		$post_description = $question;
		//$_SESSION["question"] = $question;

		for ($i=1; $i <5 ; $i++) 
		{ 
			$option[$i] = mysqli_real_escape_string($connection_post_upload,$_POST["option{$i}"]);
			//$_SESSION["option{$i}"] = $option[$i];
		}

		$query__post_upload = "INSERT INTO {$table_tag} (";
		$query__post_upload .= " post_description, option_1, option_2, option_3, option_4";
		$query__post_upload .= ") VALUES (";
		$query__post_upload .= " '{$post_description}', '{$option[1]}', '{$option[2]}', '{$option[3]}', '{$option[4]}' ";
		$query__post_upload .= ")";
		
		$val_1 = mysqli_query($connection_post_upload,$query__post_upload);

		if($val_1){
			//echo "Success1 <br />";
			//header("Location: post.php");
		}else{
			die("Database1 query failedddd" . mysqli_error($connection_post_upload));
		}

	}

	$tech_id = mysqli_insert_id($connection_post_upload);
?>



<?php
////////////////////////////////////////2ND Database//////////////////////////////////////////////
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
		# code...
		$op_vote[$j] = 0;
	}

	$query_vote_upload = "INSERT INTO {$table_tag} (";
	$query_vote_upload .= " tech_id, op1_vote, op2_vote, op3_vote, op4_vote";
	$query_vote_upload .= ") VALUES (";
	$query_vote_upload .= " '{$tech_id}', '{$op_vote[1]}', '{$op_vote[2]}', '{$op_vote[3]}', '{$op_vote[4]}' ";
	$query_vote_upload .= ")";
		
	$success_vote_upload = mysqli_query($connection_vote_upload,$query_vote_upload);

	if($success_vote_upload){
		//echo "Success2 <br />";
		header("Location: subject.php?tag=". urlencode($table_tag));
	}else{
		die("Database2 query failedddd" . mysqli_error($connection_vote_upload));
	}

?>


