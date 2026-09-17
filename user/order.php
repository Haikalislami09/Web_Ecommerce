<?php 
    session_start();
    include "../config.php";

    if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
        header("location:../login.php");
    }
    $id = $_GET['id'];
    // $id_user = $_SESSION['id'];
    $result = mysqli_query($mysqli, "SELECT tb_pesanan.*,tb_user.nama, tb_barang.gambar, tb_barang.nama_barang, tb_barang.descrip, tb_barang.harga FROM tb_pesanan JOIN tb_user ON tb_pesanan.id_user = tb_user.id_user JOIN tb_barang ON tb_pesanan.id_barang = tb_barang.id_barang WHERE tb_user.id_user = '$id'");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
    <header>
        <img src="../gambar/20602d43cc993811e5a6bd1886af4f33.png" width="60px" height="40px" class="logo" alt="">
        <nav>
            <ul class="nav-links">
                <li><a href="userindex.php">Home</a></li>
                <li><a href="userindex.php#all-product">Our Product</a></li>
                <li><a href="userindex.php#about-us">About us</a></li>
                <li><a href="userindex.php#footer">Contact us</a></li>
                <li><a href="order.php?id=<?= $id ?>">Order</a></li>
            </ul>
        </nav>
        <div class="search d-flex" id="search">
                        <div class="input-group my-2 ">
                            <form action="../user/userindex.php#search" class="d-flex" method="post">
                            <a href="favorite.php?id=<?= $id ?>" class="text-decoration-none"><i class="fa-regular mt-2 mx-2 fa-heart text-dark"></i></a>
                                <input type="search" name="search" class="form-control rounded">
                                <a href="profile.php" class="d-flex text-decoration-none text-light pt-2"><i class="fa-solid fa-search mx-2 text-dark"></i></a>
                                <a href="profile.php?id=<?= $id ?>" class="d-flex text-decoration-none text-light pt-2"><i class="fa-solid fa-user text-dark"></i></a>
                            </form>
                        </div>
                    </div>
    </header>
    <?php 

        function batasDeskripsi($string,$angka){
            $kalimat = explode(" ",$string);
            return implode(" " , array_slice($kalimat,0,$angka));
        }

        while ( $row = mysqli_fetch_array($result)) { ?>
            <div class="order">
            <div class="barang">
                <div class="barang-gambar">
                    <img src="../gambar/<?= $row['gambar'] ?>" alt="">
                </div>
                <div class="detail-barang">
                    <h4><?= $row['nama_barang'] ?></h4>
                    <p><?= batasDeskripsi($row['descrip'] , 5)?></p>
                    <p>Rp. <?= number_format($row['harga'], 2, ',', '.') ?></p>
                    <p><?= $row['jumlah'] ?></p>
                    <h1>Rp. <?= number_format( $row['total'],0,",",".") ?></h1>
                </div>
            </div>
            <div class="data-diri">
                <h4><?= $row['nama'] ?></h4>
                <p><?= $row['no_telp'] ?></p>
                <p><?= $row['alamat'] ?></p>
                <p><?= $row['tgl_pesanan'] ?></p>
                <?php 
                    if ($row['status'] == 'Lunas') { ?>
                         <h1>Status: <?= $row['status'] ?></h1>
                    <?php } else {?>
                        <a href="../proses/hapuspesanan.php?id=<?= $row['id_pesanan'] ?>"><button type="button" class="btn btn-danger">Batalkan pesanan</button></a>
                        <a href="bayar.php?id=<?= $row['id_pesanan'] ?>" class="btn btn-success">Bayar</a>
                    <?php }?>
            </div>
        </div>
        </div>
        </div>
        <?php }?>
</body>
</html>