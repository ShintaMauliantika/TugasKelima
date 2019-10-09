<!DOCTYPE html>
<html>
<body>

<?php
// mengecek apakah variabel yang ada integer atau bukan   
$x = 5985;
var_dump(is_int($x)); //menampilkan hasil periksa

echo "<br>";

// memeriksa lagi apakah variabel tersebut integer atau bukan
$x = 59.85;
var_dump(is_int($x)); //menampilkan hasil periksa
?>  

</body>
</html>