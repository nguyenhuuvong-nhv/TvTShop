<?php
	$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	try {
	$db = new PDO('mysql:host=localhost;dbname=DoAnPHP', 'root', '', $options);
	}
	catch (PDOException $e) {
	echo $e->getMessage();
	}
?>