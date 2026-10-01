<?php

include "koneksi.php";

if (isset($_POST['simpan'])) {

    $nama_kelas = $_POST['nama_kelas'];

    mysqli_query(
        $koneksi,
        "INSERT INTO kelas (nama_kelas)
         VALUES ('$nama_kelas')"
    );

    header("Location: kelas.php");

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Tambah Kelas</title>

</head>

<body>

<h2>Tambah Kelas</h2>

<form method="POST">

    <p>Nama Kelas</p>

    <input
        type="text"
        name="nama_kelas"
        placeholder="Contoh: X RPL 1"
    >

    <br><br>

    <button type="submit" name="simpan">
        Simpan
    </button>

</form>

<br>

<a href="kelas.php">
    Kembali
</a>

</body>

</html>