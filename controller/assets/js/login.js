$(document).ready(function(){

	/*

		VARIABLES
	
	*/


	// CUSTOM – minimum number of chars for username/password
	var minUsername = 6;
	var minPassword = 8;

	// GENERAL
	var form = $("form[method=post]");
	var bLogin = $(".button").eq(0);
	var bRegister = $(".button").eq(1);
	var wRegister = $(".wRegister");
	// input fields
	var allFields = $(".dataField");
	var iUsername = $(".iUsername");
	var iPassword = $(".iPassword");
	var iRPassword = $(".iRPassword");
	var iDepartment = $(".iDepartment");
	// "something-is-missing" hints
	var allHints = $(".hint");
	var mPassword = $(".mPassword");
	var sPassword = $(".sPassword");
	var mUsername = $(".mUsername");
	var sUsername = $(".sUsername");
	var eUsername = $(".eUsername");
	var sRPassword = $(".sRPassword");
	var mRPassword = $(".mRPassword");
	var wRPassword = $(".wRPassword");

	/*

		CLICK ON LOGIN / ON FORM SUBMIT

	*/

	form.on("submit", function( event ){

		allHints.addClass("hidden");
		allFields.removeClass("missing");

		/* 
			CASE LOGIN
		*/

		// formality
		$caseLogin = bLogin.hasClass("active");
		$usernameTooShort = iUsername.val().length < minUsername;
		$passwordTooShort = iPassword.val().length < minPassword;

		// client-side formality check – formalities not correct
		if( $caseLogin && ( $usernameTooShort | $passwordTooShort ) ) {
		event.preventDefault();

			// remove highlighting from all fields
			allFields.removeClass("missing");
			
			// hide all hints
			allHints.addClass("hidden");

			// user did not type a username -> show hint
			if( !iUsername.val() ) {
				iUsername.addClass("missing");
				mUsername.removeClass("hidden");
			} else 

			// username too short -> show hint
			if( iUsername.val().length < minUsername ) {
				iUsername.addClass("missing");
				sUsername.removeClass("hidden");
			}


			// user did not type a password -> show hint
			if( !iPassword.val() ) {
				iPassword.addClass("missing");
				mPassword.removeClass("hidden");
			} else 

			// username too short -> show hint
			if( iPassword.val().length < minPassword ) {
				iPassword.addClass("missing");
				sPassword.removeClass("hidden");
			}

		} else if ( bLogin.hasClass("active") ) { // formality according to specification – check if login data is correct serverside and log in

		event.preventDefault();
			allHints.addClass("hidden");
			// user input
			var data = $("form").serialize();

			// login
			ajaxLogin( data );
			
		}





		/* 
			CASE REGISTER
		*/

		// formality
		$caseRegister = bRegister.hasClass("active");
		$usernameTooShort = iUsername.val().length < minUsername;
		$passwordTooShort = iPassword.val().length < minPassword;
		$rPasswordTooShort = iRPassword.val().length < minPassword;
		$passwordsDontMatch = iPassword.val() != iRPassword.val();

		// client-side formality check – formalities not correct
		if( $caseRegister && ( $usernameTooShort | $passwordTooShort | $rPasswordTooShort | $passwordsDontMatch ) ) {

		event.preventDefault();

			// remove highlighting from all fields
			allFields.removeClass("missing");

			// hide all "something-is-missing" hints
			allHints.addClass("hidden");

			// username too short -> show hint
			if( iUsername.val().length < minUsername ) {
				iUsername.addClass("missing");
				sUsername.removeClass("hidden");
			}

			// password too short -> show hint
			if( iPassword.val().length < minPassword ) {
				iPassword.addClass("missing");
				sRPassword.removeClass("hidden");
			} else 

			// else if( ... ) passwords do not match -> show hint
			if( iRPassword.val() != iPassword.val() ) {
				iPassword.addClass("missing");
				wRPassword.removeClass("hidden");
			}

		} else if( bRegister.hasClass("active") ) { // formality according to specification – register new user and log in

		event.preventDefault();
			// user input
			var data = $("form").serialize();

			ajaxRegister( data );

		}


	});





	/*

		AJAX-DRIVEN LOGIN

	*/

	function ajaxLogin( data ) {

		$.ajax({

			// check if login data is correct and set SESSION ID in loginvalidate
			type: "POST",
			url: "/action/loginvalidate",
			data: data,

			success: function( result ) {

				if( result == "noUser" ) {

					// no user found – hint: "Username or password wrong"
					$(".wPassword").removeClass( "hidden" );

				} else if( result == "incorrect" ) {

					// username or password wrong – hint: "Username or password wrong"
					$(".wPassword").removeClass( "hidden" );

				} else if( result == "correct" ) {
						
					// login data correct – redirect to "startseite"
					alert( "loggin in......." );
					setTimeout(' window.location.href = "startseite"; ', 400);
				
				}

			}

		});

	}





	/*

		AJAX-DRIVEN REGISTER

	*/

	function ajaxRegister( data ) {
	
		$.ajax({

			// check if login data is correct and set SESSION ID in loginvalidate
			type: "POST",
			url: "/action/registeruser",
			data: data,

			success: function( result ) {

				switch( result ) {

					// user already exists
					case "userexists" : eUsername.removeClass("hidden");
					break;

					// user is created – login with the new user
					case "usercreated" : ajaxLogin( data );
					break;

				} 

			}

		});

	}





	
	/*

		BUTTON – SWITCH BETWEEN LOGIN / REGISTER	

	*/

	// click on bLogin button
	bLogin.on( "click", function(){

		if( wRegister.hasClass("show") ) {
		  wRegister.removeClass("show");
		
		bRegister.toggleClass("active");
		bLogin.toggleClass("active");

		}

	});


	// click on bRegister button
	bRegister.on("click", function(){

		if( !(wRegister.hasClass("show")) ) {
			wRegister.addClass("show");

		bRegister.toggleClass("active");
		bLogin.toggleClass("active");

		}
	
	});

});