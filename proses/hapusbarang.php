<?php 
    include '../config.php';

    $id = $_GET['id'];

    $query = "delete from tb_barang where id_barang = $id ";
    $result = mysqli_query($mysqli,$query);

    header("location:../admin/adminindex.php");
?>