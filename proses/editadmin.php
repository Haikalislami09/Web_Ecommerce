<?php 
    include "../config.php";

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        
        $username = $_POST['username'];
        $no_telp = $_POST['no_telp'];
        $gambar = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $folder = "../gambar/".$gambar;

        if ($gambar != '') {
            $query = "update tb_admin set username = '$username', no_telp = '$no_telp', gambar = '$gambar' where id_admin = $id";
            $result = mysqli_query($mysqli, $query);
            
            if (move_uploaded_file($tmp_name,$folder)) {
                header("location:../admin/profile.php?id=".$id); 
            }           
        } else {
            $query = "update tb_admin set username = '$username', no_telp = '$no_telp' where id_admin = $id";
            $result = mysqli_query($mysqli, $query);

            header("location:../admin/profile.php?id=".$id);
        }
    }

?>