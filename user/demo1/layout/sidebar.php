<?php
function full_path()
{
	$s = &$_SERVER;
	$ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true : false;
	$sp = strtolower($s['SERVER_PROTOCOL']);
	$protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
	$port = $s['SERVER_PORT'];
	$port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
	$host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
	$host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
	$uri = $protocol . '://' . $host . $s['REQUEST_URI'];
	$segments = explode('?', $uri, 2);
	$url = $segments[0];
	return $url;
}

function site_url()
{
	return sprintf(
		"%s://%s",
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME']
	);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.png">

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				<a href="index.php" class="logo">
					<img style="width:90px;" src="../assets/img/logo.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>


					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= $row['PROFILE'] ? './tables/upload_profil/' . $row['PROFILE'] :  '' ?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?= $row['PROFILE'] ? './tables/upload_profil/' . $row['PROFILE'] :  '' ?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Admin</h4>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="dashboard_admin.php">Profil</a>
										<a class="dropdown-item" onclick="test()">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">



					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img aria-label="User's Profile Picture" src="<?= $row['PROFILE'] ? './tables/upload_profil/' . $row['PROFILE'] :  '' ?>" alt="User's Profile Picture" class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<span class="wrap2">Admin</span>
									<span class="user-level">Admin</span>
								</span>
							</a>
							<div class="clearfix"></div>

						</div>
					</div>


					<ul class="nav nav-primary">
						<li class="nav-item <?= (full_path() == site_url() . '/user/demo1/index.php') ? 'active' : '' ?>">
							<a href="index.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item <?= (full_path() == site_url() . '/user/demo1/creat_berita.php' || full_path() == site_url() . '/user/demo1/list_berita.php') ? 'active' : '' ?>">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-newspaper"></i>
								<p>Manajemen Berita</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?= (full_path() == site_url() . '/user/demo1/creat_berita.php' || (explode("?", full_path())[0] == site_url() . '/user/demo1/edit_berita.php') || full_path() == site_url() . '/user/demo1/list_berita.php') ? 'show' : '' ?>" id="tables">
								<ul class="nav nav-collapse">
									<li class="<?= (full_path() == site_url() . '/user/demo1/creat_berita.php') || (full_path() == site_url() . '/user/demo1/edit_berita.php') ? 'active' : '' ?>">
										<a href="creat_berita.php">
											<span class="sub-item ">Tambah Berita</span>
										</a>
									</li>
									<li class="<?= (full_path() == site_url() . '/user/demo1/list_berita.php') ? 'active' : '' ?>">
										<a href="list_berita.php">
											<span class="sub-item">List Berita</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item <?= (full_path() == site_url() . '/user/demo1/list_usaha.php') ? 'active' : '' ?>">
							<a data-toggle="collapse" href="#usaha">
								<i class="fas fa-newspaper"></i>
								<p>Manajemen Usaha</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?= (full_path() == site_url() . '/user/demo1/creat_usaha.php' || (explode("?", full_path())[0] == site_url() . '/user/demo1/edit_usaha.php') || full_path() == site_url() . '/user/demo1/list_usaha.php') ? 'show' : '' ?>" id="usaha">
								<ul class="nav nav-collapse">
									<li class="<?= (full_path() == site_url() . '/user/demo1/list_usaha.php') ? 'active' : '' ?>">
										<a href="list_usaha.php">
											<span class="sub-item">List Usaha</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item <?= (full_path() == site_url() . '/user/demo1/creat_peraturanpajak.php' || full_path() == site_url() . '/user/demo1/list_peraturanpajak.php') ? 'active' : '' ?>">
							<a data-toggle="collapse" href="#peraturan">
								<i class="far fa-newspaper"></i>
								<p>Manajemen Pajak</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?= (full_path() == site_url() . '/user/demo1/creat_peraturanpajak.php' || (explode("?", full_path())[0] == site_url() . '/user/demo1/edit_peraturanpajak.php') || full_path() == site_url() . '/user/demo1/list_peraturanpajak.php') ? 'show' : '' ?>" id="peraturan">
								<ul class="nav nav-collapse">
									<li class="<?= (full_path() == site_url() . '/user/demo1/creat_peraturanpajak.php') || (full_path() == site_url() . '/user/demo1/edit_peraturanpajak.php') ? 'active' : '' ?>">
										<a href="creat_peraturanpajak.php">
											<span class="sub-item">Tambah Pajak</span>
										</a>
									</li>
									<li class="<?= (full_path() == site_url() . '/user/demo1/list_peraturanpajak.php') ? 'active' : '' ?>">
										<a href="list_peraturanpajak.php">
											<span class="sub-item">List Pajak</span>
										</a>
									</li>
								</ul>
							</div>
						<li class="nav-item <?= (full_path() == site_url() . '/user/demo1/create_pelatihan.php'  || full_path() == site_url() . '/user/demo1/list_pelatihan.php') ? 'active' : '' ?>">
							<a data-toggle="collapse" href="#pelatihan">
								<i class="fas fa-user-plus"></i>
								<p>Manajemen Pelatihan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?= (full_path() == site_url() . '/user/demo1/create_pelatihan.php' || (explode("?", full_path())[0] == site_url() . '/user/demo1/edit_pelatihan.php') || full_path() == site_url() . '/user/demo1/list_pelatihan.php')  ? 'show' : '' ?>" id="pelatihan">
								<ul class="nav nav-collapse">
									<li class="<?= (full_path() == site_url() . '/user/demo1/create_pelatihan.php') || (full_path() == site_url() . '/user/demo1/edit_pelatihan.php') ? 'active' : '' ?>">
										<a href="create_pelatihan.php">
											<span class="sub-item">Tambah Materi </span>
										</a>
									</li>
									<li class="<?= (full_path() == site_url() . '/user/demo1/list_pelatihan.php') ? 'active' : '' ?>">
										<a href="list_pelatihan.php">
											<span class="sub-item">List Materi </span>
										</a>
									</li>
								</ul>
							</div>
						<li class="nav-item <?= (full_path() == site_url() . '/user/demo1/create_konsultan.php'  || full_path() == site_url() . '/user/demo1/list_konsultan.php') ? 'active' : '' ?>">
							<a data-toggle="collapse" href="#konsultan">
								<i class="fas fa-user-plus"></i>
								<p>Manajemen Konsultan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?= (full_path() == site_url() . '/user/demo1/create_konsultan.php' || (explode("?", full_path())[0] == site_url() . '/user/demo1/edit_konsultan.php') || full_path() == site_url() . '/user/demo1/list_konsultan.php')  ? 'show' : '' ?>" id="konsultan">
								<ul class="nav nav-collapse">
									<li class="<?= (full_path() == site_url() . '/user/demo1/create_konsultan.php') || (full_path() == site_url() . '/user/demo1/edit_konsultan.php') ? 'active' : '' ?>">
										<a href="create_konsultan.php">
											<span class="sub-item">Tambah Konsultan</span>
										</a>
									</li>
									<li class="<?= (full_path() == site_url() . '/user/demo1/list_konsultan.php') ? 'active' : '' ?>">
										<a href="list_konsultan.php">
											<span class="sub-item">List Konsultan </span>
										</a>
									</li>
								</ul>
							</div>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Akun</h4>
						</li>
						<li class="nav-item  <?= (full_path() == site_url() . '/user/demo1/dashboard_admin.php') ? 'active' : '' ?>">
							<a href="dashboard_admin.php">
								<i class="fas fa-user"></i>
								<p>Pengaturan Profil</p>
							</a>
						</li>
						<li class="nav-item">
							<a id="logout" onclick="test()">
								<!-- <a href="../../logout.php"> -->
								<i class="fas fa-sign-out-alt"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script>
			function test() {
				const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn mr-1 btn-danger'
					},
					buttonsStyling: false
				})
				swalWithBootstrapButtons.fire({
					title: 'Logout',
					text: "Apakah Anda yakin ingin mengakhiri sesi saat ini?",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Ya, saya yakin!',
					cancelButtonText: 'Tidak, batalkan!',
					reverseButtons: true
				}).then((result) => {
					if (result.isConfirmed) {
						location.href = "../../logout.php"
					} else if (
						/* Read more about handling dismissals below */
						result.dismiss === Swal.DismissReason.cancel
					) {
						swalWithBootstrapButtons.fire(
							'Dibatalkan',
							'',
							'error'
						)
					}
				})
			}
		</script>