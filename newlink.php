<?php
include 'db-connection.php';
$link_text=$_POST[link_text]; //grabbing the link text and link name from post (for constructing the properly formated html link for storage in the database
$link_name=$_POST[link_name];

$full_text=htmlentities("<a href='", ENT_QUOTES) . $link_text . htmlentities("'>", ENT_QUOTES) . $link_name . htmlentities("</a>", ENT_QUOTES);  //for some reason the only way I could get this working, no idea why

$full_text = html_entity_decode($full_text, ENT_QUOTES); //decoding the html entities to store as basic char (I think essentially reversing what I did above, but it works
$full_text = $mysqli->real_escape_string($full_text);  //removing the single quotes from the href so I can store it in mysql

$sql="INSERT INTO Links (link_text, link_tag_1, link_tag_2, link_tag_3, link_tag_4) VALUES ('$full_text','$_POST[link_tag_1]','$_POST[link_tag_2]','$_POST[link_tag_3]','all')";
$mysqli->query($sql); //inserting the new link into the database

$mainform = "main.php"; //and back to the main page we go
header("Location:$mainform");
?>
