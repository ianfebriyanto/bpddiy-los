 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
 </nav>