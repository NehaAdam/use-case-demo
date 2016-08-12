<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$password1 = md5($_POST["password1"]);
$password2 = md5($_POST["password2"]);
$date_of_birth = $_POST["date_of_birth"];
$place_of_birth = $_POST["place_of_birth"];
$info = $_POST["info"];
$nationality = $_POST["nationality"];

if ($password1 != $password2) {
  echo '<a href="register.php">Error: password does not match. Try again!</a>';
  exit;
}

include "db.php";

$sql = "INSERT INTO users (name, email, password, date_of_birth, place_of_birth, info, nationality) 
VALUES('$name', '$email', '$password1', '$date_of_birth', '$place_of_birth', '$info', '$nationality');";
$result = mysql_query($sql, $link);

if($result == false)
  echo '<a href="register.php">Error: cannot execute query</a>';
else
  header("Location: private.php");

mysql_close($link);
exit;
?>