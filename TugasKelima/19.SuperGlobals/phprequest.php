<!DOCTYPE html>
<html>
<body>

<!--membuat sebuah form-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
//REQUEST digunakan untuk mengumpulkan data setelah mengirimkan formulir HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mendapatkan nilai input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>