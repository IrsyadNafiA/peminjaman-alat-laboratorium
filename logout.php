<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama']);
unset($_SESSION['level']);

session_destroy();
echo "<script>alert('Anda Telah Melakukan Logout!'); document.location='login.php'</script>";
