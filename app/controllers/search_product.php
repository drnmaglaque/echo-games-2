<?php 

require "connect.php";

if (isset($_POST["search"])) {
	if (preg_match("/[A-Z | a-z]+/", $_POST["search"])) {
		$search_val = $_POST["search"];
	}
} else {
	$search_val = NULL;
}


$sql = "SELECT * FROM items WHERE name COLLATE UTF8_GENERAL_CI LIKE '%$search_val%'";
$result = mysqli_query($conn, $sql);
$searchedItems = mysqli_fetch_all($result, MYSQLI_ASSOC);



if ($searchedItems) {
	echo json_encode($searchedItems);
} else {
	echo "";
}

 ?>