$(document).ready(function(){

	const addUser 	= $("#add-user");

	const username 	= $("#input-username");
	const password 	= $("#input-password");
	const fname 		= $("#input-fname");
	const lname 		= $("#input-lname");
	const email 		= $("#input-email");
	const address 	= $("#input-address");

	const confirmPassword = $("#input-confirm-password");



	function validateRegistrationForm(){
		let errors = 0;

		if (username.val().length < 8) {
			username.next().text("Please provide a valid username with at least 8 characters or more");
			errors++;
		} else {
			username.next().text("");
		}

		if (password.val().length < 8 && password.val().length > 1) {
			password.next().text("Please provide a valid password with at least 8 characters or more");
			errors++;
		} else {
			password.next().text("");
		}

		if(!email.val().includes("@")) {
			email.next().text("Please provide a valid email");
			errors++;
		} else {
			email.next().text("");
		}

		if(!address.val()) {
			address.next().text("Address is required");
			errors++
		} else {
			address.next().text("");
		}

		if(!fname.val()) {
			fname.next().text("Please enter your first name");
			errors++;
		} else {
			fname.next().text("");
		}


		if(!lname.val()) {
			lname.next().text("Please enter your last name");
			errors++;
		} else {
			lname.next().text("");
		}


		// If password and confirm password not match
		if (confirmPassword.val() !== password.val()) {
			confirmPassword.next().text("Your passwords do not match")
			errors++
		} else {
			confirmPassword.next().text("");
		}

		// If username and password are both the same
		if(password.val() == username.val() && username.val() !== "" && password.val() !== "") {
			password.next().text("Your password cannot be the same as your username");
			errors++
		} else {
			password.next().text("");
		}

		if (!password.val()) {
			password.next().text("Thy password is required");
			errors++
		} else {
			
		}




		if (errors > 0) {
			return false;
		} else {
			return true;
		}

	};

	addUser.click(function(e){
		e.preventDefault();
		if (validateRegistrationForm()) {

			let usernameVal 	= username.val();
			let passwordVal 	= password.val();
			let emailVal 			= email.val();
			let fnameVal 			= fname.val();
			let lnameVal 			= lname.val();
			let addressVal 		= address.val();

			$.ajax({
				"url"		: "../controllers/create_users.php",
				"type"	: "POST",
				"data"	: {
					"username" 	: usernameVal,
					"password" 	: passwordVal,
					"email" 		: emailVal,
					"fname" 		: fnameVal,
					"lname"			: lnameVal,
					"address" 	: addressVal,
				},

				"success": function(jsondata){

					if(jsondata == "user exists") {
						username.next().text("Username already exists");
					} else {
						$("#main").text("Successfully registered!");
						username.val("");
						password.val("");
						fname.val("");
						lname.val("");
						email.val("");
						address.val("");
						confirmPassword.val("");
					}
				}
			});
		}

});


});