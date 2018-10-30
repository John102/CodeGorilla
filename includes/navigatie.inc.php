<?php
	
	session_start();
	require_once('handlers/sanitize.php');

?>

<ul>
  <li><a href="index.php?pagina=introductie">Introductie</a></li>
  <li><a href="index.php?pagina=nieuws">Nieuws</a></li>
  <li><a href="index.php?pagina=reviews">Reviews</a></li>
  <li><a href="index.php?pagina=contact">Contact</a></li>
  
<?php	
	if(verifyLevel(0)) {
		echo '<li><a href="index.php?pagina=profiel">Mijn Profiel</a></li>';
	} else {
		echo '<li><a href="index.php?pagina=login">Login</a></li>';
	}
?>
</ul>