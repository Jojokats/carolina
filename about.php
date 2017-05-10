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
          Adipisicing elit sit amet, consectetur , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis consequat. Duis aute eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt est laborum.
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.
          </p>
        </p>


        <div class="facilities-gallery pb-5" data-target="#image_1" data-toggle="modal">

            <h3 class="text-center text-uppercase p-5"><span class="text-lowercase">checkout Our</span> facilities</h3>

            <a href="#" data-target="image_1" data-toggle="modal">
              <img src="img/gallery_thumb_01.jpg" class="rounded img-fluid" alt="image-1" />
            </a>
            <a href="#" data-target="image_2" data-toggle="modal">
              <img src="img/gallery_thumb_02.jpg" class="rounded img-fluid" alt="image-1" />
            </a>
            <a href="#" data-target="image_3" data-toggle="modal">
              <img src="img/gallery_thumb_03.jpg" class="rounded img-fluid" alt="image-1" />
            </a>

            <!-- 1st modal -->
            <div class="modal fade" id="image_1" tabindex="-1" role="dialog"
          aria-labelledby ="image_1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                  <div class="model-content">
                    <div class="modal-body">
                        <img src="img/gallery_large_01.jpg" class="img-fluid" alt="image-1" />
                    </div><!-- / modal-body -->
                  </div><!-- / model-content -->

                </div><!-- / modal-dialog -->
            </div><!-- / modal -->

            <!-- 2nd modal -->
            <div class="modal fade" id="image_2" tabindex="-1" role="dialog"
          aria-labelledby ="image_2" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                  <div class="model-content">
                    <div class="modal-body">
                        <img src="img/gallery_large_02.jpg" class="img-fluid" alt="image-1" />
                    </div><!-- / modal-body -->
                  </div><!-- / model-content -->

                </div><!-- / modal-dialog -->
            </div><!-- / modal -->

            <!-- 3rd modal -->
            <div class="modal fade" id="image_3" tabindex="-1" role="dialog"
          aria-labelledby ="image_3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                  <div class="model-content">
                    <div class="modal-body">
                        <img src="img/gallery_large_03.jpg" class="img-fluid" alt="image-1" />
                    </div><!-- / modal-body -->
                  </div><!-- / model-content -->

                </div><!-- / modal-dialog -->
            </div><!-- / modal -->

        </div><!-- / facilities-gallery -->

    </main>



    <aside class="col-lg-4">
      <div class="sidebar hours mb-5">
        <?php include 'templates/business_hours.php'; ?>
      </div><!-- /sidebar -->
    </aside>

  </div><!-- /row -->
</div><!-- /container -->

<?php

  include 'templates/appointment.php';
  include 'templates/footer.php';

?>
