<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooliah - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<?php 
include "../config/connection.php";

if(isset($_POST['submit'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO users (username, name, password, roles) VALUES ('$user', '$name', '$pass', 'user')";
    $result = mysqli_query($conn, $query);
    
    if($result) {
        echo "Registration successful";
    } else {
        echo "Error: ". mysqli_error($conn);
    }
}
?>
<body>
<div class="background"></div>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center">Register</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="user">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter E-Mail" name="email">
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="pass">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="Register"/>
                    </div>
                </form>
                <p class="text-center">Already have an account? <a href="../login">Login</a></p>
            </div>
        </div>
    </div> 
</body>
</html>