<!DOCTYPE html>
<html>

<head>
    <title>Analisis</title>
</head>

<body>
    <h2>Perbedaan mysqli_fetch_array(),
        mysqli_fetch_assoc(),
        dan
        mysqli_fetch_row()</h2>
    <hr>
    <h3>mysqli_fetch_array()</h3>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "") or die("koneksi gagal");
    mysqli_select_db($koneksi, "mahasiswa");
    $hasil = mysqli_query($koneksi, "select * from informatika");
    while ($row = mysqli_fetch_array($hasil)) {
        print_r($row);
    }
    ?>
    <p><em>mysqli_fetch_array()</em> digunakan untuk meghasilkan data array dalam bentuk
        associative array (menampilkan nama key/index yang telah ditentukan) dan numeric array (menampilkan nama key/index berupa angka dari index array).</p>
    <hr>
    <h3>mysqli_fetch_row()</h3>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "") or die("koneksi gagal");
    mysqli_select_db($koneksi, "mahasiswa");
    $hasil = mysqli_query($koneksi, "select * from informatika");
    while ($row = mysqli_fetch_row($hasil)) {
        print_r($row);
    }
    ?>
    <p><em>mysqli_fetch_row()</em> menghasilkan data array dalam bentuk numeric array artinya berupa key angka yang telah ditentukan otomatis dari index array itu sendiri.</p>
    <hr>
    <h3>mysqli_fetch_assoc()</h3>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "") or die("koneksi gagal");
    mysqli_select_db($koneksi, "mahasiswa");
    $hasil = mysqli_query($koneksi, "select * from informatika");
    while ($row = mysqli_fetch_assoc($hasil)) {
        print_r($row);
    }
    ?>
    <p><em>mysqli_fetch_assoc()</em> berguna untuk menghasilkan data array dalam bentuk associative array (menampilkan nama key array yang telah ditentukan sebelumya).</p>
</body>

</html>