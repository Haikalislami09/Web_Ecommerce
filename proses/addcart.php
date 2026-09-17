<?php
session_start();
include '../config.php';

    $id_barang = $_POST['id_barang'];
    $id_user = $_SESSION['id_user'];
    $jumlah = $_POST['jumlah'];

    $result = mysqli_query($mysqli,"insert into tb_cart values (null,'$id_barang','$id_user','$jumlah')");

    header("location:../user/userindex.php");

?>
