<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Diskon - Ambara Kamora</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            background-color: #f8f9fc;
            color: #333;
            text-align: center;
            margin-top: 60px;
        }
        form {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            display: inline-block;
            text-align: left;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="number"] {
            width: 200px;
            padding: 6px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="checkbox"] {
            transform: scale(1.2);
        }
        button {
            background-color: #5c2d91;
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 5px;
            margin: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #431b73;
        }
        .hasil {
            margin-top: 25px;
            background: #fff;
            display: inline-block;
            text-align: left;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #5c2d91;
        }
    </style>
</head>
<body>
    <h2>Hitung Diskon</h2>
    <p><i>Nama: Ambara Arung Kamora | NIM: 24.62.0210</i></p>

    <form method="POST">
        <label>Harga Satuan :</label><br>
        <input type="number" name="harga" required><br>
        
        <label>Jumlah Barang :</label><br>
        <input type="number" name="jumlah" required><br>
        
        <label>Member :</label>
        <input type="checkbox" name="member" value="yes"> Yes<br><br>
        
        <button type="submit">Submit</button>
        <button type="reset">Batal</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $member = isset($_POST['member']) ? "yes" : "no";

        $total = $harga * $jumlah;

        // logika dari modul (dipertahankan)
        if ($member == "yes") {
            $diskon = 0.1 * $total; // member dapat 10%
        } elseif ($total >= 500000) {
            $diskon = 0.1 * $total; // non-member tapi total besar
        } else {
            $diskon = 0; // tidak dapat diskon
        }

        $bayar = $total - $diskon;

        echo "<div class='hasil'>";
        echo "<h3>Total Pembayaran adalah</h3>";
        echo "Harga Satuan : Rp" . number_format($harga, 0, ',', '.') . "<br>";
        echo "Jumlah Barang : " . $jumlah . "<br>";
        echo "Member : " . $member . "<br>";
        echo "Total Pembelian : Rp" . number_format($total, 0, ',', '.') . "<br>";
        echo "Diskon : Rp" . number_format($diskon, 0, ',', '.') . "<br>";
        echo "<b>Total Bayar : Rp" . number_format($bayar, 0, ',', '.') . "</b>";
        echo "</div>";
    }
    ?>
</body>
</html>
