<?php 
	$pageTitle = "Cart";
	require "../partials/start_body.php";

 ?>

 <?php require "../partials/navbar.php"; ?>


	<main id="main">
		<div class="container">
			<section class="row">
				<div class="col">
					<h1 class="text-center"> Your Cart </h1>
					<div class="table-responsive">
						<table id="cart-items" class="table-border-non table-primary table-borderless table table-striped table-bordered">
							<thead>
								<tr class="text-center">
									<th>Item Name</th>
									<th>Item Price</th>
									<th>Item Quantity</th>
									<th>Item Subtotal</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php $cart_total = 0; ?>
								<?php if(isset($_SESSION["cart"]) && count($_SESSION["cart"]) != 0): ?>
									<?php 
										
										require "../controllers/connect.php";
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
										<td class="item_quantity">
											<input type="number" min="0" max="9999" name="" class="form-control text-right" value="<?php echo $qty ?>" data-id="<?php echo $id ?>">
										</td>
										<td class="item_subtotal text-center"><?php echo $subtotal ?></td>
										<td class="item_action">
											<button data-id="<?php echo $id ?>" class="btn btn-danger item-remove"><i class="fas fa-trash"></i></button>
											
										</td>
									</tr>
									 
								<?php } mysqli_close($conn) ?>
							<?php endif; ?>

							</tbody>
							<tfoot>
								<tr>
									<td class="text-right font-weight-bold align-middle" colspan="3">Total: </td>
									<td class="text-center font-weight-bold align-middle" id="total-price"><?php echo $cart_total; ?></td>
									<td class="text-left align-middle"><a href="checkout.php" class="btn btn-primary">Proceed to check out</a></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</section>
		</div>
	</main>








 <?php require "../partials/end_body.php" ?>