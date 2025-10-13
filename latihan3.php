<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Aritmatika - Ambara Kamora</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            background-color: #f4f7fc;
            text-align: center;
            margin-top: 60px;
        }
        form {
            display: inline-block;
            background: white;
            padding: 25px 40px;
            border-radius: 15px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }
        input, select {
            margin: 6px;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ccc;
            width: 200px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            width: 100px;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        footer {
            margin-top: 20px;
            font-size: 13px;
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Latihan 1.4.3 - Form Aritmatika</h2>
    <form action="action3.php" method="POST">
        <label>Masukkan Nama Anda:</label><br>
        <input type="text" name="nama" required><br>
        <label>Masukkan Angka Pertama (1-10):</label><br>
        <input type="number" name="angka1" min="1" max="10" required><br>
        <label>Masukkan Angka Kedua (1-10):</label><br>
        <input type="number" name="angka2" min="1" max="10" required><br><br>
        <input type="submit" value="Hitung">
    </form>

    <footer>
        Nama: <b>Ambara Arung Kamora</b> | NIM: <b>24.62.0210</b> | Prodi: <b>24 BCIS 01</b>
    </footer>
</body>
</html>
