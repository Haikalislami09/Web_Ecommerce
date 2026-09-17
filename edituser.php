<?php 
    include "config.php";

    $id = $_GET['id'];
    $query = "select * from tb_user where id_user = $id";
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
    <form action="proses/edituser.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_user" id="id_user" value="<?= $row['id_user'] ?>">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $row['nama'] ?>" placeholder="Masukkan nama anda" required>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?= $row['username'] ?>" placeholder="Masukkan username anda" required>
        <label for="no_telp">No Handphone</label>
        <input type="number" name="no_telp" id="no_telp" value="<?= $row['no_telp'] ?>" placeholder="No Handphone anda" required>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat"><?= $row['alamat'] ?></textarea>
        <label for="Email">Email</label>
        <input type="email" name="email" id="email" value="<?= $row['email'] ?>" placeholder="example@gmail.com">
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" id="gambar">
        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>