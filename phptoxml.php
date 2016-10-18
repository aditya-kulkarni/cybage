<?php

$a = $_POST['title'];
$b = $_POST['links'];
$c = $_POST['description'];

//echo $a."<br>".$b."<br>".$c."<br>";

echo "<?xml version="'1.0'" encoding="'utf-8'" ?>
	<channel>
	<item>
   <title>".htmlentities($_POST['title'])."</title>
   <links>".htmlentities($_POST['links'])."</links>
   <description>".htmlentities($_POST['description'])."</description>
  </item>
</channel>";

?>
