<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self-CheckUp</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="js/app.js"></script>
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "positif") {
            echo "<div class='alert alert-danger'>Gejala-gejala ini membutuhkan perhatian segera. Anda harus segera menelepon Rumah Sakit Terdekat, atau langsung pergi ke instalasi gawat darurat terdekat.</div>";
        }
    }
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "coba") {
            echo "<div class='alert alert-danger'>Silahkan Coba Lagi.</div>";
        }
    }
    ?>
    <div class="container-fluid p-0">
        <!-- header -->
        <header>
            <div class="container-fluid p-3">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="#">
                        <span><i class="fas fa-stethoscope fa-2x mx-3"></i>Self-CheckUp</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-right text-black"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="mr-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#about" class="nav-link">Tentang
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="modal" href="#pasien" class="nav-link">Self Check-Up
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#covid" class="nav-link">Covid 19
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tips" class="nav-link">Tips
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#developer" class="nav-link">About Developer
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link">login
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <h1>Self</h1>
                        <h1>Check-Up</h1>
                        <h1>Covid19</h1>
                        <p>
                            Saat ini dengan mulai munculnya ODP, PDP dan kasus Positif COVID-19,
                            maka dibuatlah self-CheckUp ini dengan tujuan mendeteksi secara dini Covid19.
                        </p>
                        <div class="text-center">
                            <br>
                            <button class="btn px-5 py-2 btn-check" data-target="#pasien" data-toggle="modal">
                                CHECK-UP
                            </button>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <img src="images/dokter.png" style="width: 400px; height: 500px; margin-left: 90px;" alt="Lets Check">
                    </div>
                </div>
            </div>
        </header>
        <!-- Data Covid -->
        <main>
            <section class="covid" id="covid">
                <div class="container">
                    <div class="col-md-12">
                        <div class="panel text-center" id="covid">
                            <div class="row">
                                <div class="col">
                                    <h3 id="tot" class="tot"></h3>
                                    <br>
                                    <p>Total Kasus</p>
                                </div>
                                <div class="col">
                                    <h3 id="sembuh" class="sem"></h3>
                                    <br>
                                    <p>Total Sembuh (Hari Ini)</p>
                                </div>
                                <div class="col">
                                    <h3 id="mati" class="mat"></h3>
                                    <br>
                                    <p>Total Meninggal</p>
                                </div>
                            </div>
                            <br>
                            <p>Data asli hari ini diambil dari <a href="https://github.com/ExpDev07/coronavirus-tracker-api">sini</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pengenalan -->
            <section class="tentang" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <img src="images/self.png" alt="Lets Check">
                        </div>
                        <div class="col-md-5 col-sm-12 text-right">
                            <h1>Self-Checkup</h1>
                            <p>
                                adalah alat sederhana yang bisa membantu menentukan apakah Anda sehat-sehat saja atau ada gejala yang memerlukan penilaian, pemeriksaan dan pengujian lebih lanjut untuk COVID-19.
                                Alat self-checkup diadaptasi dari Self-Checkup COVID-19 dari British Columbia, Kanada. Anda dapat menyelesaikan penilaian ini untuk diri sendiri maupun orang lain.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Tips -->
            <section class="tips" id="tips">
                <div class="content text-center">
                    <h1>TIPS</h1>
                    <p>
                        Tips agar tercegah dari virus korona
                    </p>
                </div>
                <div class="container-fluid text-center">
                    <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                        <div class="rect">
                            <div class="col-sm-12">
                                <img src="images/wash.png" style="width: 200px" alt="cuci" class="tipss">
                                <h5>Cuci Tangan</h5>
                                <p>Dengan Hand sanitizer atau sabun dan bilas dengan air</p>
                            </div>
                        </div>
                        <div class="rect">
                            <div class="col-sm-12">
                                <img src="images/tissue.png" style="width: 200px" alt="SapuTangan" class="tipss">
                                <h5>Gunakan Sapu Tangan</h5>
                                <p>Jika hendak bersin atau batuk, tutupilah dengan sapu tangan</p>
                            </div>
                        </div>
                        <div class="rect">
                            <div class="col-sm-12">
                                <img src="images/mask.png" style="width: 180px" alt="masker" class="tipss">
                                <h5>Gunakan Masker</h5>
                                <p>Jika keluar rumah selalu gunakan masker</p>
                            </div>
                        </div>
                        <div class="rect">
                            <div class="col-sm-12">
                                <img src="images/animal.png" style="width: 250px" alt="hewan" class="tipss">
                                <h5>Hindari Kontak Langsung Dengan Hewan</h5>
                                <p>Hindari kontak langsung dengan hewan, karena hewan dapat menulari kita</p>
                            </div>
                        </div>
                        <div class="rect">
                            <div class="col-sm-12">
                                <img src="images/p3k.png" style="width: 250px" alt="dokter" class="tipss">
                                <h5>Pergi Ke Dokter</h5>
                                <p>Jika merasa tidak enak badan segera pergi ke rumah sakit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tentang" id="developer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 text-left">
                            <h1>About Developer</h1>
                            <p>
                                Nama Lengkap: Haidar Muhammad Naufal
                                <br>
                                Jenis Kelamin: Laki-Laki
                                <br>
                                Tempat, Tanggal Lahir: Malang, 12 Desember 2004
                                <br>
                                Alamat: Perum. Green Pakis block L-12, Pakis, Kab. Malang
                                <br>
                                Agama: Islam
                                <br>
                                Umur: 15
                                <br>
                                Status: Pelajar

                            </p>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <img src="images/saya.jpg" alt="Lets Check" style="width: 400px; height: 450px; margin-left: 90px; border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer>
            <div class="container-fluid">
                <div class="row text-left">
                    <div class="col-md-5 col-sm-5">
                        <h4 class="text-light"><span><i class="fas fa-stethoscope fa-2x mx-3"></i>Self-Checkup</h4>
                        <p class="text-light">
                            Adalah website yang dibuat berdasarkan tugas bertemakan Covid-19
                            yang sudah diberikan oleh pihak sekolah
                        </p>
                        <p class="pt-4 text-light">Developed By
                            <br>
                            <a href="https://www.instagram.com/pestilene/?hl=id"><i class="fab fa-instagram">  pestilene</i></a>

                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="pasien" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="logic/tambah.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title">Self Check-Up</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">Nama:</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Umur:</label>
                            <input type="number" name="umur" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Alamat:</label>
                            <input type="text" name="alamat" class="form-control">
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
                            <label class="control-label">Suhu:</label>
                            <input type="number" name="suhu" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" name="submit" class="btn btn-default">Lanjut</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
