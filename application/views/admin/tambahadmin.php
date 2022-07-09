<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<br>
	<div class="row">
		<div class="col-6">
			<form class="user" method="POST" action="<?= base_url('admin/tambahadmin'); ?>">
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
						<input type="password" class="form-control form-control-user" id="password1" name="password1"
							placeholder="Password">
						<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="col-sm-6">
						<input type="password" class="form-control form-control-user" id="password2" name="password2"
							placeholder="Repeat Password">
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-user btn-block">
					Daftar
				</button>
			</form>
		</div>
		<div class="col-6 px-3">
			<!-- <h3 class="text-center">Daftar Admin</h3> -->
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nama</th>
						<th scope="col">Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($admin as $u) {
					?>
					<tr>
						<td><?= $u['name']; ?></td>
						<td><?= $u['email']; ?></td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

</div>
