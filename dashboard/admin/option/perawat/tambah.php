<?php
//memasukkan file config.php
include '../../../../alat/koneksi.php';
    if(isset($_POST['submit'])){
        $nama           =@$_POST['nama'];
        $username       =@$_POST['username'];
        $pass           =(md5(@$_POST['password']));
        $level          ='2';
        
            $sql = mysqli_query($koneksi, "INSERT INTO t_petugas(nama_petugas, username, password, id_level) 
            VALUES('$nama', '$username', '$pass', '$level')") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menambahkan petugas"); document.location="../../perawat.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal menambahkan petugas</div>';
            }
        }