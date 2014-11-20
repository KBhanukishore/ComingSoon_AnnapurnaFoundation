<?php
//header("Content-Type: application/json; charset=UTF-8");
$myfile = fopen("subscribers.csv", "a") or die("Unable to open file!");

$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Please enter a valid email Id"; 
}
else {
fwrite($myfile, $email);
fwrite($myfile, "\n");
fclose($myfile);
echo "You are successfully subscribed...!!" ;
}
?>