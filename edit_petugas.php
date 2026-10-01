<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM petugas
     WHERE id_petugas='$id'"
);

$petugas = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $level = $_POST['level'];

    mysqli_query($koneksi, "
        UPDATE petugas
        SET username='$username',
            password='$password',
            nama_petugas='$nama',
            level='$level'
        WHERE id_petugas='$id'
    ");

    header("Location: petugas.php");

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Petugas</title>
</head>

<body>

<h2>Edit Petugas</h2>

<form method="POST">

    <p>Username</p>

    <input
        type="text"
        name="username"
        value="<?= $petugas['username']; ?>"
    >

    <p>Password</p>

    <input
        type="text"
        name="password"
        value="<?= $petugas['password']; ?>"
    >

    <p>Nama</p>

    <input
        type="text"
        name="nama"
        value="<?= $petugas['nama_petugas']; ?>"
    >

    <p>Level</p>

    <select name="level">

        <option value="admin"
            <?= $petugas['level'] == 'admin' ? 'selected' : ''; ?>>
            Admin
        </option>

        <option value="petugas"
            <?= $petugas['level'] == 'petugas' ? 'selected' : ''; ?>>
            Petugas
        </option>

        <option value="siswa"
            <?= $petugas['level'] == 'siswa' ? 'selected' : ''; ?>>
            Siswa
        </option>

    </select>

    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>

<br>

<a href="petugas.php">Kembali</a>

</body>

</html>