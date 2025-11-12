<?php
$k=mysqli_connect("localhost","root","","db_responsi_0210");
$d=mysqli_query($k,"SELECT * FROM event");
echo "<h2>Event Tersedia</h2>";
while($r=mysqli_fetch_assoc($d)){
  echo $r['nama_event']." (Rp ".$r['harga'].") - Kuota: ".$r['kuota']." ";
  if($r['kuota']>0)
    echo "<a href='beli.php?id=".$r['id']."'>[Beli]</a>";
  else
    echo "[Habis]";
  echo "<br>";
}
?>
