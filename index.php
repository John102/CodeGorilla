<html>
	<head>
		<title>Code Gorilla</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<!-- NAVIGATIE -->
		<nav>
			<?php include('includes/navigatie.inc.php'); ?>
		</nav>
		<!-- HEADER -->
		<header>
			<?php include('includes/header.inc.php'); ?>
		</header>
		<!-- CONTENT -->
		<section id="inhoud">
			Inhoud
			<?php
					// Check of pagina variable is gezet
					// TRUE 
					if(isset($_GET['pagina'])) {
						$pagina = $_GET['pagina'];
						$paginaLijst = array('contact');
						// Als pagin is toegestaan
						if(in_array($paginaLijst, $pagina)) {
							include('/includes/' . $pagina . '.inc.php');
						// Als pagina niet is toegestaan
						} else {
							$pagina = '404.inc.php';
						};

					// FALSE
					} else {
						$pagina = 'introductie.inc.php';
					}
			?>
		</section>
		<!-- FOOTER -->
		<footer>
			<?php include('includes/footer.inc.php'); ?>
		</footer>
	</body>
</html>