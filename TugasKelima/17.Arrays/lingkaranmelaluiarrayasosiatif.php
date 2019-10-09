<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //membuat variabel age, yang didalamnya terdapat urutan umur

//perulangan memanggil index array yang ada di dalam variabel
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value; //menampilkan hasil dari panggilan perulangan
    echo "<br>"; //menampilkan hasil enter
}
?>

</body>
</html>