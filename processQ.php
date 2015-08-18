<?php

	include($_SERVER['DOCUMENT_ROOT']."/../include/processQuestion.php");

	if(!isset($_GET["tag"]) || !isset($_GET["id"])){
		header("Location: topic.php");
	}

?>