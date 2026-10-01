<?php

include "koneksi.php";

$data = mysqli_query($koneksi, "

    SELECT
        pembayaran.nisn,
        siswa.nama,
        siswa.no_telp,
        pembayaran.tgl_terakhir_bayar,
        pembayaran.jumlah_bulan,
        pembayaran.status

    FROM pembayaran

    JOIN siswa
    ON pembayaran.nisn = siswa.nisn

");

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Cek Pembayaran</title>

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
                Cek Pembayaran
            </h2>

            <p class="text-muted">
                Informasi pembayaran siswa
            </p>

        </div>

        <a
            href="dashboard.php"
            class="btn btn-secondary"
        >
            Dashboard
        </a>

    </div>


    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-primary">

                        <tr>

                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Tgl Terakhir Bayar</th>
                            <th>Tgl Sekarang</th>
                            <th>Jumlah Bulan</th>
                            <th>Status</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $no = 1;

                    while ($pembayaran =
                        mysqli_fetch_assoc($data)) {

                    ?>

                    <tr>

                        <td><?= $no++; ?></td>

                        <td>
                            <?= $pembayaran['nisn']; ?>
                        </td>

                        <td>
                            <?= $pembayaran['nama']; ?>
                        </td>

                        <td>
                            <?= $pembayaran['no_telp']; ?>
                        </td>

                        <td>
                            <?= $pembayaran['tgl_terakhir_bayar']; ?>
                        </td>

                        <td>
                            <?= date('Y-m-d'); ?>
                        </td>

                        <td>
                            <?= $pembayaran['jumlah_bulan']; ?>
                            bulan
                        </td>

                        <td>

                            <?php

                            if (
                                $pembayaran['status']
                                == 'sudah lunas'
                            ) {

                            ?>

                                <span class="badge bg-success">
                                    Sudah Lunas
                                </span>

                            <?php

                            } else {

                            ?>

                                <span class="badge bg-danger">
                                    Belum Lunas
                                </span>

                            <?php

                            }

                            ?>

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