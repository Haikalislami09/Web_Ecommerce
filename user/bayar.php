<?php 
    session_start();
    include "../config.php";
    if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
        header("location:../login.php");
    }
    $id = $_GET['id'];
    // $id_user = $_SESSION['id'];
    $result = mysqli_query($mysqli, "SELECT tb_pesanan.*,tb_user.nama, tb_barang.gambar, tb_barang.nama_barang, tb_barang.descrip, tb_barang.harga FROM tb_pesanan JOIN tb_user ON tb_pesanan.id_user = tb_user.id_user JOIN tb_barang ON tb_pesanan.id_barang = tb_barang.id_barang WHERE tb_pesanan.id_pesanan = '$id'");

    $row = mysqli_fetch_array($result);


    function batasDeskripsi($kalimat , $batas){
        $kalimat = explode(" ",$kalimat);
        return implode(" ",array_slice($kalimat,0,$batas));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/bayar.css">
</head>
<body>
<div class="container my-4">
    <div class="kartu d-flex justify-content-between align-items-center p-4 bg-dark text-white rounded">
        <div class="product-item d-flex">
            <div class="product-img me-3">
                <img src="../gambar/<?= $row['gambar'] ?>" width="120px" height="120px" alt="<?= $row['nama_barang'] ?>">
            </div>
            <div class="product-detail">
                <h4 class="mb-2"><?= $row['nama_barang'] ?></h4>
                <p><?= batasDeskripsi($row['descrip'], 10) ?>...</p>
                <p>Harga: Rp <?= number_format($row['harga'], 0, ',', '.') ?></p>
                <p>Jumlah: <?= $row['jumlah'] ?></p>
            </div>
        </div>
        <?php 
            include "../config.php";

            $id_session = $_SESSION['id_user'];
            $result_saldo = mysqli_query($mysqli,"select saldo from tb_user where id_user = $id_session");

            $row_saldo = mysqli_fetch_assoc($result_saldo);
        ?>
        <div class="total text-end">
            <label for="total" class="form-label">Jumlah yang harus kamu bayar</label>
            <p class="fw-bold">Rp.<?= number_format( $row['total'],0,",",".") ?></p>
            <label for="saldo" class="form-label">Saldo mu saat ini</label>
            <p class="fw-bold">Rp.<?= number_format($row_saldo['saldo'], 0 ,",","." )?></p>
            <form action="../proses/pembayaran.php" method="post" id="paymentForm">
                <input type="hidden" name="id_barang" value="<?= $row['id_barang'] ?>">
                <input type="hidden" name="id_pesanan" value="<?= $row['id_pesanan'] ?>">
                <input type="hidden" name="tgl_pembayaran" id="tgl_pembayaran">
                <input type="hidden" name="jumlah" value="<?= $row['jumlah'] ?>">
                <input type="hidden" name="total" value="<?= $row['total'] ?>">
                <button type="submit" class="btn btn-dark mt-4">Bayar</button>
            </form>
        </div>
    </div>

    <div class="user my-4 p-4 bg-light rounded">
        <h5>Detail Pemesan</h5>
        <div class="user-info">
            <p><strong>Nama Pemesan:</strong> <?= $row['nama'] ?></p>
            <p><strong>No Handphone:</strong> <?= $row['no_telp'] ?></p>
            <p><strong>Alamat:</strong> <?= $row['alamat'] ?></p>
            <p><strong>Email:</strong> <?= $row['email'] ?></p>
            <p><strong>Tanggal Pesanan:</strong> <?= $row['tgl_pesanan'] ?></p>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById('tgl_pembayaran').value = today;
    });
</script>
</div>
</body>
</html>
