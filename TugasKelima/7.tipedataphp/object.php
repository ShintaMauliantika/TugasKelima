<!DOCTYPE html>
<html>
<body>

<?php
class Car { //fungsi class adalah struktur yang berisi properti  dan metode
    function Car() {
        $this->model = "VW";
    }
}
// membuat objek
$herbie = new Car();

// menampilkan objek properti
echo $herbie->model;
?>

</body>
</html>