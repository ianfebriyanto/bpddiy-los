<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menu kantor</h6>
    </div>
    <div class="card-header py-3">
        <div class="text-danger m-0 font-weight-bold text-primary"><button type="button" id="createBtn" name="createBtn" class="btn btn-info btn-md btn createBtn mb-2" data-toggle="modal" data-target="#create"> <i class="fa fa-plus-square fa-1x"></i> Tambah Data Kantor </button> </div>
    </div>
    <div class="card-body">
        <table id="dataTableKantor" class="table table-hover table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Kantor</th>
                    <th scope="col">Parent</th>
                    <th scope="col">level</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Entri Data Kantor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('kantor/createAct') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="KD_KANTOR">Kode Kantor</label>
                        <input type="text" class="form-control form-control-kantor" id="KD_KANTOR" name="KD_KANTOR" placeholder="Masukkan KD_KANTOR.">
                        <?= form_error('KD_KANTOR', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="PARENT">Parent</label>
                        <input type="text" class="form-control form-control-kantor" id="PARENT" name="PARENT" placeholder="Masukkan PARENT.">
                        <?= form_error('PARENT', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="LEVEL">Level</label>
                        <input type="text" class="form-control form-control-kantor" id="LEVEL" name="LEVEL" placeholder="Masukkan level.">
                        <?= form_error('LEVEL', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NAME">Nama</label>
                        <input type="text" class="form-control form-control-kantor" id="NAME" name="NAME" placeholder="Masukkan NAME.">
                        <?= form_error('NAME', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="STATUS">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="hidden" id="STATUS" name="STATUS" value="0">
                            <input class="form-check-input" type="checkbox" id="STATUS" name="STATUS" value="1">
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
<?php foreach ($kantor as $data) : ?>
    <div class="modal fade" id="update<?= $data['KANTOR_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Kantor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('kantor/updateAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="KD_KANTOR">Kode Kantor</label>
                            <input type="text" class="form-control form-control-kantor" id="KD_KANTOR" name="KD_KANTORu" placeholder="Masukkan KD_KANTOR." value="<?= $data['KD_KANTOR']; ?>">
                            <?= form_error('KD_KANTORu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class=" form-group">
                            <label for="PARENT">Parent</label>
                            <input type="text" class="form-control form-control-kantor" id="PARENT" name="PARENTu" placeholder="Masukkan PARENT." value="<?= $data['PARENT']; ?>">
                            <?= form_error('PARENTu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="LEVEL">Level</label>
                            <input type="text" class="form-control form-control-kantor" id="LEVEL" name="LEVELu" placeholder="Masukkan Level." value="<?= $data['LEVEL']; ?>">
                            <?= form_error('LEVELu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAME">Nama</label>
                            <input type="text" class="form-control form-control-kantor" id="NAME" name="NAMEu" placeholder="Masukkan Name." value="<?= $data['NAME']; ?>">
                            <?= form_error('NAMEu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="STATUS">Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="hidden" id="STATUS" name="STATUS" value="0" <?php if ($data['STATUS'] == 0) {
                                                                                                                        echo "";
                                                                                                                    } ?>>
                                <input class="form-check-input" type="checkbox" id="STATUS" name="STATUS" value="1" <?php if ($data['STATUS'] == 1) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                <label class="form-check-label" for="gridCheck">
                                    Active
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control invisible" id="KANTOR_ID" name="KANTOR_ID" value="<?= $data['KANTOR_ID']; ?>">
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
    <div class="modal fade" id="delete<?= $data['KANTOR_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Data Kantor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('kantor/deleteAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        Anda yakin untuk menghapus data?
                    </div>
                    <div class="form-kantor">
                        <input type="hidden" class="form-control invisible" id="KANTOR_ID" name="KANTOR_ID" value="<?= $data['KANTOR_ID']; ?>">
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