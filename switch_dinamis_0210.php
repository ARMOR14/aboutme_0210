<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pilih Program Studi AMIKOM Yogyakarta</title>
</head>
<body>
    <h2>Pilih Program Studi - Universitas AMIKOM Yogyakarta</h2>
    <form method="POST">
        <select name="prodi" required>
            <option value="">-- Pilih Program Studi --</option>
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
        <button type="submit">Lihat Keterangan</button>
    </form>

    <hr>

    <?php
    if(isset($_POST['prodi'])){
        $prodi = $_POST['prodi'];

        switch($prodi){
            case "D3 Manajemen Informatika":
                echo "<b>D3 Manajemen Informatika</b> - Fokus di pengelolaan data, sistem informasi, dan aplikasi bisnis.";
                break;

            case "D3 Teknik Informatika":
                echo "<b>D3 Teknik Informatika</b> - Belajar pemrograman, jaringan, dan sistem komputer.";
                break;

            case "S1 Akutansi":
                echo "<b>S1 Akuntansi</b> - Menggabungkan teknologi dengan ilmu akuntansi modern.";
                break;

            case "S1 Ekonomi":
                echo "<b>S1 Ekonomi</b> - Fokus pada teori ekonomi, bisnis, dan analisis keuangan digital.";
                break;

            case "S1 Kewirausahaan":
                echo "<b>S1 Kewirausahaan</b> - Melatih jiwa bisnis kreatif dan inovatif berbasis teknologi.";
                break;

            case "S1 Hubungan Internasional":
                echo "<b>S1 Hubungan Internasional</b> - Mempelajari diplomasi, politik global, dan komunikasi antarnegara.";
                break;

            case "S1 Ilmu Pemerintahan":
                echo "<b>S1 Ilmu Pemerintahan</b> - Fokus pada tata kelola pemerintahan, kebijakan publik, dan politik.";
                break;

            case "S1 Geografi":
                echo "<b>S1 Geografi</b> - Mempelajari pemetaan, lingkungan, dan tata ruang wilayah.";
                break;

            case "S1 Arsitektur":
                echo "<b>S1 Arsitektur</b> - Fokus pada desain bangunan dan estetika ruang.";
                break;

            case "S1 Perencanaan Wilayah Dan Kota":
                echo "<b>S1 Perencanaan Wilayah dan Kota</b> - Belajar tentang penataan kota dan pembangunan berkelanjutan.";
                break;

            case "S1 Teknik Komputer":
                echo "<b>S1 Teknik Komputer</b> - Gabungan antara hardware, software, dan jaringan komputer.";
                break;

            case "S1 Informatika":
                echo "<b>S1 Informatika</b> - Fokus di pengembangan software, AI, dan teknologi komputasi.";
                break;

            case "S1 Sistem Informasi":
                echo "<b>S1 Sistem Informasi</b> - Penggabungan teknologi informasi dengan manajemen bisnis digital.";
                break;

            case "S1 Teknologi Informasi":
                echo "<b>S1 Teknologi Informasi</b> - Mempelajari pengembangan sistem, keamanan data, dan solusi digital.";
                break;

            case "S1 Ilmu Komunikasi":
                echo "<b>S1 Ilmu Komunikasi</b> - Fokus di public relations, media digital, dan penyiaran.";
                break;

            case "Bachelor of Informatic":
                echo "<b>Bachelor of Informatic</b> - International Program in Informatics (English-based).";
                break;

            case "Bachelor of Information System":
                echo "<b>Bachelor of Information System</b> - International Program in Information Systems.";
                break;

            case "Bachelor of Information Technology":
                echo "<b>Bachelor of Information Technology</b> - International Program in IT & System Development.";
                break;

            case "Bachelor of Communication Sience":
                echo "<b>Bachelor of Communication Science</b> - International Program focusing on global media & PR.";
                break;

            default:
                echo " Prodi tidak ditemukan.";
        }
    }
    ?>
</body>
</html>
