<?php

include "config/koneksi.php";

$nisn = $_POST['nisn'];
$nama = $_POST['nama_siswa'];
$jurusan = $_POST['jurusan'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "UPDATE siswa_muda SET
                nama_siswa = '$nama',
                jurusan = '$jurusan',
                jenis_kelamin = '$jk',
                alamat = '$alamat'
          WHERE nisn = '$nisn'";

if ($connection->query($query)) {
    echo "<script>
            alert('Data berhasil diupdate!');
            window.location = 'tampil-siswa.php';
          </script>";
} else {
    echo "Gagal";
}
