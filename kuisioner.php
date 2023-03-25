<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KUISIONER</title>
    <script src="https://kit.fontawesome.com/f8a09ade68.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg ftco_navbr ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="assets/poltek.png" style="height: 100px;" alt=""></a>
            <div class="social-media order-lg-last">
                <p class="mb-0 d-flex">
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                    <a href="logoutalumni.php" class="d-flex align-items-center justify-content-center" role="button"><i class="fas fa-sign-out-alt"></i></a>
                </p>

            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto mr-md-3">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pendaftaran
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="verifikasi/verifikasi.html" target="_blank">Alumni</a></li>
                            <li><a class="dropdown-item" href="umum/umum.html" target="_blank">Umum</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akses Masuk
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="loginalumni/loginalumni.html" target="_blank">Alumni</a></li>
                            <li><a class="dropdown-item" href="loginumum/loginumum.html" target="_blank">Umum</a></li>
                            <li><a class="dropdown-item" href="loginadmin/loginadmin.html" target="_blank">Admin</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="aboutus.html" class="nav-link">Tentang Kami</a></li>
                    <li class="nav-item"><a href="contactus.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="height: 100vh;">
        <div class="nav row justify-content-evenly text-start align-items-center">
            <div class="col-md-6">
                <h1 class="text-center" style="color: #000347;">FORMULIR KUISIONER</h1>
                <h5 style="color: #047502;">A. Identitas Pribadi</h5>
                <p style="color: #d41500;">*Keterangan= Wajib Diisi</p>
                <form action="simpan_kuisioner.php" method="POST">
                    <div class="form-group">
                        <label for="nama">a.) NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="nama">b.) Nama</label>
                        <input type="text" id="nama" name="nama " class="form-control" placeholder="Nama Lengkap" required>
                    </div>

                    <div class="form-group">
                        <label for="Email">c.) Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="NOHP">d.) No HP</label>
                        <input type="text" id="nohp" name="nohp" class="form-control" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis kelamin">e.) Jenis kelamin</label>
                        <select id="jk" name="jk" class="form-control" required>
                            <option value="">Pilih</option>
                            <option value="">Laki-laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">f.) Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="" required></textarea>
                    </div>

                    <h5 style="color: #047502;">B. Kegiatan Pendidikan dan Pengalaman Kerja</h5>
                    <p style="color: #d41500;">*Keterangan= Wajib Diisi</p>

                    <div class="form-group">
                        <label for="nama">a.) Dari program studi dan jenjang pendidikan apa Anda lulus?</label>
                        <select class="form-select" id="dpa_lulus" name="dpa_lulus" aria-label="Default select example" required>
                            <option value="">--Pilihan--</option>
                            <option value="1">D3/Akuntansi</option>
                            <option value="2">D4/Akuntansi Manajerial</option>
                            <option value="3">D4/Administrasi Bisnis</option>
                            <option value="3">D4/Logistik Perdagangan Internasional</option>
                            <option value="3">D3/Teknik Elektronika Manufaktur</option>
                            <option value="3">D3/Teknik Instrumentasi</option>
                            <option value="3">D4/Teknik Elektronika</option>
                            <option value="3">D3/Teknik Informatika</option>
                            <option value="3">D3/Teknologi Geomatika</option>
                            <option value="3">D4/Teknik Multimedia dan Jaringan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kuliah">b.) Kapan Anda masuk kuliah dan lulus dari POLIBATAM?</label>
                        <input type="text" id="kpa_masuk" name="kpa_masuk" class="form-control" placeholder="Masuk (--/--/----)" required>
                        <input type="text" id="kpa_masuk" name="kpa_masuk" class="form-control" placeholder="Lulus (--/--/----)" required>
                    </div>

                    <div class="form-group">
                        <label for="nama">c.) Apakah anda lulus tepat waktu?</label>
                        <select class="form-select" id="kpa_lulus" name="kpa_lulus" aria-label="Default select example" required>
                            <option value="">--Pilihan--</option>
                            <option value="1">Iya</option>
                            <option value="2">Tidak</option>
                        </select>
                        <p style="color: #d41500;">*Jika iya strip(-) pertanyaan dibawah.</p>
                    </div>

                    <div class="form-group">
                        <label for="nama">d.) Apa alasan anda tidak lulus tepat waktu ?</label>
                        <input type="text" id="alulus_waktu" name="alulus_waktu" class="form-control" placeholder="" required>

                        <div class="form-group">
                            <label for="nama">e.) Apakah anda ikut serta dalam organisasi kampus ?</label>
                            <select class="form-select" id="organisasi" name="organisasi" aria-label="Default select example" required>
                                <option value="">--Pilihan--</option>
                                <option value="1">Iya</option>
                                <option value="2">Tidak</option>
                            </select>
                            <p style="color: #d41500;">*Jika tidak strip(-) pertanyaan dibawah.</p>
                        </div>

                        <div class="form-group">
                            <label for="nama">f.) Seberapa aktif anda dalam organisasi ?</label>
                            <input type="text" id="s_organisasi" name="s_organisasi" class="form-control" placeholder="" required>
                        </div>
                        <h5 style="color: #047502;">C. Pencarian kerja dan Transisi Kerja</h5>
                        <p style="color: #d41500;">*Keterangan= Wajib Diisi</p>
                        <div class="form-group">
                            <label for="nama">a.) Kapan Anda mulai mencari pekerjaan? (pekerjaan sambilan tidak termasuk)</label>
                            <select class="form-select" id="ka_kerja" name="ka_kerja" aria-label="Default select example" required>
                                <option value="">--Pilihan-</option>
                                <option value="1">Setelah lulus</option>
                                <option value="2">Sebelum lulus</option>
                                <option value="3">Belum bekerja</option>
                            </select>
                            <p style="color: #d41500;">*Jika anda bekerja silahkan strip(-) pertanyaan dibawah.</p>
                        </div>

                        <div class="form-group">
                            <label for="nama">b.) Apa alasan utama Anda tidak mencari pekerjaan setelah lulus kuliah?</label>
                            <input type="text" id="au_kerja" name="au_kerja" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="nama">c.) Bagaimana cara Anda mendapatkan pekerjaan pertama?</label>
                            <input type="text" id="ba_kerja" name="ba_kerja" class="form-control" placeholder="" required>
                            <p style="color: #d41500;">*Jika anda tidak bekerja silahkan strip(-) pertanyaan dibawah.</p>
                        </div>

                        <div class="form-group">
                            <label for="nama">d.) Aspek apa yang menjadi pertimbangan utama Anda dalam memilih pekerjaan pertama?</label>
                            <input type="text" id="a_utama" name="a_utama" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="nama">e.) Pada saat Anda kuliah dan setelah lulus, apakah Anda mengambil kursus dalam rangka menyiapkan atau meningkatkan kemampuan Anda
                                untuk persiapan bekerja?</label>
                            <select class="form-select" id="pd_lulus" name="pd_lulus" aria-label="Default select example" required>
                                <option value="">--Pilihan--</option>
                                <option value="1">Iya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>

                </form>
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/picker.js"></script>
    <script src="js/picker.date.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>