<?php
include 'koneksi.php';

// Mengambil data dari form
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];

// Query untuk menyisipkan data ke tabel karyawan
$sql = "INSERT INTO karyawan (nama, jabatan, email) VALUES ('$nama', '$jabatan', '$email')";

if ($koneksi->query($sql) === TRUE) {
  // Jika berhasil, arahkan ke halaman utama
  header("Location: index.php");
  exit();
} else {
  // Jika terjadi error, tampilkan pesan error
  echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>