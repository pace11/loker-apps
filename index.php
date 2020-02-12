<?php
	date_default_timezone_set('Asia/Jakarta');
	include "portal/lib/koneksi.php";
	include "service.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Portal Loker - Dapatkan Pekerjaan anda segera !!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/b515b9e96a.js" crossorigin="anonymous"></script>

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container-fluid px-md-4	">
			<a class="navbar-brand" href="index.php"><span class="fas fa-briefcase"></span> Loker</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item cta mr-md-1"><a href="portal/login.php" class="nav-link"><i class="fas fa-sign-in-alt"></i> Masuk</a></li>
					<li class="nav-item cta cta-colored"><a href="portal/login.php" class="nav-link"><i class="fas fa-user-plus"></i> Daftar</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap img" style="background-image: url(images/bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-10 d-flex align-items-center ftco-animate">
					<div class="text text-center pt-5 mt-md-5">
						<h1 class="mb-5">Temukan Lowongan yang cocok untuk Karir Anda</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="row justify-content-center pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<span class="subheading">Pekerjaan Terbaru</span>
							<h2 class="mb-4">Menampilkan setiap pekerjaan yang sedang aktif</h2>
						</div>
					</div>
					<div class="row">
						<?php 
							$q = mysqli_query($conn, "SELECT lowongan.id as idloker, lowongan.judul, lowongan.tipe, lowongan.mulai_pendaftaran, lowongan.kuota, lowongan.akhir_pendaftaran, provinsi.nama FROM lowongan
													JOIN provinsi ON lowongan.provinsi_id=provinsi.id
													ORDER BY lowongan.mulai_pendaftaran ASC");
							while($data = mysqli_fetch_array($q)) {
							$datenow  = new DateTime(getDateNow());
							$datestart  = new DateTime($data['mulai_pendaftaran']);
							$dateend  = new DateTime($data['akhir_pendaftaran']);
							if ($datestart == $datenow || $datestart >= $datenow || $dateend >= $datenow) {
						?>
						<div class="col-md-12 ftco-animate">
							<div class="job-post-item p-4 d-block d-lg-flex align-items-center" style="border-radius: 15px;">
								<div class="one-third col-md-9">
									<div class="job-post-item-header align-items-center">
										<span style="text-transform: capitalize;"><?= $data['tipe'] ?></span>
										<h2 class="mr-3 text-black"><a href="#"><?= $data['judul'] ?></a></h2>
									</div>
									<div class="job-post-item-body d-block d-md-flex">
										<div class="mr-3"><i class="fas fa-map-marker-alt"></i> <?= $data['nama'] ?> - Mulai Pendaftaran: <?= date("d M Y", strtotime($data['mulai_pendaftaran']))." - ".date("d M Y", strtotime($data['akhir_pendaftaran'])) ?>, Kuota: <?= $data['kuota'] ?></div>
									</div>
								</div>
								<div class="one-forth col-md-3">
									<?= getActiveJob($data['mulai_pendaftaran'],$data['akhir_pendaftaran']) ?>
								</div>
							</div>
						</div>
						<?php }} ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Ada Pertanyaan ?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><i class="fas fa-map-marker-alt" style="margin-right:10px;"></i> <span class="text">Duri Kosambi, Jakarta Barat, Menara PLN</span></li>
								<li><i class="fas fa-phone" style="margin-right:10px;"></i> <span class="text">021-544789</span></li>
								<li><i class="fas fa-envelope" style="margin-right:10px;"></i><span class="text">pegawai@loker.com</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						Copyright &copy;
						<?= date('F Y') ?> All rights reserved | This template
						is made with <i class="fas fa-heart"></i> by LokerPegawai
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>