<table class="table table-hover">
	<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Grup ID</th>
			<th scope="col">Grup Nama</th>
			<th scope="col">Grup Diskripsi</th>
			<th scope="col">User ID</th>
			<th scope="col">Create</th>
			<th scope="col">Update</th>
			<th scope="col">Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach ($grup as $data) : ?>
			<tr>
				<td> <?php echo $no++; ?> </td>
				<td> <?= $data['GRUP_ID']; ?> </td>
				<td> <?= $data['GRUP_NAMA']; ?> </td>
				<td> <?= $data['GRUP_DISKRIPSI']; ?> </td>
				<td> <?= $data['USER_ID']; ?> </td>
				<td> <button type="button" id="createBtn" name="createBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#create">Create</button>
					<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Entri Data Grup</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?= base_url('grup/createAct') ?>" method="post" enctype="multipart/form-data">
									<div class="modal-body">
										<div class=" form-group">
											<label for="GRUP_NAMA">Nama Grup</label>
											<input type="text" class="form-control form-control-user" id="GRUP_NAMA" name="GRUP_NAMA" placeholder="Masukkan nama grup.">
										</div>
										<div class=" form-group">
											<label for="GRUP_DISKRIPSI">Deskripsi Grup</label>
											<input type="text" class="form-control form-control-user" id="GRUP_DISKRIPSI" name="GRUP_DISKRIPSI" placeholder="Masukkan deskripsi grup.">
										</div>
										<div class=" form-group">
											<label for="GRUP_DISKRIPSI">User ID</label>
											<input type="text" class="form-control form-control-user" id="USER_ID" name="USER_ID" placeholder="Masukkan user id.">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-primary" value="upload">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<td> <button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update<?= $data['GRUP_ID']; ?>">Update</button>
					<div class="modal fade" id="update<?= $data['GRUP_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Edit Data Grup</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?= base_url('grup/updateAct') ?>" method="post" enctype="multipart/form-data">
									<div class="modal-body">
										<div class="form-group">
											<label for="GRUP_NAMA">Nama Grup</label>
											<input type="text" class="form-control form-control-user" id="GRUP_NAMA" name="GRUP_NAMA" placeholder="Masukkan nama grup." value="<?= $data['GRUP_NAMA']; ?>">
										</div>
										<div class="form-group">
											<label for="GRUP_DISKRIPSI">Deskripsi Grup</label>
											<input type="text" class="form-control form-control-user" id="GRUP_DISKRIPSI" name="GRUP_DISKRIPSI" placeholder="Masukkan deskripsi grup." value="<?= $data['GRUP_DISKRIPSI']; ?>">
										</div>
										<div class=" form-group">
											<label for="GRUP_DISKRIPSI">User ID</label>
											<input type="text" class="form-control form-control-user" id="USER_ID" name="USER_ID" placeholder="Masukkan user id." value="<?= $data['USER_ID']; ?>">
										</div>
									</div>
									<div class="form-group">
										<input type="hidden" class="form-control invisible" id="GRUP_ID" name="GRUP_ID" value="<?= $data['GRUP_ID']; ?>">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-primary" value="upload">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</td>
				<td><button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete<?= $data['GRUP_ID']; ?>">Delete</button>
					<div class="modal fade" id="delete<?= $data['GRUP_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Delete Data Grup</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?= base_url('grup/deleteAct') ?>" method="post" enctype="multipart/form-data">
									<div class="modal-body">
										Anda yakin untuk menghapus data?
									</div>
									<div class="form-group">
										<input type="hidden" class="form-control invisible" id="GRUP_ID" name="GRUP_ID" value="<?= $data['GRUP_ID']; ?>">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-primary" value="upload">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<!-- Button trigger modal -->

</body>