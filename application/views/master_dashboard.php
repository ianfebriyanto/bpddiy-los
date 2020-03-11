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

<body id="page-top" class="bg ">
    <div id="wrapper">
        <ul class="navbar-nav bg-white sidebar accordion toggled shadow" id="accordionSidebar" style="position: fixed;z-index: 1;overflow-x: hidden;top: 0;bottom: 0;">
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
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('pengajuan'); ?>">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Pengajuan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#debitur" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user-tie"></i>
                    <span>Debitur</span>
                </a>
                <div id="debitur" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Debitur:</h6>
                        <a class="collapse-item" href="<?= base_url('deb_personal'); ?>">Personal</a>
                        <a class="collapse-item" href="<?= base_url('deb_perusahaan');  ?>">Perusahaan</a>
                        <a class="collapse-item" href="<?= base_url('mst_debitur');  ?>">Master</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#administrator" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users-cog"></i>
                    <span>Administrator</span>
                </a>
                <div id="administrator" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Administrator:</h6>
                        <?php foreach ($namaMenu as $data) : ?>
                            <a class="collapse-item" href="<?= base_url($data['MENU_LINK']) ?>"><?= $data['MENU_NAMA']; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column bg-white" style="padding-left: 7.5rem;">
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-primary bg-white" id="navbar">
                    <button class="navbar-toggler shadow" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto">
                            <div class="text-primary font-weight-bold px-2">
                                <?= $this->session->userdata('NAMA_LENGKAP') ?> / <?= $this->session->userdata('GRUP_NAMA') ?>
                            </div>
                        </ul>

                        <div class="form-inline my-2 my-lg-0">
                            <form class="d-none d-sm-inline-block form-inline mr-auto text-primary ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-white border-0 small" placeholder="Search for something .." aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                            </form>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button class="btn text-primary shadow-sm my-sm-0" type="button"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter"></span></button>
                                    </a>
                                    <!-- Dropdown - Alerts -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                        <h6 class="dropdown-header">
                                            Pesan
                                        </h6>
                                        <a class="dropdown-item text-center small text-gray-500" href="#">Tampilkan Seluruh Pesan</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button class="btn text-primary shadow-sm my-sm-0" type="button"><i class="fas fa-bell fa-fw"></i><span class="badge badge-danger badge-counter"></span></button>

                                    </a>
                                    <!-- Dropdown - Alerts -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                        <h6 class="dropdown-header">
                                            Notifikasi
                                        </h6>
                                        <a class="dropdown-item text-center small text-gray-500" href="#">Tampilkan Seluruh Notifikasi</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button class="btn text-primary shadow-sm my-sm-0" type="button"><i class="fas fa-user-circle"></i></button>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="<?= base_url('profile'); ?>">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Profile
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
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
                </nav>
            </div>
            <div class="container-fluid ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white px-0 mb-1">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item"><a class="under font-weight-bold" href="#">Abdul</a></li>
                    </ol>
                </nav>
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
<script type="text/javascript">
    $('a.collapse-item[href$="' + location.pathname + '"]').addClass('under');
</script>
<?php if (isset($script)) echo $script; ?>

</html>