<?php
//memasukkan file config.php
include '../alat/koneksi.php';
if (isset($_POST['submit'])) {
    $nama             = @$_POST['nama'];
    $umur             = @$_POST['umur'];
    $alamat           = @$_POST['alamat'];
    $kelamin          = @$_POST['kelamin'];
    $suhu             = @$_POST['suhu'];
    $hasil            = 'Negatif';
    $tgl_cek          = date('Y-m-d');
    $sql = mysqli_query($koneksi, "INSERT INTO t_pasien(nama, umur, alamat, kelamin, suhu, tgl_cek, hasil) VALUES('$nama','$umur','$alamat','$kelamin','$suhu','$tgl_cek', '$hasil')") or die(mysqli_error($koneksi));
    if ($sql) {
        $_SESSION['nama'] = $nama;
        echo '<script>alert("Berhasil menambahkan data.");</script>';
        header('location:../check.php');
    } else {
        echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
    }

}
