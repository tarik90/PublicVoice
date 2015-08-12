<?php
    include("../include/function.php");

    $dbhost_vote = "localhost";
    $dbuser_vote = "pv_cms";
    $dbpass_vote = "secret";
    $dbname_vote = "public_voice_email";
    $connection_vote = mysqli_connect($dbhost_vote, $dbuser_vote, $dbpass_vote,
            $dbname_vote);

    if(mysqli_connect_errno()){
      die("Database connection_vote failed: " . 
        mysqli_connect_error() . " (" .
          mysqli_connect_errno() .")"
      );
    }

    $dbhost_read_post = "localhost";
    $dbuser_read_post = "pv_cms";
    $dbpass_read_post = "secret";
    $dbname_read_post = "public_voice";
    $connection_read = mysqli_connect($dbhost_read_post, $dbuser_read_post, $dbpass_read_post,
            $dbname_read_post);

    if(mysqli_connect_errno()){
      die("Database connection_read failed: " . 
        mysqli_connect_error() . " (" .
          mysqli_connect_errno() .")"
      );
    }

	$table_tag_array = array("world","education","weirdones","healthBeauty","fashion","personal","sports","environmentNature","social",
								"religion","auto","politics","food","techEngineering");
	  $random_keys = array_rand($table_tag_array);
    $random_table_tag = $table_tag_array[$random_keys];

    $pagetitle = setPageTitle($random_table_tag);
  //get number of record exist in the table
	  $query_total_postCount = "SELECT COUNT(*) as total FROM {$random_table_tag}";
	  $result_total_postCount = mysqli_query($connection_read,$query_total_postCount);
	  
	  if(!$result_total_postCount){
	    die("Database query count failed" . mysqli_error($connection_read));
	  }
	  else{
	    $data = mysqli_fetch_assoc($result_total_postCount);
	    $id = 0;
	    $id = $data["total"];
      if($id == NULL || $id == 0){
        $id = 1;
      }
	  }

	global $id;
    $post_id = mt_rand(1,$id);
    
    $query_read_vote_in_percentage = "SELECT * ";
    $query_read_vote_in_percentage .= "FROM vote_in_percentage ";
    $query_read_vote_in_percentage .= "WHERE ";
    $query_read_vote_in_percentage .= "post_id = {$post_id} ";
    $query_read_vote_in_percentage .= "AND ";
    $query_read_vote_in_percentage .= "tag = '{$random_table_tag}'";
    $result_read_vote_in_percentage = mysqli_query($connection_vote,$query_read_vote_in_percentage);

    if(!$result_read_vote_in_percentage){
      die("Database query_read_vote_in_percentage failed" . mysqli_error($connection_vote));
    }

    for ($j=1; $j<5 ; $j++) { 
    # code...
    $op[$j] = 0;
    }
    
    $table_name = mysqli_fetch_assoc($result_read_vote_in_percentage);

    $optionNo = 1;
    while($optionNo <5){

      $op[$optionNo] = $table_name["op{$optionNo}"];

      if($op[$optionNo] == NULL || $op[$optionNo] == ""){
        //echo "op_in_percentage are null <br>";
      }
      $optionNo++;
    }

    $query_read_question = "SELECT * ";
    $query_read_question .= "FROM {$random_table_tag} ";
    $query_read_question .= "WHERE id = {$post_id}";
    $result_read_question = mysqli_query($connection_read,$query_read_question);

    if(!$result_read_question){
      die("Database query_read_question failed" . mysqli_error($connection_read));
    }

    $table_name_question = mysqli_fetch_assoc($result_read_question);

    for ($i=1; $i<5 ; $i++) { 
      # code...
      $option_des[$i] = $table_name_question["option_{$i}"];
    }
          $question = "<a style=\"color:#66FF66\"";
          $question .= "href=";
          $question .= "question.php?tag=" . urlencode($random_table_tag) . "&id=" . $post_id;
          $question .= " >";
          $question .= $table_name_question["post_description"];
          $question .= "</a>";
          $question .="<br/>";
          echo $question;

          $outsideDiv = "<div id=\"indexPercentageBox\">";
          echo $outsideDiv;
         
              for($x=1; $x<5; $x++){

              $output = "<div>";
              $output .= "<img ";
              $output .= "height=\"20\" width=\"10\"";
              $output .= " src=\"..\images\image$x.jpg\">";
              $output .=  " " . $table_name_question["option_$x"];
              $output .= ": ";
              $output .= " " . $table_name["op$x"];
              $output .= "%";
              $output .= "</div>";
              echo  $output;
            }
            $outsideDiv = "</div>";
            echo $outsideDiv;

            $outsideDivBar = "<div id=\"barPercentageBox\">";
            $outsideDivBar .= "<span>";
            $outsideDivBar .= "<img height=\"200\"";
            $outsideDivBar .= "src=\"..\images\scale.jpg\" ";
            $outsideDivBar .= ">";
            $outsideDivBar .= "</span>";
            echo $outsideDivBar;
         
              for($x=1; $x<5; $x++){
              
              $output = "<span>";
              $output .= "<img ";
              $output .= "width=100 ";
              $output .= "height=";
              $output .= 1.89 * $table_name["op$x"];
              $output .= " src=\"..\images\image$x.jpg\">";

              echo  $output;
            }
            $outsideDivBar = "</div>";
            echo $outsideDivBar;

    if(isset($result_read_question)){
    	mysqli_free_result($result_read_question);
    }

    if(isset($result_total_postCount)){
    	mysqli_free_result($result_total_postCount);
    }

    if(isset($connecton_vote)){
    	mysqli_close($connection_vote);
    }

    if(isset($connection_read)){
    	mysqli_close($connection_read);
    }

?>