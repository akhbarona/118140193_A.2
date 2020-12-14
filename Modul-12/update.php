<?php

include 'koneksi.php';
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];
$kode = $_POST["kode"];

$sql = "Update mahasiswa SET nim ='$nim', nama = '$nama', prodi ='$prodi',angkatan='$angkatan' WHERE nim = '$kode'";
$hasil = mysqli_query($kon, $sql);
