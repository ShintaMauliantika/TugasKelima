<!DOCTYPE html>
<html>
<body>

<!--membauat form-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
//php post secara luas juga untuk mengumpulkan data setelah mengirimkan formulir HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mendapatkan nilai input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>