<?php
$k=mysqli_connect("localhost","root","","db_responsi_0210");
$id=$_POST['id'];
$n=$_POST['nama'];
$e=$_POST['email'];
$q=mysqli_fetch_assoc(mysqli_query($k,"SELECT kuota FROM event WHERE id=$id"));
if($q['kuota']>0){
  mysqli_query($k,"UPDATE event SET kuota=kuota-1 WHERE id=$id");
  $kode="TIX-".rand(1000,9999);
  mysqli_query($k,"INSERT INTO pembelian(event_id,nama_pembeli,email_pembeli,kode_tiket)
  VALUES($id,'$n','$e','$kode')");
  echo "Sukses! Kode Tiket: <b>$kode</b><br><a href='index.php'>Kembali</a>";
}else{
  echo "Tiket habis! <a href='index.php'>Kembali</a>";
}
?>
