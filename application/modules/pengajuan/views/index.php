<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pengajuan</h6>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="jumbotron bg-white">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="card text-center">
                        <img src="<?= base_url('assets/'); ?>images/personal.png" class="mx-auto d-block" style="max-width: 50%; height: auto;">
                        <div class="card-body">
                            <h5 class="card-title">Personal</h5>
                            <p class="card-text">Pengajuan kredit untuk personal.</p>
                            <a href="<?= base_url('pengajuan/personal'); ?>" class="btn btn-primary">Ajukan</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-center">
                        <img src="<?= base_url('assets/'); ?>images/perusahaan.png" class="mx-auto d-block" style="max-width: 60%; height: auto;">
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
</div>