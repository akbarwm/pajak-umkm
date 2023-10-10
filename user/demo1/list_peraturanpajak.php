<?php
error_reporting(false); session_start();
include('../config/session.php');$id = $_SESSION['id_user'];
$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['type'])) {
	if ($_POST['type'] == 'hapus') {
		$id = $_POST['id'];
		$result = mysqli_query($db, "DELETE FROM peraturan_pajak where id ='$id'");
		echo json_encode(['data' => 'Berhasil Delete ' + $id, 'status' => 'sukses']);
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<title>List Peraturan | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">

<body>
	<?php include './layout/sidebar.php'; ?>

	<!-- Data Table start -->
	<div class="main-panel">
		<div class="container">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">List Peraturan Pajak</h4>
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
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover">
										<thead>
											<tr>
												<th>Judul</th>
												<th>Kategori</th>
												<th style="width: 10%">Aksi</th>
											</tr>
										<tbody>
											<?php
											$sql = "SELECT * FROM peraturan_pajak";
											$result = mysqli_query($db, $sql);
											$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

											$idx = 1;
											foreach ($row as $r) {
											?>
												<tr>
													<td> <?= $r['judul'] ?></td>
													<td><?= $r['kategori'] ?></td>
													<td style="width: 20%">
														<div class="form-button-action">
															<a href="edit_peraturanpajak.php?id=<?= $r['id']; ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
																<i class="fa fa-edit"></i>
															</a>
															<button id="deletebutton" onclick="deleteData(this)" data-id="<?= $r['id'] ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
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