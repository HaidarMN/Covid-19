<?php
include('../../../../alat/koneksi.php');
session_start();
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['id_level'] == "") {
    header("location: ../../../../login.php?pesan=gagal");
}

$id = $_GET['id'];

$nama                = @$_POST['nama'];
$kelamin            = @$_POST['kelamin'];
$alamat             = @$_POST['alamat'];
$umur               = @$_POST['umur'];
$hasil              = @$_POST['hasil'];


$sql = mysqli_query($koneksi, "UPDATE t_pasien SET nama='$nama', kelamin='$kelamin', alamat='$alamat', umur='$umur', hasil='$hasil' WHERE id_pasien=$id");
if ($sql) {
    echo '<script>alert("Berhasil mengedit data pasien."); document.location="../../pasien.php?id=' . $id . '";</script>';
} else {
    echo '<div class="alert alert-warning">Gagal mengedit data pasien.</div>';
}
    // header('location:buku.php');
