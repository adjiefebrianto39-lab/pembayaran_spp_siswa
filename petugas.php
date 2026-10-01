<?php

include "koneksi.php";

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM petugas"
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Data Petugas</title>

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
                Data Petugas
            </h2>

            <p class="text-muted">
                Kelola data petugas sistem
            </p>

        </div>

        <div>

            <a href="dashboard.php"
               class="btn btn-secondary">
                Dashboard
            </a>

            <a href="tambah_petugas.php"
               class="btn btn-primary">
                + Tambah Petugas
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
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $no = 1;

                    while ($petugas = mysqli_fetch_assoc($data)) {

                    ?>

                    <tr>

                        <td><?= $no++; ?></td>

                        <td>
                            <?= $petugas['id_petugas']; ?>
                        </td>

                        <td>
                            <?= $petugas['username']; ?>
                        </td>

                        <td>
                            <?= $petugas['password']; ?>
                        </td>

                        <td>

                            <span class="badge bg-primary">

                                <?= $petugas['level']; ?>

                            </span>

                        </td>

                        <td>

                            <a
                                href="edit_petugas.php?id=<?= $petugas['id_petugas']; ?>"
                                class="btn btn-warning btn-sm"
                            >
                                Edit
                            </a>

                            <a
                                href="hapus_petugas.php?id=<?= $petugas['id_petugas']; ?>"
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