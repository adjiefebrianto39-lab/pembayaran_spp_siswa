<?php

include "koneksi.php";

if (isset($_POST['simpan'])) {

    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_spp = $_POST['id_spp'];

    mysqli_query($koneksi, "
        INSERT INTO siswa
        (nisn, nis, nama, id_kelas, nama_kelas, alamat, no_telp, id_spp)
        VALUES
        ('$nisn', '$nis', '$nama', '$id_kelas', '$nama_kelas', '$alamat', '$no_telp', '$id_spp')
    ");

    header("Location: siswa.php");

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Siswa</title>
</head>

<body>

<h2>Tambah Siswa</h2>

<form method="POST">

    <p>NISN</p>
    <input type="text" name="nisn">

    <p>NIS</p>
    <input type="text" name="nis">

    <p>Nama</p>
    <input type="text" name="nama">

    <p>ID Kelas</p>
    <input type="number" name="id_kelas">

    <p>Nama Kelas</p>
    <input type="text" name="nama_kelas">

    <p>Alamat</p>
    <textarea name="alamat"></textarea>

    <p>No Telp</p>
    <input type="text" name="no_telp">

    <p>ID SPP</p>
    <input type="number" name="id_spp">

    <br><br>

    <button type="submit" name="simpan">
        Simpan
    </button>

</form>

<br>

<a href="siswa.php">Kembali</a>

</body>

</html>