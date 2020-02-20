<div class="container-fluid">
	<table id="dataTableKewenangan" class="table table-hover table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Grup</th>
				<th>Nama Menu</th>
				<th>Kewenangan Create</th>
				<th>Kewenangan Update</th>
				<th>Kewenangan Delete</th>
				<th>d</th>
				<th>Aksi</th>
				<th>d</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($kewenangan as $data) : ?>
				<tr>
					<td> <?php echo $no++; ?> </td>
					<td> <?= $data['GRUP_NAMA']; ?> </td>
					<td> <?= $data['MENU_NAMA']; ?> </td>
					<td> <?php if ($data['CREATE'] == 1) {
								echo '<i class="far fa-check-square fa-2x">';
							} else {
								echo '<i class="fas fa-ban fa-2x">';
							} ?> </td>
					<td> <?php if ($data['UPDATE'] == 1) {
								echo '<i class="far fa-check-square fa-2x">';
							} else {
								echo '<i class="fas fa-ban fa-2x">';
							} ?> </td>
					<td> <?php if ($data['DELETE'] == 1) {
								echo '<i class="far fa-check-square fa-2x">';
							} else {
								echo '<i class="fas fa-ban fa-2x">';
							} ?> </td>
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
												<label for="GRUP_ID">Nama Grup</label>
												<select class="form-control" id="GRUP_ID" name="GRUP_ID">
													<?php
													foreach ($namaGrup as $data2) : ?>
														<option value="<?= $data2['GRUP_ID']; ?>"><?= $data2['GRUP_NAMA']; ?> </option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="form-group">
												<label for="MENU_ID">Nama Menu</label>
												<select class="form-control" id="MENU_ID" name="MENU_ID">
													<?php
													foreach ($namaMenuOption as $data3) : ?>
														<option value="<?= $data3['MENU_ID']; ?>"><?= $data3['MENU_NAMA']; ?> </option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="form-group">
												<label for="CREATE">Create</label>
												<div class="form-check">
													<input class="form-check-input" type="hidden" id="CREATE" name="CREATE" value="0">
													<input class="form-check-input" type="checkbox" id="CREATE" name="CREATE" value="1">
													<label class="form-check-label" for="gridCheck">
														Active
													</label>
												</div>
											</div>
											<div class="form-group">
												<label for="UPDATE">Update</label>
												<div class="form-check">
													<input class="form-check-input" type="hidden" id="UPDATE" name="UPDATE" value="0">
													<input class="form-check-input" type="checkbox" id="UPDATE" name="UPDATE" value="1">
													<label class="form-check-label" for="gridCheck">
														Active
													</label>
												</div>
											</div>
											<div class="form-group">
												<label for="DELETE">Delete</label>
												<div class="form-check">
													<input class="form-check-input" type="hidden" id="DELETE" name="DELETE" value="0">
													<input class="form-check-input" type="checkbox" id="DELETE" name="DELETE" value="1">
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
					<td> <button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update<?= $data['KEWENANGAN_ID']; ?>">Update</button>
						<div class="modal fade" id="update<?= $data['KEWENANGAN_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Edit Data Kewenangan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('kewenangan/updateAct') ?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">
											<div class="form-group">
												<label for="GRUP_ID">Nama Grup</label>
												<select class="form-control" id="GRUP_ID" name="GRUP_ID">
													<?php
													foreach ($namaGrup as $data2) : ?>
														<option value="<?= $data2['GRUP_ID']; ?>" <?php if ($data2['GRUP_NAMA'] == $data['GRUP_NAMA']) {
																										echo 'selected';
																									} ?>><?= $data2['GRUP_NAMA']; ?> </option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="form-group">
												<label for="MENU_ID">Nama Menu</label>
												<select class="form-control" id="MENU_ID" name="MENU_ID">
													<?php
													foreach ($namaMenu as $data3) : ?>
														<option value="<?= $data3['MENU_ID']; ?>" <?php if ($data3['MENU_NAMA'] == $data['MENU_NAMA']) {
																										echo 'selected';
																									} ?>><?= $data3['MENU_NAMA']; ?> </option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="form-group">
												<label for="CREATE">Create</label>
												<div class="form-check">
													<input class="form-check-input" type="hidden" id="CREATE" name="CREATE" value="0" <?php if ($data['CREATE'] == 0) {
																																			echo "";
																																		} ?>>
													<input class="form-check-input" type="checkbox" id="CREATE" name="CREATE" value="1" <?php if ($data['CREATE'] == 1) {
																																			echo "checked";
																																		} ?>>
													<label class="form-check-label" for="gridCheck">
														Active
													</label>
												</div>
											</div>
											<div class="form-group">
												<label for="UPDATE">Update</label>
												<div class="form-check">
													<input class="form-check-input" type="hidden" id="UPDATE" name="UPDATE" value="0" <?php if ($data['UPDATE'] == 0) {
																																			echo "";
																																		} ?>>
													<input class="form-check-input" type="checkbox" id="UPDATE" name="UPDATE" value="1" <?php if ($data['UPDATE'] == 1) {
																																			echo "checked";
																																		} ?>>
													<label class="form-check-label" for="gridCheck">
														Active
													</label>
												</div>
											</div>
											<div class="form-group">
												<label for="DELETE">Delete</label>
												<div class="form-check">
													<input class="form-check-input" type="hidden" id="DELETE" name="DELETE" value="0" <?php if ($data['DELETE'] == 0) {
																																			echo "";
																																		} ?>>
													<input class="form-check-input" type="checkbox" id="DELETE" name="DELETE" value="1" <?php if ($data['DELETE'] == 1) {
																																			echo "checked";
																																		} ?>>
													<label class="form-check-label" for="gridCheck">
														Active
													</label>
												</div>
											</div>
											<div class="form-group">
												<input type="hidden" class="form-control invisible" id="KEWENANGAN_ID" name="KEWENANGAN_ID" value="<?= $data['KEWENANGAN_ID']; ?>">
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
					</td>
					<td><button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete<?= $data['KEWENANGAN_ID']; ?>">Delete</button>
						<div class="modal fade" id="delete<?= $data['KEWENANGAN_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Hapus Data Kewenangan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('kewenangan/deleteAct') ?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">
											Anda yakin untuk menghapus data?
										</div>
										<div class="form-group">
											<input type="hidden" class="form-control invisible" id="KEWENANGAN_ID" name="KEWENANGAN_ID" value="<?= $data['KEWENANGAN_ID']; ?>">
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
</div>