<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Aritmatika - Ambara Kamora</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            background-color: #f9fbfd;
            padding: 30px;
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 320px;
        }
        td, th {
            border: 1px solid #ccc;
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        footer {
            margin-top: 20px;
            font-size: 13px;
            color: #555;
        }
    </style>
</head>
<body>
<?php
 
    $nama = $_POST['nama'];
    $a = (float) $_POST['angka1'];
    $b = (float) $_POST['angka2'];

    echo "<h2>Hasil Perhitungan Aritmatika</h2>";
    echo "<p><b>Nama:</b> $nama</p>";
    echo "<p><b>Angka 1:</b> $a | <b>Angka 2:</b> $b</p>";

    echo "<table>
            <tr><th>Operasi</th><th>Hasil</th></tr>
            <tr><td>$a + $b</td><td>".number_format($a + $b, 2)."</td></tr>
            <tr><td>$a - $b</td><td>".number_format($a - $b, 2)."</td></tr>
            <tr><td>$a * $b</td><td>".number_format($a * $b, 2)."</td></tr>";

    if ($b != 0) {
        echo "<tr><td>$a / $b</td><td>".number_format($a / $b, 2)."</td></tr>";
        echo "<tr><td>$a % $b</td><td>".number_format(fmod($a, $b), 2)."</td></tr>";
    } else {
        echo "<tr><td>$a / $b</td><td>Tak Terdefinisi (b=0)</td></tr>";
        echo "<tr><td>$a % $b</td><td>Tak Terdefinisi (b=0)</td></tr>";
    }

    echo "</table>";
?>
<footer>
   Nama: <b>Ambara Arung Kamora</b> | NIM: <b>24.62.0210</b> | Prodi: <b>24 BCIS 01</b>
</footer>
</body>
</html>
