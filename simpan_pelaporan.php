<?php  
include 'koneksi.php'; 
 $idalat= $_POST['idalat']; 
 $alat = $_POST['alat']; 
 $detail = $_POST['detail'];
 $jumlah = $_POST['jumlah']; 
 $tgl_lapor = $_POST['tgl_lapor'];
 $input = mysqli_query($koneksi,"INSERT INTO kerusakan 
 VALUES('$idalat','$alat','$detail','$jumlah','$tgl_lapor')") or die(mysql_error());  if($input){ 
    echo "Data Berhasil Disimpan"; 
        header("location:data_pelaporan_mhs.php"); 
 }else{ 
    echo "Gagal Disimpan"; 
 } 
 ?> 
