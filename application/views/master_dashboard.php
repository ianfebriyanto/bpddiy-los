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
        <ul class="navbar-nav bg-white sidebar accordion toggled mySidenav" id="accordionSidebar" style="position: fixed;z-index:1">
            <li class="sidebar-brand d-flex align-items-center justify-content-center ">
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">
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
            <div class="sidebar-heading text-primary">
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
        <div id="content-wrapper" class="d-flex flex-column bg-white">
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white topbar mb-4 static-top">
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
                                <button type="button" id="logoutBtn" name="logoutBtn" class="btn btn-outline-primary" data-toggle="modal" data-target="#logout"><i class="fas fa-power-off"></i></button>
                                <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Logout BPDDIY-LOS</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('login/logout'); ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    Anda yakin untuk logout dari BPDDIY-LOS?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary" value="upload">Logout</button>
                                                </div>
                                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                            </form>
                                        </div>
                                    </div>
                                </div>
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