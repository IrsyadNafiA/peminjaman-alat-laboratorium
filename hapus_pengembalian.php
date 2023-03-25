<?php
// include database connection file
include 'koneksi.php';
$nim = $_GET['nim'];
$result = mysqli_query($koneksi, "DELETE FROM pengembalian WHERE nim='$nim'");
header("Location:data_pengembalian_lab.php");
?>