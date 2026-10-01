<?php

include "koneksi.php";

$data = mysqli_query($koneksi, "
    SELECT
        pembayaran.nisn,
        siswa.nama,
        siswa.no_telp,
        pembayaran.tgl_terakhir_bayar,
        CURDATE() AS tgl_sekarang,
        pembayaran.jumlah_bulan,
        pembayaran.status
    FROM pembayaran
    JOIN siswa
    ON pembayaran.nisn = siswa.nisn
");

?>

<!DOCTYPE html>
<html>

<head>

    <title>Cek Pembayaran</title>

</head>

<body>

<h2>Cek Pembayaran SPP</h2>

<a href="dashboard.php">Dashboard</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>

        <th>No</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>No Telp</th>
        <th>Tgl Terakhir Bayar</th>
        <th>Tgl Sekarang</th>
        <th>Jumlah Bulan</th>
        <th>Status Pembayaran</th>

    </tr>

    <?php

    $no = 1;

    while ($pembayaran = mysqli_fetch_assoc($data)) {

    ?>

    <tr>

        <td><?= $no++; ?></td>

        <td><?= $pembayaran['nisn']; ?></td>

        <td><?= $pembayaran['nama']; ?></td>

        <td><?= $pembayaran['no_telp']; ?></td>

        <td><?= $pembayaran['tgl_terakhir_bayar']; ?></td>

        <td><?= $pembayaran['tgl_sekarang']; ?></td>

        <td><?= $pembayaran['jumlah_bulan']; ?></td>

        <td><?= $pembayaran['status']; ?></td>

    </tr>

    <?php

    }

    ?>

</table>

</body>

</html>