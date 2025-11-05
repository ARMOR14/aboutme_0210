<!-- Nama: Ambara Arung Kamora - NIM: 24.62.0210 - 24 BCIS 01 -->
 
<?php
    include "config.php";
    $user = $_GET['user_nama']; 

    $sql = "DELETE FROM user WHERE user_nama='$user'";
    $hasil = mysqli_query($config, $sql);

    echo "<script> alert ('Data user Berhasil Dihapus.')</script>";
    header("location:halamanuser.php");
?>
