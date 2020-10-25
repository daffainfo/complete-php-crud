<?php
	// Muhammad Daffa ~ daffa.tech
	session_start();

	include '../config.php';

	$namabarang = $_POST['namabarang'];
	$jumlah_stok = $_POST['jumlah_stok'];

	$namabarang = mysqli_real_escape_string($conn, $namabarang);
	$jumlah_stok = mysqli_real_escape_string($conn, $jumlah_stok);

	if(empty($namabarang) || empty($jumlah_stok)) {
		header("Location: tambah_data.php");
		echo '<script>alert("Input data terlebih dahulu")</script>';
	} else {

	$query = "INSERT INTO list_barang
				VALUES (
				'',
				'$namabarang',
				'$jumlah_stok'
			)";

	$data = mysqli_query($conn, $query);

	$cek = mysqli_num_rows ($data);

	if ($cek >= 0) {
		echo '<script>alert("Input data berhasil")</script>';
		header("Location: dashboard.php");
	} else {
		echo '<script>alert("Input data gagal")</script>';
	}
}

?>