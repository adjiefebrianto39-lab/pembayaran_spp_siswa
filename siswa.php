<?php

include "koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
</head>

<body>

<h2>DATA SISWA</h2>

<a href="dashboard.php">Dashboard</a>

<br><br>

<a href="tambah_siswa.php">
    + Tambah Siswa
</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>ID Kelas</th>
        <th>Nama Kelas</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>ID SPP</th>
        <th>Aksi</th>
    </tr>

    <?php

    $no = 1;

    while ($siswa = mysqli_fetch_assoc($data)) {

    ?>

    <tr>

        <td><?= $no++; ?></td>

        <td><?= $siswa['nisn']; ?></td>

        <td><?= $siswa['nis']; ?></td>

        <td><?= $siswa['nama']; ?></td>

        <td><?= $siswa['id_kelas']; ?></td>

        <td><?= $siswa['nama_kelas']; ?></td>

        <td><?= $siswa['alamat']; ?></td>

        <td><?= $siswa['no_telp']; ?></td>

        <td><?= $siswa['id_spp']; ?></td>

        <td>

            <a href="edit_siswa.php?nisn=<?= $siswa['nisn']; ?>">
                Edit
            </a>

            |

            <a href="hapus_siswa.php?nisn=<?= $siswa['nisn']; ?>">
                Hapus
            </a>

        </td>

    </tr>

    <?php

    }

    ?>

</table>

</body>

</html>