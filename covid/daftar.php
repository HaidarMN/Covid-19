<?php
    include('../covid/config.php');
    if(isset($_POST['submit'])){
        $id			    = @$_POST['id_cek'];
        $nama			= @$_POST['nama'];
        $username	    = @$_POST['username'];
        $password	    = @$_POST['password'];
        $pass           = md5($Password);
        $tgl_cek	    = @$_POST['tgl_cek'];
        $id_lvl	        = 1;

        $query = mysqli_query($koneksi, "INSERT INTO t_cek (id_cek,nama,username, password, tgl_cek, id_level) 
        VALUES ('$id', '$nama', '$username', '$pass', '$tgl_cek', '$id_lvl')");
    }
?> 