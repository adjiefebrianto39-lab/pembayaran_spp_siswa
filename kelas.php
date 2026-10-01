<?php

include "koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM kelas");

?>

<!DOCTYPE html>
<html>

<head>

    <title>Data Kelas</title>

</head>

<body>

<h2>Data Kelas</h2>

<a href="dashboard.php">Dashboard</a>

<br><br>

<a href="tambah_kelas.php">
    + Tambah Kelas
</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>

        <th>No</th>
        <th>Nama Kelas</th>
        <th>Aksi</th>

    </tr>

    <?php

    $no = 1;

    while ($kelas = mysqli_fetch_assoc($data)) {

    ?>

    <tr>

        <td>
            <?= $no++; ?>
        </td>

        <td>
            <?= $kelas['nama_kelas']; ?>
        </td>

        <td>

            <a href="edit_kelas.php?id=<?= $kelas['id_kelas']; ?>">
                Edit
            </a>

            |

            <a href="hapus_kelas.php?id=<?= $kelas['id_kelas']; ?>">
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