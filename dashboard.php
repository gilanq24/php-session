<?php 
session_start();

if (!isset($_SESSION['user'])) {
    # code...
    header("Location:login.php");
    
}

$nama = $_SESSION["user"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Selamat Datang Di Dashboard</h1>
    <h2>Anda Login Sebagai : <?= $nama; ?></h2>
    <br><br>
    <a href="logout.php">Logout Disini!</a>
</body>
</html>