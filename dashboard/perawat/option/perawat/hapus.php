<?php
	include('../../../../alat/koneksi.php');
	$id = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM t_petugas WHERE id_petugas='$id'");
	header('location: ../../perawat.php');

?>