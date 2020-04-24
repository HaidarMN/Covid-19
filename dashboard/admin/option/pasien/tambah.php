<?php
//memasukkan file config.php
include '../../../../alat/koneksi.php';
session_start();
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['id_level'] == "") {
    header("location: ../../../../login.php?pesan=gagal");
}

if (isset($_POST['submit'])) {
    $nama                = @$_POST['nama'];
    $kelamin             = @$_POST['kelamin'];
    $umur                = @$_POST['umur'];
    $suhu                = @$_POST['suhu'];
    $alamat              = @$_POST['alamat'];
    $hasil               = @$_POST['hasil'];
    $tgl_karantina       = date('Y-m-d');
    $tgl_selesai         = date('Y-m-d', strtotime($tgl_karantina . '+ 14 days'));
    $petugas        = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT id_petugas FROM t_petugas ORDER BY RAND() LIMIT 1"));

    $sql = mysqli_query($koneksi, "INSERT INTO t_pasien (nama, umur, alamat, kelamin, suhu, tgl_karantina, tgl_selesai_karantina, tgl_cek, id_petugas) 
    VALUES ('$nama','$umur','$alamat','$kelamin','$suhu','$tgl_karantina','$tgl_selesai','$tgl_karantina', '" . $petugas['id_petugas'] . "')");
    if ($sql) {
        echo '<script>alert("Berhasil menambahkan Pasien"); document.location="../../pasien.php";</script>';
    } else {
        echo '<div class="alert alert-warning">Gagal menambah Pasien</div>';
    }
}
