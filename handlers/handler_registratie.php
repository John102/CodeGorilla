<?php

	require('handler_database.php');
	require('sanitize.php');
	

	try {

		// Variabelen initializeren
		$voornaam = $achternaam = $telefoon = $email = $wachtwoord = $wachtwoord2 = '';

		// Variabelen zetten met form data
		$voornaam		=		testData($_POST['voornaam']);
		$achternaam		=		testData($_POST['achternaam']);
		$telefoon		=		testData($_POST['telefoon']);
		$email			=		testData($_POST['email']);
		$wachtwoord 	=		testData($_POST['wachtwoord']);

		// Wachtwoord hashen
		$option			=		['cost' => 11, ];
		$hashed			=		password_hash($wachtwoord, PASSWORD_BCRYPT, $option);

		// Query bouwen en uitvoeren
		$query 			=		$connection->prepare('INSERT INTO cg_gebruikers (voornaam,achternaam,telefoon,wachtwoord,email) 
													  VALUES (:voornaam, :achternaam, :telefoon, :wachtwoord, :email)');
		$query->bindValue(':voornaam',$voornaam);
		$query->bindValue(':achternaam',$achternaam);
		$query->bindValue(':telefoon',$telefoon);
		$query->bindValue(':wachtwoord',$hashed);
		$query->bindValue(':email',$email);

		$query->execute();

		header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=status&status=registratiegelukt');
		die();


	} catch(PDOException $e) {
		file_put_contents('errors_database.txt', $e->getMessage(), FILE_APPEND);
		
		header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=status&status=registratiemislukt');
		die();
	}


?>