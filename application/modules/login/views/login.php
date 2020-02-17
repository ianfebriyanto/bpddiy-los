<div class="row justify-content-center">

	<div class="col-xl-6 col-lg-12 col-md-6">

		<div class="card o-hidden border-0 shadow-sm my-5">
			<img src="<?= base_url('assets/'); ?>images/bpd.jpg" class="card-img-top">
			<div class="card-body bg-light">
				<h5 class="card-title">LOS - BPDDIY</h5>
				<form action="<?= base_url('login/coba') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="USERNAME">Username</label>
						<input type="text" class="form-control" id="USERNAME" name="USERNAME">
					</div>
					<div class="form-group">
						<label for="PASSWORD">Password</label>
						<input type="password" class="form-control" id="PASSWORD" name="PASSWORD">
					</div>
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>