<?php
  $title = "Products / Store";
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container mt-5">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/store.jpg" class="img-fluid" alt="About Us"/>
      <h2 class="text-uppercase d-none d-md-block">Products</h2>
    </div>
  </div>
</div><!-- /container -->

<div class="container" id="ourservices">
  <div class="row">

    <main class="col-lg-12 main-content mt-3">
        <h2 class="d-block d-md-none text-uppercase text-center pb-4">Products</h2>

        <div class="row products">

          <!-- First row of products -->
          <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
              <a href="product.php">
                <img src="img/product-a.jpg" class="card-img-top img-fluid" alt="product-1">
                <div class="card-block">
                  <h3 class="card-title text-center text-uppercase product">Product 1</h3>
                  <p class="card-text text-uppercase text-center">Curabitur egestas sit amet nec blandy.</p>
                  <p class="price text-center">$ 25</p>
                </div>
              </a>
            </div><!-- /card -->
          </div><!-- /col-6 col-md-3 -->

          <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
              <a href="product.php">
                <img src="img/product-b.jpg" class="card-img-top img-fluid" alt="product-1">
                <div class="card-block">
                  <h3 class="card-title text-center text-uppercase product">Product 2</h3>
                  <p class="card-text text-uppercase text-center">Curabitur egestas sit amet nec blandy.</p>
                  <p class="price text-center">$ 50</p>
                </div>
              </a>
            </div><!-- /card -->
          </div><!-- /col-6 col-md-3 -->

          <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
              <a href="product.php">
                <img src="img/product-c.jpg" class="card-img-top img-fluid" alt="product-1">
                <div class="card-block">
                  <h3 class="card-title text-center text-uppercase product">Product 3</h3>
                  <p class="card-text text-uppercase text-center">Curabitur egestas sit amet nec blandy.</p>
                  <p class="price text-center">$ 30</p>
                </div>
              </a>
            </div><!-- /card -->
          </div><!-- /col-6 col-md-3 -->

          <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
              <a href="product.php">
                <img src="img/product-d.jpg" class="card-img-top img-fluid" alt="product-1">
                <div class="card-block">
                  <h3 class="card-title text-center text-uppercase product">Product 4</h3>
                  <p class="card-text text-uppercase text-center">Curabitur egestas sit amet nec blandy.</p>
                  <p class="price text-center">$ 80</p>
                </div>
              </a>
            </div><!-- /card -->
          </div><!-- /col-6 col-md-3 -->

          <div class="w-100 py-5"></div>

          <!-- 2nd row of products -->
          <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
              <a href="product.php">
                <img src="img/product-a.jpg" class="card-img-top img-fluid" alt="product-1">
                <div class="card-block">
                  <h3 class="card-title text-center text-uppercase product">Product 5</h3>
                  <p class="card-text text-uppercase text-center">Curabitur egestas sit amet nec blandy.</p>
                  <p class="price text-center">$ 25</p>
                </div>
              </a>
            </div><!-- /card -->
          </div><!-- /col-6 col-md-3 -->

          <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
              <a href="product.php">
                <img src="img/product-b.jpg" class="card-img-top img-fluid" alt="product-1">
                <div class="card-block">
                  <h3 class="card-title text-center text-uppercase product">Product 6</h3>
                  <p class="card-text text-uppercase text-center">Curabitur egestas sit amet nec blandy.</p>
                  <p class="price text-center">$ 50</p>
                </div>
              </a>
            </div><!-- /card -->
          </div><!-- /col-6 col-md-3 -->

          <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
              <a href="product.php">
                <img src="img/product-c.jpg" class="card-img-top img-fluid" alt="product-1">
                <div class="card-block">
                  <h3 class="card-title text-center text-uppercase product">Product 7</h3>
                  <p class="card-text text-uppercase text-center">Curabitur egestas sit amet nec blandy.</p>
                  <p class="price text-center">$ 30</p>
                </div>
              </a>
            </div><!-- /card -->
          </div><!-- /col-6 col-md-3 -->

          <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
              <a href="product.php">
                <img src="img/product-d.jpg" class="card-img-top img-fluid" alt="product-1">
                <div class="card-block">
                  <h3 class="card-title text-center text-uppercase product">Product 8</h3>
                  <p class="card-text text-uppercase text-center">Curabitur egestas sit amet nec blandy.</p>
                  <p class="price text-center">$ 80</p>
                </div>
              </a>
            </div><!-- /card -->
          </div><!-- /col-6 col-md-3 -->

        </div><!-- /row -->


    </main>

  </div><!-- /row -->
</div><!-- /container -->



<?php
  include 'templates/appointment.php';
  include 'templates/footer.php';
?>
