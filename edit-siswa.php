<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<?php include "config/koneksi.php";

// Inisialisasi variabel untuk tangkap nisn menggunakan method get
$nisn = $_GET['id'];

// Query untuk ambil data siswa sesuai nisn
$query = "SELECT * FROM siswa_muda WHERE nisn='$nisn'";
$conn = mysqli_query($connection, $query);
$data = mysqli_fetch_array($conn);
?>

<body style="background-color: #f5f5f5;">
    <!-- Navbar -->
    <?php include "template/navbar.php"; ?>
    <!-- Navbar End -->

    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12 my-3">
                <div class="card mt-3">
                    <div class="card-header">
                        Edit Data Siswa
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Data Siswa SMK MUDA</h5>
                        <p class="card-text">Isi data siswa dengan benar</p>

                        <!-- Form Tambah Siswa -->
                        <form action="aksi-edit-siswa.php" method="post">
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="text" name="nisn" class="form-control" value="<?= $data['nisn']; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                <input type="text" name="nama_siswa" class="form-control" value="<?= $data['nama_siswa']; ?>">
                            </div>
                            <div class=" mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" value="<?= $data['jurusan']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin (L/P)</label>
                                <input type="text" name="jenis_kelamin" class="form-control" value="<?= $data['jenis_kelamin']; ?>">
                            </div>
                            <div class=" mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $data['alamat']; ?>">
                            </div>
                            <div class=" mb-3">
                                <input type="submit" value="Update Data" class="btn btn-primary">
                            </div>
                        </form>
                        <!--  End Form Tambah Siswa -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

</body>

</html>