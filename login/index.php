<?php 
session_start();

if (isset($_SESSION['id'])){
    header('Location: /cool-iah');
    exit; 
}
include '../config/connection.php';

if (isset($_POST['submit'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM accounts WHERE username  = '$user' AND password = '$pass'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();

        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header('Location: /cool-iah');
    } else {
        echo "Invalid username or password";
    }
}

?>

<form method="POST">
    <input type="text" name="user">
    <input type="text" name="pass">
    <input type="submit" name="submit" value="login">
</form>