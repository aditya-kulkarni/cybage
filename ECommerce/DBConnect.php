<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = "localhost";
$username = "root";
$conn = new mysqli($servername,$username);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$query = mysqli_query($conn,"USE ECOMMERCE");
if (!$query) {
	echo 'Could not run query: ' . mysqli_error($conn);
	exit; 
	}
?>

