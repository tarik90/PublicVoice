<?php
    
  $query_read_question = "SELECT * ";
  $query_read_question .= "FROM {$table_tag} ";
  $query_read_question .= "WHERE id = {$counter}";
  $result_read_question = mysqli_query($connection_read,$query_read_question);

  if(!$result_read_question){
    die("Database query read failed" . mysqli_error($connection_read));
  }

  $table_name = mysqli_fetch_assoc($result_read_question);
  $optionNo_1 = 1;
  while($optionNo_1 <5){

      $option[$optionNo_1] = $table_name["option_{$optionNo_1}"];

      if($option[$optionNo_1] == NULL || $option[$optionNo_1] == ""){
        //echo "op_in_percentage are null <br>";
      }
      $optionNo_1++;
  }

  $query_read_vote_in_percentage = "SELECT * ";
  $query_read_vote_in_percentage .= "FROM vote_in_percentage ";
  $query_read_vote_in_percentage .= "WHERE ";
  $query_read_vote_in_percentage .= "post_id = {$counter} ";
  $query_read_vote_in_percentage .= "AND ";
  $query_read_vote_in_percentage .= "tag = '{$table_tag}'";
  $result_read_vote_in_percentage = mysqli_query($connection_vote,$query_read_vote_in_percentage);

  if(!$result_read_vote_in_percentage){
      die("Database query_read_vote_in_percentage failed" . mysqli_error($connection_vote));
  }

    for ($j=1; $j<5 ; $j++) { 
    $op[$j] = 0;
    }
    
    $table_name_in_percentage = mysqli_fetch_assoc($result_read_vote_in_percentage);
    $optionNo_2 = 1;
    while($optionNo_2 <5){

      $op[$optionNo_2] = $table_name_in_percentage["op{$optionNo_2}"];

      if($op[$optionNo_2] == NULL || $op[$optionNo_2] == ""){
        //echo "op_in_percentage are null <br>";
      }
      $optionNo_2++;
    }
        
?>
  <div id="eachSubject">  
      <h4><?php echo "Question: "; ?><a href="question.php?ques=<?php echo urlencode($table_name["post_description"]); ?>&tag=<?php echo urlencode($table_tag); ?>&id=<?php echo urlencode($table_name["id"]); ?>">
          <?php  echo $table_name["post_description"] . "<br />";  ?></a></h4>
<?php
      for($x=1; $x<5; $x++){
        
              $output = "<div id=\"percentageBoxSubject\">";

              $output .=  $table_name["option_$x"];
              $output .= "<br>";
              $output .= "<span id=\"imageBoxSubject\">";
              $output .= "<img id=\"imageBarSubject\"";
              $output .= "width=";
              $output .= 5 * $table_name_in_percentage["op$x"];
              $output .= " src=\"..\images\image$x.jpg\">";
              $output .= "</span>";
              $output .= " " . $table_name_in_percentage["op$x"];
              $output .= "%";

              $output .= "</div>";

              echo  $output;
            }
    ?>