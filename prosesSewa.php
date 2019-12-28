<?php  

	include_once('koneksi.php');
	
	$judul = $_POST['judul'];
	$penyewa = $_POST['penyewa'];
	$durasi = $_POST['durasi'];

	$tgl_sewa = date('y-m-d');

	$query = "INSERT INTO sewa (judul, penyewa, durasi, tgl_sewa) VALUES ('$judul', '$penyewa', '$durasi', '$tgl_sewa')";
	
	mysqli_query($koneksi, $query);

	header("location: index.php");

?>