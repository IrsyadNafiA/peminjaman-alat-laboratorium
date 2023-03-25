<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';
// menangkap data yang dikirim dari form
$password = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$pass = mysqli_escape_string($koneksi, $password);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//cek
$cek_user = mysqli_query($koneksi, "SELECT * FROM userlog WHERE username = '$username' and level = '$level'");
$user_valid = mysqli_fetch_array($cek_user);

//uji
if ($user_valid) {
	if ($pass == $user_valid['password']) {
		$_SESSION['username'] = $user_valid['username'];
		$_SESSION['nama'] = $user_valid['nama'];
		$_SESSION['level'] = $user_valid['level'];
	}

	//uji status level
	if ($level == "Laboran") {
		header('location:home_lab.php');
	} elseif ($level == "Mahasiswa") {
		header('location:home_mhs.php');
	} else {
		echo "<script>alert('Maaf, Login Gagal. Password Anda Tidak Terdaftar!'); document.location='login.php'</script>";
	}
} else {
	echo "<script>alert('Maaf, Login Gagal. Username Anda Tidak Terdaftar!'); document.location='login.php'</script>";
}
