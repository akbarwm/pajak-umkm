<?php
// Pastikan Anda sudah memulai sesi sebelum output apa pun
session_start();

include('../config/session.php'); // Pastikan ini diletakkan setelah session_start()

// Query untuk mengambil daftar kuis dari database
$sql = "SELECT * FROM quiz_pajak";
$result = mysqli_query($db, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List Kuis | Sudut Pajak</title>
	<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
	<style>
		.btn {
			background: linear-gradient(41deg, #09c778, #01a0f9);
		}

		.btn-yellow {
			color: #ffc107;
		}
	</style>
</head>

<body>
	<?php include './layout/sidebar.php'; ?>
	<br><br><br>
	<div class="main-panel">

		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">List Kuis</h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="index.php">
							<i class="flaticon-home"></i>
						</a>
					</li>
				</ul>
			</div>
			<div>
				<a href="tambah_kuis.php" class="btn text-white">+ Tambah Kuis</a>
			</div><br>

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Judul Kuis</th>
											<th>Waktu Pengerjaan</th>
											<th>Jumlah Soal</th>
											<th style="width: 10%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($rows as $idx => $r) { ?>
											<tr>
												<td><?= $idx + 1 ?></td>
												<td><?= $r['judul_kuis'] ?></td>
												<td><?= $r['waktu'] ?> Menit</td>
												<td><?= $r['jumlah_soal'] ?></td>
												<td style="width: 20%">
													<div class="form-button-action">
														<a href="edit_kuis.php?id=<?= $r['id']; ?>" type="button" data-toggle="tooltip" title="Edit Kuis" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
															<i class="fa fa-edit"></i>
														</a>
														<a href="list_soal.php?id_kuis=<?= $r['id']; ?>" type="button" data-toggle="tooltip" title="Review Soal" class="btn btn-link btn-warning btn-lg" data-original-title="Edit">
															<i class="fa fa-edit"></i>
														</a>
														<button onclick="deleteData(this)" data-id="<?= $r['id'] ?>" type="button" data-toggle="tooltip" title="Hapus Kuis" class="btn btn-link btn-danger" data-original-title="Hapus">
															<i class="fas fa-trash"></i>
														</button>
													</div>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<?php include './layout/footer.php'; ?>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#add-row').DataTable({
				"pageLength": 5,
			});
		});

		function deleteData(event) {
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn mr-1 btn-danger'
				},
				buttonsStyling: false
			});

			swalWithBootstrapButtons.fire({
				title: 'Apa kamu yakin?',
				text: "Anda tidak akan dapat mengembalikan data ini!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Ya, hapus!',
				cancelButtonText: 'Tidak, batalkan!',
				reverseButtons: true
			}).then((result) => {
				if (result.isConfirmed) {
					let id = $(event).attr('data-id');
					$.ajax({
						type: "POST",
						url: "delete_kuis.php", // Mengirim permintaan ke delete_kuis.php
						data: {
							id: id
						},
						dataType: 'json',
						success: function(response) {
							if (response.status === 'success') {
								Swal.fire({
									title: 'Berhasil',
									text: response.message,
									icon: 'success',
									confirmButtonColor: '#008000',
								}).then((result) => {
									if (result.isConfirmed) {
										location.reload(); // Muat ulang halaman setelah menghapus
									}
								});
							} else {
								Swal.fire({
									title: 'Error',
									text: response.message,
									icon: 'error',
									confirmButtonColor: '#008000',
								});
							}
						},
						error: function(xhr, status, error) {
							console.error(xhr.responseText);
							Swal.fire({
								title: 'Error',
								text: 'Terjadi kesalahan saat menghapus kuis.',
								icon: 'error',
								confirmButtonColor: '#008000',
							});
						}
					});
				} else if (result.dismiss === Swal.DismissReason.cancel) {
					swalWithBootstrapButtons.fire(
						'Batalkan',
						'File anda aman!',
						'error'
					);
				}
			});
		}
	</script>

</body>

</html>