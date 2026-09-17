<?php 
    include "../config.php";

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama_barang'];
        $descrip = $_POST['descrip'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $kategori = $_POST['kategori'];
        $gambar = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $folder = "../gambar/".$gambar;

        $query = "insert into tb_barang values (null, '$nama', '$descrip', '$stok', '$harga','$kategori', '$gambar')";
        $data = mysqli_query($mysqli, $query);

        if (move_uploaded_file($tmp_name,$folder)) {
            header('location:../admin/adminindex.php#all-product');
        }
    }

?>