<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>B O R A N G</title>
  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <!--Navbar START-->
  <nav class="navbar navbar-expand-lg bg-secondary fw-bolder">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="assets/poltek3.png" style="height: 70px;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Form
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="peminjaman_mhs.php">Peminjaman</a></li>
              <li><a class="dropdown-item" href="pengembalian_mhs.php">Pengembalian</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="pelaporan_mhs.php">Pelaporan</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="info_mhs.php">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact_mhs.php">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="login">
          <button class="btn btn-light btn-outline-secondary fw-bold btn-lg" type="submit"><a class="nav-link" href="login.php">Login</a></button>
        </form>
      </div>
    </div>
  </nav>
  <!--Navbar END-->

  <!--Container START-->
  <div class="container-fluid text-light" style="height: 100vh;">
    <!--Carousel Section Start-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/lab3.jpg" class="d-block w-100" alt="..." style="height: 700px;">
          <div class="carousel-caption">
            <h5>Politeknik Negeri Batam</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/lab1.jpeg" class="d-block w-100" alt="..." style="height: 700px;">
          <div class="carousel-caption">
            <h5>Politeknik Negeri Batam</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/lab2.jpg" class="d-block w-100" alt="..." style="height: 700px;">
          <div class="carousel-caption">
            <h5>Politeknik Negeri Batam</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--Carousel Section End-->
    <!--ABOUT START-->
    <div class="nav row justify-content-evenly text-center align-items-center mt-4">
      <div class="col-sm-12">
        <div class="card text-bg-secondary mb-3">
          <div class="card-body">
            <h3 class="card-title fw-bold">SELAMAT DATANG DI LABORATORIUM POLITEKNIK NEGERI BATAM</h3>
            <p class="card-text">Website ini menyediakan sistem peminjaman barang pada Laboratorium Politeknik Negeri Batam Secara Online <i class="fa-solid fa-clock"></i></p>

            <!-- PROFIL ANGGOTA -->

          </div>
        </div>
      </div>
    </div>
    <!--ABOUT END-->
  </div>
  <!--Container END-->

  <!--Footer START-->
  <!--Footer END-->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/picker.js"></script>
  <script src="js/picker.date.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>