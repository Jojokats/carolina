<?php
  $title = "About Us";
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/about_us.jpg" class="img-fluid" alt="About Us"/>
      <h2 class="text-uppercase d-none d-md-block">About Us</h2>
    </div>
  </div>
</div><!-- /container -->

<div class="container pt-4">
  <div class="row">

    <main class="col-lg-8 main-content">
        <h2 class="d-block d-md-none text-uppercase text-center">About Us</h2>
        <p class="mt-3">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.
          </p>
        </p>
    </main>

    <aside class="col-lg-4">
      <div class="sidebar hours">
        <?php include 'templates/business_hours.php'; ?>
      </div><!-- /sidebar -->
    </aside>

  </div><!-- /row -->
</div><!-- /container -->

<?php

  include 'templates/footer.php';

?>
