<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo APP_NAME ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?= base_url('assets/'); ?>bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>datatablesbs/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>jquery/jquery-3.4.1.slim.min.js"></script>
    <?php if (isset($style)) echo $style; ?>
</head>

<body id="page-top" class="bg">
    <div id="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary topbar mb-4 static-top">
            <a class="navbar-brand" href="<?= base_url(''); ?>">LOS - BPDDIY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="<?= base_url('login/logout'); ?>">Logout<span class="sr-only"></span></a>
                        <?php foreach ($namaMenu as $data) : ?>
                            <a class="nav-item nav-link" href="<?= base_url($data['MENU_LINK']) ?>"><?= $data['MENU_NAMA']; ?><span class="sr-only"></span></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </nav>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php if (isset($contents)) echo $contents; ?>
            </div>
        </div>
    </div>
</body>

<script src="<?= base_url('assets/'); ?>datatablesbs/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>datatablesbs/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>popper/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>fontawesome/js/all.js"></script>
<?php if (isset($script)) echo $script; ?>

</html>