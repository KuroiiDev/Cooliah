<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coliah - Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
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
                    <li class="nav-item">
                        <a class="nav-link" href="../home">Home</a>
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

    </div>
</body>

</html>