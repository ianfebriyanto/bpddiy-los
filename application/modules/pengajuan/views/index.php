<div class="card shadow mb-3 border-0">
    <div class="card-body">
        <img class="float-right" src="<?= base_url('assets/'); ?>images/personal.png" class="img-fluid" style="max-width: 15%; height: auto;">
        <h5 class="mb-2 font-weight-bold text-primary under">Pengajuan</h5>
        <p class="mb-0 text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
    </div>
</div>
<div class="card shadow mb-4 border-0">
    <div class=" card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="jumbotron bg-white">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-0">
                    <div class="card text-center shadow mb-0 border-0">
                        <img src="<?= base_url('assets/'); ?>images/personal.png" class="mx-auto d-block" style="max-width: 50%; height: auto;">
                        <div class="card-body">
                            <h5 class="card-title">Personal</h5>
                            <p class="card-text">Pengajuan kredit untuk personal.</p>
                            <a href="<?= base_url('pengajuan/personal'); ?>" class="btn btn-primary">Ajukan</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-0">
                    <div class="card text-center shadow mb-0 border-0">
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