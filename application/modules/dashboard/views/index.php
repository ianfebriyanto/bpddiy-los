<div class="card shadow mb-3 border-0">
    <div class="card-body">
        <h5 class="mb-2 font-weight-bold text-primary under">Dashboard</h5>
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-header bg-white text-primary font-weight-bold">
                        Grafik Plafon Pengajuan Nasabah
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-header bg-white text-primary font-weight-bold">
                        Grafik Jenis Pengajuan Kredit
                    </div>
                    <div class="card-body">
                        <div class="chart-pie pt-4">
                            <canvas id="myPieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-header bg-white text-primary font-weight-bold">
                        Grafik Pencairan Pengajuan Kredit
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4 border-0">
    <div class=" card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="jumbotron jumbotron-fluid bg-white">
            <h1 class="display-4">Loan Origination System (LOS)</h1>
            <p class="lead">Merupakan aplikasi yang dikembangkan secara khusus untuk mendukung pemrosesan aplikasi kredit.</p>
            <hr class="my-0">
        </div>
    </div>
</div>