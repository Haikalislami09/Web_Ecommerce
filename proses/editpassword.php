<?php 
    session_start();
    include "../config.php";

    $id_user = $_POST['id'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confir_password = $_POST['confir_password'];

    if ($new_password !== $confir_password) {
        header("Location: ../user/profile.php?error=Password baru dan konfirmasi password tidak cocok!");
        exit();
    }

    $query = "SELECT password FROM tb_user WHERE id_user = $id_user";
    $result = mysqli_query($mysqli,$query);
    $row = mysqli_fetch_array($result);

    if ($old_password !== $row['password']) {
        header("Location: ../user/profile.php?error=Password lama salah!");
        exit();
    }

    $result_update= mysqli_query($mysqli,"UPDATE tb_user SET password = '$new_password' WHERE id_user = $id_user");
    header("location:../user/profile.php?id=$id_user");
?>