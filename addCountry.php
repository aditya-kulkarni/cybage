<?php

  /*   if(empty($_POST['name']) && empty($_POST['country'])){
       echo "variables are empty";
}
else
{*/

        echo(json_decode($myform1));
    
      // $a = $_POST['name'];
      // $b = $_POST['country'];

        $details = file_get_contents('php://input');
         echo $details;
    
        

  //   header("Access-Control-Allow-Origin: *");
   //  header("Content-Type: application/json; charset=UTF-8");

    
   header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
    
        $servername = "localhost";
        $username = "root";
        $password = "'aditya'";
        $dbname = "test";

        // Create connection
        $conn = mysqli_connect($servername,$username,$password,$dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " .$conn->connect_error);
        } 

        $a = myform1.name;
        $b = myform1.country;
    
        if(isset($a) && isset($b))
        {
        $sql = "insert into country values('$a','$b')";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            echo 'Could not run query: '. mysqli_error();
            exit; 
            }
         echo "values inserted sucessfully in db";

        mysqli_close($conn);
        }
        else{
            
            echo "something went wrong";
        }

 //}

?>