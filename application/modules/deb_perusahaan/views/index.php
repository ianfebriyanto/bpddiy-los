<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menu Debitur Perusahaan</h6>
    </div>
    <div class="card-header py-3">
        <a href="<?= base_url('pengajuan/perusahaan') ?>"><button type="button" id="createBtn" name="createBtn" class="btn btn-info btn-md btn createBtn mb-2"> <i class="fa fa-plus-square fa-1x"></i> Tambah Debitur Perusahaan</button></a>
    </div>
    <div class="card-body">
        <table id="dataTableDeb_perusahaan" class="table table-hover table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Deb</th>
                    <th scope="col">Nama Pimpinan</th>
                    <th scope="col">Alamat Situs Perusahaan</th>
                    <th scope="col">Email Perusahaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Entri Data Deb Perusahaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Deb_perusahaan/createAct') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="NO_DEB">No Deb</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_DEB" name="NO_DEB" placeholder="Masukkan NO_DEB.">
                        <?= form_error('NO_DEB', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NO_AKTE_PENDIRIAN">No Akte Pendirian</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_AKTE_PENDIRIAN" name="NO_AKTE_PENDIRIAN" placeholder="Masukkan No Akte Pendirian.">
                        <?= form_error('NO_AKTE_PENDIRIAN', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AKTE_PENDIRIAN">Tgl Akte Pendirian</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKTE_PENDIRIAN" name="TGL_AKTE_PENDIRIAN" placeholder="Masukkan Tgl Akte Pendirian.">
                        <?= form_error('TGL_AKTE_PENDIRIAN', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NO_AKTE_PERUBAHAN">No Akte Perubahan </label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_AKTE_PERUBAHAN" name="NO_AKTE_PERUBAHAN" placeholder="Masukkan No Akte Perubahan.">
                        <?= form_error('NO_AKTE_PERUBAHAN', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AKTE_PERUBAHAN">Tgl Akte Perubahan </label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKTE_PERUBAHAN" name="TGL_AKTE_PERUBAHAN" placeholder="Masukkan Tgl Akte Perubahan.">
                        <?= form_error('TGL_AKTE_PERUBAHAN', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NO_AKTE_PENGESAHAN">No Akte Pengesahan</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_AKTE_PENGESAHAN" name="NO_AKTE_PENGESAHAN" placeholder="Masukkan level.">
                        <?= form_error('NO_AKTE_PENGESAHAN', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AKTE_PENGESAHAN">Tgl Akte Pengesahan</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKTE_PENGESAHAN" name="TGL_AKTE_PENGESAHAN" placeholder="Masukkan level.">
                        <?= form_error('TGL_AKTE_PENGESAHAN', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NAMA_NOTARIS">Nama Notaris</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NAMA_NOTARIS" name="NAMA_NOTARIS" placeholder="Masukkan NAMA_NOTARIS.">
                        <?= form_error('NAMA_NOTARIS', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NO_ADPT">No Adpt</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_ADPT" name="NO_ADPT" placeholder="Masukkan NO_ADPT.">
                        <?= form_error('NO_ADPT', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_ADPT">Tgl Adpt</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_ADPT" name="TGL_ADPT" placeholder="Masukkan TGL_ADPT.">
                        <?= form_error('TGL_ADPTx', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NO_SIUP">No Siup</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_SIUP" name="NO_SIUP" placeholder="Masukkan NO_SIUP.">
                        <?= form_error('NO_SIUP', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_MULAI_SIUP">Tgl Mulai Siup</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_MULAI_SIUP" name="TGL_MULAI_SIUP" placeholder="Masukkan TGL_MULAI_SIUP.">
                        <?= form_error('TGL_MULAI_SIUP', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AKHIR_SIUP">Tgl Akhir Siup</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_SIUP" name="TGL_AKHIR_SIUP" placeholder="Masukkan TGL_AKHIR_SIUP.">
                        <?= form_error('TGL_AKHIR_SIUP', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="PENERBIT_SIUP">Penerbit Siup</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_SIUP" name="PENERBIT_SIUP" placeholder="Masukkan PENERBIT_SIUP.">
                        <?= form_error('PENERBIT_SIUP', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NO_HO">No Ho</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_HO" name="NO_HO" placeholder="Masukkan NO_HO.">
                        <?= form_error('NO_HO', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AWAL_HO">Tgl Awal Ho</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AWAL_HO" name="TGL_AWAL_HO" placeholder="Masukkan TGL_AWAL_HO.">
                        <?= form_error('TGL_AWAL_HO', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AKHIR_HO">Tgl Akhir Ho</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_HO" name="TGL_AKHIR_HO" placeholder="Masukkan TGL_AKHIR_HO.">
                        <?= form_error('TGL_AKHIR_HO', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="PENERBIT_HO">Penerbit Ho</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_HO" name="PENERBIT_HO" placeholder="Masukkan PENERBIT_HO.">
                        <?= form_error('PENERBIT_HO', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NO_TDP">No Tdp</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_TDP" name="NO_TDP" placeholder="Masukkan NO_TDP.">
                        <?= form_error('NO_TDP', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AWAL_TDP">Tgl Awal Tdp</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AWAL_TDP" name="TGL_AWAL_TDP" placeholder="Masukkan TGL_AWAL_TDP.">
                        <?= form_error('TGL_AWAL_TDP', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AKHIR_TDP">Tgl Akhir Tdp</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_TDP" name="TGL_AKHIR_TDP" placeholder="Masukkan TGL_AKHIR_TDP.">
                        <?= form_error('TGL_AKHIR_TDP', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="PENERBIT_TDP">Penerbit Tdp</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_TDP" name="PENERBIT_TDP" placeholder="Masukkan PENERBIT_TDP.">
                        <?= form_error('PENERBIT_TDP', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NO_TDR">No Tdr</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_TDR" name="NO_TDR" placeholder="Masukkan NO_TDR.">
                        <?= form_error('NO_TDR', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AWAL_TDR">Tgl Awal Tdr</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AWAL_TDR" name="TGL_AWAL_TDR" placeholder="Masukkan TGL_AWAL_TDR.">
                        <?= form_error('TGL_AWAL_TDR', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AKHIR_TDR">Tgl Akhir Tdr</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_TDR" name="TGL_AKHIR_TDR" placeholder="Masukkan TGL_AKHIR_TDR.">
                        <?= form_error('TGL_AKHIR_TDR', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="PENERBIT_TDR">Penerbit Tdr</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_TDR" name="PENERBIT_TDR" placeholder="Masukkan PENERBIT_TDR.">
                        <?= form_error('PENERBIT_TDR', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NO_SIUJK">No Siujk</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_SIUJK" name="NO_SIUJK" placeholder="Masukkan NO_SIUJK.">
                        <?= form_error('NO_SIUJK', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AWAL_SIUJK">Tgl Awal Siujk</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AWAL_SIUJK" name="TGL_AWAL_SIUJK" placeholder="Masukkan TGL_AWAL_SIUJK.">
                        <?= form_error('TGL_AWAL_SIUJK', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="TGL_AKHIR_SIUJK">Tgl Akhir Siujk</label>
                        <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_SIUJK" name="TGL_AKHIR_SIUJK" placeholder="Masukkan TGL_AKHIR_SIUJK.">
                        <?= form_error('TGL_AKHIR_SIUJK', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="PENERBIT_SIUJK">Penerbit Siujk</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_SIUJK" name="PENERBIT_SIUJK" placeholder="Masukkan PENERBIT_SIUJK.">
                        <?= form_error('PENERBIT_SIUJK', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="KD_STS_HUKUM">Kd Sts Hukum</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="KD_STS_HUKUM" name="KD_STS_HUKUM" placeholder="Masukkan KD_STS_HUKUM.">
                        <?= form_error('KD_STS_HUKUM', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="NAMA_PIMPINAN">Nama Pimpinan</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="NAMA_PIMPINAN" name="NAMA_PIMPINAN" placeholder="Masukkan NAMA_PIMPINAN.">
                        <?= form_error('NAMA_PIMPINAN', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="ALMT_SITUS_PERUSAHAAN">Almt Situs Perusahaan</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="ALMT_SITUS_PERUSAHAAN" name="ALMT_SITUS_PERUSAHAAN" placeholder="Masukkan ALMT_SITUS_PERUSAHAAN.">
                        <?= form_error('ALMT_SITUS_PERUSAHAAN', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="EMAIL_PERUSAHAAN">Email Perusahaan</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="EMAIL_PERUSAHAAN" name="EMAIL_PERUSAHAAN" placeholder="Masukkan EMAIL_PERUSAHAAN.">
                        <?= form_error('EMAIL_PERUSAHAAN', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="KD_BID_USAHA">Kd Bid Usaha</label>
                        <input type="text" class="form-control form-control-Deb_perusahaan" id="KD_BID_USAHA" name="KD_BID_USAHA" placeholder="Masukkan KD_BID_USAHA.">
                        <?= form_error('KD_BID_USAHA', '<small class="text-danger pl-3">', '</small>') ?>
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
<?php foreach ($Deb_perusahaan as $data) : ?>
    <div class="modal fade" id="update<?= $data['NO_DEB']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Debitur Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('Deb_perusahaan/updateAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="NO_AKTE_PENDIRIAN">No Akte Perndirian</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_AKTE_PENDIRIAN" name="NO_AKTE_PENDIRIANu" placeholder="Masukkan NO_AKTE_PENDIRIAN." value="<?= $data['NO_AKTE_PENDIRIAN']; ?>">
                            <?= form_error('NO_AKTE_PENDIRIANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AKTE_PENDIRIAN">Tgl Akte Pendirian</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKTE_PENDIRIAN" name="TGL_AKTE_PENDIRIANu" placeholder="Masukkan TGL_AKTE_PENDIRIAN." value="<?= $data['TGL_AKTE_PENDIRIAN']; ?>">
                            <?= form_error('TGL_AKTE_PENDIRIANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_AKTE_PERUBAHAN">No Akte Perubahan</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_AKTE_PERUBAHAN" name="NO_AKTE_PERUBAHANu" placeholder="Masukkan Name." value="<?= $data['NO_AKTE_PERUBAHAN']; ?>">
                            <?= form_error('NO_AKTE_PERUBAHANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AKTE_PERUBAHAN">Tgl Akte Perubahan </label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKTE_PERUBAHAN" name="TGL_AKTE_PERUBAHANu" placeholder="Masukkan Status." value="<?= $data['TGL_AKTE_PERUBAHAN']; ?>">
                            <?= form_error('TGL_AKTE_PERUBAHANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_AKTE_PENGESAHAN">No Akte Pengesahan</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_AKTE_PENGESAHAN" name="NO_AKTE_PENGESAHANu" placeholder="Masukkan NO_AKTE_PENGESAHAN." value="<?= $data['NO_AKTE_PENGESAHAN']; ?>">
                            <?= form_error('NO_AKTE_PENGESAHANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AKTE_PENGESAHAN">Tgl Akte Pengesahan</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKTE_PENGESAHAN" name="TGL_AKTE_PENGESAHANu" placeholder="Masukkan TGL_AKTE_PENGESAHAN." value="<?= $data['TGL_AKTE_PENGESAHAN']; ?>">
                            <?= form_error('TGL_AKTE_PENGESAHANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_NOTARIS">Nama Notaris</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NAMA_NOTARIS" name="NAMA_NOTARISu" placeholder="Masukkan NAMA_NOTARIS." value="<?= $data['NAMA_NOTARIS']; ?>">
                            <?= form_error('NAMA_NOTARISu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_ADPT">No Adpt</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_ADPT" name="NO_ADPTu" placeholder="Masukkan NO_ADPT." value="<?= $data['NO_ADPT']; ?>">
                            <?= form_error('NO_ADPTu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_ADPT">Tgl Adpt</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_ADPT" name="TGL_ADPTu" placeholder="Masukkan TGL_ADPT." value="<?= $data['TGL_ADPT']; ?>">
                            <?= form_error('TGL_ADPTu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_SIUP">No Siup</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_SIUP" name="NO_SIUPu" placeholder="Masukkan NO_SIUP." value="<?= $data['NO_SIUP']; ?>">
                            <?= form_error('NO_SIUPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="TGL_MULAI_SIUP">Tgl Mulai Siup</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_MULAI_SIUP" name="TGL_MULAI_SIUPu" placeholder="Masukkan TGL_MULAI_SIUP." value="<?= $data['TGL_MULAI_SIUP']; ?>">
                            <?= form_error('TGL_MULAI_SIUPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AKHIR_SIUP">Tgl Akhir Siup</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_SIUP" name="TGL_AKHIR_SIUPu" placeholder="Masukkan TGL_AKHIR_SIUP." value="<?= $data['TGL_AKHIR_SIUP']; ?>">
                            <?= form_error('TGL_AKHIR_SIUPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PENERBIT_SIUP">Penerbit Siup</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_SIUP" name="PENERBIT_SIUPu" placeholder="Masukkan PENERBIT_SIUP." value="<?= $data['PENERBIT_SIUP']; ?>">
                            <?= form_error('PENERBIT_SIUPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_HO">No Ho</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_HO" name="NO_HOu" placeholder="Masukkan NO_HO." value="<?= $data['NO_HO']; ?>">
                            <?= form_error('NO_HOu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AWAL_HO">Tgl Awal Ho</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AWAL_HO" name="TGL_AWAL_HOu" placeholder="Masukkan TGL_AWAL_HO." value="<?= $data['TGL_AWAL_HO']; ?>">
                            <?= form_error('TGL_AWAL_HOu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AKHIR_HO">Tgl Akhir Ho</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_HO" name="TGL_AKHIR_HOu" placeholder="Masukkan TGL_AKHIR_HO." value="<?= $data['TGL_AKHIR_HO']; ?>">
                            <?= form_error('TGL_AKHIR_HOu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PENERBIT_HO">Penerbit Ho</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_HO" name="PENERBIT_HOu" placeholder="Masukkan PENERBIT_HO." value="<?= $data['PENERBIT_HO']; ?>">
                            <?= form_error('PENERBIT_HOu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TDP">No Tdp</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_TDP" name="NO_TDPu" placeholder="Masukkan NO_TDP." value="<?= $data['NO_TDP']; ?>">
                            <?= form_error('NO_TDPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AWAL_TDP">Tgl Awal Tdp</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AWAL_TDP" name="TGL_AWAL_TDPu" placeholder="Masukkan TGL_AWAL_TDP." value="<?= $data['TGL_AWAL_TDP']; ?>">
                            <?= form_error('TGL_AWAL_TDPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AKHIR_TDP">Tgl Akhir Tdp</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_TDP" name="TGL_AKHIR_TDPu" placeholder="Masukkan TGL_AKHIR_TDP." value="<?= $data['TGL_AKHIR_TDP']; ?>">
                            <?= form_error('TGL_AKHIR_TDPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PENERBIT_TDP">Penerbit Tdp</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_TDP" name="PENERBIT_TDPu" placeholder="Masukkan PENERBIT_TDP." value="<?= $data['PENERBIT_TDP']; ?>">
                            <?= form_error('PENERBIT_TDPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TDR">No Tdr</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_TDR" name="NO_TDRu" placeholder="Masukkan NO_TDR." value="<?= $data['NO_TDR']; ?>">
                            <?= form_error('NO_TDRu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AWAL_TDR">Tgl Awal Tdr</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AWAL_TDR" name="TGL_AWAL_TDRu" placeholder="Masukkan TGL_AWAL_TDR." value="<?= $data['TGL_AWAL_TDR']; ?>">
                            <?= form_error('TGL_AWAL_TDRu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AKHIR_TDR">Tgl Akhir Tdr</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_TDR" name="TGL_AKHIR_TDRu" placeholder="Masukkan TGL_AKHIR_TDR." value="<?= $data['TGL_AKHIR_TDR']; ?>">
                            <?= form_error('TGL_AKHIR_TDRu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PENERBIT_TDR">Penerbit Tdr</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_TDR" name="PENERBIT_TDRu" placeholder="Masukkan PENERBIT_TDR." value="<?= $data['PENERBIT_TDR']; ?>">
                            <?= form_error('PENERBIT_TDRu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_SIUJK">No Siujk</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NO_SIUJK" name="NO_SIUJKu" placeholder="Masukkan NO_SIUJK." value="<?= $data['NO_SIUJK']; ?>">
                            <?= form_error('NO_SIUJKu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AWAL_SIUJK">Tgl Awal Siujk</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AWAL_SIUJK" name="TGL_AWAL_SIUJKu" placeholder="Masukkan TGL_AWAL_SIUJK." value="<?= $data['TGL_AWAL_SIUJK']; ?>">
                            <?= form_error('TGL_AWAL_SIUJKu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_AKHIR_SIUJK">Tgl Akhir Siujk</label>
                            <input type="date" class="form-control form-control-Deb_perusahaan" id="TGL_AKHIR_SIUJK" name="TGL_AKHIR_SIUJKu" placeholder="Masukkan TGL_AKHIR_SIUJK." value="<?= $data['TGL_AKHIR_SIUJK']; ?>">
                            <?= form_error('TGL_AKHIR_SIUJKu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="PENERBIT_SIUJK">Penerbit Siujk</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="PENERBIT_SIUJK" name="PENERBIT_SIUJKu" placeholder="Masukkan PENERBIT_SIUJK." value="<?= $data['PENERBIT_SIUJK']; ?>">
                            <?= form_error('PENERBIT_SIUJKu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_STS_HUKUM">Kd Sts Hukum</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="KD_STS_HUKUM" name="KD_STS_HUKUMu" placeholder="Masukkan KD_STS_HUKUM." value="<?= $data['KD_STS_HUKUM']; ?>">
                            <?= form_error('KD_STS_HUKUMu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_PIMPINAN">Nama Pimpinan</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="NAMA_PIMPINAN" name="NAMA_PIMPINANu" placeholder="Masukkan NAMA_PIMPINAN." value="<?= $data['NAMA_PIMPINAN']; ?>">
                            <?= form_error('NAMA_PIMPINANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ALMT_SITUS_PERUSAHAAN">Almt Situs Perusahaan</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="ALMT_SITUS_PERUSAHAAN" name="ALMT_SITUS_PERUSAHAANu" placeholder="Masukkan ALMT_SITUS_PERUSAHAAN." value="<?= $data['ALMT_SITUS_PERUSAHAAN']; ?>">
                            <?= form_error('ALMT_SITUS_PERUSAHAANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="EMAIL_PERUSAHAAN">Email Perusahaan</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="EMAIL_PERUSAHAAN" name="EMAIL_PERUSAHAANu" placeholder="Masukkan EMAIL_PERUSAHAAN." value="<?= $data['EMAIL_PERUSAHAAN']; ?>">
                            <?= form_error('EMAIL_PERUSAHAANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_BID_USAHA">Kd Bid Usaha</label>
                            <input type="text" class="form-control form-control-Deb_perusahaan" id="KD_BID_USAHA" name="KD_BID_USAHAu" placeholder="Masukkan KD_BID_USAHA." value="<?= $data['KD_BID_USAHA']; ?>">
                            <?= form_error('KD_BID_USAHAu', '<small class="text-danger pl-3">', '</small>') ?>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Data Sistem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('Deb_perusahaan/deleteAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        Anda yakin untuk menghapus data <?= $data['NO_DEB']; ?>?
                    </div>
                    <div class="form-grup">
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