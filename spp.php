<?php

include "koneksi.php";

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM spp"
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Data SPP</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container py-4">

    <!-- Header -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold">
                Data SPP
            </h2>

            <p class="text-muted">
                Kelola tahun dan nominal pembayaran SPP
            </p>

        </div>

        <div>

            <a
                href="dashboard.php"
                class="btn btn-secondary"
            >
                Dashboard
            </a>

            <a
                href="tambah_spp.php"
                class="btn btn-primary"
            >
                + Tambah SPP
            </a>

        </div>

    </div>


    <!-- Tabel -->

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-primary">

                        <tr>

                            <th>No</th>

                            <th>ID SPP</th>

                            <th>Tahun</th>

                            <th>Nominal</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                    <?php

                    $no = 1;

                    while ($spp = mysqli_fetch_assoc($data)) {

                    ?>

                    <tr>

                        <td>
                            <?= $no++; ?>
                        </td>

                        <td>
                            <?= $spp['id_spp']; ?>
                        </td>

                        <td>
                            <?= $spp['tahun']; ?>
                        </td>

                        <td>

                            <strong>

                                Rp
                                <?= number_format(
                                    $spp['nominal'],
                                    0,
                                    ',',
                                    '.'
                                ); ?>

                            </strong>

                        </td>

                        <td>

                            <a
                                href="edit_spp.php?id=<?= $spp['id_spp']; ?>"
                                class="btn btn-warning btn-sm"
                            >
                                Edit
                            </a>

                            <a
                                href="hapus_spp.php?id=<?= $spp['id_spp']; ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')"
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