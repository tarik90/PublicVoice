<?php
session_start();

//create database connection
	$dbhost = "localhost";
	$dbuser = "pv_cms";
	$dbpass = "secret";
	$dbname = "public_voice";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass,
					$dbname);

	if(mysqli_connect_errno()){
		die("Database connection failed: " . 
			mysqli_connect_error() . " (" .
				mysqli_connect_errno() .")"
		);
	}

//Databse CRUD-inserting values
	$post_description = "";
	$question = $_POST["question"];
	if($question == "" || NULL)
	{
		echo "Please enter a question";
	}
	else
	{
		$post_description = $question;
		$_SESSION["question"] = $question;

		for ($i=1; $i <5 ; $i++) 
		{ 
			$option[$i] = $_POST["option{$i}"];
			$_SESSION["option{$i}"] = $option[$i];
		}

		$query1 = "INSERT INTO post (";
		$query1 .= " post_description, option_1, option_2, option_3, option_4";
		$query1 .= ") VALUES (";
		$query1 .= " '{$post_description}', '{$option[1]}', '{$option[2]}', '{$option[3]}', '{$option[4]}' ";
		$query1 .= ")";
		
		$val = mysqli_query($connection,$query1);

		if($val){
			echo "Success <br />";
		}else{
			die("Database query failedddd" . mysqli_error($connection));
		}

	}
	global $connection;
	$id = mysqli_insert_id($connection);
	echo $id. "<br/>";

	// $option_1 = 1;
	// $option_2 = 1;
	// $option_3 = 1;
	// $option_4 = 1;











$question = $_POST["question"];

for ($i=1; $i <5 ; $i++) 
{ 
	$option[$i] = $_POST["option{$i}"];
}

if($question == "" || NULL)
{
	echo "Please enter a question";
}
else
{
	echo "$question"."<br />";
	$_SESSION["question"] = $question;
?>

<form action="process.php" method="post">

<?php

	for ($i=1; $i <5 ; $i++) 
	{ 
		if (($option[$i] != "") || ($option[$i] != NULL)) 
		{
			$_SESSION["option{$i}"] = $option[$i];
			// echo $option[$i]."<br />";
			echo "<input type=\"radio\" name=\"option\" value={$i}>{$option[$i]}"."<br />";
		}
	}


}

?>
<h3><input type="submit" name="submit" value="submit"></h3>
</form>

