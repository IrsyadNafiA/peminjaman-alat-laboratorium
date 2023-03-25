<?php
include 'koneksi.php';
$idalat = $_POST['idalat'];
$alat = $_POST['alat'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];
$input = mysqli_query($koneksi, "INSERT INTO stokbrg 
 VALUES('$idalat','$alat','$jumlah','$status')") or die(mysql_error());
if ($input) {
    echo "Data Berhasil Disimpan";
    header("location:informasi_lab.php");
} else {
    echo "Gagal Disimpan";
}
