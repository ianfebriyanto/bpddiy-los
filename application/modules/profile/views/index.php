<div class="card shadow mb-3 border-0">
    <div class="card-body">
        <img class="float-right" src="<?= base_url('assets/'); ?>images/personal.png" class="img-fluid" style="max-width: 15%; height: auto;">
        <h5 class="mb-2 font-weight-bold text-primary under">Profile</h5>
        <p class="mb-0 text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
    </div>
</div>
<div class="card shadow mb-4 border-0">
    <div class=" card-body">
        <?php foreach ($profile as $data) : ?>
            <table class="table table-borderless text-primary">
                <tbody>
                    <tr>
                        <td class="font-weight-bold">User Profile</td>
                        <td class="float-right"><button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#update<?= $data['USER_ID']; ?>">Edit Profile</button>
                            <button type="button" id="updateBtn" name="updateBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#password<?= $data['USER_ID']; ?>">Ubah Password</button></td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Lengkap</th>
                        <td><?= $data['NAMA_LENGKAP']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Username</th>
                        <td><?= $data['USERNAME']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td><?= $data['EMAIL']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Level Group</th>
                        <td><?= $this->session->userdata('GRUP_NAMA'); ?></td>
                    </tr>

                </tbody>
            </table>

            <div class="modal fade" id="update<?= $data['USER_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Data User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('profile/updateAct') ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="USERNAME">Username</label>
                                    <input type="text" class="form-control form-control-user" id="USERNAME" name="USERNAMEu" placeholder="Masukkan Username." value="<?= $data['USERNAME']; ?>">
                                    <?= form_error('USERNAMEu', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="NAMA_LENGKAP">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-user" id="NAMA_LENGKAP" name="NAMA_LENGKAPu" placeholder="Masukkan Nama Lengkap." value="<?= $data['NAMA_LENGKAP']; ?>">
                                    <?= form_error('NAMA_LENGKAPu', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="EMAIL">Email</label>
                                    <input type="text" class="form-control form-control-user" id="EMAIL" name="EMAILu" placeholder="Masukkan Email." value="<?= $data['EMAIL']; ?>">
                                    <?= form_error('EMAILu', '<small class="text-danger pl-3">', '</small>') ?>
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
            <div class="modal fade" id="password<?= $data['USER_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Ubah Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('profile/updateAct') ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="PASSWORD">Password Lama</label>
                                    <input type="password" class="form-control form-control-user" id="PASSWORD" name="PASSWORDu" placeholder="Masukkan Password." value="<?= $data['PASSWORD']; ?>">
                                    <?= form_error('PASSWORDu', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="PASSWORD">Password Baru</label>
                                    <input type="password" class="form-control form-control-user" id="PASSWORD" name="PASSWORDu" placeholder="Masukkan Password." value="<?= $data['PASSWORD']; ?>">
                                    <?= form_error('PASSWORDu', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="PASSWORD">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control form-control-user" id="PASSWORD" name="PASSWORDu" placeholder="Masukkan Password." value="<?= $data['PASSWORD']; ?>">
                                    <?= form_error('PASSWORDu', '<small class="text-danger pl-3">', '</small>') ?>
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
        <?php endforeach; ?>
    </div>
</div>