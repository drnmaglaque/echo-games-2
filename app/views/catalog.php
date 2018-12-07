<?php 
$pageTitle = "Catalog";
require("../controllers/get_categories.php");
require("../controllers/get_products.php");
require_once("../partials/start_body.php"); ?>

	<?php require_once("../partials/navbar.php") ?>

	<main id="main" class="role">
		<div class="container">
			<section class="row my-5">

				<div class="col-md-3 mb-5">
					<h2 class="text-center">COLLECTIONS</h2>
				</div>
				<div class="col-md-9">
					<div class="input-group">
						<input id="search-form" type="text" name="search" class="form-control" placeholder="Search Item">
						<div class="input-group-append">
							<span class="input-group-text" id="search-icon"><i class="fas fa-search"></i></span>
						</div>
					</div>
				</div>
			
			
				<div class="category-container col-md-3">
					<ul class="list-group">
					  <?php foreach($categories as $category): ?>
					  	<li id="<?php echo $category["id"] ?>" class="list-group-item"><?php echo $category["name"] ?></li>
					  <?php endforeach; ?>
					</ul>
				</div>
				<div class="products-container col-md-9">
					<div class="card-columns">
						<?php foreach($items as $item): ?>
							<div class="card">
							  <img class="card-img-top" src="../assets/images/<?php echo $item["image"] ?>" alt="Card image cap">
							  <div class="card-body">
							    <h5 class="card-title">
							    	<a href="product.php?id=<?php echo $item['id'] ?>">
							    		<?php echo $item["name"]; ?>
							    	</a>	
							    </h5>
							    <p class="card-text">PHP <?php echo $item["price"] ?></p>

							    <input id="input_qty" type="number" name="" class="form-control mb-2 qty-field" value="1">
							    <button data-id="<?php echo $item['id']; ?>" class="add-cart btn btn-sm btn-outline-primary">Add To Cart</button>

							  </div>
							</div>
						<?php endforeach; ?>	
					</div>
				</div>
			</section>
		</div>
	</main>

<?php require_once("../partials/end_body.php") ?>