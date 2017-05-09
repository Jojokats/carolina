<?php
  $title = "Services";
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container mt-5">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/services.jpg" class="img-fluid" alt="About Us"/>
      <h2 class="text-uppercase d-none d-md-block">Services</h2>
    </div>
  </div>
</div><!-- /container -->

<div class="container" id="ourservices">
  <div class="row">

    <main class="col-lg-8 main-content mt-3">
        <h2 class="d-block d-md-none text-uppercase text-center pb-4">Services</h2>

        <div id="services" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header py-2" role="tab" id="sevice_1">
                <h3 class="mb-0">
                  <a data-toggle="collapse" data-parent="#services" href="#service_1desc" aria-expanded="true" aria-controls="service_1desc">Heat &amp; Hydrotherapy</a>
                </h3>
            </div><!-- /card-header -->

            <div id="service_1desc" class="collapse show" role="tabpanel" aria-labelledby="service_1desc">
              <div class="card-block">
                  DETOXIFY cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div><!-- /card-block -->
            </div><!-- /service_1desc -->
          </div><!-- /card -->

          <!-- 2 card -->
          <div class="card">
            <div class="card-header py-2" role="tab" id="sevice_2">
                <h3 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" data-parent="#services" href="#service_2desc" aria-expanded="false" aria-controls="service_2desc">Body Work</a>
                </h3>
            </div><!-- /card-header -->

            <div id="service_2desc" class="collapse" role="tabpanel" aria-labelledby="service_2desc">
              <div class="card-block">
                  HEALING  cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div><!-- /card-block -->
            </div><!-- /service_1desc -->
          </div><!-- /card -->

          <!-- 3 card -->
          <div class="card">
            <div class="card-header py-2" role="tab" id="sevice_3">
                <h3 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" data-parent="#services" href="#service_3desc" aria-expanded="false" aria-controls="service_3desc">Esthetics</a>
                </h3>
            </div><!-- /card-header -->

            <div id="service_3desc" class="collapse" role="tabpanel" aria-labelledby="service_3">
              <div class="card-block">
                  EARTH STONE FACIAL reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div><!-- /card-block -->
            </div><!-- /service_1desc -->
          </div><!-- /card -->

        </div><!-- /services -->
    </main>



    <aside class="col-lg-4 discount mt-3">
      <div class="py-5 boxy">
          <h3 class="text-center text-uppercase mt-3">First Time Customers</h3>
          <p class="lead text-center mt-4">Get 20% off our premium services, with this coupon:</p>

          <div class="coupon p-3">
            <p class="text-center text-uppercase pt-3">
              <span class="display-4">20% off</span>
              our premium services
            </p>
          </div>
      </div><!-- /sidebar -->
    </aside>

  </div><!-- /row -->
</div><!-- /container -->

<?php
  include 'templates/appointment.php';
  include 'templates/footer.php';
?>
