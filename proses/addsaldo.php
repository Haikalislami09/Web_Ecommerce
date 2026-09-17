<?php 
    include "../config.php";

    $id = $_GET['id'];
    $topup = $_POST['topup'];

    $query = "select saldo from tb_user where id_user = $id";
    $result = mysqli_query($mysqli,$query);
    $row = mysqli_fetch_assoc($result);

    $saldo_lama = $row['saldo'];
    
    $saldo = $saldo_lama + $topup;

    $result_update = mysqli_query($mysqli,"update tb_user set saldo = $saldo where id_user = $id");

    header("location:../user/userindex.php");
?>