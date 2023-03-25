<?php
include 'koneksi.php';
$idalat = $_POST['idalat'];
$alat = $_POST['alat'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];
$result = mysqli_query($koneksi, "UPDATE stokbrg SET
alat='$alat',jumlah='$jumlah',status='$status' WHERE idalat='$idalat'");
// Redirect to homepage to display updated user in list
header("Location: informasi_lab.php");
