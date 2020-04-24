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
            <section>
               <h4>5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4>
                <div class="large text-center">
                    <button class="btn btn-primary" onclick="location.href='sakit.php';">Ya</button>
                    <button class="btn btn-info" onclick="location.href='f.php';">Tidak</button>
                </div>
            </section>
        </div>
    </div>
</body>

</html>