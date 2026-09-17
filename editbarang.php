<?php 
    include 'config.php';   

    $id = $_GET['id'];
    $query = "select * from tb_barang where id_barang = '$id'";
    $result = mysqli_query($mysqli,$query);

    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses/editbarang.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $row['id_barang'] ?>">
        <label for="nama_barang">Nama barang</label>
        <input type="text" placeholder="Masukkan nama barang" value="<?= $row['nama_barang'] ?>" name="nama_barang" required>
        <label for="descrip">Deskripsi barang</label>
       <textarea name="descrip" id="descrip"><?= $row['descrip'] ?></textarea>
        <label for="harga">Harga</label>
        <input type="text" placeholder="Masukkan harga barang" name="harga" value="<?= $row['harga'] ?>" required>
        <label for="stok">stok</label>
        <input type="number" placeholder="Masukkan stok barang" value="<?= $row['stok'] ?>" name="stok" required>
        <label for="gambar">Gambar barang</label>
        <input type="file" name="gambar" id="gambar">
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>                 