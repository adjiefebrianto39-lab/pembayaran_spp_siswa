<?php

include "koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM petugas");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Petugas</title>
</head>

<body>

<h2>Data Petugas</h2>

<a href="dashboard.php">Dashboard</a>

<br><br>

<a href="tambah_petugas.php">
    + Tambah Petugas
</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Username</th>
        <th>Nama</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>

    <?php

    $no = 1;

    while ($petugas = mysqli_fetch_assoc($data)) {

    ?>

    <tr>

        <td><?= $no++; ?></td>

        <td><?= $petugas['id_petugas']; ?></td>

        <td><?= $petugas['username']; ?></td>

        <td><?= $petugas['nama_petugas']; ?></td>

        <td><?= $petugas['level']; ?></td>

        <td>

            <a href="edit_petugas.php?id=<?= $petugas['id_petugas']; ?>">
                Edit
            </a>

            |

            <a href="hapus_petugas.php?id=<?= $petugas['id_petugas']; ?>">
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