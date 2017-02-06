$(document).ready(function(){

	/*

		VARIABLES
	
	*/


	// CUSTOM	
	// min number of chars for username/password
	var minUsername = 6;
	var minPassword = 8;

	var form = $("form[method=post]");
	var bLogin = $(".button").eq(0);
	var bRegister = $(".button").eq(1);
	var wRegister = $(".wRegister");
	// input fields
	var iUsername = $("input[name=username]");
	var iPassword = $("input[name=password]");
	var iRPassword = $("input[name=rPassword]");
	var iDepartment = $("input[name=department]");
	// "something-is-missing" hints
	var mPassword = $(".mPassword");
	var mUsername = $(".mUsername");
	var sUsername = $(".sUsername");
	var sRPassword = $(".sRPassword");
	var mRPassword = $(".mRPassword");
	var wRPassword = $(".wRPassword");

	/*

		CLICK ON LOGIN / ON FORM SUBMIT

	*/

	form.on("submit", function( event ){


		/* 
			CASE LOGIN
		*/

		// case login input empty
		if( bLogin.hasClass("active") && ( iUsername.val().length < minUsername | iPassword.val().length < minPassword ) ) {

		event.preventDefault();

			iUsername.removeClass("missing");
			iPassword.removeClass("missing");
			
			// hide all "something-is-missing" hints
			mPassword.add(mUsername).add(sUsername).add(sRPassword).add(mRPassword).add(wRPassword).addClass("hidden");

			// user did not type a username -> show hint
			if( !iUsername.val() ) {
				iUsername.addClass("missing");
				mUsername.removeClass("hidden");
			}

			// user did not type a password -> show hint
			if( !iPassword.val() ) {
				iPassword.addClass("missing");
				mPassword.removeClass("hidden");
			}

		}

		/* 
			CASE REGISTER
		*/

		// case register input less than var minUsername/minPassword chars or passwords do not match
		if( (bRegister.hasClass("active")) && ( iUsername.val().length < minUsername | iPassword.val().length < minPassword | iRPassword.val().length < minPassword | iPassword.val() != iRPassword.val() ) ) {

		event.preventDefault();

			iUsername.removeClass("missing");
			iPassword.removeClass("missing");
			iRPassword.removeClass("missing");

			// hide all "something-is-missing" hints
			mPassword.add(mUsername).add(sUsername).add(sRPassword).add(mRPassword).add(wRPassword).addClass("hidden");

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

		}


	});




	
	/*

		SWITCH BETWEEN LOGIN / REGISTER	

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




