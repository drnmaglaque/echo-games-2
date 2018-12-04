<?php

require("connect.php");

if(isset($_GET['id']) && ctype_digit($_GET['id'])) {
	$prod_id = htmlspecialchars($_GET['id']);
} else {
	$prod_id = NULL;
}

$sql = "SELECT * FROM items where id = '$prod_id'";

$result = mysqli_query($conn, $sql);

//var_dump($result);

$product = mysqli_fetch_assoc($result);	

mysqli_close($conn);