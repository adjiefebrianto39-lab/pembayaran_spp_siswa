<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM spp
     WHERE id_spp='$id'"
);

$spp = mysqli_fetch_assoc($data);


if (isset($_POST['update'])) {

    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    mysqli_query($koneksi, "

        UPDATE spp

        SET
            tahun='$tahun',
            nominal='$nominal'

        WHERE id_spp='$id'

    ");

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

    <title>Edit SPP</title>

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
                    Edit Data SPP
                </h3>

                <p class="text-muted mb-4">
                    Ubah tahun atau nominal SPP
                </p>


                <form method="POST">


                    <div class="mb-3">

                        <label class="form-label">
                            ID SPP
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="<?= $spp['id_spp']; ?>"
                            disabled
                        >

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Tahun
                        </label>

                        <input
                            type="number"
                            name="tahun"
                            class="form-control"
                            value="<?= $spp['tahun']; ?>"
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
                                value="<?= $spp['nominal']; ?>"
                                required
                            >

                        </div>

                    </div>


                    <hr>


                    <button
                        type="submit"
                        name="update"
                        class="btn btn-primary"
                    >
                        Update Data
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