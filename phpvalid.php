DOCTYPE html>
<html>
<head>
<title>My Client form</title>
</head>
<body>
<?php

		$error=array();
		
		if(isset($_REQUEST["wel-come"])
		{
			checkerror();
			if(count($error)!=0)
			{
				myform();
			}
			else
			{
				display();
			}
		}
		else
		{
				myform();
		}
	functio display()
	{
		echo "Name", $_REQUEST[name];
		echo "Email", $_REQUEST[Email];
		
	}
	function checkerror()
	{
		global $error;
		$req="/^[A-Za-z ]{3,15}$/";
		$reg= "/^[a-zA-Z0-9._]{6,20}[@]{1}[a-z]{3,10}[.]{1}[a-z]{2,3}$/";
		$rem="/^[0-9]{6,10}$/";
		if($_REQUEST["name"] == "")
		{
			$error[0]=="<font color='Red'> * Name Spaces Cannot be left Blank </font>";
		}
		else if (!preg_match($req($_REQUEST["name"])))
		{
			$error[0]=="<font color='Red'>Alphabets expected only</font>";
		}
		if($_REQUEST["email"] == "")
		{
			$error[1]=="<font color='red'> *Email canot be blank </font>";
		}
		else if (!preg_match($reg($_REQUEST["Email"])))
		{
			$error[1]=="<font color='red'> *Email canot be blank </font>";
		}
		if($_REQUEST["mobile"] == "" )
		{
			$error[2]=="<font color='red'>* Enter valid mobile no.</mobile>";
		}
		else if(!preg_match($rem($_REQUEST["mobile"])))
		{
			$error[2]=="<font color='red'>*Invalid No. of Digits</mobile>";
		}
		if(!isset($_REQUEST["Gender"]))
		{
			$error[3]=="<font color='red'>* Provide Gender Info</font>";
		}
	}



function myform()
{
	global $error;
echo "<form method="post" >";
echo "<fieldset>";
echo "<legend>My Form</legend>";

	if(count($error != 0))
	{
		echo "<font color='red' >* All Fields are Mandatory</font>";
		echo "<br>";
	}
	if (isset($error[0]))
	{
		echo "Name: <input type="text" name="name" placeholder="Enter Name" id="name1"/>",$error[0];
	
	}
	else
	{
		echo "Name: <input type='text' name='name' placeholder= 'Enter Name' id='name1'/>";
	}
	echo "<br>"
	echo "<br>"
	if(isset($error[1]))
	{
		echo "Email: <input type='text' name='Email' placeholder='Enter Email' id='mail'/>",$error[1];
	}
	else
	{
		echo "Email: <input type='text' name='Email' placeholder='Enter Email' id='mail'/>";
	}
	echo "<br>";
	echo "<br>";
	if(isset($error[2]))
	{
		echo "Mobile : <input type='text' name='Mobile' placeholder='Enter mobile No.' id='mobile' />",$error[2];
	}
	else
	{
		echo "Mobile : <input type='text' name='Mobile' placeholder='Enter mobile No.' id='mobile' />";
	}
	echo "<br>";
	echo "<br>";
	
	if(isset($error[3]))
	{
		echo "Gender : Male <input type='radio' name='gender' value='male' />  Female  <input type='radio' name='gender' value='female' />",$error[3];
	}
	else
	{
		echo "Gender : Male <input type='radio' name='gender' value='male' />  Female  <input type='radio' name='gender' value='female' />";
	}
	echo "<br>"	;
	echo "<br>";
	echo "<input type='submit' value='submit' name='submit'/>";
	echo "<input type='hidden' value='wel-come' name='Welcome'/>";
	echo "</form>"
}

?>
</body>
</html>