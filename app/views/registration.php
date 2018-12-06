<?php 

	$pageTitle = "Echo Games | Registration";
	require_once("../partials/start_body.php");
 ?>

 <?php require "../partials/navbar.php" ?>


	<div class="container">
		<div class="row">
			<section class="registration-box col-md-6 offset-md-3 mt-5 px-5">
				<h3 class="mt-5" id="main">Sign up</h3>
				<hr>
				<form>
					<div class="form-row">
						<input id="input-fname" type="text"  name="fname" class="form-control mt-3 mt-5" placeholder="First Name">
						<span class="text-danger small"></span>
					</div>
					<div class="form-row">
						<input id="input-lname" type="text"  name="lname" class="form-control mt-3" placeholder="Last Name">
						<span class="text-danger small"></span>
					</div>
					<div class="form-row">
						<input id="input-email" type="email"  name="email" class="form-control mt-3" placeholder="Email">
						<span class="text-danger small"></span>
					</div>
					<div class="form-row">
						<input id="input-username" type="text"  name="username" class="form-control mt-3" placeholder="Username (at least 8 characters more)">
						<span class="text-danger small"></span>
					</div>
					<div class="form-row">
						<input id="input-password" type="password"  name="password" class="form-control mt-3" placeholder="Password (at least 8 characters or more)">
						<span class="text-danger small"></span>
					</div>
					<div class="form-row">
						<input id="input-confirm-password" type="password"  name="confirm-password" class="form-control mt-3" placeholder="Confirm thy password">
						<span class="text-danger small"></span>
					</div>
					<div class="form-row">
						<input id="input-address" type="text"  name="home-address" class="form-control mt-3" placeholder="Home Address">
						<span class="text-danger small"></span>
					</div>
					<button id="add-user" class="btn btn-primary float-right my-5">Register</button>
				</form>
			</section>
		</div>
	</div>





 <?php require "../partials/end_body.php" ?>