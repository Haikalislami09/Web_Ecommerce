<?php 
    include "../config.php";
    session_start();

    if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
        header("location:../login.php");
    }

    $id = $_SESSION['id_user'];
    $query = "SELECT * FROM tb_user WHERE id_user = $id";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body style="background-color:black;">
<header>
    <img src="../gambar/20602d43cc993811e5a6bd1886af4f33.png" width="60px" height="40px" class="logo" alt="">
    <nav>
        <ul class="nav-links">
            <li><a href="userindex.php">Home</a></li>
            <li><a href="userindex.php#all-product">Our Product</a></li>
            <li><a href="userindex.php#about-us">About us</a></li>
            <li><a href="userindex.php#footer">Contact us</a></li>
            <li><a href="order.php?id=<?= $row['id_user'] ?>">Order</a></li>
            <li><a href="favorite.php?id=<?= $row['id_user'] ?>"><i class="fa-regular fa-heart"></i></a></li>
        </ul>
    </nav>
</header>

<div class="container all">
    <div class="gambar">
        <img src="../gambar/<?= $row['gambar'] ?>" alt="">
        <h4><?= $row['nama'] ?></h4>
    </div>
    <div class="data-diri">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?= $row['username'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Handphone</label>
            <input type="text" class="form-control" name="no_telp" value="<?= $row['no_telp'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3" readonly><?= $row['alamat'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?= $row['email'] ?>" readonly>
        </div>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#editProfile<?= $row['id_user'] ?>">Edit profile</button>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#resetPassword<?= $row['id_user'] ?>">Reset password</button>
        <a href="../logout.php"><button type="button" class="btn btn-danger">Log out</button></a>
    </div>
</div>

<!-- Reset Password Modal -->
<div class="modal fade" id="resetPassword<?= $row['id_user'] ?>" tabindex="-1" aria-labelledby="resetPasswordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="resetPasswordLabel">Reset Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../proses/editpassword.php?id=<?= $row['id_user'] ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $row['id_user'] ?>">
                    <div class="mb-3">
                        <label for="old_password" class="form-label">Password lama</label>
                        <input type="password" class="form-control" required name="old_password">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Password baru</label>
                        <input type="password" class="form-control" required name="new_password">
                    </div>
                    <div class="mb-3">
                        <label for="confir_password" class="form-label">Konfirmasi Password baru</label>
                        <input type="password" class="form-control" required name="confir_password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-dark">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfile<?= $row['id_user'] ?>" tabindex="-1" aria-labelledby="editProfileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editProfileLabel">Edit Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../proses/edituser.php?id=<?= $row['id_user'] ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $row['id_user'] ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" required name="nama" value="<?= $row['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" required name="username" value="<?= $row['username'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" name="no_telp" value="<?= $row['no_telp'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3"><?= $row['alamat'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?= $row['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">foto</label>
                        <input type="file" class="form-control" name="gambar"">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-dark">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
