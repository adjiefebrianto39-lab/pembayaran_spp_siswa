<?php

include "koneksi.php";

if (isset($_POST['bayar'])) {

    $status = $_POST['status'];
    $nisn = $_POST['nisn'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
    $batas_pembayaran = $_POST['batas_pembayaran'];
    $jumlah_bulan = $_POST['jumlah_bulan'];
    $id_spp = $_POST['id_spp'];
    $nominal_bayar = $_POST['nominal_bayar'];
    $jumlah_bayar = $_POST['jumlah_bayar'];

    $kembalian = $jumlah_bayar - $nominal_bayar;

    mysqli_query($koneksi, "
        INSERT INTO pembayaran
        (
            status,
            nisn,
            tgl_bayar,
            tgl_terakhir_bayar,
            batas_pembayaran,
            jumlah_bulan,
            id_spp,
            nominal_bayar,
            jumlah_bayar,
            kembalian
        )
        VALUES
        (
            '$status',
            '$nisn',
            '$tgl_bayar',
            '$tgl_terakhir_bayar',
            '$batas_pembayaran',
            '$jumlah_bulan',
            '$id_spp',
            '$nominal_bayar',
            '$jumlah_bayar',
            '$kembalian'
        )
    ");

    echo "Pembayaran berhasil";

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Pembayaran SPP</title>

</head>

<body>

<h2>Pembayaran SPP</h2>

<a href="dashboard.php">Dashboard</a>

<br><br>

<form method="POST">

    <p>Status</p>

    <select name="status">

        <option value="Belum Lunas">
            Belum Lunas
        </option>

        <option value="Sudah Lunas">
            Sudah Lunas
        </option>

    </select>

    <p>NISN</p>

    <input
        type="text"
        name="nisn"
        required
    >

    <p>Tanggal Bayar</p>

    <input
        type="date"
        name="tgl_bayar"
        required
    >

    <p>Tanggal Terakhir Bayar</p>

    <input
        type="date"
        name="tgl_terakhir_bayar"
        required
    >

    <p>Batas Pembayaran</p>

    <input
        type="date"
        name="batas_pembayaran"
        required
    >

    <p>Jumlah Bulan</p>

    <input
        type="number"
        name="jumlah_bulan"
        required
    >

    <p>ID SPP</p>

    <input
        type="number"
        name="id_spp"
        required
    >

    <p>Nominal Bayar</p>

    <input
        type="number"
        name="nominal_bayar"
        required
    >

    <p>Jumlah Bayar</p>

    <input
        type="number"
        name="jumlah_bayar"
        required
    >

    <br><br>

    <button type="submit" name="bayar">
        Bayar
    </button>

</form>

</body>

</html>