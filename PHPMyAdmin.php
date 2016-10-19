<html>
<head>
<title>PHPMyAdmin</title>
<input type="button" name="Release" onclick="document.write('<?php connectdb() ?>');" value="Show Databases">

<?php
echo "in php";
function connectdb(){
$servername = "localhost";
$username = "root";
$password = "'aditya'";

$conn = new mysqli($servername,$username,$password);
echo "inside function";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = mysqli_query($conn,"SHOW Databases");
if (!$result) {
	echo 'Could not run query: ' . mysqli_error();
	exit; 
	}
	
echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Databases</th>";
	echo "</tr>";
	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>",$row['Database'],"</td>";
		echo "</tr>";
	}
	echo "</table>";
	
mysqli_close($conn);	
}

?>

</body>
</html>

