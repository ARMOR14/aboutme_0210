<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proses Login</title>
</head>
<body>
<?php
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user == "bara" && $pass == "12345") {
    echo "<h2>Login Berhasil!</h2>";
    echo "Selamat datang, <b>$user</b>.";
} else {
    echo "<h2>Login Gagal!</h2>";
    echo "Username atau password salah.";
}
?>
</body>
</html>
