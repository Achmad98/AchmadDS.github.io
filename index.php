<?php  
include_once('koneksi.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME | DAFTAR PENYEWA BUKU</title>
</head>
<body>
<div>
	<div>
		<a href="formSewa.php">Tambah Sewa</a>
	</div>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>JUDUL BUKU</th>
			<th>PENYEWA</th>
			<th>TANGGAL SEWA</th>
			<th>DURASI PEMINJAMAN</th>
			<th>TANGGAL PENGEMBALIAN</th>
			<th>AKSI</th>
		</tr>

		<?php  
		$query = mysqli_query($koneksi, 'SELECT * FROM sewa');

		$no=1;
		while($row= mysqli_fetch_array($query)){

			$tgl_selesai = date('Y-m-d', strtotime($row['tgl_sewa'] . "+ $row[durasi] days"));

			echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>$row[judul]</td>";
			echo "<td>$row[penyewa]</td>";
			echo "<td>$row[tgl_sewa]</td>";
			echo "<td>$row[durasi]</td>";
			echo "<td>$tgl_selesai</td>";
			echo "<td><a href='formEdit.php?id=$row[id]'>Edit</td>";
			echo "<td><a href='prosesDeleteSewa.php?id=$row[id]'>Delete</td>";

			$no++;
		}

		
		?>
	</table>
</div>

</body>
</html>