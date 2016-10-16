<html>
<body>

<?php
$xml=simplexml_load_file("sample.xml") or die("Error: Cannot create object");
echo "<pre>";
//print_r($xml);

foreach($xml->children()->children() as $books)
{
	$a = $books->link;
	$b = $books->title;
	//echo $a;
	echo "<li>";
	echo "<a href=$a>$b</a>";
	echo "</li>";
}
//echo $xml->from . "<br>";
//echo $xml->heading . "<br>";
//echo $xml->body;
?>

</body>
</html>