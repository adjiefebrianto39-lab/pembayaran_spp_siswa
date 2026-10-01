<?php

include "koneksi.php";

if (isset($_POST['simpan'])) {

    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    mysqli_query(
        $koneksi,
        "INSERT INTO spp
        (tahun, nominal)
        VALUES
        ('$tahun', '$nominal')"
    );

    header("Location: spp.php");

    exit;

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Tambah SPP</title>

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

                <h3 class="fw-bold mb-1">
                    Tambah Data SPP
                </h3>

                <p class="text-muted mb-4">
                    Masukkan tahun dan nominal SPP
                </p>


                <form method="POST">


                    <div class="mb-3">

                        <label class="form-label">
                            Tahun
                        </label>

                        <input
                            type="number"
                            name="tahun"
                            class="form-control"
                            placeholder="Contoh: 2026"
                            required
                        >

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Nominal SPP
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                Rp
                            </span>

                            <input
                                type="number"
                                name="nominal"
                                class="form-control"
                                placeholder="150000"
                                required
                            >

                        </div>

                    </div>


                    <hr>


                    <button
                        type="submit"
                        name="simpan"
                        class="btn btn-primary"
                    >
                        Simpan
                    </button>


                    <a
                        href="spp.php"
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