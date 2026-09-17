<?php
    session_start();
    include "../config.php";

    $id_user = $_SESSION['id_user'];
    $query_clear = "DELETE FROM tb_cart WHERE id_user = $id_user";
    mysqli_query($mysqli, $query_clear);
    header("location:../user/cart.php?id=$id_user");
?>