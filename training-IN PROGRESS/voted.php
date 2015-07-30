<?php
//preg_match();
//create database connection1
	$dbhost = "localhost";
	$dbuser = "pv_cms";
	$dbpass = "secret";
	$dbname = "public_voice";
	$connection1 = mysqli_connect($dbhost, $dbuser, $dbpass,
					$dbname);

	if(mysqli_connect_errno()){
		die("Database connection1 failed: " . 
			mysqli_connect_error() . " (" .
				mysqli_connect_errno() .")"
		);
	}

	$answered = $_GET["answered"];

	if($answered == 1){
		echo "Already answered";
	}
	else{

		$answered = 1;
		$id = $_GET["id"];
		$tag = $_GET["tag"];

		$query1 = "UPDATE {$tag} ";
		$query1 .= "SET ";
		$query1 .= "answered = NULL, ";
		$query1 .= "answered = '{$answered}' ";
		$query1 .= "WHERE ";
		$query1 .= "id = {$id}";
		
		$val_1 = mysqli_query($connection1,$query1);

		if($val_1){
			echo "just answered <br />";
			//header("Location: post.php");
		}else{
			die("Database1 query failedddd" . mysqli_error($connection1));
		}
	}
	

?>