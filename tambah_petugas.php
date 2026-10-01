<?php

include "koneksi.php";

if (isset($_POST['simpan'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama_petugas'];
    $level = $_POST['level'];

    mysqli_query(
        $koneksi, 
        " INSERT INTO petugas (username, password, nama_petugas, level)
        VALUES ('$username', '$password', '$nama', '$level')"
    );

    header("Location: petugas.php");

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Petugas</title>
</head>

<body>

<h2>Tambah Petugas</h2>

<form method="POST">

    <p>Username</p>
    <input type="text" name="username">

    <p>Password</p>
    <input type="password" name="password">

    <p>Nama</p>
    <input type="text" name="nama_petugas">

    <p>Level</p>

    <select name="level">

        <option value="admin">Admin</option>

        <option value="petugas">Petugas</option>

        <option value="siswa">Siswa</option>

    </select>

    <br><br>

    <button type="submit" name="simpan">
        Simpan
    </button>

</form>

<br>

<a href="petugas.php">Kembali</a>

</body>

</html>