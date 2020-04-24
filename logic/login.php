<?php
include "../alat/koneksi.php";
//cek username
$user = ($_POST['username']);
$pass = (md5($_POST['password']));
//cek di sql
$login = mysqli_query($koneksi, "SELECT * FROM t_petugas WHERE username='$user' AND password='$pass'");
$temp = mysqli_fetch_assoc($login);
if ($temp['id_level'] == "1") {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['id_level'] = "1";
    $_SESSION['id_admin'] = $temp['id_petugas'];
    header("location:../dashboard/admin/dashboard.php");
    } else if($temp['id_level'] == "2"){
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['id_level'] = "2";
        $_SESSION['id_petugas'] = $temp['id_petugas'];
        header("location:../dashboard/perawat/dashboard.php");
    } else {
        header("location:../login.php?pesan=gagal");
    }
