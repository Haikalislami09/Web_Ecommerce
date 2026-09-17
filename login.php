<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="background container-fluid vh-100 bg-dark">
        <div class="row d-flex justify-content-center h-100 align-items-center">
            <div class="col-lg-4 justify-content-center">
                <h1 class="text-light text-center">login</h1>
                <div class="container p-5 d-flex justify-content-center align-items-center bg-dark rounded">
                    <form action="proseslogin.php" method="post">
                        <div class="form-group text-light mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                        <div class="form-group text-light mb-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="col text-center d-flex justify-content-center">
                            <button class="btn btn-primary ">Log in</button>
                        </div>
                        <br>
                        <div class="form-group text-light">
                            <p>Belum punya akun?<a href="registeruser.php" class="text-decoration-none text-light"> Daftar disini</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>