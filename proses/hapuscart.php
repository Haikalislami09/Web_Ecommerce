<?php 
    include "../config.php";

    $id_user = $_SESSION['id_user'];
    $id = $_GET['id'];

    $result = mysqli_query($mysqli,"delete from tb_cart where id_cart = $id");
    header("location:../user/cart.php?id=$id_user");
?>