<?php

	if(isset($_GET['status'])) {
		
		$status = $_GET['status'];

		// Status variabele evalueren
		switch($status) {
			case 'registratiegelukt':
				echo 'De registratie is succesvol verlopen.';
				break;
			case 'registratiemislukt':
				echo 'Er is iets mis gegaan met de registratie procedure.';
				break;
			case 'inloggenmislukt':
				echo 'Er is iets fout gegaan bij de inlogprocedure.';
				break;
			case 'nietgemachtigd':
				echo 'U bent niet gemachtigd om deze pagina te bekijken.';
				break;
			default:
				echo 'Status onbekend.';
		}


	} else {

		header('Location: https://www.mijnhoekje.nl/gc/');
		die();

	}

?>