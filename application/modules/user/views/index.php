<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Host</th>
            <th scope="col">Date Create</th>
            <th scope="col">Nama Grup</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
            <th scope="col">Aksi</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($user as $data) : ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?= $data['USERNAME']; ?> </td>
                <td> <?= $data['NAMA_LENGKAP']; ?> </td>
                <td> <?= $data['EMAIL']; ?> </td>
                <td> <?= $data['HOST']; ?> </td>
                <td> <?= $data['DATE_CREATE']; ?> </td>
                <td> <?= $data['GRUP_NAMA']; ?> </td>
                <td> <?php if ($data['STATUS'] == 1) {
                            echo '<i class="far fa-check-square fa-2x">';
                        } else {
                            echo '<i class="fas fa-ban fa-2x">';
                        } ?> </td>
                <td> <button type="button" id="createBtn" name="createBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#create">Create</button>
                    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Entri Data User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('user/createAct') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="USERNAME">Username</label>
                                            <input type="text" class="form-control form-control-user" id="USERNAME" name="USERNAME" placeholder="Masukkan nama Username.">
                                        </div>
                                        <div class="form-group">
                                            <label for="PASSWORD">Password</label>
                                            <input type="password" class="form-control form-control-user" id="PASSWORD" name="PASSWORD" placeholder="Masukkan Password.">
                                        </div>
                                        <div class="form-group">
                                            <label for="NAMA_LENGKAP">Nama Lengkap</label>
                                            <input type="text" class="form-control form-control-user" id="NAMA_LENGKAP" name="NAMA_LENGKAP" placeholder="Masukkan Nama Lengkap.">
                                        </div>
                                        <div class="form-group">
                                            <label for="EMAIL">Email</label>
                                            <input type="text" class="form-control form-control-user" id="EMAIL" name="EMAIL" placeholder="Masukkan Email.">
                                        </div>
                                        <div class="form-group">
                                            <label for="GRUP_ID">Level Grup</label>
                                            <select class="form-control" id="GRUP_ID" name="GRUP_ID">
                                                <?php
                                                foreach ($namaGrup as $data2) : ?>
                                                    <option value="<?= $data2['GRUP_ID']; ?>"><?= $data2['GRUP_NAMA']; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
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
                <td> <button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-warning" data-toggle="modal" data-target="#update<?= $data['USER_ID']; ?>">Update</button>
                    <div class="modal fade" id="update<?= $data['USER_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('user/updateAct') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="USERNAME">Username</label>
                                            <input type="text" class="form-control form-control-user" id="USERNAME" name="USERNAME" placeholder="Masukkan Username." value="<?= $data['USERNAME']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="PASSWORD">Password</label>
                                            <input type="password" class="form-control form-control-user" id="PASSWORD" name="PASSWORD" placeholder="Masukkan Password." value="<?= $data['PASSWORD']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="NAMA_LENGKAP">Nama Lengkap</label>
                                            <input type="text" class="form-control form-control-user" id="NAMA_LENGKAP" name="NAMA_LENGKAP" placeholder="Masukkan Nama Lengkap." value="<?= $data['NAMA_LENGKAP']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="EMAIL">Email</label>
                                            <input type="text" class="form-control form-control-user" id="EMAIL" name="EMAIL" placeholder="Masukkan Email." value="<?= $data['EMAIL']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="GRUP_ID">Level Grup</label>
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
                                            <input type="hidden" class="form-control invisible" id="DATE_CREATE" name="DATE_CREATE" value="<?= $data['DATE_CREATE']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control invisible" id="USER_ID" name="USER_ID" value="<?= $data['USER_ID']; ?>">
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
                <td><button type="button" id="deleteBtn" name="deleteBtn" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete<?= $data['USER_ID']; ?>">Delete</button>
                    <div class="modal fade" id="delete<?= $data['USER_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Delete Data User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('user/deleteAct') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        Anda yakin untuk menghapus data?
                                    </div>
                                    <div class="form-user">
                                        <input type="hidden" class="form-control invisible" id="USER_ID" name="USER_ID" value="<?= $data['USER_ID']; ?>">
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

</body>