<?php

include "koneksi.php";

$nisn = $_GET['nisn'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM siswa WHERE nisn='$nisn'"
);

$siswa = mysqli_fetch_assoc($data);


if (isset($_POST['update'])) {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_spp = $_POST['id_spp'];


    mysqli_query($koneksi, "

        UPDATE siswa SET

        nis='$nis',
        nama='$nama',
        id_kelas='$id_kelas',
        nama_kelas='$nama_kelas',
        alamat='$alamat',
        no_telp='$no_telp',
        id_spp='$id_spp'

        WHERE nisn='$nisn'

    ");


    header("Location: siswa.php");

    exit;

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Siswa</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>


<body class="bg-light">


<div class="container py-5">


    <div class="col-md-8 mx-auto">


        <div class="card shadow border-0">


            <div class="card-body p-4">


                <h3 class="fw-bold mb-1">
                    Edit Data Siswa
                </h3>

                <p class="text-muted mb-4">
                    Ubah informasi data siswa
                </p>


                <form method="POST">


                    <div class="row">


                        <!-- NISN -->

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                NISN
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                value="<?= $siswa['nisn']; ?>"
                                disabled
                            >

                        </div>


                        <!-- NIS -->

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                NIS
                            </label>

                            <input
                                type="text"
                                name="nis"
                                class="form-control"
                                value="<?= $siswa['nis']; ?>"
                                required
                            >

                        </div>


                        <!-- Nama -->

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Nama Siswa
                            </label>

                            <input
                                type="text"
                                name="nama"
                                class="form-control"
                                value="<?= $siswa['nama']; ?>"
                                required
                            >

                        </div>


                        <!-- ID Kelas -->

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                ID Kelas
                            </label>

                            <input
                                type="number"
                                name="id_kelas"
                                class="form-control"
                                value="<?= $siswa['id_kelas']; ?>"
                                required
                            >

                        </div>


                        <!-- Nama Kelas -->

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Nama Kelas
                            </label>

                            <input
                                type="text"
                                name="nama_kelas"
                                class="form-control"
                                value="<?= $siswa['nama_kelas']; ?>"
                                required
                            >

                        </div>


                        <!-- No Telp -->

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                No. Telepon
                            </label>

                            <input
                                type="text"
                                name="no_telp"
                                class="form-control"
                                value="<?= $siswa['no_telp']; ?>"
                                required
                            >

                        </div>


                        <!-- Alamat -->

                        <div class="col-md-12 mb-3">

                            <label class="form-label">
                                Alamat
                            </label>

                            <textarea
                                name="alamat"
                                class="form-control"
                                rows="3"
                                required
                            ><?= $siswa['alamat']; ?></textarea>

                        </div>


                        <!-- ID SPP -->

                        <div class="col-md-6 mb-4">

                            <label class="form-label">
                                ID SPP
                            </label>

                            <input
                                type="number"
                                name="id_spp"
                                class="form-control"
                                value="<?= $siswa['id_spp']; ?>"
                                required
                            >

                        </div>


                    </div>


                    <hr>


                    <button
                        type="submit"
                        name="update"
                        class="btn btn-primary"
                    >
                        Update Data
                    </button>


                    <a
                        href="siswa.php"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>


                </form>


            </div>

        </div>


    </div>

</div>


</body>

</html>