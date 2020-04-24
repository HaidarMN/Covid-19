<?php
include '../../alat/koneksi.php';
session_start();
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['id_level'] != "2") {
    header("location:../../login.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-CheckUp</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/dasboard.css">
</head>

<body>
    <div class="container-fluid p-0">
        <header>
            <div class="container-fluid p-3">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="#">
                        <span><i class="fas fa-stethoscope fa-2x mx-3"></i>nCov Self-CheckUp</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-right text-black"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="mr-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pasien.php" class="nav-link">Pasien
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="positif.php" class="nav-link">Positif
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="perawat.php" class="nav-link">Perawat
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../alat/logout.php" class="nav-link">Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container-fluid">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="rect-welcome">
                        <div class="col-sm">
                            <div class="row">
                                <div class="col-md-5">
                                    <h2>Selamat datang kembali, <?php echo $_SESSION['username']?></h2>
                                    <p>
                                        Hari-hari ini penuh dengan kekhawatiran
                                        Dimana doa terbaik sudah dipanjatkan
                                        Bekerja, belajar, dan ibadah sudah dirumahkan
                                        Menunggu nasib baik penuh harapan.
                                    </p>
                                </div>
                                <div class="col-md-7 text-center ">
                                    <img src="../../images/dasboard_profile.svg" class="w-50" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                    <?php
                    $pas = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(id_pasien) AS TOT FROM t_pasien"));
                    $pos = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(id_pasien) AS TOT FROM t_pasien WHERE hasil='Positif'"));
                    $per = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(id_petugas) AS TOT FROM t_petugas WHERE id_petugas!=1"));
                    ?>
                    <a href="pasien.php">
                        <div class="rect-ds">
                            <div class="col-sm-12">
                                <h2>Banyak Pasien</h2>
                                <h1 id="" class="text-right"><?php echo $pas['TOT']?></h1>
                                <p>Total Pasien</p>
                            </div>
                        </div>
                    </a>
                    <a href="positif.php">
                        <div class="rect-ds">
                            <div class="col-sm-12">
                                <h2>Pasien Positif</h2>
                                <h1 id="" class="text-right"><?php echo $pos['TOT']?></h1>
                                <p>Total Pasien Positif</p>
                            </div>
                        </div>
                    </a>
                    <a href="perawat.php">
                        <div class="rect-ds">
                            <div class="col-sm-12">
                                <h2>Banyak Perawat</h2>
                                <h1 id="" class="text-right"><?php echo $per['TOT']?></h1>
                                <p>Total Perawat</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <p class="text-center">Copyright by @pestilene</p>
        </main>
    </div>
</body>

</html>
