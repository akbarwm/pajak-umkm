<!DOCTYPE html>
<html lang="en">

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
<?php include('layout/header.php');

?>

<body class="account-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->


		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-8 offset-md-2">

						<!-- Login Tab Content -->
						<div class="account-content">
							<div class="row align-items-center justify-content-center">
								<div class="col-md-7 col-lg-6 login-left">
									<img src="assets/img/profil.png" class="img-fluid" alt="Doccure Login">
								</div>
								<div class="col-md-12 col-lg-6 login-right">
									<div class="login-header">
										<h3>Login Konsultan</h3>
									</div>
									<form action="conf/autentikasi.php" method="post">
										<div class="form-group form-focus">
											<input type="email" class="form-control floating" name="email">
											<label class="focus-label">Email</label>
										</div>
										<div class="form-group form-focus">
											<input type="password" class="form-control floating" name="password">
											<label class="focus-label">Password</label>
										</div>
										<div class="text-right">
											<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
										</div>
										<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
										<div class="login-or">
											<span class="or-line"></span>
											<span class="span-or">or</span>
										</div>

										<!-- <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div> -->
									</form>
								</div>
							</div>
						</div>
						<!-- /Login Tab Content -->

					</div>
				</div>

			</div>

		</div>
		<!-- /Page Content -->

		<!-- Footer -->

		<!-- /Footer -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->

</html>