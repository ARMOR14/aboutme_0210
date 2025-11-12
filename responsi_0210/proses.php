<?php
$k=mysqli_connect("localhost","root","","db_responsi_0210");
$id=$_POST['id'];
$n=$_POST['nama'];
$e=$_POST['email'];
$t=$_POST['total_tiket']; 
$t = (int)$t;
if ($t <= 0) {
    echo "Jumlah tiket tidak valid! <a href='index.php'>Kembali</a>";
    exit;
}
$q=mysqli_fetch_assoc(mysqli_query($k,"SELECT kuota FROM event WHERE id=$id"));
if($q['kuota'] >= $t){
  mysqli_query($k,"UPDATE event SET kuota=kuota-$t WHERE id=$id");
  $kode="TIX-".rand(1000,9999);
  mysqli_query($k,"INSERT INTO pembelian(event_id,nama_pembeli,email_pembeli,kode_tiket,total_tiket)
  VALUES($id,'$n','$e','$kode',$t)");
  
  echo "Sukses! Anda membeli $t tiket. Kode Tiket: <b>$kode</b><br><a href='index.php'>Kembali</a>";
}else{
  echo "Tiket tidak cukup! Kuota tersisa hanya ".$q['kuota']." tiket. <a href='index.php'>Kembali</a>";
}
?>