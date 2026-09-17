<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container">
                <div class="w-100 d-flex justify-content-between">
                    <div>
                    <i class="fa-solid fa-envelope text-light contact-info"></i>
                    <a href="" class="navbar-sm-brand text-light text-decoration-none">Pler</a>
                    <i class="fa-solid fa-phone text-light contact-info"></i>
                    <a href="" class="navbar-sm-brand text-light text-decoration-none">Pler</a>
                    </div>
                    <div class="d-flex">
                        <div class="d-flex p-1 px-5">
                            <a href="cart.php" class="text-decoration-none"><i class="fa-solid fa-cart-shopping text-light"></i></a>
                        </div>
                        <a href="profile.php" class="d-flex text-decoration-none text-light pt-2"><i class="fa-solid fa-user text-light"></i></a>
                        <a href="../logout.php" class="text-decoration-none px-2 d-flex text-light pt-1">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="sec-navbar navbar-expand-lg bg-dark d-absolute rounded-bottom-4">
            <div class="container">
                <div class="d-flex bg-dark justify-content-between">
                    <div class="logo">
                        <img src="gambar/pngtree-argentina-word-lettering-with-argentina-flag-ornament-png-image_8857256.png" width="70px" height="60px" class="img-responsive" alt="">
                    </div>
                    <div class="search" id="search">
                        <div class="input-group my-2 ">
                            <form action="../user/userindex.php#search" class="d-flex" method="post">
                                <input type="search" name="search" class="form-control rounded">
                                <button class="btn btn-primary text-center" name="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>