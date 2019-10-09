<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(4, 6, 2, 22, 11);//membuat variabel number yang berisi angka acak
rsort($numbers);//mengurutkan nilai yang ada di dalam variabel number dari yang terbesar ke terkecil

$arrlength = count($numbers);
//perulangan variabel
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];//menampilkan hasil dari isi variabel yang telah diurutkan
    echo "<br>";
}
?>

</body>
</html>