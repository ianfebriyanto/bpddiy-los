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
                        <th scope="col">No Deb</th>
                        <th scope="col">No Identitas</th>
                        <th scope="col">Tgl Identitas</th>
                        <th scope="col">Kd Negara</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tgl Lahir</th>
                        <th scope="col">Kd Kelamin</th>
                        <th scope="col">Kd Agama</th>
                        <th scope="col">Ket Agama</th>
                        <th scope="col">Kd Sts Kawin</th>
                        <th scope="col">Kd Pendidikan</th>
                        <th scope="col">Ket Pendidikan</th>
                        <th scope="col">Kd Penduduk</th>
                        <th scope="col">Kd Pekerjaan</th>
                        <th scope="col">Ket Pekerjaan</th>
                        <th scope="col">Almt Identitas</th>
                        <th scope="col">Kelurahan Identitas</th>
                        <th scope="col">Kecamatan Identitas</th>
                        <th scope="col">Kota Identitas</th>
                        <th scope="col">Provinsi Identitas</th>
                        <th scope="col">No Telp Identitas</th>
                        <th scope="col">Rt Identitas</th>
                        <th scope="col">Rw Identitas</th>
                        <th scope="col">Kd Pos Identitas</th>
                        <th scope="col">Almt Tinggal</th>
                        <th scope="col">Kelurahan Tinggal</th>
                        <th scope="col">Kecamatan Tinggal</th>
                        <th scope="col">Kota Tinggal</th>
                        <th scope="col">Provinsi Tinggal</th>
                        <th scope="col">Rt Tinggal</th>
                        <th scope="col">RW Tinggal</th>
                        <th scope="col">Kd Pos Tinggal</th>
                        <th scope="col">No Telp Tinggal</th>
                        <th scope="col">Tgl Mulai Tinggal</th>
                        <th scope="col">Kd Sts Tinggal</th>
                        <th scope="col">Kd Penghasilan</th>
                        <th scope="col">Kd Penghasilan lain</th>
                        <th scope="col">Nama Pasutri</th>
                        <th scope="col">Kd Pekerjaan Pasutri</th>
                        <th scope="col">Ket Pekerjaan Pasutri</th>
                        <th scope="col">Kd Penghasilan Pasutri</th>
                        <th scope="col">Nama Ibu Kandung</th>
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
                            <label for="NO_DEB">No Deb</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NO_DEB" name="NO_DEB" placeholder="Masukkan No Deb.">
                            <?= form_error('NO_DEB', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_IDENTITAS">No Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NO_IDENTITAS" name="NO_IDENTITAS" placeholder="Masukkan No Identitas.">
                            <?= form_error('NO_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_IDENTITAS">Tgl Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="TGL_IDENTITAS" name="TGL_IDENTITAS" placeholder="Masukkan Tgl Identitas.">
                            <?= form_error('TGL_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_NEGARA">Kd Negara</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_NEGARA" name="KD_NEGARA" placeholder="Masukkan Kd Negara.">
                            <?= form_error('KD_NEGARA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TEMPAT_LAHIR">Tempat Lahir</label>
                            <input type="text" class="form-control form-control-deb_personal" id="TEMPAT_LAHIR" name="TEMPAT_LAHIR" placeholder="Masukkan Tempat Lahir.">
                            <?= form_error('TEMPAT_LAHIR', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_LAHIR">Tgl lahir</label>
                            <input type="text" class="form-control form-control-deb_personal" id="TGL_LAHIR" name="TGL_LAHIR" placeholder="Masukkan Tgl lahair.">
                            <?= form_error('TGL_LAHIR', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_KELAMIN">Kd Kelamin</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_KELAMIN" name="KD_KELAMIN" placeholder="Masukkan Kd Kelamin.">
                            <?= form_error('KD_KELAMIN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_AGAMA">Kd Agama</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_AGAMA" name="KD_AGAMA" placeholder="Masukkan Kd Agama.">
                            <?= form_error('KD_AGAMA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_AGAMA">Ket Agama</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KET_AGAMA" name="KET_AGAMA" placeholder="Masukkan Ket Agama.">
                            <?= form_error('KET_AGAMA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_STS_KAWIN">Kd Sts Kawin</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_STS_KAWIN" name="KD_STS_KAWIN" placeholder="Masukkan Kd Sts Kawin.">
                            <?= form_error('KD_STS_KAWIN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENDIDIKAN">Kd Pendidikan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENDIDIKAN" name="KD_PENDIDIKAN" placeholder="Masukkan Kd Pendidikan.">
                            <?= form_error('KD_PENDIDIKAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_PENDIDIKAN">Ket Pendidikan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KET_PENDIDIKAN" name="KET_PENDIDIKAN" placeholder="Masukkan Ket Pendidikan.">
                            <?= form_error('KET_PENDIDIKAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENDUDUK">Kd Penduduk</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENDUDUK" name="KD_PENDUDUK" placeholder="Masukkan Kd Penduduk.">
                            <?= form_error('KD_PENDUDUK', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PEKERJAAN">Kd Pekerjaan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PEKERJAAN" name="KD_PEKERJAAN" placeholder="Masukkan Kd Pekerjaan.">
                            <?= form_error('KD_PEKERJAAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_PEKERJAAN">Ket Pekerjaan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KET_PEKERJAAN" name="KET_PEKERJAAN" placeholder="Masukkan Ket Pekerjaan.">
                            <?= form_error('KET_PEKERJAAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ALMT_IDENTITAS">Almt Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="ALMT_IDENTITAS" name="ALMT_IDENTITAS" placeholder="Masukkan Almt Identitas.">
                            <?= form_error('ALMT_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KELURAHAN_IDENTITAS">Kelurahan Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KELURAHAN_IDENTITAS" name="KELURAHAN_IDENTITAS" placeholder="Masukkan Kelurahan Identitas.">
                            <?= form_error('KELURAHAN_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KECAMATAN_IDENTITAS">Kecamatan Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KECAMATAN_IDENTITAS" name="KECAMATAN_IDENTITAS" placeholder="Masukkan Kecamatan Identitas.">
                            <?= form_error('KECAMATAN_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KOTA_IDENTITAS">Kota Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KOTA_IDENTITAS" name="KOTA_IDENTITAS" placeholder="Masukkan Kota Identitas.">
                            <?= form_error('KOTA_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PROVINSI_IDENTITAS">Provinsi Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="PROVINSI_IDENTITAS" name="PROVINSI_IDENTITAS" placeholder="Masukkan Provinsi Identitas.">
                            <?= form_error('PROVINSI_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TELP_IDENTITAS">No Telp Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NO_TELP_IDENTITAS" name="NO_TELP_IDENTITAS" placeholder="Masukkan No Telp Identitas.">
                            <?= form_error('NO_TELP_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RT_IDENTITAS">Rt Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="RT_IDENTITAS" name="RT_IDENTITAS" placeholder="Masukkan Rt Identitas.">
                            <?= form_error('RT_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RW_IDENTITAS">Rw Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="RW_IDENTITAS" name="RW_IDENTITAS" placeholder="Masukkan Rw Identitas.">
                            <?= form_error('RW_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_POS_IDENTITAS">Kd Pos Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_POS_IDENTITAS" name="KD_POS_IDENTITAS" placeholder="Masukkan Kd Pos Identitas.">
                            <?= form_error('KD_POS_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ALMT_TINGGAL">Almt Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="ALMT_TINGGAL" name="ALMT_TINGGAL" placeholder="Masukkan Almt Tinggal.">
                            <?= form_error('ALMT_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KELURAHAN_TINGGAL">Kelurahan Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KELURAHAN_TINGGAL" name="KELURAHAN_TINGGAL" placeholder="Masukkan Kelurahan Tinggal.">
                            <?= form_error('KELURAHAN_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KECAMATAN_TINGGAL">Kecamatan Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KECAMATAN_TINGGAL" name="KECAMATAN_TINGGAL" placeholder="Masukkan Kecamatan Tinggal.">
                            <?= form_error('KECAMATAN_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KOTA_TINGGAL">Kota Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KOTA_TINGGAL" name="KOTA_TINGGAL" placeholder="Masukkan Kota Tinggal.">
                            <?= form_error('KOTA_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PROVINSI_TINGGAL">Provinsi Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="PROVINSI_TINGGAL" name="PROVINSI_TINGGAL" placeholder="Masukkan Provinsi Tinggal.">
                            <?= form_error('PROVINSI_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RT_TINGGAL">Rt Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="RT_TINGGAL" name="RT_TINGGAL" placeholder="Masukkan Rt Tinggal.">
                            <?= form_error('RT_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RW_TINGGAL">Rw Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="RW_TINGGAL" name="RW_TINGGAL" placeholder="Masukkan Rw Tinggal.">
                            <?= form_error('RW_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_POS_TINGGAL">Kd Pos Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_POS_TINGGAL" name="KD_POS_TINGGAL" placeholder="Masukkan Kd Pos Tinggal.">
                            <?= form_error('KD_POS_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TELP_TINGGAL">No Telp Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NO_TELP_TINGGAL" name="NO_TELP_TINGGAL" placeholder="Masukkan No Telp Tinggal.">
                            <?= form_error('NO_TELP_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_MULAI_TINGGAL">Tgl Mulai Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="TGL_MULAI_TINGGAL" name="TGL_MULAI_TINGGAL" placeholder="Masukkan Tgl Mulai Tinggal.">
                            <?= form_error('TGL_MULAI_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="KD_STS_TINGGAL">Kd Sts Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_STS_TINGGAL" name="KD_STS_TINGGAL" placeholder="Masukkan Kd Sts Tinggal.">
                            <?= form_error('KD_STS_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENGHASILAN">Kd Penghasilan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENGHASILAN" name="KD_PENGHASILAN" placeholder="Masukkan Kd Penghasilan.">
                            <?= form_error('KD_PENGHASILAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENGHASILAN_LAIN">Kd Penghasilan Lain</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENGHASILAN_LAIN" name="KD_PENGHASILAN_LAIN" placeholder="Masukkan Kd Penghasilan Lain.">
                            <?= form_error('KD_PENGHASILAN_LAIN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_PASUTRI">Nama Pasutri</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NAMA_PASUTRI" name="NAMA_PASUTRI" placeholder="Masukkan Nama Pasutri.">
                            <?= form_error('NAMA_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PEKERJAAN_PASUTRI">Kd Pekerjaan Pasutri</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PEKERJAAN_PASUTRI" name="KD_PEKERJAAN_PASUTRI" placeholder="Masukkan Kd Pekerjaan Pasutri.">
                            <?= form_error('KD_PEKERJAAN_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_PEKERJAAN_PASUTRI">Ket Pekerjaan Pasutri</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KET_PEKERJAAN_PASUTRI" name="KET_PEKERJAAN_PASUTRI" placeholder="Masukkan Ket Pekerjaan Pasutri.">
                            <?= form_error('KET_PEKERJAAN_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENGHASILAN_PASUTRI">Kd Penghasilan Pasutri</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENGHASILAN_PASUTRI" name="KD_PENGHASILAN_PASUTRI" placeholder="Masukkan Kd Penghasilan Pasutri.">
                            <?= form_error('KD_PENGHASILAN_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_IBU_KANDUNG">Nama Ibu Kandung</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NAMA_IBU_KANDUNG" name="NAMA_IBU_KANDUNG" placeholder="Masukkan Nama Ibu Kandung.">
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
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Personal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('deb_personal/updateAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="NO_DEB">No Deb</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NO_DEB" name="NO_DEB" placeholder="Masukkan No Deb."value="<?= $data['NO_DEB']; ?>">
                            <?= form_error('NO_DEB', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_IDENTITAS">No Identitas</label>
                            <input type="text" class="form-control form-control-deb_perusahaan" id="NO_IDENTITAS" name="NO_IDENTITASu" placeholder="Masukkan NO_IDENTITAS." value="<?= $data['NO_IDENTITAS']; ?>">
                            <?= form_error('NO_IDENTITASu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_IDENTITAS">Tgl Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="TGL_IDENTITAS" name="TGL_IDENTITAS" placeholder="Masukkan Tgl Identitas."value="<?= $data['TGL_IDENTITAS']; ?>">
                            <?= form_error('TGL_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_NEGARA">Kd Negara</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_NEGARA" name="KD_NEGARA" placeholder="Masukkan Kd Negara."value="<?= $data['KD_NEGARA']; ?>">
                            <?= form_error('KD_NEGARA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TEMPAT_LAHIR">Tempat Lahir</label>
                            <input type="text" class="form-control form-control-deb_personal" id="TEMPAT_LAHIR" name="TEMPAT_LAHIR" placeholder="Masukkan Tempat Lahir."value="<?= $data['TEMPAT_LAHIR']; ?>">
                            <?= form_error('TEMPAT_LAHIR', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_LAHIR">Tgl lahair</label>
                            <input type="text" class="form-control form-control-deb_personal" id="TGL_LAHIR" name="TGL_LAHIR" placeholder="Masukkan Tgl lahair."value="<?= $data['TGL_LAHIR']; ?>">
                            <?= form_error('TGL_LAHIR', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_KELAMIN">Kd Kelamin</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_KELAMIN" name="KD_KELAMIN" placeholder="Masukkan Kd Kelamin."value="<?= $data['KD_KELAMIN']; ?>">
                            <?= form_error('KD_KELAMIN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_AGAMA">Kd Agama</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_AGAMA" name="KD_AGAMA" placeholder="Masukkan Kd Agama."value="<?= $data['KD_AGAMA']; ?>">
                            <?= form_error('KD_AGAMA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_AGAMA">Ket Agama</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KET_AGAMA" name="KET_AGAMA" placeholder="Masukkan Ket Agama."value="<?= $data['KET_AGAMA']; ?>">
                            <?= form_error('KET_AGAMA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_STS_KAWIN">Kd Sts Kawin</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_STS_KAWIN" name="KD_STS_KAWIN" placeholder="Masukkan Kd Sts Kawin."value="<?= $data['KD_STS_KAWIN']; ?>">
                            <?= form_error('KD_STS_KAWIN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENDIDIKAN">Kd Pendidikan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENDIDIKAN" name="KD_PENDIDIKAN" placeholder="Masukkan Kd Pendidikan."value="<?= $data['KD_PENDIDIKAN']; ?>">
                            <?= form_error('KD_PENDIDIKAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_PENDIDIKAN">Ket Pendidikan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KET_PENDIDIKAN" name="KET_PENDIDIKAN" placeholder="Masukkan Ket Pendidikan."value="<?= $data['KET_PENDIDIKAN']; ?>">
                            <?= form_error('KET_PENDIDIKAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENDUDUK">Kd Penduduk</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENDUDUK" name="KD_PENDUDUK" placeholder="Masukkan Kd Penduduk."value="<?= $data['KD_PENDUDUK']; ?>">
                            <?= form_error('KD_PENDUDUK', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PEKERJAAN">Kd Pekerjaan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PEKERJAAN" name="KD_PEKERJAAN" placeholder="Masukkan Kd Pekerjaan."value="<?= $data['KD_PEKERJAAN']; ?>">
                            <?= form_error('KD_PEKERJAAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_PEKERJAAN">Ket Pekerjaan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KET_PEKERJAAN" name="KET_PEKERJAAN" placeholder="Masukkan Ket Pekerjaan."value="<?= $data['KET_PEKERJAAN']; ?>">
                            <?= form_error('KET_PEKERJAAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ALMT_IDENTITAS">Almt Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="ALMT_IDENTITAS" name="ALMT_IDENTITAS" placeholder="Masukkan Almt Identitas."value="<?= $data['ALMT_IDENTITAS']; ?>">
                            <?= form_error('ALMT_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KELURAHAN_IDENTITAS">Kelurahan Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KELURAHAN_IDENTITAS" name="KELURAHAN_IDENTITAS" placeholder="Masukkan Kelurahan Identitas."value="<?= $data['KELURAHAN_IDENTITAS']; ?>">
                            <?= form_error('KELURAHAN_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KECAMATAN_IDENTITAS">Kecamatan Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KECAMATAN_IDENTITAS" name="KECAMATAN_IDENTITAS" placeholder="Masukkan Kecamatan Identitas."value="<?= $data['KECAMATAN_IDENTITAS']; ?>">
                            <?= form_error('KECAMATAN_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KOTA_IDENTITAS">Kota Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KOTA_IDENTITAS" name="KOTA_IDENTITAS" placeholder="Masukkan Kota Identitas."value="<?= $data['KOTA_IDENTITAS']; ?>">
                            <?= form_error('KOTA_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PROVINSI_IDENTITAS">Provinsi Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="PROVINSI_IDENTITAS" name="PROVINSI_IDENTITAS" placeholder="Masukkan Provinsi Identitas."value="<?= $data['PROVINSI_IDENTITAS']; ?>">
                            <?= form_error('PROVINSI_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TELP_IDENTITAS">No Telp Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NO_TELP_IDENTITAS" name="NO_TELP_IDENTITAS" placeholder="Masukkan No Telp Identitas."value="<?= $data['NO_TELP_IDENTITAS']; ?>">
                            <?= form_error('NO_TELP_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RT_IDENTITAS">Rt Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="RT_IDENTITAS" name="RT_IDENTITAS" placeholder="Masukkan Rt Identitas."value="<?= $data['RT_IDENTITAS']; ?>">
                            <?= form_error('RT_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RW_IDENTITAS">Rw Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="RW_IDENTITAS" name="RW_IDENTITAS" placeholder="Masukkan Rw Identitas."value="<?= $data['RW_IDENTITAS']; ?>">
                            <?= form_error('RW_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_POS_IDENTITAS">Kd Pos Identitas</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_POS_IDENTITAS" name="KD_POS_IDENTITAS" placeholder="Masukkan Kd Pos Identitas."value="<?= $data['KD_POS_IDENTITAS']; ?>">
                            <?= form_error('KD_POS_IDENTITAS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ALMT_TINGGAL">Almt Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="ALMT_TINGGAL" name="ALMT_TINGGAL" placeholder="Masukkan Almt Tinggal."value="<?= $data['ALMT_TINGGAL']; ?>">
                            <?= form_error('ALMT_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KELURAHAN_TINGGAL">Kelurahan Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KELURAHAN_TINGGAL" name="KELURAHAN_TINGGAL" placeholder="Masukkan Kelurahan Tinggal."value="<?= $data['KELURAHAN_TINGGAL']; ?>">
                            <?= form_error('KELURAHAN_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KECAMATAN_TINGGAL">Kecamatan Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KECAMATAN_TINGGAL" name="KECAMATAN_TINGGAL" placeholder="Masukkan Kecamatan Tinggal."value="<?= $data['KECAMATAN_TINGGAL']; ?>">
                            <?= form_error('KECAMATAN_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KOTA_TINGGAL">Kota Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KOTA_TINGGAL" name="KOTA_TINGGAL" placeholder="Masukkan Kota Tinggal."value="<?= $data['KOTA_TINGGAL']; ?>">
                            <?= form_error('KOTA_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PROVINSI_TINGGAL">Provinsi Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="PROVINSI_TINGGAL" name="PROVINSI_TINGGAL" placeholder="Masukkan Provinsi Tinggal."value="<?= $data['PROVINSI_TINGGAL']; ?>">
                            <?= form_error('PROVINSI_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RT_TINGGAL">Rt Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="RT_TINGGAL" name="RT_TINGGAL" placeholder="Masukkan Rt Tinggal."value="<?= $data['RT_TINGGAL']; ?>">
                            <?= form_error('RT_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RW_TINGGAL">Rw Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="RW_TINGGAL" name="RW_TINGGAL" placeholder="Masukkan Rw Tinggal."value="<?= $data['RW_TINGGAL']; ?>">
                            <?= form_error('RW_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_POS_TINGGAL">Kd Pos Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_POS_TINGGAL" name="KD_POS_TINGGAL" placeholder="Masukkan Kd Pos Tinggal."value="<?= $data['KD_POS_TINGGAL']; ?>">
                            <?= form_error('KD_POS_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TELP_TINGGAL">No Telp Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NO_TELP_TINGGAL" name="NO_TELP_TINGGAL" placeholder="Masukkan No Telp Tinggal."value="<?= $data['NO_TELP_TINGGAL']; ?>">
                            <?= form_error('NO_TELP_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_MULAI_TINGGAL">Tgl Mulai Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="TGL_MULAI_TINGGAL" name="TGL_MULAI_TINGGAL" placeholder="Masukkan Tgl Mulai Tinggal."value="<?= $data['TGL_MULAI_TINGGAL']; ?>">
                            <?= form_error('TGL_MULAI_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="KD_STS_TINGGAL">Kd Sts Tinggal</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_STS_TINGGAL" name="KD_STS_TINGGAL" placeholder="Masukkan Kd Sts Tinggal."value="<?= $data['KD_STS_TINGGAL']; ?>">
                            <?= form_error('KD_STS_TINGGAL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENGHASILAN">Kd Penghasilan</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENGHASILAN" name="KD_PENGHASILAN" placeholder="Masukkan Kd Penghasilan."value="<?= $data['KD_PENGHASILAN']; ?>">
                            <?= form_error('KD_PENGHASILAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENGHASILAN_LAIN">Kd Penghasilan Lain</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENGHASILAN_LAIN" name="KD_PENGHASILAN_LAIN" placeholder="Masukkan Kd Penghasilan Lain."value="<?= $data['KD_PENGHASILAN_LAIN']; ?>">
                            <?= form_error('KD_PENGHASILAN_LAIN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_PASUTRI">Nama Pasutri</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NAMA_PASUTRI" name="NAMA_PASUTRI" placeholder="Masukkan Nama Pasutri."value="<?= $data['NAMA_PASUTRI']; ?>">
                            <?= form_error('NAMA_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PEKERJAAN_PASUTRI">Kd Pekerjaan Pasutri</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PEKERJAAN_PASUTRI" name="KD_PEKERJAAN_PASUTRI" placeholder="Masukkan Kd Pekerjaan Pasutri."value="<?= $data['KD_PEKERJAAN_PASUTRI']; ?>">
                            <?= form_error('KD_PEKERJAAN_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KET_PEKERJAAN_PASUTRI">Ket Pekerjaan Pasutri</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KET_PEKERJAAN_PASUTRI" name="KET_PEKERJAAN_PASUTRI" placeholder="Masukkan Ket Pekerjaan Pasutri."value="<?= $data['KET_PEKERJAAN_PASUTRI']; ?>">
                            <?= form_error('KET_PEKERJAAN_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_PENGHASILAN_PASUTRI">Kd Penghasilan Pasutri</label>
                            <input type="text" class="form-control form-control-deb_personal" id="KD_PENGHASILAN_PASUTRI" name="KD_PENGHASILAN_PASUTRI" placeholder="Masukkan Kd Penghasilan Pasutri."value="<?= $data['KD_PENGHASILAN_PASUTRI']; ?>">
                            <?= form_error('KD_PENGHASILAN_PASUTRI', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_IBU_KANDUNG">Nama Ibu Kandung</label>
                            <input type="text" class="form-control form-control-deb_personal" id="NAMA_IBU_KANDUNG" name="NAMA_IBU_KANDUNG" placeholder="Masukkan Nama Ibu Kandung."value="<?= $data['NAMA_IBU_KANDUNG']; ?>">
                            <?= form_error('NAMA_IBU_KANDUNG', '<small class="text-danger pl-3">', '</small>') ?>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Data Personal</h5>
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