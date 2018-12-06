<?php 

	$pageTitle = "Echo Games | Login";
	require_once("../partials/start_body.php");

 ?>

 <?php require "../partials/navbar.php" ?>

	<main>
		<div class="row mt-5">
			<div class="col">
				<h1 id="login-set" class="text-center">Login</h1>
				<form>
					<div class="form-row">
						<div class="col-md-6 offset-md-3">
							<div class="form-group">
								<label for="username-email">Username or Email </label>
								<input type="text" name="username-email" id="username-email" placeholder="Username or Email" class="form-control">
								<span class="text-danger small"></span>
							</div>
							<div class="form-group">
								<label for="password">Password </label>
								<input type="password" name="password" id="password" placeholder="Password" class="form-control">
								<span class="text-danger small"></span>
							</div>
							<button id="login" type="submit" class="btn-block btn-success">Sign In</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>



















  <?php require "../partials/end_body.php" ?>