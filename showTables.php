<?php
 
if(isset($_POST['Database']))
{
	$db = $_POST['Database'];
	
	$servername = "localhost";
	$username = "root";
	$conn = new mysqli($servername,$username);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}


	$result = mysqli_query($conn,"USE $db");
	if (!$result) {
		echo 'Could not run query: ' . mysqli_error();
		exit; 
		}
	
	$result = mysqli_query($conn,"Show tables");
	if (!$result) {
		echo 'Could not run query: ' . mysqli_error();
		exit; 
		}
	
/*echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Databases</th>";
	echo "</tr>";
	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>",$row['Database'],"</td>";
		echo "</tr>";
	}
	echo "</table>";
	*/	
	echo "<form name='myform' action='showRecords.php' method='POST'>";	
	echo "<select name='Table'>";
		while($row = mysqli_fetch_array($result)){
	
	echo "<option value='".$row[0]."'>".$row[0]."</option>";
	
	}
	echo "</select>";
	echo "<input type='submit' value='show Records'>";
	echo "</form>";
	
	mysqli_close($conn);
}
else{
	echo "Value not set";
}


?>
