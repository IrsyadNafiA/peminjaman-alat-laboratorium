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
$input = mysqli_query($koneksi, "INSERT INTO peminjaman VALUES('$nim','$nama','$no_hp','$idalat','$alat','$jumlah','$tgl_pinjam','$tgl_kembali')") or die(mysql_error());
if ($input) {
   echo "Data Berhasil Disimpan";
   header("location:data_peminjaman_mhs.php");
} else {
   echo "Gagal Disimpan";
}
