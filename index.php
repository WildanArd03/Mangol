<?php
  session_start();
  include 'config/konek.php';
  include 'admin/controller/timeago.php';

  if(isset($_GET['search'])){
    $search = $_GET['search'];			
  }
 

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
    <link rel="stylesheet" href="assets/css/manga.css">
    
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header" role="header" style="background-color:#070720;position:absolute;">
    <div class="container p-0">
      <div class="logo p-0">
        <a href="#"><em>Mangol</em></a>
      </div>
      <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
      <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu p-0">
          <li><a href="index.php">Home</a></li>
          <li><a href="manga-list/">Manga List</a></li>
          <li>
          <form class="d-flex justify-content-center" method="get">
              <input class="animatebar" type="search" placeholder="Search" name="search" aria-label="Search">
              <button class="btn btn-warning bordl" type="submit">
              <i class="fas fa-search"></i>
              </button>
          </form>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <?php
    if(isset($_GET['search'])){ ?>
    <section class="section mt-5 pt-2 pb-2">
      <div class="container">
        <div class="section-title mt-5 mb-4">
          <h5>SEARCH "<?= $search ?>" </h5>
        </div>
        <!-- Flex -->
        <div class="flexbox2">
        <?php
            $sql = mysqli_query($con,"select * from tb_manga where judul like '%".$search."%'");
            $no=1;
            while ($r=mysqli_fetch_array($sql)){
            if ($no == 9 ) {
              break;
            }        

          ?>
          <div class="flexbox2-item">
            <div class="flexbox2-content">
              <a href="komik/<?= $r['link'] ?>/index.php?id=<?= $r['id_manga']?>">
                <div class="flexbox2-thumb">
                  <img src="admin/image/<?= $r['image'] ?>" alt="">
                  <div class="flexbox2-title">
                    <span><?= $r['judul']; $no++?></span>
                    <span class="studio"></span>
                  </div>
                </div>
              </a>
              <div class="flexbox2-side">
                <div class="type"><?= $r['type']; $mg = $r['id_manga'] ?></div>
                <div class="info">SCORE : </div>
                <div class="synops">
                  <p><?= $r['sinopsis'] ?></p>
                </div>
                <div class="genres">
                  <span>
                  <?php
                      $query = mysqli_query($con, "SELECT * FROM tb_genre where id_manga = '$mg' ");   
                      while ($row=mysqli_fetch_array($query)) {  
                  ?>
                    <?= $row['genre'] ?>, 
                  <?php }?>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
    <!-- End Flex -->
    </div>
  </section>
   <?php }else{ ?> 
  <section class="section courses pb-4 p-3">
    <div class="container">
      <div class="row">
        
        <div class="section-title mt-5 pt-5">
            <h5>Komik Populer</h5>
        </div>
        <div class="owl-carousel owl-theme mt-4">
        <?php
            $sql = mysqli_query($con, "SELECT * FROM tb_popular_komik order by id_manga DESC");
            $no=0;
            while ($r=mysqli_fetch_array($sql)) {
            if ($no == 5) {
              break;
            }
        ?>
          <div class="item">
            <a href="komik/<?= $r['link'] ?>/index.php?id=<?= $r['id_manga']?>">
                <img src="admin/image/<?= $r['image']?>" class="img" alt="">
            </a>
            <div class="content mt-3">
              <a href="#"><h5><?= $r['judul']; $no++?></h5></a>  
            </div>
          </div>
          <?php  }?>
        </div>
      </div>
    </div>
  </section>
  <section class="section mb-5 pb-2">
    <div class="container">
      <div class="section-title mt-3 mb-4">
        <h5>Chapter Terbaru</h5>
      </div>
      <!-- Flex -->
      <div class="flexbox3">
      <?php
          $sql = mysqli_query($con, "SELECT * FROM tb_manga order by id_manga DESC");
          $no=1;
          while ($r=mysqli_fetch_array($sql)){
          if ($no == 9 ) {
            break;
          }        

        ?>
        <div class="flexbox3-item">
          <div class="flexbox3-content">
            <a href="komik/<?= $r['link'] ?>/index.php?id=<?= $r['id_manga']?>">
              <div class="flexbox3-thumb">
                <img src="admin/image/<?= $r['image'] ?>" class="img-fluid" alt="">
              </div>
            </a>
            <div class="flexbox3-side">
              <div class="title">
                <a href="#"><?= $r['judul']; $no++?></a>
              </div>
              <ul class="chapter">
                <li>
                  <a href="#">Chapter 01</a>
                    <span class="date">
                    <?php 
                       echo time_elapsed_string($r['date-time']);
                      ?>
                    </span>
                  </li>
              </ul>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
  <!-- End Flex -->
    </div>
  </section>
  <?php } ?>
  
  <?php
    if(isset($_GET['search'])){ ?>
    <footer class="m-0 fixed-bottom" style="background-color:#070720;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Mangol  
        </div>
      </div>
    </div>
  </footer>
  <?php }else{ ?>
    <footer class="m-0" style="background-color:#070720;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Mangol  
        </div>
      </div>
    </div>
  </footer>
  <?php }?>

  
  
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