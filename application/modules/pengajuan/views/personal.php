<div class="card shadow mb-4" id="Outer2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pengajuan Personal</h6>
    </div>
    <div class="card-body">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">NIK</span>
            </div>
            <input type="text" class="form-control" placeholder="Masukkan NIK" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="btn"> Cari</button>
            </div>
        </div>
    </div>
</div>
<div class="card shadow mb-4" style="display: none" id="Outer">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Pengajuan Personal</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('deb_personal/createAct') ?>" method="post" enctype="multipart/form-data">

            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Data Personal" class="nav-link active">
                                <span class="round-tab">
                                    <i class="fas fa-user"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Fasilitas" class="nav-link disabled">
                                <span class="round-tab">
                                    <i class="fas fa-building"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Syarat & Ketentuan" class="nav-link disabled">
                                <span class="round-tab">
                                    <i class="fas fa-clipboard-list"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Review" class="nav-link disabled">
                                <span class="round-tab">
                                    <i class="fas fa-check"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <ul class="list-inline">
                            <div class="card">
                                <div class="card-header font-weight-bold h5">
                                    Data Personal
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="NO_DEB" class="col-sm-3 col-form-label">No Deb</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-deb_personal" id="NO_DEB" name="NO_DEB" placeholder="Masukkan Nomor Debitur">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Nama Lengkap Debitur</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="NAMA_LENGKAP" name="NAMA_LENGKAP" placeholder="Masukkan nama lengkap debitur">
                                        </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                                            <div class="col-sm-8">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="KD_KELAMIN" id="KD_KELAMIN1" value="1" checked>
                                                    <label class="form-check-label" for="KD_KELAMIN">
                                                        Laki-laki
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="KD_KELAMIN" id="KD_KELAMIN2" value="2">
                                                    <label class="form-check-label" for="KD_KELAMIN">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="TEMPAT_LAHIR" name="NAMA_LENGKAP" placeholder="Masukkan tempat lahir debitur">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Tanggal lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="TGL_LAHIR" name="TGL_LAHIR">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="ALMT_IDENTITAS" name="ALMT_IDENTITAS" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Provinsi</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="PROVINSI_IDENTITAS" name="PROVINSI_IDENTITAS">
                                                <option value="none" selected disabled hidden>
                                                    Pilih provinsi.
                                                </option>
                                                <option value="Yogyakarta">Yogyakarta</option>
                                                <option value="Jawa Tengah">Jawa Tengah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Kabupaten / Kota</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="KOTA_IDENTITAS" name="KOTA_IDENTITAS">
                                                <option value="none" selected disabled hidden>
                                                    Pilih Kabupaten / Kota.
                                                </option>
                                                <option value="Bantul">Bantul</option>
                                                <option value="Magelang">Magelang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Kecamatan</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="KECAMATAN_IDENTITAS" name="KECAMATAN_IDENTITAS">
                                                <option value="none" selected disabled hidden>
                                                    Pilih Kecamatan
                                                </option>
                                                <option value="Bantul">Bantul</option>
                                                <option value="Secang">Secang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Kelurahan</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="KELURAHAN_IDENTITAS" name="KELURAHAN_IDENTITAS">
                                                <option value="none" selected disabled hidden>
                                                    Pilih Kelurahan
                                                </option>
                                                <option value="Palbapang">Palbapang</option>
                                                <option value="Secang">Secang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">RT / RW</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="inputAddress" placeholder="Masukkan RT/RW">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Kode Pos</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="KD_POS" name="KD_POS">
                                                <option value="none" selected disabled hidden>
                                                    Pilih Kode Pos
                                                </option>
                                                <option value="55713">55713</option>
                                                <option value="55195">55195</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Nomor Telephone</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="NO_TELP_IDENTITAS" name="NO_TELP_IDENTITAS" placeholder="Masukkan Nomor Telepon">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="EMAIL" name="Email" placeholder="Masukkan Alamat Email">
                                        </div>
                                    </div>
                                    <li class="float-right"><button type="button" class="btn btn-primary next-step next-button">Lanjut</button></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <ul class="list-inline">
                            <div class="card">
                                <div class="card-header font-weight-bold h5">
                                    Fasilitas
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="PLAFOND" class="col-sm-3 col-form-label">Plafond Kredit yang diminta</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="PLAFOND" name="PLAFOND" placeholder="Masukkan Jumlah Plafond Kredit">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="TUJUAN_KREDIT" class="col-sm-3 col-form-label">Tujuan Penggunaan Kredit</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="TUJUAN_KREDIT" name="TUJUAN_KREDIT" rows="4" placeholder="Masukkan Tujuan Kredit"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="JANGKA_WAKTU" class="col-sm-3 col-form-label">Jangka Waktu (Bulan)</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="JANGKA_WAKTU" name="JANGKA_WAKTU" placeholder="Masukkan Jangka Waktu (Bulan)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="SUSUNAN_PENGURUS" class="col-sm-3 col-form-label">Susunan Pengurus</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="SUSUNAN_PENGURUS" name="SUSUNAN_PENGURUS" rows="3" placeholder="Masukkan Susunan Pengurus"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="SUSUNAN_SAHAM" class="col-sm-3 col-form-label">Susunan Pemegang Saham</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="SUSUNAN_SAHAM" name="SUSUNAN_SAHAM" rows="3" placeholder="Masukkan Susunan Pemegang Saham"></textarea>
                                        </div>
                                    </div>
                                    <li class="float-right"><button type="button" class="btn btn-secondary prev-step prev-button mr-2">Kembali</button>
                                        <button type="button" class="btn btn-primary next-step next-button">Lanjut</button></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <ul class="list-inline">
                            <div class="card">
                                <div class="card-header font-weight-bold h5">
                                    Syarat dan Ketentuan
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputAddress">Jenis Debitur</label>
                                        <select class="custom-select">
                                            <option value="1">Personal</option>
                                            <option value="2">Badan Usaha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">State</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                    <li class="float-right"><button type="button" class="btn btn-secondary prev-step prev-button">Kembali</button>
                                        <button type="button" class="btn btn-primary next-step next-button">Lanjut</button></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step4">
                        <ul class="list-inline">
                            <div class="card">
                                <div class="card-header font-weight-bold h5">
                                    Review
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">State</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                    <li class="float-right"><button type="button" class="btn btn-secondary prev-step prev-button">Kembali</button>
                                        <button type="submit" class="btn btn-primary" value="upload">Simpan</button>
                                        <button type="button" class="btn btn-info prev-step prev-button">Cetak</button></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        </form>
    </div>
</div>