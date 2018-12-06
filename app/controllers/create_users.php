<?php 

	require "connect.php";

	$username 	= htmlspecialchars($_POST["username"]);
	$password 	= password_hash(htmlspecialchars($_POST["password"]), PASSWORD_BCRYPT);
	$firstname 	= htmlspecialchars($_POST["fname"]);
	$lastname 	= htmlspecialchars($_POST["lname"]);
	$email 			= htmlspecialchars($_POST["email"]);
	$address 		= htmlspecialchars($_POST["address"]);
 

	$sql 		= "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result ) > 0) {
		die ("user exists");
	} else {

		$insert_query = "INSERT INTO users (username, password, first_name, last_name, email, home_address) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$address')"; 
		$result = mysqli_query($conn, $insert_query);
		
	}

	mysqli_close($conn);

 ?>