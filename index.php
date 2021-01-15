<?php
  session_start();
  include 'config/konek.php';

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Mangol</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/flexbox.css">
    
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header" role="header">
    <div class="container p-0">
      <div class="logo p-0">
        <a href="#"><em>Mangol</em></a>
      </div>
      <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
      <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu p-0">
          <li><a href="#">Home</a></li>
          <li><a href="#">Manga List</a></li>
          <li>
          <form class="d-flex justify-content-center">
            <input class="animatebar" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning bordl" type="submit">
            <i class="fas fa-search"></i>
            </button>
          </form>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="section courses pb-4 p-3 ">
    <div class="container">
      <div class="row">
        <h2 class="mt-5 pt-5 text-light">KOMIK POPULER</h2>
        <div class="owl-carousel owl-theme mt-4">
        <?php
            $sql = mysqli_query($con, "SELECT * FROM tb_popular_komik");
            while ($r=mysqli_fetch_array($sql)) {
        ?>
          <div class="item">
            <a href="komik/<?= $r['link'] ?>.php?id=<?= $r['id']?>">
                <img src="admin/thumbnail/<?= $r['image']?>" class="img" alt="">
            </a>
            <div class="content mt-3">
              <a href="#"><h5><?= $r['judul']?></h5></a>  
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section courses m-0 p-0">
    <div class="container">
     <h3 class="text-light">CHAPTER TERBARU</h3>
     <hr color="#ffc107" class="m-0 mb-2">
      <!-- Flex -->
      <div class="flexbox3">
        <div class="flexbox3-item">
          <div class="flexbox3-content">
            <a href="index.php">
              <div class="flexbox3-thumb">
                <img src="assets/images/OP.jpg" class="img-fluid" alt="">
              </div>
            </a>
            <div class="flexbox3-side">
              <div class="title">
                <a href="#">One Piece</a>
              </div>
              <ul class="chapter">
                <li><a href="#">Chapter 01</a><span class="date">1 days ago</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flexbox3-item">
          <div class="flexbox3-content">
            <a href="index.php">
              <div class="flexbox3-thumb">
                <img src="assets/images/AP.jpg" class="img-fluid" alt="">
              </div>
            </a>
            <div class="flexbox3-side">
              <div class="title">
                <a href="#">Apotheosis</a>
              </div>
              <ul class="chapter">
                <li><a href="#">Chapter 01</a><span class="date">1 days ago</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flexbox3-item">
          <div class="flexbox3-content">
            <a href="index.php">
              <div class="flexbox3-thumb">
                <img src="assets/images/TBT.jpg" class="img-fluid" alt="">
              </div>
            </a>
            <div class="flexbox3-side">
              <div class="title">
                <a href="#">The Beginning After The End</a>
              </div>
              <ul class="chapter">
                <li><a href="#">Chapter 01</a><span class="date">1 days ago</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flexbox3-item">
          <div class="flexbox3-content">
            <a href="index.php">
              <div class="flexbox3-thumb">
                <img src="assets/images/HM.jpg" class="img-fluid" alt="">
              </div>
            </a>
            <div class="flexbox3-side">
              <div class="title">
                <a href="#">Horimiya</a>
              </div>
              <ul class="chapter">
                <li><a href="#">Chapter 01</a><span class="date">1 days ago</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flexbox3-item">
          <div class="flexbox3-content">
            <a href="index.php">
              <div class="flexbox3-thumb">
                <img src="assets/images/HB.jpg" class="img-fluid" alt="">
              </div>
            </a>
            <div class="flexbox3-side">
              <div class="title">
                <a href="#">Hitoribocchi No Isekai Kouryaku</a>
              </div>
              <ul class="chapter">
                <li><a href="#">Chapter 01</a><span class="date">1 days ago</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flexbox3-item">
          <div class="flexbox3-content">
            <a href="index.php">
              <div class="flexbox3-thumb">
                <img src="assets/images/OG.jpg" class="img-fluid" alt="">
              </div>
            </a>
            <div class="flexbox3-side">
              <div class="title">
                <a href="#">Overgeared</a>
              </div>
              <ul class="chapter">
                <li><a href="#">Chapter 01</a><span class="date">1 days ago</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  <!-- End Flex -->
    </div>
  </section>

  <footer class="m-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Mangol  
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>