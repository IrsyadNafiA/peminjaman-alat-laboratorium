<?php
// include database connection file
include 'koneksi.php';
$nim = $_GET['nim'];
$result = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE nim='$nim'");
header("Location:data_peminjaman_lab.php");
?>