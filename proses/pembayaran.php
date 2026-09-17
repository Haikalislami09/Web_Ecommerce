<?php
    session_start();
    include "../config.php";

    $id_barang = $_POST['id_barang'];
    $id_pesanan = $_POST['id_pesanan'];
    $tgl_pembayaran = $_POST['tgl_pembayaran'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];
    $id_user = $_SESSION['id_user'];

    $result_saldo = mysqli_query($mysqli , "select saldo from tb_user where id_user = $id_user");
    $row_saldo = mysqli_fetch_array($result_saldo);

    $result_stok = mysqli_query($mysqli,"select stok from tb_barang where id_barang = $id_barang ");
    $row_stok = mysqli_fetch_array($result_stok);

    if ($row_saldo['saldo'] >= $total) {
        $saldo_sekarang = $row_saldo['saldo'] - $total;

        $update_saldo = mysqli_query($mysqli,"update tb_user set saldo = $saldo_sekarang where id_user = $id_user");

        $newstok = $row_stok['stok'] - $jumlah;
        $update_stok = mysqli_query($mysqli, "update tb_barang set stok = $newstok where id_barang = $id_barang");

        $result = mysqli_query($mysqli,"insert into tb_pembayaran values (null,'$id_pesanan','$tgl_pembayaran','$jumlah','$total')");
    

        $update_pesanan = mysqli_query($mysqli,"UPDATE tb_pesanan SET status = 'Lunas' WHERE id_pesanan = '$id_pesanan'");

        header("location:../user/order.php?id=$id_user");
    } else{
        echo "<script>alert('Saldo Anda tidak mencukupi untuk melakukan pembayaran.'); window.location.href='../user/order.php?id=$id_user';</script>";
    }
?>