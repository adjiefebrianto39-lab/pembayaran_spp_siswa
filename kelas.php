<?php

include "koneksi.php";

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM kelas"
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Data Kelas</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold">
                Data Kelas
            </h2>

            <p class="text-muted">
                Kelola data kelas siswa
            </p>

        </div>

        <div>

            <a href="dashboard.php"
               class="btn btn-secondary">
                Dashboard
            </a>

            <a href="tambah_kelas.php"
               class="btn btn-primary">
                + Tambah Kelas
            </a>

        </div>

    </div>


    <div class="card shadow-sm border-0">

        <div class="card-body">

            <table class="table table-hover">

                <thead class="table-primary">

                    <tr>

                        <th>No</th>
                        <th>ID Kelas</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                <?php

                $no = 1;

                while ($kelas = mysqli_fetch_assoc($data)) {

                ?>

                <tr>

                    <td><?= $no++; ?></td>

                    <td>
                        <?= $kelas['id_kelas']; ?>
                    </td>

                    <td>
                        <?= $kelas['nama_kelas']; ?>
                    </td>

                    <td>

                        <a
                            href="edit_kelas.php?id=<?= $kelas['id_kelas']; ?>"
                            class="btn btn-warning btn-sm"
                        >
                            Edit
                        </a>

                        <a
                            href="hapus_kelas.php?id=<?= $kelas['id_kelas']; ?>"
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

</body>

</html>