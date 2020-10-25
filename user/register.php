<!DOCTYPE html>
<html>
<head>
	<title>Register user</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == 'password_false') {
				echo '<script>alert("Password tidak sama dengan konfirmasi password")</script>';
			} else if ($_GET['pesan'] == 'empty_form') {
				echo '<script>alert("Isi semua form yang tertera")</script>';
			} else if ($_GET['pesan'] == 'register_gagal') {
				echo '<script>alert("Register gagal")</script>';
			} // Muhammad Daffa ~ daffa.tech
		}
	?>
	<div class="container">
		<h1 class="text-center my-5">Register User</h1>
		<!-- <img src="images/gudang.jpg" class="img-fluid rounded mx-auto d-block"> -->
		<form action="cek_register.php" method="post" align="center" class="my-5">
			<div class="form-group">
				<label for="name">Nama Lengkap: </label>
				<input class="form-control" type="name" name="name">
			</div>
			<div class="form-group">
				<label for="username">Username: </label>
				<input class="form-control" type="username" name="username">
			</div>
			<div class="form-group">
				<label for="no_telp">Nomor Telepon: </label>
				<input class="form-control" type="number" name="no_telp">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input class="form-control" type="email" name="email">
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input class="form-control" type="password" name="password">
			</div>
			<div class="form-group">
				<label for="password_confirm">Password Confirmation: </label>
				<input class="form-control" type="password" name="password_confirm">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<br>
			<a href="index.php">Go Back to Login Page</a>
		</form>
	</div>
</body>
</html>