<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "red"; //membuat variabel favcolor yang berisi red

//memilih menampilkan teks yang benar ketika memanggil variabel yang telah dibuat
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>