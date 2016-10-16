<html>
<body>

<?php
echo "<form name=myform action=phptoxml.xml method=POST>";
 echo "Title <input type=text name=title/></br>";
echo	"Link <input type=text name=links/></br>";
echo "Description <input type=text name=description />";
echo "<input type=submit value=submit />";
echo "</form>";

	$titleError=$linkError=$descriptionError="";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (empty($_POST["title"])) 
		{
		$titleError = "Name is required";
		} 
		else 
		{
		$title = htmlspecialchars($_POST["name"]);
		}
		if (empty($_POST["links"])) 
		{
		$linkError = "Link is required";
		} 
		else 
		{
		$link = htmlspecialchars($_POST["links"]);
		}
		if (empty($_POST["description"])) 
		{
		$descriptionError = "description is required";
		} 
		else 
		{
		$description = htmlspecialchars($_POST["description"]);
		}

	}

?>


</body>
</html>