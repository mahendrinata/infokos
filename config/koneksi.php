<?php
$server = "localhost";
$username = "root";
$password = "12345678";
$database = "infokos";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

include '../action/cek_aktif_pemesanan.php';
?>
