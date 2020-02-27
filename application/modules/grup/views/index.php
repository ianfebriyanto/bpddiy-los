<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menu Grup</h6>
    </div>
    <div class="card-header py-3">
        <div class="text-danger m-0 font-weight-bold text-primary"><button type="button" id="createBtn" name="createBtn" class="btn btn-danger btn-lg btn createBtn mb-2" data-toggle="modal" data-target="#create"> <i class="fa fa-plus-square fa-1x"></i> </button> Tambah Data</div>
    </div>
    <div class="card-body">
        <table id="dataTableGrup" class="table table-hover table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Grup</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?php foreach ($grup as $data) : ?>
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
                            <?= form_error('GRUP_NAMA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class=" form-group">
                            <label for="GRUP_DISKRIPSI">Deskripsi Grup</label>
                            <input type="text" class="form-control form-control-user" id="GRUP_DISKRIPSI" name="GRUP_DISKRIPSI" placeholder="Masukkan deskripsi grup.">
                            <?= form_error('GRUP_DISKRIPSI', '<small class="text-danger pl-3">', '</small>') ?>
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
                            <input type="text" class="form-control form-control-user" id="GRUP_NAMA" name="GRUP_NAMAu" placeholder="Masukkan nama grup." value="<?= $data['GRUP_NAMA']; ?>">
                            <?= form_error('GRUP_NAMAu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="GRUP_DISKRIPSI">Deskripsi Grup</label>
                            <input type="text" class="form-control form-control-user" id="GRUP_DISKRIPSI" name="GRUP_DISKRIPSIu" placeholder="Masukkan deskripsi grup." value="<?= $data['GRUP_DISKRIPSI']; ?>">
                            <?= form_error('GRUP_DISKRIPSIu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control invisible" id="GRUP_ID" name="GRUP_ID" value="<?= $data['GRUP_ID']; ?>">
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
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>