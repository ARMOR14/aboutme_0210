<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Login - Ambara Arung Kamora</title>
    <style>
        body { font-family: Poppins, sans-serif; background-color: #f4f6fb; text-align: center; margin-top: 80px; }
        form { background: white; padding: 25px; border-radius: 10px; width: 320px; margin: auto; box-shadow: 0 0 8px rgba(0,0,0,0.2); }
        input { padding: 8px; width: 80%; margin: 5px 0; }
        button { background: #5c2d91; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #3b186b; }
    </style>
</head>
<body>
    <h2>Form Login Sederhana</h2>
    <p><i>Nama: Ambara Arung Kamora | NIM: 24.62.0210</i></p>

    <form action="proses_login_0210.php" method="POST">
        <input type="text" name="username" placeholder="Masukkan Username" required><br>
        <input type="password" name="password" placeholder="Masukkan Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
