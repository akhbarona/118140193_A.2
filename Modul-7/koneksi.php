<?php
$mysqli = new mysqli("localhost", "root", "", "universitas");

class siswa
{
    public $koneksi;
    function __construct($mysqli)
    {
        $this->koneksi = $mysqli;
    }
    function tambah_mahasiswa($data)
    {
        $NRP =  $data['NRP'];
        $Nama = $data['Nama'];
        $Alamat = $data['Alamat'];
        $Jurusan = $data['Jurusan'];
        $this->koneksi->query("insert into mahasiswa (NRP,Nama,Alamat,ID_Jur) values ('$NRP','$Nama','$Alamat','$Jurusan') ");
    }
    function cari_mahasiswa($caridata)
    {
        $ambildata =  $this->koneksi->query("select mahasiswa.NRP, mahasiswa.Nama, mahasiswa.Alamat, jurusan.Nama_Jur from mahasiswa join jurusan using(ID_Jur) where Nama like '%$caridata%' ");
        while ($isi = $ambildata->fetch_assoc()) {
            $data[] = $isi;
        }
        return $data;
    }
    function delete_mahasiswa($delete)
    {
        $this->koneksi->query("delete from mahasiswa where NRP='$delete'");
    }
}
$siswa = new siswa($mysqli);
