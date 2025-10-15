<!DOCTYPE html>
<html>
<head>
    <title>Struktur pengulangan dengan do..while</title>
</head>
<body>
<?php
    $i = 1;
    do
    {
        echo "ini juga pengulangan yang ke - $i<br>";
        $i++;
    }
    while ($i <=8);

    /*--------------------------------------------------*/
    echo"<br>";
    echo"<hr>";
    /*--------------------------------------------------*/
    $j = 5;
    do
    {
        echo "<br>Perulangan ini kondisinya tidak terpenuhi<br>";
        $j++;
    }

    while ($j <=3);
?>
</body>
</html>