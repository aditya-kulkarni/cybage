<html>
<body>

<?php

	$name = htmlspecialchars($_POST['name']);
	$password = htmlspecialchars($_POST['password']);

	
	if($name == "cybage_admin" && $password == "cybage_password")
	{
			echo "Congratulations you have logged in !!";
	}
	else
	{
		echo "Wrong Credentials";
	}
	
?>
</body>
</html>