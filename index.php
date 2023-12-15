<?php
include 'functions.php';
if (empty($_SESSION['login']))
	header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" href="" />
	<title>PROGRAM NISA</title>
	<link href="assets/css/styles.css" rel="stylesheet" />
	<link href="assets/fontawesome/css/all.min.css" rel="stylesheet" />
	<script src="assets/js/highcharts.js"></script>
</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<!-- Navbar Brand-->
		<a class="navbar-brand ps-3" href="?"></a>
		<!-- Sidebar Toggle-->
		<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
		<!-- Navbar-->
		<ul class="navbar-nav ms-auto me-3 me-lg-4">
			<li class="nav-item dropdown">
				
			</a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
					
					<li><a class="dropdown-item" href="aksi.php?act=logout"></a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark bg-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<!-- <a class="nav-link" href="?m=home"> -->
							<!-- <div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div> -->
							<!-- Menu Halaman Utama -->
						<!-- </a> -->
						<a class="nav-link" href="?m=atribut">
							<div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div>
							Variabel Data
						</a>
						<a class="nav-link" href="?m=nilai">
							<div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div>
							Nilai Variabel Data
						</a>
						<a class="nav-link" href="?m=dataset">
							<div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div>
							Data Penelitian
						</a>
						<a class="nav-link" href="?m=hitung">
							<div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div>
							Perhitungan Metode KNN
						</a>
						<a class="nav-link" href="aksi.php?act=logout">
							<div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div>
							Logout Aplikasi
						</a>
					</div>
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4 py-3">
					<?php
					if (!_session('login') && !in_array($mod, array('', 'home', 'hitung', 'login', 'tentang')))
						$mod = 'login';

					if (file_exists($mod . '.php'))
						include $mod . '.php';
					else
						include 'home.php';
					?>
				</div>
			</main>
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted"></div>
						<div>
							<em></em>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>

</html>