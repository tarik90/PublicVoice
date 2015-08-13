<?php

  $query_read_report = "SELECT * ";
  $query_read_report .= "FROM reports ";
  $query_read_report .= "WHERE id = {$counter}";
  $result_read_report = mysqli_query($connection_report,$query_read_report);

  if(!$result_read_report){
    die("Database query read failed" . mysqli_error($connection_report));
  }

  $table_name = mysqli_fetch_assoc($result_read_report); 
?>
  <form action="report.php?id=<?php echo $counter; ?>" method="post">