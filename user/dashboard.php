<?php
	// Muhammad Daffa ~ daffa.tech
	session_unset();
	session_start();

	include('../config.php');

	if($_SESSION["status_login_user"] != "true") {
		header("Location: index.php?pesan=belum_login");
	}

	$sql = "SELECT * FROM list_barang";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Welcome back <?php echo htmlspecialchars($_SESSION["username_user"], ENT_QUOTES) ?></h1>
		<form action="logout.php" method="post" class="mb-3">
			<button type="submit" class="btn btn-primary">Logout</button>
		</form>
		<table class="table table-bordered">
			<tr>
				<th><?php echo 'ID Barang' ?></th>
				<th><?php echo 'Nama Barang' ?></th>
				<th><?php echo 'Jumlah Stock Barang' ?></th>
			</tr>
			<?php  
			    while($row = mysqli_fetch_array($result)) {         
			        echo "<tr>";
			        echo "<td>".$row['id']."</td>";
			        echo "<td>".htmlspecialchars($row['nama_barang'], ENT_QUOTES)."</td>";
			        echo "<td>".htmlspecialchars($row['jumlah_stock'], ENT_QUOTES)."</td>";    
			        echo "</tr>";
    			}
    		?>
		</table>
	</div>
</body>
</html>