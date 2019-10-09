<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float { //menggunakan jenis float
    return $a + $b;
}
echo addNumbers(1.2, 5.2); 
?>


<h1>jenis yang berbeda<h1>

<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int { //menggunakan jenis int
    return (int)($a + $b); //pastikan kembalian menggunakan jenis yang sama
}
echo addNumbers(1.2, 5.2); 
?>