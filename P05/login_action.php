<?php
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Sesuaikan nama kolom di database
$query = mysqli_query($config, "SELECT * FROM user WHERE user_nama='$username' AND user_password='$password'");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
} else {
    echo "Login gagal! Username atau password salah.";
}
?>
