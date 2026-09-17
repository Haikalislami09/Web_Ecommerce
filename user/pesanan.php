<?php 
    session_start();
    include "../config.php";

    if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
        header("location:../login.php");
    }
    $id = $_GET['id'];
    $id_barang = $_GET['id_barang'];

    $query_user = "SELECT * FROM tb_user WHERE id_user = $id";
    $result_user = mysqli_query($mysqli, $query_user);
    $row_user = mysqli_fetch_array($result_user);

    $query_barang = "
        SELECT * 
        FROM tb_barang 
        WHERE id_barang = $id_barang";
    $result_barang = mysqli_query($mysqli, $query_barang);
    $row_barang = mysqli_fetch_array($result_barang);

    function batasDeskripsi($string, $batas){
        $kalimat = explode(" ",$string);
        return implode(" ",array_splice($kalimat,0,$batas));
    }

    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 1;
    $total = $row_barang['harga'] * $jumlah;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="pesanan.css">
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <div class="kartu">
            <div class="product-item">
                <div class="product-img">
                    <img src="../gambar/<?= $row_barang['gambar'] ?>" width="120px" height="120px" alt="<?= $row_barang['nama_barang'] ?>">
                </div>
                <div class="product-detail">
                    <h4><?= $row_barang['nama_barang'] ?></h4>
                    <p><?= batasDeskripsi($row_barang['descrip'],5)?>...</p>
                    <p>Harga: Rp <?= number_format($row_barang['harga'], 0, ',', '.') ?></p>
                    <p>Jumlah: <?= $jumlah ?></p>  
                </div>
            </div>    
        </div>
            <div class="user">
                <div class="user-form">
                    <form action="../proses/addpesanan.php" method="post">
                        <input type="hidden" name="id_barang" value="<?= $row_barang['id_barang'] ?>">
                        <input type="hidden" name="id_user" value="<?= $row_user['id_user'] ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Pemesan</label>
                            <input type="text" name="nama" required value="<?= $row_user['nama'] ?>" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No handphone</label>
                            <input type="text" name="no_telp" required value="<?= $row_user['no_telp'] ?>" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" readonly id=""><?= $row_user['alamat'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" readonly value="<?= $row_user['email'] ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_pesanan" class="form-label">Tanggal Pesanan</label>
                            <input type="date" name="tgl_pesanan" id="tgl_pesanan" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" name="jumlah" value="<?= $jumlah ?>" readonly class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="total" class="form-label">Total</label>
                            <input type="text" name="tampilan" value="Rp. <?= number_format($total , 0 , ',' , '.') ?>" readonly class="form-control">
                            <input type="hidden" name="total" value="<?= $total ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Buat Pesanan</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser<?= $row_user['id_user'] ?>">
                        Edit data diri
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Edit data diri Modal -->
        <div class="modal fade" id="editUser<?= $row_user['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data diri</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="../proses/edituser.php?id=<?= $row_user['id_user'] ?>&redirect=<?= urlencode('../user/pesanan.php?id=' . $row_user['id_user'] . '&id_barang=' . $id_barang) ?>" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $row_user['id_user'] ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $row_user['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $row_user['username'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" name="no_telp" value="<?= $row_user['no_telp'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3" ><?= $row_user['alamat'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?= $row_user['email'] ?>" >
                    </div>
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" data-bs-target="submit" class="btn btn-dark">Edit</button>
            </div>
            </div>
            </form>
            </div>
            </div>
            </div>
        </div>
        </div>
    <!-- Script tanggal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById('tgl_pesanan').value = today;
        });
    </script>

</body>
</html>


