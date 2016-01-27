<?php

$user = $_POST['user'];
$pwd = $_POST['pwd'];

//Mysql
$host = "localhost";
$user = "root";
$pass = "root";

$conn = mysql_connect($host, $user, $pass);

if(!$conn) {
  die('Could not connect: ' .mysql_error());
}

echo 'Connected succesfully';
mysql_close($conn);

?>
