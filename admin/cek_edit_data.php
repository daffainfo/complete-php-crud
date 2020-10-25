<?php
	// Muhammad Daffa ~ daffa.tech
	session_start();

	include '../config.php';

	$id = $_POST['id'];
	$namabarang = $_POST['namabarang'];
	$jumlah = $_POST['jumlah'];

	$id = mysqli_real_escape_string($conn, $id);
	$namabarang = mysqli_real_escape_string($conn, $namabarang);
	$jumlah = mysqli_real_escape_string($conn, $jumlah);

	if(empty($namabarang) || empty($jumlah)) {
		header("Location: edit_data.php?id=$id");
		echo '<script>alert("Input data terlebih dahulu")</script>';
	} else {

	$query = "UPDATE list_barang SET nama_barang='$namabarang',jumlah_stock='$jumlah' WHERE id='$id'";

	$data = mysqli_query($conn, $query);

	$cek = mysqli_num_rows($data);

	if ($cek >= 0) {
		header("Location: dashboard.php");
	} else {
		echo '<script>alert("Edit data gagal")</script>';
	}
}

?>