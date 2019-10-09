<!DOCTYPE html>
<html>
<body>

<?php
//deklarasi variabel di luar fungsi
$x = 5;
$y = 10;

function myTest() { // sebuah fungsi yang dirancang untuk melakukan tugas tertentu, yang berisi sebuah argumen mytest
    global $x, $y; //memanggil katakunci global dari deklarasi
    $y = $x + $y; /*membuat variabel baru y dengan menjumlahkan variabel x dan y, 
    ketika di run akan muncul. karena sudah memanggil kata kunci*/
} 

myTest();  // run fungsi
echo $y; // memanggil variabel baru dari y yang ada di dalam fungsi, ketika di run tidak akan muncul
?>

</body>
</html>