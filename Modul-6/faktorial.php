<?php

function faktorial($bil)
{
    if ($bil == 0 || $bil == 1) {
        echo $bil . " = ";
        return 1;
    } else {
        echo $bil . " x ";
        return $bil * faktorial($bil - 1);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Tugas 1</title>
</head>

<body>
    <form action="" method="POST">
        <label for="angka">Masukkan bilangan : </label><input type="text" name="bilangan" id="angka">
        <input type="submit" value="hitung">
    </form>

    <?php
    if (isset($_POST['bilangan'])) {
        $bilangan = $_POST['bilangan'];
        echo $bilangan . "! : ";
        echo faktorial($bilangan);
    }
    ?>
</body>

</html>