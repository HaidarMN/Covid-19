<?php
	include('../../../../alat/koneksi.php');
	
	$id = $_GET['id'];
	
    $nama           =@$_POST['nama'];
    $username       =@$_POST['username'];
	
	$sql = mysqli_query($koneksi, "UPDATE t_petugas SET nama_petugas='$nama', username='$username' WHERE id_petugas='$id'");
    if($sql){
        echo '<script>alert("Berhasil mengedit data petugas."); document.location="../../perawat.php?id='.$id.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal mengedit data petugas.</div>';
    }
    // header('location:buku.php');

?>