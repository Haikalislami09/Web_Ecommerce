<?php 
    include "config.php";

    $username = $_POST['username'];
    $password =$_POST['password'];

    $query = "select * from tb_admin where username = '$username' and password= '$password'";
    $resultadmin = mysqli_query($mysqli,$query);
    $jumlahadmin = mysqli_num_rows($resultadmin);
    $catchadmin = mysqli_fetch_array($resultadmin);

    $queryuser = "select * from tb_user where username = '$username' and password = '$password'";
    $resultuser = mysqli_query($mysqli,$queryuser);
    $jumlahuser = mysqli_num_rows($resultuser);
    $catchuser = mysqli_fetch_array($resultuser); 

    if ($jumlahadmin > 0) {
        session_start();

        $_SESSION['username'] = $catchadmin['username'];
        $_SESSION['password'] = $catchadmin['password'];

        header("location:admin/adminindex.php");
    } else if ($jumlahuser > 0) {
        session_start();
        
        $_SESSION['id_user'] = $catchuser ['id_user'];
        $_SESSION['username'] = $catchuser['username'];
        $_SESSION['password'] = $catchuser['password'];
        
        header("location:user/userindex.php");
    } else{
        echo "<script>
                alert('Login gagal! Username atau password salah.');
                window.location.href = 'login.php';
              </script>";
    }
?>