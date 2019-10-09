<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

<?php
function sum(int $x, int $y) {
    $z = $x + $y; //membuat integer baru dengan menambahkan integer yang lama
    return $z; //mengembalikan nilai
}

//memanggil dan menampilkan fungsi
echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>

</body>
</html>