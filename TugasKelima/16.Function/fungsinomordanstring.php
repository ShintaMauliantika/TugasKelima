<?php
//menambahkan nomor di dalam fungsi
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days"); 
// strict tidak diaktifkan jadi yang muncul adalah 10
?>


<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days"); 
// strict di aktifkan maka akan error
?>