<!DOCTYPE html>
<html>
<head>
	<title>WELCOME | FORM PENYEWAAN BUKU</title>
</head>
<body>
	<div>
		<form action="prosesSewa.php" method="post">
			<label>Judul Buku</label>
			<div>
				<input type="text" name="judul"></input>
			</div>

			<label>Nama Penyewa</label>
			<div>
				<input type="text" name="penyewa"></input>
			</div>

			<label>Durasi Sewa</label>
			<div>
				<input type="text" name="durasi"></input>
			</div>

			<div>
				<input type="submit" name="sewa" value="Sewa Buku"></input>
			</div>
		</form>
	</div>
</body>
</html>