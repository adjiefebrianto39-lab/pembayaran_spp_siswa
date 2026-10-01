<?php

include "koneksi.php";

$nisn = $_GET['nisn'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM siswa WHERE nisn='$nisn'"
);

$siswa = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_spp = $_POST['id_spp'];

    mysqli_query($koneksi, "
        UPDATE siswa SET
        nis='$nis',
        nama='$nama',
        id_kelas='$id_kelas',
        nama_kelas='$nama_kelas',
        alamat='$alamat',
        no_telp='$no_telp',
        id_spp='$id_spp'
        WHERE nisn='$nisn'
    ");

    header("Location: siswa.php");

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Siswa</title>
</head>

<body>

<h2>Edit Siswa</h2>

<form method="POST">

    <p>NISN</p>
    <input
        type="text"
        value="<?= $siswa['nisn']; ?>"
        disabled
    >

    <p>NIS</p>
    <input
        type="text"
        name="nis"
        value="<?= $siswa['nis']; ?>"
    >

    <p>Nama</p>
    <input
        type="text"
        name="nama"
        value="<?= $siswa['nama']; ?>"
    >

    <p>ID Kelas</p>
    <input
        type="number"
        name="id_kelas"
        value="<?= $siswa['id_kelas']; ?>"
    >

    <p>Nama Kelas</p>
    <input
        type="text"
        name="nama_kelas"
        value="<?= $siswa['nama_kelas']; ?>"
    >

    <p>Alamat</p>
    <textarea name="alamat"><?= $siswa['alamat']; ?></textarea>

    <p>No Telp</p>
    <input
        type="text"
        name="no_telp"
        value="<?= $siswa['no_telp']; ?>"
    >

    <p>ID SPP</p>
    <input
        type="number"
        name="id_spp"
        value="<?= $siswa['id_spp']; ?>"
    >

    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>

<br>

<a href="siswa.php">Kembali</a>

</body>

</html>