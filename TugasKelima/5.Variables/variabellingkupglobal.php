<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // variabel yang di deklarasikan diluar fungsi
 
function myTest() { // sebuah fungsi yang dirancang untuk melakukan tugas tertentu, yang berisi sebuah argumen mytest
    echo "<p>Variable x inside function is: $x</p>"; /*memanggil variabel didalam fungsi, variabel
    tidak muncul ketika di run */
} 
myTest(); //run fungsi

echo "<p>Variable x outside function is: $x</p>"; /*memanggil variabel di luar fungsi, variabel 
akan muncul ketika dirun*/
?>

</body>
</html>