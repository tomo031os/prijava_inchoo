<?php
	$conn = mysql_connect('localhost','root', '') or die('Unable to connect to database');
	mysql_select_db('flash-tech') or die('Unexisting database');
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER_SET 'utf8'");
	
?>
