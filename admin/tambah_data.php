<!-- Muhammad Daffa ~ daffa.tech-->
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- <?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == 'password_false') {
				echo '<script>alert("Password tidak sama dengan konfirmasi password")</script>';
			} else if ($_GET['pesan'] == 'empty_form') {
				echo '<script>alert("Isi semua form yang tertera")</script>';
			} else if ($_GET['pesan'] == 'register_gagal') {
				echo '<script>alert("Register gagal")</script>';
			}
		}
	?> -->
	<div class="container">
		<h1 class="text-center my-5">Tambah Data</h1>
		<!-- <img src="images/gudang.jpg" class="img-fluid rounded mx-auto d-block"> -->
		<form action="cek_tambah_data.php" method="post" align="center" class="my-5">
			<div class="form-group">
				<label for="namabarang">Nama Barang: </label>
				<input class="form-control" type="namabarang" name="namabarang">
			</div>
			<div class="form-group">
				<label for="jumlah_stok">Jumlah Stock: </label>
				<input class="form-control" type="number" name="jumlah_stok">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<br>
			<a href="dashboard.php">Go Back to Dashboard</a>
		</form>
	</div>
</body>
</html>