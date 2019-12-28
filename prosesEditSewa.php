<?php  

	include_once('koneksi.php');

	$id = $_GET['id'];
	
	$judul = $_POST['judul'];
	$penyewa = $_POST['penyewa'];
	$durasi = $_POST['durasi'];

	$tgl_sewa = date('y-m-d');

	$query = "UPDATE sewa SET judul ='$judul', penyewa ='$penyewa', durasi ='$durasi' WHERE id ='$id'";
			 
	mysqli_query($koneksi, $query);

	header("location: index.php");

?>