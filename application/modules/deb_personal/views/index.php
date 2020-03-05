<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Menu Personal</h6>
        </div>
        <div class="card-header py-3">
            <div class="text-danger m-0 font-weight-bold text-primary"><button type="button" id="createBtn" name="createBtn" class="btn btn-danger btn-lg btn createBtn mb-2" data-toggle="modal" data-target="#create"> <i class="fa fa-plus-square fa-1x"></i> </button> Tambah Data</div>
        </div>
        <div class="card-body">
            <table id="dataTableDeb_personal" class="table table-hover table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NO_DEB</th>
                        <th scope="col">NO_IDENTITAS</th>
                        <th scope="col">TGL_IDENTITAS</th>
                        <th scope="col">KD_NEGARA</th>
                        <th scope="col">TEMPAT_LAHIR</th>
                        <th scope="col">TGL_LAHIR</th>
                        <th scope="col">KD_KELAMIN</th>
                        <th scope="col">KD_AGAMA</th>
                        <th scope="col">KET_AGAMA</th>
                        <th scope="col">KD_STS_KAWIN</th>
                        <th scope="col">KD_PENDIDIKAN</th>
                        <th scope="col">KET_PENDIDIKAN</th>
                        <th scope="col">KD_PENDUDUK</th>
                        <th scope="col">KD_PEKERJAAN</th>
                        <th scope="col">KET_PEKERJAAN</th>
                        <th scope="col">ALMT_IDENTITAS</th>
                        <th scope="col">KELURAHAN_IDENTITAS</th>
                        <th scope="col">KECAMATAN_IDENTITAS</th>
                        <th scope="col">KOTA_IDENTITAS</th>
                        <th scope="col">PROVINSI_IDENTITAS</th>
                        <th scope="col">NO_TELP_IDENTITAS</th>
                        <th scope="col">RT_IDENTITAS</th>
                        <th scope="col">RW_IDENTITAS</th>
                        <th scope="col">KD_POS_IDENTITAS</th>
                        <th scope="col">ALMT_TINGGAL</th>
                        <th scope="col">KELURAHAN_TINGGAL</th>
                        <th scope="col">KECAMATAN_TINGGAL</th>
                        <th scope="col">KOTA_TINGGAL</th>
                        <th scope="col">PROVINSI_TINGGAL</th>
                        <th scope="col">RT_TINGGAL</th>
                        <th scope="col">RW_TINGGAL</th>
                        <th scope="col">KD_POS_TINGGAL</th>
                        <th scope="col">NO_TELP_TINGGAL</th>
                        <th scope="col">TGL_MULAI_TINGGAL</th>
                        <th scope="col">KD_STS_TINGGAL</th>
                        <th scope="col">KD_PENGHASILAN</th>
                        <th scope="col">KD_PENGHASILAN_LAIN</th>
                        <th scope="col">NAMA_PASUTRI</th>
                        <th scope="col">KD_PEKERJAAN_PASUTRI</th>
                        <th scope="col">KET_PEKERJAAN_PASUTRI</th>
                        <th scope="col">KD_PENGHASILAN_PASUTRI</th>
                        <th scope="col">NAMA_IBU_KANDUNG</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Entri Data Personal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('deb_personal/createAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="NO_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="NO_IDENTITAS" name="NO_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('NO_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="TGL_IDENTITAS" name="TGL_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('TGL_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_NEGARA">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_NEGARA" name="KD_NEGARA" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KD_NEGARA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TEMPAT_LAHIR">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="TEMPAT_LAHIR" name="TEMPAT_LAHIR" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('TEMPAT_LAHIR', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_LAHIR">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="TGL_LAHIR" name="TGL_LAHIR" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('TGL_LAHIR', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_KELAMIN">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_KELAMIN" name="KD_KELAMIN" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KD_KELAMIN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_AGAMA">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_AGAMA" name="KD_AGAMA" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KD_AGAMA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_AGAMA">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KET_AGAMA" name="KET_AGAMA" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KET_AGAMA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_STS_KAWIN">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_STS_KAWIN" name="KD_STS_KAWIN" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KD_STS_KAWIN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENDIDIKAN">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_PENDIDIKAN" name="KD_PENDIDIKAN" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KD_PENDIDIKAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_PENDIDIKAN">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KET_PENDIDIKAN" name="KET_PENDIDIKAN" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KET_PENDIDIKAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENDUDUK">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_PENDUDUK" name="KD_PENDUDUK" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KD_PENDUDUK', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PEKERJAAN">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_PEKERJAAN" name="KD_PEKERJAAN" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KD_PEKERJAAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_PEKERJAAN">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KET_PEKERJAAN" name="KET_PEKERJAAN" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KET_PEKERJAAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ALMT_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="ALMT_IDENTITAS" name="ALMT_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('ALMT_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KELURAHAN_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KELURAHAN_IDENTITAS" name="KELURAHAN_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KELURAHAN_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KECAMATAN_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KECAMATAN_IDENTITAS" name="KECAMATAN_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KECAMATAN_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KOTA_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KOTA_IDENTITAS" name="KOTA_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KOTA_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PROVINSI_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="PROVINSI_IDENTITAS" name="PROVINSI_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('PROVINSI_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TELP_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="NO_TELP_IDENTITAS" name="NO_TELP_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('NO_TELP_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RT_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="RT_IDENTITAS" name="RT_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('RT_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RW_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="RW_IDENTITAS" name="RW_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('RW_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_POS_IDENTITAS">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_POS_IDENTITAS" name="KD_POS_IDENTITAS" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KD_POS_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ALMT_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="ALMT_TINGGAL" name="ALMT_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('ALMT_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KELURAHAN_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KELURAHAN_TINGGAL" name="KELURAHAN_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KELURAHAN_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KECAMATAN_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KECAMATAN_TINGGAL" name="KECAMATAN_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KECAMATAN_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KOTA_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KOTA_TINGGAL" name="KOTA_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KOTA_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PROVINSI_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="PROVINSI_TINGGAL" name="PROVINSI_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('PROVINSI_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RT_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="RT_TINGGAL" name="RT_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('RT_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RW_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="RW_TINGGAL" name="RW_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('RW_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_POS_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_POS_TINGGAL" name="KD_POS_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('KD_POS_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TELP_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="NO_TELP_TINGGAL" name="NO_TELP_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('NO_TELP_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_MULAI_TINGGAL">Sistem nama</label>
                            <input type="text" class="form-control form-control-sistem" id="TGL_MULAI_TINGGAL" name="TGL_MULAI_TINGGAL" placeholder="Masukkan Sistem Nama.">
                            <?= form_error('TGL_MULAI_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="KD_STS_TINGGAL">Sistem Deskripsi</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_STS_TINGGAL" name="KD_STS_TINGGAL" placeholder="Masukkan Sistem Deskripsi.">
                            <?= form_error('KD_STS_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENGHASILAN">Sistem Versi</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_PENGHASILAN" name="KD_PENGHASILAN" placeholder="Masukkan Sistem Versi.">
                            <?= form_error('KD_PENGHASILAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENGHASILAN_LAIN">Sistem Versi</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_PENGHASILAN_LAIN" name="KD_PENGHASILAN_LAIN" placeholder="Masukkan Sistem Versi.">
                            <?= form_error('KD_PENGHASILAN_LAIN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_PASUTRI">Sistem Versi</label>
                            <input type="text" class="form-control form-control-sistem" id="NAMA_PASUTRI" name="NAMA_PASUTRI" placeholder="Masukkan Sistem Versi.">
                            <?= form_error('NAMA_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PEKERJAAN_PASUTRI">Sistem Versi</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_PEKERJAAN_PASUTRI" name="KD_PEKERJAAN_PASUTRI" placeholder="Masukkan Sistem Versi.">
                            <?= form_error('KD_PEKERJAAN_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_PEKERJAAN_PASUTRI">Sistem Versi</label>
                            <input type="text" class="form-control form-control-sistem" id="KET_PEKERJAAN_PASUTRI" name="KET_PEKERJAAN_PASUTRI" placeholder="Masukkan Sistem Versi.">
                            <?= form_error('KET_PEKERJAAN_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENGHASILAN_PASUTRI">Sistem Versi</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_PENGHASILAN_PASUTRI" name="KD_PENGHASILAN_PASUTRI" placeholder="Masukkan Sistem Versi.">
                            <?= form_error('KD_PENGHASILAN_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_IBU_KANDUNG">Sistem Versi</label>
                            <input type="text" class="form-control form-control-sistem" id="NAMA_IBU_KANDUNG" name="NAMA_IBU_KANDUNG" placeholder="Masukkan Sistem Versi.">
                            <?= form_error('NAMA_IBU_KANDUNG', '<small class="text-danger pl-3">', '</small>') ?>
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
    <?php foreach ($deb_personal as $data) : ?>
    <div class="modal fade" id="update<?= $data['NO_DEB']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <input type="hidden" class="form-control invisible" id="NO_DEB" name="NO_DEB" value="<?= $data['NO_DEB']; ?>">
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
    <div class="modal fade" id="delete<?= $data['NO_DEB']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Data Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('deb_personal/deleteAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        Anda yakin untuk menghapus data?
                    </div>
                    <div class="form-deb_personal">
                        <input type="hidden" class="form-control invisible" id="NO_DEB" name="NO_DEB" value="<?= $data['NO_DEB']; ?>">
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