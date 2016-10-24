<?php
include 'DBConnect.php';

if(isset($_POST['pname']) && isset($_POST['pdescription']) && isset($_POST['pprice']) & isset($_POST['pimage']))
{
    
    $pdname = $_POST['pname'];
    $pddescription = $_POST['pdescription'];
    $pdprice = $_POST['pprice'];
    $pdimage = $_POST['pimage'];

$sql = "insert into product(name,description,price,image) values('$pdname','$pddescription',$pdprice,'$pdimage')";
$query = mysqli_query($conn,$sql);
if (!$query) {
	echo 'Could not run query: ' . mysqli_error($conn);
	exit; 
	}

        echo 'Data saved Sucessfully';
}
 else {
    echo "Enter all Information";
}


?>