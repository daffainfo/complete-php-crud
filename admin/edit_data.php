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
	<?php
	// Muhammad Daffa ~ daffa.tech
	session_start();

	include'../config.php';

	$id = $_GET['id'];
	$id = mysqli_real_escape_string($conn, $id);
	$query = "SELECT * FROM list_barang WHERE id='$id'";

	$data = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_array($data)) {
		$id = $row['id'];
		$nama = $row['nama_barang'];
		$jumlah = $row['jumlah_stock'];
	}
	?>
	<div class="container">
		<h1 class="text-center my-5">Tambah Data</h1>
		<form action="cek_edit_data.php" method="post" align="center" class="my-5">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<div class="form-group">
				<label for="namabarang">Nama Barang: </label>
				<input class="form-control" type="namabarang" name="namabarang" maxlength="50" value="<?php echo htmlspecialchars($nama, ENT_QUOTES); ?>">
			</div>
			<div class="form-group">
				<label for="jumlah">Jumlah Stock: </label>
				<input class="form-control" type="number" name="jumlah" maxlength="100" value="<?php echo htmlspecialchars($jumlah, ENT_QUOTES); ?>">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<br>
			<a href="dashboard.php">Go Back to Dashboard</a>
		</form>
	</div>
</body>
</html>