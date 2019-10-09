<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");//membuat variabel dengan format jam

if ($t < "20") {//jika variabel jam kurang dari 20
    echo "Have a good day!";//maka akan muncul teks di samping ini
} else { //jika tidak kurang dari 20
    echo "Have a good night!";//maka akan muncul teks di samping ini
}
?>
 
</body>
</html>