<?php 
    include "config.php";
    include_once "component/navbar.php";
    session_start();
    if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee Clone</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Shopee Clone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.html">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Shopee Clone</h5>
                    <p>Discover amazing products</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Best Prices</h5>
                    <p>Find the best deals</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fast Shipping</h5>
                    <p>Get your orders quickly</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Popular Products</h1>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Product Card 1 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">$25.00</p>
                        <a href="product-detail.html" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Product Card 2 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">$45.00</p>
                        <a href="product-detail.html" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Product Card 3 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">$65.00</p>
                        <a href="product-detail.html" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Product Card 4 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">$85.00</p>
                        <a href="product-detail.html" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2023 Shopee Clone
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
