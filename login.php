<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <script src="https://kit.fontawesome.com/f8a09ade68.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-2">
          <img src="assets/poltek2.png" class="img-fluid" alt="Logo Polibatam">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="cek_login.php">
            <!-- Username input -->
            <div>
              <p class="text-center fs-2 fw-bold">Peminjaman Alat Laboratorium</p>
              <hr>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label fs-4">Username</label>
              <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Enter Username" required />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label fs-4">Password</label>
              <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter Password" required />
            </div>

            <select class="form-select" name="level" id="level" style="width: 130px;">
              <option selected>--Pilih--</option>
              <option value="Mahasiswa">Mahasiswa</option>
              <option value="Laboran">Laboran</option>
            </select>

            <div class="d-flex justify-content-between align-items-center mt-4">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <p>Silahkan Hubungi Laboran Jika Belum Memilki Akun</p>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="footer d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-secondary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        If-2C Copyright © 2022. All rights reserved.
      </div>
      <!-- Copyright -->

      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
  </section>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/picker.js"></script>
  <script src="js/picker.date.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>