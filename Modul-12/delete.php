<?php
include 'koneksi.php';
    $nim    = $_POST['nim'];
    $sql = "delete from mahasiswa where nim='$nim'";
    $hasil = mysqli_query($kon, $sql);
