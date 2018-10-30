<?php

	session_start();

	$host		=	'localhost';
	$database	=	'';
	$user		=	'';
	$password	=	'';

	try {
		$connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
		$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );	
	}
	catch(PDOException $e) {
		echo $e->getMessage();
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
	}
	

?>