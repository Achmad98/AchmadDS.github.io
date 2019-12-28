<?php 
	include_once('koneksi.php');

	
	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "SELECT * FROM sewa WHERE id ='$id'");
	$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME | FORM EDIT SEWA</title>
</head>
<body>
	<div>
		<form action="prosesEditSewa.php?id=<?php echo $id; ?>" method="post">
			<label>Judul Buku</label>
			<div>
				<input type="text" name="judul" value="<?php echo $row['judul'] ?>"></input>
			</div>

			<label>Nama Penyewa</label>
			<div>
				<input type="text" name="penyewa" value="<?php echo $row['penyewa'] ?>"></input>
			</div>

			<label>Durasi Sewa</label>
			<div>
				<input type="text" name="durasi" value="<?php echo $row['durasi'] ?>"></input>
			</div>

			<div>
				<input type="submit" name="sewa" value="Sewa Buku"></input>
			</div>
		</form>
	</div>
</body>
</html>