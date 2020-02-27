<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo APP_NAME ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?= base_url('assets/'); ?>fontawesome/css/all.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>datatablesbs/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>sb-admin-2.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>datatablesbs/js/jquery-3.3.1.js"></script>
    <?php if (isset($style)) echo $style; ?>
</head>

<body id="page-top" class="bg">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
            <hr class="my-1">
            <li class="sidebar-brand d-flex align-items-center justify-content-center ">
                <a class="nav-link text-white" href="<?= base_url('dashboard'); ?>">
                    LOS
                    BPDDIY
                </a>
            </li>
            <hr class=" sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Main Menu
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pengajuan'); ?>">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Pengajuan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('debitur'); ?>">
                    <i class="fas fa-user-tie"></i>
                    <span>Debitur</span>
                </a>
            </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white topbar mb-4 static-top">
                    <button type="button" class="btn text-primary" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                            <ul class="navbar-nav">
                                <?php foreach ($namaMenu as $data) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link text-primary font-weight-bold px-2" href="<?= base_url($data['MENU_LINK']) ?>"><?= $data['MENU_NAMA']; ?><span class="sr-only"></span></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="form-inline ml-3">
                                <a class="nav-item nav-link text-primary font-weight-bold px-2" href="<?= base_url('login/logout'); ?>">Logout<span class="sr-only"></span></a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid">
                    <?php if (isset($contents)) echo $contents; ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?= base_url('assets/'); ?>datatablesbs/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>datatablesbs/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>popper/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>fontawesome/js/all.js"></script>
<script src="<?= base_url('assets/'); ?>sb-admin-2.min.js"></script>
<?php if (isset($script)) echo $script; ?>

</html>