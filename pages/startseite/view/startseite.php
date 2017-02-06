<?php

	include CONTROLLER_STARTSEITE;

?>

<!DOCTYPE html>
<html>
	<head>
	
	<title> <?php echo ucfirst( $pageTitle ); ?> </title>
	<?php include PAGE_TEMPLATE_METADATA ?>

	<link rel="stylesheet" type="text/css" href="<?php echo RESET_CSS ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo GENERAL_CSS ?>">

	<script type="text/javascript" src="<?php echo JQUERY ?>"></script>

	</head>
<body>

	<header>
	<div class="wNav">
		<nav>
			<a href="login">Login</a>
			<a href="startseite">Startseite</a>
			<a href="">Link 3</a>
			<a href="">Neues Projekt</a>
		</nav>
	</div>

	</header>

	<!-- Login Field -->
	<section>

		<div class="wGeneral">

			<div class="wContent col-1-1 col-last">
				<h2>Aktuelle Projekte</h2>
				<p>aaa</p>
		
			</div>

			

		</div>

	</section>

	<footer>
		
	</footer>
	
</body>
</html>

