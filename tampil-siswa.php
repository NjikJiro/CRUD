<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<style>
    .badge {
        text-decoration: none;
    }
</style>

<body style="background-color: #f5f5f5;">
    <!-- Navbar -->
    <?php include "template/navbar.php"; ?>
    <!-- Navbar End -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 my-3">

                <div class="card mt-3">
                    <div class="card-header">Data Siswa</div>
                    <div class="card-body">
                        <h5 class="card-title">Data Siswa SMK MUDA</h5>
                        <a href="tambah-siswa.php" class="btn btn-primary my-3">Tambah Data Siswa</a>

                        <!-- Table Data -->
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jurusan</th>
                                    <th>Gender</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('config/koneksi.php');
                                $no = 1;
                                $query = "SELECT * FROM siswa_muda";
                                $conn = mysqli_query($connection, $query);
                                while ($data = mysqli_fetch_array($conn)) {
                                ?>

                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data['nisn']; ?></td>
                                        <td><?php echo $data['nama_siswa']; ?></td>
                                        <td><?php echo $data['jurusan']; ?></td>
                                        <td><?php echo $data['jenis_kelamin']; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td>
                                            <a href="edit-siswa.php?id=<?php echo $data['nisn'] ?>" class="badge text-bg-success">Edit</a>
                                            <a href="aksi-hapus-siswa.php?id=<?php echo $data['nisn'] ?>" class="badge text-bg-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ini?');">Hapus</a>
                                        </td>
                                    </tr>

                                <?php
                                    $no++;
                                } ?>
                            </tbody>
                        </table>
                        <!-- End Table Data -->
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>