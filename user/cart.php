<?php
session_start();
include '../config.php';

$id_user = $_SESSION['id_user'];
if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
    header("location:../login.php");
    exit();
}

$query = "SELECT tb_cart.*, tb_barang.nama_barang, tb_barang.harga, tb_barang.gambar 
          FROM tb_cart 
          JOIN tb_barang ON tb_cart.id_barang = tb_barang.id_barang 
          WHERE tb_cart.id_user = $id_user";

$result = mysqli_query($mysqli, $query);

$total = 0;
$id_barang_list = [];
$jumlah_list = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style/cart.css">
</head>
<body>
    <h1>Shopping Cart</h1>
    <ul>
        <?php while ($item = mysqli_fetch_assoc($result)): ?>
            <li>
                <img src="../gambar/<?= htmlspecialchars($item['gambar']) ?>" alt="<?= htmlspecialchars($item['nama_barang']) ?>">
                <div class="item-details">
                    <h2><?= htmlspecialchars($item['nama_barang']) ?></h2>
                    <p>Harga: Rp. <?= number_format($item['harga'], 0, ',', '.') ?></p>
                    <form action="../proses/editcart.php?id=<?= $item['id_cart'] ?>" method="post" class="item-actions">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" value="<?= $item['jumlah'] ?>" min="1" onchange="this.form.submit()">
                        <input type="submit" value="Edit">
                    </form>
                    <?php
                    $subtotal = $item['harga'] * $item['jumlah'];
                    $total += $subtotal;

                    $id_barang_list[] = $item['id_barang'];
                    $jumlah_list[] = $item['jumlah'];
                    ?>
                    <p>Total: Rp. <?= number_format($subtotal, 0, ',', '.') ?></p>
                    <a href="../proses/hapuscart.php?id=<?= $item['id_cart'] ?>" class="items-actions">Remove</a>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>

    <h2>Total keranjang: Rp. <?= number_format($total, 0, ',', '.') ?></h2>

    <a href="../proses/clearcart.php" class="items-actions">Clear</a>

    <?php
    // Create a query string with id_barang and jumlah
    $id_barang_string = implode(',', $id_barang_list);
    $jumlah_string = implode(',', $jumlah_list);
    ?>

    <?php if ($id_user && count($id_barang_list) > 0): ?>
        <a href="pesanan.php?id_user=<?= $id_user ?>&id_barang=<?= urlencode($id_barang_string) ?>&jumlah=<?= urlencode($jumlah_string) ?>" class="checkout">Buat pesanan</a>
    <?php endif; ?>

    <a href="userindex.php" class="checkout">Kembali belanja</a>
</body>
</html>
