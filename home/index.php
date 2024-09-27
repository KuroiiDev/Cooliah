
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooliah - E-commerce Home Screen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<?php 

session_start();

if (!(isset($_SESSION['id']))){
    header("Location: /cooliah/login");
    exit();
}

?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Cooliah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <h6 class="mx-2"><?php echo $_SESSION['name'];?></h6>
                <a href="../logout.php" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="display-4"></h1>
        <h1 class="display-4"><span style="color: #000;">Welcome to Cooliah</span> 
        <span style="color: #007bff;"><?php echo $_SESSION['name'];?></span>!</h1>
        <p class="lead">Explore our collection of products just for you!</p>
        <hr class="my-4">
        <p>Check out our featured products below:</p>
        <div class="row">

            <!-- Inget bro ini buat produk -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="product1.jpg" alt="Product 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description of Product 1</p>
                        <p class="card-text">$19.99</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- sampe sini yaakkkkk -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>