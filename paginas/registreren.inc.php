<?php
	session_start();
	require_once('handlers/sanitize.php');
	// Gebruiker Verifiëren
	if(verifyLevel(2)) {
?>

<form action="handlers/handler_registratie.php" method="post">

	<label for="voornaam">Voornaam</label>
	<input type="text" name="voornaam" placeholder="voornaam" required />

	<br/>
	<br/>

	<label for="achternaam">Achternaam</label>
	<input type="text" name="achternaam" placeholder="achternaam" required />

	<br/>
	<br/>

	<label for="telefoon">Telefoonnummer</label>
	<input type="text""name="telefoon" placeholder="telefoonnummer" required />

	<br/>
	<br/>

	<label for="email">E-mail adres</label>
	<input type="email" name="email" placeholder="email" required />

	<br/>
	<br/>

	<label for="accounttype">Account Type</label>
	<select name="accounttype">
		<option value="0">Werkzoekende</option>
		<option value="1">Werkaanbieder</option>
	</select>

	<br/>
	<br/>

	<label for="wachtwoord">Wachtwoord</label>
	<input type="password" name="wachtwoord" required />

	<br/>
	<br/>

	<input type="submit" value="registeren" />

</form>

<?php

	} else {
		header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=status&status=nietgemachtigd');
		die();
	}

?>
