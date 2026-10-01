<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM kelas WHERE id_kelas='$id'"
);

$kelas = mysqli_fetch_assoc($data);


if (isset($_POST['update'])) {

    $nama_kelas = $_POST['nama_kelas'];

    mysqli_query(
        $koneksi,
        "UPDATE kelas
         SET nama_kelas='$nama_kelas'
         WHERE id_kelas='$id'"
    );

    header("Location: kelas.php");

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Edit Kelas</title>

</head>

<body>

<h2>Edit Kelas</h2>

<form method="POST">

    <p>Nama Kelas</p>

    <input
        type="text"
        name="nama_kelas"
        value="<?= $kelas['nama_kelas']; ?>"
    >

    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>

<br>

<a href="kelas.php">
    Kembali
</a>

</body>

</html>