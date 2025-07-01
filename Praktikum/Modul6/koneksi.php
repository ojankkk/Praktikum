<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'kantor';

// Bikin koneksi
$koneksi = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
} 
?>
