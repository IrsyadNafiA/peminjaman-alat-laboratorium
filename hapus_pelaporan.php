<?php
// include database connection file
include 'koneksi.php';
$idalat = $_GET['idalat'];
$result = mysqli_query($koneksi, "DELETE FROM kerusakan WHERE idalat='$idalat'");
header("Location:data_pelaporan_lab.php");
?>