<?php 
    include "../config.php";

    $id = $_GET['id'];

    $result = mysqli_query($mysqli,"delete from tb_penjual where id_penjual = $id");
    header("location:../penjual.php")
?>