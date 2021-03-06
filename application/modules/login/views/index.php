<div class="container h-100">
	<div class="row justify-content-center align-items-center h-100">
		<div class="col-xl-7 col-lg-12 col-md-6 mx-auto ">
			<div class="card o-hidden border-0 shadow-sm ">
				<img src="<?= base_url('assets/'); ?>images/bpd.jpg" class="card-img-top">
				<div class="card-body bg-light">
					<?= $this->session->flashdata('message'); ?>
					<h5 class="card-title">LOS - BPDDIY</h5>
					<form action="<?= base_url('login') ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="USERNAME">Username</label>
							<input type="text" class="form-control" id="USERNAME" name="USERNAME" placeholder=" Masukkan username" value="<?= set_value('USERNAME'); ?>">
							<?= form_error('USERNAME', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group">
							<label for="PASSWORD">Password</label>
							<input type="password" class="form-control" id="PASSWORD" name="PASSWORD" placeholder=" Masukkan password" value="<?= set_value('PASSWORD'); ?>">
							<?= form_error('PASSWORD', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>