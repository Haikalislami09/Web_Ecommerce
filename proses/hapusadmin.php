<?php 
    include "../config.php";

    $id = $_GET['id'];

    $result = mysqli_query($mysqli,"delete from tb_admin where id_admin = $id");
    header("location:../admin.php");
?>