<?php 
	
	$pageTitle = "Checkout";
	require "../partials/start_body.php";

 ?>

 <?php require "../partials/navbar.php" ?>

	<?php if(!isset($_SESSION["user"])){
		header("Location: login.php");
	} else { ?>
		<main id="main">
			<div class="container">
				<section class="row">
					<div class="col">
						<h1 class="text-center">Checkout Page</h1>
						<form action="../controllers/place_order.php" method="POST">
							<!-- TODO: place_order.php -->
							<div class="container">
								<div class="row mt-4">
									<div class="col-lg-8">
										<h4>Shipping Address</h4>
										<div class="form-group">
											<input type="text" name="addressLine" class="form-control" value="<?php echo $_SESSION["user"]["home_address"]; ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<h4>Amount To Pay</h4>
										<span id="total-price" class="font-weight-bold">

											<?php $cart_total = 0;
												require "../controllers/connect.php";
												foreach ($_SESSION["cart"] as $id => $qty) {
													$sql = "SELECT * FROM items WHERE id = $id";
													$item_info = mysqli_query($conn, $sql);
													$item = mysqli_fetch_assoc($item_info);
													$subTotal = $_SESSION["cart"][$id] * $item["price"];
													$cart_total += $subTotal;
												}
												echo $cart_total;
											?>

										</span>
										<button class="ml-5 btn btn-primary" type="submit"> Place Order Now </button>
									</div>
									<h4>Order Summary </h4>
									<div class="table-responsive">
										<table id="cart-items" class="table-border-non table-primary table-borderless table table-striped table-bordered">
											<thead>
												<tr class="text-center">
													<th>Item Name</th>
													<th>Item Price</th>
													<th>Item Quantity</th>
													<th>Item Subtotal</th>
		
												</tr>
											</thead>
											<tbody>
								
												<?php 
													
													foreach ($_SESSION["cart"] as $id => $qty) {

												 		$sql 				= "SELECT * FROM items WHERE id = '$id'";
												 		$item_info 	= mysqli_query($conn, $sql);
												 		$item 			= mysqli_fetch_assoc($item_info);
												 		$subtotal 	= $_SESSION["cart"]["$id"] * $item["price"];
												 		$cart_total += $subtotal; 

												 ?>
												 		
												 <tr>
													<td class="item_name"><?php echo $item["name"] ?></td>
													<td class="item_price text-center"> <?php echo $item["price"] ?></td>
													<td class="item_quantity text-center">
														<?php echo $qty ?>
													</td>
													<td class="item_subtotal text-center"><?php echo $subtotal ?></td>
													
												</tr>
									 
												<?php } mysqli_close($conn);?>
									

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</form>
					</div>
				</section>
			</div>
		</main>
	<?php } ?>

	






 <?php require "../partials/end_body.php"; ?>