<!DOCTYPE html>
<html>
<body>

<?php
$color = "red"; //sebuah variabel color berisi "red"
/*dibawah ini pemanggilan variabel hanya pada pernyataan pertama yang terbaca karena besar kecilnya huruf
pada variabel yang dipanggil sama, jika huruf besar kecilnya variabel yang dipanggil tidak sama maka tidak akan terbaca 
ketika dirun*/
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>