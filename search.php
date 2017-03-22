<html>
    <head>
    <link href="main.css" rel="stylesheet" type="text/css" />
    </head>
</html>

<?php	
include 'db-connection.php';

if ($mysqli->connect_errno){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}




// Connect to server and select databse.
$searchq = $_POST['searchq'];
if(empty($searchq)) {
	echo "Empty Search";
	} else {
	//If there is text in the search field, this code is executed every time the input changes.
	echo "<div id='results'>"; //this div is used to contain the results. Mostly used for styling.
			
	//This query searches the name field for whatever the input is.
	$sql = "SELECT link_text FROM Links WHERE link_tag_1 LIKE '%$searchq%' OR link_tag_2 LIKE '%$searchq%' OR link_tag_3 LIKE '%$searchq%' OR link_tag_4 LIKE '%$searchq%' ";
	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Sorry, the website is experiencing problems.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Error: Our query failed to execute and here is why: \n";
		echo "Query: " . $sql . "\n";
		echo "Errno: " . $mysqli->errno . "\n";
		echo "Error: " . $mysqli->error . "\n";
		exit;
	}
	
	
	
	$result = $mysqli->query($sql);
	while($row = $result->fetch_assoc()) {
		$id = $row['link_text'];
		echo "$id";
		echo "</br>";
		}			
		echo "</div><!--results-->";
		echo "</br>";
	}
?>
