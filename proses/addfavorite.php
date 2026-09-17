<?php
    session_start();
    include "../config.php";


    $id_barang = $_GET['id'];
    $id_user = $_SESSION['id_user'];
    $query = "select * from tb_favorit where id_user = $id_user and id_barang = $id_barang";
    $result = mysqli_query($mysqli,$query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Barang ini sudah ada di favorit.'); window.location.href='../user/userindex.php#all-product';</script>";   
    } else {
        $query = "insert into tb_favorit values (null, '$id_barang', '$id_user',null)";
        $result = mysqli_query($mysqli,$query);
        header("location:../user/userindex.php#all-product");
    }

?>