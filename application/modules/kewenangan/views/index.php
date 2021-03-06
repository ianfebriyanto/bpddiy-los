<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Menu Kewenangan</h6>
	</div>
	<div class="card-body">
		<?= $this->session->flashdata('message'); ?>
		<div class="row row-cols-1 row-cols-md-3">
			<?php foreach ($namaGrup as $data) : ?>
				<div class="col mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-dark"><?= $data['GRUP_NAMA']; ?></h5>
							<p class="card-text"><?= $data['GRUP_DISKRIPSI']; ?></p>
						</div>
						<div class="card-footer bg-white">
							<button type="button" id="deatilBtn" name="detailBtn" class="btn btn-primary" data-toggle="modal" data-target="#detail<?= $data['GRUP_ID']; ?>" onClick="simpan(<?= $data['GRUP_ID']; ?>)">Detail</button>
							<div class="modal fade" id="detail<?= $data['GRUP_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
								<div class="modal-dialog modal-xl" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="staticBackdropLabel">Detail Data Kewenangan <?= $data['GRUP_NAMA']; ?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-header">
											<button type="button" id="createBtn" name="createBtn" class="btn btn-info btn-md btn createBtn mb-2" data-toggle="modal" data-target="#create<?= $data['GRUP_ID']; ?>"> <i class="fa fa-plus-square fa-1x"></i> Tambah kewenangan</button>
										</div>
										<div class="modal-body">
											<div class="table-responsive">
												<table id="dataTableKewenangan<?= $data['GRUP_ID']; ?>" class="table table-hover table-bordered" style="width:100%">
													<thead>
														<tr>
															<th>No</th>
															<th>Nama Menu</th>
															<th>Kewenangan Create</th>
															<th>Kewenangan Update</th>
															<th>Kewenangan Delete</th>
															<th>Aksi</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-primary" value="upload">Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<div class="modal fade" id="create<?= $data['GRUP_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="staticBackdropLabel">Entri Data Kewenangan <?= $data['GRUP_NAMA']; ?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<form action="<?= base_url('kewenangan/createAct') ?>" method="post" enctype="multipart/form-data">
											<div class="modal-body">
												<div class="form-group">
													<label for="MENU_ID">Nama Menu</label>
													<select class="form-control" id="MENU_ID" name="MENU_ID">
														<option value="none" selected disabled hidden>
															Pilih menu.
														</option>
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
												<div class="form-group">
													<input type="hidden" class="form-control invisible" id="GRUP_ID" name="GRUP_ID" value="<?= $data['GRUP_ID']; ?>">
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
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php foreach ($kewenangan as $data) : ?>
	<div class="modal fade" id="update<?= $data['KEWENANGAN_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Edit Data Kewenangan <?= $data['GRUP_NAMA']; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('kewenangan/updateAct') ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-group">
							<label for="MENU_ID">Nama Menu</label>
							<select class="form-control" id="MENU_ID" name="MENU_ID">
								<?php
								foreach ($namaMenuOption as $data3) : ?>
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
							<input type="hidden" class="form-control invisible" id="GRUP_ID" name="GRUP_ID" value="<?= $data['GRUP_ID']; ?>">
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
	<div class="modal fade" id="delete<?= $data['KEWENANGAN_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Hapus Data Kewenangan <?= $data['GRUP_NAMA']; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('kewenangan/deleteAct') ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						Anda yakin untuk menghapus data <?= $data['MENU_NAMA']; ?> dari <?= $data['GRUP_NAMA']; ?>?
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
<?php endforeach; ?>