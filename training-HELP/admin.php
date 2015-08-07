<?php
session_start();
include("../include/function.php");


$email = "tarik@live.com";

$encrypted_email = encryt_email($email);
echo $encrypted_email;
?>