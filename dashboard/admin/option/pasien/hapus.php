<?php
    include('../../../../alat/koneksi.php');
    session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['id_level']=="") {
    header("location: ../../../../login.php?pesan=gagal");
    }
	
    $id = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM t_pasien WHERE id_pasien='$id'");
	header('location:../../pasien.php');

?>