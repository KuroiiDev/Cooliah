<?php 

session_start();

if (!(isset($_SESSION['id']))){
    header("Location: /cool-iah/login");
    exit();
}

echo "Hello " . $_SESSION['name'] . "!";

?>

<a href="/cool-iah/logout.php">Logout</a>