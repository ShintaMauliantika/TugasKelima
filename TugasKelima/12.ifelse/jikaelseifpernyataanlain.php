<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H"); //membuat variabel jam
echo "<p>The hour (of the server) is " . $t; //menampilkan teks yang ditambah dengan variabel
echo ", and will give the following message:</p>";//menampilkan teks

if ($t < "10") { //jika variabel jam kurang dari 10
    echo "Have a good morning!";// maka akan muncul teks disamping ini
} elseif ($t < "20") { //jika variabel jam kurang dari 20
    echo "Have a good day!"; //maka akan muncul teks disamping ini
} else { // jika tidak kurang dari variabel jam
    echo "Have a good night!";// maka akan muncul teks disamping ini
}
?>
 
</body>
</html>