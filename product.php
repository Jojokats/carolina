<?php
  $title = "Name of Product";
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container mt-5">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/product-lg-a.jpg" class="img-fluid" alt="About Us"/>
      <h2 class="text-uppercase d-none d-md-block">Exclusive</h2>
    </div>
  </div>
</div><!-- /container -->

<div class="container" id="ourservices">
  <div class="row">

    <main class="col-lg-8 main-content mt-5">
        <h2 class="d-block d-md-none text-uppercase text-center">Exclusive</h2>

        <p>
          Exclusive make up kit, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a href="products.php" class="btn btn-primary btn-lg mt-5 text-uppercase back">Back to products</a>
    </main>



    <aside class="col-lg-4 product-description mt-5">
        <h3 class="text-center text-uppercase mt-5">Makeup kit</h3>
        <p class="text-center lead p-3">
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt laborum.
        </p>
        <h3 class="text-center text-uppercase mt-2">Price</h3>
        <p class=" display-4 text-center lead p-3">
          $25
        </p>
    </aside>

  </div><!-- /row -->
</div><!-- /container -->

<?php
  include 'templates/appointment.php';
  include 'templates/footer.php';
?>
