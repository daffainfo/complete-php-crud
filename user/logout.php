<?php
	// Muhammad Daffa ~ daffa.tech
	session_start();

	session_unset();

	session_destroy();

	header("Location: index.php?pesan=logout")
?>