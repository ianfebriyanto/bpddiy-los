<body>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kewenangan ID</th>
				<th>Grup ID</th>
				<th>Menu ID</th>
				<th>Kewenangan Create</th>
				<th>Kewenangan Update</th>
				<th>Kewenangan Delete</th>
				<th>Create</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($kewenangan as $data) : ?>
				<tr>
					<td> <?php echo $no++; ?> </td>
					<td> <?= $data['KEWENANGAN_ID']; ?> </td>
					<td> <?= $data['GRUP_ID']; ?> </td>
					<td> <?= $data['MENU_ID']; ?> </td>
					<td> <?= $data['CREATE']; ?> </td>
					<td> <?= $data['UPDATE']; ?> </td>
					<td> <?= $data['DELETE']; ?> </td>
					<td> <button type="button" id="createBtn" name="createBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#create">Create</button>
						<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Entri Data Kewenangan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('kewenangan/createAct') ?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">
											<div class="form-group">
												<label for="GRUP_ID">GRUP ID</label>
												<input type="text" class="form-control form-control-user" id="GRUP_ID" name="GRUP_ID" placeholder="Masukkan Grup ID.">
											</div>
											<div class="form-group">
												<label for="MENU_ID">Menu ID</label>
												<input type="text" class="form-control form-control-user" id="MENU_ID" name="MENU_ID" placeholder="Masukkan Menu ID.">
											</div>
											<div class="form-group">
												<label for="CREATE">Kewenangan Create</label>
												<input type="text" maxlength="1" class="form-control form-control-user" id="CREATE" name="CREATE" placeholder="Masukkan kewenangan create.">
											</div>
											<div class="form-group">
												<label for="UPDATE">Kewenangann Update</label>
												<input type="text" maxlength="1" class="form-control form-control-user" id="UPDATE" name="UPDATE" placeholder="Masukkan kewenangan update.">
											</div>
											<div class="form-group">
												<label for="DELETE">Kewenangann Delete</label>
												<input type="text" maxlength="1" class="form-control form-control-user" id="DELETE" name="DELETE" placeholder="Masukkan kewenangan delete.">
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
					<td> <button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update<?= $data['MENU_ID']; ?>">Update</button>
						<div class="modal fade" id="update<?= $data['MENU_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Edit Data Kewenangan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('kewenangan/createAct') ?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">
											<div class="form-group">
												<label for="GRUP_ID">GRUP ID</label>
												<input type="text" class="form-control form-control-user" id="GRUP_ID" name="GRUP_ID" placeholder="Masukkan Grup ID. " value="<?= $data['GRUP_ID']; ?>">
											</div>
											<div class="form-group">
												<label for="MENU_ID">Menu ID</label>
												<input type="text" class="form-control form-control-user" id="MENU_ID" name="MENU_ID" placeholder="Masukkan Menu ID."value="<?= $data['MENU_ID']; ?>">
											</div>
											<div class="form-group">
												<label for="CREATE">Kewenangan Create</label>
												<input type="text" maxlength="1" class="form-control form-control-user" id="CREATE" name="CREATE" placeholder="Masukkan kewenangan create."value="<?= $data['CREATE']; ?>">
											</div>
											<div class="form-group">
												<label for="UPDATE">Kewenangann Update</label>
												<input type="text" maxlength="1" class="form-control form-control-user" id="UPDATE" name="UPDATE" placeholder="Masukkan kewenangan update."value="<?= $data['UPDATE']; ?>">
											</div>
											<div class="form-group">
												<label for="DELETE">Kewenangann Delete</label>
												<input type="text" maxlength="1" class="form-control form-control-user" id="DELETE" name="DELETE" placeholder="Masukkan kewenangan delete."value="<?= $data['DELETE']; ?>">
											</div>
											<div class="form-group">
                                            	<input type="hidden" class="form-control invisible" id="KEWENANGAN_ID" name="KEWENANGAN_ID" value="<?= $data['KEWENANGAN_ID']; ?>">
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
					</td>
					<td><button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete<?= $data['MENU_ID']; ?>">Delete</button>
						<div class="modal fade" id="delete<?= $data['MENU_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Hapus Data Kewenangan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('menu/deleteAct') ?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">
											Anda yakin untuk menghapus data?
										</div>
										<div class="form-group">
											<input type="hidden" class="form-control invisible" id="MENU_ID" name="MENU_ID" value="<?= $data['MENU_ID']; ?>">
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