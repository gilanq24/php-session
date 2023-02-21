<?php
session_start();

if (isset($_SESSION['user'])) {
    # code...
    header("Location: dashboard.php");
    
}
$error = false;
// Cek Apakah Tombol Submit Sudah Ditekan
if (isset($_POST['submit'])) {
    # code...
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "password") {
        # code...
        // set session untuk admin
        $_SESSION["user"] = "admin";

        header("Location: dashboard.php");
    }else {
        $error = true;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Login</title>
</head>
<body>
    <center>
        <form action="" method="post">

            Username : <input type="text" name="username">
            <br>
            <br>   
            Password : <input type="password" name="password">
            <br>
            <br>
            <button type="submit" name="submit">Submit</button>
            <?php 
            
                if($error){
                    echo "<p><i>Username / Password Salah!</i></p>";
                }
            ?>
        </form>
    </center>
</body>
</html>