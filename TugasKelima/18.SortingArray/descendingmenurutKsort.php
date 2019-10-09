<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);//mengurutkan nilai yang ada di dalam variabel number dari yang terbesar ke terkecil

//perulangan variabel yang sudah diurutkan
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value; //menampilkan hasil dari urutan nilai variabel
    echo "<br>";
}
?>

</body>
</html>