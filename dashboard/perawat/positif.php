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
    <title>Dashboard-Positif</title>

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
                                <a href="dashboard.php" class="nav-link">Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pasien.php" class="nav-link">Pasien
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Positif
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
                                    <h2>Daftar Pasien Positif</h2>
                                    <p>
                                        Jadilah Hebat
                                        Satu-satunya hal yang berdiri di antara Anda menaklukkan hari ini atau membiarkannya sia-sia, adalah Anda.
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
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Kelamin</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Suhu</th>
                                <th>Karantina</th>
                                <th>Selesai Karantina</th>
                                <th>Diperbarui Pada</th>
                                <th>Perawat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            @$sql = mysqli_query($koneksi, "SELECT * FROM t_pasien WHERE hasil='Positif'") or mysqli_error($koneksi);
                            if (mysqli_num_rows($sql) > 0) {
                                $no = 1;
                                while ($temp = mysqli_fetch_array($sql)) {
                                    @$pet = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT nama_petugas FROM t_petugas WHERE id_petugas='" . $temp['id_petugas'] . "'"))
                            ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $temp['nama'] ?></td>
                                        <td><?php echo $temp['kelamin'] ?></td>
                                        <td><?php echo $temp['umur'] ?></td>
                                        <td><?php echo $temp['alamat'] ?></td>
                                        <td><?php echo $temp['suhu'] ?></td>
                                        <td><?php echo date('d F Y', strtotime($temp['tgl_karantina'])) ?></td>
                                        <td><?php echo date('d F Y', strtotime($temp['tgl_selesai_karantina'])) ?></td>
                                        <td><?php echo date('d F Y', strtotime($temp['tgl_cek'])) ?></td>
                                        <td><?php echo @$pet['nama_petugas'] ?></td>
                                        <td>
                                            <a href="#positif<?php echo $temp['id_pasien'] ?>" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Perbarui Data</a>
                                            <?php include('modal.php')?>
                                        </td>
                                    </tr>
                            <?php
                                    $no++;
                                }
                            } else {
                                echo '
      <tr>
        <td colspan="11">Tidak ada data.</td>
      </tr>
      ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="text-center">Copyright by @pestilene</p>
        </main>
    </div>
</body>

</html>
