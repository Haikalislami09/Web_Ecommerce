<?php 
    include "config.php";

    $id = $_GET['id'];
    $query = "select * from tb_penjual where id_penjual = $id";
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
    <form action="proses/editpenjual.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $row['id_penjual'] ?>">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama anda" value="<?= $row['nama'] ?>" required>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Masukkan username baru anda" value="<?= $row['username'] ?>" required>
        <label for="no_telp">No Handphone</label>
        <input type="number" name="no_telp" id="no_telp" placeholder="Masukkan No handphone anda" value="<?= $row['no_telp'] ?>" required>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat"><?= $row['alamat'] ?></textarea>
        <label for="Email">Email</label>
        <input type="email" name="email" id="email" placeholder="example@gmail.com" value="<?= $row['email'] ?>">
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" id="gambar">
        <input type="submit" value="Simpan" name="submit">
    </form>
</body>
</html>