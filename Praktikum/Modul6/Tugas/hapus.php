<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM produk WHERE id_produk = $id";
if ($koneksi->query($sql)) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data: " . $koneksi->error;
}
?>
