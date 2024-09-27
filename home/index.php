<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooliah - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<?php
$name = "-";
session_start();

if (!(isset($_SESSION['id']))) {
    header("Location: /cooliah/login");
    exit();
}

include '../config/connection.php';

$query = "SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
}

?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cooliah</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="../home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="../account" class="p-2">
                        <i class="fas fa-user"></i>
                        <?php echo $name; ?>
                    </a>
                    <a href="../logout.php" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>
                </form>
            </div>
        </div>
    </nav>
    <div class="container p-3">
        <h1 class="display-4"></h1>
        <h1 class="display-4"><span style="color: #000;">Welcome to Cooliah,</span>
            <span style="color: #007bff;"><?php echo $name; ?></span>!
        </h1>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>