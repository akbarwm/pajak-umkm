<?php include('layout/header.php');

session_start();
if (!isset($_SESSION['id_konsultan'])) {
	header("location: index.php");
}
?>
<!-- doccure/doctor-dashboard.html  30 Nov 2019 04:12:03 GMT -->

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<!--  -->
		<!-- /Header -->

		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-12 col-12">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Dashboard</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">

				<div class="row">
					<!-- Sidebar -->
					<?php include('layout/sidebar.php') ?>
					<!-- sidebar end -->
					<div class="col-md-7 col-lg-8 col-xl-9">

						<div class="row">
							<?php include('partials/chart.php'); ?>
						</div>

						<div class="row">
							<?php include('partials/appoinment-view.php'); ?>
						</div>

					</div>
				</div>

			</div>

		</div>
		<!-- /Page Content -->

		<!-- Footer -->


	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Circle Progress JS -->
	<script src="assets/js/circle-progress.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

<!-- doccure/doctor-dashboard.html  30 Nov 2019 04:12:09 GMT -->

</html>