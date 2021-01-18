<?php
include '../../config/konek.php';
include '../../admin/controller/timeago.php';

$sql = mysqli_query($con, "SELECT * FROM tb_manga where id_manga = '$_GET[id]'");
$s=mysqli_fetch_array($sql);

if (isset($_POST['kirim'])) {

    $date = date('Y-m-d H:i:s') ;
    $comment = $_POST['comment'];
    $id_manga = $_GET['id'];
    $sql = mysqli_query($con, "INSERT INTO tb_comment VALUES('','$comment','$id_manga','$date')");
    if ($sql) {
        echo "<script>document.location.href='index.php?id=$id_manga';</script>";
        error_reporting($sql);
    }else{
        //echo "<script>alert('Data Gagal tersimpan');document.location.href='index.php';</script>";
        echo error_reporting($sql);
    }
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/style.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/assets/css/custom.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/clist.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/custom.css" type="text/css">
    <link rel="stylesheet" href="../../admin/detail-manga-default/css/customlist.css" type="text/css">

    

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
          <li><a href="../../">Home</a></li>
          <li><a href="../../manga-list">Manga List</a></li>
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
            <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <span>Romance</span>
                    </div>
                </div>
            </div>
                <div class="row mt-5">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="../../admin/image/<?= @$s['image'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?= @$r['judul'] ?> <?= @$s['judul'] ?></h3>
                            </div>
                            <div class="synopsiss">
                                <p><?= @$s['sinopsis'] ?></p>
                            </div>
                            <div class="anime__details__widget mt-4">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="content-info-manga">
                                            <li><span>Type:</span><?= @$s['type'] ?></li>
                                            <li><span>Released:</span><?= @$s['rilis'] ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="content-info-manga">
                                            <li><span>Status:</span><?= @$s['status'] ?></li>
                                            <li><span>Author:</span> <?= @$s['author'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <ul class="content-info-manga">
                                            <li><span>Genre:</span>
                                            <?php
                                                $no=1;
                                                $sql = mysqli_query($con, "SELECT * FROM tb_genre where id_manga = '$_GET[id]' ");
                                                while ($r=mysqli_fetch_array($sql)){       
                                                ?>
                                                <a href="" class="btn genrebtn"><?= $r['genre']?></a>
                                                <?php }?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9 col-md-12">
                        <div class="series-chapter">
                            <h2 class="pb-3"><span>Chapter List</span></h2>
                            <ul class="series-chapterlist">
                                <li>
                                    <div class="flexch">
                                        <div class="flexch-book">
                                            <i class="fas fa-book-open"></i>
                                        </div>
                                        <div class="flexch-infoz">
                                            <a href="#"><span>Chapter 01</span></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="anime__details__form pt-5">
                            <div class="section-title">
                                <h5>Comment</h5>
                            </div>
                            <form method="post">
                                <div class="row">
                                    <div class="col">
                                        <textarea class="text-dark"  placeholder="Your Comment" name="comment"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button type="submit" name="kirim"><i class="fa fa-location-arrow"></i> Kirim</button>
                                    </div>
                                </div>       
                            </form>
                        </div>
                        <div class="anime__details__review mt-5">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_comment WHERE id_manga = '$_GET[id]'");
                                while ($r=mysqli_fetch_array($sql)) {
                            ?>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="../../assets/images/review-6.jpg" alt="">
                                </div>     
                                <div class="anime__review__item__text">
                                    <h6>Anonymous - <span><?= time_elapsed_string($r['update-comment'])?></span></h6>
                                    <p><?= $r['comment']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
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
        <script src="../../admin/detail-manga-default/js/jquery-3.3.1.min.js"></script>
        <script src="../../admin/detail-manga-default/js/bootstrap.min.js"></script>
        <script src="../../admin/detail-manga-default/js/player.js"></script>
        <script src="../../admin/detail-manga-default/js/jquery.nice-select.min.js"></script>
        <script src="../../admin/detail-manga-default/js/mixitup.min.js"></script>
        <script src="../../admin/detail-manga-default/js/jquery.slicknav.js"></script>
        <script src="../../admin/detail-manga-default/js/owl.carousel.min.js"></script>
        <script src="../../admin/detail-manga-default/js/main.js"></script>
        <script src="../../admin/detail-manga-default/assets/js/custom.js"></script>

    </body>

    </html>