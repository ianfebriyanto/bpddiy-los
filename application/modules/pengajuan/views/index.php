<div class="card shadow mb-3 border-0">
    <div class="card-body">
        <img class="float-right img-fluid" src="<?= base_url('assets/'); ?>images/pengajuan.png" style="max-width: 15%; height: auto;">
        <h5 class="mb-2 font-weight-bold text-primary under">Pengajuan</h5>
        <p class="mb-0 text-justify">‘Kredit’ diambil dari bahasa Yunani ‘credere’ yang artinya kepercayaan akan kebenaran atau ‘credo’ yang berarti saya percaya.
            Kredit merupakan pemberian penggunaan suatu uang atau barang kepada orang lain di waktu tertentu dengan jaminan atau tidak dengan jaminan, dengan pemberian jasa atau bunga, atau tanpa bunga..</p>
    </div>
</div>
<div class="card shadow mb-4 border-0">
    <div class=" card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-3">
                <div class="card text-center shadow mb-0 border-0">
                    <img src="<?= base_url('assets/'); ?>images/personal.png" class="mx-auto d-block" style="max-width: 40%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Personal</h5>
                        <p class="card-text">Pengajuan kredit untuk personal.</p>
                        <a href="<?= base_url('pengajuan/personal'); ?>" class="btn btn-primary">Ajukan</a>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card text-center shadow mb-0 border-0">
                    <img src="<?= base_url('assets/'); ?>images/perusahaan.png" class="mx-auto d-block" style="max-width: 50%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Perusahaan</h5>
                        <p class="card-text">Pengajuan kredit untuk perusahaan.</p>
                        <a href="<?= base_url('pengajuan/perusahaan'); ?>" class="btn btn-primary">Ajukan</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>