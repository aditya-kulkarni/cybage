<?php

if(isset($_POST['submit_image']))
{
$host = 'localhost';
$user = 'root';

mysql_connect($host, $user);

mysql_select_db('test');

$upload_image=$_FILES["myimage"]["name"];

$folder="xampp/htdocs/PhpProject1/images/";

move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);

$insert_path="INSERT INTO image_table VALUES('$folder','$upload_image')";

$var=mysql_query($insert_path);
}
 else {
     echo "No Data";
}
?>
