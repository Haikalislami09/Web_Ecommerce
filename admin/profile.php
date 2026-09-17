<?php 
    include "../config.php";
    session_start();
    include "../config.php";
    if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
        header("location:../login.php");
    }

    $id = $_GET['id'];
    $query = "select * from tb_admin where id_admin = $id";
    $result = mysqli_query($mysqli,$query);

    $row = mysqli_fetch_array($result);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/profile.css">
</head>
<body>
    <header>
        <img src="../gambar/20602d43cc993811e5a6bd1886af4f33.png" width="60px" height="40px" class="logo" alt="">
        <nav>
            <ul class="nav-links">
                <li><a href="adminindex.php">Home</a></li>
                <li><a href="#all-product">Our Product</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="order.php">Order</a></li>
            </ul>
        </nav>
    </header>
    <div class="container all">
        <div class="gambar">
            <img src="../gambar/<?= $row['gambar'] ?>" alt="">
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
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#editProfile<?= $row['id_admin'] ?>">
                Edit profile
            </button>
            <a href="../logout.php"><button type="button" class="btn btn-danger"">
                Log out
            </button></a>
        </div>
    </div>

    <!-- Edit profile bootstrap -->
    <div class="modal fade" id="editProfile<?= $row['id_admin'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../proses/editadmin.php?id=<?= $row['id_admin'] ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $row['id_admin'] ?>">
                <div class="mb-3">
                    <label for="gambar" class="form-label">foto</label>
                    <input type="file" class="form-control" name="gambar">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $row['username'] ?>">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No Handphone</label>
                    <input type="text" class="form-control" name="no_telp" value="<?= $row['no_telp'] ?>">
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
<script src="../bootstrap/js/bootstrap.bundle.js" ></script>
</body>
</html>