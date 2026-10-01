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
    exit;

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Tambah Kelas</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="col-md-6 mx-auto">

        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h3 class="fw-bold mb-4">
                    Tambah Kelas
                </h3>

                <form method="POST">

                    <label class="form-label">
                        Nama Kelas
                    </label>

                    <input
                        type="text"
                        name="nama_kelas"
                        class="form-control"
                        placeholder="Contoh: X RPL 1"
                        required
                    >

                    <br>

                    <button
                        type="submit"
                        name="simpan"
                        class="btn btn-primary"
                    >
                        Simpan
                    </button>

                    <a
                        href="kelas.php"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>

                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>