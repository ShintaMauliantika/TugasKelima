<?php declare(strict_types=1); // declare strict ?>
<!DOCTYPE html>
<html>
<body>

<?php
function setHeight(int $minheight = 50) { //mengatur fungsi tinggi
    echo "The height is : $minheight <br>"; //menampilkan fungsi
}

//memanggil fungsi
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

</body>
</html>