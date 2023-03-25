<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Untuk Membuka Halaman Ini, Silahkan Login Terlebih Dahulu!');document.location='login.php'</script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/f8a09ade68.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homestyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!--Navbar START-->
    <nav class="navbar navbar-expand-lg bg-warning fw-bolder sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-xl-4" href="#"><img class="logo" src="assets/poltek3.png" style="height: 70px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="form/index.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Form
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="data_peminjaman_lab.php" target="_blank">Data Peminjaman</a></li>
                            <li><a class="dropdown-item" href="data_pengembalian_lab.php" target="_blank">Data Pengembalian</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="data_pelaporan_lab.php" target="_blank">Data Pelaporan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="informasi_lab.php" target="_blank">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact_lab.php" target="_blank">Contact</a>
                    </li>
                </ul>
                <form class="logout d-flex mt-3" role="submit">
                    <p class="me-2"><i class="fa-solid fa-user-gear"></i> Hello, <?= $_SESSION['nama'] ?></p>
                    <p class="me-2">|</p>
                    <a href="logout.php" role="button"><i class="fa-solid fa-right-from-bracket">Log out</i></a>
                </form>
            </div>
        </div>
    </nav>
    <!--Navbar END-->

    <!--Container START-->
    <div class="container-fluid text-light" style="height: 100vh;">
        <div class="nav row justify-content-evenly text-center align-items-center">
            <div class="col-sm-6">
                <div class="card text-bg-warning mb-3">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">CONTACT</h3>
                        <p class="card-text">Anda dapat menikmati layanan secara online <i class="fa-solid fa-clock"></i></p>
                    </div>
                </div>
            </div>
        </div>
        <!--Data START-->
        <div class="row justify-content-evenly text-center align-items-center text-body">
            <div class="col-sm-6">
                <table class="table">
                    <thead>
                        <tr class="bg-warning">
                            <th scope="col">No</th>
                            <th scope="col">Nama Laboran</th>
                            <th scope="col">No. Handphone</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Veve Karisa</td>
                            <td>0899-408-7170</td>
                            <td>karisaklaudia@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Irsyad Nafi Alif Perdana</td>
                            <td>0878-1870-9571</td>
                            <td>irsyadnap33@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Muhamad Arif Solikin</td>
                            <td>0813-2918-9757</td>
                            <td>masariif051102@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Nafisah Rahmadani</td>
                            <td>0888-9971-9911</td>
                            <td>napnapgamink@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Irvan Arief Boediman</td>
                            <td>0888-9971-9911</td>
                            <td>irpaaan@gmail.com</td>
                        </tr>
                    </tbody>
                </table>

                <div style="margin-top:0px;" class="row no-margin">
                    <h4><i class="fa-solid fa-map-location-dot"></i> Politeknik Negeri Batam</h4>
                    <h6>Jl. Ahmad Yani, Kota Batam Kepulauan Riau.</h6>
                    <iframe class="peta" style="width:100%" src="https://www.google.com/maps/d/embed?mid=1Iu_VVcenQGxJH0qJL_sqmbbxE8Q&ehbc=2E312F" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!--Data END-->
    </div>
    <!--Container END-->

    <!--Footer START-->

    <!--Footer END-->
    <a id="back-to-top" href="#" class="btn btn-warning btn-md back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/picker.js"></script>
    <script src="js/picker.date.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="home.js"></script>
</body>

</html>