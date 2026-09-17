<?php 
    session_start();
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
    <header>
        <img src="gambar/20602d43cc993811e5a6bd1886af4f33.png" width="60px" height="40px" class="logo" alt="">
        <nav>
            <ul class="nav-links">
                <li><a href="guest.php">Home</a></li>
                <li><a href="#all-product">Our Product</a></li>
                <li><a href="#about-us">About us</a></li>
                <li><a href="#footer">Contact us</a></li>
            </ul>
        </nav>
        <div class="search d-flex" id="search">
                        <div class="input-group my-2 ">
                            <form action="guest.php#all-product" class="d-flex" method="post">
                            <!-- <a href="cart.php" class="text-decoration-none"><i class="fa-solid mt-2 mx-2 fa-shopping-cart text-dark"></i></a> -->
                                <input type="search" name="search" class="form-control rounded">
                                <a href="profile.php" class="d-flex text-decoration-none text-light pt-2"><i class="fa-solid fa-search mx-2 text-dark"></i></a>
                                <a href="login.php">Login</a>
                            </form>
                        </div>
                    </div>

    </header>
    <div class="landing-page">
        <div class="content">
            <div class="text">
                <span>NIKE dream</span>
                <h3>its impossible to give up</h3>
                <h1>Just do it</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis nulla saepe iusto, delectus exercitationem consequuntur esse fuga laudantium natus suscipit beatae alias soluta quaerat vero minima libero consequatur voluptates. Odio.</p>
                <a href="#all-product" class="btn-buy">Just buy it</a>
            </div>
            <div class="img-shoes">
                <img src="gambar/nikeshoes.png" alt="">
            </div>
        </div>
    </div>
    <div class="our-product">
        <div class="grid-top">
            <img src="gambar/nike1.jpeg" alt="">
            <img src="gambar/nike2.jpeg" alt="">
            <img src="gambar/nike3.jpeg" alt="">
            <div class="product-content">
                <h3 class="product-header">Our product</h3>
                <p class="product-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis esse eligendi ab. Error quas corporis.</p>
                <a href="#all-product"><button class="btn">See product</button></a>
            </div>
        </div>
        <div class="grid-bottom">
            <img src="gambar/nike4.jpeg" alt="">
            <img src="gambar/nike5.jpeg" alt="">
            <img src="gambar/nike5.jpeg" alt="">
        </div>
    </div>
    <section class="new-product-container">
        <div class="new-product">
            <h2 class="new-header">New product</h2>
            <p class="new-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore molestias a adipisci rem suscipit aut nulla fuga</p>
            <a href="#all-product"><button class="btn">More</button></a>
        </div>
        <?php 
            include "config.php";

            $newproduct = mysqli_query($mysqli,"select * from tb_barang order by id_barang desc limit 3");

            while ($rowbaru = mysqli_fetch_array($newproduct)) {?>
                <div class="new-img">
                    <div class="new-img-content">
                        <img src="gambar/<?= $rowbaru['gambar'] ?>" alt="">
                        <p><?= $rowbaru['nama_barang'] ?></p>
                        <h4>Rp. <?= number_format($rowbaru['harga'],0,",",".") ?></h4>
                    </div>
                    <a href="login.php"">
                                                Buy it
                                            </a>
                </div>
            <?php }?>
            <!-- Modal buy it -->
            <div class="modal fade" id="buyModal<?= $rowbaru['id_barang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Keranjang</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="pesanan.php?id=<?= $rowuser['id_user'] ?>&id_barang=<?= $row['id_barang'] ?>" method="post">
                                <label for="name" class="form-label">Masukkan jumlah barang</label>
                                <input type="number" class="form-control" name="jumlah" value="1" min="1" max="<?= $row['stok'] ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-dark">Buat pesanan</button>
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
            
    </section>
    <div class="section-head">
        <h2>We have variation</h2>
    </div>
    <section class="filter-container">
        <form action="#all-product" method="post">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <button type="submit" class="basic-button">
                                <i class="fa-solid fa-reply-all"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>All product</h3>
                </div>
            </div>
        </form>
        <form action="guest.php#all-product" method="post">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <button type="submit" class="basic-button" name="filter" value="sepatu">
                                <i class="fa-solid fa-shoe-prints"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>Shoes</h3>
                </div>
            </div>
        </form>
        <form action="guest.php#all-product" method="post">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <button type="submit" class="basic-button" name="filter" value="kaos">
                                <i class="fa-solid fa-shirt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>T-shirt</h3>
                </div>
            </div>
        </form>
        <form action="guest.php#all-product" method="post">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <button type="submit" class="basic-button" name="filter" value="aksesoris">
                                <i class="fa-solid fa-hat-wizard"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>Accecoris</h3>
                </div>
            </div>
        </form>
        <form action="guest.php#all-product" method="post">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <button type="submit" class="basic-button" name="filter" value="alat">
                                <i class="fa-solid fa-toolbox"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>Equipment</h3>
                </div>
            </div>
        </form>


    </section>
    <section class="product-container">
        <?php 
            $searching = isset($_POST['search']) ? $_POST['search'] : '';

            if (!empty($searching)) {
                echo "<h4>Showing result for $searching</h4>";
            }
        ?>
        <div class="all-product" id="all-product">
            <?php 
                include "config.php";
                $search = isset($_POST['search']) ? $_POST['search'] : '';
                $filter = isset($_POST['filter']) ? $_POST['filter'] : '';

                if (!empty($search)) {
                    $query = "SELECT * FROM tb_barang WHERE nama_barang LIKE '%$search%'";
                } elseif (!empty($filter)) {
                    $query = "SELECT * FROM tb_barang WHERE kategori = '$filter'";
                } else {
                    $query = "SELECT * FROM tb_barang";
                }

                $result = mysqli_query($mysqli, $query);

                function batasDeskripsi($kalimat, $batas) {
                    $kalimatbatas = explode(" ", $kalimat);
                    return implode(" ", array_splice($kalimatbatas, 0, $batas));
                }

                while ($row = mysqli_fetch_array($result)) { 
            ?> 
                <div class="product-card">
                    <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc<?= $row['id_barang'] ?>">
                        <div class="badge"><?= $row['kategori'] ?></div>
                        <div class="product-tumb">
                            <img src="gambar/<?= $row['gambar'] ?>" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory"><?= $row['kategori'] ?></span>
                            <h4><a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc<?= $row['id_barang'] ?>"><?= $row['nama_barang'] ?></a></h4>
                            <p><?= batasDeskripsi($row['descrip'], 6) ?>...</p>
                            <div class="product-bottom-details">
                                <div class="product-price">Rp.<?= number_format($row['harga'], 0, ',', '.'); ?></div>
                                <div class="product-links">
                                    <?php 
                                        if ($row['stok'] > 0) { ?>
                                            <!-- <a href="cartModal" data-bs-toggle="modal" data-bs-target="#cartModal<?= $row['id_barang'] ?>">katanjang</a> -->
                                            <!-- <a href="../proses/addfavorite.php?id=<?= $row['id_barang'] ?>"><i class="fa-regular fa-heart"></i></a> -->
                                            <a href="#buyModal" data-bs-toggle="modal" data-bs-target="#buyModal">
                                                Buy it
                                            </a>
                                        <?php }else { ?>
                                            <span>Habis</span>
                                        <?php }?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Modal buy it -->
                <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Keranjang</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Maaf kamu harus <a href="login.php">login</a> dulu mas bro</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
                 <!-- Modal cart -->
                 <!-- <div class="modal fade" id="cartModal<?= $row['id_barang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Keranjang</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/addcart.php" method="post">
                                <label for="name" class="form-label">Masukkan jumlah barang</label>
                                <input type="hidden" name="id_barang" value="<?= $row['id_barang'] ?>">
                                <input type="number" class="form-control" name="jumlah" value="1" min="1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-dark">Masukkan keranjang</button>
                        </div>
                        </div>
                        </form>
                    </div>
                </div> -->
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
                                            <?php 
                                                if ($row['stok'] > 0) { ?>
                                                    <a href="../proses/addfavorite.php?id=<?= $row['id_barang'] ?>"><i class="fa-regular fa-heart"></i></a>
                                                    <a href="#buyModal" data-bs-toggle="modal" data-bs-target="#buyModal<?= $row['id_barang'] ?>">
                                                        Buy it
                                                    </a>
                                                <?php }else { ?>
                                                    <span>Habis</span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="about-us" id="about-us">
        <div class="container">
            <div class="about-content">
                <h2>About Us</h2>
                <p>At Nike, we believe in the power of innovation and the strength of passion. Our mission is to bring inspiration and innovation to every athlete in the world. We are dedicated to creating groundbreaking products that push the boundaries of performance and style, helping athletes to achieve their goals and perform at their best.</p>
                <p>Founded on the principles of excellence and dedication, Nike continues to lead the industry with cutting-edge technology and a commitment to sustainability. We are not just a brand; we are a movement that strives to inspire greatness and foster a global community of athletes.</p>
                <a href="#footer" class="btn-contact">Contact Us</a>
            </div>
            <div class="about-image">
                <div class="image-box">
                    <img src="gambar/nike3.jpeg" alt="Nike Image 1">
                </div>
                <div class="image-box">
                    <img src="gambar/sepatu nike 6.jpeg" alt="Nike Image 2">
                </div>
                <div class="image-box">
                    <img src="gambar/nike1.jpeg" alt="Nike Image 3">
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="gambar/20602d43cc993811e5a6bd1886af4f33.png" alt="Nike Logo">
                </div>
                <div class="footer-links">
                    <div class="footer-link-group">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Investors</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-group">
                        <h3>Customer Service</h3>
                        <ul>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Order Status</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-group">
                        <h3>Follow Us</h3>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Nike, Inc. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
