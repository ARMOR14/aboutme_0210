<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Usia - Ambara Kamora</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            background-color: #f9fbfd;
            text-align: center;
            padding: 40px;
        }
        .hasil {
            background: white;
            display: inline-block;
            padding: 25px 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        footer {
            margin-top: 25px;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>
<body>
<?php

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jk = $_POST['jk'];
    $nim = $_POST['nim'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $prodi = $_POST['prodi'];

    $lahir = new DateTime($tgl_lahir);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($lahir);
    $usia = $umur->y; // hanya tahun

    echo "<div class='hasil'>";
    echo "<h2>Hasilnya :</h2>";
    echo "Hallo, <b>$nama</b><br>";
    echo "Email anda adalah <b>$email</b><br>";
    echo "Anda <b>$jk</b><br>";
    echo "NIM anda yaitu <b>$nim</b><br>";
    echo "Tanggal Lahir anda <b>" . date("d-m-Y", strtotime($tgl_lahir)) . "</b><br>";
    echo "Prodi anda <b>$prodi</b><br>";
    echo "Usia anda saat ini adalah <b>$usia tahun</b>";
    echo "</div>";
?>
<footer>
     Nama: <b>Ambara Arung Kamora</b> | NIM: <b>24.62.0210</b> | Prodi: <b>24 BCIS 01</b>
</footer>
</body>
</html>
