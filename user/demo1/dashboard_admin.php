<?php
error_reporting(false); session_start();
include('../config/session.php');$id = $_SESSION['id_user'];
$err1 = null;
$err2 = null;
$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['identity'])) {
	// var_dump($_FILES);die;
	if ($_POST['identity']  ==  'identitas') {
		$id = $_SESSION['id_user'];
		$nama = $_POST['name'];
		$username = $_POST['login'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];


		$sql = "UPDATE users set  NAME ='$nama', LOGIN='$username', EMAIL='$email', PHONE='$phone'  where id='$id'";
		$result = mysqli_query($db, $sql);
		$_SESSION['login_user'] = $username;

		header("location:dashboard_admin.php");
	}
	if ($_POST['identity']  ==  'photo') {
		$id = $_SESSION['id_user'];
		$namaFile = $_FILES['uploadImg1']['name'];
		$file_ext = pathinfo($namaFile, PATHINFO_EXTENSION);

		$namaUpload = time() . '.' . $file_ext;
		$namaSementara = $_FILES['uploadImg1']['tmp_name'];

		$sqlUpdatePhoto = "UPDATE users set PROFILE='$namaUpload' where id='$id'";

		$resultPhoto = mysqli_query($db, $sqlUpdatePhoto);
		header("location:dashboard_admin.php");


		if ($resultPhoto) {
			// tentukan lokasi file akan dipindahkan
			$dirUpload = "./tables/upload_profil/";

			// pindahkan file
			$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaUpload);

			if ($terupload) {
			} else {
				echo "Upload Gagal!";
			}
		}
	}
	if ($_POST['identity']  ==  'new pass confirmation') {
		$id = $_SESSION['id_user'];
		$pass = $_POST['newpass'];
		$getPass = "SELECT PASSWORD FROM users where id='$id'";
		$row = mysqli_fetch_assoc(mysqli_query($db, $getPass));
		if ($row['PASSWORD'] != $_POST['currentpassword']) {
			$err1 = 'Password Lama Salah';
		}
		if ($_POST['newpass'] != $_POST['confirmpass']) {
			$err2 = 'Password tidak sama';
		} else {
			$sqlUpdatePass = "UPDATE users set PASSWORD='$pass' where id='$id'";
			$results = mysqli_query($db, $sqlUpdatePass);
			header("location:dashboard_admin.php");
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Profil | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">

<body>
	<?php include './layout/sidebar.php'; ?>
	<!-- Profil Start -->
	<div class="main-panel">
		<div class="container">
			<div class="page-inner">
				<h4 class="page-title">Profil</h4>
				<div class="row">
					<div class="col-md-12">
						<div class="card card-with-nav">
							<div class="card-header">
								<div class="row row-nav-line">
									<div class="card-body">
										<ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="true">Identitas</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Foto</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Password</a>
											</li>
										</ul>
										<div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
											<div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
												<form action="" method="POST">
													<div class="card-body">
														<div class="row mt-3">
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Nama</label>
																	<input type="text" class="form-control" name="name" placeholder="Nama" id="nama" value="<?= $row['NAME'] ?? '' ?>" disabled="disabled">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Username</label>
																	<input type="username" class="form-control" name="login" placeholder="Username" id="username" value="<?= $row['LOGIN'] ?? '' ?>" disabled="disabled">
																</div>
															</div>
														</div>
														<div class="row mt-3">
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Email</label>
																	<input type="email" class="form-control" name="email" placeholder="Email" id="email" value="<?= $row['EMAIL'] ?? '' ?>" disabled="disabled">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>No Hp</label>
																	<input type="phone" class="form-control" name="phone" placeholder="No Hp" id="phone" value="<?= $row['PHONE'] ?? '' ?>" disabled="disabled">
																</div>
															</div>
														</div>
														<div class="text-right mt-3 mb-3">
															<button type="button" class="btn btn-warning" onclick="enableInput()">Edit</button>
															<button type="submit" name="identity" value="identitas" class="btn btn-success">Save</button>
														</div>
													</div>
											</div>
											</form>
											<div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
												<form action="" method="POST" enctype="multipart/form-data">
													<div class="card-body">
														<div class="row">
															<div class="col-md-3">
																<div class="input-file input-file-image">
																	<img class="img-upload-preview img-circle" width="100" height="100" id="profile" src="<?= $row['PROFILE'] ? './tables/upload_profil/' . $row['PROFILE'] :  '' ?>">
																	<input type="file" class="form-control form-control-file" id="uploadImg1" name="uploadImg1" accept="image/*" required="" disabled="true">
																	<label for="uploadImg1" class="  label-input-file btn btn-black btn-round">
																		<span class="btn-label">
																			<i class="fa fa-file-image"></i>
																		</span>
																		Upload a Image
																	</label>
																</div>
															</div>
														</div>
														<div class="text-right mt-3 mb-3">
															<button type="button" class="btn btn-warning" onclick="enableInput1()">Edit</button>
															<button type="submit" name="identity" value="photo" class="btn btn-success">Save</button>
														</div>
													</div>
												</form>
											</div>
											<div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
												<form action="" method="POST">
													<div class="form-group">
														<?php if ($err1) { ?>
															<div class="alert alert-danger" role="alert">
																<?= $err1 ?>
															</div>
														<?php } ?>
														<label for="password">KATA SANDI SAAT INI</label>
														<input name="currentpassword" type="password" class="form-control" id="currentpassword" placeholder="Masukkan kata sandi Anda" disabled="disabled" required>
													</div>
													<div class="form-group">
														<?php if ($err2) { ?>
															<div class="alert alert-danger" role="alert">
																<?= $err2 ?>
															</div>
														<?php } ?>
														<label for="password">KATA SANDI BARU</label>
														<input name="newpass" type="password" class="form-control" id="newpass" placeholder="Masukkan Kata Sandi Baru Anda" disabled="disabled" required>
													</div>
													<div class="form-group">
														<label for="password">KONFIRMASI PASSWORD BARU</label>
														<input name="confirmpass" type="password" class="form-control" id="confirmpass" placeholder="Konfirmasi Kata Sandi Baru Anda" disabled="disabled" required>
													</div>
													<div class="text-right mt-3 mb-3">
														<button class="btn btn-warning" type="button" onclick="enableInput2()">Edit</button>
														<button type="submit" name="identity" value="new pass confirmation" class="btn btn-success">Save</button>
													</div>
												</form>
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
	</div>
	</div>
	<?php include './layout/footer.php'; ?>
	<script>
		function enableInput() {
			document.getElementById("nama").disabled = false;
			document.getElementById("username").disabled = false;
			document.getElementById("email").disabled = false;
			document.getElementById("phone").disabled = false;
		}

		function enableInput1() {
			document.getElementById("uploadImg1").disabled = false;

		}

		function enableInput2() {
			document.getElementById("currentpassword").disabled = false;
			document.getElementById("newpass").disabled = false;
			document.getElementById("confirmpass").disabled = false;

		}
		$('#datepicker').datetimepicker({
			format: 'MM/DD/YYYY',
		});
	</script>
</body>

</html>