
  <?php
  include 'includes/header.php';
  include 'includes/navbar.php';
  ?>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/s1.png" alt="Server" width="100%" height="500">
        <div class="carousel-caption">
          <h3>Server</h3>
          <p>Info</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/s2.png" alt="Server2" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Server2</h3>
          <p>Info</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/s3.png" alt="Server3" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Server3</h3>
          <p>Info</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
    <div>
      <h3 class="text-center">About Us</h3>
    </div>
  </section>




<?php
  include 'includes/footer.php';
?>