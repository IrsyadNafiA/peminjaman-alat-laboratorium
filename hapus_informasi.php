<?php
// include database connection file
include 'koneksi.php';
$idalat = $_GET['idalat'];
$result = mysqli_query($koneksi, "DELETE FROM stokbrg WHERE idalat='$idalat'");
header("Location:informasi_lab.php");
