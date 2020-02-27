<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menu Grup</h6>
    </div>
    <div class="card-header py-3">
        <div class="text-danger m-0 font-weight-bold text-primary"><button type="button" id="createBtn" name="createBtn" class="btn btn-danger btn-lg btn createBtn mb-2" data-toggle="modal" data-target="#create"> <i class="fa fa-plus-square fa-1x"></i> </button> Tambah Data</div>
    </div>
    <div class="card-body">
        <table id="dataTableSistem" class="table table-hover table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Sistem Nama</th>
                    <th scope="col">Sistem Diskripsi</th>
                    <th scope="col">Sistem Versi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<?php foreach ($sistem as $data) : ?>
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Entri Data Sistem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('sistem/createAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="SISTEM_NAMA">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="Sistem_Nama" name="SISTEM_NAMA" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('SISTEM_NAMA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="SISTEM_DISKRIPSI">Sistem Deskripsi</label>
                            <input type="text" class="form-control form-control-sistem" id="SISTEM_DISKRIPSI" name="SISTEM_DISKRIPSI" placeholder="Masukkan Sistem Deskripsi.">
                            <?= form_error('SISTEM_DISKRIPSI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="SISTEM_VERSI">Sistem Versi</label>
                            <input type="text" class="form-control form-control-sistem" id="SISTEM_VERSI" name="SISTEM_VERSI" placeholder="Masukkan Sistem Versi.">
                            <?= form_error('SISTEM_VERSI', '<small class="text-danger pl-3">', '</small>') ?>
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
    <div class="modal fade" id="update<?= $data['SISTEM_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Sistem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('sistem/updateAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="SISTEM_NAMA">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="SISTEM_NAMA" name="SISTEM_NAMAu" placeholder="Masukkan Nama." value="<?= $data['SISTEM_NAMA']; ?>">
                            <?= form_error('SISTEM_NAMAu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="SISTEM_DISKRIPSI">Sistem Deskripsi</label>
                            <input type="text" class="form-control form-control-sistem" id="SISTEM_DISKRIPSI" name="SISTEM_DISKRIPSIu" placeholder="Masukkan Sistem Deskripsi." value="<?= $data['SISTEM_DISKRIPSI']; ?>">
                            <?= form_error('SISTEM_DISKRIPSIu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="SISTEM_VERSI">Sistem Versi</label>
                            <input type="text" class="form-control form-control-sistem" id="SISTEM_VERSI" name="SISTEM_VERSIu" placeholder="Masukkan Sistem Versi." value="<?= $data['SISTEM_VERSI']; ?>">
                            <?= form_error('SISTEM_VERSIu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control invisible" id="SISTEM_ID" name="SISTEM_ID" value="<?= $data['SISTEM_ID']; ?>">
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
    <div class="modal fade" id="delete<?= $data['SISTEM_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Data Sistem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('sistem/deleteAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        Anda yakin untuk menghapus data?
                    </div>
                    <div class="form-sistem">
                        <input type="hidden" class="form-control invisible" id="SISTEM_ID" name="SISTEM_ID" value="<?= $data['SISTEM_ID']; ?>">
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