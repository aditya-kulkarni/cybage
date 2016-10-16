<?php


<?xml version="1.0" encoding="utf-8" ?>
<channel>
	<item>
   <title>html_entity_decode($_POST['title'])</title>
   <links>htmlentities($_POST['$links'])</links>
   <description>html_entity_decode($_POST['description'])</description>
  </item>
</channel>

?>

$email = firstname.lastname@aaa.bbb.com;
$regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";

===============================================

perl regex
$email = "test@example.org";
  $expression = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  
  posix regex 
  ^[[:graph:]]\\+@[[:graph:]]\\+\\.[[:graph:]]\\+$