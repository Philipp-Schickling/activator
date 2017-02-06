<?php

	// set page title, check salt
	include CONTROLLER_LOGIN;

?>

<!DOCTYPE html>
<html>
	<head>
	
	<title> <?php echo ucfirst( $pageTitle ); ?> </title>
	<?php include PAGE_TEMPLATE_METADATA ?>

	<link rel="stylesheet" type="text/css" href="/<?php echo RESET_CSS ?>">
	<link rel="stylesheet" type="text/css" href="/<?php echo GENERAL_CSS ?>">

	<link rel="stylesheet" type="text/css" href="/<?php echo LOGIN_CSS ?>">

	<script type="text/javascript" src="/<?php echo JQUERY ?>"></script>
	<script type="text/javascript" src="/<?php echo LOGIN_JS ?>"></script>

	</head>
<body>

<div class="blur"></div>

	<header>

	<div class="wNav">
		<nav>
			<a href="login">Login</a>
			<a href="startseite">Startseite</a>
			<a href="">Link 3</a>
			<a href="">Link 4</a>
		</nav>
	</div>

	</header>

	<!-- Login Field -->
	<section>
		
		<div class="vAlign">
			<div class="vAlignHelper">
				<div class="wGeneral">

					<div id="wLogin" class="wGrid">

						<div class="col-1-1 col-last">
							<h1><?php echo __tr( "LOGIN" ) ?></h1>
						</div>

	                <form method="post">

	                <!-- necessary login data -->
	                	
	                	<!-- username -->
						<div class="col-1-1 col-last login">
							<input class="iUsername dataField" type="text" name="username" autofocus="true" placeholder="<?php echo __tr( "Username" ) ?>">
							<div class="mUsername hint hidden"><?php echo __tr( "Username missing" ) ?></div>
							<div class="sUsername hint hidden"><?php echo __tr( "Username too short" ) ?></div>
							<div class="eUsername hint hidden"><?php echo __tr( "Username already exists" ) ?></div>
						</div>

						<!-- password -->
						<div class="col-1-1 col-last login">
							<input class="iPassword dataField" type="password" name="password" placeholder="<?php echo __tr( "Password" ) ?>">
							<div class="mPassword hint hidden"><?php echo __tr( "Password missing" ) ?></div>
							<div class="wPassword hint hidden"><?php echo __tr( "Username or password wrong" ) ?></div>
							<div class="sPassword hint hidden"><?php echo __tr( "Password too short. 8 chars minimum." ) ?></div>
						</div>

					<!-- Optional further data for register process -->

					<div class="wRegister">
						<!-- password -->
						<div class="col-1-1 col-last login">
							<input class="iRPassword dataField" type="password" name="rPassword" placeholder="<?php echo __tr( "Repeat Password" ) ?>">
							<div class="mRPassword hint hidden"><?php echo __tr( "Please repeat password" ) ?></div>
							<div class="sRPassword hint hidden"><?php echo __tr( "Password too short. 8 chars minimum." ) ?></div>
							<div class="wRPassword hint hidden"><?php echo __tr( "Passwords do not match" ) ?></div>
						</div>

						<!-- department -->
						<div class="col-1-1 col-last login">
							<select class="iDepartment dataField" name="department" value="Abteilung wählen">
								
								<option value="gestaltung">Gestaltung</option>
								<option value="mainnetz">Main-Netz</option>

							</select>
						</div>

					</div>

					<!-- Login- and Registerbutton -->
					<div class="fLeft">
						<div class="button fLeft active">
	                    	<div><?php echo __tr('LOG IN'); ?></div>
	                    </div>

	                    <div class="button fLeft">
	                    	<div><?php echo __tr('REGISTER'); ?></div>
	                    </div>

	                </div>

                    <div class="button fRight">
                    	<input type="submit" value=">">
                    </div>

                    <input type="hidden" name="salt" value="<?php echo $_SESSION["salt"] ?>">

					</form>

					</div>

				</div>
			</div>
		<div>

	</section>

	<footer>
		
	</footer>
	
</body>
</html>

