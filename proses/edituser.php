<?php 
    include "../config.php";

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $gambar = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $folder = "../gambar/".$gambar;
        
        if ($gambar != '') {
            $query = "update tb_user set nama = '$nama', username ='$username', no_telp = '$no_telp', alamat = '$alamat', email = '$email', gambar = '$gambar' where id_user = $id ";
            $result = mysqli_query($mysqli, $query);
    
                if (move_uploaded_file($tmp_name,$folder)) {
                    if(isset($_GET['redirect'])) {
                        $redirect = $_GET['redirect'];
                        header("Location: $redirect");
                    } else {
                        header("Location: ../user/profile.php?id=$id");
                    }
            }   
        } else {
            $query = "update tb_user set nama = '$nama', username ='$username',no_telp = '$no_telp', alamat = '$alamat', email = '$email' where id_user = $id";
            $result = mysqli_query($mysqli, $query);
    
            if(isset($_GET['redirect'])) {
                $redirect = $_GET['redirect'];
                header("Location: $redirect");
            } else {
                header("Location: ../user/profile.php?id=$id");
            }
        }
    }
?>