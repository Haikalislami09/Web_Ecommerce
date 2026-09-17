<?php 
    include "config.php";
    
    $id = $_GET['id'];
    $query = "select * from tb_admin where id_admin = $id";
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
    <form action="proses/editadmin.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $row['id_admin'] ?>">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Masukkan username anda" value="<?= $row['username'] ?>" required>
        <label for="no_telp">No Handphone</label>
        <input type="number" name="no_telp" id="no_telp" value="<?= $row['no_telp'] ?>" placeholder="No Handphone anda" required>
        <label for="gambar">Foto</label>
        <input type="file" name="gambar" id="gambar">
        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>