<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses/registeradmin.php" method="post" enctype="multipart/form-data">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Masukkan username anda" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukkan password baru anda" required>
        <label for="no_telp">No Handphone</label>
        <input type="number" name="no_telp" id="no_telp" placeholder="No Handphone anda" required>
        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>