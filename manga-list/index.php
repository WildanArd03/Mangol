<?php
    include '../config/konek.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manga List</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="css/clist.css" type="text/css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <link rel="stylesheet" href="css/customlist.css" type="text/css">

    

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!--header-->
  <header class="main-header" role="header" style="background-color:#070720;position:absolute;">
    <div class="container p-0">
      <div class="logo p-0">
        <a href="../../"><em>Mangol</em></a>
      </div>
      <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
      <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu p-0">
          <li><a href="../">Home</a></li>
          <li><a href="index.php">Manga List</a></li>
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

    <!-- Anime Section Begin -->
    <section class="anime-details spad mt-5 pb-3">
        <div class="container">
            <div class="section-title">
                <h5>Manga List</h5>
            </div>
            <div class="row">
                <?php 
                $sql = mysqli_query($con, "SELECT * FROM tb_manga order by judul ASC");
                while ($r=mysqli_fetch_array($sql)) {                
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <a href="../komik/<?= $r['link'] ?>/index.php?id=<?= $r['id_manga']?>">
                            <div class="product__item__pic set-bg" data-setbg="../admin/image/<?= $r['image']?>">
                                <div class="ep"><?= $r['type']; $mg = $r['id_manga'] ?></div>
                            </div>
                        </a>
                        <div class="product__item__text">
                            <ul class="genrekiri">
                                <?php
                                    $query = mysqli_query($con, "SELECT * FROM tb_genre where id_manga = '$mg' ");   
                                    while ($row=mysqli_fetch_array($query)) {  
                                ?>
                                <li><?= $row['genre'] ?></li>
                                <?php }?>
                            </ul>
                            <h5><a href="#"><?= $r['judul'] ?></a></h5>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer p-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p> © Copyright <?= date("Y")?> By Mangol</p>
                </div>
            </div>
        </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Search model Begin -->
        <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>