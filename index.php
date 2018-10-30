<!doctype html>
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
			<section id="inhoud-content">
			<?php
				if(isset($_GET['pagina'])) {
					$pagina = htmlspecialchars($_GET['pagina']);
					$paginaLijst = array('introductie',
										 'nieuws',
										 'contact',
										 'login',
										 'post_review',
										 'reviews');

					if(in_array($pagina,$paginaLijst)) {
						include('paginas/' . $pagina . '.inc.php');
					} else {
						include('paginas/404.inc.php');
					}
				} else {
					include('paginas/introductie.inc.php');
				}

			?>
			</section>
		</section>
		<!-- FOOTER -->
		<footer>
			<?php include('includes/footer.inc.php'); ?>
		</footer>
	</body>
</html>