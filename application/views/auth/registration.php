<div class="text-center p-5"  style="background: linear-gradient(
			90deg,
			rgba(0, 0, 0, 0.719) 10%,
			rgba(0, 0, 0, 0.13769257703081228) 100%
		), url(<?= base_url('assets/img/sekolah.jpg');?>); background-size: cover;">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-lg-5 bg-white shadow-lg mt-2 rounded">
			<div class="px-5 pt-5 pb-4">
				<div class="text-center">
					<img src="<?= base_url('assets/img/iklas.png');?>" alt="logo" class="w-25">
					<p class="h4 text-gray-900 mb-2">Pendaftaran PPDB ONLINE</p>
                    <p class="h5 text-gray-900 mb-4">MA Darul Mukarram</p>
				</div>
				<form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="name" name="name"
							placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
						<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="email" name="email"
							placeholder="Alamat Email" value="<?= set_value('email'); ?>">
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
							<input type="password" class="form-control form-control-user" id="password1"
								name="password1" placeholder="Password">
							<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="col-sm-6">
							<input type="password" class="form-control form-control-user" id="password2"
								name="password2" placeholder="Repeat Password">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-user btn-block">
						Daftar
					</button>
				</form>
				<hr>
				<div class="text-center">
					<span class="small">Sudah Mempunyai akun? </span> <a class="small"
						href="<?= base_url('auth'); ?>">Login!</a>
				</div>
			</div>
		</div>
	</div>
</div>
