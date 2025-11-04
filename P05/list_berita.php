<?php
include "config.php";

echo "<h2>Daftar Berita</h2>";

$sql = "SELECT * FROM berita";
$query = mysqli_query($config, $sql);

if (!$query) {
    die("Query error: " . mysqli_error($config));
}

while ($row = mysqli_fetch_assoc($query)) {
    echo "<b>Judul:</b> " . htmlspecialchars($row['berita_judul']) . "<br>";
    echo "<b>Isi:</b> " . htmlspecialchars($row['berita_isi']) . "<br>";
    echo "<b>Tanggal:</b> " . $row['berita_tanggal'] . "<br>";
    echo "<b>Penulis:</b> " . htmlspecialchars($row['user_nama']) . "<hr>";
}
?>
