<?php 
session_start();
include "../config.php";
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
    header("location:../login.php");
}

 $queryadmin = mysqli_query($mysqli,"select * from tb_admin where username = '" . $_SESSION['username'] . "' or password = '". $_SESSION['password'] ."'");
 $rowadmin = mysqli_fetch_array($queryadmin);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
    <!-- script -->
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
    <header>
        <img src="../gambar/20602d43cc993811e5a6bd1886af4f33.png" width="60px" height="40px" class="logo" alt="">
        <nav>
            <ul class="nav-links">
                <li><a href="adminindex.php">Home</a></li>
                <li><a href="#all-product">Our Product</a></li>
                <li><a href="#about-us">About us</a></li>
                <li><a href="#footer">Contact us</a></li>
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
    <div class="landing-page">
        <div class="content">
            <div class="text">
                <span>NIKE dream</span>
                <h3>its impossible to give up</h3>
                <h1>Just do it</h1>
                <p>we believe in the power of innovation and the strength of passion. Our mission is to bring inspiration and innovation to every athlete in the world. We are dedicated to creating groundbreaking products that push the boundaries of performance and style, helping athletes to achieve their goals and perform at their best.</p>
                <a href="#all-product" class="btn-buy">Just buy it</a>
            </div>
            <div class="img-shoes">
                <img src="../gambar/nikeshoes.png" alt="">
            </div>
        </div>
    </div>
    <div class="our-product">
        <div class="grid-top">
            <img src="../gambar/nike1.jpeg" alt="">
            <img src="../gambar/nike2.jpeg" alt="">
            <img src="../gambar/nike3.jpeg" alt="">
            <div class="product-content">
                <h3 class="product-header">Our product</h3>
                <p class="product-desc">We promise we will make our product is the best for the world</p>
               <a href="#all-product" class="btn-buy">See more</a>
            </div>
        </div>
        <div class="grid-bottom">
            <img src="../gambar/nike4.jpeg" alt="">
            <img src="../gambar/nike5.jpeg" alt="">
            <img src="../gambar/nike5.jpeg" alt="">
        </div>
    </div>
    <section class="new-product-container">
        <div class="new-product">
            <h2 class="new-header">New product</h2>
            <p class="new-desc">Our new product. Fresh like a fruit and new like a newbie</p>
            <a href="#all-product"><button class="btn">More</button></a>
        </div>
        <?php 
            include "../config.php";

            $newproduct = mysqli_query($mysqli,"select * from tb_barang order by id_barang desc limit 3");

            while ($rowbaru = mysqli_fetch_array($newproduct)) {?>
                <div class="new-img">
                    <div class="new-img-content">
                        <img src="../gambar/<?= $rowbaru['gambar'] ?>" alt="">
                        <p><?= $rowbaru['nama_barang'] ?></p>
                        <h4>Rp. <?= number_format($rowbaru['harga'],0,",",".") ?></h4>
                    </div>
                    <a href="" type="button"  data-bs-toggle="modal" data-bs-target="#editbarang<?= $rowbaru['id_barang'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>
            <?php }?>
             <!-- Modal edit barang -->
             <div class="modal fade" id="editbarang<?= $rowbaru['id_barang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="<?= $row['id_barang'] ?>">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="<?= $row['nama_barang'] ?>" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang"><?= $row['descrip'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="<?= $row['harga'] ?>" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="<?= $row['stok'] ?>" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                        <option value="sepatu">Sepatu</option>
                                        <option value="kaos">Kaos</option>
                                        <option value="aksesoris">Aksesoris</option>
                                        <option value="alat">Alat</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar" class="col-form-label">Gambar barang</label>
                                    <input type="file" class="form-control" name="gambar" id="gambar">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-dark" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="section-head">
        <h2>We have variation</h2>
    </div>
    <section class="filter-container">
        <form action="adminindex.php#all-product" method="post">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <button type="submit" class="basic-button">
                                <i class="fa-solid fa-shirt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>All product</h3>
                </div>
            </div>
        </form>
        <form action="adminindex.php#all-product" method="post">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <button type="submit" class="basic-button" name="filter" value="sepatu">
                                <i class="fa-solid fa-shirt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>Shoes</h3>
                </div>
            </div>
        </form>
        <form action="adminindex.php#all-product" method="post">
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
        <form action="adminindex.php#all-product" method="post">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <button type="submit" class="basic-button" name="filter" value="aksesoris">
                                <i class="fa-solid fa-shirt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>Accecoris</h3>
                </div>
            </div>
        </form>
        <form action="adminindex.php#all-product" method="post">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <button type="submit" class="basic-button" name="filter" value="alat">
                                <i class="fa-solid fa-shirt"></i>
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
            include "../config.php";
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
                        <img src="../gambar/<?= $row['gambar'] ?>" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory"><?= $row['kategori'] ?></span>
                        <h4><a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc<?= $row['id_barang'] ?>"><?= $row['nama_barang'] ?></a></h4>
                        <p><?= batasDeskripsi($row['descrip'], 5) ?>...</p>
                        <p>stok : <?= $row['stok']?></p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.<?= number_format($row['harga'], 0, ',', '.'); ?></div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang<?= $row['id_barang'] ?>">
                                    <i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i>
                                </button>
                                <a href="../proses/hapusbarang.php?id=<?= $row['id_barang'] ?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang<?= $row['id_barang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="<?= $row['id_barang'] ?>">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="<?= $row['nama_barang'] ?>" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang"><?= $row['descrip'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="<?= $row['harga'] ?>" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="<?= $row['stok'] ?>" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                        <option value="sepatu">Sepatu</option>
                                        <option value="kaos">Kaos</option>
                                        <option value="aksesoris">Aksesoris</option>
                                        <option value="alat">Alat</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar" class="col-form-label">Gambar barang</label>
                                    <input type="file" class="form-control" name="gambar" id="gambar">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-dark" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
                                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang<?= $row['id_barang'] ?>">
                                                <i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i>
                                            </button>
                                            <a href="../proses/hapusbarang.php?id=<?= $row['id_barang'] ?>">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
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
                    <img src="../gambar/nike3.jpeg" alt="Nike Image 1">
                </div>
                <div class="image-box">
                    <img src="../gambar/sepatu nike 6.jpeg" alt="Nike Image 2">
                </div>
                <div class="image-box">
                    <img src="../gambar/nike1.jpeg" alt="Nike Image 3">
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="../gambar/20602d43cc993811e5a6bd1886af4f33.png" alt="Nike Logo">
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

    <!-- Modal add barang -->
    <div class="modal fade" id="addbarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add new product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../proses/addbarang.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_barang" class="col-form-label">Nama barang</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                        </div>
                        <div class="mb-3">
                            <label for="descrip" class="col-form-label">Deskripsi barang</label>
                            <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="col-form-label">Harga</label>
                            <input type="number" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="col-form-label">Stok</label>
                            <input type="number" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="col-form-label">Kategori</label>
                            <select name="kategori" class="form-control" id="kategori">
                                <option value="sepatu">Sepatu</option>
                                <option value="kaos">Kaos</option>
                                <option value="aksesoris">Aksesoris</option>
                                <option value="alat">Alat</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="col-form-label">Gambar barang</label>
                            <input type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark" data-bs-target="submit" name="submit">Add product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>