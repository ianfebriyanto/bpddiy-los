<div class="container-fluid">
    <table id="dataTableKantor" class="table table-hover table-bordered" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Parent</th>
                <th scope="col">level</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</div>
<?php foreach ($kantor as $data) : ?>
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
                            <label for="NAME">Name </label>
                            <input type="text" class="form-control form-control-kantor" id="NAME" name="NAME" placeholder="Masukkan NAME.">
                            <?= form_error('NAME', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="STATUS">Status </label>
                            <input type="text" class="form-control form-control-kantor" id="STATUS" name="STATUS" placeholder="Masukkan Status.">
                            <?= form_error('STATUS', '<small class="text-danger pl-3">', '</small>') ?>
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
    <div class="modal fade" id="update<?= $data['KD_KANTOR']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <label for="NAME">Name</label>
                            <input type="text" class="form-control form-control-kantor" id="NAME" name="NAMEu" placeholder="Masukkan Name." value="<?= $data['NAME']; ?>">
                            <?= form_error('NAMEu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="STATUS">Status </label>
                            <input type="text" class="form-control form-control-kantor" id="STATUS" name="STATUSu" placeholder="Masukkan Status." value="<?= $data['STATUS']; ?>">
                            <?= form_error('STATUSu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control invisible" id="KD_KANTOR" name="KD_KANTOR" value="<?= $data['KD_KANTOR']; ?>">
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
    <div class="modal fade" id="delete<?= $data['KD_KANTOR']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <input type="hidden" class="form-control invisible" id="KD_KANTOR" name="KD_KANTOR" value="<?= $data['KD_KANTOR']; ?>">
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