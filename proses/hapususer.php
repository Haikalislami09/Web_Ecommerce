<?php 
    include "../config.php";

    $id = $_GET['id'];

    $result = mysqli_query($mysqli,"delete from tb_user where id_user = $id");

    header("location:../user.php");
?>