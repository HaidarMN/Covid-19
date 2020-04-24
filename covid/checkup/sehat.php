<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku-Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="../css.css">
</head>
<body>
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
                        <a class="nav-link px-3" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Self Check-Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Covid-19</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Tips</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn px-4 py-2 primary-btn" onclick="location.href='keluar.php';">Keluar</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="p-3 mx-3">
        <div class="card shadow p-5" style="margin-top:20px">
            <header class="text-center">
            <h2>Kesimpulan</h2>
            </header>
            <section>
            <p> <h4>Anda kemungkinan besar tidak terinfeksi oleh COVID-19, Namun anda disarankan untuk tetap tinggal dirumah. 
                Infeksi anda mungkin disebabkan virus selain COVID-19, Oleh karena itu anda tidak perlu dites oleh COVID-19. 
                Meskipun demikian, hindarilah keluar rumah jika memungkinkan. Penyakit anda akan sembuh sendiri dengan cukup 
                makan dan istirahat</h4>
			</p>
            <p><h4>Apabila anda mengalami gejala atau mendapatkan informasi baru tentang perjalanan penyakit anda, anda bisa 
                membuka web ini lagi.</h4>
			</p>
            <br>
            <div class="large text-center">
                    <h4><button class="btn btn-primary" onclick="location.href='a.php';">Cek neh a</button></h4>
            </div>
            </section>
            <footer class="large text-center">
            <br>
            <p><h4>Terimakasih telah menggunakan test ini, semoga anda sehat selalu.</h4>
            <h4>Tetap waspada, tidak perlu panik.</h4>
            <h4>Call center dan rumah sakit kita di Jawa Timur siap selalu untuk melayani anda</h4>
            <h4>Hubungi <a href="tel:1500117" class="btn btn-danger">1500 117</h4></a></p>
            </footer>
        </div>
    </div>
</body>

</html>