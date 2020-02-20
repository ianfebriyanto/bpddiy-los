<div class="container-fluid">
	<table id="dataTableMenu" class="table table-hover table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Menu Nama</th>
				<th>Menu Link</th>
				<th>Menu Diskripsi</th>
				<th>Menu Status</th>
				<th></th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($menu as $data) : ?>
				<tr>
					<td> <?php echo $no++; ?> </td>
					<td> <?= $data['MENU_NAMA']; ?> </td>
					<td> <?= $data['MENU_LINK']; ?> </td>
					<td> <?= $data['MENU_DISKRIPSI']; ?> </td>
					<td> <?php if ($data['MENU_STATUS'] == 1) {
								echo '<i class="far fa-check-square fa-2x">';
							} else {
								echo '<i class="fas fa-ban fa-2x">';
							} ?> </td>
					<td> <button type="button" id="createBtn" name="createBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#create">Create</button>
						<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Entri Data Menu</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('menu/createAct') ?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">
											<div class=" form-group">
												<label for="MENU_NAMA">Nama Menu</label>
												<input type="text" class="form-control form-control-user" id="MENU_NAMA" name="MENU_NAMA" placeholder="Masukkan nama menu.">
											</div>
											<div class=" form-group">
												<label for="MENU_LINK">Link Menu</label>
												<input type="text" class="form-control form-control-user" id="MENU_LINK" name="MENU_LINK" placeholder="Masukkan link menu.">
											</div>
											<div class=" form-group">
												<label for="MENU_DISKRIPSI">Deskripsi Menu</label>
												<input type="text" class="form-control form-control-user" id="MENU_DISKRIPSI" name="MENU_DISKRIPSI" placeholder="Masukkan deskripsi menu.">
											</div>
											<div class="form-group">
												<label for="MENU_STATUS">Status</label>
												<div class="form-check">
													<input class="form-check-input" type="hidden" id="MENU_STATUS" name="MENU_STATUS" value="0">
													<input class="form-check-input" type="checkbox" id="MENU_STATUS" name="MENU_STATUS" value="1">
													<label class="form-check-label" for="gridCheck">
														Active
													</label>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-primary" value="upload">Simpan</button>
										</div>
										<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
									</form>
								</div>
							</div>
						</div>
					<td> <button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update<?= $data['MENU_ID']; ?>">Update</button>
						<div class="modal fade" id="update<?= $data['MENU_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Edit Data Menu</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('menu/updateAct') ?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">
											<div class=" form-group">
												<label for="MENU_NAMA">Nama Menu</label>
												<input type="text" class="form-control form-control-user" id="MENU_NAMA" name="MENU_NAMA" placeholder="Masukkan nama menu." value="<?= $data['MENU_NAMA']; ?>">
											</div>
											<div class=" form-group">
												<label for="MENU_LINK">Link Menu</label>
												<input type="text" class="form-control form-control-user" id="MENU_LINK" name="MENU_LINK" placeholder="Masukkan link menu." value="<?= $data['MENU_LINK']; ?>">
											</div>
											<div class=" form-group">
												<label for="MENU_DISKRIPSI">Deskripsi Menu</label>
												<input type="text" class="form-control form-control-user" id="MENU_DISKRIPSI" name="MENU_DISKRIPSI" placeholder="Masukkan deskripsi menu." value="<?= $data['MENU_DISKRIPSI']; ?>">
											</div>
											<div class="form-group">
												<label for="MENU_STATUS">Status</label>
												<div class="form-check">
													<input class="form-check-input" type="hidden" id="MENU_STATUS" name="MENU_STATUS" value="0" <?php if ($data['MENU_STATUS'] == 0) {
																																					echo "";
																																				} ?>>
													<input class="form-check-input" type="checkbox" id="MENU_STATUS" name="MENU_STATUS" value="1" <?php if ($data['MENU_STATUS'] == 1) {
																																						echo "checked";
																																					} ?>>
													<label class="form-check-label" for="gridCheck">
														Active
													</label>
												</div>
											</div>
											<div class="form-group">
												<input type="hidden" class="form-control invisible" id="MENU_ID" name="MENU_ID" value="<?= $data['MENU_ID']; ?>">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
												<button type="submit" class="btn btn-primary" value="upload">Simpan</button>
											</div>
											<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
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
										<h5 class="modal-title" id="staticBackdropLabel">Delete Data Menu</h5>
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
										<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
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
</div>