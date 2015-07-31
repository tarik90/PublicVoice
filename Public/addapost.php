<?php

  $tag = $_GET["tag"];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>?+</title>
  </head>

  <body>
    <form action="processQuestion.php?tag=<?php echo urlencode($tag); ?>" method="post">
      
      <h2>Question:</h2>
      <input type="text" name="question">
      <br>
      <h3>Option:</h3>
      <br>
      option1:
      <input type="text" name="option1">
      <br>
      <br>
      option2:
      <input type="text" name="option2">
      <br>
      <br>
      option3:
      <input type="text" name="option3">
      <br>
      <br>
      option4:
      <input type="text" name="option4">
      <br>

      <h3><input type="submit" name="submit" value="submit"></h3>

    </form>


     
      
  </body>
</html>