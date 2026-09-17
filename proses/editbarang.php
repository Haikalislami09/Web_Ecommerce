<?php 
    include '../config.php';

    if (isset($_POST['submit'])) {
        
        $id = $_POST['id_barang'];
        $nama = $_POST['nama_barang'];
        $descrip = $_POST['descrip'];
        $harga = $_POST['harga'];
        $kategori = $_POST['kategori'];
        $stok = $_POST['stok'];
        $gambar = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $folder = "../gambar/".$gambar;

        if ($gambar != '') {
            $query = "update tb_barang set nama_barang= '$nama', descrip = '$descrip', harga =  '$harga', kategori = '$kategori', stok = '$stok', gambar = '$gambar' where id_barang = $id";
            $data = mysqli_query($mysqli, $query);
            if (move_uploaded_file($tmp_name,$folder)) {
                header('location:../admin/adminindex.php#all-product'); 
            }  
        } else{
            $query = "update tb_barang set nama_barang= '$nama', descrip = '$descrip',harga =  '$harga', kategori = '$kategori', stok = '$stok' where id_barang = $id";
            $data = mysqli_query($mysqli, $query);
                header('location:../admin/adminindex.php#all-product');
        }
    }
?>