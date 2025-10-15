<!DOCTYPE html>
<html>
<head>
    <title>Nilai</title>
</head>
<body>
<?php
echo "
<form method='POST' action=''>
    <center>
        <h2>Menghitung Nilai Huruf</h2>
        Masukan Nilai Anda (10-100): 
        <input type='text' name='nilai'>
        <input type='submit' name='hitung' value='Kirim'>
    </center>
</form>
";

if(isset($_POST['hitung']))
{
    $nilai = $_POST['nilai'];

    if($nilai >= 90){
        echo "<center>Nilai $nilai Sangat Bagus</center>";
    }
    elseif($nilai >= 80){
        echo "<center>Nilai $nilai Bagus</center>";
    }
    elseif($nilai >= 65){
        echo "<center>Nilai $nilai Cukup</center>";
    }
    elseif($nilai >= 50){
        echo "<center>Nilai $nilai Kurang</center>";
    }
    else{
        echo "<center>Nilai $nilai Kurang Sekali</center>";
    }
}
?>
</body>
</html>
