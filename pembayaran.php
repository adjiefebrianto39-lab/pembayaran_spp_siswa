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

    echo "<script>
            alert('Pembayaran berhasil!');
            window.location='cek_pembayaran.php';
          </script>";

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Pembayaran SPP</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="mb-4">

        <a
            href="dashboard.php"
            class="btn btn-secondary mb-3"
        >
            ← Dashboard
        </a>

        <h2 class="fw-bold">
            Pembayaran SPP
        </h2>

        <p class="text-muted">
            Masukkan data transaksi pembayaran siswa
        </p>

    </div>


    <div class="card shadow border-0">

        <div class="card-body p-4">

            <form method="POST">

                <div class="row">


                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Status
                            </label>

                            <select
                                name="status"
                                class="form-select"
                            >

                                <option value="belum lunas">
                                    Belum Lunas
                                </option>

                                <option value="sudah lunas">
                                    Sudah Lunas
                                </option>

                            </select>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                NISN
                            </label>

                            <input
                                type="text"
                                name="nisn"
                                class="form-control"
                                required
                            >

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Tanggal Bayar
                            </label>

                            <input
                                type="date"
                                name="tgl_bayar"
                                class="form-control"
                                required
                            >

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Tanggal Terakhir Bayar
                            </label>

                            <input
                                type="date"
                                name="tgl_terakhir_bayar"
                                class="form-control"
                                required
                            >

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Batas Pembayaran
                            </label>

                            <input
                                type="date"
                                name="batas_pembayaran"
                                class="form-control"
                                required
                            >

                        </div>

                    </div>


                    <div class="col-md-6">


                        <div class="mb-3">

                            <label class="form-label">
                                Jumlah Bulan
                            </label>

                            <input
                                type="number"
                                name="jumlah_bulan"
                                class="form-control"
                                required
                            >

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                ID SPP
                            </label>

                            <input
                                type="number"
                                name="id_spp"
                                class="form-control"
                                required
                            >

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Nominal Bayar
                            </label>

                            <input
                                type="number"
                                name="nominal_bayar"
                                class="form-control"
                                placeholder="150000"
                                required
                            >

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Jumlah Uang Dibayar
                            </label>

                            <input
                                type="number"
                                name="jumlah_bayar"
                                class="form-control"
                                placeholder="200000"
                                required
                            >

                        </div>


                        <div class="alert alert-info">

                            <strong>
                                Catatan:
                            </strong>

                            <br>

                            Sistem akan menghitung kembalian
                            secara otomatis.

                        </div>

                    </div>

                </div>


                <hr>


                <button
                    type="submit"
                    name="bayar"
                    class="btn btn-success"
                >
                    💳 Proses Pembayaran
                </button>

                <a
                    href="dashboard.php"
                    class="btn btn-secondary"
                >
                    Batal
                </a>

            </form>

        </div>

    </div>

</div>

</body>

</html>