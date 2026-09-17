<?php 
    session_start();
    include "../config.php";

    $id = $_GET['id'];
    $id_user = $_SESSION['id_user'];
    $jumlah = $_POST['jumlah'];

    $result = mysqli_query($mysqli,"update tb_cart set jumlah = $jumlah where id_cart = $id");
    header("location:../user/cart.php?id=$id_user");
?>