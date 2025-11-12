<?php
$k=mysqli_connect("localhost","root","","db_responsi_0210");
$id=$_GET['id'];
$r=mysqli_fetch_assoc(mysqli_query($k,"SELECT * FROM event WHERE id=$id"));
echo "<h3>Beli Tiket: ".$r['nama_event']."</h3>";
echo "<form action='proses.php' method='post'>
<input type='hidden' name='id' value='$id'>
Nama: <input name='nama'><br>
Email: <input name='email'><br>
Total Tiket: <input type='number' name='total_tiket' min='1' value='1'><br> <input type='submit' value='Beli'>
</form>";
?>