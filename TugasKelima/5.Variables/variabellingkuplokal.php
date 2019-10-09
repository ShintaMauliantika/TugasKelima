<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
    $x = 5; // deklarasi variabel berada di lingkup lokal fungsi
    echo "<p>Variable x inside function is: $x</p>"; /*memanggil variabel didalam fungsi, variabel akan
   muncul ketika di run */
} 
myTest(); //run fungsi

// memanggil variabel di luar fungsi akan error atau variabel tidak muncul ketika di run
echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>