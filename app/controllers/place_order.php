<?php 

	session_start();
	require "connect.php";

	function generate_new_transaction_number(){
		$ref_number = "";
		$source = [
			"0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F"
		];
		for ($i = 0; $i < 6; $i++) { 
			$index = rand(0,15); //generates random number given the range.
			$ref_number .= $source[$index]; // append a random character from the source array
		}

		$today = getDate(); // seconds since unix epoch
		return $ref_number . "-" . $today[0];
	};

	$transaction_code = generate_new_transaction_number();
	echo $transaction_code;

 ?>