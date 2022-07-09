<div class="text-center p-5"  style="background: linear-gradient(
			90deg,
			rgba(0, 0, 0, 0.719) 10%,
			rgba(0, 0, 0, 0.13769257703081228) 100%
		), url(<?= base_url('assets/img/sekolah.jpg');?>); background-size: cover;">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-lg-5 bg-white shadow-lg mt-3 rounded">
			<div class="p-5">
				<div class="text-center">
					<img src="<?= base_url('assets/img/iklas.png');?>" alt="logo" class="w-25">
					<p class="h4 text-gray-900 mb-2">Form Login PPDB Online</p>
					<p class="h5 text-gray-900 mb-4">MA Darul Mukarram</p>
				</div>
				<p class="text-start">
					<?= $this->session->flashdata('msg');
                        if (isset($_SESSION['msg'])) {
                            unset($_SESSION['msg']);
    	                } ?>
				</p>
				<form class="user" method="POST" action="<?= base_url('auth'); ?>">
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="email" name="email"
							placeholder="Masukkan Email" value="<?= set_value('email'); ?>">
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<input type="password" class="form-control form-control-user" id="password" name="password"
							placeholder="Password">
						<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<button type="submit" class="btn btn-primary btn-user btn-block">
						Masuk
					</button>
				</form>
				<hr>
				<div class="text-center">
					<span class="small">Belum Mempunyai Akun?</span> <a class="small"
						href="<?= base_url('auth/registration'); ?>">Daftar disini!</a>
				</div>
			</div>

		</div>

	</div><br>

</div>
