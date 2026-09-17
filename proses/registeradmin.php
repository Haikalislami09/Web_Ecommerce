<?php 
    include "../config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $no_telp = $_POST['no_telp'];

    $query = "insert into tb_admin values (null, '$username', '$password', '$no_telp','null')";
    $result = mysqli_query($mysqli, $query);

    header("location:../index.php");
?>