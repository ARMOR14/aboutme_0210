<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hitung Usia - Ambara Kamora</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            background-color: #f3f6fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }
        form {
            background: white;
            padding: 25px 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: 500;
            text-align: left;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
       
        .gender {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 8px;
            margin-bottom: 5px;
        }
        .gender label {
            display: flex;
            align-items: center;
            gap: 5px;
            font-weight: normal;
        }
        input[type=radio] {
            width: auto;
            margin: 0;
        }
        input[type=submit], input[type=reset] {
            width: 48%;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 15px;
        }
        input[type=reset] {
            background-color: #f44336;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        input[type=reset]:hover {
            background-color: #e53935;
        }
        footer {
            margin-top: 30px;
            font-size: 13px;
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Form Hitung Usia</h2>
    <form action="action_form_usia.php" method="POST">
        <label>Nama Anda :</label>
        <input type="text" name="nama" required>

        <label>Email :</label>
        <input type="email" name="email" required>

        <label>Jenis Kelamin :</label>
        <div class="gender">
            <label><input type="radio" name="jk" value="Perempuan" required> Perempuan</label>
            <label><input type="radio" name="jk" value="Laki-laki" required> Laki-Laki</label>
        </div>

        <label>NIM :</label>
        <input type="text" name="nim" required>

        <label>Tanggal Lahir :</label>
        <input type="date" name="tgl_lahir" required>

        <label>Program Studi :</label>
        <select name="prodi" required>
            <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
            <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
            <option value="S1 Akutansi">S1 Akutansi</option>
            <option value="S1 Ekonomi">S1 Ekonomi</option>
            <option value="S1 Kewirausahaan">S1 Kewirausahaan</option>
            <option value="S1 Hubungan Internasional">S1 Hubungan Internasional</option>
            <option value="S1 Ilmu Pemerintahan">S1 Ilmu Pemerintahan</option>
            <option value="S1 Geografi">S1 Geografi</option>
            <option value="S1 Arsitektur">S1 Arsitektur</option>
            <option value="S1 Perencanaan Wilayah Dan Kota">S1 Perencanaan Wilayah Dan Kota</option>
            <option value="S1 Teknik Komputer">S1 Teknik Komputer</option>
            <option value="S1 Informatika">S1 Informatika</option>
            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
            <option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
            <option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
            <option value="Bachelor of Informatic">Bachelor of Informatic</option>
            <option value="Bachelor of Information System">Bachelor of Information System</option>
            <option value="Bachelor of Information Technology">Bachelor of Information Technology</option>
            <option value="Bachelor of Communication Sience">Bachelor of Communication Sience</option>
        </select>

        <div style="display:flex;justify-content:space-between;">
            <input type="submit" value="Hitung Usia">
            <input type="reset" value="Reset">
        </div>
    </form>

    <footer>
        Nama: <b>Ambara Arung Kamora</b> | NIM: <b>24.62.0210</b> | Prodi: <b>24 BCIS 01</b>
    </footer>
</body>
</html>
