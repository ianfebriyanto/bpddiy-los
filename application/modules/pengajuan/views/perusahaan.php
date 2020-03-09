<div class="card shadow mb-4" id="Outer2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pengajuan Perusahaan</h6>
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
        <h6 class="m-0 font-weight-bold text-primary">Form Pengajuan Perusahaan</h6>
    </div>
    <div class="card-body">
        <form class="form">

            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Data Perusahaan" class="nav-link active">
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
                                    Data Perusahaan
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputAddress">Nama Lengkap Debitur</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan nama lengkap debitur">
                                    </div>
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Laki-laki
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group">
                                        <label for="inputAddress">Tempat & Tanggal lahir</label>
                                        <input type="date" class="form-control" id="inputAddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Alamat Lengkap</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Provinsi</label>
                                        <select class="custom-select">
                                            <option value="1"></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Kabupaten / Kota</label>
                                        <select class="custom-select">
                                            <option value="1"></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Kecamatan</label>
                                        <select class="custom-select">
                                            <option value="1"></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Kelurahan</label>
                                        <select class="custom-select">
                                            <option value="1"></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">RT / RW</label>
                                        <input type="number" class="form-control" id="inputAddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Kode Pos</label>
                                        <select class="custom-select">
                                            <option value="1"></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Nomor Telephone</label>
                                        <input type="number" class="form-control" id="inputAddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Email</label>
                                        <input type="text" class="form-control" id="inputAddress">
                                    </div>
                                    <li><button type="button" class="btn btn-primary next-step next-button">Lanjut</button></li>
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
                                    <li><button type="button" class="btn btn-secondary prev-step prev-button">Kembali</button>
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
                                    <li><button type="button" class="btn btn-secondary prev-step prev-button">Kembali</button>
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
                                    <li><button type="button" class="btn btn-secondary prev-step prev-button">Kembali</button>
                                        <button type="button" class="btn btn-primary next-step next-button">Simpan</button>
                                        <button type="button" class="btn btn-info prev-step prev-button">Cetak</button></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </form>
    </div>
</div>