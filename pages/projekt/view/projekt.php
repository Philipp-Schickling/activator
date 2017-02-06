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

	<?php include PAGE_TEMPLATE_HEADER; ?>

	<!-- Login Field -->
	<section>

		<div class="wGeneral"> 

		<div class="spacer"></div>

			<div class="wTopic wContent col-1-1">
				<h2 class="col-1-2">
					<?php echo __tr( "Current projects" ) ?>
				</h2>
				
				<h2 class="col-1-2 col-last">
					<div class="newQuestion">
						<a href="#new">
							<?php echo __tr( "New project" ) ?>
						</a>
					</div>
				</h2>

			</div>

		</div>

		<div class="wGeneral">
		
			<div class="con-3">

				<div class="col-1-3">
					<div class="test wContent">
						<p>a</p>	
						<p>a</p>	
						<p>a</p>	
						<p>a</p>	
					</div>
				</div>
				<div class="col-1-3">
					<div class="test wContent">
						<p>a</p>	
						<p>a</p>	
						<p>a</p>	
						<p>a</p>	
					</div>
				</div>
				<div class="col-1-3">
					<div class="test wContent">
						<p>a</p>	
						<p>a</p>	
						<p>a</p>	
						<p>a</p>	
					</div>
				</div>

			</div>
		
		</div>

	</section>

	<footer>
		
	</footer>
	
</body>
</html>

