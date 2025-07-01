<?php
include 'koneksi.php';

// Mengambil id dari URL
$id = $_GET['id'];

// Query untuk menghapus data
$sql = "DELETE FROM karyawan WHERE id = $id";

if ($koneksi->query($sql) === TRUE) {
  header("Location: index.php");
  exit();
} else {
  echo "Error deleting record: " . $koneksi->error;
}

$koneksi->close();
