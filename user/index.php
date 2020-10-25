<!DOCTYPE html>
<html>
<head>
	<title>Login user</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == 'gagal') {
				echo '<script>alert("Login gagal, cek ulang username / password")</script>';
			} else if ($_GET['pesan'] == 'logout') {
				echo '<script>alert("Berhasil logout")</script>';
			} else if ($_GET['pesan'] == 'belum_login') {
				echo '<script>alert("Silahkan login terlebih dahulu")</script>';
			} else if ($_GET['pesan'] == 'register_berhasil') {
				echo '<script>alert("Register berhasil!")</script>';;
			}
			// Muhammad Daffa ~ daffa.tech
		}
	?>
	<div class="container">
		<h1 class="text-center my-5">Login User</h1>
		<!-- <img src="images/gudang.jpg" class="img-fluid rounded mx-auto d-block"> -->
		<form action="cek_login.php" method="post" align="center" class="my-5">
			<div class="form-group">
				<label for="username">Username: </label>
				<input class="form-control" type="username" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input class="form-control" type="password" name="password">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<br>
			<a href="register.php">Register in here</a>
			<br>
			<a href="../index.php">Go back to homepage</a>
		</form>
	</div>
</body>
</html>