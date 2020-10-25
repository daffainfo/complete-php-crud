<?php
	// Muhammad Daffa ~ daffa.tech
	include_once'../config.php';

	$id = $_GET['id'];

	$query = "DELETE FROM list_barang WHERE id='$id'";

	mysqli_query($conn, $query);

	header("Location: dashboard.php");
?>