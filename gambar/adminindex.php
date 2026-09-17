<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!-- script -->
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
    <header>
        <img src="../gambar/20602d43cc993811e5a6bd1886af4f33.png" width="60px" height="40px" class="logo" alt="">
        <nav>
            <ul class="nav-links">
                <li><a href="">Home</a></li>
                <li><a href="#all-product">Our Product</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
            </ul>
        </nav>
        <div class="search d-flex" id="search">
            <div class="input-group my-2 ">
                <form action="../admin/adminindex.php#search" class="d-flex" method="post">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addbarang"><i class="fa-solid mt-2 mx-2 fa-square-plus text-dark"></i></button>
                    <input type="search" name="search" class="form-control rounded">
                    <a href="profile.php" class="d-flex text-decoration-none text-light pt-2"><i class="fa-solid fa-search mx-2 text-dark"></i></a>
                    <a href="profile.php" class="d-flex text-decoration-none text-light pt-2"><i class="fa-solid fa-user text-dark"></i></a>
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
                <a href="" class="btn-buy">Just buy it</a>
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
                <p class="product-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis esse eligendi ab. Error quas corporis.</p>
                <button class="btn">See product</button>
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
            <p class="new-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore molestias a adipisci rem suscipit aut nulla fuga</p>
            <button class="btn">More</button>
        </div>
        <div class="new-img">
            <div class="new-img-content">
                <img src="../gambar/nike1.jpeg" alt="">
                <p>Nike bagus</p>
                <h4>rp.20000</h4>
            </div>
            <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
        </div>
        <div class="new-img">
            <div class="new-img-content">
                <img src="../gambar/nike1.jpeg" alt="">
                <p>Nike bagus</p>
                <h4>rp.20000</h4>
            </div>
            <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
        </div>
        <div class="new-img">
            <div class="new-img-content">
                <img src="../gambar/nike1.jpeg" alt="">
                <p>Nike bagus</p>
                <h4>rp.20000</h4>
            </div>
            <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
        </div>
    </section>
    <div class="section-head">
        <h2>We have variation</h2>
    </div>
    <section class="filter-container">
        <a href="../login.php">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>TSHIRT</h3>
                </div>
            </div>
        </a>
        <a href="../login.php">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <i class="fa-solid fa-shoes"></i>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>TSHIRT</h3>
                </div>
            </div>
        </a>
        <a href="../login.php">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <i class="fa-solid fa-"></i>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>TSHIRT</h3>
                </div>
            </div>
        </a>
        <a href="../login.php">
            <div class="filter">
                <div class="outer">
                    <div class="inner">
                        <div class="icon">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                    </div>
                </div>
                <div class="filter-text">
                    <h3>TSHIRT</h3>
                </div>
            </div>
        </a>
    </section>
    <section class="product-container">
    <div class="all-product" id="all-product">
         
            <div class="product-card">
                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc10" >
                    <div class="badge">aksesoris</div>
                    <div class="product-tumb">
                        <img src="../gambar/bung-tomo--removebg-preview.png" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">aksesoris</span>
                        <h4><a href="">Bung tomo perjuangan</a></h4>
                        <p>bung tomo pster...</p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.100.000</div>
                            <div class="product-price">Rp.200</div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang10"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                <a href="../proses/hapusbarang.php?id=10"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="10">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="Bung tomo perjuangan" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang">bung tomo pster</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="100000" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="200" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="aksesoris">aksesoris</option>
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
                                    <button type="submit" class="btn btn-primary" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card description -->
            <!-- Modal -->
            <div class="modal fade" id="cardDesc10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Bung tomo perjuangan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product-card">
                                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc10" >
                                    <div class="badge">aksesoris</div>
                                    <div class="product-tumb">
                                        <img src="../gambar/bung-tomo--removebg-preview.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">aksesoris</span>
                                        <h4><a href="">Bung tomo perjuangan</a></h4>
                                        <p>bung tomo pster</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.100.000</div>
                                            <div class="product-links">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang10"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                                <a href="../proses/hapusbarang.php?id=10"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="product-card">
                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc11" >
                    <div class="badge">sepatu</div>
                    <div class="product-tumb">
                        <img src="../gambar/mousepad.jpg" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">sepatu</span>
                        <h4><a href="">Mousepad gaming</a></h4>
                        <p>BUat aim kamu menjadi lebih...</p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.100.000.000</div>
                            <div class="product-price">Rp.200</div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang11"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                <a href="../proses/hapusbarang.php?id=11"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="11">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="Mousepad gaming" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang">BUat aim kamu menjadi lebih tajam</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="100000000" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="200" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="sepatu">sepatu</option>
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
                                    <button type="submit" class="btn btn-primary" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card description -->
            <!-- Modal -->
            <div class="modal fade" id="cardDesc11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mousepad gaming</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product-card">
                                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc11" >
                                    <div class="badge">sepatu</div>
                                    <div class="product-tumb">
                                        <img src="../gambar/mousepad.jpg" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">sepatu</span>
                                        <h4><a href="">Mousepad gaming</a></h4>
                                        <p>BUat aim kamu menjadi lebih tajam</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.100.000.000</div>
                                            <div class="product-links">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang11"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                                <a href="../proses/hapusbarang.php?id=11"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="product-card">
                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc12" >
                    <div class="badge">sepatu</div>
                    <div class="product-tumb">
                        <img src="../gambar/lionel-messi-messi-messi-argentina_3491051-removebg-preview.png" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">sepatu</span>
                        <h4><a href="">Messi</a></h4>
                        <p>Messi adalah sejenis manusia yang...</p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.200.000.000</div>
                            <div class="product-price">Rp.12</div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang12"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                <a href="../proses/hapusbarang.php?id=12"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="12">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="Messi" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang">Messi adalah sejenis manusia yang sangat bagus</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="200000000" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="12" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="sepatu">sepatu</option>
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
                                    <button type="submit" class="btn btn-primary" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card description -->
            <!-- Modal -->
            <div class="modal fade" id="cardDesc12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Messi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product-card">
                                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc12" >
                                    <div class="badge">sepatu</div>
                                    <div class="product-tumb">
                                        <img src="../gambar/lionel-messi-messi-messi-argentina_3491051-removebg-preview.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">sepatu</span>
                                        <h4><a href="">Messi</a></h4>
                                        <p>Messi adalah sejenis manusia yang sangat bagus</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.200.000.000</div>
                                            <div class="product-links">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang12"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                                <a href="../proses/hapusbarang.php?id=12"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="product-card">
                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc13" >
                    <div class="badge">sepatu</div>
                    <div class="product-tumb">
                        <img src="../gambar/soekarno-ketergesaan-hanung_hlgh-removebg-preview.png" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">sepatu</span>
                        <h4><a href="">miuuuasudh</a></h4>
                        <p>asdasdassdad...</p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.1.000.000</div>
                            <div class="product-price">Rp.19</div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang13"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                <a href="../proses/hapusbarang.php?id=13"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="13">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="miuuuasudh" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang">asdasdassdad</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="1000000" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="19" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="sepatu">sepatu</option>
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
                                    <button type="submit" class="btn btn-primary" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card description -->
            <!-- Modal -->
            <div class="modal fade" id="cardDesc13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">miuuuasudh</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product-card">
                                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc13" >
                                    <div class="badge">sepatu</div>
                                    <div class="product-tumb">
                                        <img src="../gambar/soekarno-ketergesaan-hanung_hlgh-removebg-preview.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">sepatu</span>
                                        <h4><a href="">miuuuasudh</a></h4>
                                        <p>asdasdassdad</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.1.000.000</div>
                                            <div class="product-links">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang13"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                                <a href="../proses/hapusbarang.php?id=13"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="product-card">
                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc14" >
                    <div class="badge">sepatu</div>
                    <div class="product-tumb">
                        <img src="../gambar/wrs3_waifu2x_photo_noise3_scale-removebg-preview_waifu2x_photo_noise3_scale.png" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">sepatu</span>
                        <h4><a href="">123123</a></h4>
                        <p>asdasd...</p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.12.212</div>
                            <div class="product-price">Rp.213</div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang14"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                <a href="../proses/hapusbarang.php?id=14"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="14">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="123123" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang">asdasd</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="12212" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="213" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="sepatu">sepatu</option>
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
                                    <button type="submit" class="btn btn-primary" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card description -->
            <!-- Modal -->
            <div class="modal fade" id="cardDesc14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">123123</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product-card">
                                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc14" >
                                    <div class="badge">sepatu</div>
                                    <div class="product-tumb">
                                        <img src="../gambar/wrs3_waifu2x_photo_noise3_scale-removebg-preview_waifu2x_photo_noise3_scale.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">sepatu</span>
                                        <h4><a href="">123123</a></h4>
                                        <p>asdasd</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.12.212</div>
                                            <div class="product-links">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang14"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                                <a href="../proses/hapusbarang.php?id=14"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="product-card">
                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc17" >
                    <div class="badge">aksesoris</div>
                    <div class="product-tumb">
                        <img src="../gambar/mantan-presiden-soekarno-_140507132939-322-removebg-preview.png" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">aksesoris</span>
                        <h4><a href="">Kontci</a></h4>
                        <p>Panjang kali lek...</p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.2.000.000</div>
                            <div class="product-price">Rp.122</div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang17"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                <a href="../proses/hapusbarang.php?id=17"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="17">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="Kontci" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang">Panjang kali lek</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="2000000" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="122" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="aksesoris">aksesoris</option>
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
                                    <button type="submit" class="btn btn-primary" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card description -->
            <!-- Modal -->
            <div class="modal fade" id="cardDesc17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Kontci</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product-card">
                                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc17" >
                                    <div class="badge">aksesoris</div>
                                    <div class="product-tumb">
                                        <img src="../gambar/mantan-presiden-soekarno-_140507132939-322-removebg-preview.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">aksesoris</span>
                                        <h4><a href="">Kontci</a></h4>
                                        <p>Panjang kali lek</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.2.000.000</div>
                                            <div class="product-links">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang17"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                                <a href="../proses/hapusbarang.php?id=17"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="product-card">
                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc18" >
                    <div class="badge">sepatu</div>
                    <div class="product-tumb">
                        <img src="../gambar/dirt_charges_png_by_ashrafcrew_d61p4wm.png" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">sepatu</span>
                        <h4><a href="">askdksja</a></h4>
                        <p>jksjdkajsdkjq...</p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.201.909.213</div>
                            <div class="product-price">Rp.920.930.123</div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang18"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                <a href="../proses/hapusbarang.php?id=18"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="18">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="askdksja" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang">jksjdkajsdkjq</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="201909213" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="920930123" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="sepatu">sepatu</option>
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
                                    <button type="submit" class="btn btn-primary" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card description -->
            <!-- Modal -->
            <div class="modal fade" id="cardDesc18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">askdksja</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product-card">
                                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc18" >
                                    <div class="badge">sepatu</div>
                                    <div class="product-tumb">
                                        <img src="../gambar/dirt_charges_png_by_ashrafcrew_d61p4wm.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">sepatu</span>
                                        <h4><a href="">askdksja</a></h4>
                                        <p>jksjdkajsdkjq</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.201.909.213</div>
                                            <div class="product-links">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang18"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                                <a href="../proses/hapusbarang.php?id=18"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="product-card">
                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc19" >
                    <div class="badge">sepatu</div>
                    <div class="product-tumb">
                        <img src="../gambar/arfent.file.jpg" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">sepatu</span>
                        <h4><a href="">konoo</a></h4>
                        <p>erere...</p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.2.432.243</div>
                            <div class="product-price">Rp.224.234.234</div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang19"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                <a href="../proses/hapusbarang.php?id=19"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="19">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="konoo" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang">erere</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="2432243" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="224234234" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="sepatu">sepatu</option>
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
                                    <button type="submit" class="btn btn-primary" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card description -->
            <!-- Modal -->
            <div class="modal fade" id="cardDesc19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">konoo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product-card">
                                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc19" >
                                    <div class="badge">sepatu</div>
                                    <div class="product-tumb">
                                        <img src="../gambar/arfent.file.jpg" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">sepatu</span>
                                        <h4><a href="">konoo</a></h4>
                                        <p>erere</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.2.432.243</div>
                                            <div class="product-links">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang19"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                                <a href="../proses/hapusbarang.php?id=19"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="product-card">
                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc20" >
                    <div class="badge">sepatu</div>
                    <div class="product-tumb">
                        <img src="../gambar/209546.jpg" alt="">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">sepatu</span>
                        <h4><a href="">koko</a></h4>
                        <p>askjasdkjsajdsa...</p>
                        <div class="product-bottom-details">
                            <div class="product-price">Rp.2.193.091.239.123</div>
                            <div class="product-price">Rp.2.093.012.391</div>
                            <div class="product-links">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang20"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                <a href="../proses/hapusbarang.php?id=20"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal edit barang -->
            <div class="modal fade" id="editbarang20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../proses/editbarang.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="20">
                                <div class="mb-3">
                                    <label for="nama_barang" class="col-form-label">Nama barang</label>
                                    <input type="text" value="koko" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descrip" class="col-form-label">Deskripsi barang</label>
                                    <textarea name="descrip" class="form-control" id="descrip" placeholder="masukkan Deskripsi barang">askjasdkjsajdsa</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="text" value="2193091239123" class="form-control" placeholder="Masukkan harga barang" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="col-form-label">Stok</label>
                                    <input type="number" value="2093012391" class="form-control" placeholder="Masukkan stok barang" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <select name="kategori" class="form-control" id="kategori" required>
                                        <option value="sepatu">sepatu</option>
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
                                    <button type="submit" class="btn btn-primary" data-bs-target="submit" name="submit">Edit product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card description -->
            <!-- Modal -->
            <div class="modal fade" id="cardDesc20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">koko</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product-card">
                                <a href="#cardDesc" data-bs-toggle="modal" data-bs-target="#cardDesc20" >
                                    <div class="badge">sepatu</div>
                                    <div class="product-tumb">
                                        <img src="../gambar/209546.jpg" alt="">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">sepatu</span>
                                        <h4><a href="">koko</a></h4>
                                        <p>askjasdkjsajdsa</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">Rp.2.193.091.239.123</div>
                                            <div class="product-links">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editbarang20"><i style="font-size: 22px;" class="fa-solid fa-pen-to-square text-light"></i></button>
                                                <a href="../proses/hapusbarang.php?id=20"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
</section>

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