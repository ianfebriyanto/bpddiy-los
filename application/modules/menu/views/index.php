<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Menu Menu</h6>
	</div>
	<div class="card-header py-3">
		<div class="text-danger m-0 font-weight-bold text-primary"><button type="button" id="createBtn" name="createBtn" class="btn btn-danger btn-lg btn createBtn mb-2" data-toggle="modal" data-target="#create"> <i class="fa fa-plus-square fa-1x"></i> </button> Tambah Data</div>
	</div>
	<div class="card-body">
		<table id="dataTableMenu" class="table table-hover table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Menu Nama</th>
					<th>Menu Link</th>
					<th>Menu Diskripsi</th>
					<th>Menu Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<?php foreach ($menu as $data) : ?>
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
							<?= form_error('MENU_NAMA', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class=" form-group">
							<label for="MENU_LINK">Link Menu</label>
							<input type="text" class="form-control form-control-user" id="MENU_LINK" name="MENU_LINK" placeholder="Masukkan link menu.">
							<?= form_error('MENU_LINK', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class=" form-group">
							<label for="MENU_DISKRIPSI">Deskripsi Menu</label>
							<input type="text" class="form-control form-control-user" id="MENU_DISKRIPSI" name="MENU_DISKRIPSI" placeholder="Masukkan deskripsi menu.">
							<?= form_error('MENU_DISKRIPSI', '<small class="text-danger pl-3">', '</small>') ?>
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
							<input type="text" class="form-control form-control-user" id="MENU_NAMA" name="MENU_NAMAu" placeholder="Masukkan nama menu." value="<?= $data['MENU_NAMA']; ?>">
							<?= form_error('MENU_NAMAu', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class=" form-group">
							<label for="MENU_LINK">Link Menu</label>
							<input type="text" class="form-control form-control-user" id="MENU_LINK" name="MENU_LINKu" placeholder="Masukkan link menu." value="<?= $data['MENU_LINK']; ?>">
							<?= form_error('MENU_LINKu', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class=" form-group">
							<label for="MENU_DISKRIPSI">Deskripsi Menu</label>
							<input type="text" class="form-control form-control-user" id="MENU_DISKRIPSI" name="MENU_DISKRIPSIu" placeholder="Masukkan deskripsi menu." value="<?= $data['MENU_DISKRIPSI']; ?>">
							<?= form_error('MENU_DISKRIPSIu', '<small class="text-danger pl-3">', '</small>') ?>
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
<?php endforeach; ?>