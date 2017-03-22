<?php
include 'db-connection.php';

$sql="SELECT * FROM Links";
$result= $mysqli->query($sql);

$num=mysqli_num_rows($result);
$row = $result->fetch_array(MYSQLI_BOTH); 

while($row = $result->fetch_array()){
	
	$rows[] = $row;
}
	$row = $result->fetch_array(MYSQLI_BOTH); 
		
	foreach($rows as $row){  //printing out each row of the database with seperate submit button
		
		echo "Index: ";
		echo $row["Index"];
		echo "<br />";
		echo $row["link_text"];
		echo "<br />";
		//Complicated with two buttons: Delete and submit... have to name both of the buttons the same
		//then use _POST to grab the variable and see what value it contains

		?>
		<form action="<?php echo "linkupdate.php";?>" method="post">
		<input type="hidden" name="Index<?php echo $row["Index"];?>" value="<?php echo $row["Index"];?>"/>
		<input type="text" name="link_text" value="<?php echo $row["link_text"];?>"/>
		<input type="text" name="link_tag_1" value="<?php echo $row["link_tag_1"];?>"/>
		<input type="text" name="link_tag_2" value="<?php echo $row["link_tag_2"];?>"/>
		<input type="text" name="link_tag_3" value="<?php echo $row["link_tag_3"];?>"/>
		<input type="hidden" name="ButtonIndex" value="<?php echo $row["Index"];?>"/>
		<input type="submit" name="submitbutton" value="Submit" id="edit" onclick=""/>
		<input type="submit" name="submitbutton" value="Delete" id="delete_var" onclick=""/>

		</form>
		<br />
		<br />
		<?php		
		
	}
		//$result->free();
$result->close();
mysqli_close();
?>

