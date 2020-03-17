<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menu Referensi</h6>
    </div>
    <div class="card-header py-3">
        <div class="text-danger m-0 font-weight-bold text-primary"><button type="button" id="createBtn" name="createBtn" class="btn btn-info btn-md btn createBtn mb-2" data-toggle="modal" data-target="#create"> <i class="fa fa-plus-square fa-1x"></i> Tambah Data Referensi </button> </div>
    </div>
    <div class="card-body">
        <table id="dataTableReferensi" class="table table-hover table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Group ID</th>
                    <th scope="col">Ref</th>
                    <th scope="col">Desc</th>
                    <th scope="col">Group ID</th>
                    <th scope="col">Ref2</th>
                    <th scope="col">Desc2</th>
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
                <h5 class="modal-title" id="staticBackdropLabel">Entri Data Referensi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('referensi/createAct') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class=" form-group">
                        <label for="GROUP_ID">Group_ID</label>
                        <input type="text" class="form-control form-control-user" id="GROUP_ID" name="GROUP_ID" placeholder="Masukkan nama Group_Id.">
                        <?= form_error('GROUP_ID', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class=" form-group">
                        <label for="REF">Ref</label>
                        <input type="text" class="form-control form-control-user" id="REF" name="REF" placeholder="Masukkan Ref.">
                        <?= form_error('REF', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class=" form-group">
                        <label for="DESC">Desc</label>
                        <input type="text" class="form-control form-control-user" id="DESC" name="DESC" placeholder="Masukkan Desc.">
                        <?= form_error('DESC', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div>
                        <label for="GROUP_ID2">Group_ID2</label>
                        <input type="text" class="form-control form-control-user" id="GROUP_ID2" name="GROUP_ID2" placeholder="Masukkan nama Group_Id2.">
                        <?= form_error('GROUP_ID2', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class=" form-group">
                        <label for="REF2">Ref2</label>
                        <input type="text" class="form-control form-control-user" id="REF2" name="REF2" placeholder="Masukkan Ref2.">
                        <?= form_error('REF2', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class=" form-group">
                        <label for="DESC2">Desc2</label>
                        <input type="text" class="form-control form-control-user" id="DESC2" name="DESC2" placeholder="Masukkan Desc2.">
                        <?= form_error('DESC2', '<small class="text-danger pl-3">', '</small>') ?>
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
<?php foreach ($referensi as $data) : ?>
    <div class="modal fade" id="update<?= $data['REFERENSI_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Referensi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('referensi/updateAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="GROUP_ID">Group_Id</label>
                            <input type="text" class="form-control form-control-user" id="GROUP_ID" name="GROUP_IDu" placeholder="Masukkan Group_Id." value="<?= $data['GROUP_ID']; ?>">
                            <?= form_error('GROUP_IDu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="REF">Ref</label>
                            <input type="text" class="form-control form-control-user" id="REF" name="REFu" placeholder="Masukkan Ref." value="<?= $data['REF']; ?>">
                            <?= form_error('REFu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="DESC">Desc</label>
                            <input type="text" class="form-control form-control-user" id="DESC" name="DESCu" placeholder="Masukkan Desc." value="<?= $data['DESC']; ?>">
                            <?= form_error('DESCu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="GROUP_ID2">Group_Id2</label>
                            <input type="text" class="form-control form-control-user" id="GROUP_ID2" name="GROUP_ID2u" placeholder="Masukkan Group_Id2." value="<?= $data['GROUP_ID2']; ?>">
                            <?= form_error('GROUP_ID2u', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="REF2">Ref2</label>
                            <input type="text" class="form-control form-control-user" id="REF2" name="REF2u" placeholder="Masukkan Ref2." value="<?= $data['REF2']; ?>">
                            <?= form_error('REFu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="DESC2">Desc2</label>
                            <input type="text" class="form-control form-control-user" id="DESC2" name="DESC2u" placeholder="Masukkan Desc2." value="<?= $data['DESC2']; ?>">
                            <?= form_error('DESC2u', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control invisible" id="REFERENSI_ID" name="REFERENSI_ID" value="<?= $data['REFERENSI_ID']; ?>">
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
    <div class="modal fade" id="delete<?= $data['REFERENSI_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Data Referensi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('referensi/deleteAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        Anda yakin untuk menghapus data <?= $data['REFERENSI_ID']; ?>?
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control invisible" id="REFERENSI_ID" name="REFERENSI_ID" value="<?= $data['REFERENSI_ID']; ?>">
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