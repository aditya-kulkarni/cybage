<?php
$servername = "localhost";
$username = "root";
$conn = new mysqli($servername,$username);
//echo "inside function";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$result = mysqli_query($conn,"SHOW Databases");
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
	echo "<form name='myform' action='showTables.php' method='POST'>";	
	echo "<select name='Database'>";
		while($row = mysqli_fetch_array($result)){
	
	echo "<option value='".$row['Database']."'>".$row['Database']."</option>";
	
	}
	echo "</select>";
	echo "<input type='submit' value='show tables'>";
	echo "</form>";
	
mysqli_close($conn);

?>
