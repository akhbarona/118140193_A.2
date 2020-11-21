<?php

function hitung_harga($nama, $warna = "red")
{
    $panjangnama = strlen($nama);
    if ($panjangnama > 0 && $panjangnama <= 10) {
        $harga = 300;
        $total = $panjangnama * $harga;
        cetak($total, $nama, $warna);
    } elseif ($panjangnama >= 11 && $panjangnama <= 20) {
        $harga = 500;
        $total = $panjangnama * $harga;
        cetak($total, $nama, $warna);
    } elseif ($panjangnama > 20) {
        $harga = 700;
        $total = $panjangnama * $harga;
        cetak($total, $nama, $warna);
    }
}

function cetak($total, $nama, $warna)
{
    echo "Nama bet = " . $nama . "<br>" .
        "Harga bet = " . "Rp. " . $total . "<br>" .
        "Warna font = " . $warna;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas Nomor 2</title>
</head>

<body>
    <h3>Menghitung harga bet</h3>
    <form action="" method="POST">
        <label for="name">Nama : </label><input type="text" name="nama" id="name" required><br>
        <label for="color">Warna font : </label><input type="text" name="warna" id="color" required><br>
        <input type="submit" name="submit" value="hitung">
    </form><br>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $warna = $_POST['warna'];
        hitung_harga($nama, $warna);
    }
    ?>
</body>

</html>