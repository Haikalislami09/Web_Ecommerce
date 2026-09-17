<?php 
    session_start();
    include "../config.php";

    $id = $_GET['id'];
    $id_user = $_SESSION['id_user'];

    $result = mysqli_query($mysqli,"delete from tb_favorit where id_favorit=$id");
    header("location:../user/favorite.php?id=$id_user");
?>