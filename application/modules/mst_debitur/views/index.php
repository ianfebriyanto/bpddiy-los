<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Menu Debitur</h6>
        </div>
        <div class="card-header py-3">
            <div class="text-danger m-0 font-weight-bold text-primary"><button type="button" id="createBtn" name="createBtn" class="btn btn-danger btn-lg btn createBtn mb-2" data-toggle="modal" data-target="#create"> <i class="fa fa-plus-square fa-1x"></i> </button> Tambah Data</div>
        </div>
        <div class="card-body">
            <table id="dataTableMst_debitur" class="table table-hover table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Deb</th>
                        <th scope="col">Nama Deb</th>
                        <th scope="col">Kd Jns Deb</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kelurahan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Kd Dati Ii</th>
                        <th scope="col">Rt</th>
                        <th scope="col">Rw</th>
                        <th scope="col">Kd pos</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">No Selular</th>
                        <th scope="col">Email</th>
                        <th scope="col">Npwp</th>
                        <th scope="col">Ts Nsb</th>
                        <th scope="col">Kd Gol Pml</th>
                        <th scope="col">Kd Grup</th>
                        <th scope="col">Flg Aktif</th>
                        <th scope="col">Kd Sts Seb</th>
                        <th scope="col">Tgl Dibuat</th>
                        <th scope="col">Tgl Diubah</th>
                        <th scope="col">Tgl Dihapus</th>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Entri Data debitur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('mst_debitur/createAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="NO_DEB">No Deb</label>
                            <input type="text" class="form-control form-control-sistem" id="NO_DEB" name="NO_DEB" placeholder="Masukkan No Deb.">
                            <?= form_error('NO_DEB', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_DEB">Nama Deb</label>
                            <input type="text" class="form-control form-control-sistem" id="NAMA_DEB" name="NAMA_DEB" placeholder="Masukkan Nama Deb.">
                            <?= form_error('NAMA_DEB', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_JNS_DEB">Kd Jns Deb</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_JNS_DEB" name="KD_JNS_DEB" placeholder="Masukkan kd Jns Deb.">
                            <?= form_error('KD_JNS_DEB', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ALAMAT">Alamat</label>
                            <input type="text" class="form-control form-control-sistem" id="ALAMAT" name="ALAMAT" placeholder="Masukkan Alamat.">
                            <?= form_error('ALAMAT', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KELURAHAN">Kelurahan</label>
                            <input type="text" class="form-control form-control-sistem" id="KELURAHAN" name="KELURAHAN" placeholder="Masukkan Kelurahan.">
                            <?= form_error('KELURAHAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KECAMATAN">Kecamatan</label>
                            <input type="text" class="form-control form-control-sistem" id="KECAMATAN" name="KECAMATAN" placeholder="Masukkan Kecamatan.">
                            <?= form_error('KECAMATAN', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KOTA">Kota</label>
                            <input type="text" class="form-control form-control-sistem" id="KOTA" name="KOTA" placeholder="Masukkan Kota.">
                            <?= form_error('KOTA', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_DATI_II">Kd Dati II</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_DATI_II" name="KD_DATI_II" placeholder="Masukkan Kd Dati Ii.">
                            <?= form_error('KD_DATI_II', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RT">Rt</label>
                            <input type="text" class="form-control form-control-sistem" id="RT" name="RT" placeholder="Masukkan Rt.">
                            <?= form_error('RT', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RW">Rw</label>
                            <input type="text" class="form-control form-control-sistem" id="RW" name="RW" placeholder="Masukkan Rw.">
                            <?= form_error('RW', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_POS">Kd Pos</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_POS" name="KD_POS" placeholder="Masukkan Kd Pos.">
                            <?= form_error('KD_POS', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TELP">No Telp</label>
                            <input type="text" class="form-control form-control-sistem" id="NO_TELP" name="NO_TELP" placeholder="Masukkan No Telp.">
                            <?= form_error('NO_TELP', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_SELULAR">No Seluler</label>
                            <input type="text" class="form-control form-control-sistem" id="NO_SELULAR" name="NO_SELULAR" placeholder="Masukkan No Seluler.">
                            <?= form_error('NO_SELULAR', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="EMAIL">Email</label>
                            <input type="text" class="form-control form-control-sistem" id="EMAIL" name="EMAIL" placeholder="Masukkan Email.">
                            <?= form_error('EMAIL', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                         <div class="form-group">
                            <label for="NPWP">Npwp</label>
                            <input type="text" class="form-control form-control-sistem" id="NPWP" name="NPWP" placeholder="Masukkan Npwp.">
                            <?= form_error('NPWP', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="STS_NSB">Sts Nsb</label>
                            <input type="text" class="form-control form-control-sistem" id="STS_NSB" name="STS_NSB" placeholder="Masukkan Sts Nsb .">
                            <?= form_error('STS_NSB', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_GOL_PML">Kd Gol Pml</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_GOL_PML" name="KD_GOL_PML" placeholder="Masukkan Kd Gol Pml.">
                            <?= form_error('KD_GOL_PML', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_GRUP">Kd Grup</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_GRUP" name="KD_GRUP" placeholder="Masukkan Kd Grup.">
                            <?= form_error('KD_GRUP', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="FLG_AKTIF">Flg Aktif</label>
                            <input type="text" class="form-control form-control-sistem" id="FLG_AKTIF" name="FLG_AKTIF" placeholder="Masukkan Flg Aktif.">
                            <?= form_error('FLG_AKTIF', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_STS_DEB">Kd Sts Deb</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_STS_DEB" name="KD_STS_DEB" placeholder="Masukkan Kd Sts Deb.">
                            <?= form_error('KD_STS_DEB', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_DIBUAT">Tgl Dibuat</label>
                            <input type="date" class="form-control form-control-sistem" id="TGL_DIBUAT" name="TGL_DIBUAT" placeholder="Masukkan Tgl Dibuat.">
                            <?= form_error('TGL_DIBUAT', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_DIUBAH">Tgl Diubah</label>
                            <input type="date" class="form-control form-control-sistem" id="TGL_DIUBAH" name="TGL_DIUBAH" placeholder="Masukkan Tgl Diubah.">
                            <?= form_error('TGL_DIUBAH', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_DIHAPUS">Tgl Dihapus</label>
                            <input type="date" class="form-control form-control-sistem" id="TGL_DIHAPUS" name="TGL_DIHAPUS" placeholder="Masukkan Tgl Dihapus.">
                            <?= form_error('TGL_DIHAPUS', '<small class="text-danger pl-3">', '</small>') ?>
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
    <?php foreach ($mst_debitur as $data) : ?>
    <div class="modal fade" id="update<?= $data['NO_DEB']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Mst Debitur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('mst_debitur/updateAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="NO_DEB">No_Deb</label>
                            <input type="text" class="form-control form-control-sistem" id="NO_DEB" name="NO_DEBu" placeholder="Masukkan No Deb." value="<?= $data['NO_DEB']; ?>">
                            <?= form_error('NO_DEBu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NAMA_DEB">Nama Deb</label>
                            <input type="text" class="form-control form-control-sistem" id="NAMA_DEB" name="NAMA_DEBu" placeholder="Masukkan Nama Deb." value="<?= $data['NAMA_DEB']; ?>">
                            <?= form_error('NAMA_DEBu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_JNS_DEB">Kd Jns Deb</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_JNS_DEB" name="KD_JNS_DEBu" placeholder="Masukkan Kd Jns Deb." value="<?= $data['KD_JNS_DEB'];?>">
                            <?= form_error('KD_JNS_DEBu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ALAMAT">Alamat</label>
                            <input type="text" class="form-control form-control-sistem" id="ALAMAT" name="ALAMATu" placeholder="Masukkan Alamat." value="<?= $data['ALAMAT']; ?>">
                            <?= form_error('ALAMATu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KELURAHAN">Kelurahan</label>
                            <input type="text" class="form-control form-control-sistem" id="KELURAHAN" name="KELURAHANu" placeholder="Masukkan Kelurahan." value="<?= $data['KELURAHAN']; ?>">
                            <?= form_error('KELURAHANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KECAMATAN">Kecamatan</label>
                            <input type="text" class="form-control form-control-sistem" id="KECAMATAN" name="KECAMATANu" placeholder="Masukkan Kecamatan." value="<?= $data['KECAMATAN']; ?>">
                            <?= form_error('KECAMATANu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KOTA">Kota</label>
                            <input type="text" class="form-control form-control-sistem" id="KOTA" name="KOTAu" placeholder="Masukkan Kota." value="<?= $data['KOTA']; ?>">
                            <?= form_error('KOTAu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_DATI_II">Kd Dati Ii</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_DATI_II" name="KD_DATI_IIu" placeholder="Masukkan Kd Dati Ii." value="<?= $data['KD_DATI_II']; ?>">
                            <?= form_error('KD_DATI_IIu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RT">Rt</label>
                            <input type="text" class="form-control form-control-sistem" id="RT" name="RTu" placeholder="Masukkan Rt." value="<?= $data['RT']; ?>">
                            <?= form_error('RTu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="RW">Rw</label>
                            <input type="text" class="form-control form-control-sistem" id="RW" name="RWu" placeholder="Masukkan Rw." value="<?= $data['RW']; ?>">
                            <?= form_error('RWu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_POS">Kd Pos</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_POS" name="KD_POSu" placeholder="Masukkan Kd Pos." value="<?= $data['KD_POS']; ?>">
                            <?= form_error('KD_POSu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_TELP">No Telp</label>
                            <input type="text" class="form-control form-control-sistem" id="NO_TELP" name="NO_TELPu" placeholder="Masukkan No Telp." value="<?= $data['NO_TELP']; ?>">
                            <?= form_error('NO_TELPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NO_SELULAR">No Selular</label>
                            <input type="text" class="form-control form-control-sistem" id="NO_SELULAR" name="NO_SELULARu" placeholder="Masukkan No Selular." value="<?= $data['NO_SELULAR']; ?>">
                            <?= form_error('NO_SELULARu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="EMAIL">Email</label>
                            <input type="text" class="form-control form-control-sistem" id="EMAIL" name="EMAILu" placeholder="Masukkan Email." value="<?= $data['EMAIL']; ?>">
                            <?= form_error('EMAILu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="NPWP">Npwp</label>
                            <input type="text" class="form-control form-control-sistem" id="NPWP" name="NPWPu" placeholder="Masukkan Npwp." value="<?= $data['NPWP']; ?>">
                            <?= form_error('NPWPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="STS_NSB">Sts Snb</label>
                            <input type="text" class="form-control form-control-sistem" id="STS_NSB" name="STS_NSBu" placeholder="Masukkan Sts Snb." value="<?= $data['STS_NSB']; ?>">
                            <?= form_error('STS_NSBu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_GOL_PML">Kd Gol Pml</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_GOL_PML" name="KD_GOL_PMLu" placeholder="Masukkan Kd Gol Pml." value="<?= $data['KD_GOL_PML']; ?>">
                            <?= form_error('KD_GOL_PMLu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_GRUP">Kd Grup</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_GRUP" name="KD_GRUPu" placeholder="Masukkan Kd Grup." value="<?= $data['KD_GRUP']; ?>">
                            <?= form_error('KD_GRUPu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="FLG_AKTIF">Flg Aktif</label>
                            <input type="text" class="form-control form-control-sistem" id="FLG_AKTIF" name="FLG_AKTIFu" placeholder="Masukkan Flg Aktif." value="<?= $data['FLG_AKTIF']; ?>">
                            <?= form_error('FLG_AKTIFu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="KD_STS_DEB">Kd Sts Deb</label>
                            <input type="text" class="form-control form-control-sistem" id="KD_STS_DEB" name="KD_STS_DEBu" placeholder="Masukkan Kd Sts Deb." value="<?= $data['KD_STS_DEB']; ?>">
                            <?= form_error('KD_STS_DEBu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_DIBUAT">Tgl Dibuat</label>
                            <input type="date" class="form-control form-control-sistem" id="TGL_DIBUAT" name="TGL_DIBUATu" placeholder="Masukkan Tgl Dibuat." value="<?= $data['TGL_DIBUAT']; ?>">
                            <?= form_error('TGL_DIBUATu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_DIUBAH">Tgl Diubah</label>
                            <input type="date" class="form-control form-control-sistem" id="TGL_DIUBAH" name="TGL_DIUBAHu" placeholder="Masukkan Tgl Diubah." value="<?= $data['TGL_DIUBAH']; ?>">
                            <?= form_error('TGL_DIUBAHu', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="TGL_DIHAPUS">Tgl Dihapus</label>
                            <input type="date" class="form-control form-control-sistem" id="TGL_DIHAPUS" name="TGL_DIHAPUSu" placeholder="Masukkan Tgl Dihapus." value="<?= $data['TGL_DIHAPUS']; ?>">
                            <?= form_error('TGL_DIHAPUSu', '<small class="text-danger pl-3">', '</small>') ?>
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
                <form action="<?= base_url('mst_debitur/deleteAct') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        Anda yakin untuk menghapus data?
                    </div>
                    <div class="form-sistem">
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