<!DOCTYPE html>
<html>

<head>
    <title>Tugas 1</title>
</head>

<body>
    <b>DATA MAHASISWA PENS</b><br>
    ================================<br>
    <b>TAMBAH DATA</b><br><br>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="NRP"><b>NRP : </b></label><input type="number" name="NRP" id="NRP"><br>
        <label for="Nama"><b>Nama : </b></label><input type="text" name="Nama" id="Nama"><br>
        <label for="Alamat"><b>Alamat : </b></label><input type="text" name="Alamat" id="Alamat"><br>
        <label for="Jurusan"><b>Jurusan : </b></label><select name="Jurusan" id="Jurusan">
            <option value='IF1234'>Telekomunikasi</option>
            <option value='1235'>Elka</option>
            <option value='1236'>IT</option>
            <option value='1237'>Elin</option>
        </select><br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
    <br>
    <?php

    ?>
    <form method="POST" action="" Henctype="multipart/form-data">
        ================================<br>
        <b>SEARCH DATA</b><br><br>
        <b>Nama</b> : <input type="text" name="cari">
        <input type="submit" name="search" value="Cari Data"><br><br>
    </form>
    <form method="POST" action="" Henctype="multipart/form-data">
        ================================<br>
        <b>DELETE DATA</b><br><br>
        <b>NRP</b> : <input type="text" name="delete">
        <input type="submit" value="Hapus"><br><br>
        ================================<br>
    </form>
    <br>
    <table border="1">
        <!-- awal program  -->
        <?php
        //TAMBAH DATA MAHASISWA
        include 'koneksi.php';
        if (isset($_POST['tambah'])) {
            $siswa->tambah_mahasiswa($_POST);
            if (mysqli_affected_rows($mysqli) > 0) {
                echo "<script>alert('Data Tersimpan');</script>";
            } else {
                echo "<script>alert('Data gagal tersimpan');</script>";
            }
            echo  "<script>location='tampilsiswa.php';</script>";
        }
        //DELETE DATA MAHASISWA BERDASARKAN NRP
        if (isset($_POST['delete'])) {
            $delete = $_POST['delete'];
            $siswa->delete_mahasiswa($delete);
            if (mysqli_affected_rows($mysqli) > 0) {
                echo "<script>alert('Data Terhapus');</script>";
            } else {
                echo "<script>alert('Data yang dihapus tidak ada');</script>";
            }
            echo  "<script>location='tampilsiswa.php';</script>";
        }
        //CARI MAHASISWA BERDASARKAN NAMA
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $datasiswa = $siswa->cari_mahasiswa($cari);

        ?>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datasiswa as $key => $value) {
                ?>
                    <tr>
                        <td><?= $key += 1; ?></td>
                        <td><?= $value['NRP']; ?></td>
                        <td><?= $value['Nama']; ?></td>
                        <td><?= $value['Alamat']; ?></td>
                        <td><?= $value['Nama_Jur']; ?></td>
                    </tr>
            <?php }
            } ?>
            <!-- akhir program -->
            </tbody>
    </table>
</body>

</html>