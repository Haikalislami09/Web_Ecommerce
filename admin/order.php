<?php 
    session_start();
    include "../config.php";

    $result = mysqli_query($mysqli, "SELECT tb_pesanan.*,tb_user.nama, tb_barang.gambar, tb_barang.nama_barang, tb_barang.descrip, tb_barang.harga FROM tb_pesanan JOIN tb_user ON tb_pesanan.id_user = tb_user.id_user JOIN tb_barang ON tb_pesanan.id_barang = tb_barang.id_barang ");

    $queryadmin = mysqli_query($mysqli,"select * from tb_admin where username = '" . $_SESSION['username'] . "' or password = '". $_SESSION['password'] ."'");
     $rowadmin = mysqli_fetch_array($queryadmin);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
<header>
        <img src="../gambar/20602d43cc993811e5a6bd1886af4f33.png" width="60px" height="40px" class="logo" alt="">
        <nav>
            <ul class="nav-links">
                <li><a href="adminindex.php">Home</a></li>
                <li><a href="adminindex.php#all-product">Our Product</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="order.php">Order</a></li>
            </ul>
        </nav>
        <div class="search d-flex" id="search">
            <div class="input-group my-2 ">
                <form action="../admin/adminindex.php#search" class="d-flex" method="post">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addbarang"><i class="fa-solid mt-2 mx-2 fa-square-plus text-dark"></i></button>
                    <input type="search" name="search" class="form-control rounded">
                    <a href="" class="d-flex text-decoration-none text-light pt-2"><i class="fa-solid fa-search mx-2 text-dark"></i></a>
                    <a href="profile.php?id=<?= $rowadmin['id_admin'] ?>" class="d-flex text-decoration-none text-light pt-2"><i class="fa-solid fa-user text-dark"></i></a>
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
                        <h1>Status : belum dibayar</h1>
                    <?php }?>
            </div>
        </div>
        </div>
        </div>
        <?php }?>
</body>
</html>