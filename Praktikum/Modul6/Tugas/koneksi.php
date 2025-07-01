<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'db_toko';

$koneksi = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
