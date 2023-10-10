<?php
error_reporting(false); session_start();
include('../config/session.php');$id = $_SESSION['id_user'];
$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['type'])) {
	if ($_POST['type'] == 'hapus') {
		$id = $_POST['id'];
		$result = mysqli_query($db, "DELETE FROM pelatihan where id ='$id'");
		echo json_encode(['data' => 'Berhasil Delete ' + $id, 'status' => 'sukses']);
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<title>List Pelatihan | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">

<body>
	<?php include './layout/sidebar.php'; ?>

	<!-- Data Table start -->
	<div class="main-panel">
		<div class="container">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">List Materi Pelatihan</h4>
					<ul class="breadcrumbs">
						<li class="nav-home">
							<a href="index.php">
								<i class="flaticon-home"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="container">
							<div class="row">
								<div class="card shadow mb-4">
									<div class="card-header py-3">
										<h6 class="m-0 font-weight-bold text-primary">List Konsultan</h6>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Unique ID</th>
														<th scope="col">Nama</th>
														<th scope="col">Email</th>
														<th scope="col">Bio</th>
														<th scope="col">Profil Pic</th>
														<th scope="col">Alumnus</th>
														<th scope="col">Bidang</th>
														<th scope="col">Status</th>
														<th scope="col">Pengalaman</th>
														<th scope="col">Jenjang Karir</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$sql = "SELECT * FROM tb_konsultan";
													$result = mysqli_query($db, $sql);
													$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

													$idx = 1;
													foreach ($rows as $row) {
													?>
														<tr>
															<th scope="row"><?= $idx; ?></th>
															<td><?= $row['unique_id'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['email'] ?></td>
															<td><?= $row['bio'] ?></td>
															<td><img src="../../img/konsultan_profil/<?= $row['profil_pic'] ?>" alt="Profil Pic" width="50" height="50"></td>
															<td><?= $row['alumnus'] ?></td>
															<td><?= $row['bidang'] ?></td>
															<td><?= $row['status'] ?></td>
															<td><?= $row['pengalaman'] ?></td>
															<td><?= $row['jenjang_karir'] ?></td>
															<td>
																<a href="detail.php?id=<?= $row['id_konsultan'] ?>" class="btn btn-primary btn-sm">Detail</a>
															</td>
														</tr>
													<?php
														$idx += 1;
													}
													?>
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
		</div>
		<!-- Data Table End -->
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php include './layout/footer.php'; ?>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo2.js"></script>

	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>

	<script>
		function deleteData(event) {
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn mr-1 btn-danger'
				},
				buttonsStyling: false
			})
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
					let id = $(event).attr('data-id')
					$.ajax({
						type: "POST",
						url: window.location.href,
						data: {
							id: id,
							type: 'hapus'
						},
						success: function(res) {
							if (res.status === 'error') {
								Swal.fire({
									title: res.data,
									icon: 'error',
									confirmButtonColor: '#008000',
								})
								return;
							}
							data = res;
							Swal.fire({
								title: 'Berhasil',
								icon: 'success',
								confirmButtonColor: '#008000',
							}).then((result) => {
								if (result.isConfirmed) {
									location.href = window.location.href;
								}
							})
						}
					});
					// const element = document.getElementById("deletebutton2");
					// element.click();
				} else if (
					/* Read more about handling dismissals below */
					result.dismiss === Swal.DismissReason.cancel
				) {
					swalWithBootstrapButtons.fire(
						'Batalkan',
						'File anda aman!',
						'error'
					)
				}
			})
		}
	</script>
</body>

</html>