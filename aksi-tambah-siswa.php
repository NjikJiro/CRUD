<?php

include "config/koneksi.php";

$nisn = $_POST['nisn'];
$nama = $_POST['nama_siswa'];
$jurusan = $_POST['jurusan'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO siswa_muda (nisn, nama_siswa, jurusan, jenis_kelamin, alamat)
VALUES ('$nisn', '$nama', '$jurusan', '$jk', '$alamat')";

if ($connection->query($query)) {
    header("location: tambah-siswa.php");
} else {
    echo "Gagal";
}
