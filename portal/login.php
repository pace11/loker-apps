<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Administrator</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<p class="lead">LOGIN</p>
							</div>
							<form action="login.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="text" name="username" class="form-control" placeholder="username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" placeholder="password">
								</div>
								<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="LOGIN">
							</form>
                            <?php 
                            
                            if (isset($_POST['submit'])){
								session_start();
								include "lib/koneksi.php";
								$u = $_POST['username'];
								$p = $_POST['password'];
								$ceklogin = mysqli_query($conn, "SELECT * FROM tbl_user WHERE BINARY username='$u' AND password='$p'");
								$data     = mysqli_fetch_array($ceklogin);
								$hit      = mysqli_num_rows($ceklogin);
								if ($hit>0){
								echo '<span class="label label-primary label-block">Login Berhasil <i class="fa fa-check"></i></span>';
								echo "<meta http-equiv='refresh' content='1;
								url=index.php?page=beranda'>";
								  $_SESSION['username']  = $data['username'];
								  $_SESSION['password']  = $data['password'];
								  $_SESSION['role']      = $data['role'];
								}
							  }
                            ?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text text-center">
							<img src="assets/img/logo-icon.png" alt="logo-icon" width="200">
							<h1 class="heading">Sistem Informasi Kelas PJB</h1>
							<p>Sekolah Menengah Kejuruan Brantas Karangates</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
