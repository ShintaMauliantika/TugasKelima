<!DOCTYPE html>
<html>
<body>

<?php 
//membuat variabel di diluar fungsi
$x = 75;
$y = 25; 

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; //fungsi globals mengakses variabel dari mana saja
}

//memanggi; fungsi, dan menampilkan hasil dari penjumlahan variabel
addition();
echo $z;
?>

</body>
</html>