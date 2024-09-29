<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooliah - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>


<?php
session_start();

if (isset($_SESSION['id'])) {
    header('Location: /cooliah');
    exit;
}
include '../config/connection.php';

if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM users WHERE username  = '$user' AND password = '$pass'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header('Location: /cooliah');
    } else {
        $error = "Username and Password are Incorrect!";
    }
}
?>

<body>
    <div class="background"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center">Login</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="user">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password"
                            name="pass">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="Login" />
                    </div>
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger">
                            <strong>Error!</strong><br> <?php echo $error; ?>
                        </div>
                    <?php } ?>
                </form>
                <p class="text-center">Don't have an account? <a href="../register">Register</a></p>
            </div>
        </div>
    </div>
</body>

</html>