<?php
	include('../../../../alat/koneksi.php');
	
	$id = $_GET['id'];
	
    $suhu       =@$_POST['suhu'];
    
    $idb = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT id_hasil FROM t_pasien WHERE id_pasien=$id"));
	$sql = mysqli_query($koneksi, "UPDATE t_detail_pasien SET suhu='$suhu' WHERE id_petugas='" . $idb['id_hasil'] . "'");
    if($sql){
        echo '<script>alert("Berhasil mengedit data pasien."); document.location="../../positif.php?id='.$id.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal mengedit data pasien.</div>';
    }
    // header('location:buku.php');

?>