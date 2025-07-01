<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id_produk = $id";
$result = $koneksi->query($sql);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form method="POST">
        Nama Produk: <input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" required><br><br>
        Harga: <input type="number" name="harga" value="<?php echo $data['harga']; ?>" required><br><br>
        Stok: <input type="number" name="stok" value="<?php echo $data['stok']; ?>" required><br><br>
        <input type="submit" name="submit" value="Update">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $sql = "UPDATE produk SET nama_produk='$nama', harga=$harga, stok=$stok WHERE id_produk=$id";
        if ($koneksi->query($sql)) {
            header("Location: index.php");
        } else {
            echo "Gagal update data: " . $koneksi->error;
        }
    }
    ?>
</body>
</html>
