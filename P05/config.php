<?php

$config = mysqli_connect("localhost", "root", "", "dataweb0210");

if (!$config) {
  
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
