<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota"); //membuat sebuah variabel cars, yang berisi array
$arrlength = count($cars); //batas dari panjang array

for($x = 0; $x < $arrlength; $x++) {//perulangan dari variabel array, menggunakan nilai index
    echo $cars[$x]; //menampilkan hasil dari perulangan
    echo "<br>";
}
?>

</body>
</html>