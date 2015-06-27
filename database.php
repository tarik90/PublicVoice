<?php
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

	$menu_name = "customer";
	$position = 5;
	$visible  = 1;

	$query1 = "INSERT INTO subjects (";
	$query1 .= " menu_name, position, visible";
	$query1 .= ") VALUES (";
	$query1 .= " '{$menu_name}', '{$position}', '{$visible}' ";
	$query1 .= ")";
	
	$val = mysqli_query($connection,$query1);

	if($val){
		echo "Success <br />";
	}else{
		die("Database query failedddd" . mysqli_error($connection));
	}




	//perform database query
	$query = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";
	$result = mysqli_query($connection,$query);

	if(!$result){
		die("Database query failed");
	}

	//use returned data
	while($subjects = mysqli_fetch_assoc($result)){
?>
<ul>
		<li><?php  echo $subjects["id"] . "<br />";   ?></li>
		<li><?php  echo $subjects["menu_name"] . "<br />";   ?></li>
		<li><?php  echo $subjects["position"] . "<br />";   ?></li>
		<li><?php  echo $subjects["visible"] . "<br />"; echo "<hr />";  ?></li>
</ul>

<?php
	}
?>
	
		


<<!DOCTYPE html>
<html>
  <head>
      <title>dtabases</title>


  </head>
  <body>


  </body>


  </html>


  <?php 

  //release return data
  	mysqli_free_result($result);
  //closing conncetion
  	mysqli_close($connection);
  ?>

