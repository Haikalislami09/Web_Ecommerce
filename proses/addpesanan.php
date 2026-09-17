<?php 
    include "../config.php";
    
    $id_barang = $_POST['id_barang'];
    $id_user = $_POST['id_user'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $tgl_pesanan = $_POST['tgl_pesanan'];
    $jumlah = $_POST['jumlah']; 
    $total = $_POST['total'];

    $result_stok = mysqli_query($mysqli,"select stok from tb_barang where id_barang = $id_barang");
    $row_stok = mysqli_fetch_array($result_stok);

    if ($jumlah > $row_stok['stok']) {
        header("Location: ../user/userindex.php#all-pro&error=Stok tidak mencukupi");
        exit;
    }

    $query = "insert into tb_pesanan values (NULL, '$id_user', '$id_barang','$no_telp','$alamat', '$email','$tgl_pesanan','$jumlah','$total', null)";
    $result = mysqli_query($mysqli,$query);

    header("location:../user/order.php?id=$id_user");

?>