<?php
  $title = "Contact Us";
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container mt-5">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/girl.jpg" class="img-fluid" alt="About Us"/>
      <h2 class="text-uppercase d-none d-md-block">Contact Us</h2>
    </div>
  </div>
</div><!-- /container -->

<div class="container" id="ourservices">
  <div class="row">

    <main class="col-12 col-md-10 offset-md-1 main-content mt-3">
        <h2 class="d-block d-md-none text-uppercase text-center">Contact Us</h2>

        <form class="p-5 mt-5 contact-form contact-form" action="send.php" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="6"></textarea>
            </div>

            <input type="submit" class="btn btn-primary text-uppercase" name="submit" value="submit">
        </form>
    </main>
  </div><!-- /row -->
</div><!-- /container -->



<?php
  include 'templates/footer.php';
?>
