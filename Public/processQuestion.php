<?php 
session_start();

//create database connection
	$dbhost1 = "localhost";
	$dbuser1 = "pv_cms";
	$dbpass1 = "secret";
	$dbname1 = "public_voice";
	$connection1 = mysqli_connect($dbhost1, $dbuser1, $dbpass1,
					$dbname1);

	if(mysqli_connect_errno()){
		die("Database connection1 failed: " . 
			mysqli_connect_error() . " (" .
				mysqli_connect_errno() .")"
		);
	}

//Databse CRUD-inserting values
	$post_description = "";
	$question = mysqli_real_escape_string($connection1,$_POST["question"]);
	$table_tag = mysqli_real_escape_string($connection1,$_GET["tag"]);

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
			$option[$i] = mysqli_real_escape_string($connection1,$_POST["option{$i}"]);
			//$_SESSION["option{$i}"] = $option[$i];
		}

		$query1 = "INSERT INTO {$table_tag} (";
		$query1 .= " post_description, option_1, option_2, option_3, option_4";
		$query1 .= ") VALUES (";
		$query1 .= " '{$post_description}', '{$option[1]}', '{$option[2]}', '{$option[3]}', '{$option[4]}' ";
		$query1 .= ")";
		
		$val_1 = mysqli_query($connection1,$query1);

		if($val_1){
			//echo "Success1 <br />";
			//header("Location: post.php");
		}else{
			die("Database1 query failedddd" . mysqli_error($connection1));
		}

	}

	$tech_id = mysqli_insert_id($connection1);
?>



<?php
////////////////////////////////////////2ND Database//////////////////////////////////////////////
	$dbhost2 = "localhost";
	$dbuser2 = "pv_cms";
	$dbpass2 = "secret";
	$dbname2 = "public_voice_option";
	$connection2 = mysqli_connect($dbhost2, $dbuser2, $dbpass2,
					$dbname2);

	if(mysqli_connect_errno()){
		die("Database connection2 failed: " . 
			mysqli_connect_error() . " (" .
				mysqli_connect_errno() .")"
		);
	}

	for ($j=1; $j<5 ; $j++) { 
		# code...
		$op_vote[$j] = 0;
	}

	$query2 = "INSERT INTO {$table_tag} (";
	$query2 .= " tech_id, op1_vote, op2_vote, op3_vote, op4_vote";
	$query2 .= ") VALUES (";
	$query2 .= " '{$tech_id}', '{$op_vote[1]}', '{$op_vote[2]}', '{$op_vote[3]}', '{$op_vote[4]}' ";
	$query2 .= ")";
		
	$val_2 = mysqli_query($connection2,$query2);

	if($val_2){
		//echo "Success2 <br />";
		header("Location: subject.php?tag=". urlencode($table_tag));
	}else{
		die("Database2 query failedddd" . mysqli_error($connection2));
	}

?>


