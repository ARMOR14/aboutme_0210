<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Struktur Kendali Perulangan - Ambara Kamora</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            background-color: #f8f9fc;
            text-align: center;
            margin-top: 50px;
            color: #333;
        }
        form {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            display: inline-block;
            text-align: left;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        input[type="date"], input[type="number"] {
            width: 220px;
            padding: 6px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #5c2d91;
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #431b73;
        }
        .hasil {
            background: #fff;
            margin-top: 25px;
            padding: 20px;
            border-radius: 12px;
            display: inline-block;
            text-align: left;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 { color: #5c2d91; }
    </style>
</head>
<body>
    <h2>Tugas Struktur Kendali Perulangan</h2>
    <p><i>Nama: Ambara Arung Kamora | NIM: 24.62.0210</i></p>

    <form method="POST">
        <label>Tanggal Lahir :</label><br>
        <input type="date" name="tgl_lahir" required><br><br>

        <label>Bilangan :</label><br>
        <input type="number" name="bilangan" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil input pengguna
        $tgl_lahir = $_POST['tgl_lahir'];
        $bilangan = $_POST['bilangan'];

        // Hitung umur berdasarkan tanggal saat ini
        $tgl_sekarang = date('Y-m-d');
        $umur = date_diff(date_create($tgl_lahir), date_create($tgl_sekarang));
        $usia_saat_ini = $umur->y;

        echo "<div class='hasil'>";
        echo "<h3>Hasil Perhitungan</h3>";
        echo "Usia saat ini adalah: <b>$usia_saat_ini Tahun</b><br>";
        echo "Bilangan yang diinputkan adalah <b>$bilangan</b><br><br>";
        echo "Usia saya selanjutnya adalah<br>";

        // perulangan dari modul: menambah bilangan ke usia
        for ($i = 1; $i <= $bilangan; $i++) {
            $usia_selanjutnya = $usia_saat_ini + $i;
            echo $usia_selanjutnya . " Tahun<br>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>
