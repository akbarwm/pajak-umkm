<?php
error_reporting(false);
session_start();



include '.././config/connection.php';
include '.././config/session.php';


$id = $_SESSION['id_user'];
$sql = "SELECT * FROM `admin` WHERE id='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<title>Dashboard | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">

<body>
	<?php include './layout/sidebar.php'; ?>
	<!-- Dashboard -->
	<div class="main-panel">
		<div class="container">
			<div style="background: linear-gradient(41deg, #09c778, #01a0f9);" class="panel-header">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="page-inner mt--5">
				<div class="row mt--2">
					<div class="col-md-6">
						<div class="card full-height">
							<div class="card-body">
								<div class="card-title">Informasi Harian Tentang Pajak</div>
								<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-1"></div>
										<h6 class="fw-bold mt-3 mb-0">Berita</h6>
									</div>
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-2"></div>
										<h6 class="fw-bold mt-3 mb-0">Peraturan pajak</h6>
									</div>
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-3"></div>
										<h6 class="fw-bold mt-3 mb-0">Materi atau Sertifikasi</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card full-height">
							<div class="card-body">
								<div class="card-title">Informasi Harian Tentang Pajak</div>
								<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-4"></div>
										<h6 class="fw-bold mt-3 mb-0">Berita</h6>
									</div>
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-5"></div>
										<h6 class="fw-bold mt-3 mb-0">Peraturan pajak</h6>
									</div>
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-6"></div>
										<h6 class="fw-bold mt-3 mb-0">Materi atau Sertifikasi</h6>
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
	<?php include './layout/footer.php'; ?>

	<script>
		Circles.create({
			id: 'circles-1',
			radius: 45,
			value: 100,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-2',
			radius: 45,
			value: 100,
			maxValue: 100,
			width: 7,
			text: 30,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-3',
			radius: 45,
			value: 100,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})
		Circles.create({
			id: 'circles-4',
			radius: 45,
			value: 100,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-5',
			radius: 45,
			value: 100,
			maxValue: 100,
			width: 7,
			text: 30,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-6',
			radius: 45,
			value: 100,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets: [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines: {
							drawBorder: false,
							display: false
						}
					}],
					xAxes: [{
						gridLines: {
							drawBorder: false,
							display: false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>

</html>