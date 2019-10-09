<!DOCTYPE html>
<html>
<body>

<?php
//Deklarasi variabel di luar fungsi
$x = 5;
$y = 10;

function myTest() {// sebuah fungsi yang dirancang untuk melakukan tugas tertentu, yang berisi sebuah argumen mytest
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; /*menyimpan semua variabel global didalam array yg disebut $GLOBALS[index],
    index ini memegang nama variabel*/
} 

myTest(); //run fungsi
echo $y;// memanggil variabel baru dari y yang ada di dalam fungsi, ketika di run tidak akan muncul
?>

</body>
</html>