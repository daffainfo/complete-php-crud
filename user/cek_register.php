<?php
	// Muhammad Daffa ~ daffa.tech
	session_start();

	include '../config.php';

	$name = $_POST['name'];
	$username = $_POST['username'];
	$no_telp = $_POST['no_telp'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	$name = mysqli_real_escape_string($conn, $name);
	$username = mysqli_real_escape_string($conn, $username);
	$no_telp = mysqli_real_escape_string($conn, $no_telp);
	$email = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);
	$password_confirm = mysqli_real_escape_string($conn, $password_confirm);

	if ($password != $password_confirm) {
		header("Location: register.php?pesan=password_false");
	} elseif (empty($name) || empty($username) || empty($no_telp) || empty($email)) {
		header("Location: register.php?pesan=empty_form");
	} else {
		$query = "INSERT INTO user (id, fullname, username, telephone_number, email, password)
					VALUES (
						'',
						'$name',
						'$username',
						'$no_telp',
						'$email',
						'$password'
				)";

		$data = mysqli_query($conn, $query);
		
		$cek = mysqli_num_rows($data);

		if ($cek >= 0) {
			header("Location: index.php?pesan=register_berhasil");
		} else {
			header("Location: register.php?pesan=register_gagal");
		}
	}
?>