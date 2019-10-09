<!DOCTYPE html>
<html>
<body>

<?php
function myTest() { // sebuah fungsi yang dirancang untuk melakukan tugas tertentu, yang berisi sebuah argumen mytest
    static $x = 0; //fungsi static untuk mendeklarasikan variabel pertama kali
    echo $x; //menampilkan variabel
    $x++; //nilai variabel di tambah 1
}

myTest(); //run fungsi
echo "<br>"; //menampilkan teks, fungsi br untuk enter
myTest(); //run fungsi
echo "<br>"; //menampilkan teks, fungsi br untuk enter
myTest(); //run fungsi
?> 

</body>
</html>