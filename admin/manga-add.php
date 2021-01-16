<?php
session_start();

include '../config/konek.php';

if (isset($_POST['buat'])) {

    $files = $_POST['file'];
    $folders = $_POST['folder'];

    $dir = '../komik/'.$folders;

    $file_to_write =  $files . '.php';

    if( is_dir($dir) === false )
    {
        mkdir($dir);
    }else{
        echo "<script>alert('File Sudah Ada');document.location.href='manga-add.php'</script>";
    }
    $file = fopen( $dir . '/' . $file_to_write,"w");

    fwrite($file,
    "<?php 
    include '../../admin/detail-manga-default/index.php';
    include '../../admin/request.php';
    ?>");
    
    fclose($file);

                            
}

  @$link = $_POST['link'];
  @$judul = $_POST['judul'];
  @$synopsis = $_POST['sinopsis'];
  @$author = $_POST['author'];
  @$rilis = $_POST['rilis'];
  @$genre = implode(",", $_POST['genre']);
  @$type = $_POST['type'];
  @$status = $_POST['status'];
  @$nama_file = $_FILES['gambar']['name'];
  @$temp_nama = $_FILES['gambar']['tmp_name'];

  @$folder = "image/";

  @$upload = move_uploaded_file($temp_nama, $folder.$nama_file);

if (isset($_POST['upload'])) {


  $sql = mysqli_query($con, "INSERT INTO tb_manga VALUES('','$nama_file','$judul','$genre','$synopsis','$author','$status','$rilis','$type','$link')");

      if ($sql) {
          echo "<script>alert('Data Berhasil tersimpan');document.location.href='manga-add.php';</script>";
          error_reporting($sql);
      }else{
			 echo "<script>alert('Data Gagal tersimpan');document.location.href='manga-add.php';</script>";
			 error_reporting($sql);
      }
}



?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mangol Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background-color:#152036;">
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="admin.php"><span><h3>MANGOL</h3></span></a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a  href="admin.php">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
                            <a class="has-arrow" href="#">
                              <i class="icon nalika-forms icon-wrap"></i>
                              <span class="mini-click-non">Mangga</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Add New" href="manga-add.php"><span class="mini-sub-pro">Add Manga</span></a></li>
                                <li><a title="Add Genre" href="genre.php"><span class="mini-sub-pro">Add Genre</span></a></li>
                                <li><a title="Populer Komik" href="populer.php"><span class="mini-sub-pro">Popular Komik</span></a></li>
                                <li><a title="Mangga List" href="manga-list"><span class="mini-sub-pro">Mangga List</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#">
                              <i class="icon nalika-new-file icon-wrap"></i>
                              <span class="mini-click-non">Chapter</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Chapter List" href="index.html"><span class="mini-sub-pro">Chapter List</span></a></li>
                                <li><a title="Add New" href="index.html"><span class="mini-sub-pro">Add New</span></a></li>
                                <li><a title="Mangga" href="index.html"><span class="mini-sub-pro">Manga</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h1 class="text-light text-center">MANGGOL</h1>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                              <i class="icon nalika-menu-task"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu"> 
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link">
                                                      <i class="icon nalika-user"></i>
                                                      <span class="admin-name"><?= $_SESSION['nama']?> </span>
                                                      <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="logout.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                          <div class="breadcomb-icon">
                                            <i class="icon nalika-forms"></i>
                                          </div>
                                          <div class="breadcomb-ctn">
                                            <h2>Add Manga</h2>
                                            <p><a href="admin.php">Dashboard</a> / Add Manga</p>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-admin container-fluid">
            <div class="row admin">
                <div class="col-md-12">
                    <div class="row text-light">
                    <?php
								if (isset($_REQUEST['buat'])) { ?>
								<form method="post" enctype="multipart/form-data">
                        	<div class="col-lg-8 mb-3">
                           	<div class="card" style="background-color:#1b2a47;">
                                <div class="card-header ">
                                    Add Manga
                                </div>
											<div class="card-body">
													<div class="container-fluid p-0">
														<div class="row">
															<div class="col-lg-12">
																	<div class="input-group mg-b-pro-edt">
																		<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
																		<input type="text" class="form-control" placeholder="Judul" name="judul" required >
																	</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-12">
																	<div class="input-group mg-b-pro-edt">
																		<textarea name="sinopsis" class="form-control-area" rows="3" placeholder="Sinopsis"></textarea>
																	</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-6">
																	<div class="input-group mg-b-pro-edt">
																		<span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
																		<input type="file" class="form-control" placeholder="gambar" name="gambar"  required > 
																	</div>
															</div>
															<div class="col-lg-3">
																	<div class="input-group mg-b-pro-edt">
																		<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
																		<input type="text" class="form-control" placeholder="Author" name="author" required >
																	</div>
															</div>
															<div class="col-lg-3">
																	<div class="input-group mg-b-pro-edt">
																		<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
																		<input type="text" class="form-control" placeholder="Tahun Rilis" name="rilis" required >
																	</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-12">
																	<div class="input-group mg-b-pro-edt">
																		<span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
																		<input type="text" class="form-control" placeholder="Link" name="link" required >
																	</div>
															</div>
														</div>
													</div>
											</div>
                            </div>
                        	</div>
                        	<div class="col-lg-4">
                            <div class="row mb-3">
                                <div class="container-fluid">
                                    <div class="card" style="background-color:#1b2a47;">
                                        <div class="card-header ">
                                            Genre
                                        </div>
														<div class="card-body">
															<div class="container-fluid p-0">
																	<div class="row">
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Action">
																			<label  class="genre">Action</label>
																		</div>
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Drama">
																			<label  class="genre">Drama</label>
																		</div>
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Harem">
																			<label  class="genre">Harem</label>
																		</div>
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Romance">
																			<label  class="genre">Romance</label>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Comedy">
																			<label  class="genre">Comedy</label>
																		</div>
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Fantasy">
																			<label  class="genre">Fantasy</label>
																		</div>
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Isekai">
																			<label  class="genre">Isekai</label>
																		</div>
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Adventure">
																			<label  class="genre">Adventure</label>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Magic">
																			<label  class="genre">Magic</label>
																		</div>
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Shoujo">
																			<label  class="genre">Shoujo</label>
																		</div>
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Music">
																			<label  class="genre">Music</label>
																		</div>
																		<div class="col-lg-3 col-sm-3">
																			<input type="checkbox" name="genre[]" value="Sports">
																			<label  class="genre">Sports</label>
																		</div>
																	</div>
															</div>
														</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="container-fluid">
                                    <div class="card" style="background-color:#1b2a47;">
                                        <div class="card-header ">
                                            Type Komik
                                       </div>
													<div class="card-body">
														<div class="container-fluid p-0">
																<div class="row">
																	<div class="col-4">
																		<input type="radio" name="type" value="Manga">
																		<label  class="genre">Manga</label>
																	</div>
																	<div class="col-4">
																		<input type="radio" name="type" value="Manhua">
																		<label  class="genre">Manhua</label>
																	</div>
																	<div class="col-4">
																		<input type="radio" name="type" value="Manhwa">
																		<label  class="genre">Manhwa</label>
																	</div>
																</div>
														</div>
													</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5 pb-4">
                                <div class="container-fluid">
                                    <div class="card" style="background-color:#1b2a47;">
													<div class="card-header ">
														<div class="row">
														<div class="col-7">Status Komik</div>
														<div class="col-4">Publish</div>
														</div>
													</div>
													<div class="card-body">
														<div class="container-fluid p-0">
																<div class="row">
																	<div class="col-4">
																		<input type="radio" name="status" value="On Going">
																		<label  class="genre">On Going</label>
																	</div>
																	<div class="col-3">
																		<input type="radio" name="status" value="Tamat">
																		<label  class="genre">Tamat</label>
																	</div>
																	<div class="col-5">
																		<input type="submit" class="btn btn-dark bgrk wdbgrk" value="Add Manga" name="upload">
																	</div>
																</div>
														</div>
													</div>
                                   	 </div>
                                	</div>
                            	</div>
									</div>
								</form>
                        <?php } else { ?>
                            <div class="col-lg-8 mb-3">
                                <div class="card" style="background-color:#1b2a47;">
                                    <div class="card-header ">
                                        Create Folder & File Manga
                                    </div>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="container-fluid p-0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Nama Folder" name="folder" required >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Nama file" name="file" required >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <input type="submit"class="btn btn-dark bgrk" style="width:100%;" name="buat"value="Create" >
                                                            <!-- <a href="?buat" >Create</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area fixed-bottom mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p> © Copyright <?= date("Y")?> By Mangol</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>