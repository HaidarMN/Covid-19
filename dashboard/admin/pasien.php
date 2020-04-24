<?php
include '../../alat/koneksi.php';
session_start();
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['id_level'] != "1") {
    header("location:../../login.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Pasien</title>

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
                                <a href="#" class="nav-link">Pasien
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
                                    <h2>Daftar Pasien</h2>
                                    <p>
                                        Kita begitu cepat melupakan bahwa doa adalah salah satu bentuk penyembuhan yang paling kuat. Apakah Anda religius atau tidak, hanya duduk bermeditasi atau mengungkapkan ketakutan dan frustrasi Anda dengan suara keras merupakan keajaiban bagi kecemasan Anda.
                                    </p>
                                </div>
                                <div class="col-md-7 text-center ">
                                    <img src="../../images/dasboard_admin.svg" class="w-50" alt="">
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
                                <th>Hasil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($koneksi, "SELECT nama, kelamin, hasil, id_pasien FROM t_pasien") or mysqli_error($koneksi);
                            if (mysqli_num_rows($sql) > 0) {
                                $no = 1;
                                while ($temp = mysqli_fetch_array($sql)) {
                            ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $temp['nama'] ?></td>
                                        <td><?php echo $temp['kelamin'] ?></td>
                                        <td><?php echo $temp['hasil'] ?></td>
                                        <td>
                                            <a href="#editpas<?php echo $temp['id_pasien']; ?>" data-toggle="modal" class="btn edit"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                            <a href="#delpas<?php echo $temp['id_pasien']; ?>" data-toggle="modal" class="btn delete"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                                            <?php include('modal.php'); ?>
                                        </td>
                                    </tr>
                            <?php
                                    $no++;
                                }
                            } else {
                                echo '
      <tr>
        <td colspan="5">Tidak ada data.</td>
      </tr>
      ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center py-3">
                    <button type="button" class="btn plus" data-toggle="modal" data-target="#myModal" data-title="tambahPasien">Tambah Pasien</button>
                </div>
                <div id="myModal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="option/pasien/tambah.php" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Data Pasien</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Kelamin</label>
                                        <select name="kelamin" class='form-control' required>
                                            <option value="" disabled selected hidden>Pilih Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            <option value="Tidak Disebutkan">Tidak Disebutkan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-tabel">Umur</label>
                                        <input type="number" name="umur" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-tabel">Suhu</label>
                                        <input type="number" name="suhu" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-tabel">Alamat</label>
                                        <input type="alamat" name="alamat" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Hasil</label>
                                        <select name="hasil" class='form-control' required>
                                            <option value="" disabled selected hidden>Pilih Hasil Tes</option>
                                            <option value="Positif">Positif</option>
                                            <option value="Negatif">Negatif</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center">Copyright by @pestilene</p>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
