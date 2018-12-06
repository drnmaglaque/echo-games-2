<?php 
  $section = null;

  if(isset($_GET["section"])) {
    $value = htmlspecialchars($_GET["section"]);    
    
    if($value == "catalog") {
      $section = "catalog";
    } elseif($value == "cart") {
      $section = "cart";
    } elseif($value == "about_us") {
      $section = "about_us";
    } elseif($value == "login") {
      $section = "login";
    } elseif($value == "register") {
      $section = "register";
    } elseif($value == "index") {
      $section = "index";
    }
  }
  
?>
<header id="echo-header">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/echo-games/app/views/index.php"><img class="brand-logo" src="../assets/images/brand-logo-1.png" width="30" height="30">Echo Games</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($section == "catalog") { echo "active"; } ?>" href="/echo-games/app/views/catalog.php?section=catalog"><i class="fas fa-book"></i> Catalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($section == "cart") { echo "active"; } ?>" href="/echo-games/app/views/cart.php?section=cart"><i class="fas fa-shopping-cart"></i>
            <span id="cart-count" class="badge badge-light small">

              <?php if(isset($_SESSION["cart"])) {
                echo array_sum($_SESSION["cart"]); 
                
              } else {
                echo "0";
              }
              ?>
              
            </span> Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($section == "about_us") { echo "active"; } ?>" href="#"><i class="fas fa-info-circle"></i> About Us</a>
        </li>
        
        <?php if(!isset($_SESSION["user"])): ?>

        <li class="nav-item">
          <a class="nav-link <?php if($section == "login") { echo "active"; } ?>" href="/echo-games/app/views/login.php?section=login"><i class="fas fa-user"></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($section == "register") { echo "active"; } ?>" href="/echo-games/app/views/registration.php?section=register"><i class="fas fa-user-plus"></i> Register</a>
        </li>

        <?php else:  ?>

        <li class="nav-item">
          <a href="" class="nav-link">Welcome, <?php echo $_SESSION["user"]["first_name"] ?></a>
        </li>

        <li class="nav-item">
          <a id="logout" href="../controllers/logout.php" class="nav-link">Log Out</a>
        </li>

        <?php endif; ?>

      </ul>
      <form class="search-form form-inline mt-2 mt-md-0 d-none d-md-block justify-content-end">
        <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search">
      </form>
    </div>
  </nav>

  <?php if (!isset($_SESSION['user'])): ?>

  <?php elseif(isset($_SESSION['user']) && $section == NULL): ?>

  <?php elseif(isset($_SESSION['user']) && $section == "index"): ?>
    <div class="container-fluid">
     <div class="row">
      <div id="notif-session" class="col-md-12">
        <p class="offset-md-3">Login successful!</p>
      </div>
     </div>
    </div>
  <?php endif; ?>  

</header>