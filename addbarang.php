<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses/addbarang.php" method="post" enctype="multipart/form-data">
        <label for="nama_barang">Nama barang</label>
        <input type="text" placeholder="Masukkan nama barang" name="nama_barang" required>
        <label for="descrip">Deskripsi barang</label>
       <textarea name="descrip" id="descrip">Masukkan deskripsi barang</textarea>
        <label for="harga">Harga</label>
        <input type="text" placeholder="Masukkan harga barang" name="harga" required>
        <label for="stok">stok</label>
        <input type="number" placeholder="Masukkan stok barang" name="stok" required>
        <label for="gambar">Gambar barang</label>
        <input type="file" name="gambar" id="gambar">
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>