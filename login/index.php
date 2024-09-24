<?php 
session_start();
include '../connection.php';

if (isset($_POST['submit'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM accounts WHERE username  = '$user' AND password = '$pass'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();

        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['logged'] = true;
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