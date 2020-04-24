<?php
include('../covid/config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="css.css">
    <script type="text/javascript" src="../covid/app.js"></script>
    <script>
       $(document).ready(function(){
         $("#myModal").on("show.bs.modal", function(event){
           var button = $(event.relatedTarget);

           var tittleData = button.data("title");
           $(this).find(".modal-title").text(titleData);
         });
       });
       $(document).ready(function(){
         $("#Satu").on("show.bs.modal", function(event){
           var button = $(event.relatedTarget);

           var tittleData = button.data("title");
           $(this).find(".modal-title").text(titleData);
         });
       });
       $(document).ready(function(){
         $("#Dua").on("show.bs.modal", function(event){
           var button = $(event.relatedTarget);

           var tittleData = button.data("title");
           $(this).find(".modal-title").text(titleData);
         });
       });
       $(document).ready(function(){
         $("#Tiga").on("show.bs.modal", function(event){
           var button = $(event.relatedTarget);

           var tittleData = button.data("title");
           $(this).find(".modal-title").text(titleData);
         });
       });
       $(document).ready(function(){
         $("#Empat").on("show.bs.modal", function(event){
           var button = $(event.relatedTarget);

           var tittleData = button.data("title");
           $(this).find(".modal-title").text(titleData);
         });
       });
       $(document).ready(function(){
         $("#Lima").on("show.bs.modal", function(event){
           var button = $(event.relatedTarget);

           var tittleData = button.data("title");
           $(this).find(".modal-title").text(titleData);
         });
       });
       $(document).ready(function(){
         $("#Enam").on("show.bs.modal", function(event){
           var button = $(event.relatedTarget);

           var tittleData = button.data("title");
           $(this).find(".modal-title").text(titleData);
         });
       });
     </script>
</head>
<body>
    <header>
    <div class="container-fluid p-0">                           
        <nav class="navbar navbar-expand-sm navbar-light bg-light" >
            <a class="navbar-brand" href="#"><h2><i class="fas fa-stethoscope"></i> Covid-19 Self Check-Up</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-right text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn px-4" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <div>
                            <button type="button" class="btn px-4 py-2" data-toggle="modal" data-target="#myModal" data-title="cekup">Self Check-Up</button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="btn px-4" href="#covid">Covid-19</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn px-4" href="#tips">Tips</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn px-4 py-2 primary-btn">Perawat</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <form class="awal" method="post">
        <h1 class="gedi">Self <br> Check-Up <br> Covid-19</h1>
        <h3 class="cilik">Saat ini dengan mulai munculnya ODP, PDP dan kasus Positif COVID-19 di Jawa Timur, tentunya self-assesment COVID-19 akan dibutuhkan oleh masyarakat.</h3>
        <div>
        <button type="button" class="btn px-5 py-2 btn-check submit"data-toggle="modal" data-target="#myModal" data-title="cekup" style="width: 246px; height: 70px;">Self Check-Up</button>
        </div>
    </form>
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
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
                                <label class="control-label">Kelamin:</label>
                                <input type="text" name="kelamin" class="form-control">
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
                                <label class="control-label">Kelamin:</label>
                                <input type="text" name="kelamin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Suhu:</label>
                                <input type="number" name="suhu" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tanggal Cek:</label>
                                <input type="date" name="tgl_cek" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <div>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Satu" data-title="hi" data-dismiss="modal">Lanjut</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="bikin">
        <img src="N.png">
    </div>
    <div id="Satu" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label"><h4>1. Apakah Anda mengalami salah satu dari yang berikut:</h4></label>
                                <h5><ol type="a">
                                    <li><h5>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)</h5></li>
                                    <li><h5>Nyeri dada yang parah</h5></li>
                                    <li><h5>Sulit untuk bangun</h5></li>
                                    <li><h5>Merasa kebingungan</h5></li>
                                    <li><h5>Penurunan kesadaran</h5></li>
                                </ol></h5>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ya</button>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Dua" data-title="hi" data-dismiss="modal">Tidak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div id="Dua" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label"><h4>2. Apakah Anda mengalami salah satu dari yang berikut:</h4></label>
                                <h5><ol type="a">
                                    <li><h5>Nafas yang pendek saat istirahat</h5></li>
                                    <li><h5>Ketidakmampuan untuk berbaring karena kesulitan bernafas </h5></li>
                                    <li><h5>Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas</h5></li>
                                </ol></h5>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ya</button>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Tiga" data-title="hi" data-dismiss="modal">Tidak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Tiga" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label"><h4>3. Apakah Anda mengalami salah satu dari yang berikut:</h4></label>
                                <h5><ol type="a">
                                    <li><h5>Demam</h5></li>
                                    <li><h5>Batuk</h5></li>
                                    <li><h5>Bersin</h5></li>
                                    <li><h5>Sakit Tenggorokan</h5></li>
                                    <li><h5>Sulit Bernafas</h5></li>
                                </ol></h5>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ya</button>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Empat" data-title="hi" data-dismiss="modal">Tidak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Empat" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label"><h4>4. Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri? (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?</h4></label>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ya</button>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Lima" data-title="hi" data-dismiss="modal">Tidak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Lima" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label"><h4>5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4></label>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ya</button>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Enam" data-title="hi" data-dismiss="modal">Tidak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Enam" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label"><h4>6. Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4></label>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ya</button>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Enam" data-title="hi" data-dismiss="modal">Tidak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
                    <p>Data diambil asli hari ini dari <a href="https://github.com/ExpDev07/coronavirus-tracker-api">Sini</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="tentang" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <img src="a.png" alt="Lets Check">
                </div>
                <div class="col-md-5 col-sm-12 text-right">
                    <h1>Apa itu Self-Checkup</h1>
                    <h4>
                        Self-Checkup ini adalah alat sederhana yang bisa membantu menentukan apakah Anda sehat-sehat saja atau ada gejala yang memerlukan penilaian, pemeriksaan dan pengujian lebih lanjut untuk COVID-19.
                        Alat self-checkup diadaptasi dari Self-Checkup COVID-19 dari British Columbia, Kanada. Anda dapat menyelesaikan penilaian ini untuk diri sendiri maupun orang lain.
                    </h4>
                </div>
            </div>
        </div>
    </section>
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
                        <img src="../covid/wash.svg" alt="cuci" class="tipss">
                        <h5>Cuci Tangan</h5>
                        <p>Dengan Hand sanitizer atau sabun dan bilas dengan air</p>
                    </div>
                </div>
                <div class="rect">
                    <div class="col-sm-12">
                        <img src="../covid/tissue.svg" alt="SapuTangan" class="tipss">
                        <h5>Gunakan Sapu Tangan</h5>
                    <p>Jika hendak bersin atau batuk, tutupilah dengan sapu tangan</p>
                    </div>
                </div>
                <div class="rect">
                    <div class="col-sm-12">
                        <img src="../covid/mask.svg" alt="masker" class="tipss">
                        <h5>Gunakan Masker</h5>
                    <p>Jika keluar rumah selalu gunakan masker</p>
                    </div>
                </div>
                <div class="rect">
                    <div class="col-sm-12">
                        <img src="../covid/animal.svg" alt="hewan" class="tipss">
                        <h5>Hindari Kontak Langsung Dengan Hewan</h5>
                    <p>Hindari kontak langsung dengan hewan, karena hewan dapat menulari kita</p>
                    </div>
                </div>
                <div class="rect">
                    <div class="col-sm-12">
                        <img src="../covid/doctor.svg" alt="dokter" class="tipss">
                        <h5>Pergi Ke Dokter</h5>
                        <p>Jika merasa tidak enak badan segera pergi ke rumah sakit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <footer>
        <div class="container-fluid">
            <div class="row text-left">
                <div class="col-md-5 col-sm-5">
                    <h4 class="text-dark"><span><i class="fas fa-stethoscope fa-2x mx-3"></i>Self-Checkup</h4>
                    <h5 class="text-dark">
                        Adalah website yang membantu pengecekan dini virus korona dengan tujuan menekan
                        angka pasien virus korona, serta mebantu para anggota medis dalam pelacakan virus korona
                    </h5>
                    <a href="https://www.instagram.com/kedarnacha/?hl=id"><i class="fab fa-instagram"></i></a>
                    <h5 class="pt-4 text-dark">Developed By
                        <span>kedarnacha</span>
                    </h5>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>
</html>