<?php
session_start();
include '../config/konek.php';


if (isset($_POST['upload'])) {

	$genre = $_POST['genre'];
	$manga = $_POST['id_manga'];	
	foreach($genre as $data){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	$i=0;
	$sql = mysqli_query($con, "INSERT INTO tb_genre VALUES ('','$data','$manga[$i]')");
	$i++;
	}
	if ($sql) {
		echo "<script>alert('Data Berhasil tersimpan');document.location.href='genre.php';</script>";
		error_reporting($sql);
	}else{
	   // echo "<script>alert('Data Gagal tersimpan');document.location.href='genre.php';</script>";
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
														<h2>Add Genre Manga</h2>
														<p><a href="admin.php">Dashboard</a> / Add Genre</p>
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
						<form method="post" enctype="multipart/form-data">
							<div class="col-lg-6">
								<div class="row mb-3">
									<div class="card" style="background-color:#1b2a47;">
										<div class="card-header ">
											Select Manga
										</div>
										<div class="card-body">
											<div class="container-fluid p-0">
												<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="icon nalika-down-arrow nalika-angle-dw"></i></span>
												<select name="id_manga[]" class="form-control" >
												<option disabled class="opt-m" selected >Select Manga</option>
												<?php
													$sql = mysqli_query($con, "SELECT * FROM tb_manga");
													while ($r=mysqli_fetch_array($sql)) {
												?>
													<option value="<?= $r['id_manga']?>"><?= $r['judul']?></option>
												<?php }?>
												</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row mb-2">
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
								<div class="row mb-5 pb-2">
									<div class="col-lg-12">
										<div class="row mb-3">
											<div class="card" style="background-color:#1b2a47;">
												<div class="card-body">
													<div class="container-fluid p-0">
														<input type="submit" class="btn btn-dark bgrk wdbgrk" value="Add Genre" name="upload">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</form>
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