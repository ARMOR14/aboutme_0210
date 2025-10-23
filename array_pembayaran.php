<?php
// Jika tombol submit ditekan
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $member = isset($_POST['member']); // true kalau checkbox dicentang

    // Hitung total pembelian
    $total = $harga * $jumlah;

    // Hitung diskon berdasarkan kondisi
    if ($member && $total > 100000) {
        $diskon = 0.20 * $total; // 20% untuk member & total > 100.000
    } elseif ($member || $total > 100000) {
        $diskon = 0.10 * $total; // 10% untuk salah satu kondisi
    } else {
        $diskon = 0; // Tidak ada diskon
    }

    // Hitung total bayar
    $bayar = $total - $diskon;

    // Tampilkan hasil
    echo "<h3>Hasil Perhitungan</h3>";
    echo "Total Pembelian: Rp " . number_format($total, 0, ',', '.') . "<br>";
    echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
    echo "<b>Total Bayar: Rp " . number_format($bayar, 0, ',', '.') . "</b><br>";
}
?>

<!-- Form input data -->
<form method="post">
    <h3>Form Pembayaran</h3>
    Harga Satuan:<br>
    <input type="number" name="harga" required><br><br>

    Jumlah Barang:<br>
    <input type="number" name="jumlah" required><br><br>

    <label><input type="checkbox" name="member"> Member?</label><br><br>

    <input type="submit" name="submit" value="Hitung">
</form>
