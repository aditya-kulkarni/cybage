<html>
<body>
<!--<form name="myform" method="POST" action="action_curl.php">-->
Username <input type="text" name="name"/><br>

Password <input type="text" name="password"/><br>

<input type="submit" value="submit">
<!--</form>-->
<!--
<?php

	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, "http://localhost/Cybage/action_curl.php");
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	curl_setopt($ch, CURLOPT_POSTFIELDS, "postname=value1&postpassword=value2");
	
	
	$output = curl_exec($ch);
	
	curl_close($ch);

?>
-->
</body>

</html>
