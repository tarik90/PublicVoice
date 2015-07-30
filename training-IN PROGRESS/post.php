<?php 
session_start();

//create database connection
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

	//get number of record exist in the table
	$query1 = "SELECT COUNT(*) as total FROM tech";
	$result1 = mysqli_query($connection1,$query1);
	
	if(!$result1){
		die("Database query failed");
	}
	else{
		$data = mysqli_fetch_assoc($result1);
		$id = 0;
		$id = $data["total"];
	}

	// global $connection1;
	// $id = mysqli_insert_id($connection1);
	// echo $id;
	//echo $id. "<br/>";


//printing all backward----------------------------------------new post on the top

	global $id;
	$counter = $id;
	while ($counter != 0){

			//perform database query
	$query2 = "SELECT * ";
	$query2 .= "FROM tech ";
	$query2 .= "WHERE id = {$counter}";
	$result2 = mysqli_query($connection1,$query2);

	if(!$result2){
		die("Database query failed");
	}

	//use returned data
		while($tech = mysqli_fetch_assoc($result2)){
	?>
	<ul>	
			<li><?php  echo $tech["id"] . "<br />";   ?></li>
			<li><a href="question.php?ques=<?php echo urlencode($tech["post_description"]); ?>&tag=<?php echo "tech"; ?>
				&id=<?php echo urlencode($tech["id"]); ?>">
				<?php  echo $tech["post_description"] . "<br />";  ?></a></li>
			<li><?php  echo $tech["option_1"] . "<br />";   ?></li>
			<li><?php  echo $tech["option_2"] . "<br />";   ?></li>
			<li><?php  echo $tech["option_3"] . "<br />"; 	?></li>
			<li><?php  echo $tech["option_4"] . "<br />";   ?></li>
			<?php echo "<hr />"; ?>
	</ul>

	<?php
		}

		$counter--;

	}



	 //release return data
  	mysqli_free_result($result1);
  	mysqli_free_result($result2);
  //closing conncetion
  	mysqli_close($connection1);

?>