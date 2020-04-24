<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku-Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile-style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div class="container-fluid p-0">                           
        <nav class="navbar navbar-expand-lg">
            <a class="navbar" href="#"><h3>Covid-19 Self Check-Up</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-right text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Self Check-Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Covid-19</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tips</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='register.php';">DAFTAR</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='login.php';">MASUK</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="p-3 mx-3">
        <div class="card shadow p-5" style="margin-top:20px">
            <header class="text-center">
            <h3>Kesimpulan</h3>
            </header>
            <section>
            <p> <h5>Anda kemungkinan besar tidak terinfeksi oleh COVID-19, Namun anda disarankan untuk tetap tinggal dirumah. 
                Infeksi anda mungkin disebabkan virus selain COVID-19, Oleh karena itu anda tidak perlu dites oleh COVID-19. 
                Meskipun demikian, hindarilah keluar rumah jika memungkinkan. Penyakit anda akan sembuh sendiri dengan cukup 
                makan dan istirahat</h5>
			</p>
            <p><h5>Apabila anda mengalami gejala atau mendapatkan informasi baru tentang perjalanan penyakit anda, anda bisa 
                membuka web ini lagi.</h5>
			</p>
            <br>
            <div class="large text-center">
                    <button class="btn btn-primary" onclick="location.href='a.php';">Cek neh a</button>
            </div>
            </section>
            <footer class="large text-center">
            <br>
            <p><h5>Terimakasih telah menggunakan test ini, semoga anda sehat selalu.</h5></p>
            <p><h5>Tetap waspada, tidak perlu panik.</h5></p>
            <p><h5>Call center dan rumah sakit kita di Jawa Timur siap selalu untuk melayani anda</h5></p>
            <p><h5>Hubungi <a href="tel:1500117" class="btn btn-danger">1500 117</h5></a></p>
            </footer>
        </div>
    </div>
</body>

</html>