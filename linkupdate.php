<?php
include 'db-connection.php';

//Which submit button?
//Best way is to recreate database, run through the iterations
//Then pull the _POST information to find the hidden field

$sql="SELECT * FROM Links";
$result=$mysqli->query($sql);

$num=mysqli_num_rows($result);

$delete= $_GET["delete"];
//seeing if I have to delete by grabbing post
if ($_POST["submitbutton"] == Delete){
    //$i=$found_delindex;
    $Index=$_POST[ButtonIndex];
    $sql = "DELETE FROM Links WHERE `Index`='$Index'";
    $result=$mysqli->query($sql);
    mysqli_close();
    $mainform = "main.php";
    header("Location:$mainform");
    }
$Index=$_POST[ButtonIndex];
$full_text=$_POST[link_text];
$link_tag_1=$_POST[link_tag_1];
$link_tag_2=$_POST[link_tag_2];
$link_tag_3=$_POST[link_tag_3];
$full_text=$mysqli->real_escape_string($full_text); // Contains HTML stuff, so have to escape the string.
$sql = "UPDATE Links SET link_text='$full_text', link_tag_1='$link_tag_1', link_tag_2='$link_tag_2', link_tag_3='$link_tag_3' WHERE `Index`='$Index'";

$result=$mysqli->query($sql);
mysqli_close();
$mainform = "main.php";
header("Location:$mainform");
?>


