<?php
  session_start();
  include '../alat/koneksi.php';
    
    if(isset($_POST['submit'])){
    $nama  = $_POST['nama'];
    $hasil = "Positif";
    $tgl_karantina       = date('Y-m-d');
    $tgl_selesai         = date('Y-m-d', strtotime($tgl_karantina . '+ 14 days'));
    $petugas        = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT id_petugas FROM t_petugas ORDER BY RAND() LIMIT 1"));

    $nc    = mysqli_query($koneksi, "UPDATE t_pasien SET hasil='$hasil', tgl_karantina='$tgl_karantina', tgl_selesai_karantina='$tgl_selesai', id_petugas='".$petugas['id_petugas']."' WHERE nama='$nama'");
    if($nc){
      header('location:../index.php?pesan=positif');
    }else{
      header('location:../index.php?pesan=coba');
    }
  }
