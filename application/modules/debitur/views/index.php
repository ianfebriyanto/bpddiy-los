<div class="card shadow mb-3 border-0">
    <div class="card-body">
        <img class="float-right" src="<?= base_url('assets/'); ?>images/personal.png" class="img-fluid" style="max-width: 15%; height: auto;">
        <h5 class="mb-2 font-weight-bold text-primary under">Debitur</h5>
        <p class="mb-0 text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
    </div>
</div>
<div class="card shadow mb-4 border-0">
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <div id="myGroup">
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" onClick="personal()">
                    Debitur Personal
                </button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2" onClick="perusahaan()">
                    Debitur Perusahaan
                </button>
            </p>
            <div class="collapse" id="collapseExample" data-parent="#myGroup">
                <div class="card card-body">
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
            <div class="collapse" id="collapseExample2" data-parent="#myGroup">
                <div class="card card-body">
                    <table id="dataTableDeb_perusahaan" class="table table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No Deb</th>
                                <th scope="col">No Akte Pendirian</th>
                                <th scope="col">Tgl Akte Pendirian</th>
                                <th scope="col">No Akte Perubahan</th>
                                <th scope="col">Tgl Akte Perubahan</th>
                                <th scope="col">No Akte Pengesahan</th>
                                <th scope="col">Tgl Akte Pengesahan</th>
                                <th scope="col">Nama Notaris</th>
                                <th scope="col">No Adpt</th>
                                <th scope="col">Tgl Adpt</th>
                                <th scope="col">No Siup</th>
                                <th scope="col">Tgl Mulai Siup</th>
                                <th scope="col">Tgl Akhir Siup</th>
                                <th scope="col">Penerbit Siup</th>
                                <th scope="col">No Ho</th>
                                <th scope="col">Tgl Awal Ho</th>
                                <th scope="col">Tgl Akhir Ho</th>
                                <th scope="col">Penerbit Ho</th>
                                <th scope="col">No Tdp</th>
                                <th scope="col">Tgl Awal Tdp</th>
                                <th scope="col">Tgl Akhir Tdp</th>
                                <th scope="col">Penerbit Tdp</th>
                                <th scope="col">No Tdr</th>
                                <th scope="col">Tgl Awal Tdr</th>
                                <th scope="col">Tgl Akhir Tdr</th>
                                <th scope="col">Penerbit Tdr</th>
                                <th scope="col">No Siujk</th>
                                <th scope="col">Tgl Awal Siujk</th>
                                <th scope="col">Tgl Akhir Siujk</th>
                                <th scope="col">Penerbit Siujk</th>
                                <th scope="col">Kd Sts Hukum</th>
                                <th scope="col">Nama Pimpinan</th>
                                <th scope="col">Almt Situs Perusahaan</th>
                                <th scope="col">Email Perusahaan</th>
                                <th scope="col">Kd Bid Usaha</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>