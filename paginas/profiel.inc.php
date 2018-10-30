<?php
	session_start();
	require_once('handlers/sanitize.php');
	// Gebruiker Verifiëren
	if(verifyLevel(0)) {
?>
<!-- CONTENT -->

<h1 class="profiel-titel">Profiel</h1>

<?php
		// CONTENT VOOR BEHEERDER
		if($_SESSION['vlag'] == 2) {
			
			echo '<ul class="profiel-ul">';
			echo 	'<li><a href="index.php?pagina=registreren">Registreer een nieuw lid</a></li>'; // REGISTREREN
			echo 	'<li><a href="#">Plaats een request</a></li>';						// REQUEST PLAATSEN
			echo 	'<li><a href="#">Bekijk requests</a></li>'; 						// PENDING && ACTIEF
			echo 	'<li><a href="#">Gebruikerslijst</a></li>'; 						// BEKIJK GEBRUIKERS
			echo 	'<li><a href="handlers/handler_uitloggen.php">Uitloggen</a></li>';	// UITLOGGEN
			echo '</ul>';
	
		}

		// CONTENT VOOR WERKAANBIEDER
		if($_SESSION['vlag'] == 1) {

			echo '<ul class="profiel-ul">';
			echo 	'<li><a href="#">Plaats een request</a></li>';
			echo 	'<li><a href="handlers/handler_uitloggen.php">Uitloggen</a></li>';
			echo '</ul>';
	
		}

		// CONTENT VOOR WERKZOEKENDE
		if($_SESSION['vlag'] == 0) {

			echo '<ul class="profiel-ul">';
			echo 	'<li><a href="#">Bekijk aanbod</a></li>';
			echo 	'<li><a href="handlers/handler_uitloggen.php">Uitloggen</a></li>';
			echo '</ul>';
		
		}

	

	// Gebruiker niet geverifiëerd
	} else {
		header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=status&status=nietgemachtigd');
		die();
	}
?>