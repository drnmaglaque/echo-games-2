<?php 

	session_start();
	function getCartCount() {
		return array_sum($_SESSION["cart"]);
	};

	$item_id = htmlspecialchars($_POST["item_id"]);
	$item_quantity = htmlspecialchars($_POST["item_quantity"]);
	$ifFromCatalogPage = htmlspecialchars($_POST["ifFromCatalogPage"]);



	if ($item_quantity == "0") {
		unset($_SESSION["cart"]["$item_id"]);
	} else {
		if (isset($_SESSION["cart"]["$item_id"])) {
			// Add it to out session variable
			if ($ifFromCatalogPage == "1") {
				$_SESSION["cart"]["$item_id"] += $item_quantity;
				// if from catalog, we keep on adding
			} else {
				$_SESSION["cart"]["$item_id"] = $item_quantity;
				// in cart, we assign
			}
		} else {
			$_SESSION["cart"]["$item_id"] = $item_quantity;
		}
	}

	echo getCartCount();
	
?>