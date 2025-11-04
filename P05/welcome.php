<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f0f4f8;
            text-align: center;
            margin-top: 150px;
        }
        .card {
            background: white;
            display: inline-block;
            padding: 40px 60px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: #007bff;
            padding: 8px 16px;
            border-radius: 6px;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Anda berhasil login ke sistem modul 5 PWL.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
