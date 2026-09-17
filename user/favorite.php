<?php 
    session_start();
    include "../config.php";

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT tb_favorit.*, tb_barang.gambar, tb_barang.nama_barang, tb_barang.descrip, tb_barang.kategori,tb_barang.stok, tb_barang.harga FROM tb_favorit JOIN tb_user ON tb_favorit.id_user = tb_user.id_user JOIN tb_barang ON tb_favorit.id_barang = tb_barang.id_barang WHERE tb_user.id_user = '$id'");

    if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
        header("location:../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/favorite.css">
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
                <li><a href="order.php">Order</a></li>
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
            <div class="product-card">
                    <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc<?= $row['id_barang'] ?>">
                        <div class="badge"><?= $row['kategori'] ?></div>
                        <div class="product-tumb">
                            <img src="../gambar/<?= $row['gambar'] ?>" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory"><?= $row['kategori'] ?></span>
                            <h4><a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc<?= $row['id_barang'] ?>"><?= $row['nama_barang'] ?></a></h4>
                            <p><?= batasDeskripsi($row['descrip'], 6) ?>...</p>
                            <div class="product-bottom-details">
                                <div class="product-price">Rp.<?= number_format($row['harga'], 0, ',', '.'); ?></div>
                                <div class="product-links">
                                    <a href="../proses/hapusfavorite.php?id=<?= $row['id_favorit'] ?>">
                                                Hapus dari favorit
                                            </a>
                                    <a href="#buyModal" data-bs-toggle="modal" data-bs-target="#buyModal<?= $row['id_barang'] ?>">
                                        Buy it
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Modal buy it -->
                <div class="modal fade" id="buyModal<?= $row['id_barang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Keranjang</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="pesanan.php?id=<?= $id ?>&id_barang=<?= $row['id_barang'] ?>" method="post">
                                <label for="name" class="form-label">Masukkan jumlah barang</label>
                                <input type="number" class="form-control" name="jumlah" value="1" min="1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-dark">Masukkan keranjang</button>
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Card description -->
                <!-- Modal -->
                <div class="modal fade" id="cardDesc<?= $row['id_barang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $row['nama_barang'] ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- <div class="product-card"> -->
                                    <div class="badge"><?= $row['kategori'] ?></div>
                                    <div class="product-tumb">
                                        <img src="../gambar/<?= $row['gambar'] ?>" alt="">
                                    </div>
                                    <div class="product-details" style="background-color:black; border-bottom-left-radius:20px; border-bottom-right-radius:20px">
                                        <span class="product-catagory"><?= $row['kategori'] ?></span>
                                        <h4><a href=""><?= $row['nama_barang'] ?></a></h4>
                                        <p><?= $row['descrip'] ?></p>
                                        <p>Stok tersedia:</p>
                                        <p><?= $row['stok'] ?></p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.<?= number_format($row['harga'], 0, ',', '.'); ?></div>
                                            <div class="product-links">
                                            <a href="../proses/hapusfavorite.php?id=<?= $row['id_favorit'] ?>">
                                                Hapus dari favorit
                                            </a>
                                            <a href="#buyModal" data-bs-toggle="modal" data-bs-target="#buyModal<?= $row['id_barang'] ?>">
                                                Buy it
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }?>
</body>
</html>