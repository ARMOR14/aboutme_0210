<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - 0210</title>
    <style>
        body {
            background-color: #f7f7ff;
            font-family: "Poppins", sans-serif;
            text-align: center;
            color: #333;
        }
        h1 {
            color: #0077ff;
        }
        img {
            border-radius: 50%;
            width: 180px;
            height: 180px;
            margin-top: 20px;
            object-fit: cover;
        }
        p {
            font-size: 18px;
        }
        .highlight {
            color: #ff6600;
            font-weight: bold;
        }
        a {
            color: #0077ff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
            color: #ff6600;
        }
    </style>
</head>
<body>
    <?php
        // Data diri
        $nama = "Ambara Arung Kamora";
        $nim = "24.62.0210";
        $kampus = "Universitas Amikom Yogyakarta";
        $prodi = "S1 Sistem Informasi";
        $hobi = "Fotografi dan Videografi";
        $instagram = "https://www.instagram.com/p/DO7hxFpkk3x/";
    ?>

    <h1>About Me</h1>
    <img src="foto/ambara.jpeg" alt="Foto Profil">
    <p>Halo, perkenalkan namaku <span class="highlight"><?php echo $nama; ?></span></p>
    <p>Saya adalah mahasiswa <?php echo $prodi; ?> di <strong><?php echo $kampus; ?></strong>.</p>
    <p>NIM saya adalah <strong><?php echo $nim; ?></strong>.</p>
    <p><strong> Hobi saya yaitu <?php echo $hobi; ?></strong>.</p>
    <p>Yang merasa kalcer wajib follow ig saya 
        <a href="<?php echo $instagram; ?>" target="_blank">Klik di sini</a>
    </p>
</body>
</html>
