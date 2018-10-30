<?php

	require('handler_database.php');
	require('sanitize.php');

	try {

		$email		=		testData($_POST['email']);
		$wachtwoord	=		testData($_POST['wachtwoord']);

		$query		=		$connection->prepare('SELECT wachtwoord, email, vlag FROM cg_gebruikers 
												  WHERE email = :email');
		$query->execute([':email' => $email]);
		$query->setFetchMode(PDO::FETCH_ASSOC);

		// Database entries gevonden
		if($row = $query->fetch()) {

			// Wachtwoord verifiëren gelukt
			if(password_verify($wachtwoord, $row['wachtwoord'])) {

				// nieuwe sessie genereren
				session_regenerate_id(true);

				// sessie values zetten
				$_SESSION['vlag']	=	$row['vlag'];
				$_SESSION['email']	=	$row['email'];

				// redirect naar profiel
				header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=profiel');
				die();

			// Wachtwoord verifiëren mislukt
			} else {

				header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=status&status=inloggenmislukt');
				die();

			}

		// Geen database entries gevonden
		} else {

			header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=status&status=inloggenmislukt');
			die();
		}

	// Database query fail
	} catch(PDOException $e) {

		file_put_contents('loginproblems.txt', $e->getMessage(), FILE_APPEND);
		header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=status&status=inloggenmislukt');
		die();

	}

?>