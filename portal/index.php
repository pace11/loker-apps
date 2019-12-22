<?php 
	session_start();
	if (!empty($_SESSION['username']) && !empty($_SESSION['password']) && !empty($_SESSION['role'])){
		date_default_timezone_set('Asia/Jakarta');
		include "lib/koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Administrator</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<style>
		.btn {
			outline: none !important;
		}
		.positif {
			background-color: #5cb85c;
			color: #f2f2f2;
		}
		.negatif {
			background-color: #d9534f;
			color: #f2f2f2;
		}
		.pembagi {
			background-color: #f0ad4e;
			color: #f2f2f2;
		}
	</style>
</head>

<body>
	<div id="wrapper">
		<?php
			include "service.php";
			include "header.php"; 
			include "sidebar.php";
		?>
		
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<?php include "content.php"; ?>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
		$(function () {
			$('.example').DataTable()
		});
	</script>
	<script>
		$(document).ready(function(){
			$('#form-grafikremedial,#btn-tutupgrafikremedial,#form-rapor,#btn-tutuprapor,#form-kehadiran,#btn-tutupkehadiran,#form-kepribadian,#btn-tutupkepribadian,#form-kesehatanfisik,#btn-tutupkesehatanfisik,#form-wawancara,#btn-tutupwawancara').hide();

			$(".kapital").keyup(function(){
				$(this).val($(this).val().toUpperCase());
			});
			$("#btn-tambahgrafikremedial").click(function(){
				$('#form-grafikremedial,#btn-tutupgrafikremedial').show(500);
				$('#btn-tambahgrafikremedial').hide(500);
			});
			$("#btn-tutupgrafikremedial").click(function(){
				$('#form-grafikremedial,#btn-tutupgrafikremedial').hide(500);
				$('#btn-tambahgrafikremedial').show(500);
			});
			$("#btn-tambahrapor").click(function(){
				$('#form-rapor,#btn-tutuprapor').show(500);
				$('#btn-tambahrapor').hide(500);
			});
			$("#btn-tutuprapor").click(function(){
				$('#form-rapor,#btn-tutuprapor').hide(500);
				$('#btn-tambahrapor').show(500);
			});
			$("#btn-tambahkehadiran").click(function(){
				$('#form-kehadiran,#btn-tutupkehadiran').show(500);
				$('#btn-tambahkehadiran').hide(500);
			});
			$("#btn-tutupkehadiran").click(function(){
				$('#form-kehadiran,#btn-tutupkehadiran').hide(500);
				$('#btn-tambahkehadiran').show(500);
			});
			$("#btn-tambahkepribadian").click(function(){
				$('#form-kepribadian,#btn-tutupkepribadian').show(500);
				$('#btn-tambahkepribadian').hide(500);
			});
			$("#btn-tutupkepribadian").click(function(){
				$('#form-kepribadian,#btn-tutupkepribadian').hide(500);
				$('#btn-tambahkepribadian').show(500);
			});
			$("#btn-tambahkesehatanfisik").click(function(){
				$('#form-kesehatanfisik,#btn-tutupkesehatanfisik').show(500);
				$('#btn-tambahkesehatanfisik').hide(500);
			});
			$("#btn-tutupkesehatanfisik").click(function(){
				$('#form-kesehatanfisik,#btn-tutupkesehatanfisik').hide(500);
				$('#btn-tambahkesehatanfisik').show(500);
			});
			$("#btn-tambahwawancara").click(function(){
				$('#form-wawancara,#btn-tutupwawancara').show(500);
				$('#btn-tambahwawancara').hide(500);
			});
			$("#btn-tutupwawancara").click(function(){
				$('#form-wawancara,#btn-tutupwawancara').hide(500);
				$('#btn-tambahwawancara').show(500);
			});
			
		});
	</script>
	<script>
		$(function () {
			var counter = $('#counter').val();
			$('#counter').val(counter);

			$("#tambah").click(function(){
				console.log('tambah');
				if(counter>9){
					alert("Maksimal 10 Textbox");
					return false;
				}   
			
				var newTextBoxDiv1 = $(document.createElement('div')).attr("id", 'nimall' + counter);
				newTextBoxDiv1.after().html('<input type="text" style="margin-top:10px;" autocomplete="off" class="form-control" placeholder="inputkan NIM ..." name="nim'+counter+'" required>');
				newTextBoxDiv1.appendTo("#rowNim");	
				counter++;
				$('#counter').val(counter);
			});

			$("#hapus").click(function () {
				console.log('hapus');
				if(counter==0){
					return false;
				}
				counter--;
				$('#counter').val(counter);
				$("#nimall" + counter).remove();
			});
		});
	</script>
</body>
</html>
<?php 
}
else { ?>
<div class="col-md-12" align="center">
  <button type="button" name="button" class="btn btn-primary">Login Terlebih dahulu</button>
</div>

<?php echo"<meta http-equiv='refresh' content='1;
url=login.php'>";
} ?>