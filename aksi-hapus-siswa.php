<?php

include "config/koneksi.php";

$nisn = $_GET['id'];

$query = "DELETE FROM siswa_muda WHERE nisn =$nisn";


if ($connection->query($query)) {
    echo "<script>
            alert('Data berhasil dihapus!');
            window.location = 'tampil-siswa.php';
          </script>";
} else {
    echo "Gagal";
}
