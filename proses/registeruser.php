<?php 
    include "../config.php";

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $no_telp = $_POST['no_telp'];

    $query = "insert into tb_user values (null, '$nama', '$username', '$password', '$no_telp', null, null,null ,null)";
    $result = mysqli_query($mysqli, $query);

    header("location:../index.php")
?>