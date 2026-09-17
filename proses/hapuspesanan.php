<?php 
    include "../config.php";

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT id_user from tb_pesanan where id_pesanan = $id");

    $row = mysqli_fetch_array($result);

    $id_user = $row['id_user'];

    $result = mysqli_query($mysqli,"delete from tb_pesanan where id_pesanan=$id");
    header("location:../user/order.php?id=".$id_user);
?>