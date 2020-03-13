<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow bg-gradient-primary border-0 h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Debitur Personal Maret</div>
                        <div class="h5 mb-0 font-weight-bold text-white">5</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow bg-gradient-success border-0 h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Debitur Perusahaan Maret</div>
                        <div class="h5 mb-0 font-weight-bold text-white">7</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow border-0 bg-gradient-info h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Plafon Personal Maret</div>
                        <div class="h5 mb-0 font-weight-bold text-white">Rp 27.000.000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-money-bill-wave fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow border-0 bg-gradient-warning h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Plafon Perusahaan Maret</div>
                        <div class="h5 mb-0 font-weight-bold text-white">Rp 125.000.000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-money-bill fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4 border-0">
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="jumbotron-fluid bg-white">
            <h5 class="mb-2 font-weight-bold text-primary under">Dashboard</h5>
            <h1 class="display-4">Loan Origination System (LOS)</h1>
            <p class="lead">Merupakan aplikasi yang dikembangkan secara khusus untuk mendukung pemrosesan aplikasi kredit.</p>
            <hr class="my-0">
        </div>
    </div>
</div>

<div class="card shadow mb-3 border-0">
    <div class="card-body">

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