<?php
 
if(isset($_POST['Table']))
{
	$table = $_POST['Table'];
	
	$servername = "localhost";
	$username = "root";
	$conn = new mysqli($servername,$username);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$result = mysqli_query($conn,"SELECT * FROM $table");
	if (!$result) {
		echo 'Could not run query: ' . mysqli_error();
		exit; 
		}
	
	
	//$sql = "SHOW COLUMNS FROM $table";
	$res = mysqli_query($conn,"SHOW COLUMNS FROM $table");
	if (!$res) {
		echo 'Could not run query: ' . mysqli_error();
		exit; 
		}
		
	while($row = mysqli_fetch_array($res)){
		echo $row['Field']."<br>";
	}
	/*echo "<form name='myform' action='showRecords.php' method='POST'>";	
	echo "<select name='Table'>";
		while($row = mysqli_fetch_array($result)){
	
	echo "<option value='".$row[0]."'>".$row[0]."</option>";
	
	}
	echo "</select>";
	echo "</form>";
	*/
	mysqli_close($conn);
}
else{
	echo "Value not set";
}


?>
