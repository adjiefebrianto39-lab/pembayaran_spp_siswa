<?php

include "koneksi.php";

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM siswa"
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Data Siswa</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold">
                Data Siswa
            </h2>

            <p class="text-muted">
                Kelola data siswa sekolah
            </p>

        </div>

        <div>

            <a href="dashboard.php"
               class="btn btn-secondary">
                Dashboard
            </a>

            <a href="tambah_siswa.php"
               class="btn btn-primary">
                + Tambah Siswa
            </a>

        </div>

    </div>


    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-primary">

                        <tr>

                            <th>No</th>
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>ID SPP</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $no = 1;

                    while ($siswa = mysqli_fetch_assoc($data)) {

                    ?>

                    <tr>

                        <td><?= $no++; ?></td>

                        <td><?= $siswa['nisn']; ?></td>

                        <td><?= $siswa['nis']; ?></td>

                        <td><?= $siswa['nama']; ?></td>

                        <td>

                            <span class="badge bg-info text-dark">

                                <?= $siswa['nama_kelas']; ?>

                            </span>

                        </td>

                        <td><?= $siswa['alamat']; ?></td>

                        <td><?= $siswa['no_telp']; ?></td>

                        <td><?= $siswa['id_spp']; ?></td>

                        <td>

                            <a
                                href="edit_siswa.php?nisn=<?= $siswa['nisn']; ?>"
                                class="btn btn-warning btn-sm"
                            >
                                Edit
                            </a>

                            <a
                                href="hapus_siswa.php?nisn=<?= $siswa['nisn']; ?>"
                                class="btn btn-danger btn-sm"
                            >
                                Hapus
                            </a>

                        </td>

                    </tr>

                    <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>

</html>