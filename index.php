<?php
  $title = "Home";
  include 'templates/header.php';
  include 'templates/navigation.php';
?>

    <!-- Main Slider -->
    <div class="container">
      <div id="main-slider" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#main-slider" data-slide-to="0"></li>
          <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="0\2"></li>
        </ol><!-- /carousel-indicators -->

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <img src="img/waterfall.jpg" alt="our facilities" class="d-block img-fluid">

            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">Chill out, relax &amp; recharge</h3>
            </div>
          </div><!-- /carousel-item -->

          <div class="carousel-item">
            <img src="img/slide_01.jpg" alt="our facilities" class="d-block img-fluid">

            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">Our Facilities</h3>
            </div>
          </div><!-- /carousel-item -->

          <div class="carousel-item">
            <img src="img/wellness2.jpg" alt="our facilities" class="d-block img-fluid">

            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">Learn About Our Services</h3>
            </div>
          </div><!-- /carousel-item -->


          <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a href="#main-slider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div><!-- /carousel-inner -->
      </div><!-- /main-slider -->
    </div><!-- /container -->

    <!-- Welcome section -->
    <section class="welcome py-5">
      <h2 class="text-center text-uppercase pb-2">
        <span class="text-lowercase">Welcome to the exclusive</span> Carolina Spa salon
      </h2>
      <p class="text-center mt-4">Escape into our relaxing therapeutic spa environment. <br>Feel renewed and energized with our professional massage therapists.</p>
    </section>

    <div class="container pb-5">
      <div class="row">

        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img src="img/stone-sm.jpg" class="img-fluid" alt="image service-01">
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase">
                  <span class="text-lowercase">Learn more</span> about us
                </h3>
                <a href="#" class="btn btn-success text-uppercase btn-block mt-5">read more</a>
              </div><!-- /image-info -->
            </div><!-- /row -->
          </div><!-- /image-links -->
        </div><!-- /col-md-4 -->

        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img src="img/services-sm.jpg" class="img-fluid" alt="image service-02">
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase">
                  <span class="text-lowercase">About</span>Our Services
                </h3>
                <a href="#" class="btn btn-success text-uppercase btn-block mt-5">read more</a>
              </div><!-- /image-info -->
            </div><!-- /row -->
          </div><!-- /image-links -->
        </div><!-- /col-md-4 -->

        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img src="img/dior.jpg" class="img-fluid" alt="image service-03">
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase">
                  <span class="text-lowercase">visit</span> our store
                </h3>
                <a href="#" class="btn btn-success text-uppercase btn-block mt-5">read more</a>
              </div><!-- /image-info -->
            </div><!-- /row -->
          </div><!-- /image-links -->
        </div><!-- /col-md-4 -->

      </div><!-- /row -->
    </div><!-- /container -->

    <!-- Business hours section -->
    <section class="business-hours">
      <div class="container py-6">
        <div class="row">
          <div class="col-md-6">
            <?php include 'templates/business_hours.php'; ?>
          </div><!-- /col-md-6 -->

          <div class="col-md-6 bg-hours"></div>
        </div><!-- /row -->
      </div><!-- /container -->
    </section>

    <!-- Products -->
    <div class="container products py-6">
      <h2 class="text-center text-uppercase pb-5">
        <span class="text-lowercase">Check out</span> our products
      </h2>

      <div class="row py-4">
        <div class="col-6 col-md-3 mb-5 mb-md-0">
          <div class="card">
            <a href="#">
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
            <a href="#">
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
            <a href="#">
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
            <a href="#">
              <img src="img/product-d.jpg" class="card-img-top img-fluid" alt="product-1">
              <div class="card-block">
                <h3 class="card-title text-center text-uppercase product">Product 4</h3>
                <p class="card-text text-uppercase text-center">Curabitur egestas sit amet nec blandy.</p>
                <p class="price text-center">$ 80</p>
              </div>
            </a>
          </div><!-- /card -->
        </div><!-- /col-6 col-md-3 -->

      </div><!-- /row -->
    </div><!-- /container products -->




    <?php
      include 'templates/appointment.php';
      include 'templates/footer.php';

    ?>
