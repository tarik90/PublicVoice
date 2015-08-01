<?php 
session_start();

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

	//perform database query1
	$id = $_GET["id"];
	$tag = $_GET["tag"];
	global $id;

	$query1 = "SELECT * ";
	$query1 .= "FROM {$tag} ";
	$query1 .= "WHERE id = {$id}";
	$result1 = mysqli_query($connection1,$query1);

	if(!$result1){
		die("Database query1 failed");
	}

	$option_count = 1;
		while($tech = mysqli_fetch_assoc($result1)){

			// if($tech["answered"] == 1){
			// 	header("Location: voted.php?tag=$tag&id=$id&answered=1");
			// 	break;
			// }

?>

	<form action="voted.php?tag=<?php echo $tag; ?>&id=<?php echo $id; ?>&answered=<?php echo "0"; ?>" method="post">
	
		<h3><?php echo $tech["post_description"]."<br/>" ?></h3>
		<input type="radio" name="option" value="1"><?php echo $tech["option_1"]."<br />"; ?>
		<input type="radio" name="option" value="2"><?php echo $tech["option_2"]."<br />"; ?>
		<input type="radio" name="option" value="3"><?php echo $tech["option_3"]."<br />"; ?>
		<input type="radio" name="option" value="4"><?php echo $tech["option_4"]."<br />"; ?>

	<!--
		// if (($option[$i] != "") || ($option[$i] != NULL)) 
		// {
		// 	$_SESSION["option{$i}"] = $option[$i];
		// 	// echo $option[$i]."<br />";
		// 	echo "<input type=\"radio\" name=\"option\" value={$i}>{$option[$i]}"."<br />";
		// }

-->
		<h3><input type="submit" name="submit" value="submit"></h3>
	</form>

<?php
		
	}

?>
