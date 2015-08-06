<?php
session_start();

$_SESSION["answered"] = 1;

echo "Session variable set";
  // $email_inserted = "wewre#!@yoo.com";

  // $email_pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";

  // if (!filter_var($email_inserted, FILTER_VALIDATE_EMAIL)  || !preg_match($email_pattern, $email_inserted)) {
  //       die("Invalid email format");
  //   }
  // else{
  //   echo "success";
  // }

?>