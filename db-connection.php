<?php
// Connect to server and select databse.
// first is IP ADDRESS//USER//PASSWORD//DATABASE
$mysqli = new mysqli("localhost", "root", "password", "php_search");


if ($mysqli->connect_errno){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

?>
