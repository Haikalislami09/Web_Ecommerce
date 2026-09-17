
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>username</th>
            <th>Password</th>
            <th>No Handphone</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
        <?php 
            include "config.php";

            $query = "select * from tb_penjual";
            $result = mysqli_query($mysqli,$query);
            
            while ($row = mysqli_fetch_array($result)) {?>
                 <tr>
                    <td><?= $row['0'] ?></td>
                    <td><?= $row['1'] ?></td>
                    <td><?= $row['2'] ?></td>
                    <td><?= $row['3'] ?></td>
                    <td><?= $row['4'] ?></td>
                    <td><?= $row['5'] ?></td>
                    <td><?= $row['6'] ?></td>
                    <td><img src="gambar/<?= $row['7'] ?>" width="100px" height="100px" alt=""></td>
                    <td><a href="editpenjual.php?id=<?= $row['id_penjual'] ?>">Edit</a>||<a href="proses/hapuspenjual.php?id=<?= $row['id_penjual'] ?>">Hapus</a></td>
                </tr>
           <?php }?>
    </table>
</body>
</html>