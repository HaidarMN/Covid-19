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
            <a class="navbar-brand " href="#"><h2><i class="fas fa-stethoscope"></i> Covid-19 Self Check-Up</h2></a>
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
            <header>
            <h3>1. Apakah Anda mengalami salah satu dari yang berikut:</h3>
            </header>
            <section>
                <p class="text-info large"></p>
                <nav>
                    <h5><ol type="a">
                        <li><h5>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)</h5></li>
                        <li><h5>Nyeri dada yang parah</h5></li>
                        <li><h5>Sulit untuk bangun</h5></li>
                        <li><h5>Merasa kebingungan</h5></li>
                        <li><h5>Penurunan kesadaran</h5></li>
                    </ol></h5>
                </nav>
                <br>
                <div class="large text-center">
                    <button class="btn btn-primary" onclick="location.href='sakit.php';">Ya</button>
                    <button class="btn btn-success" onclick="location.href='b.php';">Tidak</button>
                </div>
            </section>
        </div>
    </div>
</body>

</html>