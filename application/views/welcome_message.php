<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card my-5">
					<?php  if ($this->session->flashdata('pesan') !== null): ?>
					<div class="alert alert-danger">
						<?= $this->session->falshdata('pesan') ?>
					</div>
					<?php endif; ?>
					<div class="card-header">Halaman Register</div>
					<div class="card-body">
						<form action="<?= base_url('register') ?>" method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name='username' placeholder='Username' class='form-control' required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name='password' placeholder='password' class='form-control' required>
							</div>
							<div class="form-group">
								<label>Gender</label>
								<select name="gender" class='form-control' required>
									<option selected disabled>=== Pilih Gender ===</option>
									<option value="1">Laki - laki</option>
									<option value="2">Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="date" name='tanggal_lahir' class='form-control' required>
							</div>
							<button class='btn btn-success btn-block'>Register</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>