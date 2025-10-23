<?php
// Define the array first (this is the missing part)
$kategoribuku = array("Novel", "Comic", "Encyclopedia", "Biography", "Magazine");

// Display title
echo "<strong>Book Categories:</strong><br>";

// Loop through array elements
for ($i = 0; $i < sizeof($kategoribuku); $i++) {
    echo "Book Name $i : " . $kategoribuku[$i] . "<br>";
}
?>
