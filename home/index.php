<?php 

session_start();

if (!(isset($_SESSION['id']))){
    header("Location: /cooliah/login");
    exit();
}

echo "Hello " . $_SESSION['name'] . "!";

?>

<a href="../logout.php">Logout</a>