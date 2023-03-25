<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$idalat = $_POST['idalat'];
$alat = $_POST['alat'];
$jumlah = $_POST['jumlah'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$result = mysqli_query($koneksi, "UPDATE peminjaman SET
nama='$nama',no_hp='$no_hp',idalat='$idalat',alat='$alat',jumlah='$jumlah',tgl_pinjam='$tgl_pinjam',tgl_kembali='$tgl_kembali' WHERE nim='$nim'");
// Redirect to homepage to display updated user in list
header("Location: data_peminjaman_lab.php");
