<?php
	session_start();

	unset($_SESSION['vlag']);
	session_destroy();

	header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=login');
	die();

?>